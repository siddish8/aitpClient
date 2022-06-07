<?php require "templates/header.php"; ?>
<style>
  body{
    padding:2px;
  }
  table{
    width: 50%;
    font-weight: 700;
  }
  button {
    max-width: 150px;
    background-color: coral;
    border-radius: 5px;
    padding: 5px;
    color: white;
}
[type="checkbox"],[type="radio"]{
  accent-color: gold;
}
  #firstdiv, #thirddiv{
    width: 100%;
    display: flex;
    border: 1px solid;
    padding: 5px;
    background: springgreen;
    border-radius: 5px 25px;
  }
  #labelsdiv, #textdiv{
    width: 50%;
    color: chocolate;
    font-weight: 700;
    display: inline-grid;
    border-right: 3px solid darkmagenta;
  }
  #buttonsdiv, #radiocheckdiv{
    width: 50%;
    display: flex;
    padding: 5px;
    align-content: space-around;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
  }

  #seconddiv,#fourthdiv{
    width: 100%;
    background: darkcyan;
    padding: 5px;
    border: 1px solid;
    border-radius: 25px 5px;
    display: flex;
    align-content: space-between;
    justify-content: space-around;
    align-items: stretch;
    flex-wrap: wrap;
    flex-direction: row;
  }
  .phead{
    font-style: italic;
    color: aqua;
  }
  .plist{
    border-bottom: 1px solid beige;
    color: darkred;
    display: flex;
    flex-wrap: wrap;
    align-content: space-around;
    justify-content: space-around;
    align-items: flex-start;
  }

  #HTMLbutton, #CSSbutton, #JavaScriptbutton, #HTMLinputbutton, #CSSinputbutton, #JavaScriptinputbutton{
    display:none;
  }
  </style>
<h2>CHECK</h2>

  <div id="firstdiv">
<table>
  <tbody>
    <tr>
      <td>Class: <span id="td1"></span></td>
      <td>Reange: <span id="td2"></span></td>
    </tr>
    <tr>
      <td>Xyz: <span id="td3"></span></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr></tr>
</tbody>
</table>
</div>


<div id="seconddiv">
<div id="labelsdiv">
<label id="labelFirst" for="firstname">First Name</label>
<br>
<label id="labelLast" for="firstname">Last Name</label>
<br>
</div>
<div id="buttonsdiv">
<button onclick="show('first')">Show only First</button>
<br>
<button onclick="show('last')">Show only Last</button>
<br>
<button onclick="show('none')">Show None</button>
<br>
<button onclick="show()">Show All</button>
</div>
</div>

<div id="thirddiv">
  <div id="textdiv">
    <p id="radioText"></p>
   <button id="HTMLbutton">HTML</button>
   <button id="CSSbutton">CSS</button>
   <button id="JavaScriptbutton">JavaScript</button>
   <input type="button" id="HTMLinputbutton" value="HTML" />
   <input type="button" id="CSSinputbutton" value="CSS" />
   <input type="button" id="JavaScriptinputbutton" value="JavaScript" />
  </div>
  <div id="radiocheckdiv">
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">HTML</label><br>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <label for="css">CSS</label><br>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  <label for="javascript">JavaScript</label>
<input type="radio" id="none" name="fav_language" value="">
  <label for="none">None</label>
<br>


  </div>
</div>
<div id="fourthdiv">
<div id="textdiv">
  
    <!-- <p id="checkText"></p> -->
    <input type="hidden" id="hiddencheckText"></p>
    <p class="phead">Visibilities</p>
    <ul class="plist">
      <li id="vBike" class="visible">Bike1</li>
      <li id="vCar" class="visible">Car1</li>
      <li id="vBoat" class="visible">Boat1</li>
    </ul>
    <p class="phead">Displays</p>
    <p class="plist">
      <span id="dBike" class="visible">Bike2</span>
      <span id="dCar" class="visible">Car2</span>
      <span id="dBoat" class="visible">Boat2</span>
    </p>
    <p class="phead">Opacities</p>
    <p class="plist">
      <span id="oBike" class="visible">Bike3</span>
      <span id="oCar" class="visible">Car3</span>
      <span id="oBoat" class="visible">Boat3</span>
    </p>
    <p class="phead">Enable/Disable</p>
    <p class="plist">
      <input type="text" id="eBike" class="visible" value="Bike4"/>
      <input type="text" id="eCar" class="visible" value="Car4"/>
      <input type="text" id="eBoat" class="visible" value="Boat4"/>
    </p>
  </div>
  <div id="radiocheckdiv">
  <input type="checkbox" id="vehicle1" name="vehicle1" checked="checked" value="Bike">
