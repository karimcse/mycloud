<?php
include("db.php");
$sql = "select * from info order by id desc";
$result = mysql_query($sql);
?>
<h1>Information Retrieval</h1>
<table border="1" cellspacing="3" cellpadding="3" width="800" align="center">
    <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Address</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        while ($row = mysql_fetch_array($result))
        {
            $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['f_name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['date']; ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
