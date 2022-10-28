<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
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
                <div class="post__box">
                    <div class="postWrite">
                        <div class="post__info">
                            <div class="img">
                                <img src="../html/assets/img/sopumListView_bg01.jpg" alt="">

                            </div>
                            <div class="shop__info">

                                <div>
                                    <span>업체명</span><input type="text" value="소르르" placeholder="소품샵 이름을 입력해주세요">
                                </div>
                                <div>
                                    <span>영업시간</span><input type="text" value="화, 수, 목, 금, 토 / 9:00 AM ~ 18:00 PM"
                                        placeholder="영업일/시간을 입력하세요">

                                </div>
                                <div>
                                    <span>연락처</span><input type="text" value="010 - 1234 - 5678 / soruru@abc.com"
                                        placeholder="소품샵 연락처를 입력하세요">
                                </div>
                                <div>
                                    <span>상품종류</span><input type="text" value="패브릭, 제로웨이스트, 인테리어"
                                        placeholder="판매하는 상품 종류를 입력해주세요">
                                </div>
                                <div>
                                    <span>위치</span>
                                    <input type="text" value="제주특별자치도 제주시 OO로 OO길 100, 1층 붉은색 문의 건물입니다."
                                        placeholder="소품샵 주소를 입력하세요">
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
                            <input type="text" id="tag" value="제로웨이스트" placeholder="태그를 입력해주세요">
                            <input type="text" id="tag" value="패브릭" placeholder="태그를 입력해주세요">
                            <input type="text" id="tag" value="코지" placeholder="태그를 입력해주세요">
                            <input type="text" id="tag" value="에코프렌들리" placeholder="태그를 입력해주세요">
                            <input type="text" id="tag" value="인테리어" placeholder="태그를 입력해주세요">

                        </div>
                    </div>
                    <div class="container">
                        <div class="post__btn">
                            <div class="post__btn__left">
                                <a href="sopumList.html"><button type="submit" class="btn1">목록으로</button></a>
                            </div>
                            <div class="post__btn__right">
                                <a href="sopumListDelete.html"><button type="submit" class="btn2">삭제하기</button></a>
                                <a href="sopumList.html"><button type="submit" class="btn3">수정완료</button></a>
                            </div>
                        </div>
                    </div>
                </div>
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