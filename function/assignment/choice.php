<!DOCTYPE html>

<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1">
        <title>계급사회</title>
        
        <!-- CSS 적용 -->
        <link rel="stylesheet" href="../../style/base.css">
        <link rel="stylesheet" href="../../style/container.css">
        <link rel="stylesheet" href="../../style/alert.css">
        <link rel="stylesheet" href="./style/assignment.css">
        <link rel="stylesheet" href="../../style/more.css">

        <!-- 폰트페이스 -->
        <link href="../../res/font/SUITE-Variable.css" rel="stylesheet"> 

    </head>

    <body>
        <!-- 앱 컨테이너 -->
        <div class="container container-fade" id="container">
            <!-- 제목 컨테이너 -->
            <div class="title-box">
                <div class="title">인원 확인</div>
                <div class="subtitle">보드게임에 참여하지 않는 인원을 확인해요.</div>
            </div>

            <!-- 콘텐츠 컨테이너 -->
            <div class="content">
                <!-- 스크롤 컨테이너 -->
                <div class="splitbutton">
                    <div class="button1" onclick="item_reset();">
                        <div class="btninner" id="rst-text">초기화</div>
                    </div>
                    <div class="button2" onclick="sendinfo();">
                        <div class="btninner">시작하기</div>
                    </div>
                </div>
                <div class="choice-scoll-box" id="indexbox">

                </div>
            </div>
        </div>

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
                        <div class="btntext" onclick="close_alert();">알겠어요,</div>
                    </div>
                </div>
            </div>
        </div>

        <script src="./script/assignment.js"></script>
        <script src="../../script/register.js"></script>
        <script>indexboxf();</script>
    </body>
</html>