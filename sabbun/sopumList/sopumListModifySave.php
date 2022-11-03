<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

 
    $myMemberID = $_SESSION['myMemberID'];

    $shopListID = $_GET['shopListID'];

    $shopName = $_POST['shopName'];
    $shopListContents = $_POST['shopListContents'];
    $shopHours = $_POST['shopHours'];
    $shopNum = $_POST['shopNum'];
    $goodsList = $_POST['goodsList'];
    $shopAdress = $_POST['shopAdress'];
    $shopTag = $_POST['shopTag'];

    $sopumImgFile = $_FILES['shopProfile'];
    $sopumImgSize = $_FILES['shopProfile']['size'];
    $sopumImgType = $_FILES['shopProfile']['type'];
    $sopumImgName = $_FILES['shopProfile']['name'];
    $sopumImgTmp = $_FILES['shopProfile']['tmp_name'];

    
    $sql = "SELECT myMemberID FROM sopumShopList WHERE shopListID = {$shopListID}";
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);

    $mysql = "SELECT myMemberID FROM myBMember WHERE myMemberID = {$myMemberID}";
    $myresult = $connect -> query($mysql);
    $myinfo = $myresult -> fetch_array(MYSQLI_ASSOC);
   

    if($myMemberID == $info['myMemberID'] && $myMemberID == $myinfo['myMemberID']){
        $shopsql = "UPDATE sopumShopList SET shopName = '{$shopName}', shopListContents = '{$shopListContents}', shopHours = '{$shopHours}', shopNum = '{$shopNum}', goodsList = '{$goodsList}', shopAdress = '{$shopAdress}', shopTag = '{$shopTag}' WHERE shopListID = '{$shopListID}'";
        $shopresult = $connect -> query($shopsql);    
    
        //이미지 파일명 확인
        if($sopumImgType){
            $fileTypeExtension = explode("/", $sopumImgType);
            $fileType = $fileTypeExtension[0];      //image
            $fileExtension = $fileTypeExtension[1]; //png
            //이미지 타입 확인
            if($fileType == "image"){
                if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                    $sopumImgDir = "img/";
                    $sopumImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                    //echo "이미지 파일이 맞네요!";
                    $sql = "UPDATE sopumShopList SET shopImgFile = '{$sopumImgName}', shopImgSize = '{$sopumImgSize}' WHERE shopListID = '{$shopListID}'";
                    $result2 = $connect -> query($sql);
                    $result2 = move_uploaded_file($sopumImgTmp, $sopumImgDir.$sopumImgName);
    
                } else {
                    echo "<script>alert('지원하는 이미지 파일이 아닙니다.'); history.back(1)</script>";
                }
            }
        }else {
            echo "<p>프로필 사진을 첨부하지 않았습니다. <br> 마이 페이지에서 추가 해주세요!</p>";
            
        }
 
    
    }else{
        echo "<script>alert('내가 작성한 글이 아닙니다.'); history.back(1)</script>";
    }
    

    //이미지 사이즈 확인
    if($sopumImgSize > 1000000){
        echo "<script>alert('이미지 용량이 1메가를 초과했습니다.'); history.back(1)</script>";
        exit;
    }else{
        "<script>alert('소품샵 정보가 수정됐습니다.');</script>";
        Header("Location: sopumList.php");
    }

   
    


?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.js"></script>

<script>



</script>