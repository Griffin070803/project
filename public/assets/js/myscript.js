$(document).ready(function() {
    $("#addmore").click(function() {
        $("div").append(`
        <div class="form-group  card-body">
            <label >Image</label>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose File</label>
            </div>
        </div>`);
    })
});