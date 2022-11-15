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
                                    <td style="width: 15% !important;">Division</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td style="width: 70% !important;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 15% !important;">Task</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td style="width: 70% !important;"></td>
                                </tr>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Birthdate</th>
                                            <th>Address</th>
                                            <th>E-mail</th>
                                            <th>Phone Number</th>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                    </tbody>
                                </table>
                            </table>
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span class="d-none d-sm-block text-white">Add Employee</span>
                                <i class="fas fa-user-edit text-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Add Task" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
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