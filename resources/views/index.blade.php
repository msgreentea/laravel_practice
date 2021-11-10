<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/thank" method="POST">
        @csrf
        <label for="name">
            氏名
            <input type="text" name="name">
        </label>
        <label for="email">
            メールアドレス
            <input type="text" name="email">
        </label>
        <input type="submit" value="送信する">
    </form>
</body>
</html>
