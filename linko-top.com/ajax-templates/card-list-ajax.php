<?php
$postsPerPage = (int)$_POST['postPerPage'];
$countCards = (int)$_POST['countCards'];

$queryResult = query([
    'type' => 'post',
    'identifier_required' => false,
]);
$maxPostsCount = count($queryResult);
$postsToSend = array_slice($queryResult, $countCards, $postsPerPage);

$data_array = [
    'isEmpty' => false,
];

if ($maxPostsCount <= $countCards + $postsPerPage) {
    $data_array['isEmpty'] = true;
}

ob_start();
if (is_array($postsToSend)) {
    foreach ($postsToSend as $entityData) { ?>
        <li class="card-list__item">
            <?php
            get_component('card', [
                'entity_data' => $entityData
            ]);
            ?>
        </li>
    <?php }
}

$data_array['content'] = ob_get_clean();

@ob_clean();
header('Content-type: application/json; charset=utf-8');

$jsonData = json_encode($data_array);
echo $jsonData;
