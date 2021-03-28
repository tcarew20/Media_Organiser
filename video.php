<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/forms/video_form.php'; ?>

<div class="container main-area">

    <div class="row">
    <div class="col-lg-10 page-title">
           <a href="music.php"><span >Music </span></a>  |  <span> Video </span>  |  <a href="images.php"><span> Images </span></a>    
        </div>
        <div class="col-lg-6"></div>
        <div class="co lg-2">
            <a href="index.php" class="back">Home</a>
        </div>
    </div>

    <div class="row media-library">
        <div class="col-lg-4 left">
           <h3>Library</h3>
           <br>           
            
           <table id="videolist" class="table table-bordered">  
                <tr>  
                    <th>Video</th>
                </tr>  
                <?php   
                $data = file_get_contents("json/videofile.json");  
                $data = json_decode($data, true);  
                foreach($data as $row)  
                {  
                    echo '<tr><td>'.$row["video"].'</td><td><button href="#" data-value="assets/video/'.$row["file"].'">Play</button></td></tr>';  
                }  
                ?>  
            </table>



        </div>
        <div class="col-lg-8 right">
        <video id="video" width="100%" controls>
            <source id="videoSource" src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="upload-section">
                <p class="upload-btn">Upload File</p>
                <div class="upload-form">
                    <?php include_once 'includes/video_form_layout.php'; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-8"></div>
    </div>

    

</div>

<script>
    videolist.onclick = function(e) {
  e.preventDefault();

  var elm = e.target;
  var audio = document.getElementById('video');

  var source = document.getElementById('videoSource');
  source.src = elm.getAttribute('data-value');

  audio.load(); //call this to just preload the audio without playing
  audio.play(); //call this to play the song right away
};
</script>

<?php include_once 'includes/footer.php'; ?>