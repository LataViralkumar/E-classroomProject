<?php 
error_reporting(0); 
 $data_test[]=array();

function get_data()
{
       include "config.php";

      
       $sql_cat_disp= "SELECT * FROM `category`";
       $qq=mysqli_query($conn,$sql_cat_disp); 
       
       $result_disp=mysqli_num_rows($qq);
 
    if($result_disp!=0)
    {  
      while($data_cat=mysqli_fetch_assoc($qq))
      {   
        $data_test[]=array('id'=>$data_cat["id"],'cat_name'=>$data_cat["cat_name"]);  
       //print_r($data_cat);
      }
    }
    
return json_encode($data_test);   
}

$file_name='cat'.'.json';
file_put_contents($file_name,get_data());

?>