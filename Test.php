<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Pendaftaran Siswa Baru</h1>
        <form action="" method="POST">
        <table>
        </tr>
            <tr>
                <td>Nama </td>
                <td>:<input type="text" name="Nama" ></td>
            </tr>
            <tr>
                <td>Asal Sekolah </td>
                <td>:<input type="text" name="AsalSekolah" ></td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td>:<textarea name="Alamat" ></textarea></td>
            </tr>
            <tr>
                <td>No Hp </td>
                <td>:<input type="text" name="NoHp" ></td>
            </tr>
            <tr>
            <tr>
                <td> </td>
                <td colspan="2"><input type="submit" name="submit"> </td>
            </tr>
        </form>
        </table>
        
        <?php
        include "Koneksi.php";
        if(isset($_POST['submit'])){
            $nama=$_POST['Nama'];
            $asalsekolah=$_POST['AsalSekolah'];
            $alamat=$_POST['Alamat'];
            $nohp=$_POST['NoHp'];

            $input=mysqli_query($connection,"insert into form_pendaftaran values ('','$Nama','$AsalSekolah','$NoHp','$Alamat')");

            if($input)
            {
                echo "Input Sukses Trimakasihh";
            }

            else{
                echo "Coba Input Lagi ,Selamat Mencoba";
            }
        }
        ?>
    </center>
</body>
</html>