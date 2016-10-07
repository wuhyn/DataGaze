$(document).ready(function(){

    //Hide main view sign out buttons
    $('#sign-out').hide();
    //Hide sidenav sign out button
    $('#sign-out-side').hide();


    $(".button-collapse").sideNav();

    // Pause slider
    $('.slider').slider();

});



function onSignIn(){
    console.log("Signed in.");
    //When sign in is true, hide the sign in button. and show logout
    $('#sign-in').hide();
    $('#sign-out').show();
    //Also do it for the side nav versions
    $('#sign-in-side').hide();
    $('#sign-out-side').show();

    //Show create-dataset-button if signed in
    $('#create-dataset-button').show();
}

function signOut() {

    var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
      console.log('User signed out.');
    });
    //When user is not signed in, show the button
    location.reload();

    //Show create-dataset-button if signed in
    $('#create-dataset-button').hide();
}
