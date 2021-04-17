<ul class="nav nav-tabs" id="myTab" role="tablist" >
  <li class="nav-item" role="presentation">
    <a class="nav-link " id="home-tab" data-toggle="tab" href="#dev" role="tab" aria-controls="home" aria-selected="true">New_Post</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#repname" role="tab" aria-controls="profile" aria-selected="false">Disabled_Post</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#adminhis" role="tab" aria-controls="contact" aria-selected="false">Viewed_Post</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade " id="dev" role="tabpanel" aria-labelledby="home-tab">
   <?php
  require_once('post.php');
  ?>
  </div>
  <div class="tab-pane fade" id="repname" role="tabpanel" aria-labelledby="profile-tab"> 
   <?php
  require_once('disabled_post.php');
  ?>
  </div>
  <div class="tab-pane fade" id="adminhis" role="tabpanel" aria-labelledby="contact-tab">
    <?php
  require_once('admindtls.php');
  ?>
  </div>
</div>