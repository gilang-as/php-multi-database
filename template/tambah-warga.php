<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Tambah Warga - Kependudukan</title>
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
                                            <li class="breadcrumb-item active">Tambah</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Tambah Data Warga</h4>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="needs-validation" method="POST">
                                            <div class="form-group position-relative mb-3">
                                                <label for="validationTooltip01">Kecamatan</label>
                                                <select name="kecamatan" class="form-control" id="example-select">
                                                <?php foreach($database_data as $kec) { ?>
                                                    <option value="<?php echo$kec['database'];?>"><?php echo$kec['nama'];?></option>
                                                <?php } ?>
                                                </select>
                                                <div class="valid-tooltip">
                                                    Bagus
                                                </div>
                                                <div class="invalid-tooltip">
                                                    Silahkan Isi Kecamatan
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group position-relative mb-3">
                                                        <label for="validationTooltip02">Nama Lengkap</label>
                                                        <input name="nama" type="text" class="form-control" id="validationTooltip02" placeholder="Nama Lengkap" required>
                                                        <div class="valid-tooltip">
                                                            Bagus
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Silahkan Isi Nama Lengkap
                                                        </div>
                                                    </div>
                                                    <div class="form-group position-relative mb-3">
                                                        <label for="validationTooltip02">NIK</label>
                                                        <input name="nik" type="text" class="form-control" id="validationTooltip02" placeholder="NIK" required>
                                                        <div class="valid-tooltip">
                                                            Bagus
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Silahkan Isi NIK
                                                        </div>
                                                    </div>
                                                    <div class="form-group position-relative mb-3">
                                                        <label for="validationTooltip02">Jenis Kelamin</label>
                                                        <select name="jeniskelamin" class="form-control" id="example-select">
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="naPerempuansrani">Perempuan</option>
                                                        </select>
                                                        <div class="valid-tooltip">
                                                            Bagus
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Silahkan Pilih Jenis Kelamin
                                                        </div>
                                                    </div>
                                                    <div class="form-group position-relative mb-3">
                                                        <label for="validationTooltip02">Tempat Lahir</label>
                                                        <input name="ttl" type="text" class="form-control" id="validationTooltip02" placeholder="Tempat Lahir" required>
                                                        <div class="valid-tooltip">
                                                            Bagus
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Silahkan Pilih Tempat Lahir
                                                        </div>
                                                    </div>
                                                    <div class="form-group position-relative mb-3">
                                                        <label for="validationTooltip02">Tanggal Lahir</label>
                                                        <input name="tanggallahir" type="date" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                                        <div class="valid-tooltip">
                                                            Bagus
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                        Silahkan Isi Tanggal Lahir
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group position-relative mb-3">
                                                        <label for="validationTooltip01">Agama</label>
                                                        <select name="agama" class="form-control" id="example-select">
                                                        <option value="islam">Islam</option>
                                                        <option value="nasrani">Nasrani</option>
                                                        <option value="katholik">Katholik</option>
                                                        <option value="hindu">Hindu</option>
                                                        <option value="budha">Budha</option>
                                                        <option value="konghucu">Konghucu</option>
                                                        </select>
                                                        <div class="valid-tooltip">
                                                            Bagus
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Silahkan Pilih Agama
                                                        </div>
                                                    </div>
                                                    <div class="form-group position-relative mb-3">
                                                        <label for="validationTooltip01">Pendidikan</label>
                                                        <select name="pendidikan" class="form-control" id="example-select">
                                                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                                        <option value="SD/Sederajat">SD/Sederajat</option>
                                                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                                        <option value="S1">Sarjana</option>
                                                        </select>
                                                        <div class="valid-tooltip">
                                                            Bagus
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Silahkan Isi Pendidikan Terakhir
                                                        </div>
                                                    </div>
                                                    <div class="form-group position-relative mb-3">
                                                        <label for="validationTooltip01">Jenis Pekerjaan</label>
                                                        <select name="pekerjaan" class="form-control" id="example-select">
                                                        <option value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>
                                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                                        <option value="Buruh">Buruh</option>
                                                        </select>
                                                        <div class="valid-tooltip">
                                                            Bagus
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Silahkan Isi pekerjaan.
                                                        </div>
                                                    </div>
                                                    <div class="form-group position-relative mb-3">
                                                        <label for="validationTooltip01">Status Perkawinan</label>
                                                        <select name="status" class="form-control" id="example-select">
                                                        <option value="Cerai/Mati">Cerai/Mati</option>
                                                        <option value="Belum Kawin">Belum Kawin</option>
                                                        </select>
                                                        <div class="valid-tooltip">
                                                            Bagus
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Isi Status
                                                        </div>
                                                    </div>
                                                    <div class="form-group position-relative mb-3">
                                                        <label for="validationTooltip01">Kewarganegaraan</label>
                                                        <select name="kewarganegaraan" class="form-control" id="example-select">
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                        </select>
                                                        <div class="valid-tooltip">
                                                            bagus
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Silahkan Isi Kewarganegaraan
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">SIMPAN</button>
                                        </form>
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
