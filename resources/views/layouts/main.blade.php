<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	@yield('content')
		<footer>
			<div class="wrapper">
				<div class="footer-box">
					<div class="company-footer">
						<img src="img/logo.png">
						<h2>Desafio Laravel - Projeto Prático</h2>
						<p>A maneira mais fácil de fazer manutenção do seu veículo</p>
					</div>
				</div>
				<div class="footer-box">
				</div>
				<div class="footer-box">
					<h2>Nos encontre nas redes sociais</h2>
					<ul class="footer-list">
						<li>
							<a href="#">
								<i class="fab fa-facebook-square"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-instagram"></i>
								<span>Instagram</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-linkedin"></i>
								<span>Linkedin</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
</body>
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</html>
