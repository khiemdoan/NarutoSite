<?php include('includes/header.php'); ?>
    <?php
    $folder = 'manga/';
    if (isset($_GET['chapter'])) {
        $folder .= $_GET['chapter'];
        $folder .=  '/';
        $chapter = $_GET['chapter'];
        $chapter = "Naruto " . $chapter;
        $chapter = str_replace("_", " ", $chapter);
        echo "<h1>" . $chapter . "</h1>";
    } else {
        echo "<h1>Manga List</h1>";
    }
    $filetype = '*';
    
    $folders = glob($folder.$filetype, GLOB_ONLYDIR);
    if ($folders != null) {
        foreach ($folders as &$folder) {
            $parts = explode('/', $folder);
            $folder = strtolower(end($parts));
            $chapter = "Naruto " . $folder;
            $chapter = str_replace("_", " ", $chapter);
            echo '<p><a href=read_manga.php?chapter=' . $folder . '>' . $chapter . '</a></p>';
        }
    }
    
    $file_display = array('jpg', 'jpeg', 'png', 'gif');
    $files = glob($folder.$filetype);
    if ($files != null) {
        foreach ($files as &$filename) {
            $parts = explode('.', $filename);
            $extension = strtolower(end($parts));
            if (in_array($extension, $file_display)) {
                echo '<br>';
                echo "<img src=".$filename." style='width:700px'/>";
            }
        }
    }
    ?>
<?php include('includes/footer.php') ?>