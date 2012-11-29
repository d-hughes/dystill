<?php

session_start();

$token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));

?>
<form method="POST" action"<?=$_SERVER['PHP_SELF'];?>">

<table>
	<tr><td>Username:</td><td><input type="text" name="username" /></td></tr>
	<tr><td>Password:</td><td><input type="password" name="password" /></td></tr>
</table>
<input type="hidden" name="token" value="<?=$token;?>" />
<input type="submit" name="login" value="Login" />
</form>