<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-アンケートフォーム</title>
</head>
<body>

    <div>
        <form action="complete.php" method="post">
            <p>回答者名: <input type="text" name="name" placeholder="回答者名"></p>
            <p>好きな食べ物をご記入ください: <input type="text" name="food_awnser" placeholder="好きな食べ物"></p>
            <p>趣味をご記入きださい: <input type="text" name="hobby_awnser" placeholder="趣味"></p>
            <button type="submit">送信</button>
        </form>
    </div>
  
</body>
</html>