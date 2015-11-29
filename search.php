<!DOCTYPE html>
<html>
<body bgcolor="pink">
<form action="#" method="post">
<br><br>
<h3>SEARCH BASED ON BLOOD GROUP</h3>
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
<button type="submit" name="bloodsearch">Search Blood Group</button>
<br><br>
<?php
if(isset($_POST['bloodsearch']))
{
  $blood = $_POST['bgroup'];
  //$city = $_POST['city'];
  //$hos = $_POST['hospital'];
  $connection = mysql_connect("localhost","root","");
  mysql_select_db("blood", $connection);
  $qry = "Select * from register where blood='$blood'";
  $result = mysql_query($qry,$connection);
  if(!$result || mysql_num_rows($result) <= 0)
  {
      echo "<center>No records found!</center>";      
  }
  else
  {
    echo '<table border="2">';
    echo "<tr>";  
    echo "<th><center> Name </center></th>";
    echo "<th><center> Contact </center></th>";
    echo "<th><center> Blood Group </center></th>";
    echo "<th><center> City </center></th>";
    echo "<th><center> Hospital </center></th>";
    echo "<th><center> Gender </center></th>";
    echo "<th><center> Profession </center></th>";
    echo "</tr>";
                
      while ($row = mysql_fetch_assoc($result)) 
      {
          echo "<tr>";
          echo '<td><center>'.$row["fName"].'</center></td>';
          echo '<td><center>'.$row["contact"].'</center></td>';
          echo '<td><center>'.$row["blood"].'</center></td>';
          echo '<td><center>'.$row["city"].'</center></td>';
          echo '<td><center>'.$row["hospital"].'</center></td>';
          echo '<td><center>'.$row["gender"].'</center></td>';
          echo '<td><center>'.$row["profession"].'</center></td>';
          echo "</tr>"; 
      }
      echo "</table>";
  }
  mysql_close($connection);
}
?>
<hr>
<h3>SEARCH BASED ON CITY</h3>
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
<button type="submit" name="citysearch">Search City</button>
<br><br>
<?php
if(isset($_POST['citysearch']))
{
  $city = $_POST['city'];
  $connection1 = mysql_connect("localhost","root","");
  mysql_select_db("blood", $connection1);
  $qry1 = "Select * from register where city='$city'";
  $result1 = mysql_query($qry1,$connection1);
  if(!$result1 || mysql_num_rows($result1) <= 0)
  {
      echo "<center>No records found!</center>";      
  }
  else
  {
    echo '<table border="2">';
    echo "<tr>";  
    echo "<th><center> Name </center></th>";
    echo "<th><center> contact</center></th>";
    echo "<th><center> Blood Group </center></th>";
    echo "<th><center> City </center></th>";
    echo "<th><center> Hospital </center></th>";
    echo "<th><center> Gender </center></th>";
    echo "<th><center> Profession </center></th>";
    echo "</tr>";
                
      while ($row1 = mysql_fetch_assoc($result1)) 
      {
          echo "<tr>";
          echo '<td><center>'.$row1["fName"].'</center></td>';
          echo '<td><center>'.$row1["contact"].'</center></td>';
          echo '<td><center>'.$row1["blood"].'</center></td>';
          echo '<td><center>'.$row1["city"].'</center></td>';
          echo '<td><center>'.$row1["hospital"].'</center></td>';
          echo '<td><center>'.$row1["gender"].'</center></td>';
          echo '<td><center>'.$row1["profession"].'</center></td>';
          echo "</tr>"; 
      }
      echo "</table>";
  }
  mysql_close($connection1);
}
?>
<hr>
<h3>SEARCH BASED ON HOSPITAL</h3>
<p>Select Your Hospital  here</p><br>
<select name="hospital">
  <option value="Royapettah">Royapettah hospital</option>
  <option value="Appolo">Appolo Hospital</option>
  <option value="Kavayri">Kavayri Hospital</option>
  <option value="Hindu Mission">Hindu Mission Hospital</option>
  <option value=">K.V.S">K.V.S Hospital</option>
  <option value="Hari Health care">Hari's Health care</option>
  <option value="GH">GH hospital</option>
  <option value="Pallavan">Pallavan Hospital</option>
</select>
<button type="submit" name="hossearch">Search Hospital</button>
<br><br>

<?php
if(isset($_POST['hossearch']))
{
  $hos = $_POST['hospital'];
  $connection2 = mysql_connect("localhost","root","");
  mysql_select_db("blood", $connection2);
  $qry2 = "Select * from register where hospital='$hos'";
  $result2 = mysql_query($qry2,$connection2);
  if(!$result2 || mysql_num_rows($result2) <= 0)
  {
      echo "<center>No records found!</center>";      
  }
  else
  {
    echo '<table border="2">';
    echo "<tr>";  
    echo "<th><center> Name </center></th>";
    echo "<th><center> Contact </center></th>";
    echo "<th><center> Blood Group </center></th>";
    echo "<th><center> City </center></th>";
    echo "<th><center> Hospital </center></th>";
    echo "<th><center> Gender </center></th>";
    echo "<th><center> Profession </center></th>";
    echo "</tr>";
                
      while ($row2 = mysql_fetch_assoc($result2)) 
      {
          echo "<tr>";
          echo '<td><center>'.$row2["fName"].'</center></td>';
          echo '<td><center>'.$row2["contact"].'</center></td>';
          echo '<td><center>'.$row2["blood"].'</center></td>';
          echo '<td><center>'.$row2["city"].'</center></td>';
          echo '<td><center>'.$row2["hospital"].'</center></td>';
          echo '<td><center>'.$row2["gender"].'</center></td>';
          echo '<td><center>'.$row2["profession"].'</center></td>';
          echo "</tr>"; 
      }
      echo "</table>";
  }
  mysql_close($connection2);
}
?>
<hr>
</form>
</body>
</html>
