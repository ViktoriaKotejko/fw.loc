<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">

    <title> <?= $meta['title'] ?> </title>
    <meta name="description" content="<?= $meta['desc'] ?>">
    <meta name="keywords" content="<?= $meta['keywords'] ?>">
</head>
<body>
    <div class="container">
         <?php  if(!empty($menu)):?>
            <ul class="nav nav-pills">
                <li><a href="page/about">About</a></li>
                 <?php foreach ($menu as  $item): ?>
                    <li><a href="category/<?= $item['id'] ?>"> <?= $item['title'] ?></a></li>
                 <?php endforeach; ?>
            </ul>
         <?php endif; ?>
        <h1>Hello, world!</h1>
    </div>

    <?= $content ?>



<script src = "/bootstrap/js/bootstrap.js"></script>


</body>
</html>
