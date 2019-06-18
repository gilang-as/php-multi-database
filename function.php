<?php
#database
function pilih_database($no){
      global $database_data;
      $konek = new mysqli($database_data[$no]['hostname'], $database_data[$no]['username'], $database_data[$no]['password'], $database_data[$no]['database']);
      if (!$konek) {
         die ("connection failed: " . mysqli_connect_error());
      } else {
         $konek->set_charset('utf8');
      }
      return $konek;
}
//Selet Data Warga
function jupuk_warga($isi){
      global $database_data;
      $t=0;
      $c=array();
      foreach($database_data as $a) {
      $c[$t]="SELECT ".$a['database'].".tbl_warga.".implode(', ',$isi)." FROM ".$a['database'].".tbl_warga";
         $t++;
      }
      $o=implode(' UNION ',$c);
      return $o;
}
function hapus_warga($nik){
      global $database_data;
      $t=0;
      $c=array();
      foreach($database_data as $a) {
      $c[$t]="DELETE FROM ".$a['database'].".tbl_warga WHERE nik='".$nik."'";
         $t++;
      }
      $o=implode(' UNION ',$c);
      return $o;
}
function jupuk_warga2($isi,$nik){
      global $database_data;
      $t=0;
      $c=array();
      foreach($database_data as $a) {
      $c[$t]="SELECT ".$a['database'].".tbl_warga.".implode(', ',$isi)." FROM ".$a['database'].".tbl_warga WHERE nik='".$nik."'";
         $t++;
      }
      $o=implode(' UNION ',$c);
      return $o;
}


# Tambah Data 
function tambah($table, $data){
    global $connect;
    $fields = array_keys( $data );  
    $values = array_map( array($connect, 'real_escape_string'), array_values( $data ) );
   //echo "INSERT INTO $table(".implode(",",$fields).") VALUES ('".implode("','", $values )."');";
   //exit;  
    mysqli_query($connect, "INSERT INTO $table(".implode(",",$fields).") VALUES ('".implode("','", $values )."');") or die( mysqli_error($connect) );
}

# Ubah Data
function ubah($table_name, $form_data, $where_clause=''){   
    global $connect;
    $whereSQL = '';
    if(!empty($where_clause))
    {
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    $sql = "UPDATE ".$table_name." SET ";
    $sets = array();
    foreach($form_data as $column => $value)
    {
         $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);
    $sql .= $whereSQL;
    return mysqli_query($connect,$sql);
}
#Hapus Data
function hapus($table_name, $where_clause=''){   
    global $connect;
    $whereSQL = '';
    if(!empty($where_clause))
    {
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    $sql = "DELETE FROM ".$table_name.$whereSQL;
    return mysqli_query($connect,$sql);
} 
?>