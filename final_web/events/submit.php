<?php
$error = '';
$message='';
if(isset($_POST['submit'])) 
// if statement to check if the user entered any deetails in the provided fields
{
  if(empty($_POSR['name']))
  {
    $error = "<label class = 'text-danger'>Please make sure the fields are filled</lable>";

  }
  else if (empty($_POST['organiser']))
  {
    $error = "<label class = 'text-danger'>Please make sure the fields are filled</lable>";
  }
  else if (empty($_POST['date']))
  {
    $error = "<label class = 'text-danger'>Please make sure the fields are filled</lable>";
  }
  else if (empty($_POST['time']))
  {
    $error = "<label class = 'text-danger'>Please make sure the fields are filled</lable>";
  }
  else if (empty($_POST['summary']))
  {
    $error = "<label class = 'text-danger'>Please make sure the fields are filled</lable>";
  }
  else
  // if all provided fields have details in them then run this 
  {
    if(file_exists('list.json'))
    {
      // finds the already exisating json file if not make a new one 
      $current_data = file_get_contents('list.json');
      $arra_data=json_decode($current_data, true);
      $extra = array(
        // create a new array in which the order of the input data is arranged 
        'name' => $_POST['name'],
        'organiser'=>$_POST['organiser'],
        'date' =>$_POST['date'],
        'time' =>$_POST['time'],
        'summary' =>$_POST['summary']
      );
      // store the new data in a new variable which is then appended onto the json file 
      $array_data[] = $extra;
      $end_data = json_encode($array_data);
      if(file_put_contents('list.json', $end_data))
      {
        $message = "<label class='text-success'>Event Successfullyt Added</p>";
      }

    }
    else
    {
    $error = 'This file is no where to be found';
    }
  }
}

?>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- collection form for adding new events -->
  <h1>Event Collection Form</h1>
  <form method ="post">
    <!-- php code to display error message -->
  <?php  
  if(isset($error))
    {
      echo $error;
    }
    ?>
    <!-- details collecttion form  -->
    name 
    <input type="text" name ="name" class ="form-con"><br>
    <br>
    organiser
    <input type = "text" name ="organiser" class = "form-con"><br>
    <br>
    Date
    <input type = "text" name ="date" class = "form-con"><br>
    <br>
    time
    <input type = "text" name ="time" class = "form-con"><br>
    <br>
    Breif Summary
    <input type = "text" name ="summary" class = "form-con">
    <br>
    <br>
    <input type ="submit" name="submit" value ="Append" class ="btn"> 
    <?php  
  if(isset($message))
    {
      echo $messasge;
    }
    ?>
  </form>
</body>
</html>