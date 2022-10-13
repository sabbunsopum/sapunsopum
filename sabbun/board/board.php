<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>board</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/fonts.css">
    <link rel="stylesheet" href="../html/assets/css/common.css">
    <link rel="stylesheet" href="../html/assets/css/reset.css">
    <link rel="stylesheet" href="../html/assets/css/header.css">
    <link rel="stylesheet" href="../html/assets/css/footer.css">
    <link rel="stylesheet" href="../html/assets/css/board.css">

</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- // header -->

    <main id="main">
        <section id="board" class="board__wrap container">
            <h2>게시판 영역입니다.</h2>
            <div class="board__inner">
                <div class="board__title">
                    <h3>Free Board</h3>
                    <p>자유 게시판입니다.</p>
                </div>

                <div class="board__table">
                    <table>
                        <colgroup>
                            <col style="width: 7%">
                            <col>
                            <col style="width: 10%">
                            <col style="width: 10%">
                            <col style="width: 7%">
                            <col style="width: 7%">
                        </colgroup>
                        <thead>
                            <tr class="thead">
                                <th>No</th>
                                <th>제목</th>
                                <th>글쓴이</th>
                                <th>작성시간</th>
                                <th>조회수</th>
                                <th>좋아요</th>
                            </tr>
                        </thead>
                        <tbody>
<?php

if(isset($_GET['page'])){
    $page = (int)$_GET['page'];
} else {
    $page = 1;
}
$viewNum = 10;
$viewLimit = ($viewNum * $page) - $viewNum;

    $sql = "SELECT b.myBoardID, b.boardTitle, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myBMember m ON (b.myMemberID = m.myMemberID) ORDER BY myBoardID DESC LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;

        if($count > 0){
            for($i=1; $i <= $count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
                echo"<tr>";
                echo"<td>".$info['myBoardID']."</td>";
                echo"<td><a href='boardView.php?myBoardID={$info['myBoardID']}'>".$info['boardTitle']."</td>";
                echo"<td>".$info['youName']."</td>";
                echo"<td>".date('Y-m-d', $info['regTime'])."</td>";
                echo"<td>".$info['boardView']."</td>";
                echo"</tr>";
            }
        }
    }
?>
                            <!-- <tr class="notice">
                                <td>⩥</td>
                                <td class="title">공지사항입니다.</a></td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                                <td>0</td>
                            </tr>
                            <tr class="notice">
                                <td>⩥</td>
                                <td class="title">공지사항입니다.</a></td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                                <td>0</td>
                            </tr>
                            <tr class="notice">
                                <td>⩥</td>
                                <td class="title">공지사항입니다.</a></td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                                <td>0</td>
                            </tr>
                            <tr class="notice">
                                <td>⩥</td>
                                <td class="title">공지사항입니다.</a></td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                                <td>0</td>
                            </tr>
                            <tr class="notice">
                                <td>⩥</td>
                                <td class="title">공지사항입니다.</a></td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="title"><a href="boardView.html">자유 게시판 제목입니다.</a></td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="title">자유 게시판 제목입니다.</td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="title">자유 게시판 제목입니다.</td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="title">자유 게시판 제목입니다.</td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="title">자유 게시판 제목입니다.</td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="title">자유 게시판 제목입니다.</td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>59</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="title">자유 게시판 제목입니다.</td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>39</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="title">자유 게시판 제목입니다.</td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>99</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="title">자유 게시판 제목입니다.</td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>9</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td class="title">자유 게시판 제목입니다.</td>
                                <td>도우너</td>
                                <td>2022-03-04</td>
                                <td>999</td>
                                <td>0</td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="board__search">
                    <div class="left">
                        <form action="boardSearch.php" name="boardSearch" method="get">
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
                                <a href="boardWrite.html" class="btn">글쓰기</a>
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