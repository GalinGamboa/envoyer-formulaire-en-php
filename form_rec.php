<?php
    if($_POST):
        
    $donnes = array(
        "name"          =>  $_POST['name'],
        "password"      =>  $_POST['password'],
        "educationn"    =>  $_POST['education'],
        "nationalite"   =>  $_POST['nationalite'],
        "langues"       =>  $_POST['langues'],
        "email"         =>  $_POST['email'],
        "siteWeb"       =>  $_POST['site_web'],
    );

    endif ;

    var_dump ($donnes);
    

