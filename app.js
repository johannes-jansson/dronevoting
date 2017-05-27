document.addEventListener("DOMContentLoaded", function() {
  // document.getElementById("form").style.display="none";
  // document.getElementById("voted").style.display="none";
  // document.getElementById("signout").style.display="none";
  // document.getElementById("login").style.display="none";

  // document.getElementById("loginbutton").onclick = function () {
  //   document.getElementById("form").style.display="unset";
  //   document.getElementById("login").style.display="none";
  //   document.getElementById("signout").style.display="unset";
  // }

  document.getElementById("loginbutton").onclick = function () {
    document.getElementById("hiddenidentifier").value = document.getElementById("identifier").value;
    document.getElementById("form").classList.remove('hide');
    document.getElementById("login").classList.add('hide');
    document.getElementById("signout").classList.remove('hide');
    console.log("l");
  }

  document.getElementById("signoutbutton").onclick = function () {
    document.getElementById("hiddenidentifier").value = "";
    document.getElementById("form").classList.add('hide');
    document.getElementById("login").classList.remove('hide');
    document.getElementById("signout").classList.add('hide');
    if ( ! document.getElementById("voted").classList.contains('hide') ) {
      document.getElementById("voted").classList.add('hide');
    }
  }
});
