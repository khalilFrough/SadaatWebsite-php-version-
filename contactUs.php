<!DOCTYPE html>
<html lang="en">
<?php
include dirname(__FILE__).'/includes/externalJavaScript.php';
include dirname(__FILE__).'/includes/tools.php';
printHead('Contact Us')?>
<body>
 <!-- including the head  -->
 <?php include dirname(__FILE__).'/includes/head.php';?> 
 <!-- ******************** the main contain starts from here ************ -->

 <div class="container">
   <div class="row">
     <div class="col-lg-6">
       <div class="form-content">
       <form>
          <div class="form-group">
            <input type="text" class="danger">
          </div>
          <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" class="form-control" id="firstName" placeholder="First Name">
          </div>
          <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" class="form-control" id="lastName" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label for="contactNumber">Contact Number:</label>
            <input type="text" class="form-control" id="contactNumber" placeholder="Contact Number">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" cols="45" rows="8"></textarea>
          </div>
  
          <button type="submit" class="btn">Submit</button>
      </form>
       </div>
     </div>
     <div class="col-lg-6">
        <div class="map-content">
        <div class="title"><h1 class="heading">Our Location</h1></div>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d402565.8637873003!2d144.32139118423234!3d-37.97606020334869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sau!4v1551786581252" width="800" height="358" frameborder="0" style="border:0" allowfullscreen></iframe>
          <h2 class="sub-heading">Other Contacts</h2>
          Name: Saadat  <br>
          phone: 0450 442424 <br>
          <a href="mailto:someone@example.com">S&Gtiling@info.com</a>
        </div>
     </div>
   </div>

 </div>
    
<!-- footer starts from here -->
<?php include dirname(__FILE__).'/includes/footer.php';?>
  </body>
</html>