<!DOCTYPE html>
<html>
<body bgcolor="pink">
<form action="#" method="post">
<?php
if(isset($_POST['save']))
{
  $con=mysqli_connect("localhost","root","","blood");
  $fname = $_POST['Name'];
  $lname = $_POST['contact'];
  $blood = $_POST['bgroup'];
  $city = $_POST['city'];
  $hos = $_POST['hospital'];
  $gndr = $_POST['sex'];
  $prof = $_POST['student'];
  $date = $_POST['Date'];

    if(mysqli_query($con,"INSERT into register values ('','$fname','$lname','$blood','$city','$hos','$gndr','$prof','$date')"))
    {
        echo "<center>Data Saved Successfully!</center>";
        echo "<a href=\"insert.php\">Register another person</a>";
    }
    else
    {
       echo "<center>Something went wrong! Please try again!</center>";
       echo mysqli_error($con);
    }
    mysqli_close($con);
    return true;      
}
?>

 Name:<br>
  <input type="text" name="Name" placeholder="Name"><br>
  contact :<br>
  <input type="text" name="contact" placeholder="contact">
<br>
<p>Select Your blood group </p>
<select name="bgroup">
  <option value="o+ve">O+</option>
  <option value="o-ve">O -</option>
  <option value="a+ve">A +</option>
  <option value="a-ve">A -</option>
  <option value="b+ve">B +</option>
  <option value="b-ve">B -</option>
  <option value="ab+ve">AB +</option>
  <option value="ab-ve">AB -</option>
</select>
<p>Select Your city here</p><br>
<select name="city">
  <option value="chennai">chennai</option>
  <option value="Madurai">Madurai</option>
  <option value="Kanchipuram">Kanchipuram</option>
  <option value="ooty">ooty</option>
  <option value="Palani">Palani</option>
  <option value="Pondichery">Pondichery</option>
  <option value="Kanyakumari">Kanyakumari</option>
</select>
<p>Select Your Hospital  here</p><br>
<select name="hospital">
  <option value="Royapettah">Royapettah hospital</option>
  <option value="Appolo">Appolo Hospital</option>
  <option value="Kavayri">Kavayri Hospital</option>
  <option value="Hindu Mission">Hindu Mission Hospital</option>
  <option value="K.V.S">K.V.S Hospital</option>
  <option value="Hari Health care">Hari'S Health care</option>
  <option value="GH">GH hospital</option>
  <option value="Pallavan">Pallavan Hospital</option>
</select>
<p>Please select your gender</p>
<input type="radio" name="sex" value="male" checked>Male<br>
<input type="radio" name="sex" value="female">Female<br>
<p>Your Profession</p>
<input type="radio" name="student" value="studying" checked>I am student <br>
<input type="radio" name="student" value="job">I am doing my job
<br>
<p>Date</p>
<input type="date" name="Date" placeholder="(YYYY/MM/DD)"><br><br><br>
<button type="submit" name="save">Submit!</button> 
</form>
</body>
</html>