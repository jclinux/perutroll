<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peru Troll</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        <div class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <!--<li role="presentation" class="active"><a href="#">Home</a></li>
                    <li role="presentation"><a href="#">About</a></li>-->
                    <li role="presentation"><a href="#">Contact</a></li>
                </ul>
            </nav>
            <h3 class="text-muted">Meme Generator</h3>
        </div>

        <div class="jumbotron">
            <h1>Peru Troll</h1>
            <p class="lead">Genera el meme con el rostro de tus amigos.</p>
            <p><a class="btn btn-lg btn-success" href="{{url('/reactjs')}}" role="button">Generar!</a></p>
        </div>

        <div class="row marketing">
            @foreach ($memes as $node)
                <div class="col-lg-4">
                    <a href="{{$node->attributes['src']->value}}">
                        <img class="img-responsive img-rounded" src="{{$node->attributes['src']->value}}" />
                    </a>
                </div>

            @endforeach

        </div>

        <footer class="footer">
            <p>&copy; 2017 Company PeruTroll, Inc.</p>
        </footer>

    </div> <!-- /container -->
</body>
</html>