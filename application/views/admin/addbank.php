<div class="row">
    <div class="col">

    </div>
    <div class="my-form col-lg-8">
        <div class="text-center mb-5">
            <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3"><i class="fas fa-university"></i></div>
            <h2 class="fw-bolder"><b>Add Bank</b></h2>
        </div>
        <div id="form-header"></div>

        <?= form_open('Admin/addbank') ?>

        <div class="form-group">
            <label for="name" class="fw-bolder"><b>Bank Name</b></label>
            <?= form_input(['name' => 'bank', 'placeholder' => 'Name of the bank', 'value' => set_value('bank'), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('bank') ?></div>
        </div>
        <br>

        <div class="form-group">
            <?= form_submit(['name' => 'submit', 'value' => 'Add', 'class' => 'btn btn-dark btn my-btn rounded-pill']); ?>
            <?= form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'btn btn-light btn my-btn-res rounded-pill']) ?>
        </div>

        <?= form_close() ?>
    </div>
    <div class="col">

    </div>
</div>