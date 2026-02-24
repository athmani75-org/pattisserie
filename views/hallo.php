<?php
$title = "Hallo";
ob_start();
?>  
<h1>Hallo</h1>
<?php
$contenent = ob_get_clean();
include_once 'views/templates/template.php';
?>  