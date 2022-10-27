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
    <title>sopumListWrite</title>
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
    <header id="headerType" class="header__wrap nanum">
        <div class="header__inner">
            <div class="header__logo">
                <a href="main.html">
                    <img src="../html/assets/img/temp_logo.svg" alt="사뿐소품 로고">
                </a>
            </div>
            <nav class="header__menu clearfix">
                <ul>
                    <li><a href="#sliderType">사뿐소품이란?</a></li>
                    <li><a href="sopumList.html">소품샵 리스트</a></li>
                    <li><a href="board.html">커뮤니티</a></li>
                    <li><a href="myPage.html">마이페이지</a></li>
                    <li><a href="faq.html">고객센터</a></li>
                </ul>
            </nav>
            <div class="header__member clearfix">
                <ul>
                    <li><a href="login.html">로그인</a></li>
                    <li><a href="join1.html">회원가입</a></li>
                </ul>
            </div>
            <div class="header__search clearfix">
                <form action="headerSearch.php" name="headerSearch" method="get">
                    <fieldset>
                        <legend>검색 영역</legend>
                        <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력하세요 !"
                            aria-label="search" required>
                        <button type="submit" class="searchBtn">
                            <img src="../html/assets/img/search_icon.svg" alt="검색버튼">
                        </button>
                    </fieldset>
                </form>
            </div>
            <div class="header__ham">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <!-- // headerType -->

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
                                <div class="img__button">
                                    <label for="file">
                                        <div class="btn-upload">
                                        </div>
                                        <p>사진을 업로드해주세요!</p>
                                    </label>
                                    <input type="file" name="file" id="file">
                                </div>

                            </div>
                            <div class="shop__info">

                                <div>
                                    <span>업체명</span><input type="text" placeholder="소품샵 이름을 입력해주세요">
                                </div>
                                <div>
                                    <span>영업시간</span><input class="time" type="text" placeholder="영업일/시간을 입력하세요">
                                </div>
                                <div>
                                    <span>연락처</span><input class="phone" type="text" placeholder="소품샵 연락처를 입력하세요">
                                </div>
                                <div>
                                    <span>상품종류</span><input type="text" placeholder="판매하는 상품 종류를 입력해주세요">
                                </div>
                                <div>
                                    <span>위치</span><input type="text" placeholder="소품샵 주소를 입력하세요">
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
                            <input type="text" id="tag" placeholder="태그를 입력해주세요">
                        </div>
                    </div>
                    <div class="container">
                        <a href="sopumList.html"><button type="submit" class="btn">글 작성하기</button></a>
                    </div>
                </div>
                <!-- //소품샵 게시판 -->


            </div>
        </section>
        <!-- //board -->


    </main>
    <!-- //main -->

    <footer id="footer__type" class="footer__wrap nanum">
        <div class="footer__inner container">
            <div class="footer__menu">
                <ul>
                    <h4>고객센터</h4>
                    <div class="footer__cs">
                        <li class="footer__cscenter">sabbunsopum@gmail.com</li>
                        <li><span>홈페이지 내 1:1 상담 또는 이메일을 통해 문의를 받고 있습니다.</span></li>
                    </div>
                </ul>
                <ul>
                    <h4>사뿐소품</h4>
                    <li><a href="#">브랜드스토리</a></li>
                    <li><a href="#">이용안내</a></li>
                    <li><a href="#">연혁</a></li>
                </ul>
                <ul>
                    <h4>고객지원</h4>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">자주하는 질문</a></li>
                    <li><a href="#">1:1 상담</a></li>
                </ul>
                <ul>
                    <h4>개인정보</h4>
                    <li><a href="#">이용약관</a></li>
                    <li><a href="#">개인정보처리방침</a></li>
                </ul>
                <p>
                    Copyright © 사뿐소품. All rights reserved.
                </p>
            </div>
            <div class="footer__icon">
                <div class="footer__icon__img img1"><a href=""></a></div>
                <div class="footer__icon__img img2"><a href=""></a></div>
                <div class="footer__icon__img img3"><a href=""></a></div>
                <div class="footer__icon__img img4"><a href=""></a></div>
                <div class="footer__icon__img img5"><a href=""></a></div>
            </div>
        </div>

    </footer>
</body>

</html>