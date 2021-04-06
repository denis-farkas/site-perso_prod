var formI = document.getElementById("formSignup");
var formL = document.getElementById("formLogin");
var email= document.getElementById('email');
var password = document.getElementById('password');
var rePassword = document.getElementById('rePassword');
var passwordCo = document.getElementById('passwordCo');
var emailCo= document.getElementById('emailCo');


function inscrire() {
    document.getElementById("start").className = "d-none";
    document.getElementById("signup").className= "visible";
  }

  function connect() {
    document.getElementById("start").className = "d-none";
    document.getElementById("connex").className= "visible";
  }

  function login() {
    document.getElementById("signup").className = "d-none";
    document.getElementById("connex").className= "visible";
  }

  document.addEventListener("DOMContentLoaded", function() {
    formI.addEventListener('submit', e => {
        e.preventDefault();
        
        checkInputsSignup();
    });
  });

    document.addEventListener("DOMContentLoaded", function() {
    formL.addEventListener('submit', e => {
        e.preventDefault();
        checkInputsConnected();
        });
    });

function checkInputsSignup() {
	// trim to remove the whitespaces
	var passwordValue = password.value.trim();
	var rePasswordValue = rePassword.value.trim();
	
	 if(passwordValue !== rePasswordValue) {
		setErrorFor(rePassword, 'Les passwords ne correspondent pas');
	} else{
		setSuccessFor(rePassword);
        setTimeout(function(){ 
            loadSignup();
        }, 1000);
        
	}
}

function checkInputsConnected() {
	// trim to remove the whitespaces
	var passwordValue = passwordCo.value.trim();
	
	 if(passwordValue == " ") {
		setErrorFor(passwordCo, 'Le password doit être rempli.');
	} else{
		setSuccessFor(passwordCo);
        setTimeout(function(){ 
            loadConnected();
        }, 1000);
        
	}
}



function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function loadSignup(){
    var signup_form = formI;
    var form_data=JSON.stringify(serializeForm(signup_form));
    var xhr = new XMLHttpRequest();
   

    xhr.addEventListener("readystatechange", function() {
        if(this.readyState === 4 && this.status == 200) {
        login();
        }else if(this.readyState === 4 && this.status == 503){
            setErrorFor(rePassword, 'Erreur système');
        }else if(this.readyState === 4 && this.status == 401){
            setErrorFor(email, "Cet email existe déja.");
        }
    });

    xhr.open("POST", "https://denis-farkas.students-laplateforme.io/tdl/api/signup.php");
    xhr.setRequestHeader("Content-Type", "application/json");

    xhr.send(form_data);
   }  
   
	

var serializeForm = function (form) {
	var obj = {};
	var formData = new FormData(form);
	for (var key of formData.keys()) {
		obj[key] = formData.get(key);
	}
	return obj;
};

  
   
   function loadConnected(){
    var login_form = formL;
    var form_data=JSON.stringify(serializeForm(login_form));
    var xhr = new XMLHttpRequest();
   

    xhr.addEventListener("readystatechange", function() {
        if(this.readyState === 4 && this.status == 200) {
        window.location="todolist.php";
        }else if(this.readyState === 4 && this.status == 404){
            setErrorFor(passwordCo, "Erreur de password");
        }else if(this.readyState === 4 && this.status == 401){
            setErrorFor(emailCo, "Cet email n'existe pas");
        }
    });

    xhr.open("POST", "https://denis-farkas.students-laplateforme.io/tdl/api/login.php");
    xhr.setRequestHeader("Content-Type", "text/plain");

    xhr.send(form_data);
   }
   

 

   
        

