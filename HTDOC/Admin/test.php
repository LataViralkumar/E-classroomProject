<!--update profile-->

 <!--update profile-->
 <h1></h1>
                                           <form action="" method="post">
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>User_Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="name" placeholder="UserName...">
                                                   
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                   
<hr>
                                        
                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile_Number:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input name="mobile_No" type="tel" pattern="^\d{10}$" placeholder="Mobile_Number...">
                                                   
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                      
<hr>


                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>Location:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <select  name="contry"  class="ui button">
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/countries.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['name']; ?>"><?php  echo $ds[$j++]['name']; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                                  <?php $_SERVER['REQUEST_URI']; ?>
                                                     
                                                     </div>
                                                 </p>

                                                 <p>
                                                     <div class="ui action input">
                                                     <select  name="state"class="ui button" >
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/city.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['state']; ?>"><?php  echo $ds[$j++]['state']; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                    
                                                     </div>
                                                 </p>

                                                 <p>
                                                     <div class="ui action input">
                                                     <select  name="city"  class="ui button" >
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/city.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['name']; ?>"><?php  echo $ds[$j++]['name']; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                   
                                                     </div>
                                                 </p>

                                                
                                            </div>
                                        </div>
                                    
<hr>


                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>Occupation:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="occupation" placeholder="occupation...">
                                                   
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                        
<hr>


                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>University:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="uni" placeholder="university..." >
                                                     <input type="text"  name=degree placeholder="degree ...">
                                                     <select  name="year"  class="ui button ">
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/year.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['year']; ?>"><?php  echo $ds[$j++]['year']; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                                  
                                                     </div>
                                                 </p>
                                                 <p>
                                                     <div class="ui action input">
                                                     <textarea name="about_degree" id="" cols="60" rows="3"></textarea>
                                                    
                                                     </div>
                                                 </p>
                                               
                                            </div>
                                        </div>
                                      
<hr>

                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>About_Degree:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <textarea name="" id="" cols="60" rows="3"  placeholder="Degree description.."></textarea>
                                                  
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                      
<hr>


                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>About_Me:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <textarea name="about" id="" cols="60" rows="3"  placeholder="about me..."></textarea>
                                                   
                                                     </div>
                                                 </p>
                                            </div>
                                        </div>
                                       
<hr>

                                             <div class="row">
                                            <div class="col-md-6">
                                                <label>Skills:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="skill_name_1" placeholder="Skill 1...">
                                                     <select  name="skill_pr_1"   class="ui button " >
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/skills_pr.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['percentage']; ?>"><?php  echo $ds[$j++]['percentage']."%"; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                     </div>
                                                 </p>
                                                 <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="skill_name_2" placeholder="Skill 2...">
                                                     <select  name="skill_pr_2"   class="ui button " >
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/skills_pr.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['percentage']; ?>"><?php  echo $ds[$j++]['percentage']."%"; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                    
                                                     </div>
                                                 </p>
                                                 <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="skill_name_3" placeholder="Skill 3...">
                                                     <select   name="skill_pr_3"   class="ui button ">
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/skills_pr.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['percentage']; ?>"><?php  echo $ds[$j++]['percentage']."%"; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                    
                                                     </div>
                                                 </p>
                                                 <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="skill_name_4" placeholder="Skill 4...">
                                                     <select   name="skill_pr_4"   class="ui button ">
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/skills_pr.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['percentage']; ?>"><?php  echo $ds[$j++]['percentage']."%"; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                   
                                                     </div>
                                                 </p>
                                                 <p>
                                                     <div class="ui action input">
                                                     <input type="text" name="skill_name_5" placeholder="Skill 5...">
                                                     <select   name="skill_pr_5"   class="ui button ">
                                                      <?php  
                                                           $ds=json_decode(file_get_contents('json/skills_pr.json'),true);
                                                                     $i=0;$j=0;
                                                            foreach($ds as $value)
                                                                     {
                                                              // echo $ds[$i++]['category_id'];
                                                                 ?>
                                                                  <option value="<?php  echo $ds[$j]['percentage']; ?>"><?php  echo $ds[$j++]['percentage']."%"; ?></option>
                                                                   <?php  } ?>
                                                                  </select>
                                                    
                                                     </div>
                                                 </p>
                                               
                                            </div>
                                        </div>
                                        <button name="p_data" class="ui inverted blue button"><i class="fas fa-cloud-upload-alt"></i></button>
                                        <hr>
                                      
                                        </form>
<hr>
               

 <!--update profile end-->
</div>


</div>