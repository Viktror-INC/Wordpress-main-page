<?php
$icon = !empty($params['icon']) ? $params['icon'] : null;
$isPng = !empty($params['is_png']) ? $params['is_png'] : false;
$title = !empty($params['title']) ? $params['title'] : '';

if ($isPng) { ?>
    <span class="icon <?= $icon, $class ?>" <?= !empty($title) ? 'title="' . $title . '"' : ''?>></span>
<?php } else { ?>
    <svg class="icon <?= $icon, $class ?>">
        <?= !empty($title) ? '<title>' . $title . '</title>' : ''?>
        <use xlink:href="<?= get_template_directory_uri() . '/img/dest/sprite.svg#' . $icon ?>">
    </svg>
<?php } ?>
