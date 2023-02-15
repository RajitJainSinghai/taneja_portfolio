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
  <?php include 'header.php';?>

   
        
<div id="myBtnContainer">
    <!-- <button class="js-click" onclick="filterSelection('all')"> Show all</button> -->
    <button class="js-click" onclick="filterSelection('Florals')">Florals</button>
    <button class="js-click" onclick="filterSelection('Portraits')"> Portraits</button>
    <button class="js-click" onclick="filterSelection('Spirituals')"> Spiritual</button>
    <button class="js-click" onclick="filterSelection('Dog portraits')">Dog portrait</button>
      <button class="js-click" onclick="filterSelection('Landscapes')">Landscape</button>
      <button class="js-click" onclick="filterSelection('Conceptuals')"> Conceptual</button>
      <button class="js-click" onclick="filterSelection('cWall paintings')">Wall painting(above 50 cms)</button>
      <button class="js-click" onclick="filterSelection('Home-Decors')">Home-Decor products</button>
      <button class="js-click" onclick="filterSelection('Jewellerys')">Jewellery</button>
      <button class="js-click" onclick="filterSelection('Jharokhas')">Jharokha </button>
  </div>
<!-- <section class="category_result"> -->
<!-- /****************** Florals*******************/ -->
 <div  class="filterDiv Florals">
 <span id="category_results">
  <div id="categories_hub">
  <img id="category-img" src="./img/Florals/floral_1.webp" onclick="document.getElementById('Florals-1').style.display='block'">
  <div id="Florals-1" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="./img/Florals/floral_1.webp" >
    </div>
  </div>
</div>


<div id="categories_hub">
  <img id="category-img" src="./img/Florals/floral_2.webp" onclick="document.getElementById('Florals-2').style.display='block'">
  <div id="Florals-2" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="./img/Florals/floral_2.webp" >
    </div>
  </div>
</div>

<div id="categories_hub">
  <img id="category-img" src="./img/Florals/floral_3.webp" onclick="document.getElementById('Florals-3').style.display='block'">
  <div id="Florals-3" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="./img/Florals/floral_3.webp" >
    </div>
  </div>
</div>

<div id="categories_hub">
  <img id="category-img" src="./img/Florals/floral_4.webp" onclick="document.getElementById('Florals-4').style.display='block'">
  <div id="Florals-4" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="./img/Florals/floral_4.webp" >
    </div>
  </div>
</div>
<div id="categories_hub">
  <img id="category-img" src="./img/Florals/floral_5.webp" onclick="document.getElementById('Florals-5').style.display='block'">
  <div id="Florals-5" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="./img/Florals/floral_5.webp" >
    </div>
  </div>
</div>
<div id="categories_hub">
  <img id="category-img" src="./img/Florals/floral_6.webp" onclick="document.getElementById('Florals-6').style.display='block'">
  <div id="Florals-6" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="./img/Florals/floral_6.webp" >
    </div>
  </div>
</div>
<div id="categories_hub">
  <img id="category-img" src="./img/Florals/floral_7.webp" onclick="document.getElementById('Florals-7').style.display='block'">
  <div id="Florals-7" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="./img/Florals/floral_7.webp" >
    </div>
  </div>
</div>
<div id="categories_hub">
  <img id="category-img" src="./img/Florals/floral_8.webp" onclick="document.getElementById('Florals-8').style.display='block'">
  <div id="Florals-8" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="./img/Florals/floral_8.webp" >
    </div>
  </div>
</div>
<div id="categories_hub">
  <img id="category-img" src="./img/Florals/floral_9.webp" onclick="document.getElementById('Florals-9').style.display='block'">
  <div id="Florals-9" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="./img/Florals/floral_9.webp" >
    </div>
  </div>
</div>
<div id="categories_hub">
  <img id="category-img" src="./img/Florals/floral_10.webp" onclick="document.getElementById('Florals-10').style.display='block'">
  <div id="Florals-10" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="./img/Florals/floral_10.webp" >
    </div>
  </div>
