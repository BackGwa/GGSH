<!DOCTYPE html>

<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1">
        <title>계급사회</title>
        
        <!-- CSS 적용 -->
        <link rel="stylesheet" href="../../style/base.css?after">
        <link rel="stylesheet" href="../../style/container.css">
        <link rel="stylesheet" href="./style/document.css">

        <!-- 폰트페이스 -->
        <link href="../../res/font/SUITE-Variable.css" rel="stylesheet"> 

    </head>

    <body class="document-fade">
        <!-- 앱 컨테이너 -->
        <div class="container">
            <!-- 제목 컨테이너 -->
            <div class="document-title-box">
                <?php
                    include './content.php';

                    $doctype = $_GET['doctype'];

                    echo '<div class="title">'.$title[$doctype].'</div>';
                    echo '<div class="subtitle">'.$subtitle[$doctype].'</div>;';

                ?>
            </div>

            <div class="split"></div>

            <!-- 콘텐츠 컨테이너 -->
            <div class="content">
                <!-- 스크롤 컨테이너 -->
                <div class="document-scoll-box">
                    <?php
                        echo '<div class="document">'.$content[$doctype].'</div>';
                    ?>
                </div>
            </div>

        </div>
    </body>
</html>