<?php
$data = json_decode(file_get_contents(__DIR__ . '/../data/products.json'), true) ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Админка | Cerberus</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="../images/og.png" alt="Cerberus" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Cerberus Admin</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>Товары</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="add.php" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>Добавить товар</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="build.php" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>Собрать сайт</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">Список товаров</h1>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <a href="add.php" class="btn btn-success">+ Добавить товар</a>
            <a href="build.php" class="btn btn-primary">Собрать сайт</a>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Название</th>
                  <th>Игра</th>
                  <th>Цена от</th>
                  <th>Действия</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $item): ?>
                  <tr>
                    <td><?= htmlspecialchars($item['id']) ?></td>
                    <td><?= htmlspecialchars($item['name']) ?></td>
                    <td><?= htmlspecialchars($item['game']) ?></td>
                    <td><?= htmlspecialchars($item['price']) ?>₽</td>
                    <td>
                      <a href="edit.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-primary">Редактировать</a>
                      <a href="delete.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-danger">Удалить</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>
