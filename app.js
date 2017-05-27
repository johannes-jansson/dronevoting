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
});
