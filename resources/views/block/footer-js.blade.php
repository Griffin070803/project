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
            var gia_ve = parseInt($("#gia-ve").text());
            var sum = parseInt($('#sum').text());
            var slot = parseInt($('#slot').text());
            var slot_du = slot - sum;
            const formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 0
            });
            //validate form
            $("#children").keyup(function(){
                let reset = 0;
                var children = $(this).val();
                if (children > slot_du) {
                    alert(`Slot chỉ còn dư: `+slot_du);
                    $("#hien-gia-children").text('0');
                    $("#children").val('0');

                }else{
                    $("#hien-gia-children").html(children+`*`+formatter.format(gia_ve/2));
                }
            });
           
            $("#adult").keyup(function(){
                var adult = $(this).val();
                if (adult > slot_du) {
                    alert(`The remaining amount: `+slot_du);
                    $("#hien-gia-adult").text('0');
                    $("#adult").val('0');

                }else{
                    $("#hien-gia-adult").html(adult+`*`+formatter.format(gia_ve));
                }
                
            });

            $(".qty1").on("keyup", function(){
                let total= 0;
                let so_luong = parseInt($("#adult").val()) + parseInt($("#children").val());
                    if (so_luong > slot_du) {
                        alert(`Slot chỉ còn dư: `+slot_du);
                        $("#hien-gia-adult").text('0');
                        $("#adult").val('0');
                        $("#hien-gia-children").text('0');
                        $("#children").val('0');
                }
                total += parseInt(($("#adult").val()*gia_ve)) + parseInt(($("#children").val()*gia_ve/2));
                if (isNaN(total)==false){
                    $("#result").html(formatter.format(total));
                    
                }else{
                    $("#result").html('Lỗi')
                    isNaN($("#adult").val()) ?  $("#adult").css('border','1px solid red'):$("#adult").css('border','1px solid black');
                    isNaN($("#children").val()) ? $("#children").css('border','1px solid red'):$("#children").css('border','1px solid black');
                }
                
                    
            });
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
