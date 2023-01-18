<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Data Cable Multi Pear</h3>
<a class="btn" href="home_multi.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$No=mysql_real_escape_string($_GET['No']);
$det=mysql_query("select * from cable_multi_pear where No='$No'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>					
	<form action="update_multi.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="No" value="<?php echo $d['No'] ?>"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="text" class="form-control" name="Tanggal" value="<?php echo $d['Tanggal'] ?>"></td>
			</tr>
			<tr>
				<td>Masuk</td>
				<td><input type="text" class="form-control" name="Masuk" value="<?php echo $d['Masuk'] ?>"></td>
			</tr>
			<tr>
				<td>Keluar</td>
				<td><input type="text" class="form-control" name="keluar" value="<?php echo $d['Keluar'] ?>"></td>
			</tr>
			<tr>
				<td>Unit</td>
				<td><input type="text" class="form-control" name="Unit" value="<?php echo $d['Unit'] ?>"></td>
			</tr>
			<tr>
				<td>Suplier</td>
				<td><input type="text" class="form-control" name="Suplier" value="<?php echo $d['Suplier'] ?>"></td>
			</tr>
			
				<td>Project</td>
				<td><input type="text" class="form-control" name="Project" value="<?php echo $d['Project'] ?>"></td>
			</tr>
			<tr>
				<td>Stock</td>
				<td><input type="text" class="form-control" name="Stock" value="<?php echo $d['Stock'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>