@extends('user.pro')
@section('action', 'INFORMATION')
@section('content')
<div><h3 class="heading-agileinfo">Details <i class="fa fa-anchor" aria-hidden="true"></i></h3></div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog-Z Video Detail Page</title>
    <link rel="stylesheet" href="{{ asset('temple556/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('temple556/fontawesome/css/all.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('temple556/css/templatemo-style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/comment.css')}}">
    <style type="text/css">
        #comments_abc{
            border:3px solid #00ff00;
            width:100%;
            height:500px;
            overflow-x:hidden;
            overflow-y:auto;
        }
    </style>
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
   
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            {{-- <h2 class="col-12 tm-text-primary">Image title goes here</h2> --}}
        </div>
        {{-- @foreach ($blogs as $lte) --}}
        <div class="row tm-mb-90"> 
            {{-- @foreach ($blogs as $lte)            --}}
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                    @php
                       $image = $blogs->image == NULL ? 'no-image.png' : $blogs->image;
					    $image_url = asset('images/'.$image)
                    @endphp
                   <img src="{{$image_url}}" class="fish" style="width: 100%; height: 500px">                  
            </div>     
            {{-- @endforeach --}}
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                {{-- @foreach ($blogs as $lte) --}}
                <div class="tm-bg-gray tm-video-details">
                    <p class="mb-4">
                        <h3 class="tm-text-gray-dark mb-3">{{$blogs->name}}</h3>
                    </p>
                    <div class="text mb-5">
                        <a><span style="font-size: 16pt;">{{$blogs->intro}}</span></a>
                    </div>
                    <div class="mb-4">
                        <h3> <span style="font-size: 16pt;">{!!$blogs->content!!}</span></h3>
                        </div>
                    <div>
                        <h3 class="tm-text-gray-dark mb-3"></h3>
                        @php
                                foreach ($blogs_img as $blog_img){
                                    // if ($blog_img->blogs_id == $blogs->id){
                                        // $image = $blogs->image == NULL ? 'no-image.jpg' : $blogs->image;
$image_url = asset('images/'. $blog_img->avatar);
                                        $html = '<a class="tm-text-primary mr-4 mb-2 d-inline-block"><img src="';
                                        $html2='" widtd="50px" height="80px" alt=""></a>';
                                        echo $html.$image_url.$html2;
                                    }
                                
                        @endphp
                        {{-- <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Real Estate</a> --}}
                    </div> 
                    {{-- @endforeach --}}
                </div>              
            </div>        
        </div>  
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                {{-- Related Videos --}}
            </h2>
        </div>
        <div class="row mb-3 tm-gallery">
            {{-- @foreach ($blogs as $lte) --}}
            {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    @php
                       $image = $blog->image == NULL ? 'no-image.png' : $blog->image;
                        $image_url = asset('images/'. $image);
                    @endphp
                    <img src="{{ $image_url }}" alt="Image" class="lte">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{!!$lte->name!!}</h2>
                        <a href="{{ route('user.marine.Information',['id'=>$lte->id])}}">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">12 Oct 2020</span>
                    <span>12,460 views</span>
                </div>               
    </div>
    {{-- @endforeach --}}
        </div>





    
            <div class="be-comment-block">
                <h1 class="comments-title">Comments ( {{$sum}})</h1>
                <h1 class="comments-title">Rating  <span style="color: red; font-size:18px">
                    @php if (empty($sum)){
                        $sum = 1;
                        echo round($avg/$sum, 1).'☆';
                    }
                    else {
                        echo round($avg/$sum, 1).'☆';
                    }
                    
                    @endphp
                </span></h1>
                <div id="comments_abc">
                @foreach($comments as $comment)
            @if($comment->status == 1)
                <div class="be-comment">
                    
                    
                    <div class="be-img-comment">	
                        <a href="blog-detail-2.html">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
                        </a>
                    </div>
                    
                    <div class="be-comment-content">
                        
                            <span class="be-comment-name">
<a href="blog-detail-2.html">{{$comment->name_user}}</a>
                                </span>
                            <span class="be-comment-time">
                                <i class="fa fa-clock-o"></i>
                                {{ date('d/m/Y : H:i:s', strtotime($comment->created_at)) }}
                            </span>
                            <span style="color: red; font-size:18px">
                                {{$comment->rating}}☆
                            </span>
                        <p class="be-comment-text">
                            {{$comment->comment_body}}
                        </p>
                    </div>
                </div>
            @endif
                @endforeach
                </div>
            
                
            
            <form class="form-block" action="{{route('user.marine.post')}}" method="post">
                    @csrf
                    <input class="form-input" style="display: none" type="text" placeholder="Your name" name="blogs_id" value="{{$blogs->id}}" />
        
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group fl_icon">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <input class="form-input" type="text" id="name_user" placeholder="Your name" name="name_user">
                            </div>
                        </div>
                        
                        <div class="col-xs-12">			
                            <div><label class="icon">Rating</label>	</div>				
                            <div class="rating"> 
                                <input type="radio" class="danh_gia" name="rating" value="5" id="5"><label for="5">☆</label>
                                <input type="radio" class="danh_gia" name="rating" value="4" id="4"><label for="4">☆</label> 
                                <input type="radio" class="danh_gia" name="rating" value="3" id="3"><label for="3">☆</label>
                                <input type="radio" class="danh_gia" name="rating" value="2" id="2"><label for="2">☆</label>
                                <input type="radio" class="danh_gia" name="rating" value="1" id="1"><label for="1">☆</label>
                            </div>
                        </div>
            
                        <div class="col-xs-12">									
                            <div class="form-group">
                                <textarea class="form-input" required="" placeholder="Your text" name="comment_body"></textarea>
                            </div>
                        </div>
            
                        <div class="col-xs-12">									
                            <div class="form-group">
                                <input type="submit" value="SUBMIT" id="comment">
                            </div>
</div>
                        
                    </div>
                </form>
        </div>
    </div>
</div>
</div>

        
            


    
    
<script src="{{ asset('temple556/js/plugins.js')}}"></script>
<script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
</script>
<script type="text/javascript" src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" >
   
    $(document).ready(function(){
        $("#comment").css("display","none");
        $("#name_user").keyup(function(){
            if($(this).val()!="" && isNaN($(this).val())){
                $("#comment").css("display","inline");
            }
            else{
                $("#comment").css("display","none");
            }
        })
        $("#comment").click(function(){
            alert('Rating not null');
        })
        $(".danh_gia").change(function () {
            if($(this).val!=0){
                $("#comment").replaceWith(`<input type="submit"  value="SUBMIT" id="comment">`);
            }
        })
    })
</script>
</body>
</html>
@endsection