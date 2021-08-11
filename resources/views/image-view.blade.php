<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input id="input-id" name="file-data" type="file" multiple class="file" data-min-file-count="1">

<script>
    $(document).ready(function() {
        // initialize with defaults
        $("#input-id").fileinput({
            theme: 'fa',
            uploadUrl: "/image-submit",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val()
                };
            },
        });

        // // with plugin options
        // $("#input-id").fileinput({
        //     'uploadUrl': '/path/to/your-upload-api',
        //     'previewFileType': 'any'
        // });
    });
</script>
