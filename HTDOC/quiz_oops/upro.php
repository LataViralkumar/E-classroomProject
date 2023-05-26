<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
?>
<table>
<div id="menu1" class="tab-pane fade">
      <h3>Showing profile</h3>
	  
	  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
	
	<?php 
	foreach($profile->data as $prof)
	{?>
      <tr>
        <td><?php echo $prof['id'];?></td>
        <td><?php echo $prof['name'];?></td>
        <td><?php echo $prof['email'];?></td>
        <td><img src="img/<?php echo $prof['img']; ?>" alt="" width="35px" height="30px" /></td>
      </tr>
    </tbody>
	<?php 	}?>
</table>
	  