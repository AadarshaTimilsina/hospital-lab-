document.getElementById("loginsumbit").addEventListener("click", myFunction);
function myFunction() {
  window.location.href="C:\Users\DELL\Desktop\projecti\1stpagehtml.html";
}
function validateform(){  
    var name=document.myform.username.value;  
    var password=document.myform.password.value;  
      
    if (username==null || name==""){  
      alert("Username can't be blank");  
      return false;  
    } 
} 
