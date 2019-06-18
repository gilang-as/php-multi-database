<?php
session_start();
require_once('function.php');
    //URL Aplikasi | contoh "http://localhost/"
   $hostname="http://project/kuliah/pweb/";
   //Database Utama
   $konek = new mysqli('localhost', 'root', '', 'kuliah_pweb');
   if (!$konek) {
      die ("connection failed: " . mysqli_connect_error());
   } else {
      $konek->set_charset('utf8');
   }
    //Database Data
    $database_data = [
       1=> ['nama'=>'Kec. Jekulo',
            'no'=>1,
            'kode'=>'19',
            'hostname'=>'localhost',
            'username'=>'root',
            'password'=>'',
            'database'=>'kuliah_pweb_kecamatan1'
         ],
       2=> ['nama'=>'Kec. Kota',
            'no'=>2,
            'kode'=>'19',
            'hostname'=>'localhost',
            'username'=>'root',
            'password'=>'',
            'database'=>'kuliah_pweb_kecamatan2'
         ],
       3=> ['nama'=>'Kec. Mejobo',
            'no'=>3,
            'kode'=>'19',
            'hostname'=>'localhost',
            'username'=>'root',
            'password'=>'',
            'database'=>'kuliah_pweb_kecamatan3'
         ],
       4=> ['nama'=>'Kec. Dawe',
            'no'=>4,
            'kode'=>'19',
            'hostname'=>'localhost',
            'username'=>'root',
            'password'=>'',
            'database'=>'kuliah_pweb_kecamatan4'
         ],
    ];

$h=0;
$kec_konek=array();
foreach($database_data as $kec) {
  // $kec_konek[$h]=mysqli_connect($kec['hostname'], $kec['username'], $kec['password']);
  //mysqli_select_db($kec_konek[$h],$kec['database']);
  $kec_konek[$h]=mysql_connect($kec['hostname'], $kec['username'], $kec['password']);
   mysql_select_db($kec['database'],$kec_konek[$h]);
   $h++;
}

?>