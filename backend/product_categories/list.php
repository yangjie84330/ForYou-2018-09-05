<?php
require_once('../function/login_check.php');
require_once('../../connection/connection.php');?>
<?php
$limit = 2;
if (isset($_GET["page"])) { 
  $page  = $_GET["page"]; 
} else { 
  $page=1; 
};
$start_from = ($page-1) * $limit;
$query = $db->query("SELECT * FROM product_categories ORDER BY product_categories_id ASC LIMIT ".$start_from.",".$limit);
$data = $query->fetchAll(PDO::FETCH_ASSOC);
$total_rows = count($data);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../css/theme.css" type="text/css"> </head>
</head>

<body>
  <?php require_once('../function/backend_nav.php'); ?>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">產品分類管理</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left">
          <ul class="breadcrumb" style="margin-bottom: 0px; margin-top: 0px;">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">產品分類管理</li>
          </ul>
          <a href="create.php" class="btn btn-outline-primary m-2">新增</a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
        <?php if($total_rows > 0){ ?>
          <table class="table">
            <thead>
              <tr>
                <th>產品分類</th>
                <th width="30%">操作</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($data as $product_categories){ ?>  
              <tr>
                <td><?php echo $product_categories['category'];?></td>
                <td>
                  <a href="../products/list.php?product_categories_id=<?php echo $product_categories['product_categories_id'];?>" class="btn btn-outline-primary">產品管理</a>
                  <a href="edit.php?product_categories_id=<?php echo $product_categories['product_categories_id'];?>" class="btn btn-outline-primary">編輯</a>
                  <a href="delete.php?product_categories_id=<?php echo $product_categories['product_categories_id'];?>" class="btn btn-outline-primary" onclick="if(!confirm('是否確定刪除此筆資料?刪除後無法回復')){return false;};">刪除</a>
                </td>
              </tr>
            <?php } ?>  
            </tbody>
          </table>
          <?php } else {?>
                <p>目前無資料，請新增一筆。</p>
          <?php }?>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12"> </div>
      </div>
      <div class="row">
        <div class="col-md-12">

          <?php  if($total_rows > 0){
            $sth = $db->query("SELECT * FROM product_categories ORDER BY product_categories_id ASC");
            $data_count = count($sth ->fetchAll(PDO::FETCH_ASSOC));
            $total_pages = ceil($data_count / $limit); //無條件進位
          ?>      

          <ul class="pagination">
            <li class="page-item">

             <?php if($page>1){ ?>
              <a class="page-link" href="list.php?page=<?php echo $page-1; ?>"><span>«</span></a>
              <?php }else{ ?>
              <span class="page-link">«</span>
              <?php } ?>

            </li>

            <?php for($i=1;$i<=$total_pages;$i++){ ?>
            <li class="page-item">
              <a class="page-link" href="list.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
            <?php } ?>

            <li class="page-item">

              <?php if($page<$total_pages){ ?>
              <a class="page-link" href="list.php?page=<?php echo $page+1; ?>"><span>»</span></a>
              <?php }else{ ?>
              <span class="page-link">»</span>
              <?php } ?>

            </li>
          </ul>
        <?php } ?>  
        </div>
      </div>
    </div>
  </div>

  <div class="py-5 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 MacroViz - All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:250px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  </pingendo>
</body>

</html>