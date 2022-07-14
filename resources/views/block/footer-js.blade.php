<script type='text/javascript' src='{{asset('assets/js/jquery-2.2.3.min.js')}}'></script>
<!--//js -->
<!-- gallery-pop-up -->
<!-- //gallery-pop-up -->
<!--Scrolling-top -->
<script type="text/javascript" src="{{asset('assets/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){		
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!--//Scrolling-top -->
<!-- smooth scrolling -->
<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>


<script type="text/javascript">
//chuyển đổi tiền tệ
    
$(document).ready(function(){
            total = 0;
            var gia_ve = parseInt($("#gia-ve").text());
            const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'VND',
                minimumFractionDigits: 0
            });
            $("#children").keyup(function(){
                var children = $(this).val();
                var gia_tre_em = $("#hien-gia-children").html(children+`*`+formatter.format(gia_ve/2));
               
            });
           
            $("#adult").keyup(function(){
                var adult = $(this).val();
                var gia_nguoi_lon = $("#hien-gia-adult").html(adult+`*`+formatter.format(gia_ve));
                
            });

            $("#tinh-tien").click(function(){
                total += ($("#adult").val()*gia_ve) + ($("#children").val()*gia_ve/2)
                $("#result").html(formatter.format(total))
            })
            $(".qty1").on("keyup", function(){
                var sum=0;
                $(".qty1").each(function(){
                    if($(this).val() !== "")
                    sum += parseInt($(this).val(), 10);   
                });
            
                $("#hanh-khach").html(sum+` <i class="fa-solid fa-user-group"></i>`);
            });
    })
</script>