<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/forms/images_form.php'; ?>

<div class="container main-area">

    <div class="row">
    <div class="col-lg-10 page-title">
           <a href="music.php"><span>Music </span></a>  |  <a href="video.php"><span> Video</span></a>  |  <span> Images</span>    
        </div>
        <div class="col-lg-6"></div>
        <div class="co lg-2">
            <a href="index.php" class="back">Home</a>
        </div>
    </div>

    <div class="row media-library">
        <div class="col-lg-3 left">
           <h3>Library</h3>
           <br>           
            
           <table id="imageslist" class="table table-bordered">  
                <tr>  
                    <th>Image</th>
                </tr>  
                <?php   
                $data = file_get_contents("json/imagefile.json");  
                $data = json_decode($data, true);  
                foreach($data as $row)  
                {  
                    echo '<tr><td>'.$row["image"].'</td><td><button href="#" data-value="assets/images/'.$row["file"].'">View</button></td></tr>';
                }  
                ?>  
            </table>



        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-8 right">
            <img id="imagesSource" src="assets/images/bird.jpg" width="100% "alt="" class="music-img">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="upload-section">
                <p class="upload-btn">Upload File</p>
                <div class="upload-form">
                    <?php include_once 'includes/image_form_layout.php'; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-8"></div>
    </div>

</div>

<script>
    imageslist.onclick = function(e) {
   e.preventDefault();

  var elm = e.target;
//   var audio = document.getElementById('audio');

  var source = document.getElementById('imagesSource');
  source.src = elm.getAttribute('data-value');

//   audio.load(); //call this to just preload the audio without playing
//   audio.play(); //call this to play the song right away
};
</script>


<?php include_once 'includes/footer.php'; ?>