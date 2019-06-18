"use strict";
var jumbotron = true;
var auth = firebase.auth();
var firebaseInitiatSuccesfull = false;

var firestore = firebase.firestore();
var settings = {timestampsInSnapshots: true};
firestore.settings(settings);

function signIn() {
    var provider = new firebase.auth.GoogleAuthProvider();
    auth.signInWithPopup(provider);
    console.log("sing in");
}

function signUpWithEmailPassword(){
  var email = userSignUpEmail.value;
  var username = userSignUpUsername.value;
  var password = userSignUpPass.value;
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

    auth.signInWithEmailAndPassword(email, password).catch(function(error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      console.log(errorMessage);
      // ...
    });
}

function signOut() {
    auth.signOut();
}

// Initiate firebase auth.
function initFirebaseAuth(jm) {
  jumbotron = jm;
  auth.onAuthStateChanged(function(user) {
    authStateObserver(user);
  });
}

function initFirebaseAuthAdc() {
  auth.onAuthStateChanged(function(user) {
    getALlAdinistrationContest("manage_contest_lists");
  });
}
// Returns the signed-in user's profile Pic URL.
function getProfilePicUrl() {
  if(isUserSignedIn()){
    return auth.currentUser.photoURL || '/assets/images/becoder.png';
  }
}

function getUserEmail(){
  if(isUserSignedIn()){
    return auth.currentUser.email;
  }
}
// Returns the signed-in user's display name.
function getUserName() {
  if(isUserSignedIn()){
    return auth.currentUser.displayName;
  }
}
function getCurrentUserId() {
  if(isUserSignedIn()){
    return auth.currentUser.uid;
  }
}
function isUserSignedIn() {
      return !!auth.currentUser;
}

function getALlAdinistrationContest(elementId){
  var contests = firestore.collection('contests').where('contestAuthorId', '==', getCurrentUserId());

  firestore.collection("contests").where('contestAuthorId', '==', getCurrentUserId())
      .onSnapshot(function(snapshot) {
          snapshot.docChanges().forEach(function(change) {
              if (change.type === "added") {
                console.log("Modified city: ", change.doc.data());

                var data = change.doc.data();

                var tableRow = document.createElement("tr");
                var tableRowHeader = document.createElement("th");
                var tableRowDataCN = document.createElement("td");
                var tableRowDataCO = document.createElement("td");
                var tableRowDataSD = document.createElement("td");
                var tableRowDataSU = document.createElement("td");
                var tableRowDataPC = document.createElement("td");

                tableRowHeader.setAttribute("scope","row");

                var contestCount = document.createTextNode(1);
                var contestNameText = document.createTextNode(data.contestName);
                var contestOwnerText = document.createTextNode(data.organizationName);
                var contestSatrtDate = document.createTextNode(data.startDate);
                var ContestSignUp = document.createTextNode(100);
                var ContestPartiCipants = document.createTextNode(30);

                tableRowHeader.appendChild(contestCount);
                tableRowDataCN.appendChild(contestNameText);
                tableRowDataCO.appendChild(contestOwnerText);
                tableRowDataSD.appendChild(contestSatrtDate);
                tableRowDataSU.appendChild(ContestSignUp);
                tableRowDataPC.appendChild(ContestPartiCipants);

                tableRow.appendChild(tableRowHeader);
                tableRow.appendChild(tableRowDataCN);
                tableRow.appendChild(tableRowDataCO);
                tableRow.appendChild(tableRowDataSD);
                tableRow.appendChild(tableRowDataSU);
                tableRow.appendChild(tableRowDataPC);


                document.getElementById(elementId).appendChild(tableRow);
                }
              if (change.type === "modified") {
                  console.log("Modified city: ", change.doc.data());
              }
              if (change.type === "removed") {
                  console.log("Removed city: ", change.doc.data());
              }
          });
      });

  // contests.get().then(function (querySnapshot) {
  //     var count = 1;
  //     querySnapshot.forEach(function (doc) {
  //
  //     });
  // });

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
    if(jumbotron){
      signInSignUpJumborton.setAttribute('hidden','true');

    }
    footerSigninSignupButton.setAttribute('hidden','true');
    firebaseInitiatSuccesfull = true;
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
