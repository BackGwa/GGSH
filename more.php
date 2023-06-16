<!DOCTYPE html>

<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1">
        <title>계급사회</title>
        
        <!-- CSS 적용 -->
        <link rel="stylesheet" href="./style/base.css?after">
        <link rel="stylesheet" href="./style/container.css?after">
        <link rel="stylesheet" href="./style/more.css?after">

        <!-- 폰트페이스 -->
        <link href="./res/font/SUITE-Variable.css" rel="stylesheet"> 

    </head>

    <body>
        <!-- 앱 컨테이너 -->
        <div class="container" id="container">
            <!-- 제목 컨테이너 -->
            <div class="title-box">
                <div class="title">더보기</div>
                <div class="subtitle">더 많은 기능을 한 곳에!</div>
            </div>
                <!-- 콘텐츠 컨테이너 -->
                <div class="content">
                    <!-- 스크롤 컨테이너 -->
                    <div class="more-scoll-box">
                        <div class="content-spt">
                            <div class="spt-title">편의</div>
                        </div>

                        <div class="function-content" onclick="wait();">
                            <img class="item-icon" src="./res/image/bento-box.png">
                            <div class="item-text">급식 정보</div>
                        </div>

                        <div class="function-content" onclick="call_function('assignment/start');">
                            <img class="item-icon" src="./res/image/video-game.png">
                            <div class="item-text">보드게임 배정</div>
                        </div>

                        <div class="function-content" onclick="wait();">
                            <img class="item-icon" src="./res/image/safety-pin.png">
                            <div class="item-text">무작위 선택</div>
                        </div>

                        <div class="function-content" onclick="wait();">
                            <img class="item-icon" src="./res/image/game-die.png">
                            <div class="item-text">주사위 굴리기</div>
                        </div>

                        <div class="content-spt">
                            <div class="spt-title">재미</div>
                        </div>

                        <div class="function-content" onclick="wait();">
                            <img class="item-icon" src="./res/image/test-tube.png">
                            <div class="item-text">나의 MBTI는 무엇일까?</div>
                        </div>

                        <div class="content-spt">
                            <div class="spt-title">도움말</div>
                        </div>

                        <div class="function-content" onclick="function_document(0);">
                            <img class="item-icon" src="./res/image/triangular-flag.png">
                            <div class="item-text">새로운 소식</div>
                        </div>

                        <div class="function-content" onclick="function_document(1);">
                            <img class="item-icon" src="./res/image/compass.png">
                            <div class="item-text">계급 시스템에 대하여</div>
                        </div>

                        <div class="function-content" onclick="function_document(2);">
                            <img class="item-icon" src="./res/image/bubbles.png">
                            <div class="item-text">데이터는 어떻게 관리되나요?</div>
                        </div>

                        <div class="function-content" onclick="newtab(`https://toss.me/backgwa`);">
                            <img class="item-icon" src="./res/image/money-with-wings.png">
                            <div class="item-text">프로젝트 후원하기</div>
                        </div>

                        <div class="version">
                            <div class="info">
                                <div class="version-title">계급사회</div>
                                <div class="version-split">-</div>
                                <div class="version-info">버전 정보 : RC 1.10</div>
                            </div>
                            <div class="maker">만든 이 : 강찬영</div>
                        </div>
                    </div>
                </div>
        </div>
        <script src="./script/more.js"></script>
        <script src="./script/hover.js"></script>
    </body>
</html>