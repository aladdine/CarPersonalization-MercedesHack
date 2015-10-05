<style type="text/css">
input[type=range][orient=vertical]
{
    writing-mode: bt-lr; /* IE */
    -webkit-appearance: slider-vertical; /* WebKit */
    width: 8px;
    height: 460px;
    padding: 0 5px;
}

input[type=range][orient=horizontal]
{
    
    width: 400px;
    height: 8px;
   
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

</style>

<div style="margin: auto; text-align: center; padding: 20px;">

<div style="padding: 50px;">

Type of Car: 
<select id="brand">

  <option value="cla" selected>CLA</option>
  <option value="c-class-sedan">C-Class Sedan</option>
  <option value="e-class-sedan">E-Class Sedan</option>
  <option value="s-class-sedan">S-Class Sedan</option>
  <option value="c-class-sedan">C-Class Coupe</option>
  <option value="e-class-coupe">E-Class Coupe</option>
  <option value="s-class-coupe">S-Class Coupe</option>
  <option value="cls-coupe">CLS Coupe</option>
  <option value="gla-suv">GLA SUV</option>
  <option value="glk-suv">GLK SUV</option>

</select> 

<input type="button" id="submit" value="submit">
</div>


<div style="margin: auto; align: center;">
<table border="0px;" width="100%;" align="center">
  <tr>
    <td width="30%">
        <div style="margin: auto; text-align: center; width: 500px; height: 500px; background-image: url(/images/car-seat.jpg);"></div>
    </td>
    <td width="5%"> <form oninput="vamount.value=vertical.value">
<div style="padding: 20px; height: 500px;">
<input type=range min=0 max=100 value=35 orient=vertical name=vertical id=vertical>
</div>
     </td>
     <td width="5%" align="left">
<output style="font-size: 32px; color: #fff;" name="vamount" id="vamount">35</output></form>  
    </td>

     <td width="50%" bgcolor="orange" align="center"> 
     <h3>Temperature</h3>
     <form oninput="tamount.value=temperature.value + 'F'">
<div style="padding: 20px; width: 400px;">
<input type=range min=40 max=120 value=70 orient=horizontal id=temperature name=temperature>
</div>
  
<output style="font-size: 32px; color: #fff;" name="tamount">70F</output></form> 
      <hr>
      <h3>Roof</h3>
     <form oninput="ramount.value=roof.value">
<div style="padding: 20px; width: 400px;">
<input type=range min=0 max=5 value=3 orient=horizontal id=roof name=roof>
</div>
  
<output style="font-size: 32px; color: #fff;" name="ramount">3</output></form> 

       <hr>

      <h3>Volume</h3>
     <form oninput="vamount.value=volume.value">
<div style="padding: 20px; width: 400px;">
<input type=range min=0 max=120 value=50 orient=horizontal id=volume name=volume>
</div>
  
<output style="font-size: 32px; color: #fff;" name="vamount">50</output></form> 

     

    </td>
    
  </tr>
   
   <tr>

   
    <td>
      <form oninput="hamount.value=horizontal.value">
        <div style="padding: 20px; width: 500px; margin: auto;">
        <input type=range min=0 max=100 value=15 orient=horizontal name=horizontal id=horizontal> <br>
        <output style="font-size: 32px; color: #fff;" name="hamount">15</output>
        </div>
        </form>
    </td>
    <td>


    </td>
  </tr>
</table>
</div>

</div>


<!-- CHAT MARKUP -->
<div class="example-chat l-demo-container">


 

<!-- CHAT JAVACRIPT -->
<script>
  // CREATE A REFERENCE TO FIREBASE
  var messagesRef = new Firebase('https://personalized-car.firebaseio.com/');

  // REGISTER DOM ELEMENTS
  var submitBtn = $('#submit');
  var nameField = $('#brand');
  var messageList = $('#example-messages');
  var temperature = $('#temperature');
  var roof = $('#roof');
  var volume = $('#volume');
  var vertical = $('#vertical');
  var horizontal = $('#horizontal');
  var userid = "123";
  var weathertemp = "115";
  var city = "Redwood City, CA";
  var destination = "San Francisco, CA";



  // LISTEN FOR KEYPRESS EVENT
  submitBtn.click(function (e) {
    
      //FIELD VALUES
      var username = nameField.val();
      var message = new Date().getDate() + "/" + new Date().getMonth() + "/" + new Date().getFullYear();
      var time = new Date().getHours() + ":" + new Date().getMinutes() + ":" + new Date().getSeconds();
      var temp = temperature.val();
      var roofang = roof.val();
      var vol = volume.val();
      var seatpositionvertical = vertical.val();
      var seatpositionhorizontal = horizontal.val();
      var user = userid;
      var outsidetemp = weathertemp;
      var image = "link goes here";
      var id = new Date().getDate() + new Date().getMonth() + new Date().getFullYear() + new Date().getHours() + new Date().getMinutes() + new Date().getSeconds();
      




      //SAVE DATA TO FIREBASE AND EMPTY FIELD
      messagesRef.push({car:username, day:message, time:time, temp:temp, roofang:roofang, vol:vol, seatpositionvertical:seatpositionvertical, seatpositionhorizontal:seatpositionhorizontal, user:user, outsidetemp:outsidetemp, city:city, id:id, image:image, destination:destination});
      messageField.val('');
    
  });

</script>