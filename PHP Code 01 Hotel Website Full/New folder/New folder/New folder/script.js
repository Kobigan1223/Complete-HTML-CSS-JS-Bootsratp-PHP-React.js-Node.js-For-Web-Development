function opensignin()
{

	var model1 = document.getElementById('id01');
	model1.style.display = "block";
	

}

function closesignin()
{

	var model1 = document.getElementById('id01');
	model1.style.display = "none";
	

}

function opensignup()
{

	var model2 = document.getElementById('id02');
	model2.style.display = "block";
	

}

function closesignup()
{

	var model2 = document.getElementById('id02');
	model2.style.display = "none";
	

}

function closeANDopen()
{

	var model3 = document.getElementById('id02');
	model3.style.display = "none";
	
	

	var model4 = document.getElementById('id01');
	model4.style.display = "block";


}

function closequickRES()
{

	var model5 = document.getElementById('quickRESI');
	model5.style.display = "none";
	

}

function showHOMEresort1()
{

	var model6 = document.getElementById('HOMEresortid1');
	model6.style.display = "block";



}

function closeHOMEresort1()
{

	var model7 = document.getElementById('HOMEresortid1');
	model7.style.display = "none";



}

function validatesignForm() {
  var model8 = document.forms["signupform"]["firstname"].value;
  if (x == " " || x == "") {
    alert("please filled out this feild");
    return false;
  }
   var model9 = document.forms["signupform"]["lastname"].value;
  if (x == " ") {
    alert("please filled out this feild");
    return false;
  }
   var model10 = document.forms["signupform"]["mobilenumber"].value;
  if (x == " ") {
    alert("please filled out this feild");
    return false;
  }
   var model11 = document.forms["signupform"]["firstname"].value;
  if (x == " ") {
    alert("please filled out this feild");
    return false;
  }
}

function validateloginForm() {
  var model12 = document.forms["signupform"]["firstname"].value;
  if (x == " ") {
    alert("please filled out this feild");
    return false;
  }
   var model13 = document.forms["signupform"]["lastname"].value;
  if (x == " ") {
    alert("please filled out this feild");
    return false;
  }
   var model14 = document.forms["signupform"]["mobilenumber"].value;
  if (x == " ") {
    alert("please filled out this feild");
    return false;
  }
   var model15 = document.forms["signupform"]["firstname"].value;
  if (x == " ") {
    alert("please filled out this feild");
    return false;
  }
}

function newmassage(){


	alert("First name must input");


}


function newmassage2(){


	alert("wrong input");


}

function newmassage3(){


	alert("email must be input");


}




