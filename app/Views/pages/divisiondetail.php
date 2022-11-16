<?= $this->extend('templates/header') ?>
<?= $this->section('content') ?>


<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Project Details</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="card mb-4">
                        <div class="card-body">
                            <table class="table table-borderless text-dark ps-0 text-sm">
                                <tr>
                                    <td style="width: 15% !important;">Division Name</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td style="width: 70% !important;"></td>
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
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Name<strong></strong></td>
                                            <td>Email</td>
                                            <td>
                                                <form action="deleteProject" method="post" id="">
                                                    <input type="hidden" name="id" id="hiddenField" value="" />
                                                    <a class="dropdown-item" href="javascript:{}" onclick="document.getElementById('id').submit();"><i class="bx bx-trash me-1"></i>Delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </table>
                            <a class="btn btn-primary" href="newtask">
                                <span class="d-none d-sm-block text-white">Add Task</span>
                                <i class="fas fa-user-edit text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Task" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

<?= $this->endSection() ?>