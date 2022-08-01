@extends('user.pro')
@section('action', 'INFORMATION')
@section('content')
<div>
    @if (Session::has('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ Session::get('success') }}</strong>
    </div>
    @endif
</div>
<div><h3 class="heading-agileinfo" style="margin-top: 50px">Details <i class="fa fa-anchor" aria-hidden="true"></i></h3></div>
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
            /* border:3px solid #00ff00; */
            width:100%;
            /* height:500px; */
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
        </div>   
        <div class="row tm-mb-90"> 
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                    @php
                       $image = $blogs->image == NULL ? 'no-image.png' : $blogs->image;
					    $image_url = asset('images/'.$image)
                    @endphp
                   <img src="{{$image_url}}" class="fish" style="width: 100%; height: 500px">                  
            </div> 
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">               
                <div class="tm-bg-gray tm-video-details" >
                    <p class="mb-4">
                        <h1 class="tm-text-gray-dark mb-3" data-selected="true" data-label-id="0" style="position: relative; left: -3px; top: -64px; transition: none 0s ease 0s; cursor: move;color:darkblue;">{{$blogs->name}}</h1>
                    </p>
                    <div class="text mb-5" style="position: relative; left: -2px; top: -62px;">    
                        <a><span style="font-family: 'Times New Roman', serif; font-size: 22px;">{{$blogs->intro}}</span></a>
                    </div>
                    <div class="mb-4">
                        {{-- <span style="font-size: 16pt;">{!!$blogs->content!!}</span> --}}
                        </div>
                        <div style="position: relative; left: -2px; top: -85px; transition: none 0s ease 0s; cursor: move;" data-selected="true" data-label-id="0">
                            <h3 class="tm-text-gray-dark mb-3"></h3>
                        @php
                                foreach ($blogs_img as $blog_img){
// if ($blog_img->blogs_id == $blogs->id){
                                        // $image = $blogs->image == NULL ? 'no-image.jpg' : $blogs->image;
                                        $image_url = asset('images/'. $blog_img->avatar);
                                        $html = '<a class="tm-text-primary mr-4 mb-2 d-inline-block"><img src="';
                                        $html2='" widtd="100px" height="80px" alt=""></a>';
                                        echo $html.$image_url.$html2;
                                    }                               
                        @endphp                       
                    </div>                 
                </div>              
            </div>        
        </div>  
        <div class="row mb-4">
            <span style="font-family: 'Times New Roman', serif; font-size: 22px;">{!!$blogs->content!!}</span>
            <h2 class="col-12 tm-text-primary">
            </h2>
        </div>

        
            <div class="be-comment-block">
                
                <h1 class="comments-title">Evaluate ( {{$sum}})</h1>
                <h1 class="comments-title">Rating  <span style="color: red; font-size:18px">
                    @if (empty($sum))
                      <?php 
                        $sum = 1;
                        echo round($avg/$sum, 1).'☆';
                      ?>
                    @else
                        <?php echo round($avg/$sum, 1).'☆';?>
                    @endif
                </span></h1>
                @if ($sum=0) 
                <div id="comments_abc" style="display: none">Nodata</div>
                @else
                <div id="comments_abc">
                    @foreach($comments as $comment)
                @if($comment->status == 0)
                    <div class="be-comment">
                        
                        
                        <div class="be-img-comment">	
                            <a href="blog-detail-2.html">
                                <img src="{{ asset('assets/dist/img/no-avatar.png') }}" alt="" class="be-ava-comment">
                            </a>
                        </div>
                        
                        <div class="be-comment-content">
                                <p class="be-comment-name">
                                    <span style="color:darkblue;font-size:16px;">{{$comment->name_user}}<span style="color: red; font-size:18px; margin-left: 20px;">{{$comment->rating}}☆</span></span>
                                    <span class="be-comment-time" style="font-size:15px;"><i class="fa fa-clock-o"></i>{{ date('d/m/Y : H:i:s', strtotime($comment->created_at)) }}</span>
                                    <p class="be-comment-text" data-selected="true" data-label-id="0" style="position: relative; left: 3px; top: -38px; transition: none 0s ease 0s; cursor: move;">{{$comment->comment_body}}</p>
                                </p>
                                
                        </div>
                    </div>
                @endif
                    @endforeach
                   
                    </div>
                @endif
                {{$comments->appends(request()->all())->links()}}
                
            
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
                                <textarea class="form-input"placeholder="Your text" name="comment_body"></textarea>
                            </div>
                        </div>
            
                        <div class="col-xs-12">									
                            <div class="form-group">
                                <input type="submit" value="SUBMIT" id="comment">
                            </div>
</div>
                      </div>  
                    </div>
                </form>
        </div>
    </div>
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