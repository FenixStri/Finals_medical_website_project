<!DOCTYPE html>
<html>
<body> 


  
<div class="modal-header bg-theme-colored">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title text-white" id="myModalLabel">Appointment Form</h4>
</div>
<div class="p-40">
  <!-- Booking Form Starts -->
  <div class="container">
    <h1>Request an Appointment</h1>
  <form target="_blank" action="https://formsubmit.co/niclip44@ou.edu" method="POST">
    <div class="form-group">
      <div class="form-row">
        <div class="col">
          <input type="text" name="Fname" class="form-control" placeholder="First Name" required>
        </div>
        <div class="col">
          <input type="text" name="Lname" class="form-control" placeholder="Last Name" required>
        </div>
        <div class="col">
          <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        </div>
      </div>
    </div>
    <div class="form-group">
      <textarea placeholder="Your Message" class="form-control" name="message" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-lg btn-dark btn-block">Submit Request</button>
    <input type="hidden" name="_autoresponse" value="Thank you for submitting!">
  </form>
</div>

  <!-- Booking Form Validation-->
 
  <!-- Booking Form Ends -->
</div>
<div class="modal-footer">
</div>
<!-- Footer Scripts -->
<script>
  //reload date and time picker
  THEMEMASCOT.initialize.TM_datePicker();
</script>
    </body>
</html>
