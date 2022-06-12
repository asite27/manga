<!DOCTYPE html> 
<html> 
    <div class="container text-center text-white">
    <div class="row pt-5">
        <div class="col-lg-8 mx-auto">
          
                <a class="text-white" href="<?=BASE_URL();?>https://bootstrapious.com/snippets/">
                </a>
            </p>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body p-5">
    <head> 
        <title>Data dokter</title> 
    </head> 

    <body> 
        <center><h2>Data Dokter </h2><center> 
        <table align="center" border="1" style="bordercollapse: collapse;"> 
        <tr style="background: grey; fontweight:bold;align:center"> 
            <th scope="col">ID</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">Spesialis</th>
            <td colspan="3"></td> 
        </tr> 
            <?php foreach($data as $dokter) 
        {?> 
            <tr> 
                <td><?php echo $dokter['id_dokter']; ?></td> 
                <td><?php echo $dokter['nama']; ?></td> 
                <td><?php echo $dokter['spesialis']; ?></td> 
                    <td><a href="<?php echo base_url('controldatacrud/edit_data/'.$dokter['id_dokter']); ?>">Edit</td> 
                    <td><a href="<?php echo base_url('controldatacrud/delete_data/'.$dokter['id_dokter']); ?>">Delete</td> 
                </tr> 
            <?php 
        } ?> 
        
    </table> 
        <center> <a href="<?php echo base_url('controldatacrud/add_data'); ?>">Insert</a> </center> 
    </body> 
</html>