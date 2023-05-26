<!-- api call start -->
<?php
session_start();
$api_key = '####';
$playlist_id=$_GET['Course_Playlist_ID'];

$api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId='. $playlist_id . '&key=' . $api_key;

$playlist = json_decode(file_get_contents($api_url));
?>
<!-- api call end -->
<?php 
          $x=-1;
          foreach($playlist->items AS $item): 
              $x++;
              if($x==0){
              $add='https://www.youtube.com/embed/';
              $start=$item->snippet->resourceId->videoId;  }
           endforeach;
            ?>


<!doctype html>
<html  lang="en">
<head>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Foundation | Welcome</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <script src="uikit.min.js"></script>
   <link rel="stylesheet" href="uikit.min.css">
   <link rel="stylesheet" href="product-page.css">
<style type="text/css">
  
    * {box-sizing: border-box}
body {font-family: "Roboto", sans-serif;}
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

</br>
</div>
<div class="row fff">

  <!--video-->
<div class="medium-7 columns">
<div class="row small-up-4">
 <!--fream vieo-->
  <iframe src="<?php echo $add.$start; ?>" width="1920" height="1080" frameborder="0" ng-model="video" name="video" allowfullscreen uk-responsive uk-video="automute: true"></iframe>

  <!--fream vide end-->
  <!--video end -->


<h1></h1>
<div class="column">
  
<img class="thumbnail" src="https://placehold.it/250x200">
</div>
<!--<div class="column">
<img class="thumbnail" src="https://placehold.it/250x200">
</div>
<div class="column">
<img class="thumbnail" src="https://placehold.it/250x200">
</div>
<div class="column">
<img class="thumbnail" src="https://placehold.it/250x200">
</div> -->

</div>
</div>
<div class="medium-7 large-4 columns ">
<h3 class="text-capitalize"> <?php echo $_GET['Course_Titel'];?></h3>
<p><?php echo $_GET['Course_Description']; ?></p>

<div class="row">
<div class="small-3 columns">

</div>
<div class="small-9 columns">

</div>
</div>
<a target="_blank" href="<?php echo $_GET['Course_Study_Note']; ?>" class="button large expanded">Download</a>
<div class="small secondary expanded button-group">
<a class="button">Facebook</a>
<a class="button">Twitter</a>
<a class="button">Yo</a>
</div>
</div>
</div>
<div class="column row cart-video">
<hr>
<ul class="tabs" data-tabs id="example-tabs">
<li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Reviews</a></li>
<li class="tabs-title"><a href="#panel2">Similar Products</a></li>
</ul>
<div class="tabs-content" data-tabs-content="example-tabs">
<div class="tabs-panel is-active" id="panel1">
<h4>Reviews</h4>


<div class="media-object stack-for-small">
<div class="media-object-section">
<img class="thumbnail" src="https://placehold.it/200x200">
</div>
<div class="media-object-section">
<h5>Mike Stevenson</h5>
<p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you</p>
</div>
</div>
        <form action="comment_mod.php?User_id=<?php echo $_GET['User_id']; ?>&Review_Course_titel=<?php echo $_GET['Course_Titel']; ?>&Review_Faculty_ID=<?php echo $_GET['F_id']; ?> &Course_Playlist_ID=<?php  echo $_GET['Course_Playlist_ID'] ?>" method="POST">
<label>
My Review
<textarea name="comment" placeholder="None"></textarea>
</label>
<button name="comment_submit" class="button">Submit Review</button>
          </form>
</div>



<div class="tabs-panel" id="panel2">
<div class="row medium-up-3 large-up-5">


<!--php code-->
<div class="container">
<?php
echo "<div  class='card-group  card-deck'>";
    foreach($playlist->items AS $item): 
        $i=0;
        $i++;  
    $video_id=$item->snippet->resourceId->videoId;
    //$add='https://www.youtube.com/embed/';

   // echo "<div class='column'>";
    $video_play=$add.$video_id.'?'.$playlist_id.'&loop=1';
    $video_url=$item->snippet->thumbnails->default->url;
    $video_titel=$i." ".$item->snippet->title; 
  
 
 echo   " <a href='$video_play'class='uk-link-heading' target='video'>  <div class='card card-wr dd-margin' style='width: 13rem;'>
            <img  src='$video_url' class='card-img-top' >
            <div class='card-body'>
            <small class='font_playlist'>  $video_titel</small> 
            </div>
            </div><h2>  </h2> </a>";

          
     /*   echo " 
            <div class='card'>
              <img class='card-img-top'  src='$video_url'>
              <div class='card-body card-img-overlay'>
                <h4 class='card-title text-capitalize' ></h4>
                <small class='text-muted font-italic '>$video_titel</small>"; */
              

    endforeach; 
    
echo "</div>";
echo "<h3>   </h3>";

 
?>
<!--php end-->

</div>
</div>
</div>
</div>
</div>
<div class="row column">
<hr>
<ul class="menu">
<li>Yeti Store</li>
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
<li class="float-right">Copyright 2016</li>
</ul>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>

    
</body>
</html>
