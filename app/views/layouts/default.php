<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">

    <title>Template</title>
</head>
<body>
    <div class="container">
        <ul class="nav nav-pills">
             <?php foreach ($menu as  $item): ?>
                <li><a href="category/<?= $item['id'] ?>"> <?= $item['title'] ?></a></li>
             <?php endforeach; ?>
        </ul>
        <h1>Hello, world!</h1>
    </div>

    <?= $content ?>
    <?=debug(\vendor\core\Db::$countsql)?>
    <?=debug(\vendor\core\Db::$queries)?>


<script src = "/bootstrap/js/bootstrap.js"></script>


</body>
</html>
