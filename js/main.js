refresh ();
setInterval(refresh, 1000);

function send_msg() {
  var message = document.getElementById("message").value;
  var username = document.getElementById("username").value;

  if (message != ""){
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("message-panel").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "main.php?username=" + username + "&message=" + message, true);
    xhttp.send();
    var message = document.getElementById("message").value = "";
    refresh ();
  }
}

function refresh (){
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("message-panel").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "main.php?refresh=true", true);
  xhttp.send();
}

var input = document.getElementById("message");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   send_msg();
  }
});