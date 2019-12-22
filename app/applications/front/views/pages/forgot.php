<?php 
require ("includes/header.php");
?>

<style>

.login-container{
  background-color: rgba(0,0,0,0.2);
  padding:20px;
  border-radius: 10px

 }

</style>

        <section id="home" class="hero">
            <div class="hero-bg"></div>

            <!--container-->

            <div class="container">

                <div class="row hero-padd">
                    <div class="col-md-6 col-xs-12 col-sm-6">

                        <div class="hero-text login-container" >

                            <h3 style="color:#fff">Provide Email Address</h3>
                             <form method='post'>
                             <?php
                                if (isset($data['message'])) {
                                    ?>
                                    <div class="alert alert-<?php echo $data['type'] ?>">
                                    <strong></strong> <?php echo $data['message'] ?>.
                                    </div>
                                <?php } ?>
                            <p> 
                                  <table cellpadding="5">
                                    <tr>
                                        <td><input type='text' name='email' class="form-control" required placeholder="Email"></td>
                                    </tr>
                                  
                                  </table>
                            </p>

                            <button  type='submit' class="btn btn-white">submit</button>
                             </form>
                        </div>


                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-6">

                        <img src="<?= URLROOT?>/front/images/image1.svg" alt="">


                    </div>


                </div>
            </div>
            <!--container-->

        </section>


        <!--About-->


        <section id="about" class="padd-80">

            <!--container-->

            <div class="container">
                <div class="row">

                </div>

            </div>
            <!--container-->

        </section>


    </div>

    <!--End page cotnent-->

    <!--Footer-->

 <?php
    require("includes/footer.php");
 ?>
</body>


</html>