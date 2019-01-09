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
          <h4>Kirim Pesan Ke Nomor <?php echo $edit['nomor_reservasi'] ?> </h4>
          </h1>
        </div>
        <form action="<?php echo base_url().'reservasi/kirimpesan/'.$edit['nomor_reservasi'] ?>" method="post" class="card" >
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="form-group">
                  <label class="form-label">Pesan</label>
                  <textarea type="text" class="form-control" id="datepicker-disable-past" name="desc" placeholder="Isi .."></textarea>
                </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-danger pull-right" >Kirim</button>
                    <a href="<?php echo base_url().'reservasi' ?>" class="btn btn-info pull-Lift" >Kembali</a>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
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