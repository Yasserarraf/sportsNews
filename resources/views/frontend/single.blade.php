@extends('layouts.frontend')
@section('content')

				<div class="single_content_layout">
					<div class="item feature_news_item">
						<div class="item_img">
							<img  class="img-responsive" src="{{url('posts')}}/{{$data->image}}" alt="Chania">
						</div><!--item_img-->
							<div class="item_wrapper">
								<div class="news_item_title">
									<h2><a href="#">{{$data->title}}</a></h2>
								</div><!--news_item_title-->
								<div class="item_meta"><a href="#">{{$data->created_at}}</a> by:<a href="#">{{$data->slug}}</a></div>

                                    <span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-full"></i>
									</span>

									<div class="single_social_icon">
										<a class="icons-sm fb-ic" href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
										<!--Twitter-->
										<a class="icons-sm tw-ic" href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
										<!--Google +-->
										<a class="icons-sm gplus-ic" href="#"><i class="fa fa-google-plus"></i><span>Google Plus</span></a>
										<!--Linkedin-->
										<a class="icons-sm li-ic" href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>

									</div> <!--social_icon1-->

									<div class="item_content">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
										<br /><br />
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
										<br /><br />
										Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam
									</div><!--item_content-->
                                    <div class="category_list">
                                        <a href="#">Messi</a>
                                        <a href="#">Leonel</a>
                                        <a href="#">Bercelona</a>
                                        <a href="#">Argentina</a>
                                        <a href="#">Football</a>
                                    </div><!--category_list-->
							</div><!--item_wrapper-->
					</div><!--feature_news_item-->

					<div class="single_related_news">
					 <div class="single_media_title"><h2>Related News</h2></div>
						<div class="media_wrapper">
							<div class="media">
								<div class="media-left">
									<a href="#"><img class="media-object" src="{{asset('img/img-list5.jpg')}}" alt="Generic placeholder image"></a>
								</div><!--media-left-->
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Machester United start the player
									</a></h4>
									<div class="media_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
									<div class="media_content"><p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore</p>
                                    </div><!--media_content-->
								</div><!--media-body-->
							</div><!--media-->

                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{{asset('img/img-list2.jpg')}}" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Machester United start the player
                                    </a></h4>
									<div class="media_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                    <div class="media_content"><p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore</p>
                                    </div><!--media_content-->
                                </div><!--media-body-->
                            </div><!--media-->

                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{{asset('img/img-list3.jpg')}}" alt="Generic placeholder image"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Machester United start the player
                                    </a></h4>
									<div class="media_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                    <div class="media_content"><p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore</p>
                                    </div><!--media_content-->
                                </div><!--media-body-->
                            </div><!--media-->
						</div><!--media_wrapper-->
					</div><!--single_related_news-->


					<div class="ad">
						<img class="img-responsive" src="{{asset('img/img-single-ad.jpg')}}" alt="Chania">
					</div>

					<div class="readers_comment">
                        <div class="single_media_title"><h2>Related Comments</h2></div>
						<div class="media">
							<div class="media-left">
								<a href="#">
									<img alt="64x64" class="media-object" data-src="{{asset('img/img-author1.jpg')}}"
										 src="{{asset('img/img-author1.jpg')}}" data-holder-rendered="true">
								</a>
							</div>
							<div class="media-body">
								<h2 class="media-heading">Sr. Ryan</h2>
								But who has any right to find fault with a man who chooses to enjoy a pleasure that has
								no annoying consequences, or one who avoids a pain that produces no resultant pleasure?


								<div class="comment_article_social">
									<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
									<a href="#"><span class="reply_ic">Reply </span></a>
								</div>
								<div class="media reply">
									<div class="media-left">
										<a href="#">
											<img alt="64x64" class="media-object" data-src="{{asset('img/img-author2.jpg')}}"
												 src="{{asset('img/img-author2.jpg')}}" data-holder-rendered="true">
										</a>
									</div>
									<div class="media-body">
										<h2 class="media-heading">Admin</h2>
										But who has any right to find fault with a man who chooses to enjoy a pleasure
										that has no annoying consequences, or one who avoids a pain that produces no
										resultant pleasure?

										<div class="comment_article_social">
											<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
											<a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
											<a href="#"><span class="reply_ic"> Reply </span></a>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="media">
							<div class="media-left">
								<a href="#">
									<img alt="64x64" class="media-object" data-src="{{asset('img/img-author1.jpg')}}"
										 src="{{asset('img/img-author1.jpg')}}" data-holder-rendered="true">
								</a>
							</div>
							<div class="media-body">
								<h2 class="media-heading">S. Joshep</h2>
								But who has any right to find fault with a man who chooses to enjoy a pleasure that has
								no annoying consequences, or one who avoids a pain that produces no resultant pleasure?

								<div class="comment_article_social">
									<a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
									<a href="#"><span class="reply_ic"> Reply </span></a>
								</div>
							</div>
						</div>
					</div><!--readers_comment-->

					<div class="add_a_comment">
						<div class="single_media_title"><h2>Add a Comment</h2></div>
						<div class="comment_form">
							<form>
	                            <div class="form-group">
	                                <input type="text" class="form-control" id="inputName" placeholder="Name">
	                            </div>
	                            <div class="form-group">
	                                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
	                            </div>
	                            <div class="form-group comment">
	                                <textarea class="form-control" id="inputComment" placeholder="Comment"></textarea>
	                            </div>

	                            <button type="submit" class="btn btn-submit red">Submit</button>
	                        </form>
                        </div><!--comment_form-->
					</div><!--add_a_comment-->

				</div><!--single_content_layout-->

@endsection
