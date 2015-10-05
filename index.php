<!doctype HTML>
<html lang="en">
<head>

  <!-- jquery --> 
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

   <script src="https://cdn.firebase.com/js/client/2.2.1/firebase.js"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>

  <!-- weather --> 
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.0.2/jquery.simpleWeather.min.js"></script>


  <style type="text/css">

  /***** Gauge starts here *****/

    /*Centering the gauge*/
    #canvas {
      display: block;
      width: 300px;
      margin: 100px auto;
    }

    /*Custom font for numbers*/
    @font-face {
      font-family: "bebas";
      src: url("http://thecodeplayer.com/uploads/fonts/BebasNeue.otf");
    }

   /***** Gauge ends here *****/

  /***** CLOCK STARTS HERE ****/
   
a { 
  text-decoration:none; 
  color:#00c6ff;
}

h1 {
  font: 4em normal Arial, Helvetica, sans-serif;
  padding: 0px; 
  margin: 0px;
  text-align:center;
}

h1 small{
  font: 0.2em normal  Arial, Helvetica, sans-serif;
  text-transform:uppercase; letter-spacing: 0.2em; line-height: 5em;
  display: block;
}

h2 {
    font-weight:700;
    color:#bbb;
    font-size:20px;
}

h2, p {
  margin-bottom:10px;
}

@font-face {
    font-family: 'BebasNeueRegular';
    src: url('BebasNeue-webfont.eot');
    src: url('BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
         url('BebasNeue-webfont.woff') format('woff'),
         url('BebasNeue-webfont.ttf') format('truetype'),
         url('BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
    font-weight: normal;
    font-style: normal;

}

.container {margin: 0 auto; overflow: hidden;}

.clock {margin:0 auto; padding:30px; color:#000; }

#Date { font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; font-size:18px; text-align:center; text-shadow:0 0 5px #00c6ff; }

ul { width:800px; margin:0 auto; padding:0px; list-style:none; text-align:center; }
ul li { display:inline; font-size:4em; text-align:center; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; text-shadow:0 0 5px #00c6ff; }

#point { position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite; padding-left:10px; padding-right:10px; }

@-webkit-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }  
}


@-moz-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }  
}

  /***** CLOCK ENDS HERE ******/

  /***** WEATHER STARTS HERE ******/

  @font-face {
    font-family: 'weather';
    src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/artill_clean_icons-webfont.eot');
    src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/artill_clean_icons-webfont.eot?#iefix') format('embedded-opentype'),
         url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/artill_clean_icons-webfont.woff') format('woff'),
         url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/artill_clean_icons-webfont.ttf') format('truetype'),
         url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/93/artill_clean_icons-webfont.svg#artill_clean_weather_iconsRg') format('svg');
    font-weight: normal;
    font-style: normal;
}




#weather {
  margin: 0px auto;
  text-align: center;
  text-transform: uppercase;
}

i {
  color: #000;
  font-family: weather;
  font-size: 64px;
  font-weight: normal;
  font-style: normal;
  line-height: 1.0;
}

.icon-0:before { content: ":"; }
.icon-1:before { content: "p"; }
.icon-2:before { content: "S"; }
.icon-3:before { content: "Q"; }
.icon-4:before { content: "S"; }
.icon-5:before { content: "W"; }
.icon-6:before { content: "W"; }
.icon-7:before { content: "W"; }
.icon-8:before { content: "W"; }
.icon-9:before { content: "I"; }
.icon-10:before { content: "W"; }
.icon-11:before { content: "I"; }
.icon-12:before { content: "I"; }
.icon-13:before { content: "I"; }
.icon-14:before { content: "I"; }
.icon-15:before { content: "W"; }
.icon-16:before { content: "I"; }
.icon-17:before { content: "W"; }
.icon-18:before { content: "U"; }
.icon-19:before { content: "Z"; }
.icon-20:before { content: "Z"; }
.icon-21:before { content: "Z"; }
.icon-22:before { content: "Z"; }
.icon-23:before { content: "Z"; }
.icon-24:before { content: "E"; }
.icon-25:before { content: "E"; }
.icon-26:before { content: "3"; }
.icon-27:before { content: "a"; }
.icon-28:before { content: "A"; }
.icon-29:before { content: "a"; }
.icon-30:before { content: "A"; }
.icon-31:before { content: "6"; }
.icon-32:before { content: "1"; }
.icon-33:before { content: "6"; }
.icon-34:before { content: "1"; }
.icon-35:before { content: "W"; }
.icon-36:before { content: "1"; }
.icon-37:before { content: "S"; }
.icon-38:before { content: "S"; }
.icon-39:before { content: "S"; }
.icon-40:before { content: "M"; }
.icon-41:before { content: "W"; }
.icon-42:before { content: "I"; }
.icon-43:before { content: "W"; }
.icon-44:before { content: "a"; }
.icon-45:before { content: "S"; }
.icon-46:before { content: "U"; }
.icon-47:before { content: "S"; }

