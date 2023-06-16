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
        <link rel="stylesheet" href="./style/popup.css">

        <!-- 폰트페이스 -->
        <link href="../../res/font/SUITE-Variable.css" rel="stylesheet"> 

    </head>

    <body>
        <!-- 앱 컨테이너 -->
        <div class="container container-fade" id="container">
            <!-- 제목 컨테이너 -->
            <div class="title-box">
                <div class="title">게임 배정</div>
                <div class="subtitle">모두가 함께 즐길 보드게임을 골라봐요.</div>
            </div>

            <!-- 콘텐츠 컨테이너 -->
            <div class="content">
                <div class="splitbutton">
                    <div class="button1" onclick="reset_game();">
                        <div class="btninner rsttxt" id="rst-text">초기화</div>
                    </div>
                    <div class="button2" onclick="open_popup();">
                        <div class="btninner">게임 선택</div>
                    </div>
                </div>
                <div class="choice-scoll-box" id="voted">

                </div>
            </div>
        </div>

        <!-- 팝업창a -->
        <div class="popup-bg popup-hidden" id="popupwindo">
            <div class="popup-box">
                <div class="popup-title">재밌는 보드 게임을<br>선택해주세요.</div>
                <div class="mini-scroll">

                    <div class="mini-item" onclick="selected(0);">
                        <div class="mini-item-title">체스</div>
                        <div class="mini-item-subtitle">2인 플레이 가능</div>
                    </div>

                    <div class="mini-item" onclick="selected(1);">
                        <div class="mini-item-title">오목</div>
                        <div class="mini-item-subtitle">2인 플레이 가능</div>
                    </div>

                    <div class="mini-item" onclick="selected(2);">
                        <div class="mini-item-title">할리갈리</div>
                        <div class="mini-item-subtitle">3~4인 플레이 가능</div>
                    </div>

                    <div class="mini-item" onclick="selected(4);">
                        <div class="mini-item-title">뱅</div>
                        <div class="mini-item-subtitle">6~7인 플레이 가능</div>
                    </div>

                    <div class="mini-item" onclick="selected(6);">
                        <div class="mini-item-title">다빈치 코드</div>
                        <div class="mini-item-subtitle">3~4인 플레이 가능</div>
                    </div>

                    <div class="mini-item" onclick="selected(8);">
                        <div class="mini-item-title">루미큐브</div>
                        <div class="mini-item-subtitle">3~4인 플레이 가능</div>
                    </div>

                    <div class="mini-item" onclick="selected(10);">
                        <div class="mini-item-title">달무티</div>
                        <div class="mini-item-subtitle">8인 플레이 가능</div>
                    </div>

                </div>
            </div>
        </div>

        <!-- 팝업창b -->
        <div class="popup-bg popup-hidden" id="player-selecter">
            <div class="popup-box-mid">
                <div class="popup-title">몇 명이서 게임을<br>즐기나요?</div>
                <div class="popup-subtitle">적절한 인원 수를 선택해주세요.</div>

                <div class="popup-splitbutton">
                    <div class="buttonx rsttxt" onclick="confirm_selected(0);">
                        <div class="btninner" id="playera">3명</div>
                    </div>
                    <div class="button-margin"></div>
                    <div class="buttonx rsttxt" onclick="confirm_selected(1);">
                        <div class="btninner" id="playerb">4명</div>
                    </div>
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

        <script>getinfo();</script>
    </body>
</html>