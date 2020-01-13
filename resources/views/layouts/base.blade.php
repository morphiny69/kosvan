<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : BlackPolish 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20121026

-->
<html xmlns="">
<ul>
    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </ul>
<head>
<meta name="keywords" content="ремкомплект для дроссельных заслонок, модуль закрыти бгажника Audi, камера заднего вида Hyundai, ремонт блока управления LED KoiTo 8R0907472" />
<meta name="description" content="Ремкомплекты для дроссельных заслонок VW, Land Rover, Citroen, Seat... металические шестеренки, модуль закрытия багажника Audi Q5\Q7, ремонт блока LED KoiTo 8R0907472," />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Kosvan Studio</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">Kosvan Studio</a></h1>
            </div>
            <div id="menu">

                <ul>
                    <li class="current_page_item"><a href="index.html">Домой</a></li>
                    <li><a href="zap.html">Автозапчасти</a></li>
                    <li><a href="zaslonka.html">Шестеренки</a></li>
                    <li><a href="led.html">Блок LED для Q5</a></li>
                    <li><a href="bag.html">Модуль для  Audi Q5\Q7</a></li>
                    <li><a href="price.html">Цены и доставка</a></li>
                    
                </ul>

                
            </div>
        </div>
        <div id="banner">
            <div class="content">
                <div><img src="images/img02.jpg" width="1000" height="400" alt="" /></div>
            </div>
        </div>
    </div>
    <!-- end #header -->
    <div id="page">
@yield("content")
    </div>
    <!-- end #page --> 
    
<div id="footer">
    <p>Kosvan Studio (c) 2014 - 2016 <a href="kosvan.ru">Kosvan.ru</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
