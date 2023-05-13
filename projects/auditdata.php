<?php
include("../include/header.php");
?>

<main class="mt-5">
<div class="d-flex justify-content-center">
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Main Module</th>
      <th scope="col">Sub Module</th>
      <th scope="col">Component</th>
      <th scope="col">Issue Desciption</th>
      <th scope="col">Comment</th>
      <th scope="col">Severity</th>
      <th scope="col">Zone</th>
      <th scope="col">LH</th>
      <th scope="col">RH</th>
      <th scope="col">OCC</th>
      <th scope="col">Demerit</th>
      <th scope="col">Agency</th>
      <th scope="col">IMP</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Exterior</td>
      <td>side-end</td>
      <td>FR Bumper-Upper Grill</td>
      <td>Colour Mismatch</td>
      <td>No change</td>
	  <td>Low</td>
      <td>B</td>
      <td scope="row"><div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
      </div></td>
      <td scope="row"><div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked/>
      </div></td>
      <td>12</td>
      <td>320</td>
      <td>Design</td>
       <td scope="row"><div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
      </div></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<div class="d-flex justify-content-center">
  <div class="row mb-5">
  <div class="mx-auto">
        <a href="./nissue.php" class="btn btn btn-primary my-3">Add New</a>
        <a href="../home.php" class="btn btn btn-primary my-3">Finish</a>
  </div>
</div>
</div>
</main>

<?php
include("../include/footer.php");
?>