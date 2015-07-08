<!DOCTYPE html>
<?php
   $url = $this->config->item('base_url');
?>
<html>
  <head>
  <link rel="icon" 
      type="image/png" 
      href="<?php echo $url;?>uiux/img/favicon.png">
    <title>Utano</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $url?>uiux/semantic-ui/semantic.min.css">
   
  </head>

 <div class="ui menu">
  <div class="header item">
    <a href="<?php echo  base_url();?>">Utano Network</a>
  </div>
  <a class="item">
    About Us
  </a>
  <a class="item">
    Jobs
  </a>
  <a class="item">
    Team
  </a>
</div>