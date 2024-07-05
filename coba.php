<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT max(noreg) as kodeTerbesar FROM tsinarmas");
    $data1 = mysqli_fetch_array($query);
    $kode = $data1['kodeTerbesar'];
    $dsl1 = (int) substr ($kode,3,4);
    echo " $dsl1 <br>" ;
    $tanggal = date('my');
    echo " $tanggal <br>";
    $huruf = "DBD";
    if ($tanggal == $dsl1) {
        $urutan = (int) substr ($kode,7,4); 
        $urutan++;
        $id = $huruf.$tanggal.sprintf("%04s",$urutan);
    } else {
        $urutan = 1; 
        $id = $huruf.$tanggal.sprintf("%04s",$urutan);
    }
do {
    echo "$id <br>";
    $urutan = (int) substr ($id,7,4); 
    $urutan++;
    $id = $huruf.$tanggal.sprintf("%04s",$urutan);
} while ($urutan <= 5);
?>
</body>
</html>