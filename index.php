<!DOCTYPE html>
<html lang="en">
<?php
    include "header.php";
?>

<body>
    <?php
    include "menu.php";
    ?>
    <main class="site-main">
        <section class="hero_area">
            <div class="hero_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>ANKONAN</h1>
                            <h2>Make yourself at home.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="boxes_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box">
                            <h3>BLOCKCHAIN</h3>
                            <p>We design solutions using blockchain technology for all industries, our professionals are certified and have an extensive background with the use and development of this new technology. Ask us for the use cases and how you can benefit from this technology to elevate your business and its security.</p>
                            <i class="fa fa-cogs"></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box">
                            <h3>SERVICE DESK</h3>
                            <p>With more than 10 years of experience using Atlassian products, our company brings the bests solutions on Service Desk , Team Collaboration, Asset Management and other add-ons that a lot of companies use to increase productivity and manage complex situations easier.</p>
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box">
                            <h3>PAYMENT METHODS</h3>
                            <!-- <p>Fiii first retail TPV: Ankonan has become a worldwide partner, representing in Spain the latest innovation in retail payment PTV accepting all kind of crypto and delivering tickets and mining optimisation processes.</p> -->
				<p>TPV Solutions: Ankonan offer the latest innovation in retail payments, delivering tickets and mining optimisation processes.</p>
                            <i class="fa fa-clipboard"></i>
                        </div>
                    </div>
                </div>
            </div>
<br>


<div class="home_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12"><h2 class="sub_title">LATEST NEWS</h2></div>
                        <div class="home_list2">
                            <ul>
                                <?php
                                    include "posts.php";
                                ?>
<!--
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="img/h4.jpeg" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h3><a href="#">Post Title</a></h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                            <a href="#" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>                                    

-->

                            </ul>
                        </div>

                        
                    </div>
                </div>
            </div>
        </section>
        </section>


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