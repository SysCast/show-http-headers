<p>The following headers were sent to the server:</p>
<?php

/* All $_SERVER variables prefixed with HTTP_ are the HTTP headers */
foreach ($_SERVER as $header => $value) {
  if (substr($header, 0, 5) == 'HTTP_') {
    $clean_header = substr($header, 5, strlen($header));
    echo $clean_header .': '. $value .'<br />';
  }
}
?>