.weather-location-wind {
  color: #000;
  font-size: 24px;
}

#weather h2 {
  margin: 0 0 8px;
  color: #000;
  font-size: 48px;
  font-weight: 300;
  text-align: center;
  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
}

#weather ul {
  margin: auto;
  padding: 0;
  text-align: center;
}

#weather li {
  background: #fff;
  background: rgba(255,255,255,0.90);
  padding: 20px 20px 10px;
  display: inline-block;
  border-radius: 5px;
}

#weather .currently {
  margin: 0 20px;
}

  /***** WEATHER ENDS HERE *****/

  /***** sliders start here *****/ 

  input[type=range][orient=vertical]
{
    writing-mode: bt-lr; /* IE */
    -webkit-appearance: slider-vertical; /* WebKit */
    width: 8px;
    height: 460px;
    padding: 0 5px;
}

input[type=button]
{
  color: #000;
  margin-left: 10px;
  font-weight: 300;
  border-radius: 5px;
  padding-bottom: 0px;
  text-shadow:0 0 2px #00c6ff;
}

  /**** sliders end here *****/
    body {
      color: black;
      background-size: cover;
      background-repeat: no-repeat;
      background-image: url(/images/background.jpg);
      font:bold Arial, Helvetica, sans-serif;
  }

    h1.welcome-message {
      margin-left: 1em;
      margin-top: 1em;
      text-align: center; 

    }

    p.loading-message {

      text-align: center;
      font-style: italic;
      font-size: 14px;
      color: black;
      line-height: 200%;
    }

    .clear-space-horizontal {

        height: 20px;
        width: 100%;
    }

  </style>

 

  <script type="text/javascript">
$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create a newDate() object
 newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year    
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
  // Create a newDate() object and extract the seconds of the current time on the visitor's
  var seconds = new Date().getSeconds();
  // Add a leading zero to seconds value
  $("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
  },1000);
  
setInterval( function() {
  // Create a newDate() object and extract the minutes of the current time on the visitor's
  var minutes = new Date().getMinutes();
  // Add a leading zero to the minutes value
  $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
  
setInterval( function() {
  // Create a newDate() object and extract the hours of the current time on the visitor's
  var hours = new Date().getHours();
  // Add a leading zero to the hours value
  $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);
  
}); 

   // Docs at http://simpleweatherjs.com
$(document).ready(function() {
  $.simpleWeather({
    location: 'Redwood City, CA',
    woeid: '',
    unit: 'f',
    success: function(weather) {
      html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
      html += '<ul><li><p class="weather-location-wind">'+weather.city+', '+weather.region+'</p></li>';
      html += '<li class="currently"><p class="weather-location-wind">'+weather.currently+'</p></li>';
      html += '<li><p class="weather-location-wind">'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</p></li></ul>';
  
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});


  /***** Mercedes API Starts Here ******/

  
(function poll() {
    $.ajax({
        url: "http://172.31.99.5/vehicle",
        type: "GET",
        success: function(data) {
            // do something here
           
            console.log(data);

            battery_level = data.Battery_Level;



var div1=d3.select(document.getElementById('div1'));
    var div2=d3.select(document.getElementById('div2'));
    var div3=d3.select(document.getElementById('div3'));
    var div4=d3.select(document.getElementById('div4'));

    start();

    function onClick1() {
        deselect();
        div1.attr("class","selectedRadial");
    }

    function onClick2() {
        deselect();
        div2.attr("class","selectedRadial");
    }

    function onClick3() {
        deselect();
        div3.attr("class","selectedRadial");
    }

    function labelFunction(val,min,max) {

    }

    function deselect() {
        div1.attr("class","radial");
        div2.attr("class","radial");
        div3.attr("class","radial");
    }

    function start() {

        var rp1 = radialProgress(document.getElementById('div1'))
                .label("ELEVATION")
                .onClick(onClick1)
                .diameter(150)
                .value(battery_level)
                .render();

        var rp2 = radialProgress(document.getElementById('div2'))
                .label("FUEL LEVEL")
                .onClick(onClick2)
                .diameter(150)
                .value(132)
                .render();

        var rp3 = radialProgress(document.getElementById('div3'))
                .label("INDOOR HUMIDITY")
                .onClick(onClick3)
                .diameter(150)
                .minValue(100)
                .maxValue(200)
                .value(150)
                .render();

    }
        },
        dataType: "json",
        crossDomain: true,
        complete: setTimeout(function() {poll()}, 2000),
        timeout: 10000
    })
})();

/***** Mercedes API Ends Here ******/


  

</script>

<script type="text/javascript" src="scripts/d3.min.js"></script>
    <script type="text/javascript" src="scripts/radialProgress.js"></script>

    <link type="text/css" rel="stylesheet" href="styles/style.css">

    <style>

        #test .arc2 {
            stroke-weight:0.1;
            fill: #3660b0;
        }

        #outer {
            background: rgba(265,265,265,0.4);
            border-radius: 5px;
            margin: auto;
            width: 850px;
            
        }

        #div1, #div2, #div3, #div4 {
            width: 33%;
            height: 300px;
            box-sizing: border-box;
            float: left;
        }

        #div2 .arc {
            stroke-weight: 0.1;
            fill: #f0a417;
        }

        #div2 .arc2 {
            stroke-weight: 0.1;
            fill: #b00d08;
        }

        #div3 .arc {
            stroke-weight: 0.1;
            fill: #1d871b;
        }


        .selectedRadial {
            border-radius: 3px;
            background: #f4f4f4;
            color: #000;
            box-shadow: 0 1px 5px rgba(0,0,0,0.4);
            -moz-box-shadow: 0 1px 5px rgba(0,0,0,0.4);
            border: 1px solid rgba(200,200,200,0.85);
        }

        .radial {
            border-radius: 3px;
            background: #FFFFFF;
            color: #000;

        }


    </style>

