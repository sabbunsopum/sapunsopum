<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지_3_1</title>

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
            <div class="join__step active3">
                <em>3</em>/4
            </div>
            <div class="join__desc">
                <h1>
                    <span>사장님 회원의 정보</span>를 알려주세요!   
                </h1>
                <p>입력한 정보는 회원가입 외 다른 용도로 사용하지 않습니다!</p>
            </div>
            <div class="join__inner">
                <form action="joinSave.php" name="join" method="post">
                    <fieldset>
                        <legend>회원가입</legend>
                        <div class="join__box">
                            <div class="youInfo">
                                <div>
                                    <label for="youName">이름</label>
                                    <input type="text" id="youName" name="youName" placeholder="이름을 적어주세요!" required>
                                </div>
                                <div>
                                    <label for="youEmail">이메일</label>
                                    <input type="email" id="youEmail" name="youEmail" placeholder="이메일을 적어주세요!" required>
                                </div>
                                <div>
                                    <label for="youPass">비밀번호</label>
                                    <input type="password" id="youPass" name="youPass" placeholder="비밀번호를 적어주세요!" required>
                                </div>
                                <div>
                                    <label for="youPassC">비밀번호 확인</label>
                                    <input type="password" id="youPassC" name="youPassC" placeholder="비밀번호를 한번 더 적어주세요!" required>
                                </div>
                                <div>
                                    <label for="youPhone">휴대폰 번호</label>
                                    <input type="text" id="youPhone" name="youPhone" placeholder="휴대폰 번호를 적어주세요!" required>
                                </div>
                            </div>
                            <div class="storeInfo">
                                <div>
                                    <label for="storeName">가게(상호)명</label>
                                    <input type="text" id="storeName" name="storeName" placeholder="가게(상호)명을 적어주세요!" required>
                                </div>
                                <div>
                                    <label for="storeAdr">가게 주소</label>
                                    <input type="text" id="storeAdr" name="storeAdr" placeholder="가게 주소를 적어주세요!" required>
                                </div>
                                <div>
                                    <label for="storePhone">가게 전화번호</label>
                                    <input type="text" id="storePhone" name="storePhone" placeholder="가게 전화번호를 적어주세요!" required>
                                </div>
                            </div>
                            <div class="moreover">
                                <div>
                                    <label for="youImg">프로필 이미지</label>
                                    <input type="text" id="youPhone" name="youPhone" placeholder="이미지를 첨부해주세요!" required>
                                </div>
                                <div class="youGd">
                                    <label for="youGender">성별</label>
                                    <div class="btn">
                                        <img src="../html/assets/img/boy-dynamic-color@3x.png" alt="남성">
                                        <span>남성</span>
                                    </div>
                                    <div class="btn">
                                        <img src="../html/assets/img/girl-dynamic-color@3x.png" alt="여성">
                                        <span>여성</span>
                                    </div>
                                </div>
                            </div>
                            <button class="join__Nbtn" type="submit">다음으로</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>

    <script>
        
    </script>
</body>
</html>