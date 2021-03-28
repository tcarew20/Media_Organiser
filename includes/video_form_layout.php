<div class="container" style="width:500px;">                   
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Video Title</label>  
                     <input type="text" name="video" class="form-control" /><br />    
                        <form action="upload_file.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="file" id="file" /> 
                            <br />
                            <input type="submit" name="submit" value="Submit" class="submit" />
                        </form>                        
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
