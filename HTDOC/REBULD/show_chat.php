<?php 
     include "config.php";
      
       $sql_cos_disp= "SELECT * FROM `gd` WHERE faculty_id=1";
       $qq=mysqli_query($conn,$sql_cos_disp); 
       
       $result_disp=mysqli_num_rows($qq);
 
    if($result_disp!=0)
    {
         
      while($data_disp=mysqli_fetch_assoc($qq))
      {     
        print_r($data_disp);
      } 

    } 

    ?>

    
<table class="table table-hover">
  <thead>
    <tr>
     
      <th scope="col">#id</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Faculty_ID</th>
      <th scope="col">onCreate</th>
    
    </tr>
    </thead>
    <?php  
       $sql_profile ="SELECT * FROM `gd` WHERE faculty_id=1";
       $x=mysqli_query($conn,$sql_profile); 
    
       $result=mysqli_num_rows($x);
 
      while($d=mysqli_fetch_assoc($x))
      {     
   ?>

        <tbody>
        <tr>
          <th scope="row">id</th>
           <td><?php  echo $d['username']; ?> </a></td>
          <td><?php  echo $d['password']; ?></td>
          <td><?php  echo $d['faculty_id']; ?></td>
          <td><?php  echo $d['date_time']; ?></td>
    
          <th scope="col">
      
  
      <a href="course_delete.php?id=<?php echo $id;?>&cid=<?php echo $d['Course_Titel']; ?>"> 
      <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
      
      </th>
        </tr>
        
      </tbody>

<?php
      }

?>
 
</table>
