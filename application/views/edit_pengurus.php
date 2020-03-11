<h2><?php echo $isi; ?></h2>
<?php
	echo form_open('Pengurus/edit_submit');
?>

<table border="3">
	<?php foreach ($data->result_array() as $row) { ?>
	<tr>
		<td>ID</td>
		<td><input type="text" name="id" value="<?php echo $row['id']; ?>" readonly="yes"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?php echo form_input('nama',$row['nama']); ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="gender" value="L" <?php if (!(strcmp($row['gender'],"L"))) {echo "CHECKED";} ?>>Laki-laki</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="radio" name="gender" value="P" <?php if (!(strcmp($row['gender'],"P"))) {echo "CHECKED";} ?>>Perempuan</td>
	</tr>
	<tr>
		<td valign="top">Alamat</td>
		<td><textarea name="alamat" rows="3" cols="40"><?php echo $row['alamat']; ?></textarea></td>
	</tr>
	<tr>
		<td>Gaji</td>
		<td><?php echo form_input('gaji',$row['gaji']); ?></td>
	</tr>
	<tr>
		<td> </td>
		<td><?php echo form_submit('submit','Ubah'); ?> <input type="button" value="Batal" onclick="self.history.back()"></td>
	</tr>
<?php } ?>
</table>
<?php echo form_close(); ?>
