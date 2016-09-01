<!--/*
 * license under joy sen,ohnnu.com,
 * ask for full code,mail me on santunu23@gmail.com
 * 
*/-->
<h2 class="page-header">Dashboard</h2>
<h4>Your Recent Activities </h4>
<u1 class="list-group-item">Some Events</u1>
<ul class="list_group">
    <?php foreach ($activities as $activity): ?>
    <li class="list-group-item list-group-item-success"><strong><?php echo $activity->message?></strong></li>
    <?php endforeach;?>
</ul>

