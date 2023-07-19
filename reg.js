// Select all input elements for varification
const fname = document.getElementById("firstname");
const lname = document.getElementById("lastname");
const email = document.getElementById("email");
const pass = document.getElementById("pass");
const cpass = document.getElementById("cpass");
const phoneNumber = document.getElementById("phoneNumber");
const gender = document.registration;



// function for form varification
function formValidation() {
  
  // checking name length
  if (fname.value.length < 2 || fname.value.length > 20) {
    alert("Name length should be more than 2 and less than 21");
    fname.focus();
    return false;
  }
  //checking last name length
  if (lname.value.length < 2 || lname.value.length > 20) {
    alert("Name length should be more than 2 and less than 21");
    lname.focus();
    return false;
  }
  // checking email
  if (email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
    alert("Please enter a valid email!");
    email.focus();
    return false;
  }
  // checking password
  if (!pass.value.match(/^.{5,15}$/)) {
    alert("Password length must be between 5-15 characters!");
    password.focus();
    return false;
  }
    // confirm password
    if (!pass.value.match(/^.{5,15}$/)) {
        alert("Must be the same password");
        password.focus();
        return false;
      }
    
  // checking phone number
  if (!phoneNumber.value.match(/^[1-9][0-9]{9}$/)) {
    alert("Phone number must be 10 characters long number and first digit can't be 0!");
    phoneNumber.focus();
    return false;
  }
  // checking gender
  if (gender.gender.value === "") {
    alert("Please select your gender!");
    return false;
  }
  return true;
}