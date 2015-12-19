<!DOCTYPE HTML>
<html>
	<head>
        <title>お問い合わせ|元祖ぼっかけうどん　たつの</title>
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
							<div class="inner">

                                <h2 class="title_sub text-center">お問い合わせはこちらから</h2>
                                <form action="thanks.php" method="post">
                                    <div class="row uniform">
                                        <div class="6u 12u$(xsmall)">
                                            <input type="text" name="name" id="name" placeholder="お名前" required/>
                                        </div>
                                        <div class="6u$ 12u$(xsmall)">
                                            <input type="email" name="email" id="email" placeholder="Email" required/>
                                        </div>
                                        <div class="12u$">

                                            <div class="select-wrapper">

                                                <select name="cacategory" id="category">
                                                    <option value="その他">- 内容選択 -</option>
                                                    <option value="所在地へのお問い合わせ">所在地へのお問い合わせ</option>
                                                    <option value="営業日、営業時間のお問い合わせ">営業日、営業時間のお問い合わせ</option>
                                                    <option value="その他">その他</option>

                                                </select>
                                            </div>

                                        </div>
                                        <div class="12u$">
                                            <textarea name="message" id="message" placeholder="問い合わせ内容を記入してください" rows="6"></textarea>
                                        </div>
                                        <div class="12u$">
                                            <ul class="actions">
                                                <li><input type="submit" value="送信" class="special" /></li>
                                                <li><input type="reset" value="リセット" /></li>
                                            </ul>
                                        </div>

                                    </div>
                                </form>
                                

							</div>
						</section>
					</article>

                <?php include 'footer.php'; ?>