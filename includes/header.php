<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Naruto Site</title>
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div id="container">
            <div id="header">
                <span class="banner"></span>
                <center>
                    <img src="images/banner.jpg" alt="Banner Image" style="width:950px"/>
                </center>
            </div> <!-- end header -->
            
            <div id="navigation">
                <div style="float: left">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="read_manga.php">Manga</a></li>
                        <li><a href="watch_anime.php">Anime</a></li>
                        <li><a href="listen_soundtrack.php">Sound Track</a></li>
                        <li><a href="read_wiki.php">Narutopedia</a></li>
                        <li><a href="play_game.php">Game</a></li>
                    </ul>
                </div>
                <div style="float: right">
                    <script src="script/clock.js"></script>
                    <b><span id="clock">&nbsp;</span></b>
                </div>
            </div> <!-- end navigation-->
            
            <div id="sidebar">
                <fieldset>
                    <legend>Manga</legend>
                    <ul>
                        <li><a href="read_manga.php?chapter=chapter_3">Truyện tranh tập 7</a><img border="0" src="images/new.gif"></li>
                        <li><a href="read_manga.php?chapter=chapter_2">Truyện tranh tập 6</a></li>
                        <li><a href="read_manga.php?chapter=chapter_1">Truyện tranh tập 5</a></li>
                    </ul>
                </fieldset>
                <fieldset>
                    <legend>Anime</legend>
                    <ul>
                        <li><a href="watch_anime.php?chapter=episode_3.mp4">Phim tập 3</a><img border="0" src="images/new.gif"></li>
                        <li><a href="watch_anime.php?chapter=episode_2.mp4">Phim tập 2</a></li>
                        <li><a href="watch_anime.php?chapter=episode_1.mp4">Phim tập 1</a></li>
                    </ul>
                </fieldset>
                <fieldset>
                    <legend>Game</legend>
                    <a href="play_game.php">Flappy Naruto</a><img border="0" src="images/hot.gif">
                </fieldset>
            </div> <!-- end sidebar -->
            
            <div id="content">