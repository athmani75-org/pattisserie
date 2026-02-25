
<?php
$title = "Ajouter une patisserie";
ob_start();
?> 
<!-- la page d'ajout d'une patisserie -->
 <h4 class="display-4">Ajouter une patisserie</h4>
 <?php
 $contenent = ob_get_clean();
include_once 'views/templates/template.php';
?>