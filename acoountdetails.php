<?php include "header.php"; ?>


<div class="bgc my-account-header page-title normal-title">
  <div class="  page-title-inner flex-row  container">
    <div class="flex-col flex-grow medium-text-center">

      <h3 class="uppercase mb-0">MY ACCOUNT</h3>
      <small class="uppercase">ACCOUNT DETAILS</small>
    </div>
  </div>
</div>





<div class="wrapper">

  <!-- Sidebar START  -->

  <?php include "SidebarDash1.php"; ?>
  
  <!-- Sidebar END -->


  <!-- Page Content  -->

  <div id="content">

    <!-- TOGGLE BUTTON START  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">

        <button type="button" id="sidebarCollapse1" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span></span>
        </button>

      </div>
    </nav>

    <!-- TOGGLE BUTTON END -->


    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">First name</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Last name</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Display name</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="">
        <em>This will be how your name will be displayed in the account section and in reviews</em>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Email address</label>
        <input type="email" class="form-control" id="inputAddress2" placeholder="">
      </div>
      <h4>PASSWORD CHANGE</h4>
      <br>
      <div class="form-group">
        <label for="inputAddress2">Current password (leave blank to leave unchanged)</label>
        <input type="password" class="form-control" id="inputAddress2" placeholder="">
      </div>
      <div class="form-group">
        <label for="inputAddress2">New password (leave blank to leave unchanged)</label>
        <input type="password" class="form-control" id="inputAddress2" placeholder="">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Confirm new password </label>
        <input type="password" class="form-control" id="inputAddress2" placeholder="">
      </div>


      <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
    </form>


    <br>
    <p class="text text-center">Dont have an account?&nbsp;
      <a href="">Sign Up</a>
    </p>
  </div>
</div>

<br>


<?php include "footer.php"; ?>