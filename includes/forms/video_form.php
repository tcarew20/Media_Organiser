<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["video"]))  
      {  
           $error = "<label class='text-danger'>Enter Video Name</label>";  
      }  
      else  
      {  
           if(file_exists('json/videofile.json'))  
           {  
                $current_data = file_get_contents('json/videofile.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'video'               =>     $_POST['video'],
                     'file'          =>     $_POST["file"],     
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('json/videofile.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Successfully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  