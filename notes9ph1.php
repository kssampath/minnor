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
      a{font-size:16px;
    color:#FFF;
      transition: all 0.3s ease-in;
      text-decoration:none;}
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
		  a:hover { 
 -webkit-stroke-width: 5.3px;
      -webkit-stroke-color: #FFFFFF;
      -webkit-fill-color: #FFFFFF;
      text-shadow: 0px 0px 30px yellow;
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
	  
          <h1 style="text-align: center">Class 9 Physics</h1>
           <!-- .............accordion.............. -->
		   <h2 tyle="text-align: center">IMPORTANT POINTS</h2><br>
     <p>Anything that occupies space and has mass and is felt by senses is called matter.
According to indian ancient philosphor, matter is the form of five basic elements (the
Panchtatva) – air , earth ,fire , sky and water.</p><br>
<u><strong><p>Characteristics of particles of matter</p></strong></u>
<u><strong><p>Made of tiny particles.</p></strong></u>
<p>Vacant spaces exist between particles.</p>
<p>Particles are in continuous motion.</p>
<p>Particles are held together by forces of attraction.</p><br>
<u><strong><p>States of Matter</p></strong></u>
<p>Basis of Classification of Types/</p>
<p>Based upon particle arrangement</p>
<p>Based upon energy of particles</p>
<p>Based upon distance between particles</p>
<u><strong><p>Five states of matter</p></strong></u>
<p>1. Solid</p>
<p>2. Liquid</p>
<p>3. Gas</p>
<p>4. Plasma</p>
<p>5. Bose-Einstein condensate</p><br>
<u><strong><p>(I) SOLID</p></strong></u>
<p>Fixed mass, volume and shape</p>
<p>Inter-particle distances are least.</p>
<p>Incompressible.</p>
<p>High density and do not diffuse</p>
<p>Inter particle forces of attraction are strongest.</p>
<p>Constituent particles are very closely packed.</p><br>
<u><strong><p>(II) LIQUID</p></strong></u>
<p>Not fixed shape but fixed volume and mass.</p>
<p>Inter particle distances are larger than solid.</p>
<p>Almost incompressible.</p>
<p>Density is lower than solids and can diffuse.</p>
<p>Inter particle forces of attraction are weaker than solids .</p>
<p>Constituent particles are less closely packed.</p>
<u><strong><br><p>(III) GAS</p></strong></u>
<p>Neither fixed shape nor fixed volume.</p>
<p>Inter particle distances are largest.</p>
<p>Highly compressible.</p>
<p>Density is least and diffuse.</p>
<p>Inter particle forces of attraction are weakest.</p>
<p>Constituent particles are free to move about.</p>
<br><u><strong><p>(IV) PLASMA (NON-EVALUATIVE)</p></strong></u>
<p>A plasma is an ionized gas.</p>
<p>A plasma is a very good conductor of electricity and is affected by magnetic fields.</p>
<p>Plasma, like gases have an indefinite shape and an indefinite volume. Ex. Ionized gas
<br><p>(v) BOSE-EINSTEIN CONDENSATE (non –evaluative)</p>
<p>A BEC is a state of matter that can arise at very low temperatures.</p>
<p>The scientists who worked with the Bose-Einstein condensate received a Nobel Prize
<p>for their work in 1995.</p>
<p>The BEC is all about molecules that are really close to each other (even closer than
<p>atoms in a solid).</p><br>
<br><p>Microscopic Explanation for Properties of Solids/</p>
Solids have a definite shape and a definite volume because the particles are locked
into place</p>
<p>Solids do not flow easily because the particles cannot move/slide past one another</p>
<p>Solids are not easily compressible because there is little free space between particles</p>
<p>Microscopic Explanation for Properties of Liquids</p>
<p>Liquids are not easily compressible and have a definite volume because there is little</p>
free space between particles.</p>
<p>Liquids flow easily because the particles can move/slide past one another.</p>
<p>Liquids flow easily because the particles can move/slide past one another.</p>
<br><p>Microscopic Explanation for Properties of Gases</p>
<p>Gases are easily compressible because there is a great deal of free space between
particles</p>
<p>Gases flow very easily because the particles randomly move past one another.</p>
<p>Gases have an indefinite shape and an indefinite volume because the particles can
move past one another (non –evaluative)</p>
<p>Microscopic Explanation for Properties of Plasmas</p>
<p>Plasmas have an indefinite shape and an indefinite volume because the particles can
move past one another.</p>
<p>Plasmas are easily compressible because there is a great deal of free space between
particles.</p><br>
<p>Plasmas are good conductors of electricity &are affected by magnetic fields because
they are composed of lens.</p><br>
<p>Microscopic Explanation for Properties of BEC</p>
<p>Particles are less energetic than solids because Exist at very low temperature.</p>
<p>Particles are literally indistinguishable because they are locked into same space .</p>
<p>BEC shows super fluidity because Particles can flow without friction.</p>
<p>1. Interchange in states of matter</p>
<p>Water can exist in three states of matter –</p>
<p>Solid, as ice,</p>
<p>Liquid, as the familiar water, and
Gas, as water vapour.</p>
<p>Sublimation : The changing of solid directly into vapours on heating & vapours into solid on
cooling. Ex. Ammonium chloride, camphor & iodine.</p>
<p>(a) Effect of change in temperature</p>
<p>The temperature effect on heating a solid varies depending on the nature of the solid & the
conditions required in bringing the change.</p>
<p>On increasing the temperature of solids, the kinetic energy of the particles increases
which overcomes the forces of attraction between the particles thereby solid melts
and is converted to a liquid.</p>
<p>The temperature at which a solid melts to become a liquid at the atmospheric
pressure is called its melting point.</p>
<p>The melting point of ice is 273.16 K.</p>
<p>The process of melting, that is, change of solid state into liquid state is also known as
fusion.</p>
<p>(b) Effect of Change of Pressure</p><br>
<p>Increasing or decreasing the pressure can change the state of matter. Applying
pressure and reducing temperature can liquefy gases.</p>
<p>Solid carbon dioxide ( ) is stored under high pressure. Solid gets converted
directly to gaseous state on decrease of pressure to 1 atmosphere without coming into
liquid state. This is the reason that solid carbon dioxide is also known as dry ice.
<br>Latent Heat :</p><br>
<p>The hidden heat which breaks the force of attraction between the molecules during change
of state.</p>
<p>Fusion Heat energy required to change 1kg of solid into liquid.</p>
<p>Vaporisation Heat energy required to change 1kg of liquid to gas at atmospheric pressure at
its boiling point</p>
<p>Thus, we can say that pressure and temperature determine the state of a substance, whether
it will be solid, liquid or gas.</p>
<p>4. Evaporation & Boiling</p><br>
<p>Particles of matter are always moving and are never at rest.
At a given temperature in any gas, liquid or solid, there are particles with different
amounts of kinetic energy.</p>
<p>In the case of liquids, a small fraction of particles at the surface, having higher kinetic
energy, is able to break away from the forces of attraction of other particles and gets
converted into vapour .</p>
<p>This phenomenon of change of a liquid into vapours at any temperature below its
boiling point is called evaporation.</p>
<p>Factors Affecting Evaporation</p>
<p>The rate of evaporation increases with an increase of surface area.
With the increase of temperature, more number of particles get enough kinetic
energy to go into the vapour state.</p>
<p>Humidity is the amount of water vapour present in air. The air around us cannot hold
more than a definite amount of water vapour at a given temperature. If the amount of
water in air is already high, the rate of evaporation decreases.</p><br>
Wind speed : the higher the wind speed , the more evaporation.</p>
<p>Evaporation cause cooling.</p><br>
<p>The particles of liquid absorb energy from the surrounding to regain the energy lost
during evaporation,</p><br>
<u><strong><p>Evaporation Vs Boiling</p></strong></u>
<p>Boiling is a bulk phenomenon. Particles from the bulk (whole) of the liquid change
into vapour state.</p>
<p>Evaporation is a surface phenomenon. Particles from the surface gain enough energy
to overcome the forces of attraction present in the liquid and change into the vapour
state.</p><br>
<p>5. Kelvin & Celsius Scale</p>
<p>Kelvin is the SI unit of temperature, = 273.16 K we take = 273 K.
<p>SI unit of temperature is Kelvin.</p>
<p>Kelvin scale of temperature has always positive sign , hence regarded as better scale
than Celsius.</p><br>
<p>Atmosphere (atm) is a unit of measuring pressure exerted by a gas. The SI unit of
pressure is Pascal (Pa):
1 atmosphere = 1.01 × (10 to the power 5) Pa. The pressure of air in atmosphere is
called atmospheric pressure. The atmospheric pressure at sea level is 1 atmosphere,
and is taken as the normal atmospheric pressure.</p>
<p>You are expected to know</p>
<p>Particle nature of matter.</p>
<p>All five states of matter & their behaviour</p>
<p>enter conversion of states of matter</p>
<p>Latent heat</p>
<p>Conversion between Kelvin scale & Celsius scale</p>
      <br><br>
      <a href="matter_in_our_surroundings.pdf">click here to download pdf</a>
	  </div>
	   </div>
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