<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo git revert</title>
</head>

<body>
    <div style="margin:20x;">
        <h1 style="margin:0px;">demo git revert</h1>
        <?php
            echo "どうでも良い内容";
        ?>
        <hr>
        <?php
            date_default_timezone_set('Asia/Tokyo');
            $date = date('Y/m/d');
            $time = date('H:i:s');
            $text = "現在の日付: " . $date . "<br>" . "現在の時刻: " . $time;
            echo $text;
        ?>
    </div>
</body>

</html>