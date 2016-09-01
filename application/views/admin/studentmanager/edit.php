<h2 class="page-header">Edit/Update Student Information </h2>
<?php echo validation_errors('<p class="alert alert-danger">');?>
<?php echo form_open('admin/Studentmanager/edit/'.$stmger->id);?>

<div class="form-group">
    <?php echo form_label('First Name','first_name'); ?>
    <?php 
    $data=array
        (
        'name'=>'fname',
        'id'=>'fname',
        'maxlength'=>'50',
        'class'=>'form-control',
        'value'=>$stmger->fname,
        
         );
    ?>
    <?php echo form_input($data);?>
</div>
<div class="form-group">
    <?php echo form_label('Last Name','last_name'); ?>
    <?php 
    $data=array
        (
        'name'=>'lname',
        'id'=>'lname',
        'maxlength'=>'50',
        'class'=>'form-control',
        'value'=>$stmger->lname,
        
         );
    ?>
    <?php echo form_input($data);?>
</div>

<div class="form-group">
    <?php echo form_label('Class','class');?>
    <?php echo form_dropdown('class',$user_options,0,array());?>
</div>
<div class="form-group">
    <?php echo form_label('Gender','gender');?>
    <?php echo form_dropdown('gender',$gender_options,0,array());?>
</div>







<?php echo form_submit('mysubmit','Update category',array('class'=>'btn btn-primary'));  ?>
<?php echo form_close();?>


