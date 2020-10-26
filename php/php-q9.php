#unieq_names
<?php
/*
before we register we must use session_start();
a

*/
session_start();
// set varible
$_SESSION["demo"] = '123';
/* 
if you mean to this function session_register()
his function has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.
*/
echo $_SESSION["demo"];
