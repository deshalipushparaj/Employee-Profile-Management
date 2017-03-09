<html>
<head>
<title>EMPLOYEE DATA INSERTION</TITLE>
</head>
<body bgcolor="lightyallow">
 <fieldset>
  <legend>EMPLOYEE PERSONAL DATA</legend>
   <Form name="data" method="POST" action="insertquery.php">
    <center><u><h1>JAAN INDIA TECH PVT LTD</H1></u></center>
     <font face="comicsans" size=5 color=blue>
      <pre><b><i><ol>
	<li>NAME OF THE EMPLOYEE:<INPUT type="text" name="name" value=""><br></li>
	<li>EMPLOYEE ID:<input type ="text"name="id"></textarea></li><br>
	<li>DATE OF BIRTH<input type="TEXT" name="dob" value=""><br>
	<li>GENDER:	<INPUT type="radio" name="gender">FEMALE<br>
	<INPUT type="radio" name="gender">MALE<br>
	<li>DATE OF JOINING:<INPUT TYPE="text" name="join" VALUE=""><br>
	<li>DATE OF LEAVING:<INPUT TYPE="TEXT"NAME="leave" VALUE=""><BR>
	<li>DESIGNATION:<select name="design">
			<option value="senior software engineer">SENIOR SOFTWARE ENGINEER</option>
			<option value="software engineer">SOFTWARE ENGINEER</option>
			<option value="software developer">SOFTWARE DEVELOPER</option>
			<option value="PROGRAMMER ANALYST">PROGRAMMER ANALYST</option>
			<option value="SOFTWARE TESTING OFFICER">SOFTWARE TESTING OFFICER</option>
			<option value="QUALITY TESTING OFFICER">QUALITY TESTING OFFICER</option>
			<option value="TEAM LEADER">TEAM LEADERMN</option>
			</select><br></li>
	<LI>QUALIFICATION:<INPUT TYPE="TEXT" NAME="QUALI" VALUE=""><BR>
	<LI>RESIDING ADDRESSS:<textarea ros="100" cols="50" name="add" value=""></textarea>	
	<li>NATIVITY<select name="nativity">
			<option value="nativity">AUSTRALIA</option>
			<option value="nativity">BEHRAIN</option>
			<option value="nativity">CANADA</option>
			<option value="nativity">DENMARK</option>
			<option value="nativity">ENGLAND</option>
			<option value="nativity">FRANCE</option>
			<option value="nativity">GERMANY</option>
			<option value="nativity">INDIA</option>
			<option value="nativity">JAPAN</option>
			<option value="nativity">KENYA</option>
			<option value="nativity">LONDON</option>
			</select><br></li>
	<li>PHONE NUMBER:<INPUT type="text" name="phno"value=""></li>
					<input type="submit" name="INSERT" value="INSERT">
					<INPUT TYPE="SUBMIT" NAME="RESET" VALUE="RESET">
      </ol>			
    </b></i>
   </pre>
  </font>
 </body>
</form>
</html>

