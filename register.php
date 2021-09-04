<?php include "header.php";?>

    <!-- FORM -->
    <div class="container">
        <div class="col-md-6 mx-auto mt-4">
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1"><b> Username  </b></label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
         
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1"><b> Firstname </b></label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"><b> Lastname </b></label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><b> E-mail Address </b></label>
            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><b> Password </b></label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><b> Confirm Password </b></label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
          </div>
        <div class="row">

            <div class="col-md-6">
                <button type="button" class="btn btn-primary  btn-block btn-lg">Register</button>
            </div>
            <div class="col-md-6">

                <button type="button" class="btn btn-secondary btn-block btn-lg"><a href="afterpremreg.php" class="text-white"> Premium Registration</a></button> <br>
            </div>
        </div>
       
      </form>
    </div>
    </div>
    <!-- FORM END -->


   


    <?php include "footer.php";?>