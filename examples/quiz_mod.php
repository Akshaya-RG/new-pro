
<?php

require_once("db2.php");

class Quiz {
    
public function get_mcq_ids($q_no)
{ $a=$q_no;
    try
    {
        
        $conn = new Connection();
        $dbconn = $conn->getConnection();

        $selectQuery = "SELECT `qn_no` FROM `qn` where `ass_no` = $a order by qn_no asc;";
        
        $mcq_ids_array = NULL;
        foreach( $dbconn->query($selectQuery, PDO::FETCH_ASSOC) as $mcq_id_array)
        {
            $mcq_ids_array[] = $mcq_id_array;
        }
        
        $mcq_ids = NULL;
        foreach($mcq_ids_array as $mcq_id_array)
        {
            $mcq_ids[] = $mcq_id_array["qn_no"];            
        }
        return $mcq_ids;

    }
    catch (PDOException $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
    catch (Exception $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
}
    
public function get_mcqs($mcq_ids,$q_no)
{ $rr=$q_no;
    try
    {
        $conn = new Connection();
        $dbconn = $conn->getConnection();

        $selectQuery = "SELECT * FROM `qn` WHERE `qn_no`  IN ({$mcq_ids}) and `ass_no`=$rr order by qn_no asc;";
        
        $mcqs = NULL;
        foreach( $dbconn->query($selectQuery, PDO::FETCH_ASSOC) as $mcq)
        {
            $mcqs[] = $mcq;
        }
        return $mcqs;
    }
    catch (PDOException $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
    catch (Exception $e)
    {
        echo "<script>alert(".$e->getMessage().");</script>";
    }
}
        
} //end MCQ class

?>