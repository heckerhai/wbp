<?php
// Initialized month number
$month = 4;

switch ($month) {
    case 1:
        echo "January";
        break;
    case 2:
        echo "February";
        break;
    case 3:
        echo "March";
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "May";
        break;
    case 6:
        echo "June";
        break;
    case 7:
        echo "July";
        break;
    case 8:
        echo "August";
        break;
    case 9:
        echo "September";
        break;
    case 10:
        echo "October";
        break;
    case 11:
        echo "November";
        break;
    case 12:
        echo "December";
        break;
    default:
        echo "Invalid month number.";
}
?>


//⚠️Just in case user input is required
<!DOCTYPE html>
<html>
<head>
  <title>Calendar Program</title>
</head>
<body>

<form method="post">
  Enter month number (1-12): <input type="number" name="month" min="1" max="12"><br><br>
  <input type="submit" name="show" value="Show Month Details">
</form>

<?php
if (isset($_POST['show'])) {
  $month = $_POST['month'];

  switch ($month) {
    case 1:
      echo "January ";
      break;
    case 2:
      echo "February";
      break;
    case 3:
      echo "March";
      break;
    case 4:
      echo "April";
      break;
    case 5:
      echo "May";
      break;
    case 6:
      echo "June";
      break;
    case 7:
      echo "July";
      break;
    case 8:
      echo "August";
      break;
    case 9:
      echo "September";
      break;
    case 10:
      echo "October";
      break;
    case 11:
      echo "November";
      break;
    case 12:
      echo "December";
      break;
    default:
      echo "Invalid month number.";
  }
}
?>

</body>
</html>
