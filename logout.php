<?php include "header.php"; ?>


<div class="bgc my-account-header page-title normal-title
	">


    <div class="  page-title-inner flex-row  container">
        <div class="flex-col flex-grow medium-text-center">

            <h3 class="uppercase mb-0">MY ACCOUNT</h3>
            <small class="uppercase">LOGOUT</small>
        </div><!-- .flex-left -->
    </div><!-- flex-row -->
</div>




<!-- SIDBAR NAV -->
<div class="wrapper">
    <!-- Sidebar  -->

    <?php include "SidebarDash1.php"; ?>

    <!-- Page Content  -->

    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse1" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span></span>
                </button>



            </div>
        </nav>
        <div class="message-container container text-success medium-text-center">
            <i class="fa-2x fa fa-check"></i>
            Are you sure you want to log out?
            <a class="text-dark" href="">Confirm and log out
            </a>
        </div>
        <br>


        <div class="container text">
            <p class="text">Hello <strong>safdar khan</strong> (not <strong>safdar khan</strong>? <a href="https://www.stockiest91.com/my-account/customer-logout/?_wpnonce=201a26a1ab"><b>Log out</b> </a>)
            </p>
            <p class="text">From your account dashboard you can view your <a href="https://www.stockiest91.com/my-account/orders/">recent orders</a>, <b>manage your</b> <a href="https://www.stockiest91.com/my-account/edit-address/"><b> shipping and billing addresses </b></a>,
                and <a href="https://www.stockiest91.com/my-account/edit-account/"><b> edit your password and account
                        details </b></a>.</p>





        </div>

        <div class="row">
            <div class="col-md-4 ">

                <a class="dash" href="">Dashboard</a>


            </div>
            <div class="col-md-4 ">

                <a class="dash" href="">Orders</a>


            </div>
            <div class="col-md-4">
                <a class="dash" href="">Downloads</a>

            </div>
            <div class="col-md-4">
                <a class="dash" href="">Addresses</a>

            </div>
            <div class="col-md-4">
                <a class="dash" href="">Account Details</a>

            </div>
        </div>
        <br>
        <p class="text text-center">Dont have an account?&nbsp;
            <a href="">Sign Up</a>
        </p>
    </div>
</div>

<!-- SIDBAR NAV -->

<br>




<?php include "footer.php"; ?>