<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico') ?>" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 
    <?php $this->load->view('include/base_css'); ?>
  </head>
  <body class="">
    <?php $this->load->view('include/base_nav'); ?>
    <div class="my-3 my-md-5">
      <div class="container">
        <div class="page-header">
          <h1 class="page-title">
          Daftar Antrian Room
          </h1>
        </div>
              <form action="<?php echo base_url().'user/update' ?>" method="post" class="card">
                <div class="card-header">
                  <h3 class="card-title">Edit User</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label">Nama User</label>
                        <input type="hidden" class="form-control" name="kd_user" value="<?php echo $edit['kd_user'] ?>">
                        <input type="text" class="form-control" name="nama" value="<?php echo $edit['nama_user'] ?>">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Email User</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $edit['email_user'] ?>" >
                      </div>
                      <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $edit['username_user'] ?>" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Isi Kembali Password .." >
                      </div>
                      <div class="form-group">
                        <label>Lavel Akses</label>
                        <select name="level" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Level" data-width="80%" placeholder="Pilih Lavel Akses" required>
                          <option value="Manager">Manager</option>
                          <option value="Karyawan">Karyawan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <a href="<?php echo base_url().'user' ?>" class="btn btn-default pull-lift" >Kembali</a>
                        <button type="submit" class="btn btn-danger pull-right" >Simpan</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
    <?php $this->load->view('include/base_footer'); ?>