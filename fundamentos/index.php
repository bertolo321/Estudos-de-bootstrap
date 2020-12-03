<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="utf-8"/>
<meta charset="UTF-8">
    <meta name="author" content="Andre Betolo">
    <meta name="keywords" content="FILMES DE DRAMA">
    <meta name="description" content="PARA EMOCIONAR">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Bootstrap 4 fundamentos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
<section>
<header>
<div class="container">
<h1>Bootstrap 4 fundamentos</h1>
<div class="collection">
<?php
$cont = 1;
$types = array( 'html' );
if ( $handle = opendir('./') ) {
    while ( $entry = readdir( $handle ) ) {
	
        $ext = strtolower( pathinfo( $entry, PATHINFO_EXTENSION) );
        if( in_array( $ext, $types ) )
	echo "<a class='collection-item' href={$entry}>{$entry}</a> <br>";
	//echo $cont++."<br>";
    }
    closedir($handle);
}    

?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


 <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
  </div> 
</section>         
</body>

</html>

