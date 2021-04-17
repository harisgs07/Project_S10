

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link " id="home-tab" data-toggle="tab" href="#grpdtls" role="tab" aria-controls="home" aria-selected="false">Whole Group Details</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#grpname" role="tab" aria-controls="profile" aria-selected="false">Search by Group Name</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#grprepname" role="tab" aria-controls="contact" aria-selected="false">Search by reg_Name</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade " id="grpdtls" role="tabpanel" aria-labelledby="home-tab">
  
   <?php
  include('wholegrouplist.php');
  ?>

  </div>
  <div class="tab-pane fade" id="grpname" role="tabpanel" aria-labelledby="profile-tab">


<nav style = "border-radius:5px 5px 5px 5px; margin-top:5px;" class="nav navbar-dark bg-dark">
  <label style="margin:16px 0px 16px 0px; font-family:arial; color:white;" class="col-md-7" >Enter The Group Name to done a similar search</label>
  <form class="form-inline col-md-4" method = 'post'>
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="stxt" ></input>	
    <button type="submit" id='search' data-toggle="tab"  href="#grpsearch" role="tab" name='bb'>Search</button>
  </form>

</nav>

<div class="tab-pane fade" id="grpsearch" data-toggle="tab"  role="tabpanel" aria-labelledby="profile-tab">
<?php

$sr = 'hkr';
  include('searchgroup.php');
  ?>
</div>
  </div>


</div>


  <div class="tab-pane fade" id="grprepname" role="tabpanel" aria-labelledby="contact-tab">
   
  </div>
</div>