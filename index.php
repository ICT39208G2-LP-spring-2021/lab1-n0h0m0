


<?php

$connection = new mysqli('localhost','root','');

if($connection->connect_error){ //if(!$connection){ }
    die("შეცდომა მონაცემთა ბაზასთან კავშირისას".$connection->connect_error);
    mysqli_close($connection);

}else{
    echo "მონაცემთა ბაზასთან კავშირი წარმატებით დამყარდა";
}


?>