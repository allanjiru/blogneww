@extends('layouts.frontend')

@section('blog')

                


		<div class="blog-post single-post">
            <article>
              <div class="entry-content-wrapper">
                <div class="entry-meta-top">
                	<span class="entry-meta-category">
                		<a href="{{route('category.filter',$post->category->id)}}">{{ $post->category->name }}</a>
                	</span>
                </div>
                <h2 class="entry-title mb-20px">
                	<p style="color: black">
                    {{$post->title}}
                	</p>
                </h2>
                <div class="entry-content">
                  {!! $post->content !!}
                </div>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>

                <div class="entry-meta-bottom mt-40px mb-40px">
                  <div class="text-lg-left">
                    <ul class="entry-tags mb-25px">

                    	@foreach($post->tags as $tag)
                      <li><a href="{{route('tag.filter',$tag->id)}}" rel="tag">{{$tag->tag}}</a></li>
                      	@endforeach

                    </ul>
                  </div>
                </div>
                

                @include('layouts.disqus')

                <!--End comment are-->
                
                <!-- Post navigation-->
                <div class="navigation post-navigation">
                  <div class="row align-items-center nav-links">
                    @if($prev)
                    <div class="col-lg-6 text-lg-left">
                      <div class="nav-previous mb-15px">
                        <div class="nav-subtitle"> Previous Post </div>
                        <div class="nav-title"><a href="{{ route('post.single',['slug' => $prev->slug ]) }}"><i class="fas fa-long-arrow-alt-left fa-lg mr-1" aria-hidden="true"> </i>{{ $prev->title }}</a></div>
                      </div>
                    </div>
                    @endif
                    @if($next)
                      <div class="col-lg-6 text-lg-right">
                      <div class="nav-next mb-15px">
                        <div class="nav-subtitle">Next Post</div>
                        <div class="nav-title"><a href="{{ route('post.single',['slug' => $next->slug ]) }}">
                             {{$next->title}}<i class="fas fa-long-arrow-alt-right fa-lg ml-1" aria-hidden="true"></i></a></div>
                      </div>
                    </div>
                    @endif
                  </div>
                </div>
              </div>
            </article>
          </div>

          @endsection