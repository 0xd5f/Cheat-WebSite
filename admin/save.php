<?php


$filename = __DIR__ . '/../data/products.json';
$data = file_exists($filename) ? json_decode(file_get_contents($filename), true) : [];


if (!empty($_POST['id'])) {
    foreach ($data as &$item) {
        if ($item['id'] === $_POST['id']) {
            $item = array_merge($item, $_POST);
            break;
        }
    }
    unset($item);
} else {
    $_POST['id'] = uniqid();
    $data[] = $_POST;
}

file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header('Location: index.php');
exit;
