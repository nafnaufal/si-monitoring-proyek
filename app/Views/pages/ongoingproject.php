<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>

<div class="card">
    <h5 class="card-header">On-going Project</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Project</th>
                    <th>Status</th>
                    <th>Progress</th>
                    <th>Actions</th>
                    <th>id</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php foreach ($data as $dt) { ?>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $dt['name'] ?></strong></td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td><span class="badge bg-label-primary me-1"><?= $dt['progress'] ?>%</span></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                        Detail</a>
                                    <form action="deleteProject" method="post" id="<?= $dt['id'] ?>">
                                        <input type="hidden" name="id" id="hiddenField" value="<?= $dt['id'] ?>" />
                                        <a class="dropdown-item" href="javascript:{}" onclick="document.getElementById('<?= $dt['id'] ?>').submit();"><i class="bx bx-trash me-1"></i>Delete</a>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-label-primary me-1"><?= $dt['id'] ?>%</span></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>