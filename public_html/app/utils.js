import { signOut } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js"
import { onAuthStateChanged } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js"
import { auth } from "./firebase.js";
import { loginCheck } from "./loginCheck.js";



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
let acccolor = []


function setUpHelpButtons()
{
  for (let i = 0; i < 3; i++) 
  {
    acctext[i] = document.getElementById("acctext"+(i+1));
    acctext[i].onclick = function(){changeText(i)};
  }
  for (let i = 0; i < 4; i++) 
  {
    acccolor[i] = document.getElementById("acccolor"+(i+1));
    acccolor[i].onclick = function(){changeColor(i)};
  }
}



function changeText(index)
{
  localStorage.setItem("text", index);
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
    "--color4": "#dda414",
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



let colorDictionary = ['text-white','text-warning','text-success','text-gray'];

function changeColor(index)
{
  localStorage.setItem("color", index);
  acccolor[index].classList 
  loadStyleConfig(colortypes[index]);


  for (let i = 0; i < 4; i++) {
    acccolor[i].classList.add(colorDictionary[i]);
    acccolor[i].classList.remove("text-secondary");
  }

  acccolor[index].classList.remove(colorDictionary[index]);
  acccolor[index].classList.add("text-secondary");

}





function setLogOut()
{
  const logout = document.getElementById("logout");

  logout.addEventListener("click", async (e) => {
    e.preventDefault();
    try {
      await signOut(auth)
      console.log("signed out");
      window.open("index.html")
    } catch (error) {
      console.log(error)
    }
  });
}
function includeHTML() {
  let z, i, elmnt, file, xhttp;
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    file = elmnt.getAttribute("include-html");
    if (file) {
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          elmnt.removeAttribute("include-html");

          includeHTML();

          setLogOut();
            
          setUpHelpButtons();

          onAuthStateChanged(auth, async (user) => {
            if (user) {
              try {
                loginCheck(user);
              } catch (error) {
                console.log(error)
              }
            } else {
              loginCheck(user);
            }
          });

          changeColor(localStorage.getItem('color')??1);
          changeText(localStorage.getItem('text')??1);

          let fileName = location.href.split("/").slice(-1);
          fileName = fileName[0].split(".")[0];
          console.log(fileName);

          document.getElementById(fileName+'Nav').classList.add("activePage");

        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();

      return;
    }
  }
}
includeHTML();

