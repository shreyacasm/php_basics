<?php

    for($i = 0;$i <10;$i++){
        echo "Number ".$i;
        echo '<br>';
    }
    $i = 0;
    while($i < 10){
        echo $i;
        echo '<br>';
        $i+=2;
    }
    $i = 0;
    do{
        echo $i;
        echo '<br>';
        $i++;
    } 
    while($i<10);

    $people = array('Brad' => 'brad@gmail.com','Jose' => 'jose@gmail.com','William' => 'will@gmail.com');
    foreach($people as $person => $email){
        echo $person.': '.$email;
        echo '<br>';
    }

?>
