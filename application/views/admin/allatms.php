<!--=== Success msg ===-->
<?php
if ($this->session->flashdata('success')) {
    print '<br>';
    print '<div class= "alert alert-success">' . $this->session->flashdata('success') . '</div>';
}
?>
<div class="card mb-4 wow fadeIn">

<!--Card content-->
<div class="card-body d-sm-flex justify-content-between">
  <h5 class="mb-2 mb-sm-0 pt-1">
  <a class="text-dark"><i class="fas fa-map-marked-alt"></i>&nbsp;</a><span><b>ATM Locations</b></span>
  </h5>
  <div class="mb-2 mb-sm-0 pt-1">
    <div class="view-btn"><a href="<?= base_url() ?>Admin/addatm">Add new ATM <i class="fas fa-plus-circle"></i></a></div>
  </div>
</div>

</div>

<br>
<div class="container card h-100 shadow border-0">
    <div id="table-header fw-bolder"> </div>
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="text-dark"><b>ATM ID</b></th>
                <th scope="col" class="text-dark"><b>Bank Name</b></th>
                <th scope="col" class="text-dark"><b>Area</b></th>
                <th scope="col" class="text-dark"><b>Address</b></th>
                <th scope="col" class="text-dark"><b>Edit Details</b></th>
                <th scope="col" class="text-dark"><b>Remove</b></th>
            </tr>
        </thead>


        <tbody>
            <?php foreach ($atms as $data) : ?>
                <tr>
                    <?php print '<td>' . htmlentities($data->atmID) . '</td>'; ?>
                    <?php print '<td>' . htmlentities($data->bankname) . '</td>'; ?>
                    <?php print '<td>' . htmlentities($data->areaname) . '</td>'; ?>
                    <?php print '<td>' . htmlentities($data->address) . '</td>'; ?>
                    <?php

                    print '<td>';
                    print '<a href= "' . base_url() . 'Admin/edit_atm/' . $data->atmID . '" title= "Edit" class="btn btn-dark btn-sm rounded-pill"><i class="fas fa-pencil-alt"></i></a>';

                    print '</td>';

                    ?>

                    <?php

                    print '<td>';
                    print '<a href= "' . base_url() . 'Admin/deleteatm/' . $data->atmID . '" title= "Delete" class="btn btn-light rounded-pill btn-sm delete" data-confirm = "Are you sure to delete this Branch?"><i class="fas fa-times"></i></a>';

                    print '</td>';

                    ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>