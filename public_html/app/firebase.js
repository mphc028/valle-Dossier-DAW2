import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js"
import { getFirestore } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-firestore.js"

const firebaseConfig = {
  apiKey: "AIzaSyAMzcs-3_TPRNIrX_wtbTtRfUHrlpl2Pcs",
  authDomain: "vallefirebaseauth.firebaseapp.com",
  projectId: "vallefirebaseauth",
  storageBucket: "vallefirebaseauth.appspot.com",
  messagingSenderId: "424669300616",
  appId: "1:424669300616:web:f853806134c07667459c3d"
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);
export const auth = getAuth(app)
export const db = getFirestore(app)