
function checkLogin() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var type = document.getElementById('type').value;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == 'correct') {
                if (type == 'SuperAdmin') {
                    window.location = 'http://localhost/SmartCity/SAdmin/index.php';
                } else {
                    window.location = 'http://localhost/SmartCity/Admin/index.php';
                }
            } else if (this.responseText == 'incorrect') {
                alert("Incorrect email or password");

            } else if (this.responseText == 'forbidden') {
                alert("this account is forbidden.");
            } else
            {
                alert(this.responseText);
            }
        }
    }
    xmlhttp.open("get", "Actions/doLogin.php?email=" + email + "&password=" + password + "&type=" + type, true);
    xmlhttp.send();
}
//document.getElementById("resultPublicMsg").style.color="red";
