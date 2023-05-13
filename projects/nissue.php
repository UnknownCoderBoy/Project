<?php
include("../include/header.php");
?>

<main class="mt-5">
<div class="d-flex justify-content-center">
<form>
<div class="row mb-4">
  <select class="form-select">
  <option value="none">Main Module</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
</select>
</div>
<div class="row mb-4">
  <select class="form-select">
  <option value="none">Sub Module</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
</select>
</div>
<div class="row mb-4">
  <select class="form-select">
  <option value="none">Component</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
</select>
</div>
<div class="row mb-4">
  <select class="form-select">
  <option value="none">Issue Desciption</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
</select>
</div>
<div class="row mb-4">
  <div class="form-outline">
    <input type="text" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Comment</label>
  </div>
</div>
<div class="row mb-4">
  <select class="form-select">
  <option value="none">Severity</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
</select>
</div>
<div class="row mb-4">
  <select class="form-select">
  <option value="none">Zone</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
</select>
</div>
<div class="text-center mb-4">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
  <label class="form-check-label" for="inlineCheckbox1">LH</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
  <label class="form-check-label" for="inlineCheckbox2">RH</label>
</div>
</div>
<div class="row mb-4">
  <div class="form-outline">
    <input type="number" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">OCC</label>
  </div>
</div>
<div class="row mb-4">
  <div class="form-outline">
    <input type="number" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Demerit</label>
  </div>
</div>
<div class="row mb-4">
  <select class="form-select">
  <option value="none">Agency</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
  <option value="5">Five</option>
  <option value="6">Six</option>
  <option value="7">Seven</option>
  <option value="8">Eight</option>
</select>
</div>

<div class="row mb-4">
  <div class="col-9">
      <input type="file" id="form10Example2" class="form-control" />
  </div>
  <div class="col">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
      <label class="form-check-label" for="inlineCheckbox2">IMP</label>
  </div>
</div>
<hr>
<div>
  <h5 class="mb-3">PQ Desc</h5>
  <p class="mb-3">MDB Team</p>
</div>
<div class="row mb-5">
  <div class="d-grid col-6 d-md-block mx-auto">
        <a href="" class="btn btn btn-primary mb-3">Preview</a>
        <a href="./auditdata.php" class="btn btn btn-primary mb-3">Submit</a>
      </div>
</div>
</form>
</div>
</main>

<?php
include("../include/footer.php");
?>