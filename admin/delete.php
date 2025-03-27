<?php


$id = $_GET['id'] ?? '';
$filename = __DIR__ . '/../data/products.json';
$data = file_exists($filename) ? json_decode(file_get_contents($filename), true) : [];


$data = array_filter($data, function ($item) use ($id) {
  return $item['id'] !== $id;
});

file_put_contents($filename, json_encode(array_values($data), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header('Location: index.php');
exit;
