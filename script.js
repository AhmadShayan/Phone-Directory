function showConfirmation() {
    // Display the confirmation message
    var confirmation = document.getElementById("confirmation");
    confirmation.style.display = "block";
  
    // Hide the confirmation message after 3 seconds
    setTimeout(function() {
      confirmation.style.display = "none";
    }, 1000);
  }