

<?php
if(file_exists($conf['base_path'].'/shared/audiofolders/Suli Pushban/cover.jpg')) { 
    print '<div class="playerWrapperCover"><center>';
    print '<img class="img-responsive img-thumbnail" src="image.php?img='.$conf['base_path'].'/shared/audiofolders/Suli Pushban/cover.jpg" alt="Suli Pushban"/>';
    print '</center></div>';
}
?>
<div class="playerWrapper">
    <!--a href='?player=skipBack15'><img width=20 src='_assets/img/skip-15-back-grey.svg'/></a-->
    <a href='?player=prev' class='btn btn-player-l '><i class='fa fa-backward'></i></a>

<?php
    if (array_key_exists('state', $playerStatus) && $playerStatus['state'] === 'play') {
        print '<a href="?player=pause" class="btn btn-player-xl " style=""><i class="fa fa-pause"></i></a>';
    }
    else {
        print '<a href="?player=play" class="btn btn-player-xl " style=""><i class="fa fa-play"></i></a>';
    }
?>
          <!--a href='?player=replay' class='btn btn-default btn-success btn-lg'><i class='fa fa-refresh'></i></a-->

    <a href='?player=next' class='btn btn-player-l '><i class='fa fa-forward'></i></a>
    <!--a href='?player=skipAhead15'><img width=20 src='_assets/img/skip-15-forward-grey.svg'/></a-->
</div><!-- ./playerWrapper -->
<div class="playerWrapper">
        <div class="btn-group controlVolumeUpDown" role="group" aria-label="volume" style="margin-bottom:0.5em;">
            <!--a href="#collapsePlaylist" class="btn btn-lg collapsed" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" m="1"><i class="fa fa-bars"></i></a-->
            <a href='?player=replay' class='btn  btn-lg'><i class='fa fa-recycle'></i></a>
            <!--a href="?player=random" class="btn  btn-lg"><i class="fa fa-random"></i></a-->
<?php
    if ($playerStatus['repeat'] == "0") {
        print '<a href="?player=repeat" class="btn  btn-lg"><i class="fa fa-refresh"></i> OFF</a>'; 
    }
    elseif ($playerStatus['single'] == "1") {
        print '<a href="?player=repeatoff" class="btn  btn-lg"><i class="fa fa-refresh"></i> TRACK</a>'; 
    }
    else {
        print '<a href="?player=single" class="btn  btn-lg"><i class="fa fa-refresh"></i> LIST</a>'; 
    }
    if (array_key_exists('state', $playerStatus)) {
        print '         <a href="?stop=true" class="btn  btn-lg"><i class="fa fa-stop"></i></a>';
    }
?>
        </div><!-- ./btn-group -->
<?php
include("inc.controlVolumeUpDown.php");
?>        
</div><!-- ./playerWrapper -->
