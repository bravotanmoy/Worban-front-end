<?php include_once("header.php")?>

<!-- Post Box HTML is heres -->
  <div class="post-view-page-wrapper container">
  <div class="row">
      <div class="col-xs-3 post-view-right-box">
          <div class="map-location-address">
              <span>Location Address</span>
          </div>
          <div class="post-view-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.3185660586114!2d91.83088531500402!3d24.921215284025344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750fff54ec1d345%3A0xdec4aded0892689c!2sShahjalal+University+of+Science+and+Technology!5e0!3m2!1sen!2s!4v1463826129693" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="post-view-google-street-view" id="post-street-view">
              <!--<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2s!4v1467639623844!6m8!1m7!1sF%3A&#45;&#45;Sxj4ed8s2k%2FUzE8DyD-dMI%2FAAAAAAAAdEs%2F7ZMQJtgyt5UpN1kD4WZ9itN2FJxDbt-kQ!2m2!1d23.7279678!2d90.4019019!3f330.28595180890176!4f-11.083113768300734!5f0.7820865974627469" frameborder="0" style="border:0" allowfullscreen></iframe>-->
          </div><!--/.post-view-google-sreet-view-->
      </div>
      <div class="col-xs-9 post-view-wrapper">
          <div class="row">
             <div class="post-white-section">
                <div class="post-view-header">
                    <ul class="post-staus-wpper">
                        <li class="post-like"><!--Post Like Button -->
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <span class="like">Like</span>
                            <span class="un-like">Unlike</span>
                        </li>
                        <li class="post-like-count">3452</li>
                        <li class="post-my-worban-like">
                            <a href="#">
                                <span class="_post-my-worban-like_image"><img src="img/added-w.png" alt="#"/> </span>
                                <span class="_post-my-worban-like_label">My Worban</span>
                            </a>
                        </li>
                        <li class="post-my-worban-like-count">
                            345
                        </li>
                        <li class="post-visit-site-button">
                            <a href="#">
                                <i class="fa fa-globe _post-visit-site-button_image" aria-hidden="true"></i>
                                <span class="_post-my-worban-like_label">Visit Site</span>
                            </a>
                        </li><!--From Here-->
                        <li class="post-share">
                            <a href="#">
                                <span class="_post-share_image"><img src="img/share-w.png" alt="#"/></span>
                                <span class="_post-share-label">My Worban</span>
                            </a>
                        </li>
                        <li class="post-share-count">785</li>
                    </ul>
                    <!-- Post View Top Area Right Section -->
                    <!--<ul class="post-view-top-right">
                        <li class="post-share">
                            <a href="#">
                                <span class="_post-share_image"><img src="img/share-w.png" alt="#"/></span>
                                <span class="_post-share-label">My Worban</span>
                            </a>
                        </li>
                        <li class="post-share-count">785</li>
                    </ul>-->

                </div><!--/.post-view-header-->
                <!-- Post View Main Section -->
                <div class="container-fluid post-view-section">
                <div class="row">
                    <div class="col-xs-6 _post_title_header">
                        <div class="row">
                            <h4 class="_post-title">Title Of The Box Will Be Here</h4>
                            <ul class="post-history">
                                <li>History</li>
                                <li>Posted: <span>29/07/2016</span></li>
                                <li>Happened: <span>29/07/2016</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 _post_title_header">
                        <div class="row">
                            <a href="#">
                                <div class="pull-right post-report">
                                    <i class="fa fa-flag" aria-hidden="true"></i>
                                    <span>Report</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--/.row-->

                <div class="row">
                    <div class="col-xs-12 post-thumbnail-img" style="background-image: url('img/city-of-London.jpg')">
                    </div>
                </div><!--/.row-->

                <!--Post View Text Content Section-->
                <div class="row">
                    <div class="post-view-text-section">
                        <div class="user-in-post-view">
                            <ul>
                                <li><img src="img/author.jpg" alt="#"/></li>
                                <li>Worban User</li>
                                <li class="follow-btn">
                                    <i class="fa fa-child" aria-hidden="true"></i>
                                    <span class="follow">Follow</span>
                                    <span class="following">Following</span>
                                </li>
                            </ul>
                        </div><!--/.user-in-post-view-->

                        <div class="action-btn">
                            Button to Action
                        </div>

                        <div class="post-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div><!--/.post-text-->
                    </div><!--/.post-view-text-section-->
                </div>
                <!--Style Code for Post Comments Sections-->
                <div class="row">
                    <div class="post-comment-wrapper">

                        <div class="give-a-post">
                            <h5><label for="comments">Comments:</label> <span>490</span></h5>
                            <div class="user-pic-in-comment">
                                <img src="img/author.jpg" alt="#"/>
                            </div>
                            <div class="create-post-area">
                                <textarea id="comments" class="preate post" name="post" form="" placeholder="Post your Comment"></textarea>
                                <input type="submit" value="Post" name="#" id="post-submit">
                            </div><!--/.create-post-area-->
                        </div><!--/.give-a-post-->
                        <!-- Each Post Comment For Single Loop -->
                        <ul class="post-replay">
                            <li>
                                <div class="user-pic-in-comment">
                                    <img src="img/author.jpg" alt="#"/>
                                </div>
                                <div class="comment-replay-text">
                                    <div class="post-comment-title">
                                        <h3>Worban User Name</h3>
                                        <ul>
                                            <li>Apr 29, 2016</li>
                                            <li><i class="fa fa-heart-o" aria-hidden="true"></i></li>
                                            <li>
                                                <span class="comment-like">Like</span>
                                                <span class="comment-unlike">Unlike</span>
                                            </li>
                                            <li class="comment-count">764</li>
                                            <li class="comment-replay">Replay</li>
                                        </ul>
                                    </div><!--/.comment-replay-text-->
                                    <div class="clear-fix"></div>
                                    <div class="text-of-post-comment">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                                    </div><!--/.text-of-post-comment-->
                                </div><!--/.comment-replay-text-->
                            </li>
                            <li>
                                <div class="user-pic-in-comment">
                                    <img src="img/author.jpg" alt="#"/>
                                </div>
                                <div class="comment-replay-text">
                                    <div class="post-comment-title">
                                        <h3>Worban User Name</h3>
                                        <ul>
                                            <li>Apr 29, 2016</li>
                                            <li><i class="fa fa-heart-o" aria-hidden="true"></i></li>
                                            <li>
                                                <span class="comment-like">Like</span>
                                                <span class="comment-unlike">Unlike</span>
                                            </li>
                                            <li class="comment-count">764</li>
                                            <li class="comment-replay">Replay</li>
                                        </ul>
                                    </div><!--/.comment-replay-text-->
                                    <div class="clear-fix"></div>
                                    <div class="text-of-post-comment">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                                    </div><!--/.text-of-post-comment-->
                                </div><!--/.comment-replay-text-->
                            </li>
                            <li>
                                <div class="user-pic-in-comment">
                                    <img src="img/author.jpg" alt="#"/>
                                </div>
                                <div class="comment-replay-text">
                                    <div class="post-comment-title">
                                        <h3>Worban User Name</h3>
                                        <ul>
                                            <li>Apr 29, 2016</li>
                                            <li><i class="fa fa-heart-o" aria-hidden="true"></i></li>
                                            <li>
                                                <span class="comment-like">Like</span>
                                                <span class="comment-unlike">Unlike</span>
                                            </li>
                                            <li class="comment-count">764</li>
                                            <li class="comment-replay">Replay</li>
                                        </ul>
                                    </div><!--/.comment-replay-text-->
                                    <div class="clear-fix"></div>
                                    <div class="text-of-post-comment">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                                    </div><!--/.text-of-post-comment-->
                                </div><!--/.comment-replay-text-->
                            </li>
                        </ul>
                        <!-- Each Post Comment For Single Loop -->
                        <ul class="post-replay">
                            <li>
                                <div class="user-pic-in-comment">
                                    <img src="img/author.jpg" alt="#"/>
                                </div>
                                <div class="comment-replay-text">
                                    <div class="post-comment-title">
                                        <h3>Worban User Name</h3>
                                        <ul>
                                            <li>Apr 29, 2016</li>
                                            <li><i class="fa fa-heart-o" aria-hidden="true"></i></li>
                                            <li>
                                                <span class="comment-like">Like</span>
                                                <span class="comment-unlike">Unlike</span>
                                            </li>
                                            <li class="comment-count">764</li>
                                            <li class="comment-replay">Replay</li>
                                        </ul>
                                    </div><!--/.comment-replay-text-->
                                    <div class="clear-fix"></div>
                                    <div class="text-of-post-comment">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                                    </div><!--/.text-of-post-comment-->
                                </div><!--/.comment-replay-text-->
                            </li>
                            <li>
                                <div class="user-pic-in-comment">
                                    <img src="img/author.jpg" alt="#"/>
                                </div>
                                <div class="comment-replay-text">
                                    <div class="post-comment-title">
                                        <h3>Worban User Name</h3>
                                        <ul>
                                            <li>Apr 29, 2016</li>
                                            <li><i class="fa fa-heart-o" aria-hidden="true"></i></li>
                                            <li>
                                                <span class="comment-like">Like</span>
                                                <span class="comment-unlike">Unlike</span>
                                            </li>
                                            <li class="comment-count">764</li>
                                            <li class="comment-replay">Replay</li>
                                        </ul>
                                    </div><!--/.comment-replay-text-->
                                    <div class="clear-fix"></div>
                                    <div class="text-of-post-comment">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                                    </div><!--/.text-of-post-comment-->
                                </div><!--/.comment-replay-text-->
                            </li>
                        </ul>
                    </div><!--/.post-comment-wrapper-->
                </div>
            </div><!--.post-view-section-->
             </div><!--/.post-white-section-->
              <div class="post-view-social-wrapper">
                  <ul class="post-box-social-favicon">
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                  </ul>
              </div><!--/.post-view-social-wrapper-->
          </div><!--/.row-->
      </div><!--/#post-view-wrapper-->


  </div>
  </div>

<?php include_once("footer.php")?>
