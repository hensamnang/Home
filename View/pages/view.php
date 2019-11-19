<table class="table table-bordered mt-5 text-center">
    <a href="index.php?action=add_form" class="btn btn-success">Add New</a>
    <thead class=" btn-primary">
        <tr>
            <th>ID</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Genger</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Province</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php
        if(isset($data['view'])){
            foreach($data['view'] as $getResult){
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $getResult['id'] ?></td>
                            <td><?php echo $getResult['firstname'] ?></td>
                            <td><?php echo $getResult['lastname'] ?></td>
                            <td><?php echo $getResult['gender'] ?></td>
                            <td><?php echo $getResult['phone'] ?></td>
                            <td><?php echo $getResult['email'] ?></td>
                            <td><?php echo $getResult['province'] ?></td>
                            <td>
                                <a href="index.php?action=detail&id=<?php echo $getResult['id']; ?>"><i class="material-icons">remove_red_eye</i></a>
                                <a href="index.php?action=edit&id=<?php echo $getResult['id']; ?>"><i class="material-icons">create</i></a>
                                <a href="index.php?action=delete&id=<?php echo $getResult['id']; ?>"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                    </tbody>
                <?php
            }
        }
    ?>
</table>