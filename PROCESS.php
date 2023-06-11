<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>계급사회</title>

    <link rel="stylesheet" href="./style/base.css">
    <link rel="stylesheet" href="./style/container.css">
    <link rel="stylesheet" href="./style/alert.css">

    <!-- 폰트페이스 -->
    <link href="https://cdn.jsdelivr.net/gh/sunn-us/SUITE/fonts/variable/woff2/SUITE-Variable.css" rel="stylesheet"> 
</head>

<body>
    <?php

        $uid = $_POST['select_uid'];
        $score = $_POST['rank'];
        $other = $_POST['other'];

        $allscore = (int)$score + (int)$other;

        include './DB.php';

        $query = "update board set score = (score + $allscore) where uid = $uid";
        $result = mysqli_query($DB, $query);

        $query = "select * from board where uid = $uid";
        $result = mysqli_query($DB, $query);

        $row = mysqli_fetch_array($result);

        $query = "insert into log values(NULL, '".$row['name']." ".$allscore."점')";
        $result = mysqli_query($DB, $query);
        mysqli_close($DB);

    ?>

        <!-- 알림창 -->
            <div class="NONE-alert" id="alert_feedback">
            <div class="feedback-background play1"></div>
                <div class="feedback play2">
                    <div class="window play3">
                        <div class="alert_title" id="at">
                                
                        </div>
                        <div class="alert_subtitle" id="ast">
                                
                        </div>
                        <div class="backbtn">
                            <div class="btntext"
                                 onclick="close_alert();
                                          location.href = './register.php'">알겠어요,</div>
                        </div>
                    </div>
                </div>
            </div>

    <script src="./script/register.js"></script>
    <script>alert_feedback("완벽하게,<br>점수를 등록 했어요!", "입력하신 정보를 바탕으로<br>정상적으로 계급에 반영했어요!");</script>

</body>

</html>