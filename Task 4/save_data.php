<?php 

            $host          = 'localhost';
            $user_name     = 'root';
            $password      = '';
            $database_name = 'task-4';
        
            $connection = mysqli_connect($host , $user_name, $password, $database_name);

            if(!$connection){
                die("Connection Failed " . mysqli_connect_error());
            }
          
            // echo "<pre>";
            // print_r($_REQUEST);
            // die;

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

               $albumId           =  isset($_POST['albumId'])       ?  $_POST['albumId']     : "";
               $id                =  isset($_POST['id'])            ?  $_POST['id']          : "";
               $title             =  isset($_POST['title'])         ?  $_POST['title']       : "";
               $url               =  isset($_POST['url'])           ?  $_POST['url']         : "";
               $thumbnailUrl      =  isset($_POST['thumbnailUrl'])  ? $_POST['thumbnailUrl'] : "";

               $query = "INSERT INTO `api-data` (albumId , id_from_data, title, `url`, thumbnailUrl) VALUES  ($albumId , $id, '".$title."', '".$url."' , '". $thumbnailUrl ."')";
               $result = $connection->query($query);
               if($result){
                    //now upload image to server 

                    $imageName = parse_url($url, PHP_URL_PATH); // image name will be the last number of the url
                    $lastNumber = basename($imageName);
                    $imageName = preg_replace('/[^0-9]/', '', $lastNumber);
                    $serverImagePath = "images/$imageName".".png";
                    $imageData = file_get_contents($url);
                    $uploadImage = file_put_contents($serverImagePath, $imageData);
         
                    echo "Record Inserted Succecefully";
               }
               else{
                echo "Some thing went wrong";
               }



            }




?>