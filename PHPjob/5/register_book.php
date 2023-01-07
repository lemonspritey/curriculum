<?php
require_once('db_connect.php');
if (isset($_POST["register"]) && !empty($_POST["title"]) && !empty($_POST["date"] && !empty($_POST["stock"]))) {
    $sql = "INSERT INTO books (title, date, stock) VALUES (:title, :date, :stock)";
    $pdo = db_connect();
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':title',  $_POST["title"]);
        $stmt->bindValue(':date',  date("Y-m-d", strtotime($_POST["date"])));
        $stmt->bindValue(':stock',  $_POST["stock"]);
        $stmt->execute();
        echo '本の登録完了。';
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
    <title>本登録</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <h1>本　登録画面</h1>
    <form method="POST" action="">
        <input placeholder="タイトル" type="text" name="title" id="title">
        <input placeholder="発売日" type="text" name="date" id="date">
        <div class="stock">
            <p>在庫数</p>
            <select placeholder="" name="stock" id="stock">
                <option value="" disabled selected>選択してください</option>
                <?php
                for ($i = 1; $i < 100; $i++) {
                ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="buttons">
            <input type="submit" value="登録" id="register" name="register">
            <a href="main.php">戻る</a>
        </div>
    </form>
</body>

</html>