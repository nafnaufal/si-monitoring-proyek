<?= $this->extend('templates/header') ?>

<?= $this->section('content') ?>

<div class="card">
    <h5 class="card-header">New Project</h5>
    <div class="card-body">
        <form action="insertProject" method="post">
            <label for="name">Nama Project</label>
            <input type="text" class="form-control" id="name" name="name">
            <label for="desc">Deskripsi</label>
            <textarea name="desc" id="desc" class="form-control" cols="30" rows="10"></textarea>
            <label for="divisi">Divisi</label>
            <select class="form-control" id="divisi" name="divisi">
                <option value="none" selected disabled hidden>Pilih Divisi</option>
                <?php foreach ($data as $dt) { ?>
                    <option value="<?= $dt['id'] ?>"><?= $dt['name'] ?></option>
                <?php } ?>
            </select>
            <label for="deadline">Deadline</label>
            <input type="date" class="form-control" id="deadline" name="deadline">
            <button type="submit" class="btn btn-primary mt-2">Insert</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>