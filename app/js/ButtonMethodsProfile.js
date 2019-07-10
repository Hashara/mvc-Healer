window.onload = function(){
    document.getElementById("LogOutButton").addEventListener("click", LogOut,false);
    
    //document.getElementById("EditProfileButton").addEventListener("click", edit,false);

}
function  LogOut(){
    window.location.assign('log1.html');
}


function edit(){
    window.location.assign('editProfile.php');
}
