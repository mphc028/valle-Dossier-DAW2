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

function loadStyleConfig(config)
{
  for (const [key, value] of Object.entries(config)) document.documentElement.style.setProperty(key, value);
}

//#region textbuttons



let textsizes = [{
"--fontsize1": "15px", 
"--fontsize2": "18px",
"--fontsize3": "24px",
"--fontsize4": "32px",
"--fontsize4": "48px",
"--fontsize5": "64px"
},
{
"--fontsize1": "18px", 
"--fontsize2": "24px",
"--fontsize3": "32px",
"--fontsize4": "48px",
"--fontsize4": "64px",
"--fontsize5": "72px"
},
{
"--fontsize1": "24px", 
"--fontsize2": "32px",
"--fontsize3": "48px",
"--fontsize4": "64px",
"--fontsize4": "72px",
"--fontsize5": "86px"
}
];


let acctext = [];

for (let i = 0; i < 3; i++) 
{
  acctext[i] = document.getElementById("acctext"+(i+1));
  acctext[i].onclick = function(){changeText(i)};
}




function changeText(index)
{
  acctext[index].classList 
  loadStyleConfig(textsizes[index]);

  acctext.forEach(text => {
    text.classList.add("text-white");
    text.classList.remove("text-secondary");
  });
  acctext[index].classList.remove("text-white");
  acctext[index].classList.add("text-secondary");

}

//#endregion

//#region colorbuttons

let colortypes = [{
  "--color1": "#dd1468",
  "--color2": "#6c1731",
  "--color3": "#ffffff",
  "--color4": "#d13e7c",
  "--color5": "#272829"
  },
  {
    "--color1": "#dda414",
    "--color2": "#e2960a",
    "--color3": "#000000",
    "--color4": "#d13e7c",
    "--color5": "#dda414"
  },
  {
    "--color1": "#3bff89",
    "--color2": "#4cf855",
    "--color3": "#000000",
    "--color4": "#23ce28",
    "--color5": "#1abd48"
  },
  {
    "--color1": "#dd1468",
    "--color2": "#6c1731",
    "--color3": "#ffffff",
    "--color4": "#d13e7c",
    "--color5": "#272829"
  }
]

let acccolor = []

for (let i = 0; i < 4; i++) 
{
  acccolor[i] = document.getElementById("acccolor"+(i+1));
  acccolor[i].onclick = function(){changeColor(i)};
}

let colorDictionary = ['text-white','text-warning','text-success','text-gray'];

function changeColor(index)
{
  acccolor[index].classList 
  loadStyleConfig(colortypes[index]);


  for (let i = 0; i < 4; i++) {
    acccolor[i].classList.add(colorDictionary[i]);
    acccolor[i].classList.remove("text-secondary");
  }

  acccolor[index].classList.remove(colorDictionary[index]);
  acccolor[index].classList.add("text-secondary");

}




//#endregion