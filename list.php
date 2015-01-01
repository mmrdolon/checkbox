<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 12/22/14
 * Time: 3:54 PM
 */
$link = mysqli_connect("localhost",
    "root",
    "mysql123",
    "multiple");
$query = "select * from information;";
$result = mysqli_query($link, $query);
//while( $row = mysqli_fetch_assoc($result) ){
// print_r($row);
//}
//alternative
//print_r($row);
?>
<ul>
    <li><a href="#">Download as XL</a> </li>
    <li><a href="#">Download as PDF</a> </li>
    <li><a href="create.php">Create New</a> </li>
</ul>
<table border="1" width="80%">
    <tr>

        <td>First name</td>
        <td>Last name</td>
        <td>Email:</td>
        <td>Password</td>
        <td>Birth Day</td>
        <td>Gender</td>
        <td>Comment</td>
        <td>Created</td>
        <td>Modified</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>

            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['u_email']?></td>
            <td><?php echo $row['password']?></td>

            <td><?php

                echo $row['birth_day']?></td>


            <td><?php

                if(isset($_POST['sex']))
                    if($_POST['sex'] == 'male') {
                        echo $row['sex'];
                    } elseif($_POST['sex'] == 'female') {
                        echo $row['sex'];
                    }

                echo $row['sex']?></td>
            <td><?php echo $row['comment']?></td>
            <td><?php echo $row['created_date']?></td>
            <td><?php echo $row['modified_date']?></td>
            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>
    <?php
    }
    ?>
</table>
