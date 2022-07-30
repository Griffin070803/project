<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/dist/js/demo.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function(){
    var value_children = parseInt($("#children_value").val());
    var value_adult = parseInt($("#adult_value").val());
    var gia_ve = parseInt($("#gia-tien").text());
    var sum = parseInt($('#sum').val());
    var slot = parseInt($('#slot').val());
    var slot_du = slot - sum;
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        minimumFractionDigits: 0
    });
    //children
    $("#children").keyup(function(){
        var children = $(this).val();
        if (isNaN(children)|| children < 0) {
            $("#so-tien-tre-em").text(`Children: `+value_children+`*`+formatter.format(gia_ve/2));
            $("#children").val(value_children);
                }else{
                    if (children > slot_du) {
                    alert(`The remaining amount: `+slot_du);
                    $("#so-tien-tre-em").text(`Children: `+value_children+`*`+formatter.format(gia_ve/2));
                    $("#children").val(value_children);

                }else{
                    $("#so-tien-tre-em").html(`Children: `+children+`*`+formatter.format(gia_ve/2));
                }
                }
    });
   //adult
    $("#adult").keyup(function(){
        var adult = $(this).val();
        
        if (isNaN(adult) || adult < 0) {
            $("#so-tien-nguoi-lon").text(`Adult :`+value_adult+`*`+formatter.format(gia_ve));
            $("#adult").val(value_adult);
                }else {
                    if (adult > slot_du) {
                    alert(`The remaining amount: `+slot_du);
                    $("#so-tien-nguoi-lon").text(`Adult :`+value_adult+`*`+formatter.format(gia_ve));
                    $("#adult").val(value_adult);
                }else{
                    $("#so-tien-nguoi-lon").html(`Adult :`+adult+`*`+formatter.format(gia_ve));
                }
                }
    });
    $(".qty1").on("keyup", function(){
        let total= 0;
                let so_luong = parseInt($("#adult").val()) + parseInt($("#children").val());
                    if (so_luong > slot_du) {
                        alert(`The remaining amount: `+slot_du);
                        $("#so-tien-nguoi-lon").text(value_adult+`*`+formatter.format(gia_ve));
                        $("#adult").val(value_adult);
                        $("#so-tien-tre-em").text(value_children+`*`+formatter.format(gia_ve/2));
$("#children").val(value_children);
                }
total += parseInt(($("#adult").val()*gia_ve)) + parseInt(($("#children").val()*gia_ve/2));
                if (isNaN(total)==false){
                    $("#so-tien-moi").html(formatter.format(total));
                    
                }else{
                    $("#so-tien-moi").html('0');
                    alert('Children or Adult error');
                    isNaN($("#adult").val()) ?  $("#adult").css('border','1px solid red'):$("#adult").css('border','1px solid black');
                    isNaN($("#children").val()) ? $("#children").css('border','1px solid red'):$("#children").css('border','1px solid black');
                }
    });
})
</script>
<script src="{{asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
    $(function () {
      bsCustomFileInput.init();
    });
</script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    CKEDITOR.replace('ckeditor',{
        filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('ckeditor1',{  
        filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('ckeditor2',{
        filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('ckeditor3',{
        filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('ckeditor4',{
        filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('ckeditor5',{
        filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
</script>
