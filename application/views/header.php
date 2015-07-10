<!DOCTYPE html>
<?php
   $url = $this->config->item('base_url');
?>
<html>
  <head>
  <link rel="icon" 
      type="image/png" 
      href="<?php echo $url;?>uiux/img/favicon.png">
    <title>Utano |</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $url?>uiux/semantic-ui/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url?>uiux/semantic-ui/UI-Icon-master/icon.min.css">


   
  </head>

 

<div class="ui segment">
  <h3 class="ui left floated header">
    <a href="<?php echo  base_url();?>">Utano Network</a>
  </h3>
  <h3 class="ui right floated header">
   <a href="<?php echo base_url();?>find/about" </a>
    About Us 
  </a>
  </h3>
  <h3 class="ui right floated header">
   <a href="<?php echo base_url();?>find/partners" </a>
    Partners | 
  </a>
  </h3>
  <h3 class="ui right floated header">
    <a href="<?php echo base_url();?>find/jobs" </a>
    Jobs  |
  </a>
  </h3>
  
  <h3 class="ui right floated header">
  <a href="<?php echo base_url();?>find/team" </a>
    Team  | 
  </h3>
  <h3 class="ui right floated header">
   <a href="<?php echo base_url();?>find/practise" class="ui blue button">Add your practise.</a>

  </h3>
</div>