<div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="<?php echo base_url('home') ?>">
              <span class="header-brand-img">Antrian Room Meeting</span>
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item d-none d-md-flex">
<!--<a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>-->                
                </div>
                <div class="dropdown">
                  <a class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar"><img src="https://2.bp.blogspot.com/-lQwAiIBVEeA/VuwDi7ssmgI/AAAAAAAABZU/ZqV2Frl1O_UEya78RL88DsE9jnXm7v73w/s1600/LR8yqlrO.jpeg" class="avatar" alt=""></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Hi, <?php echo $this->session->userdata('nama_user'); ?></span>
                      <small class="text-muted d-block mt-1"><?php echo $this->session->userdata('level_user'); ?></small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-settings"></i> Settings
                    </a>
                    <a class="dropdown-item" href="<?php echo base_url('login/logout') ?>">
                      <i class="dropdown-icon fe fe-log-out"></i> Sign out
                    </a>
                  </div>
                </div>
              </div>
              <a class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 ml-auto">
                <form class="input-icon my-3 my-lg-0">
                  <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                  <div class="input-icon-addon">
                    <i class="fe fe-search"></i>
                  </div>
                </form>
              </div>
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="<?php echo base_url('reservasi') ?>" class="nav-link"><i class="fa fa-address-book"></i> Reservasi Room</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown"><i class="fe fe-users"></i> Management User</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="<?php echo base_url('user') ?>" class="dropdown-item ">User</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>