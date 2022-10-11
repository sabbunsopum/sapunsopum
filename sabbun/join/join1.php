<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지_1</title>

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
            <div class="join__step active1">
                <em>1</em>/4
            </div>
            <div class="join__desc">
                <h1>
                    <span>환영합니다.</span><br>
                    사뿐소품 입니다!  
                </h1>
                <p>사뿐소품 사이트 이용을 위하여 아래의 약관 동의 및 회원가입이 필요합니다.</p>
            </div>
            <div class="join__inner">
                <form action="joinSave.php" name="join" method="post" onsubmit="return joinChecks()">
                    <fieldset>
                        <legend>약관동의</legend>
                        <div class="join__agree">
                            <div class="agree">
                                <details>
                                    <summary>사뿐소품 이용약관</summary>
                                    <div class="desc">
                                        <ul>
                                            <li>회원가입은 1인당 1개의 이메일 계정을 이용할 수 있습니다.</li>
                                            <li>개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용합니다.</li>
                                            <li>회원가입은 1인당 1개의 이메일 계정을 이용할 수 있습니다.</li>
                                            <li>개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용합니다.</li>
                                            <li>회원가입은 1인당 1개의 이메일 계정을 이용할 수 있습니다.</li>
                                            <li>개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용합니다.</li>
                                            <li>회원가입은 1인당 1개의 이메일 계정을 이용할 수 있습니다.</li>
                                            <li>개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용합니다.</li>
                                            <li>회원가입은 1인당 1개의 이메일 계정을 이용할 수 있습니다.</li>
                                            <li>개인정보를 수집 및 이용하며, 회원의 개인정보를 안전하게 취급하고, 교육을 목적으로 사용합니다.</li>
                                        </ul>
                                    </div>
                                </details>
                                <div class="check">
                                    <input type="checkbox" name="joinCheck" id="joinCheck">
                                    <label for="joinCheck">동의합니다.</label>
                                </div>
                            </div>
                            <div class="agree">
                                <details>
                                    <summary>개인정보 수집 및 이용약관</summary>
                                    <div class="desc">
                                        <ul>
                                            <li>목적 : 가입자 개인 식별, 가입 의사 확인, 가입자와의 원활한 의사소통, 가입자와의 교육 커뮤니테이션</li>
                                            <li>항목 : 아이디(이메일주소), 비밀번호, 이름, 생년월일, 휴대폰번호</li>
                                            <li>보유기간 : 회원 탈퇴 시까지 보유(탈퇴일로부터 즉시 파기합니다.)</li>
                                            <li>개인정보 수집에 대한 동의를 거부할 권리가 있으며, 회원 가입시 개인정보 수집을 동의함으로 간주합니다.</li>
                                            <li>목적 : 가입자 개인 식별, 가입 의사 확인, 가입자와의 원활한 의사소통, 가입자와의 교육 커뮤니테이션</li>
                                            <li>항목 : 아이디(이메일주소), 비밀번호, 이름, 생년월일, 휴대폰번호</li>
                                            <li>보유기간 : 회원 탈퇴 시까지 보유(탈퇴일로부터 즉시 파기합니다.)</li>
                                            <li>개인정보 수집에 대한 동의를 거부할 권리가 있으며, 회원 가입시 개인정보 수집을 동의함으로 간주합니다.</li>
                                        </ul>
                                    </div>
                                </details>
                                <div class="check">
                                    <input type="checkbox" name="joinCheck" id="joinCheck">
                                    <label for="joinCheck">동의합니다.</label>
                                </div>
                            </div>
                            <div class="agree">
                                <details>
                                    <summary>마케팅 정보 수신 및 활용</summary>
                                    <div class="desc">
                                        <ul>
                                            <li>개인정보 이용 상세내용</li>
                                            <li>이용하는 개인정보 : 휴대전화번호,이메일 주소, 쿠키정보</li>
                                            <li>보유 이용 목적 : 혜택 정보,각종 이벤트 정보 등 광고성 정보 제공</li>
                                            <li>보유기간 : 회원탈퇴 후 5일까지</li>
                                        </ul>
                                    </div>
                                </details>
                                <div class="check">
                                    <input type="checkbox" name="joinCheck" id="joinCheck">
                                    <label for="joinCheck">동의합니다.</label>
                                </div>
                            </div>
                            <div class="next">
                                <a href="#c">다음으로</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function joinChecks() {
            // 개인정보 동의 체크
            let joinCheck = $("#joinCheck").is(":checked");
            if (joinCheck == false) {
                alert("개인정보수집 및 동의를 체크해주세요");
                return false;
            }
        }
    </script>
</body>
</html>