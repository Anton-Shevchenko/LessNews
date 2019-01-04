<?php

namespace app\controllers;

use app\models\Users;
/**
 * Description of Main
 *
 */
class MainController extends AppController{
    
//    public $layout = 'main';
    
    public function indexAction()
    {
        $user = new Users;

        if( isset( $_POST['my_file_upload'] ) ){  

            if ( isset($_FILES)) {
            
                if ($_FILES[0]["error"] > 0) {
                    echo "Error";

                } else {     
                    if (file_exists("upload/" . $_FILES[0]["name"])) {
                        echo $_FILES[0]["name"] . " already exists. ";
                    }else {
                    
                        $storagename = "uploaded_file.txt";
                        move_uploaded_file($_FILES[0]["tmp_name"], "upload/" . $storagename);
                        echo "Stored in: " . "upload/" . $_FILES[0]["name"] . "<br />";
                    }
                    $importDataArr = [];
                    $real = [];
                    $storagename = "uploaded_file.txt";
                    
                 
                    $csvData = file_get_contents("upload/" . $storagename);

                    $lines = explode(PHP_EOL, $csvData);
                    
                    $array = array();
                    foreach ($lines as $line) {

                        $array[] = str_getcsv($line);

                    }
                 
                    for ($i=0; $i < count($array); $i++) {            //TODO array_map()
                        for ($j=0; $j < count($array[$i]); $j++) { 

                              $array[$i][$j] = ('\''.$array[$i][$j].'\'');
                         } 
                    }
                    
                    for ($i=1; $i < count($array) - 1; $i++) {
                        array_push($importDataArr, '(' . implode(',', $array[$i]) . ')');
                    }

                    $importData = implode(',', $importDataArr);
                    
                    try {
                         $query = $user->insert('`UID`, `Name`, `Age`, `Email`, `Phone`, `Gender`', $importData);
                    } catch (Exception $e) {
                        die('aaaaaa');
                    }                
                }
            } else {
                echo "No file selected <br />";
            }

        }

        if(isset($_POST['delete'])){ 
            $user->delete();
        }
    }
}
