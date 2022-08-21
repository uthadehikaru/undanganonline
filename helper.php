<?php
require_once('config.php');

if(!file_exists('data/messages.csv')){
    touch('data/messages.csv');
    $file_open = fopen("data/messages.csv", "a+");
    $form_data = [
        [
            1,
            'Guest 1',
            'Place',
            'Lorem Ipsum Dolor Sit Amet',
        ],
        [
            2,
            'Guest 2',
            'Place',
            'Lorem Ipsum Dolor Sit Amet',
        ],
        [
            3,
            'Guest 3',
            'Place',
            'Lorem Ipsum Dolor Sit Amet',
        ],
    ];
    foreach($form_data as $data)
        fputcsv($file_open, $data);
}

if(!file_exists('data/invitations.csv'))
    touch('data/invitations.csv');

function getMessages()
{
    $messages = [];
    if (($handle = fopen("data/messages.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          $messages[] = $data;
        }
        fclose($handle);
    }
    return array_reverse($messages);
}

function getInvitations()
{
    $invitations = [];
    if (($handle = fopen("data/invitations.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          $invitations[] = $data;
        }
        fclose($handle);
    }

    return $invitations;
}

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}
?>