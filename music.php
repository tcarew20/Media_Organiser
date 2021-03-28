<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/forms/music_form.php'; ?>

<div class="container main-area">

    <div class="row">
        <div class="col-lg-10 page-title">
            <span>Music</span>  |  <a href="video.php"><span>Video</span></a>  |  <a href="images.php"><span>Images</span></a>    
        </div>
        
        <div class="col-lg-2">
            <a href="index.php" class="back">Home</a>
        </div>
    </div>

    <div class="row media-library">
        <div class="col-lg-3 left">
           <h3>Library</h3>
           <br>      
            <table id="musiclist" class="table table-bordered">  
                <tr>  
                    <th>Song Name</th>
                    <th>Artist</th>
                </tr>  
                <?php   
                $data = file_get_contents("json/musicfile.json");  
                $data = json_decode($data, true);  
                foreach($data as $row)  
                {  
                    echo '<tr><td>'.$row["song"].'</td><td>'.$row["artist"].'</td><td><button href="#" data-value="assets/music/'.$row["file"].'">Play</button></td></tr>';  
                }  
                ?>  
            </table>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-7 right">
            <img src="assets/images/equalizer.png" alt="" class="music-img">
            <audio id="audio" controls>
                <source id="audioSource" src="" type="audio/mpeg">
                Your browser does not support the audio tag.
            </audio>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="upload-section">
                <p class="upload-btn">Upload File</p>
                <div class="upload-form">
                    <?php include_once 'includes/music_form_layout.php'; ?>
                </div>
            </div>
        </div>
        <div class="col-lg-8"></div>
    </div>


</div>

<script>
    musiclist.onclick = function(e) {
  e.preventDefault();

  var elm = e.target;
  var audio = document.getElementById('audio');

  var source = document.getElementById('audioSource');
  source.src = elm.getAttribute('data-value');

  audio.load(); //call this to just preload the audio without playing
  audio.play(); //call this to play the song right away
};
</script>

<?php include_once 'includes/footer.php'; ?>