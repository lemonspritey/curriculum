<?php
require_once('db_connect.php');
session_start();
if (empty($_SESSION["user_name"])) {
    header("Location: login.php");
    exit;
}
$pdo = db_connect();
if (isset($_POST["delete"]) && !empty($_POST["delete"])) {
    $sql = "DELETE FROM books WHERE id = :id;)";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id',   intval($_POST["delete"]));
        $stmt->execute();
        echo '本の削除完了。';
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}
$sql = "SELECT * FROM books";
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>
<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メイン</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>在庫一覧画面</h1>
    <div class="headerMain">
        <a id="registerBook" href="register_book.php">新規登録</a>
        <a id="mainLogout" href="logout.php">ログアウト</a>
    </div>
    <table>
        <tr>
            <th>タイトル</th>
            <th>発売日</th>
            <th>在庫数</th>
            <th></th>
        </tr>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo date("Y/m/d", strtotime($row['date'])); ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td>
                    <form method="post" action="">
                        <button id="delete" type="submit" name="delete" id="delete" value=<?php echo $row['id'] ?>>削除</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>