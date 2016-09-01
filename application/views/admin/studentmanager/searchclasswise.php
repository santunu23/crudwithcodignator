<h2>Search and Get instant result</h2>
<?php echo validation_errors('<p class="alert alert-danger">');?>
<div class="container">
<div class="row-even">
<?php echo form_open('admin/studentmanager/searchclasswise');?>
<div class="form-group">
<?php echo form_label('Class','class');?>
<?php $data=array
             (
              'type'=>'number',
              'name'=>'class',
              'id'=>'class',
              'value'=>  set_value('Select name'),
             );?>  
    <?php echo form_input($data);?>
</div>
<?php echo form_submit('mysubmit','Generate Result',array('class'=>'btn btn-success'));  ?>
<?php echo form_close();?>
    </div>
</div>

<div class="container">
    <?php if($findquery):?>
<table class="table table-striped">
 
    <?php 
    echo '<tr>
        <th>Name</th>
        <th>Class</th>
        <th>Date of admission</th>
        </tr>';
     foreach($findquery as $querys):?>
    <tr>
        <td><?php echo $querys->fname ;?> <?php echo $querys->lname;?></td>
        <td><?php echo $querys->class;?></td>
        <td><?php echo $querys->create_date;?></td>
       
    </tr>
<?php endforeach;?>    
</table>
<?php else:?>
<p>You entered a wrong Value</p>
<?php endif;?>
</div>



