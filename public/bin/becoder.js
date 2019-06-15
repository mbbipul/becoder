"use strict";
function signIn() {
    var provider = new firebase.auth.GoogleAuthProvider();
    firebase.auth().signInWithPopup(provider);
    console.log("sing in");
}

function signUpWithEmailPassword(){
  var email = userSignUpEmail.value;
  var username = userSignUpUsername.value;
  var password = userSignUpPass.value;
  var auth = firebase.auth();
  auth.createUserWithEmailAndPassword(email,password).then(function() {
    // Sign-out successful.
    console.log("ahhh santi");
    var user = auth.currentUser;
    console.log(user);
    user.updateProfile({
      displayName: username
    }).then(function() {
      // Update successful.
      console.log("Update successfully");
    }).catch(function(error) {
      // An error happened.
      console.log(error);
    });
  }).catch(function(error) {
    // An error happened.
    console.log("aaah cude gelo");
  });
}
function signInWithEmailPassword(){
    var email = document.getElementById("user-sign-in-email").value;
    var password = document.getElementById("user-sign-in-password").value;

    firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      console.log(errorMessage);
      // ...
    });
}

function signOut() {
    firebase.auth().signOut();
}

// Initiate firebase auth.
function initFirebaseAuth() {
  var auth = firebase.auth();
  auth.onAuthStateChanged(function(user) {
    authStateObserver(user);
  });
}

// Returns the signed-in user's profile Pic URL.
function getProfilePicUrl() {
  if(isUserSignedIn()){
    return firebase.auth().currentUser.photoURL || '/assets/images/becoder.png';
  }
}

// Returns the signed-in user's display name.
function getUserName() {
  if(isUserSignedIn()){
    console.log("bipul");
    return firebase.auth().currentUser.displayName;
  }
}

function isUserSignedIn() {
      return !!firebase.auth().currentUser;
}

function authStateObserver(user) {
  if (user) { // User is signed in!
    // Get the signed-in user's profile pic and name.
    var profilePicUrl = getProfilePicUrl();
    var userName = getUserName();
    userNavItem.removeAttribute('hidden');
    // Set the user's profile pic and name.
  //  userPicElement.style.backgroundImage = 'url(' + addSizeToGoogleProfilePic(profilePicUrl) + ')';
    userNavName.textContent = userName;
    userNavPic.src = getProfilePicUrl();
    // Show user's profile and sign-out button.
    // Hide sign-in button.
    signInSignUpNavButton.setAttribute('hidden', 'true');
    signInSignUpJumborton.setAttribute('hidden','true');
    footerSigninSignupButton.setAttribute('hidden','true');
    // We save the Firebase Messaging Device token and enable notifications.
  } else { // User is signed out!
    // Hide user's profile and sign-out button.
    userNavItem.setAttribute('hidden', 'true');
    signInSignUpNavButton.removeAttribute('hidden');
    signInSignUpJumborton.removeAttribute('hidden');
    footerSigninSignupButton.removeAttribute('hidden');

  }
}


function addSizeToGoogleProfilePic(url) {
  if (url.indexOf('googleusercontent.com') !== -1 && url.indexOf('?') === -1) {
    return url + '?sz=150';
  }
  return url;
}

// A loading image URL.
var LOADING_IMAGE_URL = 'https://www.google.com/images/spin-32.gif?a';
function checkSetup() {
  if (!window.firebase || !(firebase.app instanceof Function) || !firebase.app().options) {
    window.alert('You have not configured and imported the Firebase SDK. ' +
        'Make sure you go through the codelab setup instructions and make ' +
        'sure you are running the codelab using `firebase serve`');
  }
}


// Checks that Firebase has been imported.
checkSetup();
var signInButtonElement = document.getElementById('google_login');

var userSignUpEmail = document.getElementById('user-sign-up-email');
var userSignUpPass = document.getElementById('user-sign-up-password');
var userSignUpUsername = document.getElementById('user-sign-up-username');

var signUpWithEmailPasswordButton = document.getElementById('sign-up-with-email');
var signInWithEmailPasswordButton = document.getElementById('sign-in-with-email');
var signInSignUpJumborton = document.getElementById('sign-in-sign-up-jumbotron');
var signInSignUpNavButton = document.getElementById('navbar-login-signin-button');
var footerSigninSignupButton = document.getElementById('footer-signin-signup-button');
var logoutButton = document.getElementById('logout');
var userNavItem = document.getElementById('navbar-user-item');
var userNavName = document.getElementById('nav-user-name');
var userNavPic = document.getElementById('nav-user-pic');

signInButtonElement.addEventListener('click', signIn);
signUpWithEmailPasswordButton.addEventListener('click',signUpWithEmailPassword);
signInWithEmailPasswordButton.addEventListener('click',signInWithEmailPassword);
logoutButton.addEventListener('click',signOut);

var firestore = firebase.firestore();
var settings = {timestampsInSnapshots: true};
firestore.settings(settings);
initFirebaseAuth();
