<?php include "header.php"; ?>
<style>
    .content{
    	background: url(img/banner.jpg);
        width:100%;
        margin:0 auto;
        height: 500px;
    }
    .content p{
         height:30px;
         width: 100%;
         margin-left: 50px;
         color: #ccc;
         font-size: 25px;
         padding-top: 30px;
         margin-top: 0px;
    }
    .list{
        height: 50px;
        width:300px;
        /*border:1px solid #000;*/
        margin:5px;
        float:left;
        line-height:30px;
        text-align:center;
    }
    .list a{
        color:#FFFFFF;
    }
</style>
<div class="content">
	<p>新闻分类</p>
    <ul>
        <?php
            $id=$_GET["id"];
            $sql="select * from category where pid=".$id;
            $result=$db->query($sql);
            while($row=$result->fetch_assoc()){
        ?>
        <li class="list">
            <a href="list.php?id=<?php echo $row['cid'];?>"><?php echo $row['cname']?></a>
        </li>
        <?php
            }
        ?>
    </ul>
</div>



</body>
</html>