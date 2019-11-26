<?php require_once 'includes/header.php'; 
// $this->session->userdata('item');
if (!$this->session->userdata('id')) {
    redirect('posts/showPosts');
//     echo "your are loged in!"
//     ?>
<!-- //     <a href="http://localhost/new_ahsas/users/logout">Logout</a> -->
     <?php
// } else {?>
<!-- //     <a href="http://localhost/new_ahsas/users/login">login</a>--><?php
}

?>

     
         <div class="inner-information-text">
            <div class="container">
               <h3>Create Post</h3>
               <!-- <ul class="breadcrumb"> -->
               <!-- <li> -->
            <div class="cart-option">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?=base_url()?>posts/newPostView"><i ></i>New Post</a>
                    </li>
                    <li class="active"> 
                        <a href="<?=base_url()?>posts/showPosts" > Back</a> 
                    </li> 
                </ul>
            </div>
        <!-- </li> -->
                  <!-- <li><a href="index.html">Home</a></li>
                  <li class="active">Info</li> -->
               <!-- </ul> -->
            </div>
         </div>
      </section>
      <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               <div class="col-md-9">
                  
                  <?php if(!isset($posts)){?>
                      <p>There is no post in the blog yet.</p>
                  <?php }else{?>
                  <?php foreach ($posts as $post) {?>
                      <div class="feature-post small-blog">
                     <div class="col-md-5">
                        <div class="feature-img">
                           <img src="<?=base_url()?>uplodeImage/<?=$post['image'] ?>" class="img-responsive" alt="post image" />
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="feature-cont">
                           
                           <div class="post-heading">
                              <h3><?php echo $post['title']?></h3>
                              <p><?php echo substr(strip_tags($post['body']),0,200)."..."?></p>
                            <div class="post-info">
                           <!-- <img src="" alt="poster person" /> -->
                                <span>
                                        <h4>Post Date</h4>
                                        <h5><?=$post['postDate'];?></h5>
                                    </span>
                            </div>
                              <div class="full">
                                 <a class="btn" href="<?=base_url()?>posts/showPost/<?=$post['id']?>">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php }}?>
                  <ul class="pagination pagination-lg">
                    <li><a href=""><?php echo $pages;?></a></li>
                  </ul>
                  
                             
                           
                  <!-- <div class="feature-post small-blog">
                     <div class="col-md-5">
                        <div class="feature-img">
                           <img src="<?=base_url()?>images/post2.png" class="img-responsive" alt="#" />
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="feature-cont">
                           <div class="post-info">
                              <img src="<?=base_url()?>images/profile-img.png" alt="#" />
                              <span>
                                 <h4>by George Kvasnikov</h4>
                                 <h5>on Jun 27, 2014</h5>
                              </span>
                           </div>
                           <div class="post-heading">
                              <h3>We denounce with righteous indignation and dislike men who are so beguiled</h3>
                              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
							   et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est 
							   laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                              <div class="full">
                                 <a class="btn" href="#">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="feature-post small-blog">
                     <div class="col-md-5">
                        <div class="feature-img">
                           <img src="<?=base_url()?>images/post2.png" class="img-responsive" alt="#" />
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="feature-cont">
                           <div class="post-info">
                              <img src="<?=base_url()?>images/profile-img.png" alt="#" />
                              <span>
                                 <h4>by George Kvasnikov</h4>
                                 <h5>on Jun 27, 2014</h5>
                              </span>
                           </div>
                           <div class="post-heading">
                              <h3>Sydney derby takes centre stage while Tim Cahill says no to A-League</h3>
                              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
							   et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est 
							   laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                              <div class="full">
                                 <a class="btn" href="#">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> -->
               </div>
               <!-- <div class="col-md-3">
                  <div class="blog-sidebar">
                     <div class="search-bar-blog">
                        <form>
                           <input type="text" placeholder="search" />
                           <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                     </div>
                  </div>
                  <div class="blog-sidebar">
                     <h4 class="heading">Top Categories</h4>
                     <div class="category-menu">
                        <ul>
                           <li><a href="#">Cricket</a></li>
                           <li><a href="#">Football</a></li>
                           <li><a href="#">Hockey</a></li>
                           <li><a href="#">Tennis</a></li>
                           <li><a href="#">Basketball</a></li>
                           <li><a href="#">Golf</a></li>
                           <li><a href="#">Cycling</a></li>
                           <li><a href="#">Motorsports</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="blog-sidebar">
                     <h4 class="heading">Popular News</h4>
                     <div class="category-menu">
                        <ul>
                           <li>
                              <span><img src="<?=base_url()?>images/profile-img2.png" alt="#"></span>
                              <span>
                                 <p>Two touch penalties, imaginary cards</p>
                                 <p class="date">22 Feb, 2016</p>
                              </span>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <div class="team-btw-match">
                           <ul>
                              <li>
                                 <img src="<?=base_url()?>images/img-01_002.png" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="<?=base_url()?>images/img-02.png" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="<?=base_url()?>images/img-03_002.png" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="<?=base_url()?>images/img-04_003.png" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="<?=base_url()?>images/img-05_002.png" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="<?=base_url()?>images/img-06.png" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                           <ul>
                              <li>
                                 <img src="<?=base_url()?>images/img-07_002.png" alt="">
                                 <span>Portugal</span>
                              </li>
                              <li class="vs"><span>vs</span></li>
                              <li>
                                 <img src="<?=base_url()?>images/img-08.png" alt="">
                                 <span>Germany</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </aside>
                  <aside id="sidebar" class="left-bar">
                     <div class="banner-sidebar">
                        <img class="img-responsive" src="<?=base_url()?>images/match-banner1.jpg" alt="#">
                        <h3>Argentina vs Chile|Goals of the match | COPA </h3>
                     </div>
                  </aside>
                  <aside id="sidebar" class="right-bar">
                     <div class="banner">
                        <img class="img-responsive" src="<?=base_url()?>images/adds-3.jpg" alt="#">
                     </div>
                  </aside>
                  <aside id="sidebar" class="left-bar">
                     <div class="feature-matchs">
                        <table class="table table-bordered table-hover">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Team</th>
                                 <th>P</th>
                                 <th>W</th>
                                 <th>L</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>1</td>
                                 <td><img src="<?=base_url()?>images/img-01_004.png" alt="">Liverpool</td>
                                 <td>10</td>
                                 <td>12</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td><img src="<?=base_url()?>images/img-02_002.png" alt="">Chelsea</td>
                                 <td>10</td>
                                 <td>12</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td><img src="<?=base_url()?>images/img-03_003.png" alt="">Norwich City</td>
                                 <td>20</td>
                                 <td>15</td>
                                 <td>20</td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td><img src="<?=base_url()?>images/img-04_002.png" alt="">West Brom</td>
                                 <td>60</td>
                                 <td>10</td>
                                 <td>60</td>
                              </tr>
                              <tr>
                                 <td>5</td>
                                 <td><img src="<?=base_url()?>images/img-05.png" alt="">sunderland</td>
                                 <td>30</td>
                                 <td>06</td>
                                 <td>30</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </aside>
               </div> -->
            </div>
         </div>
      </section>
     <?php require_once 'includes/footer.php'; ?>