<h2>Add new Student</h2>
<?php echo validation_errors('<p class="alert alert-danger">');?>
<?php echo form_open('admin/studentmanager/add');?>
<div class="form-group">
    <?php echo form_label('First Name','first_name'); ?>
    <?php 
    $data=array
        (
        'name'=>'fname',
        'id'=>'fname',
        'maxlength'=>'50',
        'class'=>'form-control',
        'value'=>  set_value('first_name'),
        
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
        'value'=>  set_value('last_name'),
        
         );
    ?>
    <?php echo form_input($data);?>
</div>
<div class="form-group">
    <?php echo form_label('Password','password');?>
    <?php
      $data=array
          (
          'name'=>'password',
          'id'=>'password',
          'maxlength'=>'30',
          'type'=>'password',
          'class'=>'form-control',
          'value'=>  set_value('password'),
          );
    ?>
    <?php echo form_input($data);?>
</div>
<div class="form-group">
    <?php echo form_label('Confirm Password','password');?>
    <?php
      $data=array
          (
          'name'=>'password2',
          'id'=>'password2',
          'maxlength'=>'30',
          'type'=>'password',
          'class'=>'form-control',
          'value'=>  set_value('password'),
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

<?php echo form_submit('mysubmit','Add Student Details',array('class'=>'btn btn-primary','span class'=>'glyphicon glyphicon-search'));  ?>
<?php echo form_close();?>

