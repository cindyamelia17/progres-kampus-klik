<?php
//membuat variable
$nama_mahasiswa = "Ariel Tatum";
$nama_kamu = "Andi motor";
$pekerjaan = "Ibu rumah tangga";

if($nama_mahasiswa != "Ariel Tatum"){
    if($pekerjaan == "Aktris"){
        $jenis_kelamin = "Perempuan";
        $penghasilan_perbulan = 100000000;
    }else{
        $jenis_kelamin = "Perempuan";
        $penghasilan_perbulan = 2000000;
    }
}else if($nama_kamu == "Andi"){
    $jenis_kelamin = "Laki - laki";
}else{
    $jenis_kelamin = "??";
}

echo "Hallo ".$nama_mahasiswa.". Selamat <br> datang, saya ".$nama_kamu." jenis kelamin kamu adalah ".$jenis_kelamin." penghasilan Anda ".$penghasilan_perbulan;
?>

<html>
    <title>

    </title>

        <body>
            <br>
                Calon Pacar saya ....
        </body>
</html>