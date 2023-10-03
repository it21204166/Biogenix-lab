<?php require_once('connection.php'); ?>
<?php include('include/header.php'); ?>
<?php 

   

    $query = "SELECT * FROM user";

   $result = mysqli_query($connection, $query);

if ($result){

    

    while ($record = mysqli_fetch_assoc($result)){
         ?>
         <link rel="stylesheet" type="text/css" href="user-style.css">
             <center>
            <legend>
               <div class="profile">
                  <img src="images\pro-pic.png " alt="profilepic" class="profilepic" width="115px" ></image>
                  <div class="details">
                      <h5>Name : <?php echo $record['u_name']; ?></h5>
                  </div>

                  <div class="details">
                    <h5>Address : <?php echo $record['u_address']; ?></h5>
                </div>

                <div class="details">
                    <h5>E-mail : <?php echo $record['email']; ?></h5>
                </div>

                <div class="details">
                    <h5>Phone Number : <?php echo $record["phone_number"]; ?></h5>
                </div>

                <div class="details">
                    <h5>NIC Number : <?php echo $record["nic_number"]; ?></h5>
                </div>

                <div class="details">
                    <h5>Post : <?php echo $record['u_post']; ?></h5>
                </div>

                <div class="details_edit">
                    <a href="edit_profile.php">
                    <h6>Edit Profile</h6>
                    </a>
                </div>
                  
                  
               
               </div>
               </legend>
               </center>
         <?php

            


    }
   
   



}




        

?>
<?php include('include/footer.php'); ?>
<?php mysqli_close($connection); ?>

       

               

        

        
        
       

        
        
        
       
        
