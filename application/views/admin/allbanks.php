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
    <a class="text-dark"><i class="fas fa-university"></i>&nbsp;</a><span><b>List of Banks</b></span>
    </h5>
    <div class="mb-2 mb-sm-0 pt-1">
      <div class="view-btn"><a href="<?= base_url() ?>Admin/addbank">Add new Bank <i class="fas fa-plus-circle"></i></a></div>
    </div>
  </div>

</div>

<br>
<div class="container card h-100 shadow border-0">
  <div id="table-header fw-bolder"> </div>
  <table class="table table-hover">
    <thead class="thead-light">
      <tr>
        <th scope="col" class="text-dark">ID</th>
        <th scope="col" class="text-dark">Name</th>
        <th scope="col" class="text-dark">Edit</th>
        <th scope="col" class="text-dark">Remove</th>
      </tr>
    </thead>


    <tbody>
      <?php foreach ($banks as $udata) : ?>
        <tr>
          <?php print '<td>' . htmlentities($udata->bankID) . '</td>'; ?>
          <?php print '<td>' . htmlentities($udata->bankname) . '</td>'; ?>
          <?php
          
            print '<td>';
            print '<a href= "' . base_url() . 'Admin/edit_bank/' . $udata->bankID . '" title= "Edit" class="btn btn-dark btn-sm rounded-pill"><i class="fas fa-pencil-alt"></i></a>';

            print '</td>';
          
          ?>

          <?php
          
            print '<td>';
            print '<a href= "' . base_url() . 'Admin/deletebank/' . $udata->bankID . '" title= "Delete" class="btn btn-light rounded-pill btn-sm delete" data-confirm = "Are you sure to delete this Bank?"><i class="fas fa-times"></i></a>';

            print '</td>';
          
          ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>