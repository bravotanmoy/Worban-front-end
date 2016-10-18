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
              <ul>
                  <li><a href="#">
                        <div class="user-mini-photo">
                            <img src="img/author.jpg" alt=""/>
                        </div>
                          <span class="note-user-name">User Name</span>
                      </a>
                  </li>
                  <li>
                      <ul class="worban-control">
                          <li>
                            <i class="fa fa-bell" aria-hidden="true"></i>
                            <small class="notification-no">7</small>
                          </li>
                          <li>
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <i class="settings-arrow fa fa-sort-desc" aria-hidden="true"></i>
                          </li>

                      </ul>

                  </li>

              </ul>
          </div>
          </div>


      </div>
  </header>


<section id="public-view-wrapper">
 <div class="public-view-wrapper">
    <div class="user-view-board" style="background-image:url('img/london_night.jpg')">

        <div class="container post-btn-img">
            <div class="user-photo-thumbnail">
              <img src="img/author.jpg" alt="#"/>
            </div><!-- /.user-photo-thumbnail -->
        </div>
    </div><!-- /.user-view-board -->

    <!-- Two types Post -->
    <div class="import-link-post modal fade" role="dialog" id="import-link-post">
         <div class="modal-dialog post-box" role="document">
                <div class="log-logo-lable for-post-box">&nbsp;</div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <section id="step-one">
                  <h2 class="post-title">Import Link</h2>
                   <form id="import-link-form" name="import-link-post" method="post">
                     <label for="post-ink">Copy & Paste Link Below input field</label>
                     <input type="text" placeholder="Link" name="post-ink" id="post-ink"/>
                     <p class="please-link"></p>
                     <div class="import-link-btn">
                       Import
                     </div><!--/.Import Link BTN-->
                   </form>
               </section><!--/.step-one-->
               <section id="step-two">
                  <h2 class="post-title">Customize Text And the Photo/Video form the link</h2>
                  <!--When Import a link website will open on ifream-->
                  <div class="wesite-ifream">
                    <iframe src=""></iframe>
                  </div><!--/.wesite-ifream-->

                    <div style="cursor:pointer;float:right;padding:3px 5px;background-color:#000;color:#fff;font-size12px">
                        Change
                    </div>

                    <div class="change-btn-wrapper">
                       <div class="post-step-btn">
                          Next Step
                       </div>
                       <div class="post-step-btn back-btn">
                          Back Step
                       </div>
                   </div><!--/.<div class="change-btn-wrapper">-->
               </section><!--/.step-two-->
               <section id="step-three">
                 <h2 class="post-title">Post Settings</h2>
                 <div class="more-content">
                      <table class="input-boxes">
                        <tr>
                            <td>
                               <label for="select-post-types">Select type of content:</label>
                            </td>
                            <td>
                              <ul class="select-post-types" name="" id="select-post-types">
                                  <li>
                                    <input type="checkbox" name="select-post-type" value="News" id="News"/>
                                    <label for="News">News<i class="fa fa-check" aria-hidden="true"></i></label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="select-post-type" value="History" id="History"/>
                                    <label for="History">History<i class="fa fa-check" aria-hidden="true"></i></label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="select-post-type" value="Travel" id="Travel"/>
                                    <label for="Travel">Travel<i class="fa fa-check" aria-hidden="true"></i></label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="select-post-type" value="Art" id="Art"/>
                                    <label for="Art">Art<i class="fa fa-check" aria-hidden="true"></i></label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="select-post-type" value="Event" id="Event"/>
                                    <label for="Event">Event<i class="fa fa-check" aria-hidden="true"></i></label>
                                  </li>

                              </ul><!-- /.select-post-types -->
                            </td>
                        </tr>

                          <tr>
                              <td>
                                <label for="pic-vid-types">Picture/Video World related?</label>
                              </td>
                              <td>
                                <select name="pic-vid-types" class="pic-vid-types">
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                              </td>
                          </tr>
                          <tr class="google-view-ct">
                              <td>
                                  <label for="search-location">Use Google View:</label>
                              </td>
                              <td>
                                  <input type="text" name="Search location" id="search-location" placeholder="Search Location"/>
                              </td>
                          </tr>
                          <tr class="google-view-map">
                              <td>
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.3185660586114!2d91.83088531500402!3d24.921215284025344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750fff54ec1d345%3A0xdec4aded0892689c!2sShahjalal+University+of+Science+and+Technology!5e0!3m2!1sen!2s!4v1463826129693" frameborder="0" allowfullscreen></iframe>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                <label for="pic-vid-types">Date :</label>
                              </td>
                              <td>
                                <input class="" id="datepicker" type="text" name="date" placeholder="Date">
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <label for="search-location">Locate content:</label>
                              </td>
                              <td>
                                  <input type="text" name="Search location" id="search-location" placeholder="Search Location"/>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <label for="">Add Tags</label>
                              </td>
                              <td>
                                  <div class="tag-wrapper">
                                       <div class="tag-view">
                                           <ul class="tag-list">
                                                <li>Life<i class="fa fa-times" aria-hidden="true"></i></li>
                                                <li>Place<i class="fa fa-times" aria-hidden="true"></i></li>
                                           </ul><!--/ul.tag-list-->
                                        </div>
                                        <div class="tag-input">
                                            <input type="text" placeholder="Tags" name="tag-import-post" id="tag-import-post"/>
                                        </div>
                                  </div><!--/.tag-wrapper-->
                              </td>
                          </tr>
                      </table><!--/.input-boxes-->

                 </div><!--/.more-content-->

                   <div class="post-c-footer">
                        <input type="submit" value="Post" form="import-link-form"/>
                   </div><!--/.post-c-footer-->

                    <div class="change-btn-wrapper">
                       <div class="post-step-btn back-btn">
                          Back Step
                       </div>
                   </div><!--/.change-btn-wrapper-->
              </section><!--/.step-three-->
         </div><!--/.post-box-->


    </div><!--/.import-link-post-->

    <div class="content-post modal fade" role="dialog" id="content-post">
         <div class="modal-dialog post-box new-post" id="new-post" role="document">

              <div class="log-logo-lable for-post-box">&nbsp;</div>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

              <form class="new-post-form" id="#" method="post" action="#">
                  <p>
                      <input type="text" placeholder="Title of the Content" name="content-title" value=""/>
                  </p>
                  <p>
                      <input type="text" placeholder="Short Description Of Post" name="content-title" value=""/>
                  </p>
                  <p>
                      <textarea name="new-post-content" placeholder="Tell the World about this place.">

                      </textarea>
                  </p>
              </form>

              <div class="more-content">
                   <table class="input-boxes">
                     <tr class="file">
                         <td>
                             <label for="">Upload Picture / Video:</label>
                         </td>
                         <td>
                             <label for="picture">Upload Picture</label><input id="picture" type="file" name="post-picture" value="News" id="News"/>
                             <label for="video">Upload Video</label><input id="video" type="file" name="post-video" value="News" id="News"/>
                         </td>
                     </tr>
                     <tr>
                         <td>
                            <label for="select-post-types">Select type of content:</label>
                         </td>
                         <td>
                           <ul class="select-post-types" name="" id="select-post-types">
                               <li>
                                 <input type="checkbox" name="select-post-type" value="News" id="n-News"/>
                                 <label for="n-News">News<i class="fa fa-check" aria-hidden="true"></i></label>
                               </li>
                               <li>
                                 <input type="checkbox" name="select-post-type" value="History" id="n-History"/>
                                 <label for="n-History">History<i class="fa fa-check" aria-hidden="true"></i></label>
                               </li>
                               <li>
                                 <input type="checkbox" name="select-post-type" value="Travel" id="n-Travel"/>
                                 <label for="n-Travel">Travel<i class="fa fa-check" aria-hidden="true"></i></label>
                               </li>
                               <li>
                                 <input type="checkbox" name="select-post-type" value="Event" id="n-Event"/>
                                 <label for="n-Event">Event<i class="fa fa-check" aria-hidden="true"></i></label>
                               </li>
                           </ul><!-- /.select-post-types -->
                         </td>
                     </tr>

                       <tr>
                           <td>
                             <label for="pic-vid-types">Picture/Video World related?</label>
                           </td>
                           <td>
                             <select name="pic-vid-types" class="pic-vid-types">
                               <option value="Yes">Yes</option>
                               <option value="No">No</option>
                             </select>
                           </td>
                       </tr>
                       <tr class="google-view-ct">
                           <td>
                               <label for="search-location">Use Google View:</label>
                           </td>
                           <td>
                               <input type="text" name="Search location" id="search-location" placeholder="Search Location"/>
                           </td>
                       </tr>
                       <tr class="google-view-map">
                           <td>
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.3185660586114!2d91.83088531500402!3d24.921215284025344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750fff54ec1d345%3A0xdec4aded0892689c!2sShahjalal+University+of+Science+and+Technology!5e0!3m2!1sen!2s!4v1463826129693" frameborder="0" allowfullscreen></iframe>
                           </td>
                       </tr>
                       <tr>
                           <td>
                             <label for="pic-vid-types">Date :</label>
                           </td>
                           <td>
                             <input class="" id="datepicker2" type="text" name="date" placeholder="Date">
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="search-location">Locate content:</label>
                           </td>
                           <td>
                               <input type="text" name="Search location" id="search-location" placeholder="Search Location"/>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label for="">Add Tags</label>
                           </td>
                           <td>
                               <div class="tag-wrapper">
                                    <div class="tag-view">
                                        <ul class="tag-list">
                                             <li>Live<i class="fa fa-times" aria-hidden="true"></i></li>
                                             <li>Place<i class="fa fa-times" aria-hidden="true"></i></li>
                                        </ul><!--/ul.tag-list-->
                                     </div>
                                     <div class="tag-input">
                                         <input type="text" placeholder="Tags" name="tag-import-post" id="tag-import-post"/>
                                     </div>
                               </div><!--/.tag-wrapper-->
                           </td>
                       </tr>
                   </table><!--/.input-boxes-->
                   <div class="post-c-footer">
                        <input type="submit" value="Post" form="import-link-form"/>
                   </div><!--/.post-c-footer-->
              </div><!--/.more-content-->
         </div><!--/.new-post-->

    </div><!--/.content-post-->

    <div class="user-board-contents-wrapper">
        <div class="user-board-contents">
            <h1 class="for-fancy-user-name">
              <img src="img/author.jpg" alt="#"/>
              <span>Worban User</span>
            </h1><!--Header Name For When you scroll-->
            <p class="profile-user-name">Worban User </p><!--Header Name For universal view-->
            <ul class="control-menu-btn">
              <li style="background-image:url('img/like-background.png')">780</li>
              <li class="followers">
                <i class="fa fa-child" aria-hidden="true"></i>
                Followers
              </li>
              <li class="following">
                <i class="fa fa-check" aria-hidden="true"></i>
                Following
              </li>
              <li style="background-image:url('img/like-border-2nd.png')">980</li>
            </ul>
            <div class="post-btn">
              <span class="create-post-btn">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <small>Create Post</small>
              </span>
              <div class="post-type-wrapper">
                  <ul>
                      <li data-toggle="modal" data-target="#import-link-post">Import Link</li>
                      <li data-toggle="modal" data-target="#content-post">Create New Post</li>
                  </ul>
              </div><!--/.post-type-wrapper-->
            </div><!-- /.post-btn -->
        </div><!-- /.user-board-contents -->
    </div><!-- /.user-board-contents-wrapper -->
  </div><!-- /.public-view-wrapper -->
</section><!-- /#public-view-wrapper -->

<!--- User Given Post-->
<section id="post-section">
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
</section><!-- /#post-section -->


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
