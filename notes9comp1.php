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
					a{font-size:16px;
    color:#FFF;
      transition: all 0.3s ease-in;
      text-decoration:none;}
		  a:hover { 
 -webkit-stroke-width: 5.3px;
      -webkit-stroke-color: #FFFFFF;
      -webkit-fill-color: #FFFFFF;
      text-shadow: 0px 0px 30px yellow;
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
          <h1 style="text-align: center">Class 9 Computers</h1>
		   <h2 tyle="text-align: center">IMPORTANT POINTS</h2><br>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      
       <p> A computer is a general-purpose programmable machine.</p>
Computer:</p><br>
<p>Computer is an advanced electronic device that takes raw data as input from
the user and processes it under the controi of set of instructions (called program),
gives the result (output), and saves it for the future use.</p><br>
<p><u><strong>Function of Computer:</strong></u></p><br>
<p>Computer has the ability to store, retrieve and process data. II processes
data at very high speed according to the instructions given to it and pr0duces
accurate results.</p><br>
<p><u><strong>Computer program:</strong></u></p>
<p>The instruciions given to a computer to periorm a particular task is known as
computer program. Computer processing system</p><br>
<p><u><strong>Evolution of Computer:</strong></u></p>
<p>Evolution of · computers means how the cornpL1ters evolved from the first
mechanical device, ab::icus, to electromechanical and ttien to the modern electronic
digital computers.</p><br>
 <p><u><strong>Abacus:</strong></u></p>
<p>Abacus was the earliest calculating device most probably invented in China.</p>
<p><u><strong>Construction:</strong></u></p><br>
<p>Abacus consisted of a wooden frame having parallel rods</p>
<p>These rods had a number of wooden beads which could slide freely along the
length of rods. While performing calculations. beads were moved up and down with
fingers.</p><br>
<p><u><strong>Tasks performed by Abacus:</strong></u></p>
<p>Abacus was used to perform addition, subtraction, multiplication and division. It
has been used 1n China and some other Asian countries till the end of 20th century.
<p>Titbits</p><br>
<p>Abacus is still seen at some toy shops, made of plastic or wood for small children. 
<u><strong><u>Pascaline:</strong></u></p><br>
<p>Blaise Pascal, a French mathematician invented a calculating machine called
Pascaline in 1642 when he was only 19 years old.</p>
<br><p>Construction:</p>
Pascaline used rotating wheels. Each wheel had ten parts having digits from 0
to 9. Calculations were performed by the rotation of wheels. When one wheel
completes a rotaticn. the nex1 wheel moves by one digit It had a number of small
slots for displaying the result</p>
<br><p><u><strong>Tasks performed by Pasoaline:</strong></u></p>
<p>Pascaline could perform addition and subtraction on whole numbers.</p>
<br><p><u><strong>Difference Engine:</strong></u></p>
<p>In 1822, the English mathematician Charles Babbage started working on
a big calculating machine about the size of a room. He called it Difference
Engine.</p>
<br><p><u><strong>Analytical Engine:</strong></u></p>
<p>Babbage worked for many years on Difference Engine but he could not
complete it Latel', he came up with idea of Analytical Engine. He could not complete
it because the technology was not advanced enough but he laid the foundation
stone of modern digital computers</p> 
<br><p><u><strong>Hollerith Desk:</strong></u></p>
<p>In 1890. Herman Hollerith built a tabulating machlne called Hollerith Des!<..
This machine was invented to help wi!h the census of 1890 in America.
<u><strong><u>Construction:</strong></u></p>
<p>Hollerith Desk consisted ot a card reader which sensed the holes in the
cards, a gear driven mechanism which could count and a large set of dial indicatcrs
to display the results</p>
<p>After building Hollerith Desk. Hollerith started a company by the name of
Tabulating Machine Company. Eventually this company changed its name to
International Business Machines <IBM)</p>
<br><p><u><strong>Mark-I:</strong></u></p>
The next (after the invention of Hollerith Desk) successfu1 computing
machine invented was a digital computer known as Maik-1. It vtas invented by
Howard Aiken in 1944.</p>
<br><p>Chapter 1</p>
<p>Tdsks performed by Mark-I:</p><br>
arK-1 could add three numbers ha\lmg eight digits in one second. It could
P�1nt out its results on punched cards or on an electric typewriter.
<br><p>S:ze of Mark-I:</p>
Mark-I was 50 feet !ong, 8 feet high and weighed about 5 tons Technology used in Mark-I:
<p>It used 3,000 electric switches .</p> 
Since computer evolution is a continuous process, it has not stopped in the
modern era. New systems are being developed to provide voice recognition and /·,
<p>understand natural languages.</p>
<p><u><strong>High performance computing (HPC):</strong></u></p>
<br><p>High performance computing (HPC} is being used in today's data centers for
fast data processing High-performance compu ting (HPC) is the use of parallel
processing for running advanced application programs efficiently. reliably and fast.</p>
<br><p><u><strong>Cloud Computing:</strong></u></p>
<p>The concept of "Cloud Computing" has been introduced. In the simplest
terms, cloud computing means storing and accessing data and programs over the
Internet instead of computer's hard driv�.</p>
<br><p><u><strong>Current advancements:</strong></u></p>
<p>The current advancements in computer technology are likely to transform
computer into intelligent machine having thinking power. The evolution of computers
will probably continue till their processing capabilities have become equal to human
intelligence or even beyond that.</p> 
<br><p>History and Generations of Computer: ;</p>
<p>History of computers is a chain that runs from the ancient abacus and the
analytical engine of the nineteenth century, through the modern computers of
present age. It is generally divided into five generations. Each generation of
computers is characterized by major technological developments of that time.</p> 
<p>Second Generation Computers (1956 - 1963):</p><br>
<p>In 194 7, three scientists, William Shockley, John Bardeen and Walter</p>
<p>Brattain invented transistor.</p>
<br><p>Transistor:</p>
<p>Transistor functions like a vacuum tube it replaced the vacuum tubes in the
second generation computers. Transistor was taster, more rei1able, smaller and
much cheaper than vacuum tube.</p>
-----
<p><u><strong>Characteristics/Features of second generation computers:</strong></u></p>
<br><p>The following are the characteristics of second generation computers.</p>
<p>i. Transistors were used instead of vacuum tubes.</p>
<p>ii. Transistors reduced the size of computers and increased the speed and
memory capacity.</p><p>
iii. Computers became more reliable and cheaper.</p>
<p>iv. Second generation computers used punch card readers. magnetic tapes.
magnetic disks and printers.</p>
<p>v. Assembly language was used in these computers.</p>
<p>vi. High level programming languages, FORTRAN and COBOL were introduced
in this generation of computers.</p>
<p><u><strong>Models/ examples:</strong></u></p><br>
<p>Examples of second generation computers are UNIVAC II, IBM 7030, 7780
and 7090, NCR 300 series, General Electric GE 635 and Control Data Corporation's
<p>CDC 1604 computers.</p><br>
<p>Fourth Generation Computers (1971- Present):</p><p>
In this generation of computers LSI (Large Scale Integration) and VLSI (Very
Large Scale lntegratfon) chips having millions of transistors were developed.</p>
<p>Chapter 1</p><br>
<p>Microprocessor was also developed ,n fourth generation of computers. A
microprocessor is a single chip that can handle all the pror.essing of a computer. </p>
<p><u><strong>Types of Computers:</strong></u></p><br>
<p>On the basis of data representation, processing, Input and Output,</p>
<p>Computers can be classified into the following three types.</p>
<p>i. Analog Computers</p>
<p>11. Digital Computers</p>
<p>111. Hybrid Computers</p>
<p> Hybrid Computers/Vital Sign Monitoring Unit:</p><br>
<p>Hybrid computers are the combination of analog and digital computers. They
<p>combine the characteristics of both analog and digital computers.</p>
<p>Uses of Hybrid Compuiers:</p>
<p>Hybrid computers are mainly used for scientific applications. These
computers are used in spaceships, missile systems. scientific research, hospitals
and for controlling industrial processes.</p><br>
<p><u><strong>Vital Sign Monitoring Unit:</strong></u></p>
<p>A hybrid computer known as Vital Sign Monitoring Unit.It is
used 1n hospitals to monitor p::itient's important data such as blood pressure,
temperature, respiration and heartbeat</p>
  </diV>
   </diV>
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
