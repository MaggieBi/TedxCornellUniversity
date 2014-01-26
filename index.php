<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
    <meta charset="utf-8"> 
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>TEDxCornellUniversity</title>
    <link rel="stylesheet" type="text/css" href="highslide/highslide.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css" /><!--http://tympanus.net/codrops/2012/04/12/animated-content-tabs-with-css3/-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="js/modernizr.custom.70736.js"></script>
    <noscript><link rel="stylesheet" type="text/css" href="css/noJS.css"/></noscript>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>
    <script src='js/jquery.color-RGBa-patch.js'></script>
    <script src='js/example.js'></script> <!--http://css-tricks.com/jquery-magicline-navigation/-->
</head>
    
<body>
<div id="fb-root"></div> <!--https://developers.facebook.com/docs/plugins/like-button/-->

<script>
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<script>
    !function(d,s,id){
    var js,fjs=d.getElementsByTagName(s)[0];
    if(!d.getElementById(id)){js=d.createElement(s);
    js.id=id;js.src="//platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js,fjs);
    }}(document,"script","twitter-wjs");
</script>

<!--navigation bar-->
<nav id="nav-wrap"> <!--Navigation bar effect: http://css-tricks.com/jquery-magicline-navigation/ -->
    <ul class="group" id="example-one">
        <li class="current_page_item"><a href="#home"  class="smoothScroll">HOME</a></li>
        <li><a href="#about" class="smoothScroll">ABOUT</a></li>
        <li><a href="#events" class="smoothScroll">EVENTS</a></li>
        <li><a href="#photos" class="smoothScroll">PHOTOS</a></li>
        <li><a href="#videos" class="smoothScroll">VIDEOS</a></li>
        <li><a href="#joinus" class="smoothScroll">JOIN US</a></li>
        <li><a href="#contact" class="smoothScroll">CONTACT</a></li>
    </ul>
</nav>
        
<div id="container">
    <a href="#nav-wrap" id="back" class="smoothScroll"><img src="Images/Arrow.png" alt="arrow"></a><!--arrow for mobile version-->

<!--HOME SECTION-->
    <section id="home">
        <div id="top">
            <div id="header">
                <img src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/tedxcornell_zps98b9a988.jpg" alt="TEDxCornellUniversity">
            </div>
        </div>
      
        <div id="main">
            <div id="slideshow">
                <div>
                  <a href="#videos" class="smoothScroll"><img src="http://i1294.photobucket.com/albums/b620/JasonXX2/Slideshow%20Photos/slideshow1_zpsf30150cf.png" alt="TEDxCornellUniversity"></a>
                </div>
                <div>
                  <a href="#about" class="smoothScroll"><img src="http://i1294.photobucket.com/albums/b620/JasonXX2/Slideshow%20Photos/slideshow2_zpse69b4fea.png" alt="TEDxCornellUniversity"></a>
                </div>
                <div>
                  <a href="#events" class="smoothScroll"><img src="http://i1294.photobucket.com/albums/b620/JasonXX2/Slideshow%20Photos/slideshow3_zps9baf3661.png" alt="TEDxCornellUniversity"></a>
                </div>
            </div>
        </div>
        
        <div id="bottom">
            <div id="news">
                <h1>Coming Up Spring 2014:</h1>
                <h3>Spring Semester Speaker Conference at Milstein Hall! <br/>More details soon!</h3>
                <?php include('php/subscribe.php'); ?>
            </div>

        <div id="what">
            <h1>What topics would you like to hear about?</h1><!--http://www.w3schools.com/php/php_ajax_poll.asp-->
            <script> 
                function getVote(int){
                if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
                  xmlhttp=new XMLHttpRequest();
                }
                else{// code for IE6, IE5
                  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function(){
                if (xmlhttp.readyState==4 && xmlhttp.status==200){
                    document.getElementById("poll").innerHTML=xmlhttp.responseText;
                }
                }
                xmlhttp.open("GET","php/poll_vote.php?vote="+int,true);
                xmlhttp.send();
                }
            </script>
         
            <div id="poll">
                <input class="pollinput" type="radio" name="vote" value="0" onclick="getVote(this.value)">
                Activism
                <br>
                <input class="pollinput" type="radio" name="vote" value="1" onclick="getVote(this.value)">
                Technology
                <br>
                <input class="pollinput" type="radio" name="vote" value="2" onclick="getVote(this.value)">
                Success
                <br>
                <input class="pollinput" type="radio" name="vote" value="3" onclick="getVote(this.value)">
                Psychology
                <br>
                <input class="pollinput" type="radio" name="vote" value="4" onclick="getVote(this.value)">
                Other
                <br>
            </div>
        </div>
        
        <div id="quotes">
            <h1>Ideas Worth Noting</h1>
            <?php include('php/quotes.php'); ?>
        </div>
        
        </div>
    </section>

