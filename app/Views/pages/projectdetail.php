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
                                    <td style="width: 15% !important;">Project Name</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td style="width: 70% !important;"><?= $data['name'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 15% !important;">Deadline</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td style="width: 70% !important;"><?= $data['deadline'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 15% !important;">Progress</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td style="width: 70% !important;"><?= $data['progress'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 15% !important;">Description</td>
                                    <td style="width: 5% !important;">:</td>
                                    <td style="width: 70% !important;"><?= $data['deskripsi'] ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 15% !important;">
                                        <h5>Task</h5>
                                    </td>
                                </tr>

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th>Progress</th>
                                            <th>Start</th>
                                            <th>Deadline</th>
                                            <th>Employee</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>Task<strong></strong></td>
                                            <td><span class="badge bg-label-primary me-1">100%</span></td>
                                            <td>Date</td>
                                            <td>Date</td>
                                            <td>Employee</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="detailProject"><i class="bx bx-edit-alt me-1"></i>
                                                            Detail</a>
                                                        <form action="deleteProject" method="post" id="">
                                                            <input type="hidden" name="id" id="hiddenField" value="" />
                                                            <a class="dropdown-item" href="javascript:{}" onclick="document.getElementById('id').submit();"><i class="bx bx-trash me-1"></i>Delete</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </table>
                            <form action="newTask" method="post" id="addTask">
                                <input type="hidden" name="id" id="hiddenField" value="<?= $data['id'] ?>" />
                                <a class="dropdown-item" href="javascript:{}" onclick="document.getElementById('addTask').submit();">Add Task
                                    <i class="fas fa-user-edit text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Task"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

<?= $this->endSection() ?>