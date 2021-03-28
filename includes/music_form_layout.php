<div class="container" style="width:500px;">                   
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Song Name</label>  
                     <input type="text" name="song" class="form-control" /><br />  
                     <label>Artist Name</label>  
                     <input type="text" name="artist" class="form-control" /><br />  
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


