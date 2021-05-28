<?php
$getComponentCb = !empty($params['get_component']) ? $params['get_component'] : null;
?>
<ul class="card-list<?= $class ?>">
    <?php foreach ($entityList as $entityData) { ?>
        <li class="card-list__item">
            <?php
            if (is_callable($getComponentCb)) {
                call_user_func($getComponentCb, $entityData);
            }
            ?>
        </li>
    <?php } ?>
</ul>
