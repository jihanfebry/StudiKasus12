<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Bilangan Terbesar</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan Pertama</td>
                <td><input type="number" name="satu"></td>
            </tr>
            <tr>
                <td>Bilangan Kedua</td>
                <td><input type="number" name="dua"></td>
            </tr>
            <tr>
                <td>Bilangan Ketiga</td>
                <td><input type="number" name="tiga"></td>
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
            $bilangan_pertama = $_POST['satu'];
            $bilangan_kedua = $_POST['dua'];
            $bilangan_ketiga = $_POST['tiga'];

            if ($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga){
                echo $bilangan_pertama;
            }
            else if ($bilangan_kedua > $bilangan_pertama && $bilangan_kedua > $bilangan_ketiga){
                echo $bilangan_kedua;
            }
            else if ($bilangan_ketiga > $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua){
                echo "bilangan terbesar adalah ". $bilangan_ketiga;
            }
        }

    ?>
