<script src="custom/include/clases/phpFileTree/php_file_tree.js" type="text/javascript"></script>
<link href="custom/include/clases/phpFileTree/styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />
<?php
include_once 'custom/include/clases/phpFileTree/php_file_tree.php';
echo php_file_tree("custom/", "javascript:alert('You clicked on [link]');");
?>
