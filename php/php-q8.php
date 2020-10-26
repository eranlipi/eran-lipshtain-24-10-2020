#unieq_names
<?php
setcookie('user', 'admin', time() + (86400 * 30), "/"); // 86400 = 1 day
echo '<pre>';
echo $_COOKIE['user'];