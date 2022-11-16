<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>

<div class="card">
    <h5 class="card-header">New Task</h5>
    <div class="card-body">
        <form action="insertTask" method="post">
            <label for="name">Task Name</label>
            <input type="text" class="form-control" id="name" name="name">
            <label for="desc">Description</label>
            <textarea name="desc" id="desc" class="form-control" cols="30" rows="10"></textarea>
            <label for="employee">Employee</label>
            <select class="form-control" id="employee" name="employee">
                <option value="none" selected disabled hidden>Pilih Employee</option>
                <option value="emp 1">emp 1</option>
                <option value="emp 2">emp 2</option>
            </select>
            <button type="submit" class="btn btn-primary mt-2">Insert</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>