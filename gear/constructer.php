<?

construct_site ();

function construct_site ()
{
  $lines = file('../content/sites/home.html');
  $params["content"] = implode($lines);
  include '../content/structure/all.php';
  echo $wholeSite;
}

?> 
