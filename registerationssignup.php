<?php include "header.php";?>


    <!-- FORM -->
    <div class="container ">
        <div class="col-md-5  mt-4  formouter">
            <form action="">

                <div class="form-group ">
                    <span class=" form-control-feedback"></span>
                    <input type="text" class="form-control border-dark radiusb " placeholder="*Username">
                </div>
                <div class="form-group ">
                    <span class=" form-control-feedback"></span>
                    <input type="text" class="form-control border-dark radiusb " placeholder="*Email">
                </div>
                <div class="form-group ">
                    <span class=" form-control-feedback"></span>
                    <input type="text" class="form-control border-dark radiusb " placeholder="*First Name">
                </div>
                <div class="form-group ">
                    <span class=" form-control-feedback"></span>
                    <input type="text" class="form-control border-dark radiusb " placeholder="*Last Name">
                </div>

                <div class="form-group ">
                    <span class=" form-control-feedback"></span>
                    <input type="password" class="form-control radiusb border-dark" placeholder="*Password">
                </div>
                <div class="form-group ">
                    <span class=" form-control-feedback"></span>
                    <input type="password" class="form-control radiusb border-dark" placeholder="*Confirm Password">
                </div>
                <div class="form-group col-md-12">
                    <label for="inputcountry"><b>*Country</b> </label>
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



                <br>
                <span class=" ml-3"><strong>Avator</strong></span>
                <br>

                <img src="img/default_avatar.jpg" width="150px" height="150px" class="img" alt="">
                <br>
                <br>
                <input type="file" id="input-file" name="input-file" accept="image/*" onchange={handleChange()}
                    hidden />

                <label class="btn-upload" for="input-file" role="button">
                    Upload Photo
                </label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <a href="">Accept our Terms&Conditions</a>

                </div>

                <div class="preview-box"></div>

                <br>
                <br>

         

            </form>
            
            <h5>Add Your Attachment</h5>
                

            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
            <div class="file-upload">


                <div class="image-upload-wrap">
                    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                    <div class="drag-text">
                        <br>
                        <h3>UPLOAD</h3>
                    </div>
                </div>
                <div class="file-upload-content">
                    <img class="file-upload-image" src="#" alt="your image" />
                    <div class="image-title-wrap">

                    </div>
                </div>
            </div>

            <h6>Funds Transfer Details:-</h6>
            Title of Account: SUMAIR IQBAL <br>
            Bank Account (IBAN) PK54SCBL000000148437970"
            <br>
            <br>
            Bank Account 01484379701 <br>
            Bank: Standard Chartered
            <br>
            <br>

            EasyPaisa Account: 03128746332
            <br>

            <br>
            <p>Online transfer & Bank Deposits acceptable, after that attached the deposit slip or snapshot of
                electronic transfer for confirmation.</p>
<br>
            <button class="btn btn-primary btn btn-block btn-lg bton" type="button"><b>Register</b> </button>
        </div>
    </div>

<br>
    <!-- FORM END -->





    <?php include "footer.php";?>