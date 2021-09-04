<?php include "header.php";?>

    <!-- FORM -->
    <div class="container">
        <div class="col-md-6 mx-auto mt-4">
    <form>
      
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

          <label for="exampleInputPassword1"><b> Gender</b></label>
          <div class="form-check">
            <label class="form-check-label">
                  <input type="radio" class="form-check-input " name="optradio">  Male
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optradio"> Female
            </label>
          </div>
          <br>
          <div class="form-group col-md-8">
            <label for="inputcountry"><b>Country</b> </label>
            <select id="inputcountry" class="form-control">
              <option selected>Choose a Country...</option>
              <option>Pakistan</option>
              <option>Afghanistan</option>
              <option>Canada</option>
              <option>America</option>
              <option>India</option>
              <option>China</option>
              <option>Uk</option>
              <option>UAE</option>
              <option>Saudia</option>
             
            </select>
          </div>
         
          <div class="form-group">
            <label for="exampleInputPassword1"><b> Password </b></label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><b> Confirm Password </b></label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
            <span>[simpay id ="599"]</span>
          </div>
          <br>
        <div class="row">

            <div class="col-md-6">
                <button type="button" class="btn btn-primary  btn-block btn-lg">Register</button>
            </div>
            <div class="col-md-6">

                <button type="button" class="btn btn-secondary btn-block btn-lg"> Login</button> <br>
            </div>
        </div>
       
      </form>
    </div>
    </div>
    <!-- FORM END -->


   

    <?php include "footer.php";?>