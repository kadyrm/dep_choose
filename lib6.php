<?php
$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "ktmu"; 
$tblname = "quota_and_score_minmax";
$dbhandle =NULL;
// MAIN


//connect($hostname,$username,$password,$dbname,$tblname,$dbhandle);
//mysql_close($dbhandle);

  
//testing_post();

 
 //FUNCTIONS:
 //
function start(){
    
    if (empty($_POST)){
        echo "post is empty";        
        }
    else{
        $input_score = $_POST['puan'];
        $exam_index = $_POST['exam_type'];
        
        switch ($exam_index) {
            case 0:
                $exam_type = "All";
                break;
            case 1:
                $exam_type= "humanities";
                break;
            case 2:
                $exam_type= "natural sciences";
                break;
            case 3:
                $exam_type = "EA";
                break;
        }
       echo "Girdiğiniz puan: ".$input_score."<br>";
       echo "Seçtğiniz puan türü: ".$exam_type."<br>";
       run2($input_score, $exam_type);        
    }
        
} 
function run2($score, $exam_type){
    
$username = "kadyrm";
$password = "123";
$hostname = "localhost";
$dbname = "ktmu"; 
$tblname = "quota_and_score_minmax";
$dbhandle =NULL;

//$query = get_greater_than_from($tblname,$post_data,"humanities");
//echo $query;
$dbhandle = connect($hostname,$username,$password,$dbname);
if ($exam_type == "All")
    $result = get_greater_than($tblname, "score_min", $score);
    //$result = get_all("quota_and_score_minmax");
else{
    $result = get_by($tblname, $score, $exam_type);    
}
draw_table($result);
mysql_close($dbhandle);
}
function run($arg_1){
    
$username = "kadyrm";
$password = "123";
$hostname = "local";
$dbname = "ktmu"; 
$tblname = "quota_and_score_minmax";
$dbhandle =NULL;

//$query = get_greater_than_from($tblname,$post_data,"humanities");
//echo $query;
$dbhandle = connect($hostname,$username,$password,$dbname);
$result = get_all("quota_and_score_minmax");
$result = get_by($tblname, $arg_1, "humanities");
$result = get_greater_than($tblname, "score_min", $arg_1);

put_in_table($result);
mysql_close($dbhandle);
}
function draw_table($result){
echo "<br><br><table class='table table-striped'><tr>";
echo "<th>Fakülte/Y.Okul</th>";
echo "<th>Program Kodu</th>";
echo "<th>Program Adı</th>";
echo "<th style='width:50px;text-align:center;'>Puan Türü</th>";
echo "<th style='text-align:center;'>Kontenjan OSYS</th>";
echo "<th style='text-align:center;'>Kontenjan Manas</th>";
echo "<th>Min Puan</th>";
echo "<th>Max Puan</th>";
echo "<th>Program Türü</th>";
echo "</tr>" ;

put_in_table($result);

echo "</table>";
    
}
function put_in_table($result){

       while ( $row = mysql_fetch_array($result)){
        $id = $row{'id'};
        $code = $row{"code"};
        $fac_url = "#"; 
        echo "<tr>";
        echo "<td>";
        open_tag("a","target", $fac_url);
        echo $row{'faculty'};                   //   output
        close_tag("a");
        echo "</td>";
        echo "<td>";
        echo $row{'code'};                      //   output
        echo "</td>";
        echo "<td>";
        open_tag("a", "href", $row{'URL'});     //   output
        echo $row{'program'};                   //   output
        close_tag("a");
        echo "</td>";
        open_tag("td", "style", "text-align:center;");
        echo $row{'exam_type'};                 //   output
        close_tag("td");
        open_tag("td", "style","text-align:center;")  ;
        echo $row{'quota_osys'};    
        close_tag("td");
        open_tag("td", "style","text-align:center;")  ;
        echo $row{'quota_manas'};
        close_tag('td');
        open_tag("td", "style","text-align:center;")  ;
        echo $row{'score_min'};
        close_tag('td');
        open_tag("td", "style","text-align:center;")  ;
        echo $row{'score_max'};
        close_tag('td');
        open_tag("td", "style","text-align:center;")  ;
        echo "Lisans";
        close_tag('td');
        echo "</tr>";
        }
    
}
function show_table($result){

    
$row = mysql_fetch_array($result);
$id = $row{'id'};
$code = $row{"code"};
$fac_url = "#";

echo "<table>";
echo "<tr>";
echo "<td>";
open_tag("a","target", $fac_url);
echo $row{'faculty'};                   //   output
close_tag("a");
echo "</td>";
echo "<td>";
echo $row{'code'};                      //   output
echo "</td>";
echo "<td>";
open_tag("a", "href", $row{'URL'});     //   output
echo $row{'program'};                   //   output
close_tag("a");
echo "</td>";
open_tag("td", "style", "text-align:center;");
echo $row{'exam_type'};                 //   output
close_tag("td");
open_tag("td", "style","text-align:center;")  ;
echo $row{'quota_osys'};    
close_tag("td");
open_tag("td", "style","text-align:center;")  ;
echo $row{'quota_manas'};
close_tag('td');
open_tag("td", "style","text-align:center;")  ;
echo $row{'score_min'};
close_tag('td');
open_tag("td", "style","text-align:center;")  ;
echo $row{'score_max'};
close_tag('td');
open_tag("td", "style","text-align:center;")  ;
echo "Lisans";
close_tag('td');
echo "</tr>";
echo "</table>";
  
    
}
function open_tag($tag_name, $property_name, $property_value){
    echo "<".$tag_name." ".$property_name."='".$property_value."'".">";
}
function close_tag($tag_name){
    echo "</".$tag_name.">";
}
function get_greater_than($tblname, $field_name, $field_val){
        $query = "SELECT * FROM `".$tblname."` WHERE `".$field_name."` <= ".$field_val;
        $result = mysql_query($query); 
        if (!$result){
            echo "Query failed.";
        }
        else
             return $result;        
}
function get_all($tbl){
    mysql_query("SET NAMES UTF8");
    //execute the SQL query and return records
    $query = "SELECT * FROM `".$tbl."` WHERE 1";      
    $result = mysql_query($query); 
    if (!$result){
        echo "Query failed.";
    }
    else
        return $result;
    
}
function get_by($tbl, $score, $exam){
        $query = "SELECT * FROM `".$tbl."` WHERE `score_min` <= ".strval($score)." AND `exam_type`"."='".$exam."'";      
         mysql_query("SET NAMES UTF8");
        //execute the SQL query and return records
        //$query1 = "SELECT * FROM `quota_and_score_minmax` WHERE `score_min` >= 130 AND `exam_type` = 'humanities'";      
        $result = mysql_query($query); 
        if (!$result)
            echo "Query failed.";
        else
            return $result;
               
}
function query_build($tbl_name){
    
}
function create_condition($field_name, $sign, $field_val){
      return "`".$field_name."`".$sign."'".$field_val."'";        
}
function append_condition($query, $con_name, $con_value){
      $query = $query." AND `".$con_name."` = '".$con_value."'";
      return $query;
    
}
function connect0($hostname,$username,$password, $dbname, $tblname, &$dbhandle, $query){
    $dbhandle = mysql_connect($hostname, $username, $password)
        or die("Unable to connect to MySQL");
    //echo "Connected to MySQL<br>"; 
    //select a database to work with
    $selected = mysql_select_db($dbname,$dbhandle)
      or die("Could not select examples");
    //mysql_query("SET NAMES UTF8");
    //execute the SQL query and return records
    //$query1 = "SELECT * FROM `quota_and_score_minmax` WHERE `score_min` >= 130 AND `exam_type` = 'humanities'";      
    $result = get_all("quota_and_score_minmax");
    if (!$result){
        echo "Query failed.";
    }
    //echo "Database Selected: ".$dbname."<br>";
    //echo "Table selected:".$tblname."<br>";
    //build_tree_expandable($result);
    //mysql_close($dbhandle);   
    return $result;   
}
function connect($hostname,$username,$password, $dbname){
    $dbhandle = mysql_connect($hostname, $username, $password)
        or die("Unable to connect to MySQL");
    //echo "Connected to MySQL<br>"; 
    //select a database to work with
    mysql_query("SET NAMES UTF8");
    $selected = mysql_select_db($dbname,$dbhandle)
      or die("Could not select examples");     
    //echo "Database Selected: ".$dbname."<br>";      
    return $dbhandle;   
}
?>
