<?php 
    $to = "luedecraig@gmail.com";
    $from = "rsvp@luedecraig.com";
    $name = $_POST['name'];
    $attending = $_POST['attending'];
    $subject = $name . " - RSVP Form Submission";
    $message = $name . " submitted their RSVP for the Luedecraig wedding. They marked themselves as " . $attending . ", and have requested " . $_POST['seats'] . " seats." . "\n\n" . "Dietary Restricions:\n" . $_POST['food'] . "\n\n" . "Song Recommendations:\n" . $_POST['songs'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location: faq.html');
?>