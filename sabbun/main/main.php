<?php
    include "../connect/session.php";

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사뿐소품</title>

    <link rel="stylesheet" href="../html/assets/css/fonts.css">
    <link rel="stylesheet" href="../html/assets/css/common.css">
    <link rel="stylesheet" href="../html/assets/css/reset.css">
    <link rel="stylesheet" href="../html/assets/css/header.css">
    <link rel="stylesheet" href="../html/assets/css/footer.css">

    <style>
        
    </style>
</head>
<body>
    <header id="headerType" class="header__wrap nanum">
        <div class="header__inner">
            <div class="header__logo">
                <a href="#">사뿐소품</a>
            </div>
            <nav class="header__menu clearfix">
                <ul>
                    <li><a href="#sliderType">사뿐소품이란?</a></li>
                    <li><a href="#imageType">소품샵 리스트</a></li>
                    <li><a href="#imgTextType">커뮤니티</a></li>
                    <li><a href="#cardType">마이페이지</a></li>
                    <li><a href="#bannerType">고객센터</a></li>
                </ul>
            </nav>
            <div class="header__member clearfix">
                <ul>
                    <?php if( isset($_SESSION['myMemberID'])){ ?>
                        <li><a href="../login/logout.php">로그아웃</a></li>
                            <li><a href="#" class="black"><?=$_SESSION['youName']?>님 환영합니다:)</a></li>
                    <?php }else {   ?>
                            <li><a href="../login/login.php">로그인</a></li>
                            <li><a href="../join/join1.php">회원가입</a></li>
                    <?php  }   ?>
                    <!-- <li><a href="login.html">로그인</a></li>
                    <li><a href="join1.html">회원가입</a></li> -->
                </ul>
            </div>
            <div class="header__search clearfix">
                <form action="headerSearch.php" name="headerSearch" method="get">
                    <fieldset>
                        <legend>검색 영역</legend>
                        <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력하세요 !" aria-label="search" required>
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
    <!-- // footer -->

    <script src="../assets/js/custom.js"></script>
</body>
</html>