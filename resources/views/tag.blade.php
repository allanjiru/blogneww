@extends('layouts.frontend')

@section('seo')

    <title>{{$title}}</title>
    <meta name="keywords" content="">
    <meta name="description" content="Latest Kenyan News ✔ opinion ✔ sport ✔ Headlines around the world ☝ Get the latest articles &amp; celebrity gossip | Rieng">
    <meta name="twitter:description" content="Latest Kenyan News ✔ opinion ✔ sport ✔ Headlines around the world ☝ Get the latest articles &amp; celebrity gossip | Rieng">
    <meta name="og:description" content="Latest Kenyan News ✔ opinion ✔ sport ✔ Headlines around the world ☝ Get the latest articles &amp; celebrity gossip | Rieng">
       
<meta property="og:type" content="website">
<meta property="og:image" itemprop="image" content="{{asset('frontend/images/logo1.png')}}">
<meta name="twitter:image" content="{{asset('frontend/images/logo1.png')}}">
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">

<meta property="og:title" content="Latest Kenyan News: Number one for news, opinion, sport &amp; celebrity gossip | Rieng">
<meta name="twitter:title" content="atest Kenyan News: Number one for news, opinion, sport &amp; celebrity gossip | Rieng">





@endsection





  @section('blog')      

        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-commenting bg-green"></i> Tag : {{ $tag->tag }}</h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active" style="color: #37a000">{{ $tag->tag }}</li>
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
                            <div class="blog-list clearfix">

                                @foreach($posts as $post)

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="garden-single.html" title="">
                                                <img src="{{asset($post->featured_image)}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <span class="bg-aqua"><a href="{{route('category.filter',$post->category_id)}}" title="">{{$post->category->name}}</a></span>
                                        <h4><a href="{{ route('post.single',['id' => $post->slug]) }}" title="">{{$post->title}}</a></h4>
                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                        <small><a title="">{{$post->created_at->diffForHumans()}}</a></small>
                                        @foreach($post->tags as $tag)
                                        <small><a href="{{route('tag.filter',$tag->id)}}" title="">{{$tag->tag}}</a></small>
                                        @endforeach
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                @endforeach

                                {{$posts->links()}}
                                

                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        


                        <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="banner-spot clearfix">
                                            <div class="banner-img">
                                                <img src="{{asset('frontend/upload/banner_05.jpg')}}" alt="" class="img-fluid">
                                            </div><!-- end banner-img -->
                                        </div><!-- end banner -->
                                    </div><!-- end col -->
                         </div><!-- end row -->

                        
                        <hr class="invis">


                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Search</h2>
                                <form method="POST" action="{{route('search.results')}}" s class="form-inline search-form">
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

                                        @foreach($first_posts as $first_post)

                                        <a href="{{ route('post.single',['id' => $first_post->slug]) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{asset($first_post->featured_image)}}" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">{{$first_post->title}}</h5>
                                                <small>{{$first_post->created_at->diffForHumans()}}</small>
                                            </div>
                                        </a>

                                       @endforeach

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