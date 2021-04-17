<ul class="nav nav-tabs" id="myTab" role="tablist" >
  <li class="nav-item" role="presentation">
    <a class="nav-link " id="home-tab" data-toggle="tab" href="#dev" role="tab" aria-controls="home" aria-selected="true">Currently Avail</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#repname" role="tab" aria-controls="profile" aria-selected="false">Past Contest History</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#adminhis" role="tab" aria-controls="contact" aria-selected="false">Future Contest</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade " id="dev" role="tabpanel" aria-labelledby="home-tab">
   <?php
  require_once('currently_avail_contest.php');
  ?>
  </div>
  <div class="tab-pane fade" id="repname" role="tabpanel" aria-labelledby="profile-tab"> 
   <?php
  require_once('past_contest.php');
  ?>
  </div>
  <div class="tab-pane fade" id="adminhis" role="tabpanel" aria-labelledby="profile-tab">
    <?php
  require_once('future_contest.php');
  ?>
  </div>
</div>