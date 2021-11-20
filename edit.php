<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Update Record</h2>

<?php
        $conn = mysqli_connect("localhost","root","","my_first_db") or die("Connection Failed");

        // using get method because we want to pick value from url bar form a variable in urlbar which is id
        $stu_id = $GET['id'];
        $sql = "SELECT * FROM students WHERE s_id = {$stu_id}";

        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

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
          <select name="sclass">
              <option value="" selected disabled>Select Class</option>
              <option value="1">BCA</option>
              <option value="2">BSC</option>
              <option value="3">B.TECH</option>
          </select>
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
