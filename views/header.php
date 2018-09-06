<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $arg1['title'] ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo URL . 'admin' ?>">Container</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL?>admin/createart">Создать статью</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL?>admin/showarts">Посмотреть статьи</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <?php if(isset($_SESSION['authUser'])): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['userLogin']?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown07">
<!--              <a class="dropdown-item" href="#">Action</a>-->
<!--              <a class="dropdown-item" href="#">Another action</a>-->
              <a class="dropdown-item" href="/login/logout">Выход</a>
            </div>
          </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL?>login">Login</a>
            </li>
          <?php endif;?>
        </ul>
      </div>
    </div>
  </nav>
</header>
<main class="app-content py-3">
<div class="container">
  <ol class="breadcrumb">
    <?php echo $arg1['title'] ?>
  </ol>
  <ul class="nav nav-tabs mb-3">
    <li class="nav-item"><a class="nav-link" href="<?php echo URL?>admin/createart">Создать статью</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo URL?>admin/showarts">Посмотреть статьи</a></li>
  </ul>
</div>

