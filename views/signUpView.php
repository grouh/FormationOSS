<form action="#" method="post">
    <?php if(isset($errorForm)&& $errorForm==true){echo "Veuillez vérifier les champs saisis";}?>
    <p>Name: <input type="text" name="name" /></p>
    <p>Login : <input type="text" name="login" /></p>
    <p>Password: <input type="password" name="password" /></p>
    <p><input type="submit" value="valider"></p>
</form>