</div>
<div id="categories_hub">
  <img id="category-img" src="./img/Florals/floral_11.webp" onclick="document.getElementById('Florals-11').style.display='block'">
  <div id="Florals-11" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="./img/Florals/floral_11.webp" >
    </div>
  </div>
</div>
<div id="categories_hub">
  <img id="category-img" src="./img/Florals/floral_12.webp" onclick="document.getElementById('Florals-12').style.display='block'">
  <div id="Florals-12" class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div class="w3-modal-content w3-animate-zoom">
      <img src="./img/Florals/floral_12.webp" >
    </div>
  </div>
</div>

</span>
 </div>


<!-- /************** Spirituals******************/ -->
    <div class="filterDiv Spirituals">
      <span id="category_results">
      <div id="categories_hub">
      <img id="category-img" src="./img/Spiritual/spiritual_1.webp" onclick="document.getElementById('Spiritual-1').style.display='block'">
      <div id="Spiritual-1" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <img src="./img/Spiritual/spiritual_1.webp">
        </div>
      </div>
    </div>

    <div id="categories_hub">
      <img id="category-img" src="./img/Spiritual/spiritual_2.webp" onclick="document.getElementById('Spiritual-2').style.display='block'">
      <div id="Spiritual-2" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <img src="./img/Spiritual/spiritual_2.webp">
        </div>
      </div>
    </div>
    <div id="categories_hub">
      <img id="category-img" src="./img/Spiritual/spiritual_3.webp" onclick="document.getElementById('Spiritual-3').style.display='block'">
      <div id="Spiritual-3" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <img src="./img/Spiritual/spiritual_3.webp">
        </div>
      </div>
    </div>
    <div id="categories_hub">
      <img id="category-img" src="./img/Spiritual/spiritual_4.webp" onclick="document.getElementById('Spiritual-4').style.display='block'">
      <div id="Spiritual-4" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <img src="./img/Spiritual/spiritual_4.webp">
        </div>
      </div>
    </div>
    <div id="categories_hub">
      <img id="category-img" src="./img/Spiritual/spiritual_5.webp" onclick="document.getElementById('Spiritual-5').style.display='block'">
      <div id="Spiritual-5" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <img src="./img/Spiritual/spiritual_5.webp">
        </div>
      </div>
    </div>
    <div id="categories_hub">
      <img id="category-img" src="./img/Spiritual/spiritual_6.webp" onclick="document.getElementById('Spiritual-6').style.display='block'">
      <div id="Spiritual-6" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <img src="./img/Spiritual/spiritual_6.webp">
        </div>
      </div>
    </div>
    <div id="categories_hub">
      <img id="category-img" src="./img/Spiritual/spiritual_7.webp" onclick="document.getElementById('Spiritual-7').style.display='block'">
      <div id="Spiritual-7" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <img src="./img/Spiritual/spiritual_7.webp">
        </div>
      </div>
    </div>
    <div id="categories_hub">
      <img id="category-img" src="./img/Spiritual/spiritual_8.webp" onclick="document.getElementById('Spiritual-8').style.display='block'">
      <div id="Spiritual-8" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <img src="./img/Spiritual/spiritual_8.webp">
        </div>
      </div>
    </div>
    <div id="categories_hub">
      <img id="category-img" src="./img/Spiritual/spiritual_9.webp" onclick="document.getElementById('Spiritual-9').style.display='block'">
      <div id="Spiritual-9" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <img src="./img/Spiritual/spiritual_9.webp">
        </div>
      </div>
    </div>
    <div id="categories_hub">
      <img id="category-img" src="./img/Spiritual/spiritual_10.webp" onclick="document.getElementById('Spiritual-10').style.display='block'">
      <div id="Spiritual-10" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
          <img src="./img/Spiritual/spiritual_10.webp">
        </div>
      </div>
    </div>
  
    </span>
    </div>

    <div class="filterDiv animals"> 

    </div>

  
      
  
  </div>
</section>

      <script src="./javascript/gallery.js"></script>  
      <script src="javascript/script.js"></script>

</body>
</html>



