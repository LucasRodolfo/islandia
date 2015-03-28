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
                            <li>{{ HTML::link('list', 'Ir para estatuto', array('class'=>'navbar-link navbar-brand')); }}</li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::guest())
                                <li>{{ HTML::link('login', 'Login', array('class'=>'navbar-link')) }}</li>
                            @else
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}<strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            {{ HTML::link('profile', 'Profile', array()) }}
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href='{{ url('logout') }}'>Logout <strong class="glyphicon glyphicon-off"></strong></a>
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
        <div class="row clearfix center">
            <div class="col-md-12 column">
                <h6 class="text-muted">Com <strong class="glyphicon glyphicon-heart conpec"></strong> por <a class="navbar-link conpec" href="http://www.conpec.com.br">Conpec</a></h6>
            </div>
        </div>
    </div>
</body>
</html>
