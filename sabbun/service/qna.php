<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myMemberID = $_SESSION['myMemberID'];
    $myPageSql = "SELECT * FROM myBMember WHERE myMemberID = {$myMemberID}";
    $myPageResult = $connect -> query($myPageSql);
    $myPageInfo = $myPageResult -> fetch_array(MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자주묻는질문</title>
    
    <link rel="stylesheet" href="../html/assets/css/fonts.css">
    <link rel="stylesheet" href="../html/assets/css/common.css">
    <link rel="stylesheet" href="../html/assets/css/reset.css">
    <link rel="stylesheet" href="../html/assets/css/header_faq.css">
    <link rel="stylesheet" href="../html/assets/css/faq.css">
    <link rel="stylesheet" href="../html/assets/css/footer.css">
</head>
<body>
    <?php include "../include/header2.php" ?>
    <!-- // header -->

    <main>
        <section id="qna" class="nanum">
            <div class="qna__contents">
                <p>
                    1:1 문의는 문의글 업로드 혹은 이메일을 통해 받고 있습니다.<br>
                    아래 편하신 방법을 선택해주세요 !
                </p>
                <div class="qna__btn">
                    <div class="btn">
                        <img src="../html/assets/img/QnA_icon1@3x.png" alt="문의글 작성하기">
                        <span>문의글 작성하기</span>
                    </div>
                    <form>
                        <input type="EmailBtn" id="EmailBtn" NAME="" value="sabbunsopum@gmail.com">
                        <button class="copyBtn" onclick="copy_to_clipboard()">
                            <img src="../html/assets/img/QnA_icon2@3x.png" alt="이메일 작성하기">
                            <span>이메일 주소 복사하기</span>
                        </button>
                    </form>
                </div>
            </div>
            <!-- //content2 -->
        </section>
    </main>

    <?php include "../include/footer.php" ?>
    <!-- // footer -->

    <script src="../assets/js/custom.js"></script>
</body>
</html>