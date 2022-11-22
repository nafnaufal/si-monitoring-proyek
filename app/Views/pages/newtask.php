<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>

<div class="card">
    <h5 class="card-header">New Task</h5>
    <div class="card-body">
        <form action="insertTask" method="post">
            <input type="hidden" name="id_project" id="hiddenField" value="<?= $id_project ?>" />
            <label for="name">Task Name</label>
            <input type="text" class="form-control" id="name" name="name">
            <label for="desc">Description</label>
            <textarea name="desc" id="desc" class="form-control" cols="30" rows="10"></textarea>
            <label for="employee">Employee</label>
            <select class="form-control" id="employee" name="employee">
                <option value="none" selected disabled hidden>Pilih Employee</option>
                <?php foreach ($member as $m) { ?>
                    <option value="<?= $m['username'] ?>"><?= $m['username'] ?></option>
                <?php } ?>
            </select>
            <button type="submit" class="btn btn-primary mt-2">Insert</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>