<!--START OF ABOUT SECTION-->
    <section id="aboutsection" >
    <div class="sectionwrapper" id="about" >
        <h4>ABOUT</h4>
        <div id="abouttext">
            <div id="ted">
                <h1>What is TED?</h1>
                <p>TED is a nonprofit organization devoted to Ideas Worth Spreading.
                Started at a conference in California 26 years ago, TED has grown
                to support those world-changing ideas with many initiatives.<br/>
                At a TED conference, the world's leading thinkers and doers are
                asked to give the talk of their lives in 18 minutes or less.
                TED speakers have included Roger Ebert, Sheryl Sandberg, Bill Gates,
                Elizabeth Gilbert, Benoit Mandelbrot, Philippe Starck, Ngozi
                Okonjo-Iweala, Brian Greene, Isabel Allende, and former UK
                Prime Minister Gordon Brown. Three major TED events are held each year:
                The TED Conference takes place every spring in Vancouver, Canada,
                simultaneously with TEDActive, in Whistler, BC; the TEDGlobal 
                Conference takes place each summer in Edinburgh, Scotland.</p>
            </div>
            
            <div id="tedx">
                <h1>What is TEDx?</h1>
                <p>In the spirit of spreading ideas worth spreading, TEDx is a program
                of local, self-organized events that bring people together to share a
                TED-like experience. At a TEDx event, TEDTalks videos and live speakers
                combine to spark deep discussion and connection in a small group. These
                local' self-organized are branded TEDx, where x = independently
                organized TED event. The TED Conference provides general guidance for the
                TEDx program, but individual TEDx events are self-organized. (Subject
                to certain rules and regulations.)</p>
            </div>
            
            <div id="tedxcornell">
                <h1>What is TEDx CornellUniversity?</h1>
                <p>I.D.E.A., a new student organization, is hosting
                TEDxCornellUniversity, a local, self-organized event, which aims to
                gather a community of people to spark deep discussion and connection
                through TEDTalks presentations, videos and live speakers. The theme
                of each semester's conference varies, and in the past speakers have
                included alumni such as Nick Fishman, professors such as Jeffrey
                Hancock, and undergraduate students such as Daniel Green.</p>
            </div>
            
            <div id="moreinfo">
                <p>For information about TED's upcoming conferences, visit <a href="http://www.ted.com/registration">http://www.ted.com/registration </a><br/><br/>Follow TED on Twitter at
                <a href="http://twitter.com/TEDTalks">http://twitter.com/TEDTalks</a>, or on Facebook at <a href="http://www.facebook.com/TED">http://www.facebook.com/TED</a></p>
            </div>
        </div>
    </div>
    </section>

