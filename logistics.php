<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="We Potrays Your Imaginaton">
      <meta name="keywords" content="Inaudita, Inaudita,Let's The Emotion Speaks,We are the Storytellers,Lights, Camera, Action">
      <meta name="author" content="Pramod Jana">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link href="style.css" rel="stylesheet">

      <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">


      <!--Animate Css-->
      <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
       <!--Wow JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>




       <style>
      body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

      </style>
      <script>
      function validateEmail(emailField){
              var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

              if (reg.test(emailField.value) == false)
              {
                  alert('Invalid Email Address');
                  return false;
              }

              return true;

      }

      </script>





    <title>Inaudita: We portray your imaginations</title>
  </head>
  <body>
      <!--Wow JS Activation-->
       <script>
              new WOW().init();
              </script>

    <?php
    include 'header.php';
    ?>





<div class="container contact-form" style="margin-top:131px">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="secure_email_code.php">
                <h3>Drop Us a Message</h3>
                <p>Note: Maximum Amount is 5 ton</p>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" onblur="validateEmail(this);" placeholder="Your Email *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number" placeholder="Mobile number" required/>
                        </div>
                        <p>From (pickup address)</p>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <br>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Address *" value="" required/>
                        </div>
                        <p>To(Destination address)</p>
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Address *" value="" required/>
                        </div>


                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Type Of Prodect" value="" required/>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" required/>
                        </div>
                    </div>
                </div>





            </form>
</div>



















































    <?php
    include 'footer.php';
    ?>



      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
