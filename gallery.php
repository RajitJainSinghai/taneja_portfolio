<?php include('admin/config.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="./css/gallery.css">
<link rel="stylesheet" href="./css/header.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <title>Varsha Taneja Art Gallery</title>
    
</head>
<body>
  <?php include('header.php');?>
  <?php include('preloader.php');?>




<div id="myBtnContainer">
      <?php 
      $stmt=$conn->prepare("SELECT * FROM `category` where status='p'");
      $stmt->execute();
      ?>

      <?php 
      while($arr=$stmt->fetch(PDO::FETCH_ASSOC))
      {
      ?>

      <a style="text-decoration:none;" href="#<?php echo $arr['category_name'];?>" id="<?php echo $arr['category_name'];?>"  onfocus="filterSelection('<?php echo $arr['category_name'];?>')"> <p class="js-click"><?php echo($arr['category_name']);?><p> </a>

      <?php
      }
      ?>
          
</div>
 

  <?php 
      $sad1=$conn->prepare("SELECT * FROM `category` where status='p' order by serial asc");
      $sad1->execute();
      $i = 1;
      while($sad=$sad1->fetch(PDO::FETCH_ASSOC))
      {
        $cat =$sad['category_name'];
     
 $pat1=$conn->prepare("SELECT * FROM `image_details` where status='p' and category_name='$cat' order by serial desc");
      $pat1->execute();
      $i = 0;
      while($pat=$pat1->fetch(PDO::FETCH_ASSOC))
      {
 
 ?>
 

<div class="filterDiv <?php echo $cat;?>">
       <span id="category_results">
       <div id="categories_hub">
      <img id="category-img" src="admin/images/portfolio/<?php echo $pat['image_name']; ?>" onclick="document.getElementById('<?php echo $pat['id']; ?>').style.display='block'">
      <div class="painting_details">
    <p class="painting_title"><?php echo $pat['title']; ?></p>
    <p class="painting_medium"><?php echo $pat['image_medium']; ?></p>
    <p class="painting_sizing"><?php echo $pat['image_size']; ?></p>
  </div>
      <div id="<?php echo $pat['id']; ?>" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <img src="admin/images/portfolio/<?php echo $pat['image_name']; ?>">
          <div class="painting_details">
          <p class="painting_title"><?php echo $pat['title']; ?></p>
    <p class="painting_medium"><?php echo $pat['image_medium']; ?></p>
    <p class="painting_sizing"><?php echo $pat['image_size']; ?></p>
  </div>
        </div>
      </div>
    </div>
<?php } } ?>




















  
      
  
  

      <script src="./javascript/gallery.js"></script>  
      <script src="javascript/script.js"></script>

</body>
</html>



