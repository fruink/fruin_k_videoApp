<?php
    //echo "from read.php"

    function getAll($tbl){
        require_once("connect.php");

        $queryAll = "SELECT * FROM {$tbl}";
        //echo $queryAll;
        $runAll = mysqli_query($link, $queryAll);

        if($runAll) {
            return $runAll;
        }else{
            $error = "There was a error accessing this information.
            Please contact Karlee for tech support.";
            return $error;
        }

        mysqli_close($link);
    }

    function filterType($tbl, $tbl1, $tbl2, $col, $col1, $col2, $filter)
    {
      require_once("connect.php");

      $queryFilter = "SELECT * FROM {$tbl}, {$tbl1}, {$tbl2} WHERE {$tbl}.{$col}
      = {$tbl2}.{$col} AND {$tbl1}.{$col1} = {$tbl2}.{$col1} AND {$tbl1}.{$col2}
      = '{$filter}'";

      $runFilter = mysqli_query($link, $queryFilter);

      if ($runFilter) {
        return $runFilter;
      }else {
        return $error;
      }
      mysqli_close($link);
    }

    function getSingle($id, $tbl, $col){
      require_once("connect.php");
      $querySingle = "SELECT * FROM {$tbl} WHERE {$col}={$id}";
      echo $querySingle;

      mysqli_close($link);
    }
?>
