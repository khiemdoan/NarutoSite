<?php include('includes/header.php'); ?>
    <?php
    $folder = 'anime/';
    if (isset($_GET['chapter'])) {
        $chapter = $_GET['chapter'];
        $parts = explode('.', $chapter);
        $extension = end($parts);
        $extensionLen = strlen($extension);
        $chapter = substr($chapter, 0, -($extensionLen + 1));
        $chapter = "Naruto " . $chapter;
        $chapter = str_replace("_", " ", $chapter);
        echo "<h1>" . $chapter . "</h1>";
        
        $file = $folder.$_GET['chapter'];
        echo "<center>";
        echo "<video controls preload='auto'>";
        echo '<source src="'.$file.'" type="video/mp4">';
        echo "</video>";
        echo "</center>";
    } else {
        echo "<h1>Anime List</h1>";
        
        $filetype = '*';
        $file_display = array('mp4');
        $files = glob($folder.$filetype);
        if ($files != null) {
            foreach ($files as &$filename) {
                $parts = explode('.', $filename);
                $extension = strtolower(end($parts));
                if (in_array($extension, $file_display)) {
                    $parts = explode('/', $filename);
                    $filename = strtolower(end($parts));
                    $extensionLen = strlen($extension);
                    $chapter = substr($filename, 0, -($extensionLen + 1));
                    $chapter = str_replace("_", " ", $chapter);
                    echo '<p><a href=watch_anime.php?chapter='. $filename .'>' . "Naruto ". $chapter . '</a></p>';
                }
            }
        }
    }
    
    ?>
<?php include('includes/footer.php') ?>