<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
    
    $myMemberID = $_POST['myMemberID'];

    $sql = "DELETE FROM myTip WHERE myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);
    
    echo json_encode(array("info" => $myTipID));
?>