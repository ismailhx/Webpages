<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      /* Center the loader */
      #loader {
        position: absolute;
        left: 55%;
        top: 60%;
        z-index: 1;
        width: 20px;
        height: 20px;
        margin: -100px 0 0 -100px;
        border: 4px double green;
        border-radius: 50%;
        border-top: 4px double white;
        -webkit-animation: spin 7s linear infinite;
        animation: spin 7s linear infinite;
      }

      @-webkit-keyframes spin {
        0% {
          -webkit-transform: rotate(0deg);
        }

        100% {
          -webkit-transform: rotate(360deg);
        }
      }

      @keyframes spin {
        0% {
          transform: rotate(0deg);
        }

        100% {
          transform: rotate(360deg);
        }
      }

      /* Add animation to "page content" */
      .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 17s;
        animation-name: animatebottom;
        animation-duration: 17s
      }

      .animate-stuff {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 10s;
        animation-name: animatestuff;
        animation-duration: 10s
      }

      @keyframes animatebottom {
        0% {
          opacity: 0;
        }

        100% {
          opacity: 1;
        }
      }

      @keyframes animatestuff {
        0% {
          opacity: 0;
        }

        100% {
          opacity: 1;
        }
      }

      @keyframes animateout {
        0% {
          opacity: 1;
        }

        100% {
          opacity: 0;
        }
      }

      @keyframes noanimation {
        0% {
          opacity: 1;
        }

        100% {
          opacity: 1;
        }
      }

      #myDiv {
        display: none;
        text-align: center;
      }

      #Ismail {
        font-family: 'Courier New', Courier, monospace;
        font-size: x-small;
        background-color: black;
        color: white;
        text-align: right;
        position: absolute;
        top: 2px;
        right: 5px;
      }

      body {
        font-family: "Courier New", serif;
        color: white;
        text-shadow: 1px 2px green;
        background: url("https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500"), black;
        background-repeat: repeat;
      }

      input[type=text],
      input[type=password] {
        background-color: black;
        text-align: center;
        width: 50%;
        padding: 6px 20px;
        margin: 4px 0;
        display: inline-block;
        border: 1px dotted green;
        box-sizing: border-box;
        color: green;
        border-radius: 7px;
      }

      button {
        background-color: black;
        color: green;
        padding: 6px 20px;
        margin: 4px 0;
        border: 2px double green;
        border-radius: 7px;
        cursor: pointer;
        width: 30%;
      }

      button:hover {
        color: white;
      }

      .imgcon {
        text-align: center;
        margin: 24px 0 12px 0;
      }

      img.im {
        width: 30%;
        border-radius: 90%;
        border: 2px double green;
      }

      .container {
        text-align: center;
        padding: 14px;
      }
    </style>
  </head>
  <body onload="myFunction1()">
    <i id="Ismail" style="display:none;" class="animate-stuff">ii55: Ismail Hendryx</i>
    <i id=title style="display:none;" class="animate-stuff">
      <h4>Welcome to ii55's Login Form</h4>
    </i>
    <form method="post" action='http://raptor.kent.ac.uk/proj/comp5390/kentmart/ii55/index.php/Kentmart/loginsubmit' id=thisform style="display:none;" class="animate-stuff">
      <div class="imgcon">
        <img src="https://i.imgur.com/SSdwp6p.gif" class="im">
      </div>
      <div class="container">
        <input type="text" placeholder="Enter Username" name="username" required>
        <br>
        <input type="password" placeholder="Enter Password" name="password" required>
        <br>
        <button type="submit">Login</button>
      </div>
    </form>
    <i id="myDiv" class="animate-bottom">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <h1>Welcome to Kentmart</h1>
    </i>
    <div id="loader" style="display:none;"></div>
  </body>
  <script>
    var myVar;
    var my2Var;
    var my3Var;
    var my4Var;
    var my5Var;
    var my6Var;

    function myFunction1() {
      document.body.style.backgroundImage = "url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500')";
      myVar = setTimeout(myFunction2, 1000);
    }

    function myFunction2() {
      document.getElementById("loader").style.display = "inline";
      document.body.style.backgroundImage = "url('https://images.pexels.com/videos/3045163/free-video-3045163.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500')";
      my2Var = setTimeout(showPage, 2000);
    }

    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "inline";
      my3Var = setTimeout(showPage1, 4000);
    }

    function showPage1() {
      document.getElementById("myDiv").style.textShadow = "1px 2px green";
      document.getElementById("myDiv").style.fontStyle = "italic";
      my4Var = setTimeout(showPage2, 4000);
    }

    function showPage2() {
      document.getElementById("myDiv").style.animation = "animateout 5s";
      my5Var = setTimeout(showPage3, 3000);
    }

    function showPage3() {
      document.getElementById("myDiv").style.display = "none";
      document.body.style.backgroundImage = "url('https://j.gifs.com/Q1xW4q@large.gif?download=true')";
      my6Var = setTimeout(showPage4, 3000);
    }

    function showPage4() {
      document.getElementById("Ismail").style.display = "inline";
      document.getElementById("title").style.display = "inline";
      document.getElementById("thisform").style.display = "inline";
    }
  </script>
</html>