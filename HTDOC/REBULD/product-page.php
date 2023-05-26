
<?php
session_start();
include "config.php";
$Faculty_login_id=$_SESSION['faculty_login_id'];

if($_SESSION['faculty_login_id'])
{

$id=44;
$name="E-classroom";



function createCommentRow($data) {
    global $conn;

    $response = '
            <div class="comment">
                <div class="user">'.$data['name'].' <span class="time">'.$data['createdOn'].'</span></div>
                <div class="userComment">'.$data['comment'].'</div>
                <div class="reply"><a href="javascript:void(0)" data-commentID="'.$data['id'].'" onclick="reply(this)">REPLY</a></div>
                <div class="replies">';

    $sql = $conn->query("SELECT replies.id, name, comment, DATE_FORMAT(replies.createdOn, '%Y-%m-%d') AS createdOn FROM replies INNER JOIN users ON replies.userID = users.id WHERE replies.commentID = '".$data['id']."' ORDER BY replies.id DESC LIMIT 1");
    while($dataR = $sql->fetch_assoc())
        $response .= createCommentRow($dataR);

    $response .= '
                        </div>
            </div>
        ';

    return $response;
}

if (isset($_POST['getAllComments'])) {
    $start = $conn->real_escape_string($_POST['start']);

    $response = "";
    $sql = $conn->query("SELECT comments.id, name, comment, DATE_FORMAT(comments.createdOn, '%Y-%m-%d') AS createdOn FROM comments INNER JOIN users ON comments.userID = users.id ORDER BY comments.id DESC LIMIT $start, 20");
    while($data = $sql->fetch_assoc())
        $response .= createCommentRow($data);

    exit($response);
}

if (isset($_POST['addComment'])) {
    $comment = $conn->real_escape_string($_POST['comment']);
    $isReply = $conn->real_escape_string($_POST['isReply']);
    $commentID = $conn->real_escape_string($_POST['commentID']);
    
    if ($isReply != 'false') {
        $conn->query("INSERT INTO replies (comment, commentID, userID, createdOn) VALUES ('$comment', '$commentID','$id' , NOW())");
        $sql = $conn->query("SELECT replies.id, name, comment, DATE_FORMAT(replies.createdOn, '%Y-%m-%d') AS createdOn FROM replies INNER JOIN users ON replies.userID = users.id ORDER BY replies.id DESC LIMIT 1");
    } else {
        $conn->query("INSERT INTO comments (userID, comment, createdOn) VALUES ('$id','$comment',NOW())");
        $sql = $conn->query("SELECT comments.id, name, comment, DATE_FORMAT(comments.createdOn, '%Y-%m-%d') AS createdOn FROM comments INNER JOIN users ON comments.userID = users.id ORDER BY comments.id DESC LIMIT 1");
    }

    $data = $sql->fetch_assoc();
    exit(createCommentRow($data));
}




$sqlNumComments = $conn->query("SELECT id FROM comments");
$numComments = $sqlNumComments->num_rows;


//comment end
?>





<!-- api call start -->
<?php


$api_key = 'AIzaSyCXo_w2coMKxCcqj2L2Bw8q7tcYk-POUGk';
$playlist_id=$_GET['Course_Playlist_ID'];
//$playlist_id =  'PL7ersPsTyYt2Q-SqZxTA1D-melSfqBRMW'; 
//$playlist_id='PLsyeobzWxl7rxNHxSwfErHYJG3en67TQG';
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






.card-group
{ 
  display: flex;
  flex-wrap: wrap;
}
.card 
{
 
  box-shadow: 0 8px 10px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.fff
{
margin-left: 8rem;
}

.cart-video
{
    margin-left: 6rem;
}

.dd-margin{
margin-left: 1rem;
margin-bottom: 2rem;
}

.comment {
  margin-bottom: 20px;
}

.user {
  font-weight: bold;
  color: black;
}

.time, .reply {
  color: gray;
}

.userComment {
  color: #000;
}

.replies .comment {
  margin-top: 20px;

}

.replies {
  margin-left: 20px;
}

#registerModal input, #logInModal input {
  margin-top: 10px;
}





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
        <a class="navbar-brand" href="http://127.0.0.1/rebuld/faculty.php">E-classroom</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
      <!--  <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Contact</a></li>
        </ul> -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
<!--<div class="small secondary expanded button-group">
<a class="button">Facebook</a>
<a class="button">Twitter</a>
<a class="button">Yo</a>
</div>-->
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

    <div class="row">
        <div class="col-md-12 media-object-section">
            <h2><b id="numComments"><?php echo $numComments ?> Comments</b></h2>
            <div class="userComments">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 media-object-section">
        <textarea class="form-control" id="mainComment"  name="comment" cols="80" rows="3" placeholder="None"></textarea></br>
</label>
<button class="btn-primary btn" onclick="isReply = false;" id="addComment" name="comment_submit" class="button">Submit Review</button>

        </div>
    </div>
</div>

<div class="row replyRow" style="display:none">
    <div class="col-md-12">
        <textarea class="form-control" id="replyComment" placeholder="Add Public Comment" cols="30" rows="2"></textarea><br>
        <button style="float:right" class="btn-primary btn" onclick="isReply = true;" id="addReply">Add Reply</button>
        <button style="float:right" class="btn-default btn" onclick="$('.replyRow').hide();">Close</button>
    </div>
</div>

<script type="text/javascript">
    var isReply = false, commentID = 0, max = <?php echo $numComments ?>;

    $(document).ready(function () {
        $("#addComment, #addReply").on('click', function () {
            var comment;

            if (!isReply)
                comment = $("#mainComment").val();
            else
                comment = $("#replyComment").val();

            if (comment.length > 5) {
                $.ajax({
                    url: 'product-page.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        addComment: 1,
                        comment: comment,
                        isReply: isReply,
                        commentID: commentID
                    }, success: function (response) {
                        max++;
                        $("#numComments").text(max + " Comments");

                        if (!isReply) {
                            $(".userComments").prepend(response);
                            $("#mainComment").val("");
                        } else {
                            commentID = 0;
                            $("#replyComment").val("");
                            $(".replyRow").hide();
                            $('.replyRow').parent().next().append(response);
                        }
                    }
                });
            } else
                alert('Please Check Your Inputs');
        });



        getAllComments(0, max);
    });

    function reply(caller) {
        commentID = $(caller).attr('data-commentID');
        $(".replyRow").insertAfter($(caller));
        $('.replyRow').show();
    }

    function getAllComments(start, max) {
        if (start > max) {
            return;
        }

        $.ajax({
            url: 'product-page.php',
            method: 'POST',
            dataType: 'text',
            data: {
                getAllComments: 1,
                start: start
            }, success: function (response) {
                $(".userComments").append(response);
                getAllComments((start+20), max);
            }
        });
    }
</script>

      
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
<?php   } 
else
{
  header("Location:http://127.0.0.1/PROJECT/PHP/homepage.php");
}

?>