<?php 
require("./items.php");
error_reporting( E_WARNING | E_PARSE);
    foreach($Arr_shoppingList as $index => $value)
    {
      $url=$value["Img"];

      if($index <= 5)
      {
        $index;
      $Display .= "
              <div>
                  <img onclick='functionAlert($index)' src='".$url."' />
              </div>
              ";
      } elseif($index <=10)
      {
        $newsSet = $index - 5;
        $Display2 .= "
              <div>
                  <img onclick='functionAlert($newsSet)' src='".$url."' />
              </div>
              ";
      }
      
     
  }
     
    ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link href="../Stylesheet/HoverableMenuRight.css" rel="Stylesheet" />
        <link href="../Stylesheet/HoverableMenuBottom.css" rel="Stylesheet" />
        <link href="../Stylesheet/Slideshow.css" rel="Stylesheet" />
        <link href="../Styles/Style.css" rel="Stylesheet" />
        <link href="../css/all.min.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/8efd96b4b3.js"></script>
        <title>Document</title>
    </head>

    <body class="PaddingHorizontal">

    <div class="Sticky DisplayOnTop Full Background">
      <ul class="RowColumn Full Background BorderBottom">
        <li>
          <a href="#" class="FontColor1 Bold2">FANTASMA </a><a>| Collective</a>
        </li>
        <li class="Right ColorChangeonHover">
          <a class="FontColor1 Bold1" href="#Home">Home</a>
        </li>
        <li class="ColorChangeonHover">
          <a class="Bold1 FontColor1" href="#About">About Us</a>
        </li>
        <li class="ColorChangeonHover">
          <a class="Bold1 FontColor1" href="#Review">Leave a Review</a>
        </li>
        <li class="ColorChangeonHover">
          <a class="Bold1 FontColor1" href="#More">More</a>
        </li>
      </ul>

      <div class="Full">
        <ul class="RowColumn Full Center Background BorderBottom ">
          
          <li class="dropdown ColorChangeonHover PaddingHorizontal">
            <a href="#About" class="Bold1 dropbtn">Mens</a>
            <div class="dropdown-content">
              <div class="Row SpacedBetween">
                  <ul class="Column">
                    <li><a href="#">New in</a></li>
                    <li><a href="#">Coats & Jackets</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#">Nightwear & Loungewear</a></li>
                    <li><a href="#">Hoodies</a></li>
                    <li><a href="#">Knitwear</a></li>
                  </ul>
                  <ul class="Column">
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Autumn</a></li>
                    <li><a href="#">Hot in</a></li>
                  </ul>
                  <ul class="Column">
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Autumn</a></li>
                    <li><a href="#">Hot in</a></li>
                  </ul>
                  <ul class="Column">
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Autumn</a></li>
                    <li><a href="#">Hot in</a></li>
                  </ul>
                  </div>
              </div>
          </li>
        

          <li class="PaddingHorizontal ColorChangeonHover">
            <a href="#About" class="Bold1">Seasonal Promotions</a>
          </li>
          <li class="PaddingHorizontal ColorChangeonHover"><a class="Bold1">New Arrivals</a></li>
          <li class="PaddingHorizontal ColorChangeonHover"><a class="Bold1">Sales</a></li>
      
      </div>

    </div>
    
        <div class="container MarginVertical ">
              <img class="MainImg" id="expandedImg" style="width:100%" src='<?php echo $url;?>'>
              <div id="imgtext"></div>
        </div>
      
      <div class="RowColumn MarginVertical Center">
        <?php echo "<div class='Grid'>
                          $Display
                    </div>"
          ?>
           <?php echo "<div class='Grid'>
                          $Display2
                    </div>"
          ?>
        </div>

        
  <div class="Column">
          <div class="RowColumn PaddingVertical" style="height:600px;">
          
          <div class="Full"> 
            <img class="DisplayPicture"  src="../Canteens/favour-otunji-dD7xFyDzES4-unsplash.jpg"/>
          </div>
              <ul class="Column Full" >
                <li>
                      <h2>Our Testimonals</h2>
                </li>
                <li>
                      <p>Skyline is a catering company based in the West Midlands, travelling all over the country providing catering and bar services.

                  Diane and Wayne offer a personal but professional service, which has over 25 years experience in hospitality catering and love bringing all their experience to your big day. We have an excellent record with our local health authority gaining another 5 stars this year.
                  
                  Our aim is to source all our products locally, to help support our local businesses. We pride ourselves in making your day special and unique, tailoring any package to suit your individual needs and requirements.
                  
                  Find Out More
                      </p>


                </li>
                  <ul class="Row">
                    <a class="Border PaddingButton MarginHorizontal" > Find Out More <i class="fas fa-caret-right "></i></a>
                  </ul>
              </ul>
        </div>

        <div class="RowColumn PaddingVertical ConditionalSpecialMarginVertical" style="height:600px;">
          
          <div class="Full"> 
            <img class="DisplayPicture"  src="../Canteens/annie-spratt-L0nm-vBylqY-unsplash.jpg" />
          </div>
              <ul class="Column Full" >
                <li>
                      <h2>Our Testimonals</h2>
                </li>
                <li>
                      <p>Skyline is a catering company based in the West Midlands, travelling all over the country providing catering and bar services.

                  Diane and Wayne offer a personal but professional service, which has over 25 years experience in hospitality catering and love bringing all their experience to your big day. We have an excellent record with our local health authority gaining another 5 stars this year.
                  
                  Our aim is to source all our products locally, to help support our local businesses. We pride ourselves in making your day special and unique, tailoring any package to suit your individual needs and requirements.
                  
                  Find Out More
                      </p>


                </li>
                  <ul class="Row">
                    <a class="Border PaddingButton MarginHorizontal" > Find Out More <i class="fas fa-caret-right "></i></a>
                  </ul>
              </ul>
        </div>
    </div>

  
    <div class="Row Full StrictHeight ConditionalSpecialMarginVertical" >


        <div class="OptionBox" style="font-size: 48px; color: Dodgerblue;">
          <a class="" onclick="prevQuote()"> <i class="fas fa-backward"></i></a>
        </div>  


        <div id="Quotes" class="MainSection Padding ">
            <div class="quoteitems Padding  Column showing">
                  <h2 class="ConditionalCenter"> ― Nelson Mandela.</h2>
                  <p>“Education is the most powerful weapon which you can use to change the world.”</p>
                  <p class="RightSpecialCase">1/5</p>
            </div>

          <div class="quoteitems Column Padding ">
              <h2 class="ConditionalCenter"> ― Martin Luther King Jr.</h2>
              <p>“Intelligence plus character — that is the goal of true education.”</p>
              <p class="RightSpecialCase">2/5</p>
          </div>

          <div class="quoteitems Padding ConditionalCenter">
              <h2 class="ConditionalCenter"> ― Oprah Winfrey.</h2>
              <p>“The more you praise and celebrate your life, the more there is in life to celebrate.”</p>
              <p class="RightSpecialCase">3/5</p>
          </div>

          <div class="quoteitems Padding  ConditionalCenter">
              <h2 class="ConditionalCenter"> ― Samuel L Jackson.</h2>
              <p>“I Never Did One Thing Right In My Life, You Know That? Not One. That Takes Skill.”</p>
              <p class="RightSpecialCase">4/5</p>
          </div>

          <div class="quoteitems Padding ConditionalCenter">
              <h2 class="ConditionalCenter"> ― Mahatma Gandhi.</h2>
              <p>“An eye for eye only ends up making the whole world blind.”</p>
              <p class="RightSpecialCase">5/5</p>
          </div>
        </div>


      <div class="OptionBox RightSpecialCase" style="font-size: 48px; color: Dodgerblue;">
        <a class="" onclick="nextQuote()"> <i class="fas fa-forward"></i></a>
      </div>  
  </div>
   
    </body>
    <script src="../Script.js"></script>
    <script>
          function functionAlert(thisValue) {

              console.log(thisValue)
              let selectorValue = thisValue - 1;

              let Selector = event.target.parentNode.parentNode.children;
              console.log(Selector);
              let NewValue = Selector[selectorValue].children[0].outerHTML;
              GalleryItem = NewValue.match(/[^<img onclick="functionAlet(0-9)\ssrc="].*[^"|>]g/g);
              console.log(GalleryItem);
              let choice = GalleryItem[0];


              var expandImg = document.getElementById("expandedImg");
                var imgText = document.getElementById("imgtext");
                expandImg.src = choice;

            
                // imgText.innerHTML = GalleryItem.alt;
                expandImg.parentElement.style.display = "block";
        }
    </script>









