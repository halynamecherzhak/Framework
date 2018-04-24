<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Epam Systems</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
    <script type="text/javascript">
        // return a random integer between 0 and number
        function random(number) {

            return Math.floor( Math.random()*(number+1) );
        };

        // show random quote
        $(document).ready(function() {

            var quotes = $('.quote');
            quotes.hide();

            var qlen = quotes.length; //document.write( random(qlen-1) );
            $( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
        });
    </script>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <a href="/">Epam</span> <span class="cms">TEAM</span></a>
        </div>
        <div id="menu">
            <ul>
                <li class="first active"><a href="/">Home</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/portfolio">Portfolio</a></li>
                <li class="last"><a href="/contacts">Contacts</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
            <br class="clearfix" />
        </div>
    </div>
    <div id="page">
        <div id="sidebar">
            <div class="side-box">
                <h3>Random quote </h3>
                <p align="justify" class="quote">
                    «Сайт, как живой организм, изменяется и развивается.
                    Нельзя сразу написать идеальный вариант и на этом откланяться - это утопия»
                </p>
                <p align="justify" class="quote">
                    «Все должно быть очень просто, как текстовый файл и при этом функционально
                    и тогда пользователи от нас уйдут»
                </p>
                <p align="justify" class="quote">
                    «Критика - это когда критик объясняет автору, как сделал бы он, если бы умел»
                </p>
                <p align="justify" class="quote">
                    «Сумасшедшим становиться тот, кто попытался разобраться в этом сумасшедшем мире»
                </p>
                <p align="justify" class="quote">
                    «Опытный разработчик знает, какой выбор ведет к поставленной цели, в то время как
                    новичок каждый раз делает шаг в неизвестность»
                </p>
            </div>
        </div>
        <div id="content">
            <div class="box">
                <?php include 'application/views/'.$content_view; ?>

            </div>
            <br class="clearfix" />
        </div>
        <br class="clearfix" />
    </div>
    <div id="page-bottom">
        <div id="page-bottom-sidebar">
            <h3>Our contacts</h3>
            <ul class="list">

                <li>skype name: Halyna Mecherzhak</li>
                <li class="last">email: galya.mech@gmail.com</li>
            </ul>
        </div>
        <div id="page-bottom-content">
            <h3>About company</h3>
            <p>
                Here is the house.
                Jack built it.

                And this is wheat.
                Which is stored in a dark closet
                In the house
                Jack built it.

                And this is a merry bird-tits
                Who deftly steals the wheat,
                Which is stored in a dark closet
                In the house
                Jack built it.

                Here is the cat
                Who scares and catches his tits
                Who deftly steals the wheat,
                Which is stored in a dark closet
                In the house
                Jack built it.
            </p>
        </div>
        <br class="clearfix" />
    </div>
</div>
<div id="footer">
    <a href="/">Epam System</a> &copy; 2018</a>
</div>
</body>
</html>