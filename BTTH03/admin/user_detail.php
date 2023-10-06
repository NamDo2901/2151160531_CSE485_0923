<?php
if(isset($_GET['id'])){
    $uid = $_GET['id'];
    $sql = "SELECT * FROM sach WHERE id='$uid'";
    echo $sql;
}
