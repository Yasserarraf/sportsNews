@extends('layouts.frontend')
@section('content')

        @foreach($categories as $category)
        <div class="category_layout">
            <div class="item_caregory red"><h2><a href="category.html">{{$category->title}}</a></h2></div>
            <div class="row">
                <div class="col-md-7">
                    <div class="item feature_news_item">
                        <div class="item_wrapper">
                            <div class="item_img">
                                <img class="img-responsive" style="width:100%" src="{{url('posts')}}/{{$category->posts[0]->image}}" alt="Chania">
                            </div><!--item_img-->
                            <div class="item_title_date">
                                <div class="news_item_title">
                                    <h2><a href="{{url('article')}}/{{$category->posts[0]->pid}}">{{$category->posts[0]->title}}</a></h2>
                                </div><!--news_item_title-->
                                <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                            </div><!--item_title_date-->
                        </div><!--item_wrapper-->
                        <div class="item_content">{{$category->posts[0]->description}}
                        </div><!--item_content-->

                    </div><!--feature_news_item-->
                </div><!--col-md-7-->

                <div class="col-md-5">
                    <div class="media_wrapper">
                        @foreach($category->posts as $post)

                            @if ($loop->index <= 1) @continue @endif
                        <div class="media">
                            <div class="media-left">
                                <a href="{{url('article')}}/{{$post->pid}}"><img style="width:100px"class="media-object" src="{{url('posts')}}/{{$post->image}}" alt="Generic placeholder image"></a>
                            </div><!--media-left-->
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">{{$post->title}}
                                    </a></h3>

                                <p>{{$post->description}}</p>

                            </div><!--media-body-->
                        </div><!--media-->
                        @endforeach

                    </div><!--media_wrapper-->

                </div><!--col-md-5-->
            </div><!--row-->
        </div><!--category_layout-->
        @endforeach


        <div id="more_news_item" class="more_news_item">
            <div class="more_news_heading"><h2><a href="#">More News</a></h2></div>
            <div class="row">
                @foreach($categories as $category)
                <div class="col-md-4">
                    <div class="feature_news_item">
                        <div class="item">
                            <div class="item_wrapper">
                                <div class="item_img">
                                    <img class="img-responsive" style="width:100%" src="{{url('posts')}}/{{$category->posts[1]->image}}" alt="Chania">
                                </div><!--item_img-->
                                <div class="item_title_date">
                                    <div class="news_item_title">
                                        <h3><a href="#">{{$category->posts[1]->title}}</a></h3>
                                    </div><!--news_item_title-->
                                    <div class="item_meta"><a href="#">20Aug- 2015,</a> by:<a href="#">Jhonson</a></div>
                                </div><!--item_title_date-->
                            </div><!--item_wrapper-->
                            <div class="item_content">{{$category->posts[1]->description}}
                            </div><!--item_content-->

                        </div><!--item-->
                    </div><!--feature_news_item-->
                </div><!--col-xs-4-->
                @endforeach

            </div><!--row-->
        </div><!--more_news_item-->




@endsection
