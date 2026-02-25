
<?php
$title = "Hallo";
ob_start();
?> 
<!-- This is the content of the page --> 
<h1>Hallo</h1>
<?php
$contenent = ob_get_clean();
include_once 'views/templates/template.php';
?>  