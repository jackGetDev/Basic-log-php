<?php
    date_default_timezone_set('Asia/Jakarta'); 
    $user="user"; 
    $date=date("Y-m-d h:i:sa"); 
    echo "Created_at : ".$date; 
    echo "\n";  
    $role="admin";
    $pass="pass";
    if($role=="admin" && $pass=="pass"){  
        echo "Created_by : ".$role; echo "\n";
    }
    else if($role=="user"){    
        print("ini ".$role); 
    }else{    
        print("Ini bukan user");
    }
?>
