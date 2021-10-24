<?php
include ('../database/db1.php');

if(isset($_REQUEST['level']))
{
    $lev=$_REQUEST['level'];
    if($lev=='Low')
    {
        if($_REQUEST['cat']=='Entertainment')
        {
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
            $sql="SELECT * FROM entertainment";
            $query_result=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($query_result, MYSQLI_NUM);
            $que_id=$row[0];
            $que=$row[1];
            $opt1=$row[2];
            $opt2=$row[3];
            $opt3=$row[4];
            $opt4=$row[5];
            $ans=$row[6];
            $level=$row[7];

        }
        elseif($_REQUEST['cat']=='Land&people')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='History')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Literature&language')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Sports')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Science&technology')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Current&wolrdaffairs')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Business')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Wildlife')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Personalities')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
    }
    elseif($lev=='Medium')
    {
        if($_REQUEST['cat']=='Entertainment')
        {
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Land&people')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='History')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Literature&language')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Sports')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Science&technology')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Current&wolrdaffairs')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Business')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Wildlife')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Personalities')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
    }
    if($lev=='High')
    {
        if($_REQUEST['cat']=='Entertainment')
        {
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Land&people')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='History')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Literature&language')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Sports')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Science&technology')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Current&wolrdaffairs')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Business')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Wildlife')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
        elseif($_REQUEST['cat']=='Personalities')
        {	
            $abc=$_REQUEST['cat'];
            echo $lev."-->".$abc;
        }
    }
}
?>