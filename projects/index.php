<?php
include("../include/header.php");
?>

<main class="mt-5">
<div class="d-flex justify-content-center">
<div class="d-grid gap-2 d-md-block mx-auto">
  <button class="btn btn-outline-info btn-rounded mt-2 mx-2" type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Altroz MCE</button>
  <button class="btn btn-outline-info btn-rounded mt-2 mx-2" type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Altroz Cafe Racer</button>
</div>
</div>
<div class="d-flex justify-content-center mt-5">
<a href="../home.php" class="btn btn btn-primary mb-3">Add New Project</a>
</div>
</main>

<!-- Modal -->
<div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
  <div class="modal-dialog modal-sm  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="d-grid gap-2 mx-auto">
        <a href="./naudit.php" class="btn btn-outline-info btn-rounded" type="button">New Audit</a>
        <a href="./eaudit.php" class="btn btn-outline-info btn-rounded" type="button">Existing Audit</a>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>

<?php
include("../include/footer.php");
?>