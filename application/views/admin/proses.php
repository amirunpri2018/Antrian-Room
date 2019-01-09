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
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.ico') ?>" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/timepicker/mdtimepicker.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/datepicker/css/datepicker.css') ?>" rel="stylesheet" type="text/css">
    <?php $this->load->view('include/base_css'); ?>
  </head>
  <body class="">
    <?php $this->load->view('include/base_nav'); ?>
    <div class="my-3 my-md-5">
      <div class="container">
        <div class="page-header">
          <h1 class="page-title">
          Nomor Antrian <?php echo $edit['id_reservasi'] ?>
          </h1>
        </div>
        <form action="<?php echo base_url().'reservasi/updateproses/'.$edit['id_reservasi'] ?>" method="post" class="card" >
          <div class="card-header">
            <h3 class="card-title">Proses Antrian</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-2">
                <div class="form-group">
                  <div class="form-group">
                    <label>Pilih Room Meeting</label>
                    <select name="proses" class="form-control" required>
                      <option value="1"> Batal </option>
                      <option value="2"> Abaikan</option>
                      <option value="3"> Setuju </option>
                      <option value="4"> Selasai </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-danger pull-right" >Proses</button>
                    <a href="<?php echo base_url().'reservasi' ?>" class="btn btn-info pull-Lift" >Kembali</a>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <form action="<?php echo base_url().'reservasi/updateproses/'.$edit['id_reservasi'] ?>" method="post" class="card" >
          <div class="card-header">
            <h3 class="card-title">Edit Antrian</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Pilih Room Meeting</label>
                  <select name="room" class="selectpicker show-tick form-control" required="" data-live-search="true" title="Pilih Level" data-width="80%" placeholder="Pilih Lavel Akses" required>
                    <option value="jakarta">Jakarta</option>
                    <option value="bandung">Bandung</option>
                    <option value="surabaya">Surabaya</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="form-label">Nama PIC</label>
                  <input type="text" class="form-control" required="" placeholder="Isi .." name="nama">
                </div>
                <div class="form-group">
                  <label class="form-label">Nomor Handphone</label>
                  <input type="number" class="form-control" required="" placeholder="Isi .." name="nomor" >
                </div>
                <div class="form-group">
                  <label class="form-label">Jumlah Orang</label>
                  <input type="number" class="form-control" required="" placeholder="Isi .." name="jml_org" >
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="form-label">Tanggal Antri Room</label>
                  <input type="date" class="form-control" name="tanggal" >
                </div>
                <div class="form-group">
                  <label class="form-label">Waktu Mulai Meeting</label>
                  <input type="text" class="form-control" id="timepicker"  name="mulai">
                </div>
                <div class="form-group">
                  <label class="form-label">Waktu Selesai Meeting</label>
                  <input type="text" class="form-control" id="timepicker1" name="selesai">
                </div>
                <div class="form-group">
                  <label class="form-label">keterangan</label>
                  <textarea type="text" class="form-control" id="datepicker-disable-past" name="desc" placeholder="Isi .."></textarea>
                </div>
                <div class="form-group">
                  <a href="<?php echo base_url().'reservasi' ?>" class="btn btn-info pull-Lift" >Kembali</a>
                  <button type="submit" class="btn btn-danger pull-right" >Edit</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="<?php echo base_url('assets/timepicker/mdtimepicker.js') ?>"></script>
  <script>
  $(document).ready(function(){
  $('#timepicker').mdtimepicker(); //Initializes the time picker
  });
  </script>
  <script>
  $(document).ready(function(){
  $('#timepicker1').mdtimepicker(); //Initializes the time picker
  });
  </script>
  <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
  <?php $this->load->view('include/base_footer'); ?>