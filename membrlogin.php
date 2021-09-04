<?php include "header.php";?>

    <!-- FORM -->
    <div class="container ">
        <div class="col-md-5 mx-auto mt-4  formouter">
        <form>
            <div class="form-group has-search">
                <span class="fa fa-user form-control-feedback"></span>
                <input type="text" class="form-control border-dark radiusb " placeholder="User Name">
              </div>

              <div class="form-group has-search">
                <span class="fa fa-unlock-alt form-control-feedback"></span>
                <input type="password" class="form-control radiusb border-dark" placeholder="Password">
              </div>
            <div class="form-group">
                <label for="remember-me" class="text-info float-left"><span>Remember me</span> <span><input id="remember-me"
                            name="remember-me" type="checkbox"></span></label>
                            <div id="register-link" class="float-right">
                                <a href="lostpaswd.php" class="text-info "> Lost your Password?</a>
                             
                            </div>
                            
                
            </div>
           

            <button type="button" class="btn btn-primary btn-lg btn-block">LOG IN</button> <br>
            <h6 class="text-center">Dont have an account? <a href="subscriptionpage.php">Sign Up </a> </h6>
        </form>
    </div>
    </div>
    <!-- FORM END -->







    <?php include "footer.php";?>