<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>

<div class="card">
    <h5 class="card-header">New Division</h5>
    <div class="card-body">
        <form action="insertDivision" method="post">
            <label for="name">Division Name</label>
            <input type="text" class="form-control" id="name" name="name">
            <button type="submit" class="btn btn-primary mt-2">Insert</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>