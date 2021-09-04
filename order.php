<?php include "header.php";?>

    <div class="bgc my-account-header page-title normal-title">


        <div class="  page-title-inner flex-row  container">
            <div class="flex-col flex-grow medium-text-center">

                <h3 class="uppercase mb-0">MY ACCOUNT</h3>
                <small class="uppercase">ORDERS</small>
            </div><!-- .flex-left -->
        </div><!-- flex-row -->
    </div>




    <!-- SIDBAR NAV -->
    <div class="wrapper">
        <!-- Sidebar  -->
        
        <?php include "SidebarDash1.php";?>


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

            <div class="container text">
                <button type="button" class="btn btn-info btn-lg"><a href="">
                  
                </a> BROWSE PRODUCTS</button>
              <span class="ml-4">  No order has been order yet.</span>

            </div>
          
            
<br>    
            <p class="text text-center">Dont have an account?&nbsp;
                <a href="">Sign Up</a></p>
        </div>
    </div>

    <!-- SIDBAR NAV -->

    <br>

   

    <?php include "footer.php";?>