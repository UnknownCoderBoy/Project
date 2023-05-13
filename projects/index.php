<?php
include("../include/header.php");
?>

<main class="mt-5">
<div class="d-flex justify-content-center">
<div class="d-grid gap-2 d-md-block mx-auto">
  <button class="btn btn-outline-info btn-rounded mt-2 mx-2" type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Button</button>
  <button class="btn btn-outline-info btn-rounded mt-2 mx-2" type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal">Button</button>
</div>
</div>
</main>

<!-- Modal -->
<div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
  <div class="modal-dialog modal-sm  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="d-grid gap-2 col-6 mx-auto">
        <a href="./naudit.php" class="btn btn-outline-info btn-rounded" type="button">New</a>
        <a href="./eaudit.php" class="btn btn-outline-info btn-rounded" type="button">Existing</a>
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