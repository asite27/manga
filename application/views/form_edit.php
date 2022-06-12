<!DOCTYPE html> 
<html> 
<head> 
<title>Form Edit</title> 
</head> 
    <body> 
        <table> 
            <form method="post" action="<?php echo base_url('controldatacrud/update_data'); ?>"> 
            <tr> 
                <td>Nama</td> 
                <td>:</td> 
                <td> 
                <input type="hidden" name="id_dokter" value="<?php echo $id_dokter; ?>"> 
                <input type="text" required name="nama" value="<?php echo $nama; ?>"> 
                </td> 
            </tr> 

            <tr> 
                <td>Spesialis</td> 
                <td>:</td> 
                <td><input type="text" required name="spesialis" value="<?php echo $spesialis; ?>"></td> 
            </tr> 

            <tr> 
                <td></td> 
                <td></td> 
                <td><input type="submit" name="submit" value="update"></td> 
            </tr> 
            </form> 
        </table> 
    </body> 
</html>