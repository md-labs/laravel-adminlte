<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{{ $pageTitle }}}</title>

    @include('adminlte::_layout.css')
    @include('adminlte::_layout.js')
</head>
<body class="skin-red sidebar-mini">
    @yield('content')
</body>
</html>