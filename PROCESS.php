<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>계급사회</title>
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
    <script>
        alert("점수를 완벽하게 등록했어요!");
        location.href = "./register.php";
    </script>
</body>

</html>