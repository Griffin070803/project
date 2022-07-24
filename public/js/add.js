$(document).ready(function(){
    $("#addmore").click(function(){
        $("table").append(`
        <div class="form-group card-body">
        <label>Image</label>
        <input type="file" name="avatar[]" class="form-control" multiple style="height:100%"> 
      </div>
        `)
    })
});