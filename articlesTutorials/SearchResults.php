<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Daniel Eremin">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $_GET['search']; ?> - Article/Tutorial Search</title>
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
  <a href="/projects.html">Projects</a>
  <a href="/articlesTutorials.html" class="active">Articles and Tutorials</a>
  <a class="disabled">Contact me and FAQ</a>
  <a href="javascript:void(0);" class="icon" onclick="more()" style="float: right;"><i class="fa fa-bars"> Show menu</i></a>
</nav>
  <h1>Article and Tutorial search results</h1>
  <div class="sresults">
  <?php
    echo "You searched for '{$_GET['search']}'";
   ?>
 </div>
</body>
</html>
