<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Sample WebApp</title>

    <link rel="stylesheet" href="css/styles.css" />
    <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" />

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <style>
    /* Style the body */
body {
  /* font-family: Arial, Helvetica, sans-serif; */
  font-family: OCR A Std, monospace;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 60px;
    text-align: center;
    background: #db491d;
    color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}
/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}
  table.dataTable thead th, table.dataTable thead td {
   
    text-align: left;
    border: 1px solid;
}


.content {
  max-width: 800px;
  margin: auto;
}
ul{
display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-content: space-around;
    padding: 0;
}

  </style>
  </head>

  <body>
  <div class="header">
  <h1>Sample WebApp</h1>
  <p>Playground for AiTestPro plugin</p>
</div>
   
<?php 

$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); 
$indexPage="index.php";
$readPage="read.php";
$checkPage="check.php";
$createPage="create.php";
$selectPage="select.php";


?>

<div class="navbar">
  <a href="<?php echo $indexPage; ?>" class="<?php echo ($curPageName==$indexPage? 'active':''); ?>">Home</a>
  <a href="<?php echo $selectPage; ?>" class="right <?php echo ($curPageName==$selectPage? 'active':''); ?>">Select</a>
  <a href="<?php echo $checkPage; ?>" class="right <?php echo ($curPageName==$checkPage? 'active':''); ?>">Check</a>
  
  <a href="<?php echo $createPage; ?>" class="right <?php echo ($curPageName==$createPage? 'active':''); ?>">Create</a>
  <a href="<?php echo $readPage; ?>" class="right <?php echo ($curPageName==$readPage? 'active':''); ?>">Read</a>
  
</div>




<div class="content">