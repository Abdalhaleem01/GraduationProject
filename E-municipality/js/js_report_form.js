
  document.getElementById('complaintForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Save the form inputs here (you can modify this part to suit your needs)
  /*  var subject = document.getElementById('subject').value;
   
    var passportNumber = document.getElementById('passportNumber').value;
    var nationalId = document.getElementById('nationalId').value;
   
    var mobileNumber = document.getElementById('mobileNumber').value;
    var email = document.getElementById('email').value;
    var defendant = document.getElementById('defendant').value;
    var region = document.getElementById('region').value;
    var neighborhood = document.getElementById('neighborhood').value;
    var street = document.getElementById('street').value;
    var nearestSite = document.getElementById('nearestSite').value;
    var building = document.getElementById('building').value;
    var complaintDate = document.getElementById('complaintDate').value;
    var complaintType = document.getElementById('complaintType').value;
    var complaintDetails = document.getElementById('complaintDetails').value;

    // Save the inputs or perform any necessary actions here

    // Redirect to the home page
   */ window.location.href = "report_form_recevied.php";
  });
