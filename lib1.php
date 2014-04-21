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


testing();
 
 //FUNCTIONS:
 //
function testing(){
    
$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "ktmu"; 
$tblname = "quota_and_score_minmax";
$dbhandle =NULL;

//$query = get_greater_than_from($tblname,$post_data,"humanities");
//echo $query;
$result = connect($hostname,$username,$password,$dbname, $tblname, $dbhandle, "");

put_in_table($result);
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
function get_data($tbl){
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
function get_score_above($tbl, $score, $exam){
        $query = "SELECT * FROM `".$tbl."`". 
        "WHERE `score_min` >= ".$score." AND `exam_type`"."'".$exam."'";      
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
    $score = 130;
    $query = query_build_greater($score,$tbl_name);
    
    return $query;
}
function create_condition($field_name, $sign, $field_val){
      return "`".$field_name."`".$sign."'".$field_val."'";        
}
function append_condition($query, $con_name, $con_value){
      $query = $query." AND `".$con_name."` = '".$con_value."'";
      return $query;
    
}
function query_build_greater($tblname, $field_name, $field_val){
      $query = "SELECT * FROM `".$tblname."` WHERE `".$field_name."` >= ".$field_val;
     return $query; 
}
function connect($hostname,$username,$password, $dbname, $tblname, &$dbhandle, $query){
    $dbhandle = mysql_connect($hostname, $username, $password)
        or die("Unable to connect to MySQL");
    //echo "Connected to MySQL<br>"; 
    //select a database to work with
    $selected = mysql_select_db($dbname,$dbhandle)
      or die("Could not select examples");
    //mysql_query("SET NAMES UTF8");
    //execute the SQL query and return records
    //$query1 = "SELECT * FROM `quota_and_score_minmax` WHERE `score_min` >= 130 AND `exam_type` = 'humanities'";      
    $result = get_data("quota_and_score_minmax");
    if (!$result){
        echo "Query failed.";
    }
    //echo "Database Selected: ".$dbname."<br>";
    //echo "Table selected:".$tblname."<br>";
    //build_tree_expandable($result);
    //mysql_close($dbhandle);   
    return $result;   
}
function connect1($hostname,$username,$password, $dbname, $tblname, $dbhandle, $query){
    $dbhandle = mysql_connect($hostname, $username, $password)
        or die("Unable to connect to MySQL");
    //echo "Connected to MySQL<br>"; 
    //select a database to work with
    $selected = mysql_select_db($dbname,$dbhandle)
      or die("Could not select examples");     
    //echo "Database Selected: ".$dbname."<br>";      
    return $dbhandle;   
}
?>
