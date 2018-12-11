<div class="container shift-down">
    <?php require("side_bar.php"); ?>

    <div class="row justify-content-center">
        <div class="col-md-8">
           <h3>Add Offense Committed to Offender</h3>
           <hr>
           <form method="post" action="">
                <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
               <select name="offense" class="form-control">
                   <option selected>Offense</option>
                   <?php foreach($offenses as $offense){ ?>


                    <option value="<?php echo $offense->of_id; ?>"><?php echo $offense->type; ?></option>
                   <?php }?>
               </select>
           </div>
                    </div>

                    <div class="col-md-3">
                        <button class="btn btn-success" type="submit">Add</button>
                    </div>
                    
                </div>
            </div>
           </form>
        </div>
    </div>
</div>