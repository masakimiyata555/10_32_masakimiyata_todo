<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="
    text-align: center;
">

    <h1>
        課題提出学習TODO
    </h1>

    <!-- <p>
    あなたの誕生日をおしえてください
</p> -->

    <p>
        <input type="text" id="userYear" maxlength="4">年
        <input type="text" id="userMonth" maxlength="2">月
        <input type="text" id="userDate" maxlength="2">日
        <input type="text" id="userHour" maxlength="2">時
        <input type="text" id="userMin" maxlength="2">分
        <input type="text" id="userSec" maxlength="2">秒<br>
        <input type="button" value="上記の日時までカウントダウンする" onclick="showCountdown();">
    </p>
    <p id="RealtimeCountdownArea">あなたの課題提出締切日1899/11/30 00:00:00は、既に44065日21時間37分59秒に過ぎました。</p>


    <!-- todo -->
    <form method="POST" action="create_file.php" enctype="multipart/form-data">
        <fieldset>
            <legend>DB連携型todoリスト（入力画面）</legend>
            <a href="todo_read.php">一覧画面</a>
            <a href="todo_logout.php">logout</a>
            <div>
                todo: <input type="text" name="todo">
            </div>
            <div>
                deadline: <input type="date" name="deadline">
            </div>
            <div>
                <button>submit</button>
            </div>
        </fieldset>
    </form>

    <p><a href="http://localhost/10_32_masakimiyata_todo/index.html">リンクカテゴリーのメニューへ</a></p>


    <h1>今回学んでためになったこと事をつぶやこう</h1>
    <textarea id="tweetTextArea"></textarea>
    <button id="tweetButton">ツイートする</button>


    <script src="main.js" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        function set2fig(num) {
            // 数値が1桁だったら2桁の文字列にして返す
            var ret;
            if (num < 10) {
                ret = "0" + num;
            } else {
                ret = num;
            }
            return ret;
        }

        function isNumOrZero(num) {
            // 数値でなかったら0にして返す
            if (isNaN(num)) {
                return 0;
            }
            return num;
        }

        function showCountdown() {
            // 現在日時を数値(1970-01-01 00:00:00からのミリ秒)に変換
            var nowDate = new Date();
            var dnumNow = nowDate.getTime();

            // 指定日時を数値(1970-01-01 00:00:00からのミリ秒)に変換
            var inputYear = document.getElementById("userYear").value;
            var inputMonth = document.getElementById("userMonth").value - 1;
            var inputDate = document.getElementById("userDate").value;
            var inputHour = document.getElementById("userHour").value;
            var inputMin = document.getElementById("userMin").value;
            var inputSec = document.getElementById("userSec").value;
            var targetDate = new Date(isNumOrZero(inputYear), isNumOrZero(inputMonth), isNumOrZero(inputDate), isNumOrZero(inputHour), isNumOrZero(inputMin), isNumOrZero(inputSec));
            var dnumTarget = targetDate.getTime();

            // 表示を準備
            var dlYear = targetDate.getFullYear();
            var dlMonth = targetDate.getMonth() + 1;
            var dlDate = targetDate.getDate();
            var dlHour = targetDate.getHours();
            var dlMin = targetDate.getMinutes();
            var dlSec = targetDate.getSeconds();
            var msg1 = "課題提出の日" + dlYear + "/" + dlMonth + "/" + dlDate + " " + set2fig(dlHour) + ":" + set2fig(dlMin) + ":" + set2fig(dlSec);

            // 引き算して日数(ミリ秒)の差を計算
            var diff2Dates = dnumTarget - dnumNow;
            if (dnumTarget < dnumNow) {
                // 期限が過ぎた場合は -1 を掛けて正の値に変換
                diff2Dates *= -1;
            }

            // 差のミリ秒を、日数・時間・分・秒に分割
            var dDays = diff2Dates / (1000 * 60 * 60 * 24); // 日数
            diff2Dates = diff2Dates % (1000 * 60 * 60 * 24);
            var dHour = diff2Dates / (1000 * 60 * 60); // 時間
            diff2Dates = diff2Dates % (1000 * 60 * 60);
            var dMin = diff2Dates / (1000 * 60); // 分
            diff2Dates = diff2Dates % (1000 * 60);
            var dSec = diff2Dates / 1000; // 秒
            var msg2 = Math.floor(dDays) + "日" +
                Math.floor(dHour) + "時間" +
                Math.floor(dMin) + "分" +
                Math.floor(dSec) + "秒";

            // 表示文字列の作成
            var msg;
            if (dnumTarget > dnumNow) {
                // まだ期限が来ていない場合
                msg = msg1 + "までは、あと" + msg2 + "です。";
            } else {
                // 期限が過ぎた場合
                msg = msg1 + "は、既に" + msg2 + "に過ぎました。";
            }

            // 作成した文字列を表示
            document.getElementById("RealtimeCountdownArea").innerHTML = msg;
        }
        // 1秒ごとに実行
        setInterval('showCountdown()', 1000);

        document.querySelector('#tweetButton').addEventListener('click', () => {
            // ツイート内容を取得
            let tweetText = document.querySelector('#tweetTextArea').value;

            // 半角スペースと #JavaScriptをツイート文言に追加する
            tweetText += " #GsHackFes2020";

            // エンコードする
            const encodedText = encodeURIComponent(tweetText);

            // ツイート用リンクを作成する
            const tweetURL =
                `https://twitter.com/intent/tweet?text=${encodedText}`;

            // ツイート用リンクを開く
            window.open(tweetURL);
        });
    </script>

</body>
</script>

</html>