<!--START OF EVENTS SECTION-->
    <section id="eventssection">
        <div class="sectionwrapper" id="events"><!--http://tympanus.net/codrops/2012/04/12/animated-content-tabs-with-css3/-->
        <h4>EVENTS</h4>
            <div id="events1">
                <div class="tabs" >
                    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
                    <label for="tab-1" class="tab-label-1">upcoming</label>
                    <label for="tab-1" class="tab-label">new</label>
                
                    <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
                    <label for="tab-2" class="tab-label-2">past 2013</label>
                    <label for="tab-2" class="tab-label">2013</label>
                
                    <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
                    <label for="tab-3" class="tab-label-3">past 2012</label>
                    <label for="tab-3" class="tab-label">2012</label>
                        
                    <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
                    <label for="tab-4" class="tab-label-4">past 2011</label>
                    <label for="tab-4" class="tab-label">2011</label>
            
                    <div class="clear-shadow"></div>
                        
                    <div class="content">
                        <div class="content-1">
                            <h1>To Be Announced!</h1>
                            <h1>Spring 2014</h1>
                            <ul>
                                <li id="location">Location:</li>
                                <li>Milstein Hall</li>
                                <li>Cornell University</li>
                                <li>Ithaca, NY 14853</li>
                                <li>United States</li>
                            </ul>
                            <h1 id="comingsoon">More Information Coming Soon!</h1>
                            <img src="Images/tedgrouppic.jpg" alt="TEDxCornell Members">
                        </div>
                        
                        <div class="content-2">
                            <h2>November 17, 2013</h2>
                            <h1>Creating Communities that are Socially Just and Ecologically Sound</h1>
                            <h2>Location:</h2>
                            <ul>
                                <li>Barnes Hall Auditorium</li>
                                <li>Cornell University</li>
                            </ul>
                            <h2>Speakers:</h2>
                            <ul>
                                <li>Kirby Edmonds</li>
                                <li>Bill Myers</li>
                                <li>Natalie Bridgeman Fields</li>
                                <li>Lauren Braun</li>
                                <li>Ben Justus</li>
                                <li>Liz Ngonzi</li>
                                <li>Rob Garrity</li>
                                <li>Meredith Ramirez Talusan</li>
                                <li>Lily Yeh</li>
                            </ul>
                        </div>
                        
                        <div class="content-3">
                            <h2>March 28, 2012</h2>
                            <h1>Progress with Passion</h1>
                            <h2>Location:</h2>
                            <ul>
                                <li>Barnes Hall Auditorium</li>
                                <li>Cornell University</li>
                            </ul>
                            <h2>Speakers:</h2>
                            <ul>
                                <li>George Hudler</li>
                                <li>Lex Chutintaranond</li>
                                <li>Shawkat Toorawa</li>
                                <li>Jeffrey Hancock</li>
                                <li>Alex Colket</li>
                                <li>Nick Fishman</li>
                                <li>Sohan Jain</li>
                                <li>Alessandra Hirsch</li>
                                <li>Daniel Green</li>
                                <li>Alisha Vimawala</li>
                            </ul>
                        </div>
                        
                        <div class="content-4">
                            <h2>October 3rd, 2011</h2>
                            <h1>Rethinking Our Society</h1>
                            <h2>Location:</h2>
                            <ul>
                                <li>Willard Straight Hall Memorial Room</li>
                                <li>Cornell University</li>
                            </ul>
                            <h2>Speakers:</h2>
                            <ul>
                                <li>Miki Agrawal</li>
                                <li>Graeme Bailey</li>
                                <li>Jeremy Blum</li>
                                <li>Lyrae Van Clief-Stefanon</li>
                                <li>Jeffrey Lipton</li>
                                <li>Meril Pothen</li>
                                <li>Jesse Turke</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--Start of photos section-->
    <section id="photosection">
            <div class="sectionwrapper" id="photos">
                <h4>PHOTOS</h4>
                        <div class="container">
                        <div class="main">
                                <header class="clearfix">
                                
                                        <h1>Check out these photos from past events!<span></span></h1>

                                        <div class="support-note">
                                                <span class="note-ie">Sorry, only modern browsers.</span>
                                        </div>
                                        
                                </header>
                                
                                <div class="gamma-container gamma-loading" id="gamma-container">

                                        <ul class="gamma-gallery">

                                                <li>
                                                        <div data-alt="Cornell Banner" data-description="<h3>Cornell Banner</h3>" data-max-width="1800" data-max-height="1350">
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Cornell%20Banner/1300_zps9e2a0c7d.jpg" data-min-width="1300"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Cornell%20Banner/1000_zpsc8b1471d.jpg" data-min-width="1000"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Cornell%20Banner/700_zps4a3f1b76.jpg" data-min-width="700"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Cornell%20Banner/300_zps72ecb9ad.jpg" data-min-width="300"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Cornell%20Banner/200_zpscca18d74.jpg" data-min-width="200"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Cornell%20Banner/140_zps4f2a7141.jpg" data-min-width="140"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Cornell%20Banner/100_zpsdf17ab34.jpg"></div>
                                                                <noscript>
                                                                        <img src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Cornell%20Banner/100_zpsdf17ab34.jpg" alt="Cornell Banner"/>
                                                                </noscript>
                                                        </div>
                                                </li>
                                                <li>
                                                        <div data-alt="Event Schedule" data-description="<h3>Event Schedule</h3>" data-max-width="1800" data-max-height="1350">
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Event%20Schedule/1300_zpsb48c8fc8.jpg" data-min-width="1300"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Event%20Schedule/1000_zpsd2ca4cc6.jpg" data-min-width="1000"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Event%20Schedule/700_zps28fb148a.jpg" data-min-width="700"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Event%20Schedule/300_zpsfe4aaa9b.jpg" data-min-width="300"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Event%20Schedule/200_zps1b2adfce.jpg" data-min-width="200"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Event%20Schedule/140_zps4a0f2421.jpg" data-min-width="140"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Event%20Schedule/100_zps0b08c1ed.jpg"></div>
                                                                <noscript>
                                                                        <img src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Event%20Schedule/100_zps0b08c1ed.jpg" alt="Event Schedule"/>
                                                                </noscript>
                                                        </div>
                                                </li>
                                                <li>
                                                        <div data-alt="Audience" data-description="<h3>Audience</h3>" data-max-width="1800" data-max-height="1350">
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Audience/1300_zpsaa4b3dcc.jpg" data-min-width="1300"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Audience/1000_zps69f0ba38.jpg" data-min-width="1000"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Audience/700_zps715d9db0.jpg" data-min-width="700"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Audience/300_zpsa0505100.jpg" data-min-width="300"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Audience/200_zpsd4081c00.jpg" data-min-width="200"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Audience/140_zpsad7142c8.jpg" data-min-width="140"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Audience/100_zps2d0b278b.jpg"></div>
                                                                <noscript>
                                                                        <img src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Audience/100_zps2d0b278b.jpg" alt="Audience"/>
                                                                </noscript>
                                                        </div>
                                                </li>
                                                <li>
                                                        <div data-alt="Jeremy Blum 1" data-description="<h3>Jeremy Blum 1</h3>" data-max-width="1800" data-max-height="1350">
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum1/1300_zps3f7d1b00.jpg" data-min-width="1300"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum1/1000_zps020f9060.jpg" data-min-width="1000"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum1/700_zpsd85a8bb3.jpg" data-min-width="700"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum1/300_zpsb764995e.jpg" data-min-width="300"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum1/200_zpsdd188bd6.jpg" data-min-width="200"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum1/140_zpsaad077a8.jpg" data-min-width="140"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum1/100_zpsd4f3fef2.jpg"></div>
                                                                <noscript>
                                                                        <img src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum1/100_zpsd4f3fef2.jpg" alt="Jeremy Blum 1"/>
                                                                </noscript>
                                                        </div>
                                                </li>
                                                <li>
                                                        <div data-alt="Jeremy Blum 2" data-description="<h3>Jeremy Blum 2</h3>" data-max-width="1800" data-max-height="1350">
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum2/1300_zpsc8bac8ad.jpg" data-min-width="1300"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum2/1000_zps01c019ed.jpg" data-min-width="1000"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum2/700_zpsfd3de356.jpg" data-min-width="700"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum2/300_zpsbaad554c.jpg" data-min-width="300"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum2/200_zps9e43a1fa.jpg" data-min-width="200"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum2/140_zps944a90cc.jpg" data-min-width="140"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum2/100_zps9462f5ca.jpg"></div>
                                                                <noscript>
                                                                        <img src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum2/100_zps9462f5ca.jpg" alt="Jeremy Blum 2"/>
                                                                </noscript>
                                                        </div>
                                                </li>
                                                <li>
                                                        <div data-alt="Maisie Greenawalt" data-description="<h3>Maisie Greenawalt</h3>" data-max-width="1800" data-max-height="1350">
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Maisie%20Greenawalt/1300_zps262bdba2.jpg" data-min-width="1300"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Maisie%20Greenawalt/1000_zps92c84ba7.jpg" data-min-width="1000"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Maisie%20Greenawalt/700_zpsfbdc00a8.jpg" data-min-width="700"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Maisie%20Greenawalt/300_zpsec75e2e3.jpg" data-min-width="300"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Maisie%20Greenawalt/200_zps8a390084.jpg" data-min-width="200"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Maisie%20Greenawalt/140_zps1d053e7b.jpg" data-min-width="140"></div>
                                                                <div data-src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Maisie%20Greenawalt/100_zpsa33f10e7.jpg"></div>
                                                                <noscript>
                                                                        <img src="http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Maisie%20Greenawalt/100_zpsa33f10e7.jpg" alt="Maisie Greenawalt"/>
                                                                </noscript>
                                                        </div>
                                                </li>
                                                <li>
                                                        <div data-alt="E-board" data-description="<h3>E-board</h3>" data-max-width="1800" data-max-height="1350">
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/E-board/1300_zpsa74da9f5.jpg" data-min-width="1300"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/E-board/1000_zpsa31abb11.jpg" data-min-width="1000"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/E-board/700_zps1eddbced.jpg" data-min-width="700"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/E-board/300_zpsaaa7cc94.jpg" data-min-width="300"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/E-board/200_zps1cce79c5.jpg" data-min-width="200"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/E-board/140_zpsd1bb0469.jpg" data-min-width="140"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/E-board/100_zpsbc8e727b.jpg"></div>
                                                                <noscript>
                                                                        <img src="http://i1294.photobucket.com/albums/b620/JasonXX2/E-board/100_zpsbc8e727b.jpg" alt="E-board"/>
                                                                </noscript>
                                                        </div>
                                                </li>
                                                <li>
                                                        <div data-alt="Lauren Braun" data-description="<h3>Lauren Braun</h3>" data-max-width="1800" data-max-height="1350">
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Lauren%20Braun/1300_zpsbd3a2c0f.jpg" data-min-width="1300"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Lauren%20Braun/1000_zps7ba50294.jpg" data-min-width="1000"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Lauren%20Braun/700_zps285af7d2.jpg" data-min-width="700"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Lauren%20Braun/300_zps0154fc61.jpg" data-min-width="300"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Lauren%20Braun/200_zpsb72364b8.jpg" data-min-width="200"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Lauren%20Braun/140_zpsebe8b371.jpg" data-min-width="140"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Lauren%20Braun/100_zpse994bcbe.jpg"></div>
                                                                <noscript>
                                                                        <img src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Lauren%20Braun/100_zpse994bcbe.jpg" alt="Lauren Braun"/>
                                                                </noscript>
                                                        </div>
                                                </li>
                                                <li>
                                                        <div data-alt="Baby" data-description="<h3>Baby!</h3>" data-max-width="1800" data-max-height="1350">
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Baby/1300_zps1fd4a0c3.jpg" data-min-width="1300"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Baby/1000_zps65bf293d.jpg" data-min-width="1000"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Baby/700_zps02e4d766.jpg" data-min-width="700"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Baby/300_zpsdac73e30.jpg" data-min-width="300"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Baby/200_zps14834b48.jpg" data-min-width="200"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Baby/140_zps2669fe09.jpg" data-min-width="140"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Baby/100_zps0b4751dc.jpg"></div>
                                                                <noscript>
                                                                        <img src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Baby/100_zps0b4751dc.jpg" alt="Baby"/>
                                                                </noscript>
                                                        </div>
                                                </li>
                                                <li>
                                                        <div data-alt="Ben Justus" data-description="<h3>Ben Justus</h3>" data-max-width="1800" data-max-height="1350">
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Ben%20Justus/1300_zps9dcb87c3.jpg" data-min-width="1300"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Ben%20Justus/1000_zps7b65a1ba.jpg" data-min-width="1000"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Ben%20Justus/700_zpsa8760086.jpg" data-min-width="700"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Ben%20Justus/300_zps5c2a9745.jpg" data-min-width="300"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Ben%20Justus/200_zps898ac56a.jpg" data-min-width="200"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Ben%20Justus/140_zpsd6df3924.jpg" data-min-width="140"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Ben%20Justus/100_zpsc173aaeb.jpg"></div>
                                                                <noscript>
                                                                        <img src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Ben%20Justus/100_zpsc173aaeb.jpg" alt="Ben Justus"/>
                                                                </noscript>
                                                        </div>
                                                </li>
                                                <li>
                                                        <div data-alt="Meredith Talusan" data-description="<h3>Meredith Talusan</h3>" data-max-width="1800" data-max-height="1350">
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Meredith/1300_zpsb00385a5.jpg" data-min-width="1300"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Meredith/1000_zps14f2d85c.jpg" data-min-width="1000"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Meredith/700_zps80887b70.jpg" data-min-width="700"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Meredith/300_zps810994db.jpg" data-min-width="300"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Meredith/200_zps9c732323.jpg" data-min-width="200"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Meredith/140_zps7ad9f324.jpg" data-min-width="140"></div>
                                                                <div data-src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Meredith/100_zpsf77f1124.jpg"></div>
                                                                <noscript>
                                                                        <img src="http://i1294.photobucket.com/albums/b620/JasonXX2/Final%20Project/Meredith/100_zpsf77f1124.jpg" alt="Meredith Talusan"/>
                                                                </noscript>
                                                        </div>
                                                </li>
                                        </ul>

                                        <div class="gamma-overlay"></div>

                                        
                                </div>

                        </div><!--/main-->
                </div>
                
