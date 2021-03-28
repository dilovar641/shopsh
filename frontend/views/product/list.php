<?php
include_once __DIR__ ."/../site/header.php";
?>

<div id="content" class="width1024">
<?php
include_once __DIR__ ."/../site/sidebar.php";
?>
<div class="body">


<div id="product-list">
<ul>
<?php for($i=0;$i<sizeof($all);$i++):
if($i % 5 === 0)print "</ul><ul>";
?>
<li>
  <img src="img/sale30.png">
 <a href="?model=product&action=view&id=<?=$all[$i]['id']?>"><img src="http://uploads.shop/products/<?=$all[$i]['picture']?>"></a>
 <h4><a href="?model=product&action=view&id=<?=$all[$i]['id']?>"><?=$all[$i]['title']?></a></h4>
 <div class="price"><?=$all[$i]['price']?></div>
 </li>
 <?php endfor;?>
 
  </ul>
  <div class="pager">
<div class="link-to-begin"><a href="#"><<<<</a></div>
<div class="link-to-left"><a href="#"></a></div>
<div class="pager"><a href="#">1</a></div>
<div class="pager"><a href="#">2</a></div>
<div class="pager current"><a href="#">3</a></div>
<div class="pager"><a href="#">4</a></div>
<div class="pager"><a href="#">5</a></div>
<div class="link-to-right"><a href="#"></a></div>
<div class="link-to-end"><a href="#">>>>></a></div>
</div>
</div>
</div>
</div>

<?php
include_once __DIR__ ."/../site/footer.php";
?>