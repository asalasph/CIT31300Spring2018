<form id="login_form" action="<?php echo BASE_URL;?>login/do_login" method="post">

<fieldset>
<legend>Log In</legend>
<label for="username">Username/E-mail Address:</label>
<input type="text" id="email" name="email" value="<?=$_POST['username']?>" maxlength="50" required="email" />
<br />
            
<label for="password">Password: </label>
<input type="password" class="txt" id="password" name="password" value="<?=$_POST['password']?>" maxlength="20" required="password" />
<br />

<br />
 
<button id="submit" type="submit" class="btn btn-primary" >Log In</button>
</fieldset>
</form>