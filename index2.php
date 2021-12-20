<?php session_start();
if($_SESSION['username']==true||$_SESSION['s_name']==true)
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>GNITS : Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/superslides.css">
    <link href="./css/slick.css" rel="stylesheet">
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/queryLoader.css" type="text/css" />
    <link type="text/css" media="all" rel="stylesheet" href="./css/jquery.tosrus.all.css" />
    <link id="switcher" href="./css/themes/default-theme.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <a class="scrollToTop" href="#"></a>
    <header id="header" >
      <div class="menu_area" >
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header" >
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
               <a class="navbar-brand" href="index.html" ><img src="img/logo.jpg" alt="logo" ></a>
              <a class="navbar-brand" href="./index.html"><span> G. NARAYANAMMA INSTITUTE OF TECHNOLOGY AND SCIENCE</span></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="index2.php">Home</a></li>
                 <li><a href="institute2.php">Institute</a></li>
                <li><a href="course-archive2.php">Courses</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dashboard<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="f_dash.php">Faculty</a></li>
                    <li><a href="s_dash.php">Student</a></li>
                     <li><a href="p_dash.php">Parent</a></li>
                    </ul>
                </li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="gallery2.php">Gallery</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Resources<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                   <li><a href="http://www.gnits.ac.in/?q=NPTEL">NPTEL</a></li>
                    <li><a href="http://www.gnits.ac.in/?q=internet">Internet Center</a></li>
                     <li><a href="http://www.gnits.ac.in/?q=library">Library</a></li>
                    <li><a href="http://www.gnits.ac.in/?q=busserv">Bus Services</a></li>
                    <li><a href="http://www.gnits.ac.in/?q=hostel">Hostel</a></li>
                    <li><a href="http://www.gnits.ac.in/?q=sports">Sports</a></li>
                     <li><a href="http://www.gnits.ac.in/?q=campuslife">Campus life</a></li>
                    <li><a href="http://www.gnits.ac.in/?q=onlineresources">Online Resources</a></li>
                     <li><a href="http://www.gnits.ac.in/?q=ICELL">GNITS Innovation Cell</a></li>
                    <li><a href="http://www.gnits.ac.in/?q=NFSE">Sanskrit Education(NFSE)</a></li>
                  </ul>
                </li>
                <li><a href="contact2.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area" colo>
            <div id="slides">
              <ul class="slides-container">
                <li>
                  <img src="img/slider/abc.jpg" alt="img" style="width:100%;height:200px;">>
                   <div class="slider_caption">
                   <h2>College</h2>
                    <p>Vision: To become a center of quality education in Engineering and Technology for women empowerment.</p>
                  </div>
                  </li>
                <li>
                  <img src="img/slider/def.jpg" alt="img" style="width:100%;height:200px;">>
                   <div class="slider_caption">
                    <h2>Better Education Environment</h2>
                    <p>The institute is maintaining about 90% as pass percentage for outgoing students in all most all courses. The college has developed 4,01,100 Sq.Ft. of infrastructure to accommodate 2500 students.</p>
                  </div>
                </li>
                <li>
                  <img src="img/slider/ghi.jpg" alt="img" style="width:100%;height:200px;">>
                   <div class="slider_caption">
                    <h2>Find out you in better way</h2>
                    <p>The campus with lot of greenery and a peaceful ambiance which make the students envy here.</p>
                  </div>
                </li>
              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">About Us...</h2>
            <p>The G.  Narayanamma Institue of Technology & Science, a engineering college in Hyderabad for women, was founded by late Sri Pulla Reddy Garu in 1997, with the objective of providing an excellent learning facility for women to pursue education in engineering. It is today considered one of the best engineering colleges in Hyderabad. GNITS is affiliated to Jawaharlal Nehru Technological University (JNTU), Hyderabad, and is approved by All India Council for Technical Education (AICTE), accredited by NBA (AICTE). GNITS is the first women's college in Telangana to obtain the ISO 9001 : 2008 Certification.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#news" data-toggle="tab">News</a></li>
              <li><a href="#notice" data-toggle="tab">Notice</a></li>
              <li><a href="#events" data-toggle="tab">Events</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="news">
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/iot.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">One-Week Faculty Development Program on IoT DEVELOPMENT AND ANALYTICS 12th-17th March, 2018</a>
                       <span class="feed_date">01.03.18</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/sih.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Smart India Hackathon 2018</a>
                       <span class="feed_date">25.02.18</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/wpc.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">GNITS-Women Protection Cell</a>
                       <span class="feed_date">30.01.18</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <a class="see_all" href="#">See All</a>
              </div>
              <div class="tab-pane fade " id="notice">
                <div class="single_notice_pane">
                  <ul class="news_tab">
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/result.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">B.Tech-II Sem-Exam Time Tables-April-2018</a>
                         <span class="feed_date">15.03.18</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/cal.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Revised II,III& IV year  B.Tech. Academic Calendar for  2017-18</a>
                         <span class="feed_date">28.09.17</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/fee_r.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Circular for applying for Fee Reimbursement 2017</a>
                         <span class="feed_date">23.08.17</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="news_tab">
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/cbcs.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">B.Tech. R16 Academic Regulations -Choice Based Credit System(CBCS)</a>
                         <span class="feed_date">15.07.17</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/cal.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Academic Calendar 2017-18 for I Year B.Tech</a>
                         <span class="feed_date">11.07.17</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/fee.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Tuition Fee/Examination Fee Payment Online</a>
                         <span class="feed_date">19.06.17</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade " id="events">
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/ignium.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Ignium 2k18</a>
                       <span class="feed_date">23rd and 24th february 2018</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/webdev.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">2 Day Workshop on Web Development</a>
                       <span class="feed_date">10.02.18</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/alumnae.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">GNITS Alumnae Celebrations</a>
                       <span class="feed_date">06.01.18</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <a class="see_all" href="#">See All</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <section id="ourCourses">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two">Our Departments</h2>
              <span></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourCourse_content">
              <ul class="course_nav">
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/DSC08307.jpg" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">Computer Science and Engineering</a></h3>
                     <p>Computer engineering is the branch that integrates electronic engineering with computer sciences.A distinct and fresh perspective worked out by CSE Department of GNITS makes different and exclusive to join the top ranking Institutions across India.</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/u.png" alt="img">
                      <p>Dr.M.Seetha,HOD</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/DSC07056.jpg" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">Electronics & Communication Engineering</a></h3>
                     <p>Electronics and Communication Engineering (ECE) is one of the largest and fastest growing fields of engineering. The present Global Technology revolution is changing the world and is offering challenging opportunities to specifically Engineers.</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/z.png" alt="img">
                      <p>Dr. B.Venkateshulu, HOD</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/DSC07078.jpg" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">Information Technology</a></h3>
                    <p>The role of an IT department within an organization is to design, maintain, and support an organization's information technology infrastructure, thus allowing the organization to leverage both information and technology in an efficient, productive and secure manner.</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/x.png" alt="img">
                      <p>Dr.I.Ravi Prakash Reddy,HOD</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/DSC08399.jpg" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#">Electrical & Electronics Engineering</a></h3>
                    <p>Electrical & Electronics Engineering (EEE), deals with the engineering problems, opportunities and needs of electrical, electronics, computer, telecommunication systems and related industries.</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/y.png" alt="img">
                      <p>Dr. N. Malla Reddy,HOD</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/DSC08456.jpg" />
                      <div class="mask">
                        <a href="#" class="course_more">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="#"> 
