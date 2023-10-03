<?php include('include/header.php'); ?>

        <section class="section">
          <div class="slider">
            <div class="slide">
              <input type="radio" name="radio-btn" id="radio1">
              <input type="radio" name="radio-btn" id="radio2">
              <input type="radio" name="radio-btn" id="radio3">
              <input type="radio" name="radio-btn" id="radio4">

              <div class="st first">
                <img src="images/Blood-test.jpg" alt="blood_test" >
              </div>

              <div class="st">
                <img src="images/Urine-test.jpg" alt="urine_test">
                <h1>Blood Report</h1>
              </div>

              <div class="st">
                <img src="images/PCR-test.jpg" alt="PCR_tes">
              </div>

              <div class="st">
                <img src="images/diabetes-test.jpg" alt="diabetes_tes">
              </div>

              <div class="nav-auto">
                <div class="a-bl"></div>
                <div class="a-b2"></div>
                <div class="a-b3"></div>
                <div class="a-b4"></div>
              </div>

            </div>
            <div class="nav-m">
             <label for="radio1" class="m-btn"></label>
             <label for="radio2" class="m-btn"></label>
             <label for="radio3" class="m-btn"></label>
             <label for="radio4" class="m-btn"></label> 
            </div>
          </div>
        </section>
        <script type="text/javascript">
          var counter=1;
          setInterval(function() {
            document.getElementById?('radio'+ counter).checked=true:
            counter++;
            if(counter>4){
              counter=1;
            }
          },5000);
        </script>

       
      
        
        
        
       
        <div class="content">
          <br><br><br>
          
            
            <h1>Biogenix <span>Medi</span> Lab :</h1>
            <p class="par">Biogenix medi Lab Services is accredited with ISO 15189 
              and ISO 9001 standards.<br> We aspire to provide the best clinical outcomes in the
               medical industry by adopting <br>strong clinical standards and supported by passionate, well-trained, 
               committed and <br>motivated staff.<br> Our philosophy will be to have an uncompromising commitment to provide the 
               best <br>customer experience to all patients who patronize our hospitals and laboratories in <br>an ultra-clean
                and modern environment.</p>

                <div class="chooseUs">
                  <h3>Why<span> Choose</span> us?</h3>

                  <p class="US">
                            
                              •Service delivery through innovations<br>
                              •Provide end to end digital diagnostic solutions<br>
                              •Advanced Fully Automated Integrated Laboratory Information System & IT solutions and <br>Process automation-pre analytical, analytical, and post analytical<br>
                              •Provide predictive analytics on test results<br>
                              •Provide wide range of diagnostic specialties<br>
                              •Use of state of the art technology and processes.<br>
                              •Use of unmatched talent with best knowledge and skills<br>
                              •Integrated quality framework and Processes backed by stringent quality standards and <br>accreditations<br>
                            

                  </p>

                

                      <div class="container">
                        <div class="award">
                          <div class="line">
                            <div class="test"> <h5><br><br><br><br><br>Tests <br> 250+ </h5></div>
                            <div class="center"><br><h5><br><br><br><br>Collection <br> Centers <br> 400+</h5></div>
                            <div class="laboratry"><h5><br><br><br><br>Laboratories<br>27</h5></div>
                            <div class="medal"><h5><br><br><br><br><br>Awards & Memberships<br> 7</h5></div>
                            

                          </div>

                        </div>
                    
                        <br><br><br><br><br><br><br>
                    <?php include('include/footer.php'); ?>