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
    createNewUserWithGoogle();
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

function initFirebaseAuthWithSpecificProblemDetails(jm,problemIdRef) {
  jumbotron = jm;
  auth.onAuthStateChanged(function(user) {
    authStateObserver(user);
    getProblemDetailsForCompete(problemIdRef);
    getAllProblemLanguagesForSubmitOption(problemIdRef);
    getMySubmissionAll(problemIdRef);
    getAllSubmission(problemIdRef);
  });
}

function initFirebaseAuthAdc() {
  auth.onAuthStateChanged(function(user) {
    getALlAdinistrationContest("manage_contest_lists");
    getALlAdinistrationManageProblems("created_problem_lists");
  });
}

function initFirebaseAuthCreateProblem() {
  auth.onAuthStateChanged(function(user) {
    authStateObserverCreateProblem(user);
  });
}
function createNewUserWithGoogle(){
  auth.onAuthStateChanged(function(user) {
    if(user){
      var createUserProfile = {
        userDisplayname: user.displayName,
        userEmail: user.email,
        userProfilePictureUrl: getProfilePicUrl(),
        userId : user.uid,
        username : user.email,
        isAnonymous : user.isAnonymous,
        emailVerified : user.emailVerified
      };
      firestore.collection("userTestsd").doc(user.uid).set(createUserProfile)
      .then(function(docRef) {
          console.log("Document written with ID bbj: ", "docRef.id");
      })
      .catch(function(error) {
          console.error("Error adding document: ", error);
      });
    }
  });
}

