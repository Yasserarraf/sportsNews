<div class="tab sitebar">
					<ul class="nav nav-tabs">
						<li class="active"><a  href="#1" data-toggle="tab">Latest</a></li>
						<li><a href="#2" data-toggle="tab">Populer</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="1">
							<div class="media">
								<div class="media-left">
									<a href="#"><img class="media-object" src="{{asset('img/img-list.jpg')}}" alt="Generic placeholder image"></a>
								</div><!--media-left-->
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Spain going to made class football</a></h4>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-full"></i>
									</span>
								</div><!--media-body-->
							</div><!--media-->

							<div class="media">
								<div class="media-left">
									<a href="#"><img class="media-object" src="{{asset('img/img-list5.jpg')}}" alt="Generic placeholder image"></a>
								</div><!--media-left-->
								<div class="media-body">
									<h4 class="media-heading"><a href="#">Spain going to made class football</a></h4>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-full"></i>
									</span>
								</div><!--media-body-->
							</div><!--media-->

							<div class="media">
								<div class="media-left">
									<a href="#"><img class="media-object" src="{{asset('img/img-list2.jpg')}}" alt="Generic placeholder image"></a>
								</div><!--media-left-->
								<div class="media-body">
									<h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-full"></i>
									</span>
								</div><!--media-body-->
							</div><!--media-->

							<div class="media">
								<div class="media-left">
									<a href="#"><img class="media-object" src="{{asset('img/img-list3.jpg')}}" alt="Generic placeholder image"></a>
								</div><!--media-left-->
								<div class="media-body">
									<h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-full"></i>
									</span>
								</div><!--media-body-->
							</div><!--media-->
						</div><!--tab-pane-->

						<div class="tab-pane" id="2">
							<div class="media">
								<div class="media-left">
									<a href="#"><img class="media-object" src="{{asset('img/img-list4.jpg')}}" alt="Generic placeholder image"></a>
								</div><!--media-left-->
								<div class="media-body">
									<h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-full"></i>
									</span>
								</div><!--media-body-->
							</div><!--media-->

							<div class="media">
								<div class="media-left">
									<a href="#"><img class="media-object" src="{{asset('img/img-list.jpg')}}" alt="Generic placeholder image"></a>
								</div><!--media-left-->
								<div class="media-body">
									<h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-full"></i>
									</span>
								</div><!--media-body-->
							</div><!--media-->
						</div><!--tab-pane-->
					</div><!--tab-content-->
				</div><!--tab-->

				<div class="ad">
					<img class="img-responsive" src="{{asset('img/img-sitebar.jpg')}}" alt="img" />
					<img class="img-responsive" src="{{asset('img/img-sitebar.jpg')}}" alt="img" />
					<img class="img-responsive" src="{{asset('img/img-sitebar.jpg')}}" alt="img" />
					<img class="img-responsive" src="{{asset('img/img-sitebar.jpg')}}" alt="img" />
				</div><!--ad-->

				<div class="ad">
					<div class="col-sm-12">
						@if($sidebarTop)
						<!--  images are not showing ... need to fix ! -->
						<a  href="{{$sidebarTop->url}}" target="_blank"><img class="img-responsive" src="{{url('advertisements')}}/{{$sidebarTop->image}}" alt=""></a>
					</div>
					@endif
				</div>

				<div class="ad">
					@if($sidebarBottom)
					<div class="col-sm-12">
						<!--  images are not showing ... need to fix ! -->
						<a  href="{{$sidebarBottom->url}}" target="_blank"><img class="img-responsive" src="{{url('advertisements')}}/{{$sidebarBottom->image}}" alt=""></a>
					</div>
					@endif
				</div>

                <div class="most_comment">
                    <div class="sidebar_title">
                        <h2>Most Commented</h2>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="{{asset('img/img-list.jpg')}}" alt="Generic placeholder image"></a>
                        </div><!--media-left-->
                        <div class="media-body">
                            <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                             <div class="comment_box">
                                <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                                 <div class="comments"><a href="#">9 Comments</a></div>
                             </div><!--comment_box-->
                        </div><!--media-body-->
                    </div><!--media-->
                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="{{asset('img/img-list2.jpg')}}" alt="Generic placeholder image"></a>
                        </div><!--media-left-->
                        <div class="media-body">
                            <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                            <div class="comment_box">
                                <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                                <div class="comments"><a href="#">20 Comments</a></div>
                            </div><!--comment_box-->
                        </div><!--media-body-->
                    </div><!--media-->
                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="{{asset('img/img-list3.jpg')}}" alt="Generic placeholder image"></a>
                        </div><!--media-left-->
                        <div class="media-body">
                            <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                            <div class="comment_box">
                                <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                                <div class="comments"><a href="#">23 Comments</a></div>
                            </div><!--comment_box-->
                        </div><!--media-body-->
                    </div><!--media-->
                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="{{asset('img/img-list3.jpg')}}" alt="Generic placeholder image"></a>
                        </div><!--media-left-->
                        <div class="media-body">
                            <h3 class="media-heading"><a href="#">Spain going to made class football</a></h3>
                            <div class="comment_box">
                                <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                                <div class="comments"><a href="#">44 Comments</a></div>
                            </div><!--comment_box-->
                        </div><!--media-body-->
                    </div><!--media-->
                </div><!--most_comment-->
