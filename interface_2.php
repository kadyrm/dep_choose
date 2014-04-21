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
                <img src="img/banner.png" />
                
            </div>
        </div>
    </div>
    
    <div style="margin-top:-40px" class="container" >
        <div class="row" >
            <div class="span3">
            <div class="alert alert-info">Tercih Robotu </div>
                <form action="lib3.php" method="POST">
                    <fieldset>
                        <legend>Puan Sorgula</legend>
                        <label>Toplam puanınızı giriniz :                        
                        </label>
                        <input style="width:200px;" name="puan" type="text" value="0"/><br>
                        <label><br>Puan türü seçiniz : </label>
                        <select style="width:200px;" size="4" name="puan_tur[]" multiple>
                            <option value="0">Tümü</option>
                            <option >Sayisal</option>
                            <option >Sozlu</option>
                            <option >EA</option>
                        </select>
                        <p>
                        <label class='radio inline'>
                        <input checked type='radio' name='lisans_tur' value='0'>
                            Tümü
                        </label><label class='radio inline'>
                        <input  type='radio' name='lisans_tur' value='1'>
                            Lisans
                        </label><label class='radio inline'>
                        <input  type='radio' name='lisans_tur' value='2'>
                            Önlisans
                        </label></p>                   
                    <input type="submit" name="Puan Giriniz">                        
                    </fieldset>
                </form>
            </div>
            <div class="span9">
                <div class="alert alert-info">2013 ÖSYS sonuçlarına göre puanınızın %5 fazlasına göre tercih edebileceğiniz bölümler : </div>
                <table class='table table-striped'><tr>
                <th>Fakülte/Y.Okul</th>
                <th>Program Kodu</th>
                <th>Program Adı</th>
                <th style='width:50px;text-align:center;'>Puan Türü</th>
                <th style='text-align:center;'>Kontenjan OSYS</th>
                <th style='text-align:center;'>Kontenjan Manas</th>
                
                <th>Min Puan</th>
                <th>Max Puan</th>
                <th>Program Türü</th>
                </tr>
                <?php                           
                       echo $_POST['puan'];
                        //testing();         
                ?>                 
                </table>
                </div>
        </div>
        <footer>
        <p style="text-align: center">&copy; Manas University 2013</p>
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