</div>
        </section>

        
<!--Start of videos section-->
    <section id="videos1"><!--www.highslide.com/ref/hs.addSlideshow-->
        <div class="sectionwrapper" id="videos">
        <h4>VIDEOS</h4>
        <div id="links">
            <a href="http://www.youtube.com/embed/Vah9QXdm8Sg?rel=0;wmode=transparent" 
                onclick="return hs.htmlExpand(this, {objectType: 'iframe', width: 420, height: 315, 
                allowSizeReduction: false, wrapperClassName: 'draggable-header no-footer', 
                preserveContent: false, objectLoadTime: 'after'})"
                class="highslide">
                <img src='http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Miki%20Agrawal/Miki_thumb_zps1d5092af.jpg' alt='Miki Agrawal: Social Entrepreneurship'/>
            </a>

            <a href="http://www.youtube.com/embed/ealGFfVEYOU?rel=0;wmode=transparent" 
                onclick="return hs.htmlExpand(this, {objectType: 'iframe', width: 420, height: 315, 
                allowSizeReduction: false, wrapperClassName: 'draggable-header no-footer', 
                preserveContent: false, objectLoadTime: 'after'})"
                class="highslide">
                <img src='http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeffrey%20Lipton/Jeffrey_thumb_zpsafaf3bdd.jpg' alt='Jeffrey Lipton: Creating in the Classroom'/>
            </a>

            <a href="http://www.youtube.com/embed/dZatFRDKfKQ?rel=0;wmode=transparent" 
                onclick="return hs.htmlExpand(this, {objectType: 'iframe', width: 420, height: 315, 
                allowSizeReduction: false, wrapperClassName: 'draggable-header no-footer', 
                preserveContent: false, objectLoadTime: 'after'})"
                class="highslide">
                <img src='http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Graeme%20Bailey/Thumb_zps838d911b.jpg' alt='Graeme Bailey'/>
            </a>

            <a href="http://www.youtube.com/embed/6LLzl-NuDjw?rel=0;wmode=transparent" 
                onclick="return hs.htmlExpand(this, {objectType: 'iframe', width: 420, height: 315, 
                allowSizeReduction: false, wrapperClassName: 'draggable-header no-footer', 
                preserveContent: false, objectLoadTime: 'after'})"
                class="highslide">
                <img src='http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeremy%20Blum/Thumb_zpse99abde6.jpg' alt='Jeremy Blum: Open Source Society'/>
            </a>

            <a href="http://www.youtube.com/embed/x9HuWaMQtBc?rel=0;wmode=transparent" 
                onclick="return hs.htmlExpand(this, {objectType: 'iframe', width: 420, height: 315, 
                allowSizeReduction: false, wrapperClassName: 'draggable-header no-footer', 
                preserveContent: false, objectLoadTime: 'after'})"
                class="highslide">
                <img src='http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Maisie%20Greenawalt/Thumb_zps47cc3fd3.jpg' alt='Maisie Greenawalt: The Humane Sausage'/>
            </a>

            <a href="http://www.youtube.com/embed/Aa2JfigaNcs?rel=0;wmode=transparent" 
                onclick="return hs.htmlExpand(this, {objectType: 'iframe', width: 420, height: 315, 
                allowSizeReduction: false, wrapperClassName: 'draggable-header no-footer', 
                preserveContent: false, objectLoadTime: 'after'})"
                class="highslide">
                <img src='http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Sheila%20Nirenberg/Thumb_zps6b6467af.jpg' alt='Sheila Nirenberg: A Prosthetic Eye to Treat Blindness'/>
            </a>

            <a href="http://www.youtube.com/embed/8aAivrIUH1s?rel=0;wmode=transparent" 
                onclick="return hs.htmlExpand(this, {objectType: 'iframe', width: 420, height: 315, 
                allowSizeReduction: false, wrapperClassName: 'draggable-header no-footer', 
                preserveContent: false, objectLoadTime: 'after'})"
                class="highslide">
                <img src='http://i1161.photobucket.com/albums/q508/teamshenzhen2012/Jeff%20Hancock/Thumb_zps79429c34.jpg' alt='Jeff Hancock: The Future of Lying'/>
            </a>
        </div>
        </div>
    </section>

