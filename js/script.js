let accountType = document.getElementById("accountType");
let fee = document.getElementById("fee");
let limit = document.getElementById("limitt");
let interet = document.getElementById("interet");

function show(event) {
  let selectedValue = event.target.value;
  if (selectedValue === "saving") {
    interet.style.display = "block";
    fee.style.display = "none";
    limit.style.display = "none";
  } else if (selectedValue === "current") {
    limit.style.display = "block";
    fee.style.display = "none";
    interet.style.display = "none";
  } else if (selectedValue === "business") {
    fee.style.display = "block";
    interet.style.display = "none";
    limit.style.display = "none";
  } else {
    fee.style.display = "none";
    interet.style.display = "none";
    limit.style.display = "none";
  }
}
