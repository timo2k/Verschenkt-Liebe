<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Backend</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
			
				<span class="navbar-brand">Verschenkt Liebe CMS</span>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Username <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Nachrichten</a>
							</li>
							<li><a href="#">Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<ul class="nav nav-pills nav-stacked">
					<h3>Allgemein</h3>
					<li role="presentation"><a href="#">Dashboard</a>
					</li>
					<li role="presentation"><a href="#">Einstellugen</a>
					</li>
					<li role="presentation"><a href="#">Werkzeuge</a>
					</li>
					<h3>Inhaltsverwaltung</h3>
					<li role="presentation"><a href="#">Seiten</a>
					</li>
					<li role="presentation"><a href="#">News</a>
					</li>
					<li role="presentation"><a href="#">Bewerbungen</a>
					</li>
					<li role="presentation"><a href="#">Forum</a>
					</li>
					<h3>Userverwaltung</h3>
					<li role="presentation"><a href="#">Benutzer</a>
					</li>
					<li role="presentation"><a href="#">Rechte</a>
					</li>
				</ul>
			</div>
			<div class="col-md-8">
				<div class="jumbotron">
					<h1>Hallo, Username</h1>
					<p>Willkommen im Verschenkt Liebe Backend!</p>
				</div>

			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>