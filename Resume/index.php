<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hongyi Duan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/website.css"/>
    <link rel="stylesheet" type="text/css" href="css/website2.css"/>
    <link rel="stylesheet" type="text/css" href="css/website3.css"/>
    <link rel="stylesheet" type="text/css" href="css/expcss.css"/>  
    <link rel="stylesheet" type="text/css" href="css/expcss.css"/>    
    <link rel="stylesheet" type="text/css" href="css/dynamic.css"/>
    <link rel="stylesheet" type="text/css" href="css/ref.css"/>  
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
				<?php
                if ( $_GET["like"] == 'yes' ){
                $like = file_get_contents('like.txt');
                $like++;
                file_put_contents('like.txt', $like);
                }
				?>
    <!--Navegation Top -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">Hongyi Duan</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#myNavBar">Home</a></li>
            <li><a href="#profile">Profile</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#skill">Skill</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Experience 
                <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#relevant">Relevant Projects</a></li>
                <li><a href="#work">Work Experience</a></li>
              </ul>
            </li>
            <li><a href="#comment">Referrer</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#contact"><span class="glyphicon glyphicon-user"></span>Contact</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-eye-open">
                <?php
                    $counter = file_get_contents('counter.txt');
                    echo $counter; 
                    $counter++; 
                    file_put_contents('counter.txt', $counter);
                    ?>
            </span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Home Logo-->
    <div class="headerV1">
      <header id="myNavBar" class="container-fluid text-center">
        </br></br></br>
        <div class="logo">
          <a href="index.php?like=yes"><img src='img/lenny.jpg' class="img-circle img-responsive" alt="Photo"></a>
          <div class="conter">
            <a href="index.php?like=yes">
              <img src="img/like.png" alt="Like">
            </a>
			<h5>
                <?php  
				$love = file_get_contents('like.txt');                                            
                echo $love;
                ?>
			</h5>
		</div>
        </div>
        <div class="logo">
          <h1>Hongyi Duan</h3>
          <h3>Passionate Programmer</h3>
        </div>
      </header>
    </div>

    <!-- Profile-->
    <div id="profile" class="profileV1">
      <div class="container artTitle"> 
        <h2 class="text-center">My Profile</h2>
      </div>
      <div class="container artText">
        <h4>I’m currently completing the taught part of a Master’s Degree in Software Engineering at Aberystwyth University. I have good programming skills, and strong experience of mobile and web- based systems. I work well in a team with good communicative and cooperative skills. I am ultimately looking for a job in mobile/ web/ software development.
        </h4>
      </div>

      <script> 
$(document).ready(function(){
  $(".artFadeV1").click(function(){
    $(".artFadeV2").fadeToggle("slow");
  });
});
      </script>

      <div class="container text-center artFadeV1">
        <h3>More About Me<h3>
      </div>
      <div class="container artFadeV2">
        I am a currently a postgraduate studying in the department of computer science at Aberystwyth University and will graduate this summer, I am sorry that I cannot provide all my module marks now, but I have tried my best and believe the average results will be more than 65%.
        </br>
        </br>
        I have good understanding of HTML5, CSS3, JS and responsible website design; write high quality code with JUnit Test in Java, use a variety of design patterns and I am good at OO programming; in my spare time I prefer use C to practice algorithms; my final project for undergraduate is about Android Mobile and Wear Application developed on Android Studio, so I am familiar with android APIs, UI and mobile developments.
        </br>
        </br>
        I have very strong study abilities and basic knowledge of Python, SQL, Mobile Wep, IOS App, Ajax etc. And I am familiar with Vim, Unix and Shell(Bash) because I always use these develepment tools. I can quickly adapt to new technologies and have good communicative, cooperative skills, which makes me well suited as part of a team.
        </br>
        </br>
        I am part of a management team of a photography club and culture corner in the university, I’m a member of the Aber Sports and enjoy gym, basketball, table tennis and swimming; also I like reading, writing, travelling and playing games.
      </div>
    </div>

    <!-- Education-->
    <div id="education" class="edufileV1">
      <div class="container eduTitle"> 
        <h2 class="text-center">Education</h2>
        </br>
        <h4 class="text-center">My educational background from high school till now</h4>
      </div>

      <script> 
