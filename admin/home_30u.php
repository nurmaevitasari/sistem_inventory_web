<?php include 'header.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  CLOS RACK 30 U</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Data</button>
<br/>
<br/>
<link rel="icon" href="aptek.jpg">
<?php 
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from clos_rack_30u");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
	<a style="margin-bottom:10px" href="lap_30u.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
</div>
<form action="cari_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari barang di sini .." aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br/>
<table class="table table-hover">
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Masuk</th>
		<th>Keluar</th>
		<th>Unit</th>
		<th>Suplier</th>
		<th>Project</th>
		<th>Stock</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
		<th class="col-md-3">Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysql_real_escape_string($_GET['cari']);
		$brg=mysql_query("select * from clos_rack_30u where Tanggal like '$cari' or Project like '$cari'");
	}else{
		$brg=mysql_query("select * from clos_rack_30u limit $start, $per_hal");
	}
	$no=1;
	while($b=mysql_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['Tanggal'] ?></td>
			<td><?php echo $b['Masuk'] ?></td>
			<td><?php echo $b['Keluar'] ?></td>
			<td><?php echo $b['Unit'] ?></td>
			<td><?php echo $b['Suplier'] ?></td>
			<td><?php echo $b['Project'] ?></td>
			<td><?php echo $b['Stock'] ?></td>
			<td>
			<a href="edit_30u.php?No=<?php echo $b['No']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_30u.php ?No=<?php echo $b['No']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
		<?php 
	}
	?>
	<tr>
		<td colspan="4">Total Barang Di Gudang</td>
		<td>			
		<?php 
		
			$x=mysql_query("select sum(Masuk-Keluar) as total from clos_rack_30u");	
			$xx=mysql_fetch_array($x);			
			echo "<b>". number_format($xx['total'])."</b>";		
		?>
		</td>
	</tr>
</table>
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>						
		</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Data Clos Rack 30 U</h4>
			</div>
			<div class="modal-body">
				<form action="tmb_30u.php" method="post">
					<div class="form-group">
						<label>Tanggal</label>
						<input name="Tanggal" type="text" class="form-control" placeholder="Tanggal ..">
					</div>
					<div class="form-group">
						<label>Masuk</label>
						<input name="Masuk" type="text" class="form-control" placeholder="Jumlah Masuk barang ..">
					</div>
					<div class="form-group">
						<label>Keluar</label>
						<input name="Keluar" type="text" class="form-control" placeholder="Jumlah Keluar Barang ..">
					</div>
					<div class="form-group">
						<label>Unit</label>
						<input name="Unit" type="text" class="form-control" placeholder="Unit Barang">
					</div>	
					<div class="form-group">
						<label>Suplier</label>
						<input name="Suplier" type="text" class="form-control" placeholder="Suplier barang">
					</div>	
					<div class="form-group">
						<label>Project</label>
						<input name="Project" type="text" class="form-control" placeholder="Project Barang keluar">
					</div>																	

					<div class="form-group">
						<label>Stock</label>
						<input name="Stock" type="text" class="form-control" placeholder="Stock">
					</div>	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>



<?php 
include 'footer.php';

?>