<link rel="canonical" href="http://www.alessioatzeni.com/wp-content/tutorials/jquery/CSS3-digital-clock/index.html" />
</head>
<body>


          <div class="container">
        <div class="clock">
        <div id="Date"></div>

        <ul>
          <li id="hours"> </li>
            <li id="point">:</li>
            <li id="min"> </li>
            <li id="point">:</li>
            <li id="sec"> </li>
        </ul>
        </div>
       </div>
        <div id="weather"></div>
  <div>
   


  </div>
   <?php  // include 'loading_menu_screen.php'; ?>

   <div id="status">
   <br><br>
   <h1 align="center"> None in driving seat.</h1>
   </div>


   <div id="dashboard" style="display:none">
   <br><br>
   <h2 align="center"> Welcome again Clay!</h2>
   <?php include 'controls_menu.php'; ?>
   </div>

   


     
      <div id='outer' style="margin: 0px auto; margin-top:20px; padding:10px">
    <div id="main" style="width:1000px; height:200px; margin: 0px auto; ">
        <div id="div1"></div>
        <div id="div2"></div>
        <div id="div3"></div>
        <div id="div4"></div>
    </div>
</div>


</body>
</html>






<!-- CHAT MARKUP -->
<div class="example-chat l-demo-container">
  <header>Firebase Chat Demo</header>

  <div class='example-chat-toolbar'>
    <label for="nameInput">Username:</label>
    <input type='text' id='nameInput' placeholder='enter a username...'>
  </div>

  <ul id='example-messages' class="example-chat-messages"></ul>

  <footer>
    <input type='text' id='messageInput'  placeholder='Type a message...'>
  </footer>
</div>

<!-- CHAT JAVACRIPT -->
<script>

  function checkstatus(){
  
  // CREATE A REFERENCE TO FIREBASE
  var messagesRef = new Firebase('https://facerecognition.firebaseio.com/');

  // REGISTER DOM ELEMENTS
  var messageField = $('#messageInput');
  var nameField = $('#nameInput');
  var messageList = $('#example-messages');

  // LISTEN FOR KEYPRESS EVENT
  messageField.keypress(function (e) {
    if (e.keyCode == 13) {
      //FIELD VALUES
      var username = nameField.val();
      var message = messageField.val();

      //SAVE DATA TO FIREBASE AND EMPTY FIELD
      messagesRef.push({name:username, text:message});
      messageField.val('');
    }
  });

  // Add a callback that is triggered for each chat message.
  messagesRef.limitToLast(10).on('value', function (snapshot) {
    //GET DATA
    var data = snapshot.val();
    var username = data.status;
    var message = data.status;

      if (data.status==true) {
          $("#dashboard").show();
          $("#status").hide();

      }

      if (data.status==false) {
          $("#dashboard").hide();
          $("#status").show();
      }

    //CREATE ELEMENTS MESSAGE & SANITIZE TEXT
    var messageElement = $("<li>");
    var nameElement = $("<strong class='example-chat-username'></strong>")
    nameElement.text(username);
    messageElement.text(message).prepend(nameElement);

    //ADD MESSAGE
    messageList.append(messageElement)

    //SCROLL TO BOTTOM OF MESSAGE LIST
    messageList[0].scrollTop = messageList[0].scrollHeight;
  });
    }

    checkstatus();


</script>
