<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Daftar Warga - Kependudukan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Sistem Kependudukan" name="description" />
        <meta content="Cyine ID" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo $hostname;?>assets/images/favicon.ico">
        <!-- App css -->
        <link href="<?php echo $hostname;?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $hostname;?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="wrapper">
            <?php include('template/include/navbar.php');?>
            <div class="content-page">
                <div class="content">
                    <?php include('template/include/header.php');?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Warga</a></li>
                                            <li class="breadcrumb-item active">Daftar</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Daftar Warga</h4>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <a class="btn btn-primary col-md-12" href="<?php echo $hostname;?>tambah-warga">Tambah Warga</a>
                                        <div class="table-responsive-sm">
                                            <table class="table table-striped table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>NIK</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Pengaturan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $k=array('nama', 'nik','jeniskelamin');
                                                $qry=jupuk_warga($k);
                                                //echo jupuk_warga($k);
                                                //$kriteria=mysql_query($qry);
                                                //while($row=mysql_fetch_array($kriteria)) {
                                                $kriteria=mysql_query($qry);
                                                while($row=mysql_fetch_array($kriteria)) {
                                                ?>
                                                    <tr>
                                                        <td class="table-user"> <?php echo $row['nama'];?> </td>
                                                        <td><?php echo $row['nik'];?></td>
                                                        <td><?php echo $row['jeniskelamin'];?></td>
                                                        <td class="table-action">
                                                            <a href="<?php echo $hostname;?>edit-warga/<?php echo $row['nik'];?>" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                            <a href="<?php echo $hostname;?>hapus-warga/<?php echo $row['nik'];?>" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('template/include/footer.php');?>
            </div>
        </div>
        <script src="<?php echo $hostname;?>assets/js/app.min.js"></script>
    </body>
</html>