<!--Start of Join Us section-->
    <section id="joinus1"><!--John Snyder Master Accordion-->
        <div class="sectionwrapper" id="joinus">
        <h4>JOIN US</h4>
        <div id="memberdiv">
            <div id="memberinfo">
                <ul>
                    <li>
                        <img src="Images/CaioTEDxwebphoto.jpg" alt="CaioBarboza">
                    </li>
                    <li>
                        <img src="Images/PrincessTedxwebphoto.jpg" alt="PrincessSwan" >
                    </li>
                    <li>
                        <img src="Images/apexa.png" alt="soon">
                    </li>
                    <li>
                        <img src="Images/GiorgioTedxwebphoto.jpg" alt="GiorgioVitale">
                    </li>
                    <li>
                        <img src="Images/GenyaTedxwebphoto.jpg" alt="EvgenyYakimento">
                    </li>
                </ul>
            </div>
        </div>
        
        <div id="joinusform">
            <?php include("php/getinvolved.php");?>
        </div>
        </div>
    </section>

<!--Start of Contact section-->
    <section id="thelastsection">
        <div class="sectionwrapper" id="contact">
        <h4>CONTACT</h4>
        <div id="formwrapper">
            <div id="accordionwrapper1">
                
            <div class="accordion" id="section1">Feedback<span></span></div>
            <div class="container">
            <div class="content">
                <?php include("php/feedback.php");?>
            </div>
            </div>
            
            <div class="accordion" id="section2">Application<span></span></div>
            <div class="container">
            <div class="content">
                <?php include("php/application.php"); ?>
            </div>
            </div>
            </div>
       </div>
       </div>
    </section>
   
    <footer>
        <div class="fb-like" data-href="https://www.facebook.com/TEDxCornellUniversity" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div> 
        <p>Visit TEDx: <a href="http://www.ted.com/tedx">http://www.ted.com/tedx</a></p>
        <a href="https://twitter.com/tedtalks" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @TEDTalks</a>
        <p>&#169; All rights reserved by The Techy Turtles </p>
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/jquery.masonry.min.js"></script>
<script src="js/jquery.history.js"></script>
<script src="js/js-url.min.js"></script>
<script src="js/jquerypp.custom.js"></script>
<script src="js/gamma.js"></script>
<script type="text/javascript">
    $(function() {
    var GammaSettings = {
        // order is important!
         viewport : [ {
            width : 1200,
            columns : 5
        }, {
            width : 900,
            columns : 4
        }, {
            width : 500,
            columns : 3
        }, { 
            width : 320,
            columns : 2
        }, { 
            width : 0,
            columns : 2
        } ]
    };
    Gamma.init( GammaSettings, fncallback );
    //Example how to add more items (just a dummy):
    var page = 0,
        items = ['<li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="Images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="Images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="Images/xlarge/3.jpg" data-min-width="700"></div><div data-src="Images/large/3.jpg" data-min-width="300"></div><div data-src="Images/medium/3.jpg" data-min-width="200"></div><div data-src="Images/small/3.jpg" data-min-width="140"></div><div data-src="Images/xsmall/3.jpg"></div><noscript><img src="Images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="Images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="Images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="Images/xlarge/3.jpg" data-min-width="700"></div><div data-src="Images/large/3.jpg" data-min-width="300"></div><div data-src="Images/medium/3.jpg" data-min-width="200"></div><div data-src="Images/small/3.jpg" data-min-width="140"></div><div data-src="Images/xsmall/3.jpg"></div><noscript><img src="Images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="Images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="Images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="Images/xlarge/3.jpg" data-min-width="700"></div><div data-src="Images/large/3.jpg" data-min-width="300"></div><div data-src="Images/medium/3.jpg" data-min-width="200"></div><div data-src="Images/small/3.jpg" data-min-width="140"></div><div data-src="Images/xsmall/3.jpg"></div><noscript><img src="Images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="Images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="Images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="Images/xlarge/3.jpg" data-min-width="700"></div><div data-src="Images/large/3.jpg" data-min-width="300"></div><div data-src="Images/medium/3.jpg" data-min-width="200"></div><div data-src="Images/small/3.jpg" data-min-width="140"></div><div data-src="Images/xsmall/3.jpg"></div><noscript><img src="Images/xsmall/3.jpg" alt="img03"/></noscript></div></li><li><div data-alt="img03" data-description="<h3>Sky high</h3>" data-max-width="1800" data-max-height="1350"><div data-src="Images/xxxlarge/3.jpg" data-min-width="1300"></div><div data-src="Images/xxlarge/3.jpg" data-min-width="1000"></div><div data-src="Images/xlarge/3.jpg" data-min-width="700"></div><div data-src="Images/large/3.jpg" data-min-width="300"></div><div data-src="Images/medium/3.jpg" data-min-width="200"></div><div data-src="Images/small/3.jpg" data-min-width="140"></div><div data-src="Images/xsmall/3.jpg"></div><noscript><img src="Images/xsmall/3.jpg" alt="img03"/></noscript></div></li>']
    function fncallback() {
        $( '#loadmore' ).show().on( 'click', function() {
            ++page;
            var newitems = items[page-1]
            if( page <= 1 ) {
                Gamma.add( $( newitems ) );
            }
            if( page === 1 ) {
                $( this ).remove();
            }
        } );
    }
    });
