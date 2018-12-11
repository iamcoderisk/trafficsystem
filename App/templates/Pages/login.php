<div class="container shift-down">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <?php 

             foreach($errors as $error){
                echo $error."<br>";
            }

            ?>
            <form method="post" action="" class="form-group">
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success">Login</button>
                </div>
               
            </form>
        </div>
    </div>
</div>