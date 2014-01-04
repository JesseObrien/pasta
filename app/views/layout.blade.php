<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Pasta Bucket</title>
  <meta name="viewport" content="width=device-width">

  {{ HTML::style('css/bootstrap.min.css') }}
  {{ HTML::style('css/style.css') }}
</head>
<body onload="prettyPrint()">

  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://paste.jesse-obrien.ca">
          Pasta | <small>Note: Everything on this bucket will be wiped daily at 12:00am EST.</small>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="nav">
      <ul class="nav navbar-nav pull-right">
        @yield('buttons')
      </ul>
    </div><!-- /.navbar-collapse -->

  </nav>



  <div id="container">
    @yield('content')
  </div>

  {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js') }}
  {{ HTML::script('js/bootstrap.min.js') }}
  {{ HTML::script('js/prettify.js') }}
  {{ HTML::script('js/tabby.js') }}
  {{ HTML::script('js/script.js') }}
  @yield('scripts')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46802541-1', 'jesse-obrien.ca');
  ga('send', 'pageview');

</script>
</body>
</html>
