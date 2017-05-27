document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("loginbutton").onclick = function () {
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
  }

  document.getElementById("votebutton").onclick = function () {
    document.getElementById("form").classList.add('hide');
    document.getElementById("voted").classList.remove('hide');
  }
  document.getElementById("again").onclick = function () {
    document.getElementById("form").classList.remove('hide');
    document.getElementById("voted").classList.add('hide');
    document.getElementById("flow").value = 5;
    document.getElementById("tech").value = 5;
    document.getElementById("risk").value = 5;
  }

  /*
  $('#votebutton').click(function(){
    $.ajax({
      url: post.php,
      type:'POST',
      data:
      {
          hiddenidentifier: "johannes",
          performance: "Emil",
	  flow: 10,
	  tech: 10,
	  risk: 10
      },
      success: function(msg)
      {
          alert('Thank you for your vote');
      },
      error: function(msg)
      {
	  alert('Failure');
      }
    });
  });
  */
});
