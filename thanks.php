<?php 
$name=h($_POST['name']);
$email=h($_POST['email']);
$cacategory=h($_POST['cacategory']);
$message=h($_POST['message']);
$message = str_replace( "\r\n", "\n",$message );
$message = str_replace( "\r", "\n",$message);
// mail送信
$recipient = "jamzip@gmail.com";
$title="たつのホームページからの問い合わせ";
$ip = getenv('REMOTE_ADDR');
$host = gethostbyaddr($ip);
$message .= "Name: ".$name."\n";
$message .= "Email: ".$email."\n";
$message .= "Subject:".$cacategory."\n";
$message .= "Message:\n".$message."\n\n";
$message .= "IP:".$ip." HOST: ".$host."\n";
$headers .= "From: <".$email.">\n"; 
mail($recipient, $title, $message, $headers); 


function h($v){
    return htmlspecialchars($v,ENT_QUOTES);
}
?>
<!DOCTYPE HTML>
<html>
	<head>
        <title>送信完了|元祖ぼっかけうどん　たつの</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
                        <h1 class="title_sub"><a href="index.php">元祖ぼっかけうどん　新開地たつの</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<?php include 'main-navi.php'; ?>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						
						<section class="wrapper style5">
                            <div class="inner vh80">

                                <h2 class="title_sub text-center"><?php echo $name?>様<br>お問い合わせありがとうございます<br>送信完了しました<br>後ほど担当者よりメールにて返信させていただきます</h2>
                               
                                

							</div>
						</section>
					</article>

                <?php include 'footer.php'; ?>