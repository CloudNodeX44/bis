function showBarangayDropdown() {
    var regVoterDropdown = document.getElementById("registeredVoter");
    var inBarangayDropdown = document.getElementById("inBarangayDropdown");

    if (regVoterDropdown.value === "Yes") {
      inBarangayDropdown.style.display = "block";
    } else {
      inBarangayDropdown.style.display = "none";
	  inWhatDropdown.style.display = "none";
    }
  }

function showInWhatDropdown() {
    var inBarangayDropdown2 = document.getElementById("inBarangay");
    var inWhatDropdown = document.getElementById("inWhatDropdown");

    if (inBarangayDropdown2.value === "Yes") {
		inWhatDropdown.style.display = "block";
    } else {
		inWhatDropdown.style.display = "none";
    }
  }