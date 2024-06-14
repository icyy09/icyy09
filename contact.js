const form = document.querySelector('form');
const fullName = document.getElementById("name")
const email = document.getElementById("email")
const phone = document.getElementById("phone")
const subject = document.getElementById("subject")
const message = document.getElementById("message")

function sendEmail() {
	const bodyMessage = `Full Name: ${fullName.value} <br> Email: ${email.value} <br> Phone Number: ${phone.value} <br> Message: ${message.value} ` ;
		
	Email.send({
	    Host : "smtp.elasticemail.com",
	    Username : "briggsxavy09@gmail.com",
	    Password : "5C75E4E694AA38ADB042B59F7F8CF9600512",
	    To : 'briggsxavy09@gmail.com',
	    From : "briggsxavy09@gmail.com",
	    Subject : subject.value,
	    Body : bodyMessage
	}).then(
	  message => {
	  	if (message == "OK") {
	  		Swal.fire({
				 title: "Success!",
				 text: "Message Sent!",
				 icon: "success"
			});
	  	}
	  }
	);
}

function checkInputs(){
	const items = document.querySelectorAll(".item");

	for (const item of items){
		if (item.value == ""){
			item.classList.add("error");
			item.parentElement.classList.add("error");
		}

		item.addEventListener("keyup", () => {
			if (item.value != ""){
			item.classList.remove("error");
			item.parentElement.classList.remove("error");
			}
			else{
				item.classList.add("error");
				item.parentElement.classList.add("error");
			}
		});
	}
}

form.addEventListener("submit", (e) => {
	e.preventDefault();
	checkInputs();

	if (!fullName.classList.contains("error")&& !email.classList.contains("error")&& !phone.classList.contains("error")&& !subject.classList.contains("error")
		&& !message.classList.contains("error")){
		sendEmail();

		form.reset();
		return false;

	}
});