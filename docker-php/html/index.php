<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メールフォーム</title>
</head>
<body style="margin-left: 300px; margin-top: 250px;">

    <form method="post" action="send.php">
    <div>氏名</div>
    <input type="text" name="name">
    <div> メールアドレス</div>
    <input type="email" name="mail">
    <div> メッセージ本文</div>
    <textarea name="message"></textarea>
    <div>
        <input type="submit" value="送信">
    </div>
    </form>

</body>
</html>



