<?php


$data = json_decode(file_get_contents(__DIR__ . '/../data/products.json'), true);


$cardTpl = file_get_contents(__DIR__ . '/../templates/card_template.html');
$productTpl = file_get_contents(__DIR__ . '/../templates/product_template.html');

$cardsHtml = '';
foreach ($data as $item) {
  $cardsHtml .= strtr($cardTpl, [
    '{{id}}' => $item['id'],
    '{{name}}' => $item['name'],
    '{{game}}' => $item['game'],
    '{{preview}}' => $item['preview'],
    '{{price}}' => $item['price'],
    '{{status}}' => $item['status'],
    '{{link}}' => 'product/' . $item['id'] . '.php',
  ]);

  // Создаем product/*.php
  $productContent = strtr($productTpl, [
    '{{id}}' => $item['id'],
    '{{name}}' => $item['name'],
    '{{game}}' => $item['game'],
    '{{description}}' => nl2br($item['description']),
    '{{price}}' => $item['price'],
    '{{preview}}' => $item['preview'],
    '{{status}}' => $item['status'],
    '{{aim}}' => nl2br($item['aim'] ?? ''),
    '{{esp}}' => nl2br($item['esp'] ?? ''),
    '{{misc}}' => nl2br($item['misc'] ?? ''),
    '{{requirements}}' => nl2br($item['requirements'] ?? ''),
    '{{price_1d}}' => $item['price_1d'] ?? '',
    '{{link_1d}}' => $item['link_1d'] ?? '',
    '{{price_7d}}' => $item['price_7d'] ?? '',
    '{{link_7d}}' => $item['link_7d'] ?? '',
    '{{price_30d}}' => $item['price_30d'] ?? '',
    '{{link_30d}}' => $item['link_30d'] ?? '',
  ]);
  file_put_contents(__DIR__ . '/../product/' . $item['id'] . '.php', $productContent);
}


$indexBase = file_get_contents(__DIR__ . '/../templates/index_base.php');
$indexContent = str_replace('{{cards}}', $cardsHtml, $indexBase);
file_put_contents(__DIR__ . '/../index.php', $indexContent);

header('Location: index.php');
exit;