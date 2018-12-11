p
<div class="container shift-down">
    <?php require("side_bar.php"); ?>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Create sub admin</h2>
          
            <form method="post" action="" class="form-group">
                 
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="full_name" class="form-control" placeholder="First Name" required>
                </div>
                  <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <select class="form-control" name="role">
                    <option selected>Select Role</option>
                    <option value="super admin">Super Admin</option>
                    <option value="sub admin">Sub Admin</option>
                </select>
                </div>
                 <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success">submit</button>
                </div>
               
            </form>
        </div>
    </div>
</div>