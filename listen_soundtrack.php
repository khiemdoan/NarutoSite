<?php include('includes/header.php'); ?>

<style type='text/css'>
    #playlist, audio{background:#666;width:400px;padding:20px;}
    .active a{color:#5DB0E6;text-decoration:none;}
    #playlist li a{color:#eeeedd;background:#333;padding:5px;display:block;}
    #playlist li a:hover{text-decoration:none;}
</style>

<script type='text/javascript' src='script/jquery-1.7.js'></script>
<script type='text/javascript'>//<![CDATA[ 
    $(window).load(function(){
        var audio;
        var playlist;
        var tracks;
        var current;

        init();
        function init(){
            current = 0;
            audio = $('audio');
            playlist = $('#playlist');
            tracks = playlist.find('li a');
            len = tracks.length - 1;
            audio[0].volume = .70;
            playlist.find('a').click(function(e){
                e.preventDefault();
                link = $(this);
                current = link.parent().index();
                run(link, audio[0]);
            });
            audio[0].addEventListener('ended',function(e){
                current++;
                if(current >= len){
                    current = 0;
                    link = playlist.find('a')[0];
                }else{
                    link = playlist.find('a')[current];    
                }
            run($(link),audio[0]);
            });
        }
        function run(link, player){
            player.src = link.attr('href');
            par = link.parent();
            par.addClass('active').siblings().removeClass('active');
            audio[0].load();
            audio[0].play();
        }
    });//]]>  
</script>
    
<h1>Nhạc trong phim</h1>
    
    <?php
        $folder = 'soundtrack/';
        $filetype = '*.*';
        $file_display = array('mp3');
        $files = glob($folder.$filetype);
        $isActived = false;
        if ($files != null) {
            foreach ($files as &$filename) {
                $parts = explode('.', $filename);
                $extension = strtolower(end($parts));
                if (in_array($extension, $file_display)) {
                    if ($isActived == false) {
                        echo '<audio id="audio" preload="auto" tabindex="0" controls="" type="audio/mpeg">';
                        echo '<source src="'.$filename.'" type="audio/mp3">';
                        echo '</audio>';
                        echo '<ul id="playlist">';
                        echo '<li class="active">';
                        $isActived = true;
                    } else {
                        echo '<li>';
                    }
                    $parts = explode('/', $filename);
                    $song = end($parts);
                    $extensionLen = strlen($extension);
                    $song = substr($song, 0, -($extensionLen + 1));
                    echo '<a href="'.$filename.'">'.$song.'</a></li>';
                }
            }
        }
    ?>
    </ul>

<?php include('includes/footer.php') ?>