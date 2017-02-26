<?php

    include "header.php";

    $id=$_GET["id"];
    $sql="select * from shows where sid=".$id;
    $result=$db->query($sql);
    $row=$result->fetch_assoc();

?>
<style>
    p{
        padding:0;
        margin:0;
    }
    .box{
    	height: 600px;
    	width: 100%;        
    	background: url(img/banner.jpg);
    }
    .content{
        min-height:400px;
        width: 800px;
        /*border:1px solid #FFFFFF;*/
        border-top: 0px;
        padding-top:20px;
        margin:0 auto;

    }
    .title{
        line-height:50px;
        text-align:center;
        font-weight:500;
        font-size:20px;
        color:#fff;
        margin:0;
    }
    .info{
        line-height:20px;
        text-align:center;
        border-bottom:1px solid #ddd;
        padding-bottom:10px;
    }
    .time,.usename{
        column-rule: #f4f4f4;;
        padding:10px;
        color: #FFFFFF;
    }
    .scon{
        padding:15px;
        color: #FFFFFF;
    }
</style>
<div class="box">
	<div class="content">
	    <h3 class="title"><?php echo $row["stitle"]?></h3>
	    <p class="info">
	        <span class="time"><?php echo $row["stime"];?></span>
	        <span class="usename"><?php echo $row["usename"];?></span>
	    </p>
	    <div class="scon">
	        <?php echo $row["scon"]?>
	    </div>
	</div>
</div>
</body>
</html>