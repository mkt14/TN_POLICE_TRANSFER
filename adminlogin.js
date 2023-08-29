function validate() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (username === "police" && password === "police123") {
    // Redirect to registerpage2.html
    window.location.href = "homePage.html";
  } else {
    alert("Invalid username or password");
  }
}
