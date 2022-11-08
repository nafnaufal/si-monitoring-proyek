<?= $this->extend('templates/header') ?>
<?= $this->section('content') ?>

<ul class="navbar-nav flex-row align-items-center ms-auto">

    <!-- User -->
    <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
                <img src="../assets/img/avatars/cat-profile.jpg" alt class="w-px-40 h-auto rounded-circle" />
            </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
            <li>
                <a class="dropdown-item" href="#">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                                <img src="../assets/img/avatars/cat-profile.jpg" alt
                                    class="w-px-40 h-auto rounded-circle" />
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?= session()->get('username') ?></span>
                            <small class="text-muted">Admin</small>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <div class="dropdown-divider"></div>
            </li>
            <li>
                <a class="dropdown-item" href="#">
                    <i class="bx bx-user me-2"></i>
                    <span class="align-middle">My Profile</span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="#">
                    <i class="bx bx-cog me-2"></i>
                    <span class="align-middle">Settings</span>
                </a>
            </li>
            <li>
                <div class="dropdown-divider"></div>
            </li>
            <li>
                <a class="dropdown-item" href="<?= base_url(); ?>/logout">
                    <i class="bx bx-power-off me-2"></i>
                    <span class="align-middle">Log Out</span>
                </a>
            </li>
        </ul>
    </li>
    <!--/ User -->
</ul>
</div>
</nav>

<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Profile Details</h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                </ul>
                <div class="card mb-4">
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="../assets/img/avatars/cat-profile.jpg" alt="user-avatar" class="d-block rounded"
                                height="100" width="100" id="uploadedAvatar" />
                            <div class="content-wrap">
                                <span class="name">
                                    <h5><b><?= session()->get('username') ?></b></h5>
                                </span>
                                <span class="department"><i>Employee</i></span>
                            </div>

                        </div>
                    </div>
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <ul class="nav nav-pills flex-column flex-md-row mb-3">
                              </ul>
                              <div class="card mb-4">
                                
                        <div class="card-body">
                            <table class="table table-borderless text-dark ps-0 text-sm">
                                <tr>
                                    <td style="width: 20% !important;">Full Name</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td style="width: 70% !important;"><?= $data[0]['name'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 20% !important;">Birth Date</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td style="width: 70% !important;"><?= $data[0]['tgl_lahir'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 20% !important;">E-mail</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td style="width: 70% !important;"><?= $data[0]['email'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 20% !important;">Phone Number</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td style="width: 70% !important;"><?= $data[0]['no_telp'] ?></td>
                                </tr>
                            </table>
                            <div class="col-md-4">
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                          <span class="d-none d-sm-block text-light">Edit Profile</span>
                                    <i class="fas fa-user-edit text-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit Profile" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"></i>
                                </a>
                            </div> -->
                        </div>
                        
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-fullscreen-sm-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action='updateProfile' method="POST">
                                            <div class="form-floating mb-3">
                                              <input type="text" class="form-control ms-1" id="name" name="name">
                                              <label for="name">Full Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                              <input type="date" class="form-control ms-1" id="date" name="date">
                                              <label for="date">Birth Date</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                              <select class="form-select ms-1" aria-label=".form-select-sm" name="kelamin">
                                                <option value="Man" selected>Man</option>
                                                <option value="Woman">Woman</option>
                                              </select>
                                              <label for="gender">Gender</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                              <textarea class="form-control ms-1" id="address" name="address"></textarea>
                                              <label for="address">Address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                              <input type="email" class="form-control ms-1" id="email" name="email">
                                              <label for="email">E-mail</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                              <input type="text" class="form-control ms-1" id="phone" name="phone">
                                              <label for="phone">Phone Number</label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

<?= $this->endSection() ?>