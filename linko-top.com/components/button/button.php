<?php
$content = !empty($params['content']) ? $params['content'] : '';
$link = !empty($params['link']) ? "href=\"{$params['link']}\"" : '';
$type = !empty($params['type']) ? $params['type'] : 'link';
$isDisabled = !empty($params['is_disabled']) ? $params['is_disabled'] : false;
?>

<?php if ($type === 'button') { ?>
    <button class="button<?= $class ?>" <?= $attributes ?> type="button" <?= $isDisabled ? 'disabled' : '' ?>>
        <?php
        if (!is_array($content)) {
            echo $content;
        } else {
            foreach ($content as $class => $phrase) {
                echo "<span class=\"button__phrase button__phrase--$class\">$phrase</span>";
            }
        }
        ?>
    </button>
<?php } elseif ($type === 'my_custom_type') { ?>
    <!--  Add custom markup  -->
<?php } else { ?>
    <a class="button<?= $class ?>" <?= $link ?> <?= $attributes ?>>
        <?php
        if (!is_array($content)) {
            echo $content;
        } else {
            foreach ($content as $class => $phrase) {
                echo "<span class=\"button__phrase button__phrase--$class\">$phrase</span>";
            }
        }
        ?>

        <?php if ($type === 'load-more') { ?>
            <div class="load-animation">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        <?php } ?>
    </a>
<?php } ?>

