<?php
$title = 'Frontend Quizzes';

$header = array(
    'imgsrc' => 'logo5.png',
    'imgalt' => 'logo',
    'title' => 'Frontend Quizzes',
);

$lablec = array(
    'copyright' => 'Copyright ' . date("Y") . '.',
    'company' => 'Frontend Quizzes',
);

$pages = array(
    '/' => array('fajl' => 'home', 'szoveg' => 'Home', 'menun' => array(1, 1)),
    'gallery' => array('fajl' => 'gallery', 'szoveg' => 'Gallery', 'menun' => array(1, 1)),
    'feedback' => array('fajl' => 'feedback', 'szoveg' => 'Feedback', 'menun' => array(1, 1)),
    'messages' => array('fajl' => 'messages', 'szoveg' => 'Messages', 'menun' => array(1, 1)),
    'login' => array('fajl' => 'login', 'szoveg' => 'Login', 'menun' => array(1, 0)),
    'logout' => array('fajl' => 'logout', 'szoveg' => 'Logout', 'menun' => array(0, 1)),
    'singin' => array('fajl' => 'singin', 'szoveg' => '', 'menun' => array(0, 0)),
    'singup' => array('fajl' => 'singup', 'szoveg' => '', 'menun' => array(0, 0)),
    'feedback_message' => array('fajl' => 'feedback_message', 'szoveg' => '', 'menun' => array(0, 0))
);

$hiba_oldal = array('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
