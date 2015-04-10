<html>
	<head>
		<title>
			IMG-stream
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/flat-ui.min.css">
		<link type="text/css" rel="stylesheet" href="css/demo.css">
		<link type="text/css" rel="stylesheet" href="css/application.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="js/main.js" ></script>
	</head>
	<body>
	<div class="container">
		<div id="header">
			<div class="col-md-offset-4 col-md-4"><h1>Stream</h1></div>

		</div>

		<div class="row" id="content">
			<div class="col-xs-offset-2 col-xs-8 player" id="player">
				<form action="player.php?load=1" class="login-form" method="post" id="requestForm">
				<div class="form-group">
				  <input type="input" class="form-control" placeholder="Song Link or Search Youtube" name="link" id="link" required>
				</div>

				<div class="form-group row">
				<input type="submit" class="btn btn-primary btn-lg col-md-offset-3 col-md-6" value="<<< Stream >>>">
				</div>
				</form>

				<div class="resultHolder">
					<div class="results" id="results">
						<ul>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


  </body>
</html>