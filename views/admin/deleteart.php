<?php
if($arg1 == false){
  echo "there is no data" . "<br>";
} else{
  foreach ($arg1['notes'] as $d){
    ?>
    <a href="<?php echo URL ?>admin/deletecur/<?php echo $d['id'] ?>/<?php echo $arg1['cur_page'] ?>">delete</a>
    <?php

    echo $d['name'] . "<br>";
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
    <a href="<?php echo URL ?>admin/deleteart/<?php echo $p ?>"><?php echo $p ?></a>
    <?php
  }
}