<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>

<div class="card">
    <h5 class="card-header">Project Almanac</h5>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Division</th>
                <th>Member</th>
                <th>Number of Project</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <?php foreach ($data as $dt) { ?>
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $dt['name'] ?></strong></td>
                    <td><span class="badge bg-label-primary me-1">num</span></td>
                    <td><span class="badge bg-label-primary me-1">num</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <form action="detailDivision" method="post" id="<?= $dt['id'] ?>detail">
                                    <input type="hidden" name="id" id="hiddenField" value="<?= $dt['id'] ?>" />
                                    <a class="dropdown-item" href="javascript:{}" onclick="document.getElementById('<?= $dt['id'] ?>detail').submit();"><i class=" bx bx-edit-alt me-1"></i>
                                        Detail</a>
                                </form>
                                <form action="deleteDivision" method="post" id="<?= $dt['id'] ?>">
                                    <input type="hidden" name="id" id="hiddenField" value="<?= $dt['id'] ?>" />
                                    <a class="dropdown-item" href="javascript:{}" onclick="document.getElementById('<?= $dt['id'] ?>').submit();"><i class="bx bx-trash me-1"></i>Delete</a>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>