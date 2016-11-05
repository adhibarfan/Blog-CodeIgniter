<?php echo validation_errors();?>

<?php echo form_open('news/create'); ?>


<label for="title">Judul</label>
<input type="text" name="title"><br>

<label for="text">Text</label>
<input type="text" name="text"><br>

<input type="submit" name="submit" value="Kirim">

<?php echo form_close()?>
