<?php
//    $origem = "https://*";
    $origem = "'self'";
    echo "<meta http-equiv=\"Content-Security-Policy\" content=\"default-src $origem; img-src $origem; child-src 'none';\">";