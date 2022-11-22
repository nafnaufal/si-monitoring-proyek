<?= $this->extend('templates/header') ?>
<?= $this->section('content') ?>


<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold">Division Details</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="card mb-4">
                        <div class="card-body">
                            <table class="table table-borderless text-dark ps-0 text-sm">
                                <tr>
                                    <td style="width: 15% !important;">Division Name</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td style="width: 70% !important;"><?= $data['name'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 15% !important;">
                                        <h5>Member</h5>
                                    </td>
                                </tr>

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <?php foreach ($member as $peg) { ?>
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i><?= $peg['name'] ?><strong></strong></td>
                                                <td><?= $peg['email'] ?></td>
                                                <td>
                                                    <form action="deleteMember" method="post" id="<?= $peg['username'] ?>">
                                                        <input type="hidden" name="id" id="hiddenField" value="<?= $peg['username'] ?>" />
                                                        <a class="dropdown-item" href="javascript:{}" onclick="document.getElementById('<?= $peg['username'] ?>').submit();"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </table>
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span class="d-none d-sm-block text-white">Add Member</span>
                                <i class="fas fa-user-edit text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                            </a>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-fullscreen-sm-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action='addMember' method="POST">
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="id" id="hiddenField" value="<?= $data['id'] ?>" />
                                                <input type="text" class="form-control ms-1" id="name" name="username">
                                                <label for="name">Member Username</label>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add</button>
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