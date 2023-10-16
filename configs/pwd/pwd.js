function showDisabilityDropdown() {
    var pwdDropdown = document.getElementById("pwd");
    var disabilityDropdown = document.getElementById("disabilityDropdown");

    if (pwdDropdown.value === "Yes") {
      disabilityDropdown.style.display = "block";
    } else {
      disabilityDropdown.style.display = "none";
    }
  }