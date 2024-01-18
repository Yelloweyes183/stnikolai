<?php

require_once 'setup.php';

$corona = true;
$coronaOrgelwerke = true;

//$titelbild= array('/img/_MG_0656_st nikolai panoAnd6more_tonemapped.jpg', true);

ob_start() ?>

# Orgelmusik aus St. Nikolai

<hr style="margin-top: 2em;">

<p> <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 30px;" width="600" height="338">
    <source src="/downloads/Orgel_Pfingsten.mp4#t=1" type="video/mp4">
  </video></p>

<p> <video controls="" preload="metadata" style="margin-top: 10px; margin-bottom: 30px;" width="600" height="338">
    <source src="/downloads/Orgelbuechlein_A_W_1.mp4#t=1" type="video/mp4">  </video></p>


<iframe width="600" height="338" src="https://www.youtube.com/embed/Y_IqIkpzM3E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<iframe width="600" height="338" style="margin-top: 20px;" src="https://www.youtube.com/embed/QLi6VQr4ykU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<iframe width="600" height="338" style="margin-top: 20px;" src="https://www.youtube.com/embed/d9wg5zp_cHs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<iframe width="600" height="338" style="margin-top: 20px;" src="https://www.youtube.com/embed/O-1DUAN5vec" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<iframe width="600" height="338" style="margin-top: 20px;" src="https://www.youtube.com/embed/Ny3w_B6C7Vk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


<?php $main = ob_get_clean();

require 'layouts/main.php';

