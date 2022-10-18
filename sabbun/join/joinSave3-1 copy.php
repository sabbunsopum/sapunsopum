<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지_4</title>

    <link rel="stylesheet" href="../html/assets/css/fonts.css">
    <link rel="stylesheet" href="../html/assets/css/reset.css">
    <link rel="stylesheet" href="../html/assets/css/common.css">
    <link rel="stylesheet" href="../html/assets/css/join.css">
</head>
<body>
    <header id="header" class="header">
        <div class="logo">
            <img src="../html/assets/img/temp_logo.svg" alt="사뿐소품 로고">
        </div>
    </header>
    <main id="main">
        <section id="join" class="container nanum">
            <div class="join__step active4">
                <em>4</em>/4
            </div>
            <div class="join__desc">
                <h1>
                    <span>회원가입 완료!</span><br>
                    함께 해주셔서 감사합니다 :)
                </h1>
                <p>로그인하시면 더욱 다양한 서비스와 혜택을 제공 받으실 수 있습니다.</p>
<?php
    include "../connect/connect.php";

    $youEmail = $_POST['youEmail'];
    $youNickName = $_POST['youNickName'];
    $youName = $_POST['youName'];
    $youPass = $_POST['youPass'];
    $youPhone = $_POST['youPhone'];
    $youShop = $_POST['youShop'];
    $youAdress = $_POST['youAdress'];
    $youShopNum = $_POST['youShopNum'];
    $regTime = time();




   
    




    $youEmail = $connect -> real_escape_string(trim($youEmail));
    $youNickName = $connect -> real_escape_string(trim($youNickName));
    $youName = $connect -> real_escape_string(trim($youName));
    $youPass = $connect -> real_escape_string(trim($youPass));
    $youPhone = $connect -> real_escape_string(trim($youPhone));
    $youShop = $connect -> real_escape_string(trim($youShop));
    $youAdress = $connect -> real_escape_string(trim($youAdress));
    $youShopNum = $connect -> real_escape_string(trim($youShopNum));
    // $youPass = sha1("web".$youPass);

    // 회원가입
    $sql = "INSERT INTO myBBMember(youEmail, youNickName, youName, youPass, youPhone, youShop, youAdress, youShopNum, regTime, blogImgFile, blogImgSize) VALUES('$youEmail', '$youNickName', '$youName', '$youPass', '$youPhone', '$youShop', '$youAdress', '$youShopNum', '$regTime', '$blogImgName', '$blogImgSize')";
    

    $blogImgFile = $_FILES['blogFile'];
    $blogImgSize = $_FILES['blogFile']['size'];
    $blogImgType = $_FILES['blogFile']['type'];
    $blogImgName = $_FILES['blogFile']['name'];
    $blogImgTmp = $_FILES['blogFile']['tmp_name'];

    echo "<pre>";
    var_dump($blogImgFile);
    echo "</pre>";

    if($blogImgType){
        $fileTypeExtension = explode("/", $blogImgType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png
        //이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $blogImgDir = "../assets/img/blog/";
                $blogImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                //echo "이미지 파일이 맞네요!";
 
            } else {
                echo "<script>alert('지원하는 이미지 파일이 아닙니다.'); history.back(1)</script>";
            }
        }
    } else {
        echo "이미지 파일이 첨부하지 않았습니다.";
    }
    //이미지 사이즈 확인
    if($blogImgSize > 1000000){
        echo "<script>alert('이미지 용량이 1메가를 초과했습니다.'); history.back(1)</script>";
        exit;
    }


    $result = $connect -> query($sql);
    $result = move_uploaded_file($blogImgTmp, $blogImgDir.$blogImgName);
    
    
    if($result){
        echo "회원가입을 축하합니다. 로그인을 해주세요!";
    } else {
        echo "에러발생 -- 관리자에게 문의하세요!";
    }
?>
            </div>
            <div class="join__result">
                <div class="img">
                    <img src="../html/assets/img/hand+heart 1@3x.png" alt="손으로 감싼 하트">
                </div>
                <div class="btn">
                    <a href="main.html">홈으로 가기</a>
                    <a href="login.html">로그인 하기</a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>