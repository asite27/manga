<!DOCTYPE html> 
<html> 
<head> 
    <title>Form Tambah</title> 
</head> 
    <body> 
        <table> 
            <form method="post" action="<?php echo base_url('controldatacrud/insert'); ?>"> Daftar Dokter 
            <tr> 
                <td>ID Dokter</td>    
                <td>:</td> 
                <td><input type="text" name="id_dokter" placeholder="Masukkan ID Dokter Anda"></td> 
            </tr> 
            <tr> 
                <td>Nama Dokter</td> 
                <td>:</td> 
                <td><input type="text" name="nama" placeholder="Masukkan Nama Anda"></td> 
                </tr> 
            <tr> 
                <td>Spesialis</td> 
                <td>:</td> 
                <td><input type="text" name="spesialis" placeholder="Masukkan Spesialis Anda" ></td> 
                </tr> 
            <tr> 
                <td></td> 
                <td></td> 
                <td><input type="submit" name="submit" value="simpan"></td> 
            </tr> 
            </form> 
        </table> 
    </body> 
</html> 
