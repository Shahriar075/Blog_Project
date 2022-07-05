<?php include 'header.php';
    include "config.php";
    $id=$_GET['id'];
    if(empty($id)){
        header("location:index.php");
    }
    $sql="SELECT * FROM blog WHERE blog_id='$id'";
    $run=mysqli_query($config,$sql);
    $post=mysqli_fetch_assoc($run);
?>
<div class="container mt-2">
	<div class="row">
		<div class="col-lg-8">
            <div class="card shadow">
              <div class="card body">
                <div  id="single_img">
                    <?php $img=$post['blog_image'] ?>
                   <a href="admin/upload/<?= $img ?>">
                   <img src="admin/upload/<?= $img ?>" alt="">
</a>
</div>
<hr>
<div>
    <h5><?= $post['blog_title'] ?></h5>
    <p><?= strip_tags($post['blog_body']) ?></p>
</div>
<link rel="stylesheet" href="style2.css">
<body>
    <br><br>
    <p id="votes">0<p>
    <button id="upvote" onclick="upvote()">Upvote</button>
    <button id="downvote" onclick="downvote()">Downvote</button>
    <script src="script.js" charset="utf-8"></script>
</body>
</div>
</div>
</div>
<?php include "sidebar.php" ?>
</div>
</div>
<?php include 'footer.php' ?>