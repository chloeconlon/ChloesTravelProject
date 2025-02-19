<?php
if (!isset($_COOKIE["selected_avatar"])) {

    //Set cookie for avatar ID
    setcookie("selected_avatar", 0, time() + (86400 * 30), "/"); //Expires in 70 days
}
;


echo "<img onclick='showModalImages()' title='Change Avatar' src='images/Avatars/avatar" . $avatarId . ".jpg' alt = 'Animal Stars' width='130px'>";
?>