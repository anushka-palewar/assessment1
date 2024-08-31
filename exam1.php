<?php
    if(!empty($_POST)){
        $name=  $_POST['name'];
        $food=  $_POST['food'] ;
    }
    date_default_timezone_set('Asia/Kolkata');
    $time = date('H');
            if ($time >= 2 && $time < 11) {
                $greet = 'Good Morning';
            } elseif ($time >= 11 && $time < 16) {
                $greet = 'Good Afternoon';
            } elseif ($time >= 16 && $time < 21) {
                $greet = 'Good Evening';
            } else {
                $greet = 'Good Night';
            }

            include 'views/exam1.view.php';
?>