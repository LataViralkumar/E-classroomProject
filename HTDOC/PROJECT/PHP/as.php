
    <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <a href="#">
                            <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                        </a>
                    </div>
                    <h4><a href="#" style="text-decoration:none;"><strong><?php  echo $User_Name; ?></strong></a></h4>
                    <span>
                        <div class="navbar-right">
                            
                        </div>
                    </span>
                    <hr>
                    <div class="post-content">
                        <p>Simple post content example.</p>
                        <p>  <span class="text-primary">Problem:</span>    <?php echo $row['question'];?> </p>
                        <a href="answer.php?id=<?php echo $row['id']?>" class="btn btn-secondary btn-lg " role="button" aria-disabled="true">View Solution</a>
                    </div>
                    </br>
                    <textarea class="form-control" name=""  cols="100" rows="3"  placeholder="Enter Your answer.."   required></textarea> 
                    </br>
                    <button type="button" class="btn btn-info">submit</button>
                    
                    <div>
                    
                        <br>
                    </div>
                    <hr>
                    <div class="media">
                       
                        <div class="media-body">
                           
                        </div>
                    </div>
                </div>
            </div>



















            <div class="card">
      <div class="card-header">
        <h1 class="card-title" style="color:red;">Question : <?php echo $row['question'];?></h1>
        <?php
        $sql = "SELECT * FROM answer where question='".$_GET['id']."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
           echo "Answer:" .$row['answer'];
          echo "<hr/>";
        }
        }

        ?>
        <form method="POST">
          <input type="hidden" name="question" value="<?php echo $_GET['id'];?>">
            <div class="form-group">
    <label for="exampleFormControlTextarea1">Enter Answer here</label>
    <textarea class="form-control" name="answer" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary w-25" id="addpollbtn">Submit</button>
        </form>
      </div>
    </div>