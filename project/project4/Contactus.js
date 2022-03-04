function emailcheck () {
    var email = document.getElementById("uemail").value
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(String(email).toLowerCase())){
        ajax()
	    return
    }
    else{
        alert('Invalid E-mail Address')
    }
}


function ajax(){
               var ajaxRequest;

               ajaxRequest = new XMLHttpRequest();

               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('content');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }



               var uname = document.getElementById('uname').value;
               var uemail = document.getElementById('uemail').value;
		var tarea = document.getElementById('tarea').value;
               var queryString = "?uname=" + uname ;

               queryString +=  "&uemail=" + uemail + "&tarea=" + tarea;

               ajaxRequest.open("GET", "ajax.php" + queryString, true);
               ajaxRequest.send(null);
            }
