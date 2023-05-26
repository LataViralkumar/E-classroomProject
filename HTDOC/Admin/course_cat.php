<?php 
error_reporting(0); 
 $data_test[]=array();

function get_data()
{
       include "config.php";

      
       $sql_cat_disp= "SELECT * FROM `course_category`";
       $qq=mysqli_query($conn,$sql_cat_disp); 
       
       $result_disp=mysqli_num_rows($qq);
 
    if($result_disp!=0)
    {  
      while($data_cat=mysqli_fetch_assoc($qq))
      {   
         $data_test[]=array('Category_ID'=>$data_cat["Category_ID"],'Category_Name'=>$data_cat["Category_Name"]);  
        //print_r($data_cat);
      }
    }
    
return json_encode($data_test);   
}

$file_name='cat_course'.'.json';
file_put_contents($file_name,get_data());

?>