function validateform(){
  var name = document.myform.email.value;
     if(name==null || name == "" ){
				document.getElementById('emailnote').innerHTML = "Email can't be blank";
		}
	var pass = document.myform.password.value;
	if(pass.length < 8){
			document.getElementById('passnote').innerHTML = "Password must be atleast 8 characters";
		}
}
document.getElementById('btn1').addEventListener('click', validateform, false);

function matchpass(){
	var fpass = document.f1.pass1.value;
	var spass = document.f1.pass2.value;

	if(fpass.length < 8){
		document.getElementById('letpass').innerHTML = "Password must be atleast 8 characters";

	}
	 if(fpass!=spass){
			// return true;
			document.getElementById('samepass').innerHTML = "Passwords must be thesame";
		}
	}

	document.getElementById('btn2').addEventListener('click', matchpass, false);

    const signInBtn = document.getElementById("signIn");    //creates constants to hold the values of the id
    const signUpBtn = document.getElementById("signUp");
    const fistForm = document.getElementById("form1");
    const secondForm = document.getElementById("form2");
    const container = document.querySelector(".container");
    
    signInBtn.addEventListener("click", () => {      //uses event listeners to toggle between the both sides
        container.classList.add("right-panel-active");
    });
    
    signUpBtn.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
		alert('Working')
    });
    
   /*  fistForm.addEventListener("submit", (e) => e.preventDefault());  
    secondForm.addEventListener("submit", (e) => e.preventDefault());  */
    
	