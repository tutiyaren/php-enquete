<?php
use App\Enquete;
require '../app/Enquete.php';

$name = $_POST['name'];
$food_awnser = $_POST['food_awnser'];
$hobby_awnser = $_POST['hobby_awnser'];

$pdo = new PDO(
    'mysql:host=mysql;dbname=questionnaireform',
    'root',
    'password'
);

$sendModel = new Enquete($pdo);
$send = $sendModel->addEnquete($name, $food_awnser, $hobby_awnser);

if(empty($name) || empty($food_awnser) || empty($hobby_awnser)) {
    $errorMessage = "「回答者名」「好きな食べ物」「趣味」のどれかが記入されていません";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-アンケートフォーム</title>
</head>
<body>

    <div>
        <!-- OKな場合 -->
        <?php if(!(isset($errorMessage))): ?>
            <h1>アンケート完了</h1>
        <? endif; ?>
        <!-- NGな場合 -->
        <?php if(isset($errorMessage)): ?>
            <p><?php echo $errorMessage ?></p>
        <?php endif ?>

        <!-- 共通 -->
        <a href="index.php">アンケート画面へ</a>
    </div>
  
</body>
</html>