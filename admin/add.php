<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Добавить товар | Cerberus Admin</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <div class="content-wrapper p-4">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">Добавить новый товар</h1>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <form action="save.php" method="post">
          <div class="card-body">
            <div class="form-group">
              <label>Название</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Игра</label>
              <input type="text" name="game" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Краткое описание</label>
              <textarea name="description" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label>Минимальная цена (₽)</label>
              <input type="number" name="price" class="form-control">
            </div>
            <div class="form-group">
              <label>Превью (путь к изображению)</label>
              <input type="text" name="preview" class="form-control">
            </div>
            <div class="form-group">
              <label>Статус</label>
              <select name="status" class="form-control">
                <option value="Updated">Updated</option>
                <option value="Undetected">Undetected</option>
                <option value="Coming Soon">Coming Soon</option>
              </select>
            </div>

            <hr>
            <h5>Полное описание</h5>
            <div class="form-group">
              <label>Системные требования</label>
              <textarea name="requirements" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label>AIM</label>
              <textarea name="aim" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label>ESP</label>
              <textarea name="esp" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label>MISC</label>
              <textarea name="misc" class="form-control" rows="4"></textarea>
            </div>

            <hr>
            <h5>Тарифы</h5>
            <div class="form-group">
              <label>1 день — Цена</label>
              <input type="number" name="price_1d" class="form-control">
              <label>1 день — Ссылка</label>
              <input type="text" name="link_1d" class="form-control">
            </div>
            <div class="form-group">
              <label>7 дней — Цена</label>
              <input type="number" name="price_7d" class="form-control">
              <label>7 дней — Ссылка</label>
              <input type="text" name="link_7d" class="form-control">
            </div>
            <div class="form-group">
              <label>30 дней — Цена</label>
              <input type="number" name="price_30d" class="form-control">
              <label>30 дней — Ссылка</label>
              <input type="text" name="link_30d" class="form-control">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Сохранить</button>
            <a href="index.php" class="btn btn-secondary">Назад</a>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
