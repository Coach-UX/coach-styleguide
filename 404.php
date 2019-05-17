<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Coach Styleguide</title>
		<link href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:800&display=swap" rel="stylesheet">
	</head>
	<body>
				<style>
					#notfound .notfound {
						position: absolute;
						left: 50%;
						top: 50%;
						-webkit-transform: translate(-50%, -50%);
								-ms-transform: translate(-50%, -50%);
										transform: translate(-50%, -50%);
					}
					.notfound {
						max-width: 520px;
						width: 100%;
						text-align: center;
						line-height: 1.4;
					}
					.notfound .notfound-404 {
						height: 190px;
					}
					.notfound .notfound-404 h1 {
						font-family: 'Montserrat', sans-serif;
						font-size: 146px;
						font-weight: 800;
						margin: 0px;
					}
					.notfound .notfound-404 h1>span {
						display: inline-block;
						width: 120px;
						height: 120px;
						background-image: url('https://res.cloudinary.com/dfiwfoxwx/image/upload/v1558114192/crying-emoji.png');
						background-size: cover;
						-webkit-transform: scale(1.4);
								-ms-transform: scale(1.4);
										transform: scale(1.4);
						z-index: -1;
					}
					.notfound h2 {
						font-size: 30px;
						margin: 0;
					}
					.notfound p {
						color: #787878;
						padding: 0 0 10% 0 !important;
					}
					.notfound a {
						padding: 30px 15%;
						border-radius: 0px;
						color: #fff;
						border: 1px solid #000;
						background-color: #000;
						font-family: "termina", sans-serif;
						text-transform: uppercase;
						font-weight: 500;
						font-size: 10px;
						line-height: 15px;
						letter-spacing: 1px;
						transition: border .25s linear, outline .25s linear, background-color .25s ease;
						color: rgba(0,0,0,1);
						border: 1px solid rgba(0,0,0,.15);
						background-color: #fff;
					}
					.notfound a:hover {
						color: rgba(0,0,0,1);
						border: 1px solid rgba(0,0,0,.6);
					}
					@media only screen and (max-width: 767px) {
						.notfound .notfound-404 {
							height: 115px;
						}
						.notfound .notfound-404 h1 {
							font-size: 86px;
						}
						.notfound h2 {
							font-size: 22px;
						}
						.notfound .notfound-404 h1>span {
							width: 86px;
							height: 86px;
						}
						.notfound p {
							padding: 2% 5% 12% 5% !important;
						}
						.notfound a {
							padding: 25px 15%;
						}
					}
				</style>
		<div id="notfound">
			<div class="notfound">
				<div class="notfound-404">
					<h1>4<span></span>4</h1>
				</div>
				<h2>Oops! Page Not Found</h2>
				<p>Sorry but the page you're looking for either doesn't exist, has been removed or is temporarily unavailable.</p>
				<a class="primary-btn" href="<?php echo home_url(); ?>">Back to homepage</a>
			</div>
		</div>
	</body>
</html>
