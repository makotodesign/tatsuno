<?php
include 'dbh.php';
$title=h($_POST['title']);
$content_before=nl2br($_POST['content']);
$content=strip_tags($content_before,'<br>');
$stmt=$dbh->prepare('UPDATE posts SET title=?,content=? WHERE id=2');
$stmt->execute(array($title,$content));

function h($v){
return htmlspecialchars($v,ENT_QUOTES);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="admin.css">
<title>section1投稿完了</title>
</head>
<body>
<div class="container">
    <h1 class="maintitle">トップページsection1投稿完了</h1>
    <p>
        <a href="http://makotodesign.heteml.jp/tatsuno" target="blank">index.phpを確認してください</a>
    </p>
    <button onClick="location.href='index.php'">管理画面topへ</button>
    
    
            
</div>
</body>
</html>