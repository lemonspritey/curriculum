<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require_once('getData.php');
    $data = new getData();
    ?>
    <div class="container">
        <div class="container2">
            <img src="logo.png" alt="logo" class="logo">
            <div class="container3">
                <p class="para">ようこそ　<?php echo $data -> getUserData()["first_name"].$data -> getUserData()["last_name"];?> さん</p>
                <p class="para2">最終ログイン日：<?php echo $data -> getUserData()["last_login"];?></p>
            </div>
        </div>
        <div class = "container4">
            <table>
                <tr>
                    <th>記事ＩＤ</th>
                    <th>タイトル</th>
                    <th>カテゴリ</th>
                    <th>本文</th>
                    <th>投稿日</th>
                </tr>
                <?php foreach ($data -> getPostData() as $postData): ?>
                <tr>
                    <td><?php echo $postData["id"]?></td>
                    <td><?php echo $postData["title"]?></td>
                    <td><?php 
                    switch ($postData["category_no"]) {
                        case 1:
                            echo "食事";
                            break;
                        case 2:
                            echo "旅行";
                            break;
                        default:
                            echo "その他";
                            break;
                    }?></td>
                    <td><?php echo $postData["comment"]?></td>
                    <td><?php echo $postData["created"]?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        </div>
        <p class="para3">Y&I group,inc</p>
    </div>
</body>
</html>