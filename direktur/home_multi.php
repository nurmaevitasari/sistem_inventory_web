<?php include 'header.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  CABLE MULTI PEAR</h3>

<br/>
<br/>
<link rel="icon" href="aptek.jpg">
<?php 
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from cable_multi_pear");
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
	<a style="margin-bottom:10px" href="lap_multi.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
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
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysql_real_escape_string($_GET['cari']);
		$brg=mysql_query("select * from cable_multi_pear where Tanggal like '$cari' or Project like '$cari'");
	}else{
		$brg=mysql_query("select * from cable_multi_pear limit $start, $per_hal");
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
		</tr>		
		<?php 
	}
	?>
	<tr>
		<td colspan="4">Total Barang Di Gudang</td>
		<td>			
		<?php 
		
			$x=mysql_query("select sum(Masuk-Keluar) as total from cable_multi_pear");	
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


<?php 
include 'footer.php';

?>