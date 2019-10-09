
<!DOCTYPE HTML>
<html>
<head>
<title>Search Results</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
  $films=[
      ["title"=>"Jaws", "year"=>"1975", "duration"=>124,"certificate"=>"15"],
      ["title"=>"Spirited Away", "year"=>"2001", "duration"=>124,"certificate"=>"PG"],
      ["title"=>"Winter's Bone", "year"=>"2010", "duration"=>100,"certificate"=>"15"],
      ["title"=>"The Godfather", "year"=>"1972", "duration"=>177,"certificate"=>"18"]
  ];
  if(isset($_POST["submitBtn"])){
    $certificate=$_POST["certificate"];
    foreach($films as $film){
      if($film["certificate"]===$certificate){
        echo "<p>{$film["title"]}</p>";
      }
    }
  }else{
    echo "<p>You shouldn't have got to this page</p>";
  }
?>

</body>
</html>
