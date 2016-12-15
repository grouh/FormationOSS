
<h2>Edit a planning</h2>
<form action="#" method="post">
    <label for="ID">ID</label>
    <input type="text" name="ID" readonly="readonly"
           value="<?php echo isset($planning['ID'])?$planning['ID']:''; ?>"></br>

    <label for="date">Date</label>
    <input type="text" name="date" readonly="readonly"
           value="<?php echo isset($planning['date'])?$planning['date']:''; ?>"></br>

    <label for="label">Label</label>
    <input type="text" name="label"
           value="<?php echo isset($planning['label'])?$planning['label']:''; ?>"></br>

    <label for="teach">Teacher</label>
    <input type="text" name="teach"
           value="<?php echo isset($planning['teach'])?$planning['teach']:''; ?>"></br>

    <input type="submit" value="Save" name="edit"></br>
</form>