</script>       

<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<script type="text/javascript">
    hs.graphicsDir = 'highslide/graphics/';
    hs.align = 'center';
    hs.transitions = ['expand', 'crossfade'];
    hs.fadeInOut = true;
    hs.dimmingOpacity = 0.8;
    hs.outlineType = 'rounded-white';
    hs.captionEval = 'this.thumb.alt';
    hs.marginBottom = 105; // make room for the thumbstrip and the controls
    hs.numberPosition = 'caption';
    // Add the slideshow providing the controlbar and the thumbstrip
    hs.addSlideshow({
    //slideshowGroup: 'group1',
        interval: 5000,
        repeat: false,
        useControls: true,
        overlayOptions: {
            className: 'text-controls',
            position: 'bottom center',
            relativeTo: 'viewport',
            offsetY: -60
        },
        thumbstrip: {
            position: 'bottom center',
            mode: 'horizontal',
            relativeTo: 'viewport'
        }
    });
</script>
<script type="text/javascript">
    // Apply the Highslide settings
    hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
    hs.outlineWhileAnimating = true;
</script>

<script type="text/JavaScript">
    $("#slideshow > div:gt(0)").hide();
    setInterval(function() { 
        $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
    },  5000);
</script>
<script type="text/javascript" src="highslide/highslide-full.js"></script>
<script type="text/javascript" src="smoothscroll.js"></script><!--http://www.dwuser.com/education/content/quick-guide-adding-smooth-scrolling-to-your-webpages/-->
<script type="text/javascript">
    hs.graphicsDir = 'highslide/graphics/';
    hs.align = 'center';
    hs.transitions = ['expand', 'crossfade'];
    hs.fadeInOut = true;
    hs.dimmingOpacity = 0.8;
    hs.outlineType = 'rounded-white';
    hs.captionEval = 'this.thumb.alt';
    hs.marginBottom = 105; // make room for the thumbstrip and the controls
    hs.numberPosition = 'caption';
    // Add the slideshow providing the controlbar and the thumbstrip
    hs.addSlideshow({
        //slideshowGroup: 'group1',
        interval: 5000,
        repeat: false,
        useControls: true,
        overlayOptions: {
        className: 'text-controls',
        position: 'bottom center',
        relativeTo: 'viewport',
        offsetY: -60
    },
    thumbstrip: {
        position: 'bottom center',
        mode: 'horizontal',
        relativeTo: 'viewport'
    }
    });
