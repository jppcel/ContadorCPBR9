<html>
	<head>
		<meta charset="utf-8" />
		<title>Contador #CPBR9 - Campuseiros Club</title>

		<link rel="stylesheet" href="css/flipclock.css"/>
		<link rel="stylesheet" href="css/style.css"/> 
		<link href="//fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css"/>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/flipclock.js"></script>
	</head>
	<body>
		<header>
			<a href="http://www.campuseirosclub.com"><img src="img/logoCampuseiros.png"></a>
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
		<footer>
			Site não responsivo. Melhor visualizado em monitores com resolução mínima de 800x600p.
		</footer>

	</body>
</html>
