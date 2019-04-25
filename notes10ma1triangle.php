<html lang="en" class="gr__s_codepen_io"><head>

        <meta charset="UTF-8">
        <link rel="icon" href="images/rocket.png" type="image/png" sizes="16x16">
        <title>Inertia.com</title>
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css ">
      
            <style>
            * {
        margin: 0;
        padding: 0;
        outline: none;
        border: none;
        text-decoration:none;
        color:#f2f2f2;
      }
      .main-menu {
        display:block;
        position:relative;
        background:#0e0e0e;
      }
      .container-menu {
        width:80%;
        margin:0 auto;
      }
      .main-menu:before,.main-menu:after{
        display: table;
        line-height: 0;
        content: "";
      }
      .core-menu {
        text-align:center;
        font:normal normal normal 1em/1 Roboto, sans-serif;
        overflow:hidden;
      }
      .core-menu li {
        list-style:none;
        display:inline-block;
        cursor:pointer;
      }
      .core-menu li a {
        display:inline-block;
        padding:1em;
      }
      .core-menu li a:hover {
        background:#38a201;
      }
      li span.toggle {
        padding-left:1em;
      }
      .toggle:before {
        content:"\f107";
        font:normal normal normal 16px/1 FontAwesome;
      }
      .dropdown {
        position:absolute;
        width:230px;
        background:#1a1a1a;
        text-align:left;
        display:none;
      }
      .dropdown li {
        display:block;
        }
      .dropdown li a {
        display:block;
      }
      .dropdown2 {
        position:absolute;
        width:230px;
        background:#2d2d2d;
        text-align:left;
        display:none;
        right:-100%;
        top:0;
      }
      .dropdown2 li {
        display:block;
        }
      .dropdown2 li a {
        display:block;
      }
      li span.toggle2 {
        position:absolute;
        right:0;
        margin-right:20px;
      }
      .toggle2:before {
        content:"\f105";
        font:normal normal normal 16px/1 FontAwesome;
      }
      .hamburger-menu {
        padding:1em;
        display:none;
        font:normal normal normal 16px/1 Roboto;
        text-transform:uppercase;
      }
      
      @media (max-width:720px) {
        .main-menu {
          height:50px;
        }
        .container-menu {
          width:100%;
        }
        .navigation {
          float:left;
          display:block;
          width:100%;
        }
        .core-menu {
          float:right;
          width:100%;
          background:#1a1a1a;
          margin:auto;
          display:none;
        }
        
        .core-menu li {
          width:100%;
          display:block;
        }
        .core-menu li a{
          display:block;
          margin:auto;
        }
        .hamburger-menu {
          display:block;
          text-align:center;
          padding-right:60px;
          float:none;
          width:100%;
        }
        .burger-1, .burger-2, .burger-3 {
        display:block;
        position:absolute;
        width:20px;
        height:3px;
        border-radius:30px;
        right:0;
        margin-right:25px;
        background:#fff;
          -webkit-transition:.2s ease;
          -ms-transition:.2s ease;
          -moz-transition:.2s ease;
          -o-transition:.2s ease;
        transition:.2s ease; 
        }
        .burger-1 {
        top:15px;
        }
        .burger-2 {
        top:23px;
        }
        .burger-3 {
        top:31px;
        }
        .burger-1.open, .burger-2.open, .burger-3.open {
        -webkit-transition:.2s ease;
        -ms-transition:.2s ease;
        -moz-transition:.2s ease;
        -o-transition:.2s ease;
          transition:.2s ease;
          transform-origin:50% 50%;
        }
        .burger-1.open {
          top:25px;
          width:23px;
          transform:rotate(45deg);
          -webkit-transform:rotate(45deg); 
          -ms-transform:rotate(45deg); 
          -moz-transform:rotate(45deg); 
          -o-transform:rotate(45deg); 
        }
        .burger-2.open {
          opacity:0;
        }
        .burger-3.open {
          top:25px;
          width:23px;
          transform:rotate(-45deg);
        }
        .dropdown {
          width:100%;
          background:#0e0e0e;
          text-align:center;
          position:relative;
        }
        .dropdown2 {
          right:0;
          top:0;
          width:100%;
          position:relative;
          padding:0 20px;
      }
      
      
          </style>
      
    <script type="text/javascript">
      function rtcScript() {
          document.oncontextmenu = null;
          document.onselectstart = null;
          document.onmousedown = null;
          document.onclick = null;
          document.oncopy = null;
          document.oncut = null;
          var elements = document.getElementsByTagName('*');
          for (var i = 0; i < elements.length; i++) {
              elements[i].oncontextmenu = null;
              elements[i].onselectstart = null;
              elements[i].onmousedown = null;
              elements[i].oncopy = null;
              elements[i].oncut = null;
          }
          function preventShareThis() {
              document.getSelection = window.getSelection = function() {
                  return {isCollapsed: true};
              }
          }
          var scripts = document.getElementsByTagName('script');
          for (var i = 0; i < scripts.length; i++) {
              if (scripts[i].src.indexOf('w.sharethis.com') > -1) {
                  preventShareThis();
              }
          }
          if (typeof Tynt != 'undefined') {
              Tynt = null;
          }
      }
      rtcScript();
      setInterval(rtcScript, 2000);</script><style>
      * {
          -webkit-user-select: auto !important; 
      }</style></head>
      
      <body translate="no" data-gr-c-s-loaded="true">
      
        <div id="main-menu" class="main-menu">
        <div class="container-menu">
          <nav class="navigation">
            <span class="hamburger-menu">Inertia
              <span class="burger-1"></span>
              <span class="burger-2"></span>
              <span class="burger-3"></span>
            </span>
            <ul class="core-menu">
                
             <li><a href="index.php">Home</a></li>
             <li><a href="about.php">About Us</a></li> 
             <li><a href="#">Videos<span class="toggle"></span></a>
                <ul class="dropdown" style="display: none;">
                  <li><a href="#">Class 9<span class="toggle2"></span></a>
                    <ul class="dropdown2">
                      <li><a href="video.php?id=9&sub=physics">Physics</a></li>
                      <li><a href="video.php?id=9&sub=chemistry">Chemistry</a></li>
                      <li><a href="video.php?id=9&sub=maths">Maths</a></li>
                      <li><a href="video.php?id=9&sub=computer">Computers</a></li>
                    </ul>
                  </li>
              <li><a href="#">Class 10<span class="toggle2"></span></a>
                    <ul class="dropdown2">
                      
                     <li><a href="video.php?id=10&sub=physics">Physics</a></li>
                        <li><a href="video.php?id=10&sub=chemistry">Chemistry</a></li>
                        <li><a href="video.php?id=10&sub=maths">Maths</a></li>
                        <li><a href="video.php?id=10&sub=computer">Computers</a></li>
                    </ul>
                  </li>
              </ul>
              </li>
            <li><a href="#">Notes<span class="toggle"></span></a>
                <ul class="dropdown" style="display: none;">
                  <li><a href="#">Class 9<span class="toggle2"></span></a>
                    <ul class="dropdown2">
                      <li><a href="notes9ph.php">Physics</a></li>
                      <li><a href="notes9ch.php">Chemistry</a></li>
                      <li><a href="notes9ma.php">Maths</a></li>
                      <li><a href="notes9co.php">Computers</a></li>
                    </ul>
                  </li>
              <li><a href="#">Class 10<span class="toggle2"></span></a>
                    <ul class="dropdown2">
                      
                      <li><a href="notes10ph.php">Physics</a></li>
                      <li><a href="notes10ch.php">Chemistry</a></li>
                      <li><a href="notes10ma.php">Maths</a></li>
                      <li><a href="notes10co.php">Computers</a></li>
                    </ul>
                  </li>
              </ul>
              </li>
      <li><a href="#">Quizzes<span class="toggle"></span></a>
                <ul class="dropdown" style="display: none;">
                  <li><a href="#">Class 9<span class="toggle2"></span></a>
                    <ul class="dropdown2" style="display: none;">
                      
                         <li><a href="quiz9ph.php">Physics</a></li>
                      <li><a href="quiz9ch.php">Chemistry</a></li>
                      <li><a href="quiz9ma.php">Maths</a></li>
                      <li><a href="quiz9com.php">Computers</a></li>
                    </ul>
                  </li>
              <li><a href="#">Class 10<span class="toggle2"></span></a>
                    <ul class="dropdown2" style="display: none;">
                      
                      <li><a href="quiz10ph.php">Physics</a></li>
                      <li><a href="quiz10che.php">Chemistry</a></li>
                      <li><a href="quiz10ma.php">Maths</a></li>
                      <li><a href="quiz10com.php">Computers</a></li>
                    </ul>
                  </li>
              </ul>
              </li>
			  
       <?php
			  $link1="logout.php";
				  $out="fa fa-sign-out";
				  $out1="fa fa-comments-o";
				  $true="true";
				  $link2="chat/index.php";
				  $link3="student.php";
				  $out4="fa fa-sign-in";
			
			  //sigout icon display
			    session_start();
	//if logged in 
			  if(isset($_SESSION['email'])){
				    echo  "<li><a href='$link2'><i class='$out1' aria-hidden='$out1'></i>chatroom</a></li>";
  echo  "<a href='$link1'> <i class='$out' aria-hidden='$link1'></i>logout</a>";
			  }
			  else{
				  
				   echo  "<a href='$link3'> <i class='$out4' aria-hidden='$link3'></i>sign-up</a>";
			  }
  ?>
            </ul>
          </nav>
        </div>
      </div>
      <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
      <div class="videos">
	  <div class="container">
	  <div class="w3-container"> 
          <h1 style="text-align: center">Class 10 Maths</h1>
           <!-- .............accordion.............. -->
  <p>1. Similar Figures</p>
<p>2. Similarity of Triangles</P>
<p>3. Criteria for Similarity of Triangles</p>
<p>4. Areas of Similar Triangles</P>
<p>5. Pythagoras Theorem</P>
<p>6. Miscellaneous Questions</P>
<p><u><strong>1. Similar Figures:</strong></u> Similar figures have the same shape (but not necessarily the same size).
In geometry, two squares are similar, two equilateral triangles are similar, two circles are
similar and two line segments are similar.</P>
<p><u><strong>2. Similar Triangles:</strong></u> Two triangles are said to be similar if their corresponding angles are
equal and their corresponding sides are proportional.</P>
<p><u><strong>3. Equiangular Triangles:</strong></u> Two triangles are equiangular if their corresponding angles are
equal. The ratio of any two corresponding sides in two equiangular triangles is always the
same.</P>
<p><u><strong>4. Criteria for Similarity:</strong></u></p>
<p>(i) AAA Similarity: </P>
<p>(ii) SAS Similarity:</P>
<p>(iii) SSS Similarity: </P>
<p><u><strong>4. The proof of the following theorems can be asked in the examination:</strong></u></P>
<p>(i) Basic Proportionality Theorem: If a line is drawn parallel to one side of a triangle to
intersect the other sides in distinct points, the other two sides are divided in the same ratio.</P>
<p>(ii) Converse of Basic Proportionality Theorem: If in two triangles, the corresponding</P>
angles are equal, their corresponding sides are proportional and the triangles are similar.</P>
<p>(iii) If one angle of a triangle is equal to one angle of other triangle and the sides including
these angles are proportional, the triangles are similar.</P>
<p>(iv) If a perpendicular drawn from the vertex of the right angle of a right triangle to the
hypoenuse, the triangles on each side of the perpendicular are similar to the whole triangle
and to each other.</P>
<p>(v) Area Theorem: The ratio of the areas of two similar triangles is equal to the square of the
ratio of their corresponding sides.</P>
<p>(iii) Pythagoras Theorem: In a right triangle, the square of the hypotenuse is equal to the
sum of the squares of the other two sides.</P>
<p>(iv) Converse of Pythagoras Theorem: In a triangle, if the square of one side is equal to the
sum of the squares of the other two sides then the angle opposite to the first side is a right
angle.</p>
      <a href="10_maths_key_notes_ch_06_triangles.pdf">Click here to download</a>
	    </diV>
		 </diV>
      <script>
      var acc = document.getElementsByClassName("accordion");
      var i;
      
      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight){
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          } 
        });
      }
      </script>
      <!-- ....................................................................... -->
      </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      
        
      
          <script>
            $(document).ready(function(){
        //the trigger on hover when cursor directed to this class
          $(".core-menu li").hover(
          function(){
            //i used the parent ul to show submenu
              $(this).children('ul').slideDown('fast');
          }, 
            //when the cursor away 
          function () {
              $('ul', this).slideUp('fast');
          });
        //this feature only show on 600px device width
          $(".hamburger-menu").click(function(){
            $(".burger-1, .burger-2, .burger-3").toggleClass("open");
              $(".core-menu").slideToggle("fast");
          });
      });
      /** credit:@rafonzoo 
      http://rafonzo.blogspot.co.id/ **/
          </script>
          <script>
            var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10)  || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');`	
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
          </script>
      
      
      
        
        
      
        <script src="https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script>
      
      
      
       
      </body>
      <span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>