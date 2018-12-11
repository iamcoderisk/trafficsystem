<div class="container shift-down">
    <?php require("side_bar.php"); ?>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <h4 class="alert alert-success"> Welcome Back, Admin</h4>
            <hr>
            <div class="container">
                <div class="row justify-content-center">
                    <p><div class="col-md-4 text-center">
                       
                       <div class="alert alert-danger">
                            <h5>Total Offense</h5>
                            <hr>
                            <h3><?php if(empty($committed)){
                                echo "0";
                            }else{
                                echo count($committed);
                            } ?>
                            <hr>
                            <a href="/dashboard/view_offenders">View Offenders</a>    
                        </h3>
                       </div>
                    </div></p>
                
            
                </div>
            </div>
        </div>
    </div>
</div>