
var eyeLock = document.getElementById("senhalock");
var password = document.getElementById("pass");
var eyeOpen = document.getElementById("senhaopen")


    eyeLock.onclick = function(){
       this.src = "./assets/img/senhaopen.png";
       pass.type = "text";
       this.id = "senhaopen";

    }

    eyeOpen.onclick = function(){
        this.src = "./assets/img/senhalocked.png";
        pass.type = "password";
        this.id = "senhaopen";
 
     }

    
    
    


