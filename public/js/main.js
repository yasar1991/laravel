$(document).ready(function (){
    
});

function signin_validate(){
    var username_or_mail = $('#username').val().trim();
    var password_e = $('#password').val().trim();

   if(username_or_mail != "" && password_e != ""){
       $('#login_f').submit();
   } else {
    alert("Enter username and password credentials to proceed further");
   }
}

