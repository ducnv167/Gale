@extends('master')
@section('content')

{{--<section class="hero-wrap hero-wrap-2" style="background-image: url('https://picsum.photos/id/799/1200/600');" data-stellar-background-ratio="0.5">--}}
{{--    <div class="overlay"></div>--}}
{{--    <div class="container">--}}
{{--        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">--}}
{{--            <div class="col-md-9 ftco-animate pb-0 text-center">--}}
{{--                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="blog.html">House<i class="fa fa-chevron-right"></i></a></span> <span>Details <i class="fa fa-chevron-right"></i></span></p>--}}
{{--                <h1 class="mb-3 bread">House Galaxy</h1>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://dracul.ro/wp-content/uploads/2015/08/Centru-Ecvestru-Dracula-Dane%C5%9F-1200x300.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="data:image/jpeg;base64,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" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ3n_ZIHYuf3nqOHXOviX299-0d3maToQ_swQ&usqp=CAU" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ftco-animate">
                <p>
                    <img src="images/image_7.jpg" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3">It is a long established fact a reader be distracted</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
                <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
                <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
                <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
                <p>
                    <img src="images/image_8.jpg" alt="" class="img-fluid">
                </p>
                <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
                <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
                <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
                <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">house</a>
                        <a href="#" class="tag-cloud-link">home</a>
                        <a href="#" class="tag-cloud-link">building</a>
                        <a href="#" class="tag-cloud-link">Travel</a>
                    </div>
                </div>

                <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
                        <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc">
                        <h3>George Washington</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>


                <!--            <div class="pt-5 mt-5">-->
                <!--              <h3 class="mb-5">6 Comments</h3>-->
                <!--              <ul class="comment-list">-->
                <!--                <li class="comment">-->
                <!--                  <div class="vcard bio">-->
                <!--                    <img src="images/person_1.jpg" alt="Image placeholder">-->
                <!--                  </div>-->
                <!--                  <div class="comment-body">-->
                <!--                    <h3>John Doe</h3>-->
                <!--                    <div class="meta">June 01, 2020 at 2:21pm</div>-->
                <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>-->
                <!--                    <p><a href="#" class="reply">Reply</a></p>-->
                <!--                  </div>-->
                <!--                </li>-->

                <!--                <li class="comment">-->
                <!--                  <div class="vcard bio">-->
                <!--                    <img src="images/person_1.jpg" alt="Image placeholder">-->
                <!--                  </div>-->
                <!--                  <div class="comment-body">-->
                <!--                    <h3>John Doe</h3>-->
                <!--                    <div class="meta">June 01, 2020 at 2:21pm</div>-->
                <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>-->
                <!--                    <p><a href="#" class="reply">Reply</a></p>-->
                <!--                  </div>-->

                <!--                  <ul class="children">-->
                <!--                    <li class="comment">-->
                <!--                      <div class="vcard bio">-->
                <!--                        <img src="images/person_1.jpg" alt="Image placeholder">-->
                <!--                      </div>-->
                <!--                      <div class="comment-body">-->
                <!--                        <h3>John Doe</h3>-->
                <!--                        <div class="meta">June 01, 2020 at 2:21pm</div>-->
                <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>-->
                <!--                        <p><a href="#" class="reply">Reply</a></p>-->
                <!--                      </div>-->


                <!--                      <ul class="children">-->
                <!--                        <li class="comment">-->
                <!--                          <div class="vcard bio">-->
                <!--                            <img src="images/person_1.jpg" alt="Image placeholder">-->
                <!--                          </div>-->
                <!--                          <div class="comment-body">-->
                <!--                            <h3>John Doe</h3>-->
                <!--                            <div class="meta">June 01, 2020 at 2:21pm</div>-->
                <!--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>-->
                <!--                            <p><a href="#" class="reply">Reply</a></p>-->
                <!--                          </div>-->

                <!--                            <ul class="children">-->
                <!--                              <li class="comment">-->
                <!--                                <div class="vcard bio">-->
                <!--                                  <img src="images/person_1.jpg" alt="Image placeholder">-->
                <!--                                </div>-->
                <!--                                <div class="comment-body">-->
                <!--                                  <h3>John Doe</h3>-->
                <!--                                  <div class="meta">June 01, 2020 at 2:21pm</div>-->
                <!--                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>-->
                <!--                                  <p><a href="#" class="reply">Reply</a></p>-->
                <!--                                </div>-->
                <!--                              </li>-->
                <!--                            </ul>-->
                <!--                        </li>-->
                <!--                      </ul>-->
                <!--                    </li>-->
                <!--                  </ul>-->
                <!--                </li>-->

                <!--                <li class="comment">-->
                <!--                  <div class="vcard bio">-->
                <!--                    <img src="images/person_1.jpg" alt="Image placeholder">-->
                <!--                  </div>-->
                <!--                  <div class="comment-body">-->
                <!--                    <h3>John Doe</h3>-->
                <!--                    <div class="meta">June 01, 2020 at 2:21pm</div>-->
                <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>-->
                <!--                    <p><a href="#" class="reply">Reply</a></p>-->
                <!--                  </div>-->
                <!--                </li>-->
                <!--              </ul>-->
                <!--              &lt;!&ndash; END comment-list &ndash;&gt;-->
                <!--              -->
                <!--              <div class="comment-form-wrap pt-5">-->
                <!--                <h3 class="mb-5">Leave a comment</h3>-->
                <!--                <form action="#" class="p-5 bg-light">-->
                <!--                  <div class="form-group">-->
                <!--                    <label for="name">Name *</label>-->
                <!--                    <input type="text" class="form-control" id="name">-->
                <!--                  </div>-->
                <!--                  <div class="form-group">-->
                <!--                    <label for="email">Email *</label>-->
                <!--                    <input type="email" class="form-control" id="email">-->
                <!--                  </div>-->
                <!--                  <div class="form-group">-->
                <!--                    <label for="website">Website</label>-->
                <!--                    <input type="url" class="form-control" id="website">-->
                <!--                  </div>-->

                <!--                  <div class="form-group">-->
                <!--                    <label for="message">Message</label>-->
                <!--                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>-->
                <!--                  </div>-->
                <!--                  <div class="form-group">-->
                <!--                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">-->
                <!--                  </div>-->

                <!--                </form>-->
                <!--              </div>-->
                <!--            </div>-->

            </div> <!-- .col-md-8 -->
            <div class="col-md-4 sidebar ftco-animate">
                <!--            <div class="sidebar-box">-->
                <!--              <form action="#" class="search-form">-->
                <!--                <div class="form-group">-->
                <!--                  <span class="icon fa fa-search"></span>-->
                <!--                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">-->
                <!--                </div>-->
                <!--              </form>-->
                <!--            </div>-->
                <!--            <div class="sidebar-box ftco-animate">-->
                <!--              <div class="categories">-->
                <!--                <h3>Categories</h3>-->
                <!--                <li><a href="#">Residences <span>(12)</span></a></li>-->
                <!--                <li><a href="#">Office <span>(22)</span></a></li>-->
                <!--                <li><a href="#">Commercial <span>(37)</span></a></li>-->
                <!--                <li><a href="#">Building <span>(42)</span></a></li>-->
                <!--                <li><a href="#">Storage <span>(14)</span></a></li>-->
                <!--              </div>-->
                <!--            </div>-->

                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> June 01, 2020</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> June 01, 2020</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> June 01, 2020</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--            <div class="sidebar-box ftco-animate">-->
                <!--              <h3>Tag Cloud</h3>-->
                <!--              <div class="tagcloud">-->
                <!--                <a href="#" class="tag-cloud-link">home</a>-->
                <!--                <a href="#" class="tag-cloud-link">house</a>-->
                <!--                <a href="#" class="tag-cloud-link">real</a>-->
                <!--                <a href="#" class="tag-cloud-link">state</a>-->
                <!--                <a href="#" class="tag-cloud-link">office</a>-->
                <!--                <a href="#" class="tag-cloud-link">residence</a>-->
                <!--                <a href="#" class="tag-cloud-link">land</a>-->
                <!--                <a href="#" class="tag-cloud-link">park</a>-->
                <!--              </div>-->
                <!--            </div>-->

                <!--            <div class="sidebar-box ftco-animate">-->
                <!--              <h3>Paragraph</h3>-->
                <!--              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>-->
                <!--            </div>-->
            </div>

        </div>
    </div>
</section> <!-- .section -->
@endsection