Electronics & Telematics Engineering</a></h3>
                    <p>The usage of such facilities growing at a rapid pace will also result in more number of Job opportunities for skilled engineers in that field. Realizing the potential in a new stream of engineering – Electronics and Telematics (ETM/ETE).</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/w.png" alt="img">
                      <p>Dr.K.Rama Linga Reddy,HOD</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="ourTutors">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two">Our Faculty</h2>
              <span></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourTutors_content">
              <ul class="tutors_nav">
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/u.png" />
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Faculty</h3>
                      <span><a href="http://www.gnits.ac.in/?q=csestaff">CSE Dept.</a></span>
                      <p>Students in CSE Department learn from a higher platform in a culture to innovate and with a mindset that they can make positive difference to the society we all live in.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/z.png" />
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Faculty</h3>
                      <span><a href="http://www.gnits.ac.in/?q=ecestaff">ECE Dept.</a></span>
                      <p>ECE dept envisions to develop high quality and technically competent women engineers who can address the growing challenges in the modern world with a keen sense of social responsibility.</p>
                    </div>
                    </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/x.png" />
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Faculty</h3>
                      <span><a href="http://www.gnits.ac.in/?q=itstaff">IT Dept.</a></span>
                      <p>Providing students with a compelling foundation in Engineering and Basic Sciences that will further help them conduct investigations of complex problems.</p>
                    </div>
                    </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/y.png" />
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Faculty</h3>
                      <span><a href="http://www.gnits.ac.in/?q=eeestaff">EEE Dept.</a></span>
                      <p> Imparting fundamental knowledge in Electrical and Electronics Engineering through well-qualified faculty. Providing exposure to current technologies. Providing hands-on experience to meet the expectations of the industry.</p>
                    </div>
                    </div>
                </li>
                <li>
                  <div class="single_tutors">
                    <div class="tutors_thumb">
                      <img src="img/w.png" />
                    </div>
                    <div class="singTutors_content">
                      <h3 class="tutors_name">Faculty</h3>
                      <span><a href="http://www.gnits.ac.in/?q=etmstaff">ETM Dept.</a></span>
                      <p>Now a days Computers are playing a key role in offices and household automation, the assimilation of telephone services and computers has changed the way one looks at World.</p>
                    </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="studentsTestimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="title_area">
              <h2 class="title_two">What our Student says</h2>
              <span></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="studentsTestimonial_content">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>Speaking regarding the placements, this is one of the best colleges that provides you with the 90% placements. The placement team of this college strives hard to bring different companies helping the students with their placements. I agree, mostly, the core companies do not come to our college except one or two (eg SAP labs), but the IT companies that recruit not only the CSE and the IT students but also the students from the other departments. </p>
                    </div>
                    <img class="stsTesti_img" src="img/author.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Tulasi</h3>
                      <span>Alumna</span>
                      <p>Software Department</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p>Regarding the infrastructure,it is a Wi-Fi enabled campus with the hostel built within the campus.It is a girls college,the hostel is within the campus, good placements- are the reasons why parents prefer this college for their daughters.The hostel food is not too bad.One cannot find non-veg on the whole campus.The doctor does visit the hostel, and the visit is limited to twice a week, but immediate actions are taken if any medical issues arise. </p>
                    </div>
                    <img class="stsTesti_img" src="img/author.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Divya</h3>
                      <span>Ex.Student</span>
                      <p>ECIL</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_stsTestimonial wow fadeInUp">
                    <div class="stsTestimonial_msgbox">
                      <p> Different types of festivals are conducted every year. The Sports festival, named as Wow but this year it was named VERVE 2K18 which was conducted for 2 days, is conducted every alternate year, and the lit fests (literary fest) and the cultural fests are conducted together every alternate year i.e one year if you have sports fest then the other year you have cultural and lit fests.</p>
                    </div>
                    <img class="stsTesti_img" src="img/author.jpg" alt="img">
                    <div class="stsTestimonial_content">
                      <h3>Keerthana</h3>
                      <span>Alumna</span>
                      <p>L & T</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Meaning of Tagline</h3>
                <p>"Shraddhavan labhate jnanam" (one who has "Shraddha" obtains Knowledge/Jnana).A faithful man who is absorbed in transcendental knowledge and who subdues his senses quickly attains the supreme spiritual peace.</p>
              </div>
            </div>
            <div class="col-ld-2  col-md-2 col-sm-2">
              <div class="single_footer_widget">
                <h3>College</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Our Faculty</a></li>
                  <li><a href="#">Our Students</a></li>
                  <li><a href="#">Campus Tour</a></li>
                  <li><a href="#">Management</a></li>
                  <li><a href="#">News &amp; Media</a></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Other Links</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">JNTUH</a></li>
                  <li><a href="#">NPTEL</a></li>
                  <li><a href="#">Hebeon</a></li>
                </ul>
              </div>
            </div>
             <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.facebook.com/pages/GNITS/108118522554749" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="https://twitter.com/GnitsEcell" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="https://plus.google.com/117115220839938166189" target="_blank"><i class="fa fa-google-plus" target="_blank"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="https://in.linkedin.com/school/g.-narayanamma-institute-of-technology-and-science/"><i class="fa fa-linkedin" target="_blank"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="https://www.youtube.com/watch?v=4OD-mbCie1c" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
}else{
header('location:login.html');
}
?>
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> </p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Designed by <a href="#" rel="nofollow">Swetha & Nikitha CSE-C 2/4</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
