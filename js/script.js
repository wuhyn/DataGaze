$(document).ready(function(){

    //Hide main view sign out buttons
    $('#sign-out').hide();
    //Hide sidenav sign out button
    $('#sign-out-side').hide();
    //Hide create-dataset-button
    $('#create-dataset-button').hide();

    $(".button-collapse").sideNav();

    // Pause slider
    $('.slider').slider();

    //Dropdown button
    $(".btnSetting").dropdown();

    $("form").submit(function(event){

        $('#modal1').openModal({
          in_duration: 300,
          out_duration: 1000
        });
    });


});


function onSignIn(googleUser){
    console.log("Signed in.");
    //When sign in is true, hide the sign in button. and show logout
    $('#sign-in').hide();
    $('#sign-out').show();
    //Also do it for the side nav versions
    $('#sign-in-side').hide();
    $('#sign-out-side').show();

    //Show create-dataset-button if signed in
    $('#create-dataset-button').show();

    //Hide reminder to sign-in-side
    $('#inform-signin').hide();

    //Getting profile information
    var prof = googleUser.getBasicProfile();
    //Name
    var gname = prof.getName();
    var gemail = prof.getEmail();
    var gpic = prof.getImageUrl();

    //console.log('Name: ' + prof.getName());
    //console.log('Email: ' + prof.getEmail());
    //console.log('Picture: ' + prof.getImageUrl());

    document.getElementById('gemail').innerHTML = "Signed in as " + gemail;
    document.getElementById('gname').innerHTML =  "Hi " + gname + ",";




}

function signOut() {

    var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
      console.log('User signed out.');
    });
    //When user is not signed in, show the button
    //location.reload();
    location.assign("../index.php");
    //Show create-dataset-button if signed in
    $('#create-dataset-button').hide();
}
