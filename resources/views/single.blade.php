@extends('layouts.frontend')



@section('seo')

    <title>{{$title}}</title>
    <meta name="keywords" content="">
    <meta name="description" content="{{$post->title}}">
    <meta name="twitter:description" content="{{$post->title}}">
    <meta name="og:description" content="{{$post->title}}">
       
    <meta property="og:type" content="article">
    <meta property="og:image" itemprop="image" content="{{asset($post->featured_image)}}">
    <meta name="twitter:image" content="{{asset($post->featured_image)}}">
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />

    <meta property="og:title" content="Tuko Rieng ☛ {{$post->title}}">
    <meta name="twitter:title" content="Tuko Rieng ☛ {{$post->title}}">

@endsection



  
@section('blog')

              <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-leaf bg-green"></i> Blog</h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                <span class="color-green"><a href="garden-category.html" title="">{{$post->category->name}}</a></span>

                                <h3>{{$post->title}}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="garden-single.html" title="">{{$post->created_at->diffForHumans()}}</a></small>
                                    <small><a href="blog-author.html" title="">by Jessica</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="{{asset($post->featured_image)}}" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                                <div class="pp">

                                    {!! $post->content !!}

                                </div><!-- end pp -->     
                            </div><!-- end content -->
                        

                            <div class="blog-title-area">
                                <div class="tag-cloud-single">
                                    <span>Tags</span>
                                    @foreach($post->tags as $tag)
                                    <small><a href="{{route('tag.filter',$tag->id)}}" title="">{{$tag->tag}}</a></small>
                                    @endforeach
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="{{asset('frontend/upload/banner_01.jpg')}}" alt="" class="img-fluid">
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">You may also like</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="garden-single.html" title="">
                                                    <img src="{{asset('frontend/upload/garden_single_03.jpg')}}" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class=""></span>
                                                    </div><!-- end hover -->
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta">
                                                <h4><a href="garden-single.html" title="">We are guests of ABC Design Studio</a></h4>
                                                <small><a href="blog-category-01.html" title="">Trends</a></small>
                                                <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->

                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="garden-single.html" title="">
                                                    <img src="{{asset('frontend/upload/garden_single_02.jpg')}}" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class=""></span>
                                                    </div><!-- end hover -->
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta">
                                                <h4><a href="garden-single.html" title="">Nostalgia at work with family</a></h4>
                                                <small><a href="blog-category-01.html" title="">News</a></small>
                                                <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Comments</h4>
                                @include('layouts.disqus')
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Search</h2>
                                <form method="POST" action="{{route('search.results')}}"  class="form-inline search-form">
                                    @csrf
                                    <div class="form-group">
                                        <input name="query" type="text" class="form-control" placeholder="Search on the site">
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/garden_sq_09.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                                <small>12 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/garden_sq_06.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                                <small>11 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="upload/garden_sq_02.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                                <small>07 Jan, 2016</small>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Advertising</h2>
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="{{asset('frontend/upload/banner_04.jpg')}}" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Instagram Feed</h2>
                                <div class="instagram-wrapper clearfix">
                                    <a href="#"><img src="{{asset('frontend/upload/garden_sq_01.jpg')}}" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="{{asset('frontend/upload/garden_sq_02.jpg')}}" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="{{asset('frontend/upload/garden_sq_03.jpg')}}" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="{{asset('frontend/upload/garden_sq_04.jpg')}}" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="{{asset('frontend/upload/garden_sq_05.jpg')}}" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="{{asset('frontend/upload/garden_sq_06.jpg')}}" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="{{asset('frontend/upload/garden_sq_07.jpg')}}" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="{{asset('frontend/upload/garden_sq_08.jpg')}}" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="{{asset('frontend/upload/garden_sq_09.jpg')}}" alt="" class="img-fluid"></a>
                                </div><!-- end Instagram wrapper -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Popular Categories</h2>
                                <div class="link-widget">
                                    <ul>
                                        @foreach($categories as $category)
                                        <li><a href="{{route('category.filter',$category->id)}}">{{ $category->name }} <span>({{$category->posts()->count()}})</span></a></li>
                                        @endforeach
                                    </ul>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>


@endsection