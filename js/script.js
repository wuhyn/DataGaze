$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('#sign-out').hide();
    $('#displayMessage').hide();
    $('#create-dataset-button').hide();
});



function initial_state(){
    $('#sign-in').show();
}

function onSignIn(){
    console.log("Signed in.");
    //When sign in is true, hide the sign in button.
    $('#sign-in').hide();
    $('#sign-out').show();
    //And show the log out button

    //Show create-dataset-button if signed in
    $('#create-dataset-button').show();
}

function signOut() {

    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
    console.log('User signed out.');
    });
    //When user is not signed in, show the button
    $('#sign-in').show();
    $('#sign-out').hide();

    //Show create-dataset-button if signed in
    $('#create-dataset-button').hide();
}

function display(){
    $('#displayMessage').show();
}
