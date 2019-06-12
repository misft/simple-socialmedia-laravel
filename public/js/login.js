console.log("dsa");

// Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAxP5xBSqwd-LmHVIE2GvWy92d-KgQJKhQ",
    authDomain: "webproject-54c22.firebaseapp.com",
    databaseURL: "https://webproject-54c22.firebaseio.com",
    projectId: "webproject-54c22",
    storageBucket: "webproject-54c22.appspot.com",
    messagingSenderId: "91958271438",
    appId: "1:91958271438:web:a548823ee9e1147c"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

// var provider = new firebase.auth.GoogleAuthProvider();
// provider.addScope('https://www.googleapis.com/auth/contacts.readonly');
// firebase.auth().useDeviceLanguage();

// firebase.auth().signInWithRedirect(provider);

// firebase.auth().getRedirectResult().then(function(result) {
//   if (result.credential) {
//     // This gives you a Google Access Token. You can use it to access the Google API.
//     var token = result.credential.accessToken;
//     // ...
//   }
//   // The signed-in user info.
//   var user = result.user;
// }).catch(function(error) {
//   // Handle Errors here.
//   var errorCode = error.code;
//   var errorMessage = error.message;
//   // The email of the user's account used.
//   var email = error.email;
//   // The firebase.auth.AuthCredential type that was used.
//   var credential = error.credential;
//   // ...
// });