$(document).ready(function(){
  $(".eduTable").click(function(){
    $(".eduShow").slideToggle("slow");
  });
});
      </script>

      <div class="container eduTable">
        <table class="table-responsive" align="center">
          <tr>
            <th>2015 - Now</th>
            <th>Aberystwyth University</th>
          </tr>
          <tr class="eduShow">
            <th></th>
            <th>
              <h5>Department: Computer Science
                </br>Major: Software Engineering (M.Sc)
              </h5>
              <h5>Modules:</h5>
              <h6>
                Internet Technologies       
                </br>
                Enterprise Systems Development        
                </br>
                The Object Oriented Programming Paradigm        
                </br>
                Advanced Software Engineering       
                </br>
                Mobile Solutions        
                </br>
                Machine Learning For Intelligent Systems
                </br>
                </br>
                This course has an emphasis on practical deployment of 
                </br>
                software engineering in industry, concentrating on 
                </br>
                advanced tools and techniques for distributed systems 
                </br>
                using enterprise tools and mobile front ends.
              </h6>
            </th>
          </tr>
          <tr>
            <th>2011 - 2015</th>
            <th>Shenyang Jianzhu University</th>
          </tr>
          <tr class="eduShow">
            <th></th>
            <th>
              <h5>Department: Information Science and Engineering
                </br>Major: Building Electricity and Intelligence (B.Eng)
                </br>GPA: 3.0 
              </h5>
              <h6>
                For my major undergraduate project, I created 
                </br>
                a Java Android App to keep track of activities 
                </br>
                and appointments. It talked to a Moto360 watch app
                </br>
                which provided wrist-based feedback to the user. 
                </br>
                This gave me excellent experience of mobile programming, 
                </br>
                and a strong grasp of using Java. 
              </h6>
            </th>
          </tr>
          <tr>
            <th>2008 - 2011</th>
            <th>Nanchang Foreign Language School</th>
          </tr>
        </table>
      </div>
    </div>

    <!-- Skill -->
    <div id="skill" class="container skillV1">
      <div class="skillTitle"> 
        </br>
        <h2 class="text-center">My Skills</h2>
      </div>

      </br>
      <div class="skillHover text-center">
        <h4>Rails</h4>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
        </div>
      </div>


      <div class="skillHoverB text-center">
        <h4>OO Programming</h4>
      </div>

      <div class="progress">
        <div class="progress-bar progress-bar-striped active progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
        </div>
      </div>

      <div class="skillHoverO text-center">
        <h4>Web Font-End</h4>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
        </div>
      </div>
      <div class="skillHover text-center">
        <h4>Android and IOS App</h4>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
        </div>
      </div>

      <div class="skillHoverB text-center">
        <h4>C Python and SQL</h4>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-striped active progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
        </div>
      </div>
      <div class="skillHoverR text-center">
        <h4>Java</h4>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
        </div>
      </div>

      <div class="skillHoverO text-center">
        <h4>Vim and Shell</h4>
      </div>
      <div class="progress">
        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
        </div>
      </div>
    </div>
    </br>

    <!-- Experience -->
    <div id="exp" class="container">
      <div id="relevant" class="expTitle">
        <h2 class="text-center">Experience</h2>
      </div>
      </br>
      <div id="work" class="text-center exptitle">
        <h2>
          Work Experience 
        </h2>
      </div>
    </div>
    </br>
    <div id="exp" class="container-fluid">
      <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-4">
          <div class="thumbnail workcontV1">
            <img src="img/journalist.png" alt="journalist">
            <div class="caption">
              <h4>Trainee Journalist</h4>
              <h5>JX Xinhua News Agency
                </br>
                China - 2012
              </h5>
            </div>
          </div>
        </div>
        <div class="col-xs-2 workcontM">
        </div>
        <div class="col-xs-4">
          <div class="thumbnail workcontV2">
            <img src="img/com.png" alt="Developer">
            <div class="caption">
              <h4>Software Engineer</h4>
              <h5>One "Genius" Computer
                </br>
                Earth - Future 
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    </br>
    <div id="relevant" class="container text-center exptitle2">
      <h2>
        Relevant Past Projects
      </h2>
    </div>
    </br>

    <center>
      <div class="media container exp-m-all">
        <div class="expMedia media-top" >
          <iframe  width="100%" height="100%"
                                src="http://www.youtube.com/embed/xVPsRZE0CtU">
          </iframe>
        </div>
        <div class="expMedia media-body">
          <h2 class="text-center">
            Android Mobile and Wear Application Development
          </h2>
          <h5>
            For my major undergraduate project, I created a Java Android App to keep track of activities and appointments. It talked to a Moto 360 watch app which provided wrist-based feedback to the user. This gave me excellent experience of mobile programming, and a strong grasp of using Java.
          </h5>
        </div>
      </div>


      </br>
      <div class="media container exp-m-all">
        <div class="expMedia media-top" >
          <iframe  width="100%" height="100%"
                                src="http://www.youtube.com/embed/947BiOIp7hM">
          </iframe>
        </div>
        <div class="expMedia media-body">
          <h2 class="text-center">
            Web Online Purchase Application
          </h2>
          <h5>
            One of the major pieces of work during my MSc so far has been to learn Ruby on Rails and implement an enterprise-level web application.The web purchase website was built using the Ruby on Rails framework, with a web supplier (Python) in html, css and JS. The application uses a Restful API to transfer data (JSON) and Implement functions like users log-in/sign-up, search and pick products, check out and etc.
          </h5>
        </div>
      </div>

      </br>
      <div class="media container exp-m-all">
        <div class="expMedia media-top" >
