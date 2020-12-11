<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Daniel Eremin">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $_GET['search']; ?> - Project Search</title>
<link rel="icon" href="/myfavicon.ico" type="image/x-icon">
<link href="/styles.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
  function more() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</head>
<body>
<nav class="topnav" id="myTopnav">
  <img src="/logo.svg" alt="Logo" title="My website logo" width="43" height="43" style="float:left; padding-right: 10px;"/>
  <a href="/index.html">Home</a>
  <a href="/projects.html" class="active">Projects</a>
  <a href="/articlesTutorials.html">Articles and Tutorials</a>
  <a class="disabled">Contact me and FAQ</a>
  <a href="javascript:void(0);" class="icon" onclick="more()" style="float: right;"><i class="fa fa-bars"> Show menu</i></a>
</nav>
  <h1>Project search results</h1>
  <div class="sresults">
  <?php
    $dir = '../projects';
    // Get the files of the directory as an array
    $scan_arr = scandir($dir);
    $files_arr = array_diff($scan_arr, array('.','..') );
    // Get each files of our directory with line break
    foreach ($files_arr as $file) {
      //Get the file path
      $file_path = $file;
      // Get the file extension
      $file_ext = pathinfo($file_path, PATHINFO_EXTENSION);
      if ($file_ext=="html" || $file_ext=="HTML" || $file_ext=="Html") {
        echo $file."<br/>";
    }

  }
   ?>
 </div>
</body>
</html>
