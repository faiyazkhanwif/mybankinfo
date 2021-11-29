<div class="row">
    <div class="col">

    </div>
    <div class="my-form col-lg-8">
        <div class="text-center mb-5">
            <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3"><i class="fas fa-map-marked-alt"></i></div>
            <h2 class="fw-bolder"><b>Add Branch Location and Details</b></h2>
        </div>
        <div id="form-header"></div>

        <?= form_open('Admin/addbranch') ?>

        <div class="form-group">
            <label for="bankID" class="fw-bolder"><b>Bank</b></label>
            <div class="col-lg-12">
                <select name="bankID" class="form-control">
                    <option value="">Choose a bank</option>
                    <?php foreach ($banks as $bank) : ?>
                        <?php print '<option value="' . $bank->bankID . '">' . $bank->bankname . '</option>'; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="text-danger form-error"><?= form_error('bankID') ?></div>
            </div>
        </div>
        <br>

        <div class="form-group">
            <label for="areaID" class="fw-bolder"><b>Area</b></label>
            <div class="col-lg-12">
                <select name="areaID" class="form-control">
                    <option value="">Choose an area</option>
                    <?php foreach ($areas as $area) : ?>
                        <?php print '<option value="' . $area->areaID . '">' . $area->areaname . '</option>'; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-sm-4">
                <div class="text-danger form-error"><?= form_error('areaID') ?></div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="address" class="fw-bolder"><b>Address</b></label>
            <?= form_textarea(['name' => 'address', 'placeholder' => 'Address of the branch', 'value' => set_value('address'), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('address') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="address" class="fw-bolder"><b>Map</b></label>
            <?= form_textarea(['name' => 'map', 'placeholder' => 'Map iframe', 'value' => set_value('map'), 'class' => 'form-control']) ?>
            <div class="text-danger form-error"><?= form_error('map') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="contact" class="fw-bolder"><b>Contact</b></label>
            <?= form_input(['name' => 'contact', 'placeholder' => 'Contact number', 'value' => set_value('contact'), 'class' => 'form-control']) ?>
            <div class="text-danger form-error"><?= form_error('contact') ?></div>
        </div>
        <br>
        <div class="form-group">
            <label for="addinfo" class="fw-bolder"><b>Additional Information</b></label>
            <?= form_textarea(['name' => 'addinfo', 'placeholder' => 'E.g. Working hours', 'value' => set_value('addinfo'), 'class' => 'form-control']) ?>
            <div class="text-danger form-error"><?= form_error('addinfo') ?></div>
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