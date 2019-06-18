<?php
include('config.php');
//Dashboard
if($_GET['halaman']=='dashboard'){
    include('template/dashboard.php');
//Warga
}elseif($_GET['halaman']=='warga'){
    include('template/daftar-warga.php');
}elseif($_GET['halaman']=='tambah-warga'){
    if(isset($_POST['nik'])){
        $log = date("Y-m-d");
        $kecamatan=$_POST['kecamatan'];
        $data = array( 
                    'nik'  =>  $_POST['nik'],
                    'nama'  =>  $_POST['nama'],
                    'jeniskelamin'  =>  $_POST['jeniskelamin'],
                    'ttl'  =>   $_POST['ttl'],
                    'tanggallahir'  =>   $_POST['tanggallahir'],
                    'pendidikan'  =>   $_POST['pendidikan'],
                    'pekerjaan'  =>  $_POST['pekerjaan'],
                    'status'  =>   $_POST['status'],
                //  'hubungan'  =>   $_POST['hubungan'],
                    'kewarganegaraan'  =>   $_POST['kewarganegaraan'],
                // 'passpor'  =>  ,
                // 'kitab'  =>  ,
                // 'ayah'  =>  ,
                // 'ibu'  =>  ,
                    'agama'  =>   $_POST['agama'],
                    'log'  =>   $log,
        );
        mysql_query('INSERT INTO '.$kecamatan.'.tbl_warga(nik,nama,jeniskelamin,ttl,tanggallahir,pendidikan,pekerjaan,status,kewarganegaraan,agama,log)
        VALUES ("'.$data['nik'].'","'.$data['nama'].'","'.$data['jeniskelamin'].'","'.$data['ttl'].'","'.$data['tanggallahir'].'","'.$data['pendidikan'].'","'.$data['pekerjaan'].'","'.$data['status'].'","'.$data['kewarganegaraan'].'","'.$data['agama'].'","'.$log.'")');
    }
    include('template/tambah-warga.php');
}elseif($_GET['halaman']=='edit-warga' && isset($_GET['nik'])){
    if(isset($_POST['nik'])){
        $log = date("Y-m-d");
        $kecamatan=$_POST['kecamatan'];
        $data = array( 
                    'nik'  =>  $_POST['nik'],
                    'nama'  =>  $_POST['nama'],
                    'jeniskelamin'  =>  $_POST['jeniskelamin'],
                    'ttl'  =>   $_POST['ttl'],
                    'tanggallahir'  =>   $_POST['tanggallahir'],
                    'pendidikan'  =>   $_POST['pendidikan'],
                    'pekerjaan'  =>  $_POST['pekerjaan'],
                    'status'  =>   $_POST['status'],
                //  'hubungan'  =>   $_POST['hubungan'],
                    'kewarganegaraan'  =>   $_POST['kewarganegaraan'],
                // 'passpor'  =>  ,
                // 'kitab'  =>  ,
                // 'ayah'  =>  ,
                // 'ibu'  =>  ,
                    'agama'  =>   $_POST['agama'],
                    'log'  =>   $log,
        );
    //mysql_query('UPDATE kuliah_pweb_kecamatan1.tbl_warga SET nama ="Agus A" WHERE nik="1231212"');
       mysql_query('UPDATE '.$kecamatan.'.tbl_warga SET nik = "'.$data['nik'].'", nama = "'.$data['nama'].'", jeniskelamin = "'.$data['jeniskelamin'].'", ttl = "'.$data['ttl'].'", tanggallahir = "'.$data['tanggallahir'].'", pendidikan = "'.$data['pendidikan'].'", pekerjaan = "'.$data['pekerjaan'].'", status = "'.$data['status'].'", kewarganegaraan = "'.$data['kewarganegaraan'].'", agama = "'.$data['agama'].'", log = "'.$log.'"  WHERE nik="'.$_GET['nik'].'"');
        
    }

    $k=array('nama', 'nik','jeniskelamin','ttl','tanggallahir','pendidikan','pekerjaan','status','agama','kewarganegaraan');
    $qry=jupuk_warga2($k, $_GET['nik']);
    $kriteria=mysql_fetch_assoc(mysql_query($qry));
    include('template/edit-warga.php');

}elseif($_GET['halaman']=='hapus-warga' && isset($_GET['nik'])){
foreach($database_data as $a) {
    mysql_query('DELETE FROM '.$a['database'].'.tbl_warga WHERE nik="'.$_GET['nik'].'"');
}
    header("location:".$hostname."warga");
}else{
    header("location:".$hostname."dashboard");
}
?>