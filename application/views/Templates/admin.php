<!--/*
 * license under joy sen,ohnnu.com,
 * ask for full code,mail me on santunu23@gmail.com
 * 
*/-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>crudwithCodignator</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.2.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">crudwithCodignator</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li><?php echo anchor('dashboard','Dashboard','title="Dashboard Home"'); ?></li>
              <li><?php echo anchor('admin/studentmanager','All Data','title="View student"');?></li>
              <li><?php echo anchor('admin/studentmanager/searchclasswise','Sort Data','title="View student"'); ?></li>
          </ul>
       
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info"><?php echo anchor('admin/studentmanager/add','Student Manager'); ?></li>
                    <li class="list-group-item list-group-item-info"><?php echo anchor('admin/studentmanager/searchclasswise','Class Info'); ?></li>
                    <li class="list-group-item list-group-item-info"><?php echo anchor('admin/studentmanager/pagination','Example of pagination'); ?></li>
                </ul>
            </div>
            <div class="col-md-8">
                <!-- Load Main View-->
            <?php $this->load->view($main); ?>
            </div>
        </div>

    </div><!-- /.container -->

    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

  </body>
</html>
