<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myMemberID = $_SESSION['myMemberID'];
    $myPageSql = "SELECT * FROM myBoard WHERE myMemberID = '$myMemberID' ORDER BY myBoardID DESC";
    $myPageResult = $connect -> query($myPageSql);
    $myPageInfo = $myPageResult -> fetch_array(MYSQLI_ASSOC);
    // $myPageCount = $myPageResult -> num_rows;
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>마이페이지</title>

    <link rel="stylesheet" href="../html/assets/css/fonts.css">
    <link rel="stylesheet" href="../html/assets/css/common.css">
    <link rel="stylesheet" href="../html/assets/css/reset.css">
    <link rel="stylesheet" href="../html/assets/css/header.css">
    <link rel="stylesheet" href="../html/assets/css/myPage.css">
    <link rel="stylesheet" href="../html/assets/css/footer.css">

    <style>
        
    </style>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- // header -->

    <main id="main" class="main container nanum">
        <div id="myPage__inner" class="myPage__inner">
            <section id="contents">
                <div class="list">

<?php
    // $sql = "SELECT * FROM myTips WHERE myMemberID = '$myMemberID' ORDER BY myTipsID DESC ";
    // $sql = "SELECT * FROM myBoard WHERE myMemberID = 0 ORDER BY myBoardID DESC";
    // $sql = "SELECT b.myBoardID, b.myMemberID, b.boardTitle, b.boardContents, m.myMemberID FROM myBoard b JOIN myBMember m ON (b.myMemberID = m.myMemberID) ORDER BY myBoardID DESC";
    $myPageSql = "SELECT * FROM myBoard WHERE myMemberID = '$myMemberID' ORDER BY myBoardID DESC";
    $myPageResult = $connect -> query($myPageSql);
    foreach($result as $board){  ?>
        <div class="card">
            <a href="boardView.php?myBoardID<?=$board['myBoardID']?>">
                <figure>
                    <img src="../html/assets/img/basic__icon.png" alt="게시글1">
                </figure>
                <div class="desc">
                    <h3><?=$board['boardTitle']?></h3>
                    <p><?=$board['boardContents']?></p>
                </div>
            </a>
        </div>
<?php } ?>

                    <div class="card">
                        <a href="#">
                            <figure>
                                <img src="../html/assets/img/basic__icon.png" alt="게시글1">
                            </figure>
                            <div class="desc">
                                <h3>제목 불러오기</h3>
                                <p>
                                    글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기
                                    글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <figure>
                                <img src="../html/assets/img/basic__icon.png" alt="게시글1">
                            </figure>
                            <div class="desc">
                                <h3>제목 불러오기</h3>
                                <p>
                                    글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기
                                    글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <figure>
                                <img src="../html/assets/img/basic__icon.png" alt="게시글1">
                            </figure>
                            <div class="desc">
                                <h3>제목 불러오기</h3>
                                <p>
                                    글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기
                                    글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <figure>
                                <img src="../html/assets/img/basic__icon.png" alt="게시글1">
                            </figure>
                            <div class="desc">
                                <h3>제목 불러오기</h3>
                                <p>
                                    글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기
                                    글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <figure>
                                <img src="../html/assets/img/basic__icon.png" alt="게시글1">
                            </figure>
                            <div class="desc">
                                <h3>제목 불러오기</h3>
                                <p>
                                    글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기
                                    글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기 글 내용 불러오기
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <section id="aside">
                <div class="myInfo">
                    <img src="../html/assets/img/board__icon.svg" alt="">
                    <h3><a href="myPage.html">권규비</a> 님</h3>
                </div>
                <div class="goMenu">
                    <h3>마이페이지</h3>
                    <ul>
                        <li><a href="myPage.html">회원 정보 수정</a></li>
                        <li class="active"><a href="myPageBoard.html">게시물</a></li>
                        <li><a href="myPageLike.html">관심 리스트</a></li>
                    </ul>
                </div>
            </section>
        </div>
    </main>

    <?php include "../include/footer.php" ?>
    <!-- // footer -->

    <script src="../assets/js/custom.js"></script>
</body>
</html>