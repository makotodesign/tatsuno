<?php
include 'dbh.php';

$stmt=$dbh->query('SELECT * FROM posts WHERE id=2');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="admin.css">
<title>たつの
トップページコンテンツ簡易投稿画面</title>
</head>
<body>
<div class="container">
    <h1 class="maintitle">たつの
        トップページコンテンツ簡易投稿画面</h1>
    <div class="content">
        <?php foreach($stmt as $row): ?>
       <h2 class="subtitle">section1投稿</h2>
        <form action="confirm1.php" method="post" class="input">
         
           <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" class="input_title" value="<?php echo $row['title']; ?>"><br>
            </p>
            <p>
            <label for="title">内容</label><br>
                <textarea name="content" class="input_textarea" ><?php echo $row['content']; ?></textarea><br>
            </p>
           
            <p>
            <input type="submit" value="確認">
            </p>
                 
        </form>
        <?php endforeach; ?> 
    </div>
    
    
            
</div>
</body>
</html>