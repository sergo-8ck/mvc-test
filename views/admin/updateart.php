<?php
if($arg1 == false){
  echo "there is no data" . "<br>";
} else{
  foreach ($arg1['notes'] as $d){
    ?>
    <a href="<?php echo URL?>admin/updatecur/<?php echo $d['id']?>">
      <?php echo $d['name'] . "<br>";?>
    </a>
    <?php

    echo $d['content'] . "<br>";
    echo $d['created_at'] . "<br>";
    echo $d['updated_at'] . "<br><hr>";
  }
}

for($p = 1; $p <= $arg1['total_pages']; $p++){
  if($p == $arg1['cur_page']){
    echo $p;
  }else{
    ?>
    <a href="<?php echo URL ?>admin/updateart/<?php echo $p ?>"><?php echo $p ?></a>
    <?php
  }
}