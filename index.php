<?php
include 'header.php';
?>
<div id="main-content">
<h2>All Records</h2>
    <?php
        $conn = mysqli_connect("localhost","root","","my_first_db") or die("Connection Failed");

        $sql = "SELECT * FROM student JOIN studentsclass WHERE students.s_class = studentsclass.cid";

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

                <td>1</td>
                <td>Ramesh</td>
                <td>Delhi</td>
                <td>BCA</td>
                <td>9876543210</td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
           <?php } ?>
        </tbody>
    </table>
    <?php } ?>
</div>
</div>
</body>
</html>
