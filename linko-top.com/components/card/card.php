<?php
$label = !empty($params['get_label']) && is_callable($params['get_label']) ? call_user_func($params['get_label'], $entityData) : false;
$imageSrc = get_post_thumbnail_src($entityData['id']);
?>

<div class="card<?= $class ?>">
    <div class="card__top">
        <?php if ($label) { ?>
            <span class="card__label"><?= $label ?></span>
        <?php } ?>

        <img class="card__img" src="<?= $imageSrc ?>" alt="">
        <a class="card__play-link" href="<?= $entityData['url'] ?>"></a>
    </div>

    <div class="card__bottom">
        <div class="card__column">
            <p class="card__title"><?= $entityData['title'] ?></p>
        </div>
        <div class="card__column">
            <p class="card__rating-title">Rating</p>
        </div>
    </div>
</div>


