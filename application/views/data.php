<?php 
	$id = $_GET['Data'];
	$hasil = $lihat -> barang_edit($id);
?>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
					  	<a href="index.php?page=data"><button class="btn btn-primary"><i class="fa fa-angle-left"></i> Balik </button></a>
						<h3>Details Dokter</h3>
						<?php if(isset($_GET['success-stok'])){?>
						<div class="alert alert-success">
							<p>Tambah data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Tambah Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
						<?php }?>
						<table class="table table-striped">
								<tr>
									<td>ID Dokter</td>
									<td><?php echo $hasil['id_dokter'];?></td>
								</tr>
								<tr>
									<td>Kategori</td>
									<td><?php echo $hasil['nama_kategori'];?></td>
								</tr>
								<tr>
									<td>Nama Dokter</td>
									<td><?php echo $hasil['nama_dokter'];?></td>
								</tr>
								<tr>
									<td>Spesialis</td>
									<td><?php echo $hasil['spesialis'];?></td>
								</tr>
								<tr>
									<td>Status</td>
									<td><?php echo $hasil['Status'];?></td>
								</tr>
							
						</table>
						<div class="clearfix" style="padding-top:16%;"></div>
				  </div>
              </div>
          </section>
      </section>
