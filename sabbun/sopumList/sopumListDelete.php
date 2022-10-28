<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $shopListID = $_GET['shopListID'];
    $shopListID = $connect -> real_escape_string($shopListID);
    $myMemberID = $_SESSION['myMemberID'];


    $sql = "SELECT myMemberID FROM sopumShopList WHERE shopListID = {$shopListID}";
    $result = $connect -> query($sql);
    $listInfo = $result -> fetch_array(MYSQLI_ASSOC);


    $sql = "SELECT myMemberID FROM myBMember WHERE myMemberID = {$myMemberID}";
    $result2 = $connect -> query($sql);
    $memberInfo = $result2 -> fetch_array(MYSQLI_ASSOC);

    
    if($memberInfo['myMemberID'] === $myMemberID && $listInfo['myMemberID'] === $myMemberID ){
        $sql = "DELETE FROM sopumShopList WHERE shopListID = {$shopListID}";
        $connect -> query($sql);
        echo "<script>alert('삭제했습니다.')</script>";
    } else {
        echo "<script>alert('내가 작성한 글이 아닙니다. 다시 한번 확인해주세요!')</script>";
    } 
    
    Header("Location: sopumList.php");
?>
<script>
</script>