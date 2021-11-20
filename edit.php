<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Update Record</h2>

<?php
        $conn = mysqli_connect("localhost","root","","my_first_db") or die("Connection Failed");

        // using get method because we want to pick value from url bar form a variable in urlbar which is id
        $stu_id = $_GET['id'];
        $sql = "SELECT * FROM students WHERE sid = {$stu_id}";

        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful2.");

        if(mysqli_num_rows($result) > 0 ) {
            while($row = mysqli_fetch_assoc($result)){
    ?>

    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['s_id']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['s_name']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['s_address']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
              <?php 
                $sql1 = "SELECT * FROM studentsclass";
                $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful1.");

                if(mysqli_num_rows($result1) > 0 ) {
                    echo '<select name="s_class">';
                    while($row1 = mysqli_fetch_assoc($result1)){
                        if($row['s_class'] == $row1['cid']){
                            $select = "selected";
                        }else{
                            $select = "";
                        }
              
             echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
                    }
          echo "</select>";
                }
          ?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['s_phone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
</div>
<?php 
        }
    }
?>
</body>
</html>
