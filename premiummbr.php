<?php include "header.php";?>

    <!-- FORM -->
    <div class="container">
        <div class="col-md-6 mx-auto mt-4">
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1"><b> Username or Email  </b></label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
         
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1"><b> Password </b></label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>
        </div>
        <div class="row">

            <div class="col-md-6">
                <button type="button" class="btn btn-primary  btn-block btn-lg">Login</button>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-secondary  btn-block btn-lg"><a href="register.php" class=" text-white "> Register</a></button>
            </div>
            <!-- <div id="register-link" class="float-right">
             <button type="button" class="btn btn-secondary btn-block btn-lg">  <a href="afterpremreg.php" class="text-info "> Register</a></button> 
             
            </div> -->
            
            <!-- <div class="col-md-6">

                <button type="button" class="btn btn-secondary btn-block btn-lg" <a href="afterpremreg.php">Register</a> </button> <br>
            </div> -->
        </div>
        <div class="text-center">

            <span class="text-center"><a href=""  class="mx-4"> Forgot your password</a></span>
        </div>
      </form>
    </div>
    </div>
    <!-- FORM END -->





   
    <?php include "footer.php";?>