<label for="vehicle1"> Bike</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" checked="checked" value="Car">
<label for="vehicle2"> Car</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" checked="checked" value="Boat">
<label for="vehicle3"> Boat</label><br>
</div>
</div>
<script>
document.addEventListener('input',(e)=>{

if(e.target.getAttribute('name')=="fav_language"){
  console.log(e.target.value)
document.getElementById("radioText").innerText=e.target.value;
alert(e.target.value);
document.getElementById("HTMLbutton").style.display="none";
document.getElementById("CSSbutton").style.display="none";
document.getElementById("JavaScriptbutton").style.display="none";

document.getElementById("HTMLinputbutton").style.display="none";
document.getElementById("CSSinputbutton").style.display="none";
document.getElementById("JavaScriptinputbutton").style.display="none";

if(document.getElementById("HTMLbutton2")){
  document.getElementById("HTMLbutton2").remove();
}
if(document.getElementById("CSSbutton2")){
  document.getElementById("CSSbutton2").remove();
}
if(document.getElementById("JavaScriptbutton2")){
  document.getElementById("JavaScriptbutton2").remove();
}

if(document.getElementById("HTMLinputbutton2")){
  document.getElementById("HTMLinputbutton2").remove();
}
if(document.getElementById("CSSinputbutton2")){
  document.getElementById("CSSinputbutton2").remove();
}
if(document.getElementById("JavaScriptinputbutton2")){
  document.getElementById("JavaScriptinputbutton2").remove();
}

if(e.target.value==""){

}else{
  var node = document.createElement("BUTTON");                 // Create a <li> node
var textnode = document.createTextNode(e.target.value+"2");
node.id=e.target.value+"button2";         // Create a text node
node.appendChild(textnode); 

var node2 = document.createElement("INPUT");                 // Create a <li> node
//var textnode = document.createTextNode(e.target.value);
node2.id=e.target.value+"inputbutton2";
node2.type="text";
node2.value=e.target.value+"2";         // Create a text node
//node.appendChild(textnode);

  document.getElementById(e.target.value+"button").style.display="block";
  document.getElementById(e.target.value+"inputbutton").style.display="block";

  document.getElementById("radioText").appendChild(node);
  document.getElementById("radioText").appendChild(node2);
}


}

if(e.target.getAttribute('type')=="checkbox"){
  console.log(e.target.checked)
//document.getElementById("checkText").innerText=e.target.value;
document.getElementById("hiddencheckText").value=e.target.value;
//alert(e.target.value);
checkWork(e.target.value,e.target.checked);
}

})

function checkWork(id,val){

  if(val){
    //checked
    document.getElementById("v"+id).style.visibility="visible";
    document.getElementById("d"+id).style.display="block";
    document.getElementById("o"+id).style.opacity=1;
    document.getElementById("e"+id).disabled=false;

  }else{
    //not checked
    document.getElementById("v"+id).style.visibility="hidden";
    document.getElementById("d"+id).style.display="none";
    document.getElementById("o"+id).style.opacity=0.2;
    document.getElementById("e"+id).disabled=true;
  }

}

function show(prop){
  switch(prop){
    case "first":
      document.getElementById("labelFirst").style.display="block";
  document.getElementById("labelLast").style.display="none";
  document.getElementById("td1").innerText="sbnd";
  document.getElementById("td2").innerText="a123";
  document.getElementById("td3").innerText="";
    break;
    case "last":
      document.getElementById("labelFirst").style.display="none";
  document.getElementById("labelLast").style.display="block";
  document.getElementById("td1").innerText="";
  document.getElementById("td2").innerText="";
  document.getElementById("td3").innerText="poi9";
    break;
    case "none":
      document.getElementById("labelFirst").style.display="none";
  document.getElementById("labelLast").style.display="none";
  document.getElementById("td1").innerText="";
  document.getElementById("td2").innerText="";
  document.getElementById("td3").innerText="";
    break;
    case "all":
    default:
    document.getElementById("labelFirst").style.display="block";
  document.getElementById("labelLast").style.display="block";
  document.getElementById("td1").innerText="5674";
  document.getElementById("td2").innerText="9087";
  document.getElementById("td3").innerText="67889";
  }
  
}

</script>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>