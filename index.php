<?php
session_start();
if (isset($_SESSION['user'])) {
	exit();
}

?>
<!DOCTYPE html>
<html>

<head>
	<link rel="icon" type="images/png" href="./assets/img/bg.png">
	<title>Budhi Asih - Login</title>
	<style type="text/css">
		body {
			margin: 0;
		}

		img {
			margin-bottom: 20px;
		}

		img:hover {
			box-shadow: none;
		}

		.form {
			background: #eeeeee;
			/*memberi warna pada background*/
			border-radius: 20px;
			/*border-radius:membuat lengkungan pada pinggirnya*/
			margin: auto;
			/*membuat rata kanan dan kiri*/
			color: white;
			/*memberi warna pada teksnya*/
			width: 350px;
			/*mengatyyr lebar pada form*/
			height: 200px;
			/*mengatur lebar (atas ke bawah)*/
			padding: 20px 22px;
			/*mengatur jarak didalam bagian tag form(yang pertama atas dan bawah, yang kedua kiri dan kanan*/
			/*border: 2px solid black;....solid, dotted. (2px adalah ukuran border), (solid adalah tegak lurus), (black adalah warnanye)
	/*box-shadow: 10px 10px 50px black;....value pertama adalah sisi miringnya, kedua adalah bawahnya, ketiga adalah kepudarannya, black adalah warnanya*/
		}

		/* .form:hover{
	box-shadow: 10px 10px 60px black;
} */
		.btn {
			width: auto;
			color: white;
			border-radius: 10px;
			border: none;
			/*menghilangi garis tepi pada form*/
			cursor: pointer;
			/*memberi efek saat diklik*/
			padding: 10px;
			/*mengatur ukuran button pada form*/
		}

		.btn-submit {
			font-family: Georgia;
			background: linear-gradient(60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100%);
			padding: 10px 25px;
			/* transition: ease-in 0.3s;
	-o-transition: ease-in 0.3s; untuk opera */
			/* -webkit-transition: ease-in 0.3s; untuk chrome browser */
			/* -moz-transition: ease-in 0.3s; untuk browser mozilla */

		}

		.btn-submit:hover {
			background: rgba(0, 172, 193, 1);
			color: white;
		}

		h1 {
			font-family: 'Lato', sans-serif;
			font-weight: 300;
			letter-spacing: 2px;
			color: black;
			font-size: 35px;
		}

		p {
			font-family: 'Lato', sans-serif;
			letter-spacing: 1px;
			font-size: 14px;
			color: #333333;
		}

		.header {
			position: relative;
			text-align: center;
			background: linear-gradient(60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100%);
			color: white;
		}

		.inner-header {
			height: 65vh;
			width: 100%;
			margin: 0;
			padding: 0;
		}

		.flex {
			/*Flexbox for containers*/
			display: flex;
			justify-content: center;
			align-items: center;
			text-align: center;
		}

		.waves {
			position: relative;
			width: 100%;
			height: 15vh;
			margin-bottom: -7px;
			/*Fix for safari gap*/
			min-height: 100px;
			max-height: 150px;
		}

		.content {
			position: relative;
			height: 20vh;
			text-align: center;
			background-color: white;
		}

		/* Animation */

		.parallax>use {
			animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
		}

		.parallax>use:nth-child(1) {
			animation-delay: -2s;
			animation-duration: 7s;
		}

		.parallax>use:nth-child(2) {
			animation-delay: -3s;
			animation-duration: 10s;
		}

		.parallax>use:nth-child(3) {
			animation-delay: -4s;
			animation-duration: 13s;
		}

		.parallax>use:nth-child(4) {
			animation-delay: -5s;
			animation-duration: 20s;
		}

		@keyframes move-forever {
			0% {
				transform: translate3d(-90px, 0, 0);
			}

			100% {
				transform: translate3d(85px, 0, 0);
			}
		}

		/*Shrinking for mobile*/
		@media (max-width: 768px) {
			.waves {
				height: 40px;
				min-height: 40px;
			}

			.content {
				height: 30vh;
			}

			h1 {
				font-size: 24px;
			}
		}
	</style>
</head>

<body>
	<div class="header">

		<!--Content before waves-->
		<div class="inner-header flex">
			<form method="post" style="margin-top: 120px;" action="perpustakaan/proses.php">
				<table class="form">
					<tr>
						<td colspan="2">
							<h1 align="center">Halaman Login</h1>
							<center><img src="assets/img/bg.png" width="100px" height="100px"></center>
						</td>
					</tr>
					<tr>
						<td align="center" style="color: black;">Username</td>
						<td>
							:<input type="text" name="username" placeholder="Masukkan Username" required />
						</td>
					</tr>
					<br>
					<tr>
						<td align="center" style="color: black;">Password</td>
						<td>
							:<input type="password" name="password" placeholder="Masukkan Password" required />
						</td>
					</tr>
					<tr style="height: 10px"></tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="submit" id="login" value="Login" class="btn btn-submit" />
						</td>
					</tr>
				</table>
			</form>
		</div>

		<!--Waves Container-->
		<div>
			<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
				<defs>
					<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
				</defs>
				<g class="parallax">
					<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
					<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
					<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
					<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
				</g>
			</svg>
		</div>
		<!--Waves end-->

	</div>
	<!--Header ends-->

	<!--Content starts-->
	<div class="content flex">
		<p>Distributed by <a href="https://www.instagram.com/proyekkemanusiaanstmikikmi.crb/?hl=id" target="https://www.instagram.com/proyekkemanusiaanstmikikmi.crb/?hl=id">US</a> | proyekkemanusiaanstmikikmi <br><br> 2022</p>
	</div>
	<!--Content ends-->
</body>

</html>