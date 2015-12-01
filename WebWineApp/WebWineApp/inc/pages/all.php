<?php
    $files = glob('inc/pages/*.{php}', GLOB_BRACE);
    foreach($files as $file) {
        echo("<!-- ".$file." -->");
        include_once($file);
    }
?>