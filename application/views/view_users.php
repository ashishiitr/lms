<?php ?>
 <div class="col-lg-4"> </div>
   
    <div class="col-lg-3">
<button  onclick="location.href='<?=WEBSITE?>admin_users/createuser'" class="btn btn-lg btn-primary btn-block">
     Add New User</button> </div> <br><br> <br>    

    <table align="center" border="5" >
     
     

    <tr> <th style="text-align: center;"> <font size="3">Emp_id</font></th>
        <th style="text-align: center;"> <font size="3">First name </font></th>
        <th style="text-align: center;"> <font size="3">Last name</font> </th>
        <th style="text-align: center;"> <font size="3">Email</font></th>
        <th style="text-align: center;"><font size="3"> Designation </font></th>
        <th style="text-align: center;"><font size="3"> Active </font></th>
        <th style="text-align: center;"><font size="3"> Roles </font></th>

        <th style="text-align: center;"> <font size="3">Actions</font></th>


    </tr>
    <?php foreach ($userdata as $row) {
        ?>
        <tr>
            <td>   <?php echo $row['emp_id']; ?> </td>
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td> 
            <td><?php echo $row['designation']; ?></td>
            <td><?php echo $row['is_active']; ?></td>
            <td><?php echo $row['role_name']; ?></td>
             <td> <button style="background-color:skyblue"  onclick="location.href='<?= WEBSITE ?>admin_users/edituser?emp_id=<?php echo $row['emp_id']; ?>'">
    Edit </button>
    <button style="background-color:skyblue" onclick="location.href='<?= WEBSITE ?>admin_users/deleteuser?emp_id=<?php echo $row['emp_id']; ?>'">
     Delete</button>
               </td></tr>

            
    <?php } ?>
</table>
    </div>
</form>
</body>

