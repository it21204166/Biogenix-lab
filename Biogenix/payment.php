

<?php include('include/header.php'); ?>

<link rel="stylesheet" type="text/css" href="payment.css">
<script src="payment.js"></script>



        <div class="container">
           <form action="">
               <div class="row">
                   <div class="col">
                       <h3 class="title"><u>Appointment</u></h3>
                       <div class="inputBox">
                           <span>First Name :</span>
                           <input type="text" name="first name" placeholder="Sahan" required>
                       </div>

                       <div class="inputBox">
                        <span>Last Name :</span>
                        <input type="text" name="last name" placeholder="Mudalige" required>
                       </div>

                       <div class="inputBox">
                        <span>Mobile Number :</span>
                        <input type="phone" name="mobile number" placeholder="07XXXXXXXX" pattern="[0-9]{10}" required>
                       </div>

                       <div class="inputBox">
                           <span>Email :</span>
                           <input type="email" name="email" placeholder="example@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required>
                       </div>

                       <div class="inputBox">
                        <span>Address :</span><br>
                        <textarea name="address" cols="50" rows="8" placeholder="18/A ,hakmana road ,matara" required></textarea>
                    </div>
                    
                    <div class="inputBox">
                        <span>Service Type :</span>
                        <select name="type" id="report-type">
                        <option value="Select type">Service Type</option>
                        <option value="Blood report">Blood report</option>
                        <option value="Urine report">Urine report</option>
                        <option value="PCR report">PCR report</option>
                        <option value="Antigen report">Antigen report</option>
                        <option value="Diabetes report">Diabetes report</option>
                    </select>
                    </div>

                    <div class="inputBox">
                        <span>Date :</span>
                        <input type="date" name="day"  required>
                    </div>

                    <div class="inputBox">
                        <span>Select Time :</span>
                        <select name="time" id="time">
                        <option value="Select time">Time</option>
                        <option value="7.00a.m-8.00a.m">7.00a.m-8.00a.m</option>
                        <option value="8.00a.m-9.00a.m">8.00a.m-9.00a.m</option>
                        <option value="9.00a.m-10.00a.m">9.00a.m-10.00a.m</option>
                        <option value="10.00a.m-11.00a.m">10.00a.m-11.00a.m</option>
                        <option value="11.00a.m-12.00p.m">11.00a.m-12.00p.m</option>
                    </select>
                    </div>
                       </div>
                       <div class="payment">
                           <h3><u>Payment</u></h3>
                           <div class="first-row">
                               <div class="owner">
                                   <h5>Card Holder Name :</h5>
                                   <div class="input-field">
                                       <input type="text" placeholder="Sahan Mudalige">
                                   </div>
                               </div>

                               <div class="CVV">
                                <h5>CVV :</h5>
                                <div class="input-field">
                                    <input type="password" placeholder="111" pattern="[0-9]{3}" required>
                                </div>
                            </div>
                            </div>
                            <div class="second-row">
                                <div class="card-number">
                                    <h5>Card Number :</h5>
                                    <div class="input-field">
                                        <input type="text" placeholder="1234-5678-8765-4321">
                                    </div>
                                </div>
                            </div>

                            <div class="third-row">
                                <div class="card-number">
                                    <h5>Card Expire Date :</h5>
                                    <div class="selection">
                                        <div class="date">
                                        <select name="months" id="months">
                                           <option value="Mar">Mar</option>
                                           <option value="Apr">Apr</option>
                                           <option value="May">May</option>
                                           <option value="Jun">Jun</option> 
                                           <option value="Jul">Jul</option>
                                           <option value="Aug">Aug</option>
                                           <option value="Sep">Sep</option>
                                           <option value="Oct">Oct</option>
                                           <option value="Nov">Nov</option>
                                           <option value="Dec">Dec</option>
                                        </select>
                                        <select name="years" id="years">
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                        </select>
                                        </div>

                                        <div class="cards">
                                            <img src="images\visa.png" alt="visa card">
                                            <img src="images\mc.png" alt="master card">
                                        </div>
                                    </div>
                                    
                                </div>
                                    <br>
                                    <input type="checkbox" class="inputStyle" id="checkBox" onclick="enableButton()">Accept Privacy policy and Terms <br><br>

                                
                                <input type="submit" value="Submit" id="submitBtn" disabled>
                               
                            </div>
                            

                       </div>

                   </div>
               </div>
           </form>
        </div>

        
       <?php include('include/footer.php'); ?>

                
        
       
        