<?php
session_start();
?>
<! Doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <title> Profile page  </title>  
<style>  
input[type=radio] { width:20px; }  
input[type=checkbox]{ width:20px; }  
</head>  
<body>  
<h1> Profile </h1>  
<form method="post" enctype="multipart/form-data" action =?#?>  
<table>  
 <tr>  
    <td colspan="2"> <?php echo @$msg; ?> </td>  
 </tr>  
  <tr>  
    <td width="159"> <b> Enter your Name </b> </td>  
    <td width="218">  
    <input type="text" placeholder="Enter name" id="name" name = "n"  pattern="[a-z A-Z]*" required /> </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Email </b> </td>  
    <td> <input type="email" id="email" name="e"/ placeholder= "Enter Email" > </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Password </b> </td>  
    <td> <input type="password" id="password" name="p"/ placeholder=" Enter Password" > </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Address </b> </td>  
    <td> <textarea name="add" id="add">  Enter Address </textarea> </td>  
  </tr>  
  <tr>  
    <td> <b> Enter your Mobile Number </b> </td>  
    <td> <input type="text" pattern="[0-9]*" id="mobile_no" name="m" / placeholder=" Enter number" > </td>  
  </tr>  
  <tr>  
    <td height="23"> <b> Select your Gender </b> </td>  
    <td>  
    Male <input type="radio" name="g" id="gender" value="m"/>  
    Female <input type="radio" name="g" id="gender" value="f"/>  
    </td>  
  </tr>  
  <tr>  
    <td> <b> Choose your Hobbies </b> </td>  
    <td>  
        Cricket <input type="checkbox" value="cricket" id="hob" name="hobb[]"/>  
        Singing <input type="checkbox" value="singing" id="hob" name="hobb[]"/>  
        Dancing <input type="checkbox" value="dancing" id="hob" name="hobb[]"/>  
    </td>  
  </tr>  
  <tr>  
    <td> <b> Select your Profile Pic </b> </td>  
    <td> <input type="file" id="pic" name="pic"/> </td>  
  </tr>  
  <tr>  
    <td> <b> Select your Date of Birth </b> </td>  
    <td>  
        <select name="mm">  
            <option value=""> Month </option>  
            <?php   
            for($i=1;$i<=12;$i++)  
            {  
            echo "<option value ='$i'>".$i."</option>";  
            }  
            ?>  
        </select>  
        <select name="dd">  
            <option value=""> Date </option>  
            <?php   
            for($i=1;$i<=31;$i++)  
            {  
            echo "<option value ='$i'>".$i."</option>";  
            }  
            ?>  
        </select>  
        <select name="yy">  
            <option value=""> Year </option>  
            <?php   
            for($i=1900;$i<=2015;$i++)  
            {  
            echo "<option value ='$i'>".$i."</option>";  
            }  
            ?>  
        </select>  
    </td>  
  </tr>  
  <tr>  
    <td colspan="2" align="center">  
    <input type ="submit" name="save" value="Register"/>  
    <input type="reset" value="Reset"/>  
    </td>  
  </tr>  
</table>  
</form>  
</body>  
</html>  
<?php  
extract($_POST);  
if(isset($save))  
{  
$dob=$yy."-".$mm."--".$dd;  
$h=implode(",",$hobb);  
$img=$_FILES['pic']['name'];  
if($return)  
{  
$msg="<font color='red'>".ucfirst($e)." already exists choose another email </font>";  
}  
else  
{  
$msg= "<font color='blue'> your data saved </font>";  
}  
}  
?>  