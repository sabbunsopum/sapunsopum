<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myBBMember (";
    $sql .= "myMemberID int(10) unsigned auto_increment,";
    $sql .= "youEmail varchar(40) NOT NULL,";
    $sql .= "youNickName varchar(10) UNIQUE NULL,";
    $sql .= "youName varchar(20) NOT NULL,";
    $sql .= "youPass varchar(40) NOT NULL,";
    $sql .= "youPhone varchar(20) NOT NULL,";

    $sql .= "youGender enum('남자', '여자') DEFAULT NULL,";


    $sql .= "youPhoto varchar(255) DEFAULT NULL,";


    $sql .= "blogImgFile varchar(100) DEFAULT NULL,";
    $sql .= "blogImgSize varchar(100) DEFAULT NULL,";

    
    $sql .= "youShop varchar(20) NOT NULL,";
    $sql .= "youAdress varchar(255) NOT NULL,";
    $sql .= "youShopNum varchar(20) NOT NULL,";

    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myMemberID)";
    $sql .= ") charset=utf8;";

    $connect -> query($sql);
?>