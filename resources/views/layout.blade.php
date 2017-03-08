<!DOCTYPE html>
<html>
<head>
	<title></title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">	
</head>
<body class="container">
	@yield('content')
	 <script src="{{ mix('/js/bootstrap.js') }}"></script>
	 <script src="{{ mix('/js/app.js') }}"></script>  
</body>
</html>