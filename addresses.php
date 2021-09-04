<?php include "header.php"; ?>

<div class="bgc my-account-header page-title normal-title">


    <div class="  page-title-inner flex-row  container">
        <div class="flex-col flex-grow medium-text-center">

            <h3 class="uppercase mb-0">MY ACCOUNT</h3>
            <small class="uppercase">ADDRESS</small>
        </div>
    </div>
</div>





<div class="wrapper">
    
    <!-- Sidebar START  -->

    <?php include "SidebarDash1.php"; ?>

    <!-- Sidebar END  -->



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


        <p class="text"> The following addresses will be used on the checkout page by default.</p>
        <br>
        <div class="row">
            <div class="col-md-4">
                <h3>Billing address</h3>
                <a href="https://www.stockiest91.com/my-account/edit-address/billing/" class="edit">Add</a>
                <address>
                    You have not set up this type of address yet. </address>

            </div>

            <div class="col-md-4">
                <h3>Shipping address</h3>
                <a href="https://www.stockiest91.com/my-account/edit-address/shipping/" class="edit">Add</a>
                <address>
                    You have not set up this type of address yet. </address>

            </div>
        </div>


        <br>
        <p class="text text-center">Dont have an account?&nbsp;
            <a href="">Sign Up</a>
        </p>
    </div>
</div>



<br>


<?php include "footer.php"; ?>