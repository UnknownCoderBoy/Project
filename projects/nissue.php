<?php
include("../include/header.php");
?>

<main class="mt-5">
<div class="d-flex justify-content-center px-4">
<form>
<div class="row mb-4">
  <select class="form-select">
  <option value="none">Main Module</option>
  <option value="1">Interior</option>
  <option value="1">Exterior</option>
  <option value="1">Underbody</option>
  <option value="1">Engine Compartment</option>
</select>
</div>
<div class="row mb-4">
  <select class="form-select">
  <option value="none">Sub Module</option>
  <option value="1">front-end</option>
  <option value="2">side-end</option>
  <option value="3">rear-end</option>
  <option value="4">top-end</option>
</select>
</div>
<div class="row mb-4">
  <select class="form-select">
  <option value="none">Component</option>
  <option value="1">FR Bumper-Skin</option>
  <option value="2">FR Bumper-Upper Grill</option>
  <option value="3">FR Bumper-Lower Grill</option>
  <option value="4">FR Bumper-T Logo</option>
</select>
</div>
<div class="row mb-4">
  <select class="form-select">
  <option value="none">Issue Desciption</option>
  <option value="1">Colour Mismatch</option>
  <option value="2">Gloss Mismatch</option>
  <option value="3">Poor Glass Level</option>
  <option value="4">Split line</option>
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
  <option value="1">High</option>
  <option value="2">Low</option>
</select>
</div>
<div class="row mb-4">
  <select class="form-select">
  <option value="none">Zone</option>
  <option value="1">A</option>
  <option value="2">B</option>
  <option value="3">C</option>
  <option value="4">D</option>
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
  <option value="1">Design</option>
  <option value="2">Part</option>
  <option value="3">Process</option>
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
<div class="mb-4">
  <h5 class="mb-3 lw-5">PQ Desc</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
</div>
<div class="mb-5">
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