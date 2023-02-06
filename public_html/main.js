import { onAuthStateChanged } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js"
import { getDocs, collection } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-firestore.js"
import { auth, db } from "./app/firebase.js";
import { loginCheck } from "./app/loginCheck.js";
import { setupPosts } from "./app/postList.js";

import './app/signupForm.js'
import './app/signinForm.js'
import './app/googleLogin.js'
import './app/facebookLogin.js'
import './app/githubLogin.js'
import './app/logout.js'
import './app/postList.js'

let bannerCookies = document.getElementById("cookiesbanner");

function setToken()
{
  const date = new Date();
  localStorage.setItem('token',date);
}

function getToken()
{
  return new Date(localStorage.getItem('token'));
}

function getDayMS()
{
  return (1000*60*60*24);
}

// list for auth state changes
onAuthStateChanged(auth, async (user) => {
  if (user) {
    loginCheck(user);
    try {
      const querySnapshot = await getDocs(collection(db, "posts"));
      // setupPosts(querySnapshot.docs);
    } catch (error) {
      console.log(error)
    }
  } else {
    loginCheck(user);
  }
});

function shCookies()
{
  console.log("Cookies message should NOT appear now");
}
const curdate = new Date();

// let banner = document.getElementById('cookies');

document.getElementById("cookies").addEventListener("click", acceptCookies);

function acceptCookies()
{
  setToken();
  bannerCookies.style.display = "none";

}
// if (getToken()==null || (curdate-getToken())<getDayMS()*3)
// if (getToken()==null || (curdate-getToken())<3000) //3 senconds

if (getToken()==null || (curdate-getToken())<getDayMS()*3)
{
  shCookies();
  bannerCookies.style.display = "none";
}
else
{
  console.log("Show cookies message");
}