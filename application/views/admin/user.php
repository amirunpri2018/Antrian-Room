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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 
    <?php $this->load->view('include/base_css'); ?>
  </head>
  <body class="">
    <?php $this->load->view('include/base_nav'); ?>
    <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
    <div class="my-3 my-md-5">
      <div class="container">
        <div class="page-header">
          <h1 class="page-title">
          Management User
          </h1>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah User</button>
              </div>
              <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap " id="book-table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Level user</th>
                      <th>Nama user</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;
                    foreach ($user->result_array() as $rows) : ?>
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $rows['level_user']; ?></td>
                      <td><?php echo $rows['nama_user']; ?></td>
                      <td><?php echo $rows['username_user']; ?></td>
                      <td><?php echo $rows['email_user']; ?></td>
                      <td class="text-lift">
                        <a href="<?php echo base_url('user/edit/'.$rows['kd_user']) ?>" class="btn btn-secondary btn-sm">Edit</a>
                        <a href="" onclick="myFunction()"class="btn btn-danger btn-sm" >Delete</a>
                      </td>
                    </tr>
                    <?php $i++; endforeach; ?>
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
<!-- Modal -->
<div id="myModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">Tambah User</h4>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
  </div>
  <div class="modal-body">
    <form action="<?php echo base_url().'user/save' ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Lavel Akses</label>
        <select name="level" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Level" data-width="80%" placeholder="Pilih Lavel Akses" required>
          <option value="Manager">Manager</option>
          <option value="Karyawan">Karyawan</option>
        </select>
      </div>
      <div class="form-group">
        <label>Nama User</label>
        <input name="name" id="nama" type="text" class="form-control" placeholder="Nama User .." required>
      </div>
      <div class="form-group">
        <label>Username</label>
        <input name="username" id="username" type="text" class="form-control" placeholder="Username .." required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input name="password" id="password" type="password" class="form-control" placeholder="Password .." required>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input name="email" id="email" type="email" class="form-control" placeholder="Email .." required>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
    <script type="text/javascript">
     $(document).ready(function() {
     $('#book-table').DataTable();
      });
    </script>
    <script type="text/javascript">
     function myFunction() {
    const href = $this.attr('href');
    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      document.location.href = href;
    }
    } else {
      swal("Your imaginary file is safe!");
    }
  };
</script>
  </form>
</div>
</div>
</div>