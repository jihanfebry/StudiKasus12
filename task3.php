<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Jam-Menit-Detik ke Detik</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Inputkan Jam</td>
                <td><input type="number" name="jam"></td>
            </tr>
            <tr>
                <td>Inputkan Menit</td>
                <td><input type="number" name="menit"></td>
            </tr>
            <tr>
                <td>Inputkan Detik</td>
                <td><input type="number" name="detik"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
    <br>
</body>
</html>

    <?php
        if(isset($_POST['submit'])){
           $jam=$_POST['jam'];
           $menit=$_POST['menit'];
           $detik=$_POST['detik'];

           $jam= $jam * 3600;
           $menit= $menit * 60;
           $total= $jam + $menit + $detik;

           echo "Total Detik :". $total . "</br>";
        }
    ?>