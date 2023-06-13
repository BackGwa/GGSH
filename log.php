<!DOCTYPE html>

<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="title">계급 기록</div>
                <div class="subtitle">기록한 점수를 볼 수 있어요!</div>
            </div>
            <!-- 콘텐츠 컨테이너 -->
            <div class="content">
                <!-- 스크롤 컨테이너 -->
                <div class="scoll-box">
                    <?php 
                        include './DB.php';

                        $query = "select * from log order by number desc";
                        $result = mysqli_query($DB, $query);
                        $rank = 1;

                        while($row = mysqli_fetch_array($result)){
                            echo '<div class="rankitem hover-effect">';
                            echo '<div class="ranknumber">-></div>';
                            echo '<div class="rankname">'.$row['text'].'</div>';
                            echo '<div class="rankcode">'.$row['number'].'번째에 기록 되었어요!</div>';
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