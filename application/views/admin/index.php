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
    <?php $this->load->view('include/base_nav_user'); ?>
    <div class="my-3 my-md-5">
      <div class="container">
        <div class="row row-cards row-deck">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Reservasi</h3>
              </div>
              <div class="table-responsive">
               <table class="table card-table table-vcenter text-nowrap" id="book-table">
                  <thead>
                    <tr>
                      <th class="w-1">No</th>
                      <th>Status</th>
                      <th>Room</th>
                      <th>Nama </th>
                      <th>Nomor HP</th>
                      <th>Jumlah Orang</th>
                      <th>Tanggal</th>
                      <th>Mulai</th>
                      <th>Selesai</th>
                      <th>Keterengan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                                        <?php foreach ($reservasi as $row ) : ?>
                    <tr>
                      <td><span class="text-muted"><?php echo $row['id_reservasi'] ?></span></td>
                      <td>
                      <?php if ($row['status_reservasi'] == '1') {
                        echo '<i class="btn btn-danger btn-sm" >Batal</i>';
                        }elseif ($row['status_reservasi'] == '2'){
                        echo '<i class="btn btn btn-sm" >Belum Di Setujui</i>';
                        }elseif ($row['status_reservasi'] == '3'){
                        echo '<i class="btn btn-warning btn-sm" >Menunggu Room</i>';
                        }else{
                        echo '<i class="btn btn-success btn-sm" >Selesai</i>';
                        }
                      ?></td>
                      <td><?php echo $row['room_reservasi'] ?></td>
                      <td><?php echo $row['nama_reservasi'] ?></a></td>
                      <td><?php echo $row['nomor_reservasi'] ?></td>
                      <td><?php echo $row['jml_org_reservasi'] ?></td>
                      <td><?php echo $row['tgl_reservasi'] ?></td>
                      <td><?php echo $row['mulai_reservasi'] ?></td>
                      <td><?php echo $row['selesai_reservasi'] ?></td>
                      <td><?php echo $row['desc_reservasi'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('include/base_footer'); ?>