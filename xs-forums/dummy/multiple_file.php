<label for="input-folder-3">Select files/folders</label>
<div class="file-loading">
    <input id="input-folder-3" name="input-folder-3[]" type="file" multiple>
</div>
<script>
$(document).ready(function() {
    $("#input-folder-3").fileinput({
        uploadUrl: "/file-upload-batch/2",
        hideThumbnailContent: true // hide image, pdf, text or other content in the thumbnail preview
    });
});
</script>