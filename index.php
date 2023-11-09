<?php 
include 'inc/header.php'; 
include 'config.php';
include 'database.php';
?>

<?php
$db = new Database();
$query = "SELECT * FROM user_tbl";
$read = $db->select($query);
?>

<table class="tblone">
    <tr>
        <th width="30%">Name</th>
        <th width="25%">Email</th>
        <th width="25%">Phone</th>
        <th width="20%">Action</th>
    </tr>
    <?php if($read) {?>
        <?php while($row = $read->fetch_assoc()) {?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><a href="update.php? id=<?php $row['id'] ?>">Edit</a></td>
    </tr>
    <?php } ?>
    <?php } else {?>
    <p>Data is not Available</p>
    <?php }?>
</table>


<?php include 'inc/footer.php'; ?>