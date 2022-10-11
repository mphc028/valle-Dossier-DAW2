// search index for WYSIWYG Web Builder
var database_length = 0;

function SearchPage(url, title, keywords, description)
{
   this.url = url;
   this.title = title;
   this.keywords = keywords;
   this.description = description;
   return this;
}

function SearchDatabase()
{
   database_length = 0;
   this[database_length++] = new SearchPage("index", "Pixel Acces", "pixel acces register login nbsp caution games indie mine sing in up or create an account terms and conditions ", "");
   this[database_length++] = new SearchPage("login", "Untitled Page", "untitled page log in user name password remember me don have an accountregister now ", "");
   this[database_length++] = new SearchPage("login_ok.php", "Untitled Page", "untitled page login was succesful ", "");
   this[database_length++] = new SearchPage("login_error.php", "Untitled Page", "untitled page login error ", "");
   this[database_length++] = new SearchPage("register", "Untitled Page", "untitled page sign up for new account full name user password confirm mail already have an accountlogin now ", "");
   this[database_length++] = new SearchPage("register_error.php", "Untitled Page", "untitled page something went terrebly wrong ", "");
   this[database_length++] = new SearchPage("register_ok.php", "Untitled Page", "untitled page register ok dplease verify your mail to finish ", "");
   this[database_length++] = new SearchPage("admin", "Untitled Page", "untitled page ", "");
   this[database_length++] = new SearchPage("access_deny", "Untitled Page", "untitled page acces deny ", "");
   this[database_length++] = new SearchPage("publicador", "Pixel Acces", "pixel acces nbsp volver hoy mismo puedes ser creador juegos comunitarios disponibles nuclear chaos epic world copyright network si lo deseas leer nuestros terminos servicios haciendo click aquí ", "");
   return this;
}
