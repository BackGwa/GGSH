<!DOCTYPE html>

<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1">
        <title>계급사회</title>

        <!-- 웹 어플리케이션 등록 -->
        <link rel="manifest" href="./manifest.json">
        <link rel="shortcut icon" href="./res/icons/favicon.ico" type="image/x-icon">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" href="./res/icons/icon.png">

        <!-- CSS 적용 -->
        <link rel="stylesheet" href="./style/base.css">
        <link rel="stylesheet" href="./style/tab.css">

        <!-- 폰트페이스 -->
        <link href="./res/font/SUITE-Variable.css" rel="stylesheet"> 

    </head>

    <body class="scroll-fix">
        <!-- 앱 UI -->
        <div id="app">
            <iframe src="./rank.php" frameborder="0" id="tab"></iframe>
        </div>

        <!-- 하단 독 추가 -->
        <?php include './dock.html' ?>
    </body>
</html>