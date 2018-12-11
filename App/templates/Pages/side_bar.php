<div class="left-sidebar">

                 <ul class="navbar-nav"> 
             
                     <?php if ($alladmins->role=='sub admin'){

                      ?>
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
                     <?php } else { ?>
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
            <a class="nav-link" href="/dashboard/add_offense">Add Offense</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard/add_admin">Create Sub Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard/view_admin">View all Sub Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard/logout">Logout</a>
        </li>
                    
                     <?php } ?>
          
        </ul>

    </div>