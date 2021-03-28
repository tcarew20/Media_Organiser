<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["image"]))  
      {  
           $error = "<label class='text-danger'>Enter Image Title</label>";  
      }   
      else  
      {  
           if(file_exists('json/imagefile.json'))  
           {  
                $current_data = file_get_contents('json/imagefile.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'image'               =>     $_POST['image'],
                     'file'          =>     $_POST["file"],      
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('json/imagefile.json', $final_data))  
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