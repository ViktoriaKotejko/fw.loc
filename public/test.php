<?php

require 'rb.php';
$db = require '../config/config_db.php';
R::setup($db['dns'], $db['user'], $db['pass']);
R::fancyDebug(TRUE);
//R::freeze(true);


// Create
/*$cat = R::dispense('category');
$cat->title = 'Категория 3';
$id = R::store($cat);
var_dump($id);*/

// Read
//$cat = R::load('category',2);
//print_r($cat);
//echo $cat->title;
//echo $cat->['title'];

// Update
/*$cat = R::load('category',4);
echo $cat->title . '<br>';
$cat->id = 'Категория 3';
R::store($cat);
echo $cat->title;*/

/*$cat = R::dispense('category');
$cat->title = 'Категория 3!!!!';
$cat->id = 3;
R::store($cat);*/

// Delete
//$cat = R::load('category',2);
//R::trash($cat);

//R::wipe('category');

//$cats = R::findAll('category');
//$cats = R::findAll('category', 'id > ?', [2]);
//$cats = R::findAll('category', 'title like ?', ['%Кат%']);

echo '<pre>';
print_r($cats);


