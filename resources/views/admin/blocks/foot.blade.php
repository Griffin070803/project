<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    var gia_ve = parseInt($("#gia-tien").text());
    
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        minimumFractionDigits: 0
    });
    //validate form
    $("#children").keyup(function(){
        var children = $(this).val();
        $("#so-tien-tre-em").html(`Trẻ em: `+children+`*`+formatter.format(gia_ve/2))
    });
   
    $("#adult").keyup(function(){
        var adult = $(this).val();
        $("#so-tien-nguoi-lon").html(`Người Lớn: `+adult+`*`+formatter.format(gia_ve));
        
        
    });

    // $("#tinh-tien").click(function(){
    //     let total= 0;
    //     total += ($("#adult").val()*gia_ve) + ($("#children").val()*gia_ve/2)

    //     if (isNaN(total)==false){
    //         $("#so-tien-moi").html(formatter.format(total))
    //     }else{
    //         $("#so-tien-moi").html('Lỗi')
    //         isNaN($("#so-tien-nguoi-lon").val())?  $("#so-tien-nguoi-lon").css('border','1px solid red'):$("#so-tien-nguoi-lon").css('border','1px solid black')
    //         isNaN($("#so-tien-tre-em").val()) ? $("#so-tien-tre-em").css('border','1px solid red'):$("#so-tien-tre-em").css('border','1px solid black')
    //         // if (isNaN($("#so-tien-nguoi-lon").val())) {
    //         //     $("#so-tien-nguoi-lon").css('border','1px solid red')
    //         // }else {
    //         //     $("#so-tien-nguoi-lon").css('border','1px solid black')
    //         // }
    //         // if (isNaN($("#so-tien-tre-em").val())) {
    //         //     $("#so-tien-tre-em").css('border','1px solid red')
    //         // }else { 
    //         //     $("#so-tien-tre-em").css('border','1px solid black')
    //         // }
    //     }
    //     // }
    // })
    $(".qty1").on("keyup", function(){
        let total= 0;
        total += ($("#adult").val()*gia_ve) + ($("#children").val()*gia_ve/2)

        if (isNaN(total)==false){
            $("#so-tien-moi").html(formatter.format(total))
        }else{
            $("#so-tien-moi").html('Lỗi')
            // isNaN($("#adult").val()) ?  $("#adult").css('border','1px solid red'):$("#adult").css('border','1px solid black');
            // isNaN($("#children").val()) ? $("#children").css('border','1px solid red'):$("#children").css('border','1px solid black');
            if (isNaN($("#adult").val())) {
                $("#adult").css('border','1px solid red');
            }else {
$("#adult").css('border','1px solid black');
            };
            if (isNaN($("#children").val())) {
                $("#children").css('border','1px solid red');
            }else { 
                $("#children").css('border','1px solid black');
            };
        }
    });
})
</script>

<script type="text/javascript">
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
    CKEDITOR.replace('ckeditor3');
    CKEDITOR.replace('ckeditor4');
    CKEDITOR.replace('ckeditor5');
</script>