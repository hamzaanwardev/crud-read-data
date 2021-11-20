<?php
include 'header.php';
?>
<div id="main-content">
<h2>All Records</h2>
    <?php
        $conn = mysqli_connect("localhost","root","","my_first_db") or die("Connection Failed");

        $sql = "SELECT * FROM students JOIN studentsclass WHERE students.s_class = studentsclass.cid";

        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0 ) {
    ?>
    
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)) {
            ?>

            <tr>

                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['s_name']; ?></td>
                <td><?php echo $row['s_address']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['s_phone']; ?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
           <?php } ?>
        </tbody>
    </table>
    <?php }else{
        echo"<h2>NO Record Found</h2>";
    } 
    mysqli_close($conn); 
    ?>
</div>
</div>
</body>
</html>
