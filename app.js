document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("loginbutton").onclick = function () {
		// same as below!
    document.getElementById("hiddenidentifier").value = document.getElementById("identifier").value;

    document.getElementById("form").classList.remove('hide');
    document.getElementById("login").classList.add('hide');
    document.getElementById("signout").classList.remove('hide');
  }

  document.getElementById("signoutbutton").onclick = function () {
    document.getElementById("hiddenidentifier").value = "";
    document.getElementById("form").classList.add('hide');
    document.getElementById("login").classList.remove('hide');
    document.getElementById("signout").classList.add('hide');
    if ( ! document.getElementById("voted").classList.contains('hide') ) {
      document.getElementById("voted").classList.add('hide');
    }
    document.getElementById("flow").value = 5;
    document.getElementById("variation").value = 5;
    document.getElementById("combos").value = 5;
    document.getElementById("crash").value = 0;
    document.getElementById("risk").value = 5;
    document.getElementById("flowo").value = 5;
    document.getElementById("variationo").value = 5;
    document.getElementById("comboso").value = 5;
    document.getElementById("risko").value = 5;
  }

  document.getElementById("again").onclick = function () {
    document.getElementById("form").classList.remove('hide');
    document.getElementById("voted").classList.add('hide');
    document.getElementById("flow").value = 5;
    document.getElementById("variation").value = 5;
    document.getElementById("combos").value = 5;
    document.getElementById("crash").value = 0;
    document.getElementById("risk").value = 5;
    document.getElementById("flowo").value = 5;
    document.getElementById("variationo").value = 5;
    document.getElementById("comboso").value = 5;
    document.getElementById("risko").value = 5;
  }

  document.getElementById("votebutton").onclick = function () {
    $.ajax({
      type: 'post',
      url: 'post.php',
      data: $('form').serialize(),
      success: function () {
        document.getElementById("form").classList.add('hide');
        document.getElementById("voted").classList.remove('hide');
      }
    });
  }

	document.getElementById("identifier")
	    .addEventListener("keydown", function(event) {
	    if (event.keyCode == 13) {
				// same as above!
    		document.getElementById("hiddenidentifier").value = document.getElementById("identifier").value;

    		document.getElementById("form").classList.remove('hide');
    		document.getElementById("login").classList.add('hide');
    		document.getElementById("signout").classList.remove('hide');
	    }
	});
});