function getProblemLanguageFromApiAndUpdate(problemId){
  var request = new XMLHttpRequest()

  request.open('GET', 'https://api.judge0.com/languages', true)
  request.onload = function() {
    // Begin accessing JSON data here
    var data = JSON.parse(this.response)

    if (request.status >= 200 && request.status < 400) {
      data.forEach(language => {
        console.log(language.id+" "+language.name)
        var langDetails = {
          languageCheck : true,
          languageId : language.id,
          languageName : language.name,
          languageTimelimit : 20,
          languageMemoryLimit : 2028

        }
        firestore.collection("problemsTest").doc(problemId).collection("problemLanguages").doc("languagecode"+language.id).set(langDetails)
        .then(function(docRef) {
            console.log("Document written with ID bbj fucks: ", "docRef.id");

        })
        .catch(function(error) {
            console.error("Error adding document: ", error);
        });
      });

    } else {
      console.log('error')
    }
  }

  request.send()

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

  firestore.collection("contests").where('contestAuthorId', '==', getCurrentUserId())
      .onSnapshot(function(snapshot) {
          var count = 1;
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

                var contestCount = document.createTextNode(count);
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
                count += 1;
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

function getALlAdinistrationManageProblems(elementId){
firestore.collection('problemsTest').where('problemCreatorAuthorId', '==', getCurrentUserId())
      .onSnapshot(function(snapshot) {
          var count = 1;
          snapshot.docChanges().forEach(function(change) {
              if (change.type === "added") {
                console.log("Modified city: ", change.doc.data());

                var data = change.doc.data();
                var tableRow = document.createElement("tr");
                var tableRowHeader = document.createElement("th");
                var tableRowDataPN = document.createElement("td");
                var tableRowDataPO = document.createElement("td");
                var tableRowDataPC = document.createElement("td");
                var tableRowDataSD = document.createElement("td");

                tableRowHeader.setAttribute("scope","row");

                var problemCount = document.createTextNode(count);
                var problemNameText = document.createTextNode(data.problemName);
                var problemOwnerText = document.createTextNode(data.problemAuthorName);
                var problemSolved = document.createTextNode(data.problemSolved);
                var ProblemPartiCipants = document.createTextNode(data.participants);


                tableRowHeader.appendChild(problemCount);
                tableRowDataPN.appendChild(problemNameText);
                tableRowDataPO.appendChild(problemOwnerText);
                tableRowDataPC.appendChild(ProblemPartiCipants);
                tableRowDataSD.appendChild(problemSolved);

                tableRow.appendChild(tableRowHeader);
                tableRow.appendChild(tableRowDataPN);
                tableRow.appendChild(tableRowDataPO);
                tableRow.appendChild(tableRowDataPC);
                tableRow.appendChild(tableRowDataSD);

                tableRow.addEventListener('click',function(){
                  openEditProblemPage(JSON.stringify(data),change.doc.id);
                }, false);
                document.getElementById(elementId).appendChild(tableRow);
                count += 1;
                }
              if (change.type === "modified") {
                  console.log("Modified city: ", change.doc.data());
              }
              if (change.type === "removed") {
                  console.log("Removed city: ", change.doc.data());
              }
          });
      });

}

function openEditProblemPage(problemDetails,id){
  location.href = "problemEdit.html?"+problemDetails+"$data$"+id;

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
    if(jumbotron){
      signInSignUpJumborton.removeAttribute('hidden');
    }
    footerSigninSignupButton.removeAttribute('hidden');
  }
}


function authStateObserverCreateProblem(user) {
  if (user) {
    var profilePicUrl = getProfilePicUrl();
    var userName = getUserName();

    if(typeof(problemAuthorName) != 'undefined' && problemAuthorName!=null){
      problemAuthorName.innerText = user.displayName;
    }
    if(typeof(problemAuthorProfilePicture) != 'undefined' && problemAuthorProfilePicture!=null){
      problemAuthorProfilePicture.src = user.photoURL;
    }

    userNavItem.removeAttribute('hidden');
    userNavPic.src = getProfilePicUrl();

  } else {
    userNavItem.setAttribute('hidden', 'true');
  }
}

function searchUserFromDbByUsername(queryUsername,problemId){
  queryUsername = queryUsername.toLowerCase();
  var limitChar = String.fromCharCode(queryUsername.charCodeAt(0)+1);

  firestore.collection('userTestsd').where('username', '>=', queryUsername).where('username','<=',limitChar)
  .get()
  .then(function(querySnapshot) {
    $("#searchmoderatorsname").empty();
    console.log("hello bb");
      querySnapshot.forEach(function(doc) {
        var data = doc.data();
          // doc.data() is never undefined for query doc snapshots
          var listItem = '<div class="list-group-item notopbottom z-depth-5 " id="'+data.userId+'"> \
            <img class="float-left rounded-circle avatar mr-3 mt-1" src="'+data.userProfilePictureUrl+'" \
                height="50px" width="50px" alt="Avatar"> \
            <p class="mt-2" style="margin-left:10px!important;display:inline-block;"> <strong>'+data.username+'</strong>\
            <button style="margin-left:15px;" id="addingProblemModerator'+data.userId+'" class="btn btn-default btn-sm">Add</button> </p> \
          </div>' ;
          console.log(doc.id, " => ", listItem);
          $("#searchmoderatorsname").append(listItem);
          $("#addingProblemModerator"+data.userId).click(function(){
          var createProblemModerators = {
               problemId : problemId,
               userId: data.userId,
               username : data.username,
               userDisplayname : data.userDisplayname,
               userProfilePictureUrl : data.userProfilePictureUrl
            };
            firestore.collection("problemsTest").doc(problemId).collection("problemModerators").doc(data.userId).set(createProblemModerators)
            .then(function(docRef) {
                console.log("Document written with ID bbj fuck: ", "docRef.id");
            })
            .catch(function(error) {
                console.error("Error adding document: ", error);
            });



          });

      });
  })
  .catch(function(error) {
      console.log("Error getting documents: ", error);
  });
}

function addProblemTestCase(problemTestCase,problemId) {
  firestore.collection("problemsTest").doc(problemId).collection("problemTestCases").add(problemTestCase)
  .then(function(docRef) {
      console.log("Document written with ID bbj fucks: ", "docRef.id");
  })
  .catch(function(error) {
      console.error("Error adding document: ", error);
  });
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
