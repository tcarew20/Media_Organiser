<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["song"]))  
      {  
           $error = "<label class='text-danger'>Enter Song Name</label>";  
      }  
      else if(empty($_POST["artist"]))  
      {  
           $error = "<label class='text-danger'>Enter Artist Name</label>";  
      }  
      else  
      {  
           if(file_exists('json/musicfile.json'))  
           {  
                $current_data = file_get_contents('json/musicfile.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'song'               =>     $_POST['song'],  
                     'artist'          =>     $_POST["artist"],
                     'file'          =>     $_POST["file"],    
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('json/musicfile.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  