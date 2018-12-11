<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <?php

            if($session->exists('user')){
             
         ?>
      <a class="navbar-brand" href="/dashboard"><img src="../../web/images/frsc.jpeg" height="50" width="50"></a>
    <?php 

            }else{

            ?>
<a class="navbar-brand" href="/"><img src="../web/images/frsc.jpeg" height="50" width="50"></a>
            <?php } ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php 

              if($session->exists('user')){
             
         ?>

          <?php if($alladmins->role=='super admin') { ?>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard/"></a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="/dashboard/add_car">Register Car</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="/dashboard/add_driver">Add Offender</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="/dashboard/search_offender">Search Offender</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="/dashboard/add_admin">Create sub admin</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="/dashboard/view_admin">View all admin</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="/dashboard/add_offense">Add Offense</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard/logout">Logout</a>
        </li>
          <?php }else{ ?>
<li class="nav-item">
            <a class="nav-link" href="/dashboard/"></a>
        </li>
         <!-- <li class="nav-item">
            <a class="nav-link" href="/dashboard/add_car">Register Car</a>
        </li> -->
         <li class="nav-item">
            <a class="nav-link" href="/dashboard/add_driver">Add Offender</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="/dashboard/search_offender">Search Offender</a>
        </li>
    
        <li class="nav-item">
            <a class="nav-link" href="/dashboard/logout">Logout</a>
        </li>
          <?php }?>
              <?php  } ?>
        </ul>
    </div>
    </div>
</nav>
