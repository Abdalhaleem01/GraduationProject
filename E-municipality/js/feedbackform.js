document.getElementById("feedback-form-content").addEventListener("submit", function(event) {
  event.preventDefault();
  
  // Retrieve form data
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var rating1 = document.getElementById("rating1").value;
  var rating2 = document.getElementById("rating2").value;
  var message = document.getElementById("message").value;
  
  // Perform any necessary validation or processing
  
  // Display success message or handle form submission as desired
  
  // Reset form fields
  document.getElementById("feedback-form-content").reset();

  window.location.href = "FeedbackRES.php";
});
