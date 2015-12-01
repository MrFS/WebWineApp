<?php
$files = glob('inc/pages/*.{php}', GLOB_BRACE);
foreach($files as $file) {
  include_once($file);
}

?>