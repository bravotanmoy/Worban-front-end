<?php include_once("header.php")?>

<header id="header-section" class="header-area">
    <div class="container">
        <div class="logo-wrapper col-md-2 col-xs-12">
        <div class="row">
            <a href="#"><img src="img/logo.png" alt="#"/> </a>
        </div>
        </div>

        <div class="col-md-5 col-xs-12">
        <div class="row">
            <form id="search-form" action="#" method="get">
                <input id="main-search" type="text" name="s" placeholder="Search by location, ZIP code or hashtag"/>
                <input type="submit" value=""/>
                <i class="fa fa-search" aria-hidden="true"></i>
            </form>
        </div>
        </div>

        <div class="header-right-wrapper col-md-5 col-xs-12">
        <div class="row">
            <ul class="sign-up-margin"><!--   An unique class for log-In or Sign-Up Margin Top -->
                <li>
                    <span>Language</span>
                    <select class="lng" name="">
                        <option value="Italian">English</option>
                        <option value="Italian">Italian</option>
                        <option value="Arabic">Arabic</option>
                        <option value="Bengali">Bengali</option>
                        <option value="French">French</option>
                        <option value="German">German</option>
                        <option value="German">Korean</option>
                        <option value="German">German</option>
                        <option value="German">Mandarin Chinese</option>
                        <option value="German">Hindi-Urdu</option>
                        <option value="German">Spanish</option>
                        <option value="German">German</option>
                        <option value="German">Russian</option>

                    </select>
                </li>
                <li>
                    <span class="log-btn" data-toggle="modal" data-target="#myModal">
                        Log In
                    </span>

                    <!--LogIn Pop Up-->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="log-in-wrapper modal-dialog" style="background-image: url('img/ea0d748b12de2943ed741a9c19d3ac1a.jpg');">

                          <div class="modal-close" data-dismiss="modal">
                                <i class="fa fa-times" aria-hidden="true"></i>
                          </div><!--/.modal-close-->

                            <div class="log-in-box">
                                <div class="log-logo-lable">&nbsp;</div>
                                <h3>Log in to Worban</h3>
                                <p>
                                    <button id="loginBtn" class="logn-facebook" onclick="logIn();" value="Login">
                                        Login With Facebook
                                    </button>
                                </p>
                                <p>
                                    <button id="loginBtn" class="logn-gmail" onclick="logIn();" value="Login">Login With Gmail</button>
                                </p>
                                <hr>

                                <form id="log-in-form" action="#" method="get" name="#">
                                    <input type="text" class="validate[required,custom[email]]" name="email" placeholder="Email"/>
                                    <input type="password" class="validate[required]" name="password" placeholder="Password"/>
                                </form>
                            </div>
                            <div class="login-bottom">
                                <div class="col-xs-8">
                                <div class="row">
                                    <a href="#"><p>Forgot your password ?</p></a>
                                    <a href="#"><p>Sign up now</p></a>
                                </div>
                                </div>

                                <div class="col-xs-4">
                                <div class="row">
                                        <input id="log-in-submit" class="pull-right" type="submit" value="Log in" form="log-in-form"/>
                                </div>
                                </div>
                            </div><!--/.login-bottom-->
                        </div><!--/.log-in-wrapper-->
                    </div>



                    <span  class="log-btn" data-toggle="modal" data-target="#myModal2">
                        Sign Up
                    </span>

                    <!--Sign Up Pop Up-->
                    <div class="modal fade" id="myModal2" role="dialog">
                        <div class="sign-up-wrapper modal-dialog" style="background-image:url('img/london_towerXXX.jpg')">
                          <div class="modal-close" data-dismiss="modal">
                                <i class="fa fa-times" aria-hidden="true"></i>
                          </div><!--/.modal-close-->

                            <div class="log-logo-lable">&nbsp;</div>
                            <div class="signup-lable-text">
                              <h1>Sign up for Worban</h1>
                              <p>See the World Differently. </p>
                            </div><!-- /.signup-lable-text -->

                            <div class="reg-form-wrapper">
                                <div class="user-type-box">
                                    <h3>First, tell us which type of account do you want.</h3>

                                    <ul>
                                        <li data-reg="editorial-reg">
                                          <p>Editorial or Publisher</p>
                                        </li>
                                        <li data-reg="brand-reg">
                                          <p>Brand or Company</p>
                                        </li>
                                        <li data-reg="writter-reg">
                                          <p>Journalist or Blogger</p>
                                        </li>
                                    </ul>

                                    <span class="back-pr-form type-list-btn">
                                      <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                                      <strong>Back to Personal Registration Form</strong>
                                    </span>
                                    <div class="voice-text">
                                        Creating an account means you agree with Worban's <strong>Terms and Conditions and Privacy Policy</strong>
                                    </div><!--/.voice-text-->
                                </div><!-- /.user-type-box -->

                                <!-- Personal User Form -->
                                <div class="registration-form personal-reg" id="personal-reg">
                                  <div class="social-media-sign-up">
                                      <div>
                                          <button value="Login" onclick="logIn();" class="logn-facebook sign-fb" id="loginBtn">Continue With Facebook</button>
                                      </div>
                                      <div>
                                        <button value="Login" onclick="logIn();" class="logn-gmail" id="loginBtn">Continue With Gmail</button>
                                      </div>
                                      <!--<div class="under-line-wrapper">
                                          <span class="under-line">
                                            or
                                          </span>
                                      </div--><!--/.under-line-wrapper-->
                                  </div><!---/.social-media-sign-up-->
                                    <form id="#" action="#" method="POST" name="#">
                                          <p>
                                            <input type="text" name="name" placeholder="Name" id="name"/>
                                            <span class="form-separator">&nbsp;</span>
                                          </p>
                                          <p>
                                            <input type="text" name="surname" placeholder="Surname" id="surname"/>
                                            <span class="form-separator">&nbsp;</span>
                                          </p>
                                          <p>
                                            <input type="email" name="email" placeholder="Email" id="email"/>
                                            <span class="form-separator">&nbsp;</span>
                                          </p>
                                          <p>
                                            <input type="password" name="password" placeholder="Password" id="password"/>
                                            <span class="form-separator">&nbsp;</span>
                                          </p>
                                          <p>
                                            <input type="password" name="password" placeholder="Retype Password" id="repassword"/>
                                            <span class="form-separator">&nbsp;</span>
                                          </p>
                                          <p>
                                            <input type="reset" value="Reset"/>
                                            <input type="submit" value="Submit"/>
                                          </p>
                                    </form>
                                    <span class="back-menu personal-form-btn">
                                        <strong>Do you want a professional account</strong> <big> ?</big>
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                    </span>

                                    <div class="voice-text">
                                        Creating an account means you agree with Worban's <strong>Terms and Conditions and Privacy Policy</strong>
                                    </div><!--/.voice-text-->
                                </div><!-- /#personal-reg -->

                                <!-- Editorial Company User Form -->
                                <div class="registration-form" id="editorial-reg">
                                  <h3>Editorial Company Account Registration Form</h3>
                                    <form id="#" action="#" method="POST" name="#">
                                          <p>
                                            <input type="text" name="name" placeholder="Name" id="name"/>
                                          </p>
                                          <p>
                                            <input type="text" name="surname" placeholder="Surname" id="surname"/>
                                          </p>
                                          <p>
                                            <input type="email" name="email" placeholder="Email" id="email"/>
                                          </p>
                                          <p>
                                            <input type="text" name="company-name" placeholder="Company Name" id="company-name"/>
                                          </p>
                                          <p>
                                            <input type="text" name="editorial-link" placeholder="Editorial Link" id="editorial-link"/>
                                          </p>
                                          <p>
                                            <input type="password" name="password" placeholder="Password" id="password"/>
                                          </p>
                                          <p>
                                            <input type="password" name="password" placeholder="Retype Password" id="repassword"/>
                                          </p>
                                          <p>
                                            <input type="reset" value="Reset"/>
                                            <input type="submit" value="Submit"/>
                                          </p>
                                    </form>
                                    <span class="back-menu list-form-btn">
                                      <i class="fa fa-tasks" aria-hidden="true"></i>
                                      <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                      Back To The Account List
                                    </span>

                                    <div class="voice-text">
                                        Creating an account means you agree with Worban's <strong>Terms and Conditions and Privacy Policy</strong>
                                    </div><!--/.voice-text-->
                                </div><!-- /#editorial-reg -->


                                <!-- Brand User Form -->
                                <div class="registration-form" id="brand-reg">
                                  <h3>Brand Account Registration Form</h3>
                                    <form id="#" action="#" method="POST" name="#">
                                          <p>
                                            <input type="text" name="name" placeholder="Name" id="name"/>
                                          </p>
                                          <p>
                                            <input type="text" name="surname" placeholder="Surname" id="surname"/>
                                          </p>
                                          <p>
                                            <input type="email" name="email" placeholder="Email" id="repassword"/>
                                          </p>
                                          <p>
                                            <input type="text" name="brand-name" placeholder="Brand Name" id="brand-name"/>
                                          </p>
                                          <p>
                                            <input type="text" name="brand-link" placeholder="Brand Link" id="brand-link"/>
                                          </p>
                                          <p>
                                            <input type="password" name="password" placeholder="Password" id="password"/
                                            ></p>
                                          <p>
                                            <input type="password" name="password" placeholder="Retype Password" id="repassword"/>
                                          </p>
                                          <p>
                                            <input type="reset" value="Reset"/>
                                            <input type="submit" value="Submit"/>
                                          </p>
                                    </form>
                                    <span class="back-menu list-form-btn">
                                      <i class="fa fa-tasks" aria-hidden="true"></i>
                                      <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                      Back To The Account List
                                    </span>

                                    <div class="voice-text">
                                        Creating an account means you agree with Worban's <strong>Terms and Conditions and Privacy Policy</strong>
                                    </div><!--/.voice-text-->
                                </div><!-- /#brand-reg -->


                                <!-- Writer User Form -->
                                <div class="registration-form" id="writter-reg">
                                  <h3>Writer Account Registration Form</h3>
                                    <form id="#" action="#" method="POST" name="#">
                                          <p>
                                            <input type="text" name="name" placeholder="Name" id="name"/>
                                          </p>
                                          <p>
                                            <input type="text" name="surname" placeholder="Surname" id="surname"/>
                                          </p>
                                          <p>
                                            <input type="email" name="email" placeholder="Email" id="email"/>
                                          </p>
                                          <p>
                                            <input type="text" name="external-link" placeholder="External Link" id="external-link"/>
                                          </p>
                                          <p>
                                            <input type="password" name="password" placeholder="Password" id="password"/>
                                          </p>
                                          <p>
                                            <input type="password" name="password" placeholder="Retype Password" id="repassword"/>
                                          </p>
                                          <p>
                                            <input type="reset" value="Reset"/>
                                            <input type="submit" value="Submit"/>
                                          </p>
                                    </form>
                                    <span class="back-menu list-form-btn">
                                      <i class="fa fa-tasks" aria-hidden="true"></i>
                                      <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                      Back To The Account List
                                    </span>
                                    <div class="voice-text">
                                        Creating an account means you agree with Worban's <strong>Terms and Conditions and Privacy Policy</strong>
                                    </div><!--/.voice-text-->
                                </div><!-- /#brand-reg -->
                            </div><!-- /.reg-form-wrapper -->

                        </div><!-- /.sign-up-wrapper -->
                    </div>

                </li>

            </ul>
        </div>
        </div>


    </div>
