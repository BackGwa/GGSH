<!DOCTYPE html>

<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>계급사회</title>

        <!-- 웹 어플리케이션 등록 -->
        <link rel="manifest" href="./manifest.json">
        <link rel="shortcut icon" href="./res/icons/favicon.ico" type="image/x-icon">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" href="./res/icons/icon.png">

        <!-- CSS 적용 -->
        <link rel="stylesheet" href="./style/base.css">
        <link rel="stylesheet" href="./style/container.css">
        <link rel="stylesheet" href="./style/form.css">

        <!-- 폰트페이스 -->
        <link href="https://cdn.jsdelivr.net/gh/sunn-us/SUITE/fonts/variable/woff2/SUITE-Variable.css" rel="stylesheet"> 

    </head>

    <body>
        <!-- 앱 컨테이너 -->
        <div class="container">
            <!-- 제목 컨테이너 -->
            <div class="title-box">
                <div class="title">계급 등록</div>
                <div class="subtitle">자신의 점수를 등록하세요!</div>
            </div>
            <!-- 콘텐츠 컨테이너 -->
            <div class="content">
                <!-- 점수 등록 폼 -->
                <form action="PROCESS.php" method="post" class="form-box">
                    <div class="grid-container">
                        <!-- 학번/이름 선택 --> 
                        <div class="container-text">학번 / 이름</div>
                        <select name="select_uid">
                            <option>> 자신을 선택해주세요. <</option>
                            <?php
                                $DB = mysqli_connect("localhost", "root", "");
                                mysqli_select_db($DB, "rank");

                                $query = "select * from board";
                                $result = mysqli_query($DB, $query);

                                while($row = mysqli_fetch_array($result)){
                                    echo '<option value='.$row['uid'].'>'.$row['uid'].' '.$row['name'].'</option>';
                                }

                                mysqli_close($DB);
                            ?>
                        </select>

                        <!-- 게임 종류 선택 -->
                        <div class="container-text">보드게임</div>
                        <select name="score" id="games" onchange="change_type();">
                            <option>> 즐긴 게임을 선택해주세요. <</option>
                            <option value="chomk">체스 / 오목</option>
                            <option value="hali">할리갈리</option>
                            <option value="bang">뱅</option>
                            <option value="davin">다빈치</option>
                            <option value="rumi">루미큐브</option>
                            <option value="dalmu">달무티</option>
                            <option value="scoreA">+ 점수 증가</option>
                            <option value="scoreB">- 점수 감소</option>
                        </select>
                        
                        <!-- 점수 선택 -->
                        <div class="container-text">점수</div>
                        <select name="rank" id="ranks">
                            <option value="0">> 순위나 승패여부를 선택해주세요. <</option>
                        </select>

                        <!-- 기타 옵션 선택 -->
                        <div class="HIDDEN" id="other_option">
                            <div class="container-text">옵션</div>
                            <select name="other" id="other">
                                <option value="0">> 시작 계급을 선택해주세요. <</option>
                            </select>
                        </div>

                        <!-- 제출 -->
                        <input class="submit" type="submit" value="등록하기">
                    </div>
                </form>
            </div>
        </div>

        <script src="./script/register.js"></script>
    </body>
</html>