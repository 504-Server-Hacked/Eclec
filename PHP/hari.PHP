<?php
include('pdo1.php');
session_start();
$dataviewing=new Database_Connection();
$equipments = array(
  array(0,0,0,0,0,0),
    array(0,0,0,0,0,0),
  array(0,0,0,0,0,0),
    array(0,0,0,0,0,0),
  array(0,0,0,0,0,0),
    array(0,0,0,0,0,0),
  array(0,0,0,0,0,0),
    array(0,0,0,0,0,0),
  array(0,0,0,0,0,0),
    array(0,0,0,0,0,0),
  array(0,0,0,0,0,0),
    array(0,0,0,0,0,0)
  );
$username = $_SESSION['name'];
echo $username;
$sql = $dataviewing->viewing($username);
$j=0;
$k =$sql->num_rows;
while ($row=mysqli_fetch_array($sql)) {
  ?>
  <?php $equipments[$j][0] = $row['equipment']; ?>
  <?php  $equipments[$j][1] =  $row['min_hrs'];?>
  <?php  $equipments[$j][2] = $row['max_hrs'];?>
  <?php $equipments[$j][3] = $row['priority'];?>
  <?php  $equipments[$j][4] = $row['watt_consumption'];?>
<?php  $equipments[$j][5] = $row['number'];?>
  <?php
  $j = $j+1;
}
?>
<?php
for($i =0;$i<$k;$i++)
{
  echo gettype($i);
  echo $k;
  echo "\n";
  echo $equipments[$i][0];
  echo "\n";
  echo $equipments[$i][1];
  echo "\n";
  echo $equipments[$i][2];
  echo "\n";
  echo $equipments[$i][3];
  echo "\n";
  echo $equipments[$i][4];
  echo "\n";
}
?>

// taking access or data from all the user
<?php
include('pdo1.php');
session_start();
$dataviewing=new Database_Connection();


// you just add the score of all the user to one of the signupid table so that we can access the score to compare to ourself;
$scores = array(0,0,0,0,0,0,0,0,0,0)
 <?php
            $username = $_SESSION['name'];
            $dataviewing=new Database_Connection();
           $sql =  $dataviewing->viewall($username);
		$i=0;
           if($sql->num_rows > 0)
           {
                while($row=mysqli_fetch_array($sql))
                {

                            $scores[$i] = row['score'];
					$i=$i+1;
                }
            }
?>
//$scores will have all the score of person near your locality
