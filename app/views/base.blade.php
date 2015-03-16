<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <title>Bootstrap 3, from LayoutIt!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    {{ HTML::style('bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('bootstrap/css/style.css') }}

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    {{ HTML::script('boostrap/js/html5shiv.js') }}
    <![endif]-->

    <!-- Fav and touch icons -->
    {{ HTML::link('bootstrap/img/apple-touch-icon-144-precomposed.png', '', array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '144x144')) }}
    {{ HTML::link('bootstrap/img/apple-touch-icon-114-precomposed.png', '', array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '114x114')) }}
    {{ HTML::link('bootstrap/img/apple-touch-icon-72-precomposed.png', '', array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '72x72')) }}
    {{ HTML::link('bootstrap/img/apple-touch-icon-57-precomposed.png', '', array('rel' => 'apple-touch-icon-precomposed')) }}
    {{ HTML::link('bootstrap/img/favicon.png', '', array('rel' => 'shortcut icon')) }}

    {{ HTML::script('bootstrap/js/jquery.min.js') }}
    {{ HTML::script('bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('bootstrap/js/scripts.js') }}
</head>
<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a class="navbar-link navbar-brand" href="#">Ir para estatuto</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::guest())
                                <li><a class="navbar-link" href="login">Login</a></li>
                            @else
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}<strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Action</a>
                                        </li>
                                        <li>
                                            <a href="#">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#">Something else here</a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href="logout">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        @yield('body')
    </div>
</body>
</html>