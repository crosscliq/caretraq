 


 <div class="left-nav">
    <div id="side-nav">
      <ul id="nav">
      <?php foreach($primary as $item) : ?>
    
      <?php if($item->published) : ?>
      <li class="<?php echo $item->class; ?> <?php if($item->details['url'] == $PARAMS[0]) { echo 'current'; } ?>"> <a href="<?php echo $item->details['url']; ?>">
      	 <?php if(strlen($item->icon)) : ?>
       <i class="<?php echo $item->icon; ?> "></i>
       	 <?php endif; ?>
        <?php echo $item->title; ?> 

       </a> </li>
      <?php endif; ?>
      <?php  endforeach; ?>
        
      </ul>
    </div>
  </div>
