<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/fontawesome-5.2.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/headstyle.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <title>contact</title>
</head>
<!-- <script>
    $(function(){
        $('#menuicon i').click(function(){
            console.log("123");
            $('.menu').slideToggle();
        });
    });
</script> -->

<body>
    <div id="document">

<?php require_once('template/navbar.php'); ?>

        <!-- <nav>
            
            <div id="menuicon">
                <i class="fas fa-bars"></i>
                <p>Accessories</p>
            </div>
            <ul class="menu">
                <li><a href="">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">News</a></li>
                <li><a href="">Contact</a></li>    
            </ul>        
        </nav> -->

        <div id="bg"><img src="images/contact_bg1.jpg" alt=""></div>

        <div class="clearboth"></div>

        <div class="contact">
                <br/>
                <h2>RESERVATION</h2>
                <h3>- 客製化服務 -</h3>
                <p>如須特別訂製請填寫表單，我們將為您服務。</p>

                <div class="form">
                    <form class="form" id="form">
                    <p>姓&nbsp;名*<br><input class="single" type="text" name="nam" id="nam" value=''></p>
                    <p>聯絡電話*<br><input class="single" type="text" name="tel" id="tel" value=''></p>
                    <p>E-mail*<br><input class="single" type="text" name="email" id="email" value=''></p>
                    
                    <p>您想製作的商品*<br>
                        <input type="checkbox">&nbsp;&nbsp;<span>耳環</span>
                        <input type="checkbox">&nbsp;&nbsp;<span>項鍊</span>
                        <input type="checkbox">&nbsp;&nbsp;<span>戒指</span>
                        <input type="checkbox">&nbsp;&nbsp;<span>手飾</span>
                        <input type="checkbox">&nbsp;&nbsp;<span>其他</span>
                    </p>

                    <p>備註*</p><textarea name="msg" class="msg" id="msg"></textarea>

                    <p class="bt"> 
                        <input name="submit" id="submit" type="submit" value="送&nbsp;出">
                        <input type="reset" value="重&nbsp;填">
                    </p>
                    </form>
                </div>
            </div>    
           <div class="clearboth"></div>

        <footer> 
            <div class="container">
            <div id="logo"></div> 
            Copyright © 2018 yuen All rights reserved.
            </div>
        </footer>
    </div>

    
</body>
</html>
