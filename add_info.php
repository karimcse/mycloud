<form name="form1" action="process_info.php" method="POST" enctype="multipart/form-data">
    <table border="1" width="800" align="center">
        <tbody>
        <thead>
            <tr>
                <th colspan="3">Add Information</th>
            </tr>
        </thead>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="name" value="" /></td>
        </tr>
        <tr>
            <td>Father Name</td>
            <td>:</td>
            <td><input type="text" name="f_name" value="" /></td>
        </tr>
        <tr>
            <td>Address</td>
            <td>:</td>
            <td><input type="textarea" name="address" value="" /></td>
        </tr>
        <tr>
            <td>Dated</td>
            <td>:</td>
            <td><input type="text" name="date" value="<?php echo date("d - m - Y"); ?>" /></td>
        </tr>
        <tr>
            <td colspan="3" align="center"><input type="submit" value="Save" /></td>

        </tr>


        </tbody>
    </table>

</form>
