
<?php
require 'header.php';
?>
<style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');



body {
  min-height: 100vh;
  background-image: url('assets/images/printer-bg-5.avif');
  background-size: cover;
  background-position: center;
  position: relative;
}

body::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(0,0,0,0.8);
}

section {
  position: relative;
  z-index: 3;
  padding-top: 50px;
  padding-bottom: 50px;
}

.container {
  max-width: 1080px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 20px;
  padding-right: 20px;
}

.section-header {
  margin-bottom: 50px;
  text-align: center;
}

.section-header h2 {
  color: #FFF;
  font-weight: bold;
  font-size: 3em;
  margin-bottom: 20px;
}

.section-header p {
  color: #FFF;
}

.row  {
  display: flex;
  flwx-wrap: wrap;
  align-items: center;
  justify-content: center;
}

.contact-info {
  width: 50%;
}

.contact-form {
  background-color: #fff;
  padding: 40px;
  width: 45%;
  padding-bottom: 20px;
  padding-top: 20px;
}

.contact-form h2 {
  font-weight: bold;
  font-size: 2em;
  margin-bottom: 10px;
  color: #333;
}

.contact-form .input-box {
  position: relative;
  width: 100%;
  margin-top: 10px;
}

.contact-form .input-box input,
.contact-form .input-box textarea{
  width: 100%;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  border: none;
  border-bottom: 2px solid #333;
  outline: none;
  resize: none;
}

.contact-form .input-box span {
  position: absolute;
  left: 0;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  pointer-events: none;
  transition: 0.5s;
  color: #666;
  transform: translateY(-20px);
}



.contact-form .input-box select,
.contact-form .input-box textarea{
  width: 100%;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  border: none;
  border-bottom: 2px solid #333;
  outline: none;
  resize: none;
}




.contact-form .input-box input:focus ~ span,
.contact-form .input-box textarea:focus ~ span{
  color: #e91e63;
  font-size: 12px;
  transform: translateY(-20px);
}

.contact-form .input-box input[type="submit"]
{
  width: 100%;
  background: #00bcd4;
  color: #FFF;
  border: none;
  cursor: pointer;
  padding: 10px;
  font-size: 18px;
  border: 1px solid #00bcd4;
  transition: 0.5s;
}

.contact-form .input-box input[type="submit"]:hover
{
  background: #FFF;
  color: #00bcd4;
}


#conatact_loader{
  position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;
    display: none;
    z-index: 99999999999999;
}

@media (max-width: 991px) {
  section {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  
  .row {
    flex-direction: column;
  }
  
  .contact-info {
    margin-bottom: 40px;
    width: 100%;
  }
  
  .contact-form {
    width: 100%;
  }
}


</style>
<div class="wrapper row3" style="
    margin-top: 106px;
">
  <main class="hoc container-fluid clear"> 
     <div class="content"> 
   
 
  <section>
    
    <div class="section-header">
      <div class="container">
        <h2>Send Email</h2>
      </div>
    </div>
    
    <div id="conatact_loader">
          <img src="assets/images/loading.gif" alt="">
    </div>

    <div class="container">
      <div class="row"> 
        <div class="contact-form">
          <form id="contact-form">
            <div class="input-box">
              <input type="text" name="tuser_name" required="true" name="" required>
              <span>Full Name</span>
            </div>
            
            <div class="input-box">
              <input type="email" name="tuser_email" required="true" name="" required>
              <span>Email</span>
            </div>

            <div class="input-box">
              <input type="text" name="tuser_printer_brand" required="true" name="" required>
              <span>Printer Brand</span>
            </div>

            <div class="input-box">
              <input type="text" name="tuser_printer_modal" required="true" name="" required>
              <span>Printer Modal</span>
            </div>

            <div class="input-box">
              <input type="text" name="tuser_payment" required="true" name="" required>
              <span>Amount</span>
            </div>

          
            <div class="input-box">
              <input type="submit" value="Send" name="contactusbtn" id="contactusbtn" class="contact_us_btn">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </section>
 


     
<?php
require 'footer.php';
?>


<script>
    
    $("#contact-form").submit(function(e){
     e.preventDefault();
     var formData = $(this).serialize();
     $('#contactusbtn').hide();
    //  $('.contact_us_btn').text('Please Wait...');
         $.ajax({
         type: "POST",
         url: "troubleshooting_email.php", 
         data: formData,
         beforeSend:function(){
          $('#conatact_loader').show();
          $('.contact_us_btn').text('Please Wait...');
         },
         success: function(response) {
          console.log('response',response);
          $('#contact_loader').css('display', 'none');
                    alert("Your message has been sent. We appreciate your inquiry. Our team will call you shortly.");
                    // window.location = 'user-send-email.php';
         },
         error: function(xhr, status, error) {
             console.error("Error sending reviews: " + error);
         }
     });
    })
    
      </script>
      