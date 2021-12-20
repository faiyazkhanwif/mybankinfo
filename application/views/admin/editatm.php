<div class="row">
    <div class="col">

    </div>
    <div class="col-lg-8">
        <div class="text-center mb-5">
            <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3"><i class="fas fa-map"></i></div>
            <h2 class="fw-bolder"><b>Edit ATM Details</b></h2>
        </div>
        <div>
            <p><sup><b>** Parent Bank and Area of an ATM cannot be changed once the ATM is already created.</b></sup></p>
        </div>
        <?= form_open('Admin/edit_atm/' . $this->uri->segment(3)) ?>
        <div id="form-header"></div>

        <div class="form-group">
            <label for="bank" class="fw-bolder"><b>Bank </b> <i>(Not Editable)</i></label>
            <input class="form-control" type="text" value='<?= set_value('bank', $atm_details->bankname) ?>' disabled>
            <div class="text-danger form-error"><?= form_error('bank') ?></div>
        </div>
        <br>

        <div class="form-group">
            <label for="area" class="fw-bolder"><b>Area </b> <i>(Not Editable)</i></label>
            <input class="form-control" type="text" value='<?= set_value('area', $atm_details->areaname) ?>' disabled>
            <div class="text-danger form-error"><?= form_error('area') ?></div>
        </div>
        <br>

        <div class="form-group">
            <label for="address" class="fw-bolder"><b>Address</b></label>
            <?= form_textarea(['name' => 'address', 'placeholder' => 'Address of the ATM', 'value' => set_value('address', $atm_details->address), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('address') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="address" class="fw-bolder"><b>Map</b></label>
            <?= form_textarea(['name' => 'map', 'placeholder' => 'Map iframe', 'value' => $atm_details->map, 'class' => 'form-control']) ?>
            <div class="text-danger form-error"><?= form_error('map') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="contact" class="fw-bolder"><b>Contact</b></label>
            <?= form_input(['name' => 'contact', 'placeholder' => 'Contact number', 'value' => set_value('contact', $atm_details->contact), 'class' => 'form-control']) ?>
            <div class="text-danger form-error"><?= form_error('contact') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="addinfo" class="fw-bolder"><b>Additional Information</b></label>
            <?= form_textarea(['name' => 'addinfo', 'placeholder' => 'E.g. Working hours', 'value' => set_value('addinfo', $atm_details->addinfo), 'class' => 'form-control']) ?>
            <div class="text-danger form-error"><?= form_error('addinfo') ?></div>
        </div>
        <br>
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