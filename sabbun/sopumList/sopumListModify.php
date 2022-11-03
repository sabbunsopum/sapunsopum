<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";


    $myMemberID = $_SESSION['myMemberID'];

    // $mySql = "SELECT * FROM myBMember";
    // $myResult = $connect -> query($mySql);
    // $myInfo = $myResult -> fetch_array(MYSQLI_ASSOC);


    $shopListID = $_GET['shopListID'];
    $sql = "SELECT * FROM sopumShopList WHERE shopListID = {$shopListID}";
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);

    
    $mysql = "SELECT myMemberID FROM myBMember WHERE myMemberID = {$myMemberID}";
    $myresult = $connect -> query($mysql);
    $myinfo = $myresult -> fetch_array(MYSQLI_ASSOC);
   

    if($myMemberID !== $info['myMemberID']){
        echo "<script>alert('내가 작성한 글이 아닙니다.'); history.back(1)</script>";
        exit;
    }
    
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sopumListView</title>
    <style>

    </style>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/fonts.css">
    <link rel="stylesheet" href="../html/assets/css/common.css">
    <link rel="stylesheet" href="../html/assets/css/reset.css">
    <link rel="stylesheet" href="../html/assets/css/header.css">
    <link rel="stylesheet" href="../html/assets/css/footer.css">
    <link rel="stylesheet" href="../html/assets/css/sopumList.css">
    <!-- <link rel="stylesheet" href="assets/css/board.css"> -->
    <!-- META -->
    <meta name="author" content="webstoryboy">
    <meta name="description" content="PHP 사이트 만들기입니다.">
    <meta name="keyword" content="사이트, 만들기, 튜토리얼, 웹스토리보이">
    <meta name="robots" content="all">

    <!-- ICON -->
    <link rel="icon" href="../html/assets/img/icon_256.png" />
    <link rel="shortcut icon" href="../html/assets/img/icon_256.png" />
    <link rel="icon" type="image/png" sizes="256x256" href="../html/assets/img/icon_256.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="../html/assets/img/icon_192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../html/assets/img/icon_32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../html/assets/img/icon_16.png" />
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- // header -->


    <main id="main">
        <section id="Post" class="Post__wrap">
            <h2>소품샵 리스트</h2>
            <div class="Post__inner">
                <div class="Post__title">
                    <h3>소품샵 리스트</h3>
                    <p>다양한 소품샵을 사뿐소품에서 확인해보세요!</p>
                </div>
                <!-- 소품샵 리스트 게시판 -->
                <form action="sopumListModifySave.php?shopListID=<?=$shopListID ?>" name="modify" method="post"
                    enctype="multipart/form-data">
                    <fieldset>
                        <div class="post__box">
                            <div class="postWrite">
                                <div class="post__info">
                                    <div class="img">
                                        <img src="img/<?=$info['shopImgFile']?>" alt="">
                                        <input type="file" name="shopProfile" id="shopProfile"
                                            accept=".jpg, .jpeg, .png, .gif">
                                    </div>
                                    <div class="shop__info">

                                        <div>
                                            <span>업체명</span><input type="text" value=<?=$info['shopName']?>
                                                placeholder="소품샵 이름을 입력해주세요" name="shopName" id="shopName">
                                        </div>
                                        <div>
                                            <span>소품샵 소개</span><input type="text" value=<?=$info['shopListContents']?>
                                                name="shopListContents" id="shopListContents"
                                                placeholder="간단한 소품샵 소개를 입력 해 주세요">
                                        </div>
                                        <div>
                                            <span>영업시간</span><input type="text" value=<?=$info['shopHours']?>
                                                placeholder="영업일/시간을 입력하세요" name="shopHours" id="shopHours">

                                        </div>
                                        <div>
                                            <span>연락처</span><input type="text" value=<?=$info['shopNum']?>
                                                placeholder="소품샵 연락처를 입력하세요" name="shopNum" id="shopNum">
                                        </div>
                                        <div>
                                            <span>상품종류</span><input type="text" value=<?=$info['goodsList']?>
                                                placeholder="판매하는 상품 종류를 입력해주세요" name="goodsList" id="goodsList">
                                        </div>
                                        <div>
                                            <span>위치</span>
                                            <input type="text" value=<?=$info['shopAdress']?>
                                                placeholder="소품샵 주소를 입력하세요" name="shopAdress" id="shopAdress">
                                        </div>

                                        <div class="shop__map">
                                            <div id="map" style="width:420px;height:230px;margin-left: 50px;"></div>
                                            <script type="text/javascript"
                                                src="//dapi.kakao.com/v2/maps/sdk.js?appkey=9d3637cebd20b21457c4e0c648d59d32">
                                            </script>
                                            <script>
                                            var container = document.getElementById('map');
                                            var options = {
                                                center: new kakao.maps.LatLng(33.450701, 126.570667),
                                                level: 3
                                            };

                                            var map = new kakao.maps.Map(container, options);
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="post__share ir">공유</div>
                                <div class="post__heart ir">좋아요</div> -->
                                <div class="tag">
                                    <span class="tag__title">키워드 태그</span>
                                    <input type="text" value=<?=$info['shopTag']?> placeholder="소품샵 주소를 입력하세요"
                                        name="shopTag" id="shopTag">
                                </div>
                            </div>
                            <div class="container">
                                <div class="post__btn">
                                    <div class="post__btn__left">
                                        <a href="sopumList.php" class="btn1">목록으로</a>
                                    </div>
                                    <div class="post__btn__right">
                                        <a href="sopumListDelete.php?shopListID=<?=$shopListID ?>" class="btn2">삭제하기</a>
                                        <button type="submit" class="btn3">수정완료</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                </fieldset>
                <!-- //소품샵 게시판 -->


            </div>
        </section>
        <!-- //board -->


    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- // footer -->

</body>

</html>