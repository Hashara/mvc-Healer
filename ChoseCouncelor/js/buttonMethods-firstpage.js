window.onload = function(){
    document.getElementById("councellorButton").addEventListener("click", councellor,false);
    document.getElementById("visitorButton").addEventListener("click", visitor,false);
}

    function councellor(){
        window.location.assign('logInCoun.html');
    }
    
    function visitor(){
        window.location.assign('index.php');
    }

    
    