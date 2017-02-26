<?php include "header.php"; ?>

<style>
    p{
        padding:0;
        margin:0;
    }
    .content{
        width: 100%;
        height: 500px;
        margin:0 auto;
        padding-top:20px;
        background: url(img/banner.jpg);
    }
    .content ul{
    	width: 1000px;
    	height: 500px;
    	margin: 0 auto;
    }
    .content ul h1{
    	height: 30px;
    	padding-top: 50px;
    	color: #FFFFFF;
    	font-size: 30px;
    	margin-bottom: 50px;
    }
    .list{
        height:30px;
        line-height:30px;
        border-bottom:1px solid #000;
    }
    .list>p.title{
        height:100%;
        width:550px;
        padding-left:20px;
        float:left;
    }
    .list>p.info{
        width:200px;
        float:right;
    }
    .list>p>a{
        color:#FFFFFF;	
        font-weight:500;
        margin-right:100px;
    }
    .list>p span{
        float:left;
        margin-right: 10px;
    }
    .list .username{
        width:100px;
        overflow:hidden;
    }
    .list>p span{
        display:inline-block;
        text-align:left;
        color:#ccc;
        font-size:12px;
    }
</style>

<div class="content">
    <ul>
    	<h1>新闻标题</h1>
        <?php
            $id=$_GET["id"];
            $sql="select * from shows where cid=".$id;
//            echo $sql;
            $result=$db->query($sql);
            while($row=$result->fetch_assoc()){
        ?>
        <li class="list">
            <p class="title"><a href="show.php?id=<?php echo $row['sid'] ?>"><?php echo $row['stitle'];?></a></p>
            <p><span class="usename">作者：<?php echo $row["usename"]?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="time">时间:<?php echo $row["stime"];?></span></p>
        </li>
        <?php
            }
        ?>
    </ul>

</div>

</body>
</html>
