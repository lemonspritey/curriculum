<?php
require_once('db_connect.php');
if (isset($_POST["signUp"]) && !empty($_POST["name"]) && !empty($_POST["password"])) {
    $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
    $pdo = db_connect();
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name',  $_POST["name"]);
        $password = $_POST["password"];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindValue(':password', $password_hash);
        $stmt->execute();
        echo '登録が完了しました。';
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サインアップ</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>ユーザー登録画面</h1>
    <form method="POST" action="">
        <input type="text" name="name" id="name" placeholder="ユーザー名">
        <input type="text" name="pass" id="pass" placeholder="パスワード">
        <input type="submit" value="新規登録" id="signUp" name="signUp">
    </form>
    <a id="back" href="main.php">ログイン画面に行く</a>
</body>

</html>