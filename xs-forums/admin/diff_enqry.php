<ul class="nav nav-tabs" id="myTab" role="tablist" >
  <li class="nav-item" role="presentation">
    <a class="nav-link " id="home-tab" data-toggle="tab" href="#dev" role="tab" aria-controls="home" aria-selected="true">Current Enquiry/Complaint</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#repname" role="tab" aria-controls="profile" aria-selected="false">All History</a>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade " id="dev" role="tabpanel" aria-labelledby="home-tab">
   <?php
  require_once('Enquirycomplaint.php');
  ?>
  </div>
  <div class="tab-pane fade" id="repname" role="tabpanel" aria-labelledby="profile-tab"> 
   <?php
  require_once('all_enquirycomplaint.php');
  ?>
  </div>

</div>