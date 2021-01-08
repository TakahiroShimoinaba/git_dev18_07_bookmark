<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>読んだ本</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">Bookmark一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->
    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>Bookmarks</legend>
                <label>書籍名：<input type="text" name="bookname"></label><br>
                <label>URL：<input type="text" name="url"></label><br>
                <label>書籍コメント：<textArea name="comment" rows="4" cols="70"></textArea></label><br>
                <input type="submit" value="登録">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
</body>
</html>