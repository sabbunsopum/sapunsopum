<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $youPass = $_POST['youPass'];
    $myMemberID = $_SESSION['myMemberID'];

    $sql = "UPDATE myBMember SET youPass = '{$youPass}' WHERE myMemberID = '{$myMemberID}'";
    $connect -> query($sql);
    
?>
<script>
    alert("수정 되었습니다. ");
    location.href = "myPageSetting.php";
</script>