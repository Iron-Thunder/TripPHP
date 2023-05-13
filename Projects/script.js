
const nameInputs = document.querySelectorAll(".required");

nameInputs.forEach(function(input) {
  input.addEventListener("input", test);
});

function test() {
	var name = document.getElementById('name').value.trim();
	var age = document.getElementById('age').value.trim();
	var gender = document.getElementById('gender').value.trim();
	var phone = document.getElementById('phone').value.trim();
	var email = document.getElementById('email').value.trim();
	var aadhar = document.getElementById('aadhar').value.trim();
	if(name!=="" && age!=="" && gender!=="" && phone!=="" && email!=="" && aadhar!==""){
		document.getElementById('submit').removeAttribute('disabled');
	}
	else{
		document.getElementById('submit').setAttribute('disabled','disabled');
	}
}



const errorDiv = document.createElement('div');
	errorDiv.className = 'error';
	form.appendChild(errorDiv);
 
form.addEventListener('submit', (e) => {
	const name = document.getElementById('name').value.trim();
	const age = document.getElementById('age').value.trim();
	const email = document.getElementById('email').value.trim();
	const phone = document.getElementById('gender').value.trim();
	const aadhar = document.getElementById('aadhar').value.trim();

	if(!name || !age || !email || !phone || !aadhar){
		errorDiv.textContent = "All fields are required";
	}
	else{

		form.submit();

	}
});

document.getElementById('btn').onclick()





