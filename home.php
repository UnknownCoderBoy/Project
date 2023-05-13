<?php
include("./include/header.php");
?>

<main class="flex justify-content-center mt-1">
<!-- Tabs navs -->
<ul class="nav justify-content-center nav-tabs mb-3" id="ex-with-icons" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="ex-with-icons-tab-1" data-mdb-toggle="tab" href="#ex-with-icons-tabs-1" role="tab"
      aria-controls="ex-with-icons-tabs-1" aria-selected="true"><i class="fas fa-chart-pie fa-fw me-2"></i>Sales</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="ex-with-icons-tab-2" data-mdb-toggle="tab" href="#ex-with-icons-tabs-2" role="tab"
      aria-controls="ex-with-icons-tabs-2" aria-selected="false"><i class="fas fa-chart-line fa-fw me-2"></i>Subscriptions</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="#ex-with-icons-tabs-3" role="tab"
      aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i class="fas fa-cogs fa-fw me-2"></i>Settings</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="ex-with-icons-tab-4" data-mdb-toggle="tab" href="#ex-with-icons-tabs-4" role="tab"
      aria-controls="ex-with-icons-tabs-4" aria-selected="false"><i class="fas fa-cogs fa-fw me-2"></i>Settings</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="ex-with-icons-tab-5" data-mdb-toggle="tab" href="#ex-with-icons-tabs-5" role="tab"
      aria-controls="ex-with-icons-tabs-5" aria-selected="false"><i class="fas fa-cogs fa-fw me-2"></i>Settings</a>
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content text-center" id="ex-with-icons-content">
  <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel" aria-labelledby="ex-with-icons-tab-1">
    <div class="row row-cols row-cols-lg-4 row-cols-md-2 row-cols-sm-2 p-2 g-5">
  <div class="col">
    <div class="card h-100">
      <img src="./img/Image.png" class="card-img-top" alt="Hollywood Sign on The Hill"/>
      <div class="card-body">
        <h5 class="card-title">Projects</h5>
        <a href="./projects/" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./img/Image.png" class="card-img-top" alt="Palm Springs Road"/>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./img/Image.png" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./img/Image.png" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
    Tab 2 content
  </div>
  <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel" aria-labelledby="ex-with-icons-tab-3">
    Tab 3 content
  </div>
  <div class="tab-pane fade" id="ex-with-icons-tabs-4" role="tabpanel" aria-labelledby="ex-with-icons-tab-4">
    Tab 4 content
  </div>
  <div class="tab-pane fade" id="ex-with-icons-tabs-5" role="tabpanel" aria-labelledby="ex-with-icons-tab-5">
    Tab 5 content
  </div>
</div>
<!-- Tabs content -->
</main>

<?php
include("./include/footer.php");
?>