<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['packages'] = array();
$autoload['libraries'] = array('database','form_validation','Template','Pagination');
$autoload['drivers'] = array();
$autoload['helper'] = array('html','url','form','date');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('activity_model','Studentmanager_model','Findclass_model','Getgender_data');