<img width="100%"src="img/oop.png">
<br>
        </div>
        <div class="expMedia media-body">
          <h2 class="text-center">
            Java Program Project and Design Pattern
          </h2>
          <h5>
            I built a system to automate the recording of tournament results - a list of players is made, and they are assigned matches, the results are recorded and the next set of matches are arranged until there is a winner. The interface was made in WindowBuilder GUI, with data stored in XML. It was an exercise in advanced design, so i have made use of appropriate design patterns.
          </h5>
        </div>
      </div>
    </center>


    </br>

	  <!--Referrer Comment-->
	  
      <div id="comment" class="container">
        <div class="refTitle">
          <h2 class="text-center">Referrer</h2>
          <div class="refV1">                          
          </div>        
        </div>

        <center class="ref">
          <script>
$(document).ready(function(){
  $("#super1").click(function(){
    $("#tip1").slideToggle("slow");
  });
  $("#super2").click(function(){
    $("#tip2").slideToggle("slow");
  });
});
          </script>
          <div id='super1'>
            <img src='img/ref.png' class="img-circle img-responsive" alt="Photo">
            <p id="tip1">
            Dr Who
            <br>
            Aberystwyth University
            <br>
            Computer Science
            <br>
            Software AI Maching learning
            </p>
          </div>
          <div id='super2'>
            <img src='img/ref.png' class="img-circle img-responsive" alt="Photo">
            <p id="tip2">
            Dr Who
            <br>
            Aberystwyth University
            <br>
            Computer Science
            <br>
            Software AI Maching learning
            </p>
          </div>
          <div>
            <img src='img/ref.png' class="img-circle img-responsive" alt="Photo">
          </div>
          <div >
            <img src='img/ref.png' class="img-circle img-responsive" alt="Photo">
          </div>
          <div >
            <img src='img/ref.png' class="img-circle img-responsive" alt="Photo">
          </div>
        </center>

        <br>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel";>
                                                                <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
                <h4>"This"
                  <br><span>Michael</span>
                </h4>
            </div>
            <div class="item">
              <h4>"One"<br>
                <span style="font-style:normal;">John Doe</span></h4>
            </div>
            <div class="item">
              <h4>"Could"<br><span style="font-style:normal;">1</span></h4>
            </div>
            <div class="item">
              <h4>"Could2"<br><span style="font-style:normal;">2</span></h4>
            </div><div class="item">
              <h4>"Could3"<br><span style="font-style:normal;">3</span></h4>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      </div>
<br>
    <!-- Contact -->

    <div id="contact"class="container bg-grey contTitle">
      <h2 class="text-center">Contact Me</h2>

      <div class="contV1">
      </div>

      <div class="row ">
        <div class="col-sm-5" >
          <p>Contact me and I'll get back within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> Aberystwyth, UK</p>
          <p><span class="glyphicon glyphicon-phone"></span> +44 (0)7553 100095</p>
          <p><span class="glyphicon glyphicon-envelope"></span> dhy939694@gmail.com</p> 
          <p><span class="glyphicon glyphicon-link"></span>github.com/LennyDuan.com</p> 
          <p><span class="glyphicon glyphicon-comment"></span>Linkedin/FB: Hongyi Duan</p> 
        </div>


        <div class="col-sm-7">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" type="submit">
                <a href="mailto: dhy939694@gmail.com"/>Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="text-center">
      <a class="up-arrow" href="#" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a><br><br>
      <h3>
        Hongyi Duan
      </h3>
      <h4> 2016 Resume. All Rights Reserved</h4>
      <p>The information provided on this and other pages by me, Hongyi Duan (hod8@aber.ac.uk), is under my own personal responsibility and not that of the Aberystwyth University. Similarly, any opinions expressed are my own and are in no way to be taken as those of Aberystwyth University.</p>
    </footer>

    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
})
    </script>


  </body>
</html>

