<?php

$titre = $_POST['titre'];
$desc = $_POST['description'];
$image = $_FILES['image'];
$img_loc = $_FILES['image']['tmp_name'];
$img_name = $_FILES['image']['name'];
$img_des = "../uploads/".$img_name;