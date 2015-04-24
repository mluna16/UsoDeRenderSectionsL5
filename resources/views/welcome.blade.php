<html>
	<head>
		<title>Uso de Render Sections L5</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				color: #333333;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
                background-color: #c5e1a5;
			}

		</style>
	</head>
	<body>
    <div class="container">
        <div class="page-header">
            <h1>Sticky footer ()</h1>
        </div>

        <div>
            @section('contentPanel')

            @show
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</body>
</html>
