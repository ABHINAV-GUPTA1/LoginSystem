<?php require_once('Connections/User_Information.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_User_Information, $User_Information);
$query_formdata = "SELECT * FROM users ORDER BY user_id ASC";
$formdata = mysql_query($query_formdata, $User_Information) or die("Error Please try again later");
$row_formdata = mysql_fetch_assoc($formdata);
$totalRows_formdata = mysql_num_rows($formdata);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="E:\bootstrap\include\js\bootstrap.js" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
  <center><h1>Record BY ABHINAV GUPTA</h1></center>
<table class="table table-hover">
<thead>
<tr>
    <td>UserName</td>
    <td>Password</td>
    <td>Email</td>
  </tr>
</thead>
<tbody>
  <?php do { ?>
    <tr>
      <td><?php echo $row_formdata['username']; ?></td>
      <td><?php echo $row_formdata['PASSWORD']; ?></td>
      <td><?php echo $row_formdata['email']; ?></td>
    </tr>
</tbody>
    <?php } while ($row_formdata = mysql_fetch_assoc($formdata)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($formdata);
?>
