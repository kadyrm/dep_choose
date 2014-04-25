<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<meta name="author" content="">
<meta http-equiv="Reply-to" content="@.com">
<meta name="generator" content="PhpED 8.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="creation-date" content="09/06/2012">
<meta name="revisit-after" content="15 days">
<meta charset="utf-8">
    <title>KTMU Department Choose Utility</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
        .banner{

            background-color:#FFF;
            position:relative;
            margin-left:auto;
            margin-right:auto;
            top:0;

        }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

</head>

    <body>
        <!-- <div class="navbar navbar-inverse navbar-fixed-top">
             <div class="navbar-inner">
                 <div class="container">
     
                     
     
                 </div>
             </div>
         </div>-->
    <div class="navbar navbar-inverse navbar-fixed-top" style="background:url(img/tk.png) 0px -4px;background-repeat:repeat-x;">
        <div class="container" >
            <div class="banner">
                <img src="/img/banner.png" />
                
            </div>
        </div>
    </div>
    
    <div style="margin-top:-40px" class="container" >
        <div class="row" >
            <div class="span3">
            <div class="alert alert-info">Tercih Robotu </div>
                <form action="action_4.php" method="POST">
                    <fieldset>
                        <legend>Puan Sorgula</legend>
                        <label>Toplam puanınızı giriniz :                        
                        </label>
                        <input style="width:200px;" name="puan" type="text" value="0"/><br>
                        <label><br>Puan türü seçiniz : </label>
                        
                        <p>
                        <label class='radio inline'>
                        <input checked type='radio' name='exam_type' value='0'>
                            All
                        </label>
                        <label class='radio inline'>
                        <input  type='radio' name='exam_type' value='1'>
                            Humanities
                        </label>
                        <label class='radio inline'>
                        <input  type='radio' name='exam_type' value='2'>
                            Exact Sciences
                        </label>
                        <label class='radio inline'>
                        <input  type='radio' name='exam_type' value='3'>
                            EA
                        </label>
                        </p>                    
                    <input type="submit" name="Puan Giriniz">                        
                    </fieldset>
                </form>
            </div>
            <div class="span9">
                <div class="alert alert-info">2013 Manas ÖSS sonuçlarına göre puanınızın %5 fazlasına göre tercih edebileceğiniz bölümler : </div>
                
                <?php                           
                       //echo $_POST['puan'];
                       include "lib6.php";
                       start();         
                ?>                 
                
                </div>
        </div>
        <footer>
        <p style="text-align: center">&copy; Manas University 2014</p>
      </footer>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
<!--    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>-->

</body>
</html>
