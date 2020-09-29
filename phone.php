<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Android phone review from</title>
</head>
<body>

<form action="phonecont.php" method="post">
	<label>phone name</label>
	<input type="text" name="phonename">
<br>
	<label>phone display Type</label>
	<select name="phonedisplay">
    <option value="IPS LCD">IPS LCD</option>
    <option value="LTPS IPS LCD">LTPS IPS LCD</option>
    <option value="AMOLED">AMOLED </option>
    <option value="Super AMOLED ">Super AMOLED </option>
    <option value="Dynamic AMOLED ">Dynamic AMOLED </option>
    <option value="Super AMOLED Plus ">Super AMOLED Plus </option>
    <option value="OLED">Audi</option>
  </select>
	<label>phone display size</label>
	<input type="text" name="phonedisplaysize">Inhes
	<label>phone display resol</label>
	<input type="text" name="phonedisplayresol">
	<br>
	<label>phone processor name </label>
	<input type="text" name="phoneprocessor">
     <label>phone gpu name </label>
	<input type="text" name="phonegpu">
<br>
	<label>phone battery Mah </label>
	<select name="phonebattarymah">
	 <option value="5000">5000</option>
	 <option value="4500">4500</option>
	 <option value="4000">4000</option>
    <option value="3500">3500</option>
    <option value="3400">3400</option>
     <option value="3000">3000</option>
   
  </select>mAh 
	<label>phone battery WATT </label>
	<input type="text" name="phonebattarywatt">W 
   
<br>
<label>phone main camera numbers</label>
<select name="phonecamerano">
	 <option value="Single">Single</option>
	 <option value="Double">Double</option>
	 <option value="Triple">Triple</option>
    <option value="Quad">Quad</option>
   
  </select>
  <label>phone front camera numbers</label>
<select name="phonefcamerano">
	 <option value="Single">Single</option>
	 <option value="Double">Double</option>
	 <option value="Triple">Triple</option>
    <option value="Quad">Quad</option>
   
  </select>
<label>phone camera</label>
<input type="text" name="phonecamera">
	


<br>
<label>phone game</label>
<input type="text" name="phonegame">
<label>phone game setting</label>
<select name="phonegamesetting">
	 <option value="Low">Low</option>
	 <option value="Medium">Medium</option>
	 <option value="High">High</option>
    <option value="Very High">Very High</option>
     <option value="Ultra">Ultra</option>
   
  </select>
	


<br>
	<input type="submit" name="send" value="send">
</form>
</body>
</html>