</header>
<!--Map Section-->
<map class="container-fluid">
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.3185660586114!2d91.83088531500402!3d24.921215284025344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750fff54ec1d345%3A0xdec4aded0892689c!2sShahjalal+University+of+Science+and+Technology!5e0!3m2!1sen!2s!4v1463826129693" frameborder="0" allowfullscreen></iframe>
    </div>
</map>

<section id="main-section" class="main-container">

    <div class="post-section-wrapper">
        <div class="posts-area container">
            <div id="posts" class="row">

                <!-- Single Post Box -->
                <div class="col-xs-3 each-post-box-wpr">
                    <div class="post-here">
                        <a href="#">
                            <div class="post-header">
                                <img src="img/test/1.jpg" alt="#"/>
                                <div class="post-user-info">
                                    <div class="user-img">
                                        <img src="img/author.jpg" alt="#"/>
                                    </div>
                                    <div class="posted-user-name">

                                        <span>Worban User Name<i class="premium-symbol-small"></i></span>
                                    </div><!-- /.posted-user-name -->
                                </div><!-- /.post-user-info -->

                                <div class="act-of-post">
                                    <ul>
                                        <li><a href="#"><img src="img/heart.png" alt="#"/></a></li>
                                        <li><a href="#"><img src="img/added-w.png" alt="#"/></a></li>
                                        <li><a href="#"><img src="img/share-w.png" alt="#"/></a></li>
                                    </ul>
                                </div><!-- /.act-of-post -->
                            </div><!-- /.post-header -->
                        </a>
                        <div class="post-footer">
                            <p class="location-address">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>58 E4th St, New York, NY, united States</span>
                            </p>
                            <h4>Lorem ipsum dolor sit</h4>
                            <div class="post-summary">
                                Lorem ipsum dolor sit amet, et justo mauris ullamcorper feugiat orci suscipit. Nunc etiam neque, donec feugiat tortor, quam ut lacinia euismod, dictum nibh luctus sodales mauris velit ut. Mi ut, leo dapibus, expedita imperdiet, in sit malesuada fermentum maecenas sagittis et, totam adipiscing nisl commodo ut. Dui ultrices arcu. Vehicula bibendum mauris commodo elit dolor et, massa elit nullam. Pulvinar mauris non rhoncus mattis, sodales ridiculus a eros, faucibus ut varius eget tempus sed, a
                            </div><!-- /.post-summary -->

                            <div class="visitor-status">
                                <ul>
                                    <li><img src="img/share-w2.png" alt="#"/><span>207</span></li>
                                    <li><img src="img/added-w2.png" alt="#"/><span>207</span></li>
                                    <li><img src="img/heart2.png" alt="#"/><span>207</span></li>
                                </ul>
                            </div>
                        </div><!-- /.post-footer -->
                    </div><!-- /.post-here -->
                </div><!-- /.each-post-box-wpr -->



                <!-- Single Post Box -->
                <div class="col-xs-3 each-post-box-wpr">
                    <div class="post-here">
                        <a href="#">
                            <div class="post-header">
                                <img src="img/test/2.jpg" alt="#"/>
                                <div class="post-user-info">
                                    <div class="user-img">
                                        <img src="img/author.jpg" alt="#"/>
                                    </div>
                                    <div class="posted-user-name">

                                        <span>Worban User Name</span>
                                    </div><!-- /.posted-user-name -->
                                </div><!-- /.post-user-info -->

                                <div class="act-of-post">
                                    <ul>
                                        <li><a href="#"><img src="img/heart.png" alt="#"/></a></li>
                                        <li><a href="#"><img src="img/added-w.png" alt="#"/></a></li>
                                        <li><a href="#"><img src="img/share-w.png" alt="#"/></a></li>
                                    </ul>
                                </div><!-- /.act-of-post -->
                            </div><!-- /.post-header -->
                        </a>
                        <div class="post-footer">
                            <p class="location-address">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>58 E4th St, New York, NY, united States</span>
                            </p>
                            <h4>Lorem ipsum dolor sit</h4>
                            <div class="post-summary">
                                Lorem ipsum dolor sit amet, et justo mauris ullamcorper feugiat orci suscipit. Nunc etiam neque, donec feugiat tortor, quam ut lacinia euismod, dictum nibh luctus sodales mauris velit ut. Mi ut, leo dapibus, expedita imperdiet, in sit malesuada fermentum maecenas sagittis et, totam adipiscing nisl commodo ut. Dui ultrices arcu. Vehicula bibendum mauris commodo elit dolor et, massa elit nullam. Pulvinar mauris non rhoncus mattis, sodales ridiculus a eros, faucibus ut varius eget tempus sed, a
                            </div><!-- /.post-summary -->

                            <div class="visitor-status">
                                <ul>
                                    <li><img src="img/share-w2.png" alt="#"/><span>207</span></li>
                                    <li><img src="img/added-w2.png" alt="#"/><span>207</span></li>
                                    <li><img src="img/heart2.png" alt="#"/><span>207</span></li>
                                </ul>
                            </div>
                        </div><!-- /.post-footer -->
                    </div><!-- /.post-here -->
                </div><!-- /.each-post-box-wpr -->



                <!-- Single Post Box -->
                <div class="col-xs-3 each-post-box-wpr">
                    <div class="post-here">
                        <a href="#">
                            <div class="post-header">
                                <img src="img/test/5.jpg" alt="#"/>
                                <div class="post-user-info">
                                    <div class="user-img">
                                        <img src="img/author.jpg" alt="#"/>
                                    </div>
                                    <div class="posted-user-name">

                                        <span>Worban User Name</span>
                                    </div><!-- /.posted-user-name -->
                                </div><!-- /.post-user-info -->

                                <div class="act-of-post">
                                    <ul>
                                        <li><a href="#"><img src="img/heart.png" alt="#"/></a></li>
                                        <li><a href="#"><img src="img/added-w.png" alt="#"/></a></li>
                                        <li><a href="#"><img src="img/share-w.png" alt="#"/></a></li>
                                    </ul>
                                </div><!-- /.act-of-post -->
                            </div><!-- /.post-header -->
                        </a>
                        <div class="post-footer">
                            <p class="location-address">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>58 E4th St, New York, NY, united States</span>
                            </p>
                            <h4>Lorem ipsum dolor sit</h4>
                            <div class="post-summary">
                                Lorem ipsum dolor sit amet, et justo mauris ullamcorper feugiat orci suscipit. Nunc etiam neque, donec feugiat tortor, quam ut lacinia euismod, dictum nibh luctus sodales mauris velit ut. Mi ut, leo dapibus, expedita imperdiet, in sit malesuada fermentum maecenas sagittis et, totam adipiscing nisl commodo ut. Dui ultrices arcu. Vehicula bibendum mauris commodo elit dolor et, massa elit nullam. Pulvinar mauris non rhoncus mattis, sodales ridiculus a eros, faucibus ut varius eget tempus sed, a
                            </div><!-- /.post-summary -->

                            <div class="visitor-status">
                                <ul>
                                    <li><img src="img/share-w2.png" alt="#"/><span>207</span></li>
                                    <li><img src="img/added-w2.png" alt="#"/><span>207</span></li>
                                    <li><img src="img/heart2.png" alt="#"/><span>207</span></li>
                                </ul>
                            </div>
                        </div><!-- /.post-footer -->
                    </div><!-- /.post-here -->
                </div><!-- /.each-post-box-wpr -->



                <!-- Single Post Box -->
                <div class="col-xs-3 each-post-box-wpr">
                    <div class="post-here">
                        <a href="#">
                            <div class="post-header">
                                <img src="img/test/6.jpg" alt="#"/>
                                <div class="post-user-info">
                                    <div class="user-img">
                                        <img src="img/author.jpg" alt="#"/>
                                    </div>
                                    <div class="posted-user-name">

                                        <span>Worban User Name</span>
                                    </div><!-- /.posted-user-name -->
                                </div><!-- /.post-user-info -->

                                <div class="act-of-post">
                                    <ul>
                                        <li><a href="#"><img src="img/heart.png" alt="#"/></a></li>
                                        <li><a href="#"><img src="img/added-w.png" alt="#"/></a></li>
                                        <li><a href="#"><img src="img/share-w.png" alt="#"/></a></li>
                                    </ul>
                                </div><!-- /.act-of-post -->
                            </div><!-- /.post-header -->
                        </a>
                        <div class="post-footer">
                            <p class="location-address">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>58 E4th St, New York, NY, united States</span>
                            </p>
                            <h4>Lorem ipsum dolor sit</h4>
                            <div class="post-summary">
                                Lorem ipsum dolor sit amet, et justo mauris ullamcorper feugiat orci suscipit. Nunc etiam neque, donec feugiat tortor, quam ut lacinia euismod, dictum nibh luctus sodales mauris velit ut. Mi ut, leo dapibus, expedita imperdiet, in sit malesuada fermentum maecenas sagittis et, totam adipiscing nisl commodo ut. Dui ultrices arcu. Vehicula bibendum mauris commodo elit dolor et, massa elit nullam. Pulvinar mauris non rhoncus mattis, sodales ridiculus a eros, faucibus ut varius eget tempus sed, a
                            </div><!-- /.post-summary -->

                            <div class="visitor-status">
                                <ul>
                                    <li><img src="img/share-w2.png" alt="#"/><span>207</span></li>
                                    <li><img src="img/added-w2.png" alt="#"/><span>207</span></li>
                                    <li><img src="img/heart2.png" alt="#"/><span>207</span></li>
                                </ul>
                            </div>
                        </div><!-- /.post-footer -->
                    </div><!-- /.post-here -->
                </div><!-- /.each-post-box-wpr -->


                <!-- Single Post Box -->
                <div class="col-xs-3 each-post-box-wpr">
                    <div class="post-here">
                        <a href="#">
                            <div class="post-header">
                                <img src="img/test/4.jpg" alt="#"/>
                                <div class="post-user-info">
                                    <div class="user-img">
                                        <img src="img/author.jpg" alt="#"/>
                                    </div>
                                    <div class="posted-user-name">

                                        <span>Worban User Name</span>
                                    </div><!-- /.posted-user-name -->
                                </div><!-- /.post-user-info -->

                                <div class="act-of-post">
                                    <ul>
                                        <li><a href="#"><img src="img/heart.png" alt="#"/></a></li>
                                        <li><a href="#"><img src="img/added-w.png" alt="#"/></a></li>
                                        <li><a href="#"><img src="img/share-w.png" alt="#"/></a></li>
                                    </ul>
                                </div><!-- /.act-of-post -->
                            </div><!-- /.post-header -->
                        </a>
                        <div class="post-footer">
                            <p class="location-address">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>58 E4th St, New York, NY, united States</span>
                            </p>
                            <h4>Lorem ipsum dolor sit</h4>
                            <div class="post-summary">
                                Lorem ipsum dolor sit amet, et justo mauris ullamcorper feugiat orci suscipit. Nunc etiam neque, donec feugiat tortor, quam ut lacinia euismod, dictum nibh luctus sodales mauris velit ut. Mi ut, leo dapibus, expedita imperdiet, in sit malesuada fermentum maecenas sagittis et, totam adipiscing nisl commodo ut. Dui ultrices arcu. Vehicula bibendum mauris commodo elit dolor et, massa elit nullam. Pulvinar mauris non rhoncus mattis, sodales ridiculus a eros, faucibus ut varius eget tempus sed, a
                            </div><!-- /.post-summary -->

                            <div class="visitor-status">
                                <ul>
                                    <li><img src="img/share-w2.png" alt="#"/><span>207</span></li>
                                    <li><img src="img/added-w2.png" alt="#"/><span>207</span></li>
                                    <li><img src="img/heart2.png" alt="#"/><span>207</span></li>
                                </ul>
                            </div>
                        </div><!-- /.post-footer -->
                    </div><!-- /.post-here -->
                </div><!-- /.each-post-box-wpr -->


                <!-- Single Post Box -->
                <div class="col-xs-3 each-post-box-wpr">
                    <div class="post-here">
                        <a href="#">
                            <div class="post-header">
                                <img src="img/test/8.jpg" alt="#"/>
                                <div class="post-user-info">
                                    <div class="user-img">
                                        <img src="img/author.jpg" alt="#"/>
                                    </div>
                                    <div class="posted-user-name">
                                        <span>Worban User Name</span>
                                    </div><!-- /.posted-user-name -->
                                </div><!-- /.post-user-info -->

                                <div class="act-of-post">
                                    <ul>
                                        <li><a href="#"><img src="img/heart.png" alt="#"/></a></li>
                                        <li><a href="#"><img src="img/added-w.png" alt="#"/></a></li>
                                        <li><a href="#"><img src="img/share-w.png" alt="#"/></a></li>
                                    </ul>
                                </div><!-- /.act-of-post -->
                            </div><!-- /.post-header -->
                        </a>
                        <div class="post-footer">
                            <p class="location-address">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>58 E4th St, New York, NY, united States</span>
                            </p>
                            <h4>Lorem ipsum dolor sit</h4>
                            <div class="post-summary">
                                Lorem ipsum dolor sit amet, et justo mauris ullamcorper feugiat orci suscipit. Nunc etiam neque, donec feugiat tortor, quam ut lacinia euismod, dictum nibh luctus sodales mauris velit ut. Mi ut, leo dapibus, expedita imperdiet, in sit malesuada fermentum maecenas sagittis et, totam adipiscing nisl commodo ut. Dui ultrices arcu. Vehicula bibendum mauris commodo elit dolor et, massa elit nullam. Pulvinar mauris non rhoncus mattis, sodales ridiculus a eros, faucibus ut varius eget tempus sed, a
                            </div><!-- /.post-summary -->

                            <div class="visitor-status">
                                <ul>
                                    <li><img src="img/share-w2.png" alt="#"/><span>207</span></li>
                                    <li><img src="img/added-w2.png" alt="#"/><span>207</span></li>
                                    <li><img src="img/heart2.png" alt="#"/><span>207</span></li>
                                </ul>
                            </div>
                        </div><!-- /.post-footer -->
                    </div><!-- /.post-here -->
                </div><!-- /.each-post-box-wpr -->

            </div><!-- /.posts-area -->
        </div><!-- /.post-section-wrapper -->

</section><!--/#main-section-->


<footer id="footer-section">
    <div class="container footer-wrapper">
        <div class="row">
            <div class="footer-content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Standard dummy text ever since the 1500s.</p>
                <p class="copy-right">Copyright &#9400; 2016 Worban. All right reserved</p>
                <span>
                    <img src="img/logo_small.png" alt="#"/>
                </span>
            </div>
        </div>
    </div>
</footer>

<?php include_once("footer.php")?>
