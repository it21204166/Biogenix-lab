<?php include('include/header.php'); ?>
<link rel="stylesheet" type="text/css" href="contact.css">
<!-- <script src="payment.js"></script> -->


        <div class="container">

         <h1 class="title">Feedback Form</h1>
         <div>
            <form action="" method="">
                 <div class="inputBox">
                     <span>Email :</span>
                     <input type="email" name="email" placeholder="example@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required>
                  </div>

                   <div class="inputBox">
                     <span>Subject (Optional):</span>
                     <input type="text" name="subject" placeholder="Subject" >
                  </div>

                   <div class="inputBox">
                     <span>Message :</span><br>
                     <textarea name="message" rows="10" cols="60" placeholder="Enter your feedback here" required></textarea>
                  </div>
               

               <input type="submit" value="Submit" id="submitBtn">
         </form>
         </div>
         
        </div>
<?php include('include/footer.php'); ?>
