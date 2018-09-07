<?php 
require_once('../function/login_check.php');
require_once('../../connection/connection.php');?>

<?php 
if(isset($_POST['AddFrom']) && $_POST['AddFrom'] == "INSERT"){
  $sql= "INSERT INTO news
            (published_date,
            title,
            content,
            created_at) VALUES (
            :published_date,
            :title,
            :content,
            :created_at)";
  $sth = $db ->prepare($sql);
  $sth ->bindParam(":published_date", $_POST['published_date'], PDO::PARAM_STR);
  $sth ->bindParam(":title", $_POST['title'], PDO::PARAM_STR);
  $sth ->bindParam(":content", $_POST['content'], PDO::PARAM_STR);
  $sth ->bindParam(":created_at", $_POST['created_at'], PDO::PARAM_STR);
  $sth ->execute();

  header('Location: list.php');
}
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../../js/jquery-ui-1.12.1/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="../css/theme.css" type="text/css"> </head>
</head>

<body>
  <?php require_once('../function/backend_nav.php'); ?>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">最新消息管理</h1>
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
            <li class="breadcrumb-item active">最新消息管理</li>
            <li class="breadcrumb-item active">新增</li>
          </ul>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
        <br>
        <form class="" action="create.php" method="post" id="Form" data-toggle="validator"> 
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">發佈日期</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="published_date" id="published_date" data-error="請選擇日期" required>
                <div class="help-block with-errors alert-danger"></div>
                 </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">標題</label>
              <div class="col-sm-10">
              <input type="text" class="form-control"  name="title" data-error="請填寫標題" required>
              <div class="help-block with-errors alert-danger"></div>
              </div>
            </div>
            <div class="form-group form-row">
              <label class="col-sm-2 col-form-label">消息內容</label>
              <div class="col-sm-10">
              <textarea row="8" class="form-control" name="content"></textarea>
              </div>
            </div>
            <div class="col-md-12 text-right">
              <a href="list.php" class="btn btn-primary">取消並回上一頁</a>
              <button type="submit" class="btn btn-primary">確認送出</button>
              <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H-i-s'); ?>">
              <input type="hidden" name="AddFrom" value="INSERT" >
            </div>
          </form>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12"> </div>
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
  <script src="../../js/jquery.js"></script>
  <script src="../../js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <script src="../../js/tinymce/tinymce.min.js"></script>
  <script src="../../js/validator.js"></script>

  <script>
    //tinymce文字編輯器
  tinymce.init({
  selector: 'textarea',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount'
  ],
  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});
  </script>
  <script> 
  //使用name選取器的寫法，create裡是用id選取器的寫法
  $(function(){
    $("input[name='published_date']").datepicker({
      dateFormat: "yy-mm-dd"
    });
  } );
  </script>
</body>

</html>