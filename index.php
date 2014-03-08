<?php
include('include/head.php');
?>
<div class="menu">Sign In</div>
<div class="news">
<form action="index.html" method="post">
<p>Username:
<br/>
<input type="text" name="n" value="" maxlength="20"/>
<br/>
Password:
<br/>
<input type="password" name="p" maxlength="20"/></p>
<p>
<input type="checkbox" name="mem" value="1" checked="checked"/>Remember</p>
<p><input type="submit" value="sign in"/></p>
</form>
<br/>Need An Account? <a href="reg.php">Sign Up</a> Now!<br />
</div>
<?php
include('include/end.php');
?>
