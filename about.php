<!DOCTYPE html>
<html lang="en">
<?php
    include "header.php";
?>

<body>
    <?php
    include "menu.php";
    ?>
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-md-12">
                    <h2 class="page-title">About ANKONAN</h2>
                    <div class="entry">
                        <p>ANKONAN is an intimate company united by its shared passion for modern technologies and old-fashioned hard work. For this reason we decided to create a business that could bring to our clients the knowledge, the expertise and the care that have been going into our technology based projects over the previous years.</p>
			<p>We don't accept projects that are linked to technologies we don't yet know, we develop all of our projects individually and we don't resell. We train all our employees in the technologies that we believe in, as we consider that to deliver a project to its highest potential and maintain it at the highest level, a previous knowledge of the technologies comes as a great help.</p>
			<p>We want do things better because we believe in hard work as a way for us to accomplish our goals and gain the trust of our customers.</p>
                    </div>
                </section>
<div class="home_content">

<div class="container">
                    <div class="row">
 			<div class="col-sm-12"><h2 class="sub_title">THE FOUNDERS</h2></div>
                        <div class="home_list">
                            <ul>
                                <li class="col-md-2 col-sm-4 col-xs-8">
                                    <div class="thumbnail">
                                        <img src="img/monica.png" class="img-responsive"  alt="Post">
                                        <div class="caption">
                                            <h4>MONICA GOMEZ</h4>
                                            <p>Legal</p>
                                            <a href="https://www.linkedin.com/in/mónica-gómez-4767b32b/" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>
                                <li class="col-md-2 col-sm-4 col-xs-8">
                                    <div class="thumbnail">
                                        <img src="img/raul2.png" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h4>RAUL PELAEZ</h4>
                                            <p>CTO</p>
                                            <a href="https://www.linkedin.com/in/raúl-peláez-mendoza-ba037a28/" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>
                                <li class="col-md-2 col-sm-4 col-xs-8">
                                    <div class="thumbnail">
                                        <img src="img/sebs2.png" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h4>SEBS. FOUACHE</h4>
                                            <p>CMO</p>
                                            <a href="https://www.linkedin.com/in/sebastienfouache" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>
				<li class="col-md-2 col-sm-4 col-xs-8">
                                    <div class="thumbnail">
                                        <img src="img/david2.png" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h4>DAVID SOTO</h4>
                                            <p>CEO</p>
                                            <a href="https://www.linkedin.com/in/davidsoto" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>                                      
                            </ul>
                        </div>


 
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12"><h2 class="sub_title">THE TEAM</h2></div>
                        <div class="home_list">
                            <ul>
                                <li class="col-md-2 col-sm-4 col-xs-8">
                                    <div class="thumbnail">
                                        <img src="img/eugenio.jpg" alt="Post">
                                        <div class="caption">
                                            <h4>EUGENIO MARIN</h4>
                                            <p>Blockchain Advisor.</p>
                                            <a href="https://www.linkedin.com/in/eumarin/" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>
                                <li class="col-md-2 col-sm-4 col-xs-8">
                                    <div class="thumbnail">
                                        <img src="img/fabio.jpg" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h4>FABIO GENOVESE</h4>
                                            <p>Atlassian Advisor.</p>
                                            <a href="https://www.linkedin.com/in/artigianodelsoftware" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>
                                <li class="col-md-2 col-sm-4 col-xs-8">
                                    <div class="thumbnail">
                                        <img src="img/joseph.jpg" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h4>JOSEPH NOOTT</h4>
                                            <p>Developer, Software Engineering.</p>
                                            <a href="https://www.linkedin.com/in/josephkode" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>                                      
                            </ul>
                        </div>                      
                    </div>
                </div>
            </div>
        </section>
        </section>
            </div>
        </div>


<!-- Modal Contact -->

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
      <div class="modal-content modal-popup">
          <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h2 class="modal-title">Contact Form</h2>
          </div>

               <form action="#" method="post">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                 	<input name="email" type="email" class="form-control" id="email" placeholder="Email Address" required>
                 	<textarea name="message" rows="3" class="form-control" id="message" placeholder="Message" required></textarea>
                    <input name="submit" type="submit" class="form-control" id="submit" value="Send Message">
               </form>
          </div>
     </div>
</div>


<!-- Back top -->



    </main>
    <?php
    include "footer.php";
    ?>
</body>
</html>