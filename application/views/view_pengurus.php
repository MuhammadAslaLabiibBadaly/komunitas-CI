<!-- tampil table -->
<h1><?php echo $judul; ?></h1>
<table border="3">
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Gaji</th>
		<th>Aksi</th>
	</tr>
	<?php 
		foreach ($data->result_array() as $row) {
	?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['gender']; ?></td>
		<td><?php echo $row['alamat']; ?></td>
		<td><?php echo $row['gaji']; ?></td>
		<td><?php echo anchor('pengurus/edit/'.$row['id'],'Edit') ?> | 
		<?php echo anchor('pengurus/delete/'.$row['id'],'Hapus') ?></td>
	</tr>
	<?php } ?>
</table>

<br>
<hr size="4">

<!-- isi table -->
<?php
	echo form_open('Pengurus/addpengurus');
?>
<h1><?php echo $judul1; ?></h1>
<table border="3">
	<tr>
		<td>ID</td>
		<td><?php echo form_input('id'); ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?php echo form_input('nama'); ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="radio" name="gender" value="L">Laki-laki</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="radio" name="gender" value="P">Perempuan</td>
	</tr>
	<tr>
		<td valign="top">Alamat</td>
		<td><textarea name="alamat" rows="3" cols="40"></textarea> </td>
	</tr>
	<tr>
		<td>Gaji</td>
		<td><?php echo form_input('gaji'); ?></td>
	</tr>
	<tr>
		<td> </td>
		<td><?php echo form_submit('submit','simpan'); ?> <input type="reset" value="Batal"></td>
	</tr>
</table>
<?php echo form_close(); ?>
