<?php
define("PERM_TOURIST", 1);
define("PERM_USER", 2);
define("PERM_MODERATOR", 5763);
define("PERM_ADMINISTRATOR", 8564);

$perm_text = array('null', 'tourist', 'user', 'moderator', 'administrator');
$perm_options = '';
for ($i = 1; $i < count($perm_text); $i++)
	$perm_options .= "<option value=$i>${perm_text[$i]}</option>\n";
?>
