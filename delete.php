<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メモ帳</title>
</head>
<body>
  <main>
    <h2>削除確認</h2>
    <?php
    if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
      $id = $_REQUEST['id'];
      $statement = $db->prepare('DELETE FROM memos WHERE id=?');
      $statement->execute(array($id));
    }
    ?>
    <pre>
      <p>メモを削除しました</p>
    </pre>
    <p><a href="index.php">戻る</a></p>
  </main>
</body>
</html>