<?php 
if(isset($_POST['submit'])){
    $to = "luedecraig@gmail.com";
    $from = "rsvp@luedecraig.com";
    $name = $_POST['name'];
    $subject = $name . " - RSVP Form Submission";
    $message = $name . " submitted their RSVP for the Luedecraig wedding. They marked themselves as " . $attending . ", and have requested " . $_POST['seats'] . " seats." . "\n\n" . "Dietary Restricions:\n" . $_POST['food'] . "\n\n" . "Song Recommendations:\n" . $_POST['songs'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    header('Location: faq.html');
    }
?>