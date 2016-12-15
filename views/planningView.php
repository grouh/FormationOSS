
<form method="POST" name="form_update" action="">

    Date : <?php echo $planning['date'] ?><br/>
    Label : <input type="text" name="label" value="<?php echo $planning['label'] ?>"/><br/>
    Formateur : <input type="text" name="teacher" value="<?php echo $planning['teacher'] ?>" /><br/>

    <input type="submit" value="UPDATE" name="update"/>
</form>




