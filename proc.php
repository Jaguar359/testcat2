<?php
require_once 'classes/classes.php';

if ($_GET['action'] == 'stroke'){
    $cat = new Cat;
    $cat->stroke();
    echo $cat->mood;
}

if ($_GET['action'] == 'scare'){
    $cat = new Cat;
    $cat->scare();
    echo $cat->mood;
}