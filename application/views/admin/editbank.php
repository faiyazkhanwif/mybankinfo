<div class="row">
    <div class="col">

    </div>
    <div class="col-lg-8">
        <div class="text-center mb-5">
            <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3"><i class="fas fa-university"></i></div>
            <h2 class="fw-bolder"><b>Edit Bank</b></h2>
        </div>
        <?= form_open('Admin/edit_bank/' . $this->uri->segment(3)) ?>
        <div id="form-header"></div>

        <div class="form-group">
            <label for="name" class="fw-bolder"><b>Bank Name</b></label>
            <?= form_input(['name' => 'bank', 'placeholder' => 'Bank Name', 'value' => set_value('name', $bank_details->bankname), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('bank') ?></div>
        </div>
        <br>
        <!--
        <div class="form-group">
            <label for="contact" class="fw-bolder"><b>Contact</b></label>
            < ?= form_input(['name' => 'contact', 'placeholder' => 'Phone number', 'value' => set_value('contact', $user_details->contact), 'class' => 'form-control']) ?>

            <div class="text-danger form-error">< ?= form_error('contact') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="specialty" class="fw-bolder"><b>Specialty</b></label>
            < ?= form_input(['name' => 'specialty', 'placeholder' => 'Dev Specialty', 'value' => set_value('specialty', $user_details->specialty), 'class' => 'form-control']) ?>

            <div class="text-danger form-error">< ?= form_error('specialty') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="description" class="fw-bolder"><b>Description</b></label>
            < ?= form_input(['name' => 'description', 'placeholder' => 'Dev Description', 'value' => set_value('description' , $user_details->description), 'class' => 'form-control']) ?>

            <div class="text-danger form-error">< ?= form_error('description') ?></div>
        </div>


        <br>
-->
        <div class="form-group">
            <?= form_submit(['name' => 'submit', 'value' => 'Update', 'class' => 'btn btn-dark btn my-btn rounded-pill']); ?>
            <?= form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'btn btn-light btn my-btn-res rounded-pill']) ?>
        </div>

        <?= form_close() ?>
    </div>
    <div class="col">

    </div>
</div>
<br>