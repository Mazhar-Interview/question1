<?php
// if (isset($_POST['submitButton']))
// {
    $contents = file_get_contents ('hosts_access_log_00.txt');
    $firstWords = array();
    $file = file("hosts_access_log_00.txt"); //read file line by line
    foreach ($file as $val) {
        if (trim($val) != '') { //ignore empty lines
            $expl = explode(" ", $val);
            $firstWords[] = $expl[0]; //add first word to the stack/array
        }
    }
    $unique=array_unique($firstWords);
    for($i=0;$i<count($unique);$i++){
        $no=0;
        foreach($firstWords as $word){
            if(strcmp($unique[$i],$word)==0){
                $no++;
            }
        }
        echo $unique[$i].' '.$no.'<br>';
    }
    
// }

?>
<html>
    <head>
        <title>Question 1</title>
    </head>
    <body>
        <form action="index.php">
        Enter File Name :<input type="text">
        <input type="submit" name="submitButton" id="submitButton" value="Submit" >
        </form>
    </body>
</html>