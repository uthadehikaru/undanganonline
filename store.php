<?php
require_once('helper.php');

$file_open = fopen("data/messages.csv", "a+");
$no_rows = count(file("data/messages.csv"));
$no_rows++;
$form_data = [
    $no_rows,
    clean_text($_POST['name']),
    clean_text($_POST['place']),
    clean_text($_POST['message']),
];
fputcsv($file_open, $form_data);
header('location:index.php?message=received#fh5co-started');