<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield("title", "Developer's Best Friend")</title>
	{{ HTML::style('/packages/bootstrap-3.2.0-dist/css/bootstrap.min.css'); }}
	{{ HTML::style('/packages/bootstrap-3.2.0-dist/css/starter-template.css'); }}
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Developer's Best Friend</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/lorem-ipsum">Lorem Ipsum Generator</a></li>
            <li><a href="/random-user">Random User</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    @yield('content')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{ HTML::script('/packages/bootstrap-3.2.0-dist/js/bootstrap.min.js'); }}

</body>
</html>
