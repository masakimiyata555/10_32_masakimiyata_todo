<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=<device-width>, initial-scale=1.0"> -->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body style="
    background-color:white;
    box-sizing: border-box;
    text-align: center;
">
    <!-- <div class="page01">
        <h1>受け入れた人たちを見る</h1>
        <button id="start">START</button>
    </div> -->

    <div class="page01">
        <h1 style="
                text-align: center;
                font-family: 'Noto Serif JP', serif;
                display: block;
                margin: top;
                margin: top;
                margin-top: 6%;
            ">
            動画を見て新しい知識を得よう。<br>
            PHP編
        </h1>

        <div id="videoList" style="
        margin: auto;
        padding-top: 40px;
        width: 1216px;
    ">
        </div>

        <a href="http://localhost/10_32_masakimiyata_todo/page2.php" style="position: right;position: absolute;right: 16%;top: 74%;">次へ</a>
        <!-- todo -->
        <!-- <form method="POST" action="create_file.php" enctype="multipart/form-data">
            <fieldset style="
            position: fixed;
            left: 71%;
            top: 76%;
            background: white;
            opacity: 100%;
            border: none;
        ">
                 <a href="todo_read.php">みんなの投稿を見る</a> -->
        <!-- <a href="todo_logout.php">logout</a>
                <div>
                    <input type="file" name="upfile" accept="image/*" capture="camera">
                </div>
                <div>
                    <button>submit</button>
                </div>
                <p><a href="http://localhost/20200723hackfes/input.php">リンクカテゴリーのメニューへ</a></p> -->
        <!-- </fieldset> -->
        <!-- </form> -->

        <div style="
    display: flex;
    flex-direction: column;
    position: absolute;
    top: 77%;
    right: 30.1%;
    font-size: small;
    text-align: left;
">
            <p style="
    background: none;
    border: none;
">新しいコメントを追加</p>
            <input type="text" name="todo" style="
    width: 554px;
    height: 47px;
">
            <button style="
    background: none;
    border: none;
">送信</button>
            <a href="todo_read.php" style="text-decoration: none;font-size: small;">コメント一覧</a>
        </div>
        </fieldset>
        </form>


        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/app.js"></script>

        <script>
            $("#start").on("click", function() {
                $(".page01").remove();
                $(".page02").fadeIn();
            });
        </script>

</body>

</html>