</script>

<script type="text/javascript" src="Accordion-master/jquery.accordion.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    //custom animation for open/close
    $.fn.slideFadeToggle = function(speed, easing, callback) {
    return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
    };
   $('.accordion').accordion({
        cookieName: 'nav',
        speed: 'slow',
        defaultOpen: 'section1',
        animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
        elem.next().stop(true, true).slideFadeToggle(opts.speed);
        },
       animateClose: function (elem, opts) { //replace the standard slideDown with custom function
        elem.next().stop(true, true).slideFadeToggle(opts.speed);
       }
    });
    });
    $(document).ready(function() {
    //custom animation for open/close
    $.fn.slideFadeToggle = function(speed, easing, callback) {
        return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
    };
    $('.accordion1').accordion({
        cookieName: 'nav',
        speed: 'slow',
        defaultOpen: 'section5',
        animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
        elem.next().stop(true, true).slideFadeToggle(opts.speed);
        },
        animateClose: function (elem, opts) { //replace the standard slideDown with custom function
        elem.next().stop(true, true).slideFadeToggle(opts.speed);
        }
    });
    });
    $(document).ready(function() {
    //custom animation for open/close
    $.fn.slideFadeToggle = function(speed, easing, callback) {
    return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
    };
    $('.accordion2').accordion({
        cookieName: 'nav',
        speed: 'slow',
        defaultOpen: 'section4',
        animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
            elem.next().stop(true, true).slideFadeToggle(opts.speed);
        },
        animateClose: function (elem, opts) { //replace the standard slideDown with custom function
            elem.next().stop(true, true).slideFadeToggle(opts.speed);
        }
    });
    });
    $(document).ready(function() {
    //custom animation for open/close
    $.fn.slideFadeToggle = function(speed, easing, callback) {
        return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
    };
    $('.accordion_mobile').accordion({
        cookieName: 'nav',
        speed: 'slow',
        animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
            elem.next().stop(true, true).slideFadeToggle(opts.speed);
        },
        animateClose: function (elem, opts) { //replace the standard slideDown with custom function
            elem.next().stop(true, true).slideFadeToggle(opts.speed);
        }
    });
    });
</script>
</body>
</html>