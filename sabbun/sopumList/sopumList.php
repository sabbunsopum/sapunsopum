<?php 
    include "../connect/connect.php";
    include "../connect/session.php";

    $myMemberID = $_SESSION['myMemberID'];
    $sql = "SELECT * FROM sopumShopList WHERE myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>board</title>
    <style>

    </style>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/sopumList.css">
    <link rel="stylesheet" href="../html/assets/css/fonts.css">
    <link rel="stylesheet" href="../html/assets/css/common.css">
    <link rel="stylesheet" href="../html/assets/css/reset.css">
    <link rel="stylesheet" href="../html/assets/css/header.css">
    <link rel="stylesheet" href="../html/assets/css/footer.css">
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
        <section id="board" class="board__wrap nanum">
            <h2>소품샵 리스트</h2>
            <div class="board__inner">
                <div class="board__title">
                    <h3>소품#</h3>
                    <p>다양한 소품샵을 사뿐소품에서 확인해보세요!</p>
                </div>
                <!-- 소품샵 리스트 -->
                <div class="list__inner">
                    <!-- <div class="list">
                        <a href="sopumListView.php">
                            <h4 class="list_title">모던소품<span>모던한 감성 소품샵</span></h4>
                        </a>

                        <div class="list__img">
                            <a href="sopumListView.php"><img src="../html/assets/img/sopumList__bg01.jpg" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class="heart"></span>
                            <span class="share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                                </span>
                        </div>
                    </div>
                    <div class="list">
                        <a href="sopumListView.php">
                            <h4 class="list_title">소르르<span>제주도 제로웨이스트 맛집!</span></h4>
                        </a>

                        <div class="list__img">
                            <a href="sopumListView.php"><img src="../html/assets/img/sopumListView_bg01.jpg" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class="heart">

                               </span>
                            <span class="share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                                </span>
                        </div>
                    </div>
                    <div class="list">
                        <a href="sopumListView.php">
                            <h4 class="list_title">모디터<span>모던 인테리어 소품샵</span></h4>
                        </a>

                        <div class="list__img">
                            <a href="sopumListView.php"><img src="../html/assets/img/sopumList__bg03.jpg" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class=" heart">

                               </span>
                            <span class=" share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                                </span>
                        </div>
                    </div>
                    <div class="list">
                        <a href="sopumListView.php">
                            <h4 class="list_title">산타마켓<span>크리스마스 선물은?</span></h4>
                        </a>

                        <div class="list__img">
                            <a href="sopumListView.php"><img src="../html/assets/img/sopumList__bg04.jpg" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class=" heart">

                                </span>
                            <span class=" share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                                </span>
                        </div>
                    </div>
                    <div class="list">
                        <a href="sopumListView.php">
                            <h4 class="list_title">Good Mode<span>멋진 데이트코스</span></h4>
                        </a>

                        <div class="list__img">
                            <a href="sopumListView.php"><img src="../html/assets/img/sopumList__bg05.jpg" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class=" heart">

                                </span>
                            <span class=" share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                                </span>
                        </div>
                    </div>
                    <div class="list">
                        <a href="sopumListView.php">
                            <h4 class="list_title">HelloWorld<span>다양한 다이어리 용품</span></h4>
                        </a>

                        <div class="list__img">
                            <a href="/"><img src="../html/assets/img/sopumList__bg06.jpg" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class=" heart">

                                </span>
                            <span class=" share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                                </span>
                        </div>
                    </div>
                    <div class="list">
                        <a href="sopumListView.php">
                            <h4 class="list_title">양말상점<span>양말도 패션이야!</span></h4>
                        </a>

                        <div class="list__img">
                            <a href="/"><img src="../html/assets/img/sopumList__bg07.jpg" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class=" heart">

                                </span>
                            <span class=" share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                                </span>
                        </div>
                    </div>
                    <div class="list">
                        <a href="/">
                            <h4 class="list_title">캔들캔들<span>향기로운 감성 캔들</span></h4>
                        </a>

                        <div class="list__img">
                            <a href="/"><img src="../html/assets/img/sopumList__bg08.jpg" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class=" heart">

                                </span>
                            <span class=" share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                                </span>
                        </div>
                    </div>
                    <div class="list">
                        <a href="/">
                            <h4 class="list_title">P-for-Y<span>소중한 널 위한 선물</span></h4>
                        </a>

                        <div class="list__img">
                            <a href="/"><img src="../html/assets/img/sopumList__bg09.jpg" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class=" heart">

                                </span>
                            <span class=" share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                                </span>
                        </div>
                    </div>
                    <div class="list">
                        <a href="/">
                            <h4 class="list_title">Merry-Go-Round<span>레트로 감성 소품샵</span></h4>
                        </a>

                        <div class="list__img">
                            <a href="/"><img src="../html/assets/img/sopumList__bg10.jpg" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class=" heart">

                                </span>
                            <span class=" share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                                </span>
                        </div>
                    </div>
                    <div class="list">
                        <a href="/">
                            <h4 class="list_title">Post for You<span>인디 작가들의 엽서 모음전</span></h4>
                        </a>

                        <div class="list__img">
                            <a href="/"><img src="../html/assets/img/sopumList__bg11.jpg" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class=" heart">

                                </span>
                            <span class=" share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                                </span>
                        </div>
                    </div>
                    <div class="list">
                        <a href="/">
                            <h4 class="list_title">Snow Snow<span>아기자기한 미니어처 소품들 </span></h4>
                        </a>

                        <div class="list__img">
                            <a href="/"><img src="../html/assets/img/sopumList__bg12.jpg" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class=" heart">

                                </span>
                            <span class=" share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                                </span>
                        </div>
                    </div> -->


                    <?php
                    foreach($result as $info){  ?>
                    <div class="list">
                        <a href="sopumListView.php?shopListID=<?=$info['shopListID']?>">
                            <h4 class="list_title"><?=$info['shopName']?><span><?=$info['shopListContents']?></span>
                            </h4>
                        </a>

                        <div class="list__img">
                            <a href="sopumListView.php?shopListID=<?=$info['shopListID']?>">
                                <img src="img/<?=$info['shopImgFile']?>" alt=""></a>
                        </div>
                        <div class="list__icon">
                            <span class=" heart">

                            </span>
                            <span class=" share">
                                <img src="../html/assets/img/List_share.svg" alt="">
                            </span>
                        </div>
                    </div>
                    <?php
                    }   ?>

                </div>
                <!-- //소품샵 리스트 -->
                <div class="board__search">
                    <div class="left">
                        <form action="sopumListSearch.php" name="boardSearch" method="get">
                            <fieldset>
                                <legend>게시판 검색 영역</legend>
                                <input type="search" name="searchKeyword" id="searchKeyword" placeholder="Search"
                                    aria-label="search" required>
                                <button type="submit" class="searchBtn">
                                    <img src="../html/assets/img/search_icon.svg" alt="검색버튼">
                                </button>
                                <select name="searchOption" id="searchOption">
                                    <option value="title">제목</option>
                                    <option value="content">내용</option>
                                    <option value="name">등록자</option>
                                </select>
                            </fieldset>
                        </form>
                    </div>
                    <div>
                        <form>
                            <fieldset>
                                <a href="sopumListWrite.php" class="btn">글쓰기</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="board__pages">
                    <ul>
                        <li><a href="#">처음</a></li>
                        <li class="board__pages__prevbtn"><a href="#">&lt;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li class="board__pages__nextbtn"><a href="#">></a></li>
                        <li><a href="#">마지막</a></li>
                    </ul>
                </div>


            </div>
        </section>
        <!-- //board -->


    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- // footer -->

    <script>
    const LikeBtn = document.querySelectorAll(".heart");

    LikeBtn.forEach((e) => {
        e.addEventListener("click", () => {
            e.classList.toggle("red")
        })
    })
    </script>
</body>

</html>