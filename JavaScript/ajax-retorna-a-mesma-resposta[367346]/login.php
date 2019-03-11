<?php
    //sleep(3);
    if (
        $_POST['name'] == 'admin'
        && $_POST['pwd'] == 'admin'
    )
        echo 'true';
    else
        echo 'false';
