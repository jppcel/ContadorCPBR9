<html>
	<head>
		<meta charset="utf-8" />
		<title>Contador #CPBR9</title>

		<link rel="stylesheet" href="css/flipclock.css"/>
		<link rel="stylesheet" href="css/style.css"/>
		<link href="//fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css"/>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/flipclock.js"></script>
	</head>
	<body>
		<header>
			<?php /*<a href="http://www.campuseirosclub.com"><img src="img/logoCampuseiros.png"></a> */ ?>
			<div id="quantotempo">
				<h1>Quanto tempo falta para a Campus Party?</h1>
			</div>
		</header>
		<div class="clock" style="margin:2em;"></div>

		<script type="text/javascript">
			var clock;

			$(document).ready(function() {

				// Grab the current date
				var currentDate = new Date();

				// Set some date in the future. In this case, it's always Jan 1
				var futureDate  = new Date("January 26, 2016 12:00:00");

				// Calculate the difference in seconds between the future and current date
				var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

				// Instantiate a coutdown FlipClock
				clock = $('.clock').FlipClock(diff, {
					clockFace: 'DailyCounter',
					language: "pt-br",
					countdown: true
				});
			});
		</script>
		<div id="apoio">
				<h3>Apoio*:</h3>
				<div class="coluna1-1"><a href="http://youtube.programatech.com" target="_blank"><img src="img/logoTech.svg" /></a></div>
		</div>
		<div id="a">
			<script type="text/javascript">
				bb_bid = "1621582";
				bb_lang = "pt-BR";
				bb_name = "custom";
				bb_limit = "8";
				bb_format = "bbb";
			</script>
			<script type="text/javascript" src="http://static.boo-box.com/javascripts/embed.js"></script>
		</div>
		<footer>
			Site não responsivo. Melhor visualizado em monitores com resolução mínima de 800x600p.<br>
			<small>*O apoio mencionado se refere ao projeto desse site, na qual não tem nenhuma relação com a empresa organizadora do evento, ou com o evento diretamente.</small>
		</footer>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-13289088-26', 'auto');
		  ga('send', 'pageview');

		</script>

	</body>
</html>
