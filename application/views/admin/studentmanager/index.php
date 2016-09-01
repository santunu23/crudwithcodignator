<h2 class="page-header">Student Info</h2>
<?php if($users):?>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Class</th>
       <th>Date of Admission</th>
        <th>Edit/Delete</th>
        <th></th>
    </tr>
    <?php 
     foreach($users as $user):?>
    <tr>
        <td><?php echo $user->id;?></td>
        <td><?php echo $user->fname ;?> <?php echo $user->lname;?></td>
        <td><?php echo $user->class;?></td>
        <td><?php echo $user->create_date;?></td>
        <td><?php echo anchor('admin/studentmanager/edit/'.$user->id.'','Edit','class="btn btn-default"');?>
        <?php echo anchor('admin/studentmanager/delete/'.$user->id.'','Delete','class="btn btn-danger"');?></td>
        
    </tr>
<?php endforeach;?>    
</table>
<?php else:?>
<p>No Pages Found</p>
<?php echo anchor('admin/users/add','Create_Users','class="btn btn-primary"');?>
<?php endif;?>
