<!DOCTYPE html>

<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1">
        <title>계급사회</title>

        <!-- CSS 적용 -->
        <link rel="stylesheet" href="./style/base.css">
        <link rel="stylesheet" href="./style/container.css">
        <link rel="stylesheet" href="./style/rank.css">

        <!-- 폰트페이스 -->
        <link href="./res/font/SUITE-Variable.css" rel="stylesheet"> 

    </head>

    <body>
        <!-- 앱 컨테이너 -->
        <div class="container">
            <!-- 제목 컨테이너 -->
            <div class="title-box">
                <div class="title">계급</div>
                <div class="subtitle">방금 전에 새로고침 했어요!</div>
            </div>
            <!-- 콘텐츠 컨테이너 -->
            <div class="content">
                <!-- 스크롤 컨테이너 -->
                <div class="scoll-box">
                    <?php 
                        include './DB.php';

                        $query = "select * from board order by score desc";
                        $result = mysqli_query($DB, $query);
                        $rank = 1;

                        while($row = mysqli_fetch_array($result)){
                            echo '<div class="rankitem hover-effect">';
                            echo '<div class="ranknumber">'.$rank.'위'.'</div>';
                            echo '<div class="rankname">'.$row['name'].'</div>';
                            echo '<div class="rankcode">'.$row['uid'].'</div>';
                            echo '<div class="rankscore">'.$row['score'].'점</div>';
                            echo '</div>';

                            $rank++;
                        }
                        mysqli_close($DB);
                    ?>
                </div>
            </div>
        </div>
        <script src="./script/hover.js"></script>
    </body>
</html>