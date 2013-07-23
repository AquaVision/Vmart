<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<base href="http://localhost/Vmart/assets/">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/jqfileuploadRealtime/css/style.css">
<link rel="stylesheet" href="bootstrap/jqfileuploadRealtime/css/jquery.fileupload-ui.css">
</head>
<body>

<div class="container">
   
    <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-success fileinput-button">
        <i class="icon-plus icon-white"></i>
        <span>Select files...</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
    </span>
    <br>
    <br>
    <!-- The global progress bar -->
    <div id="progress" class="progress progress-success progress-striped">
        <div class="bar"></div>
    </div>
    <!-- The container for the uploaded files -->
    <div id="files" class="files"></div>
    <br>
    
</div>
    
    
    
    
<script src="jquerylib/jquery-1.10.1.min.js"></script>
<script src="bootstrap/jqfileuploadRealtime/js/vendor/jquery.ui.widget.js"></script>
<script src="bootstrap/jqfileuploadRealtime/js/jquery.iframe-transport.js"></script>
<script src="bootstrap/jqfileuploadRealtime/js/jquery.fileupload.js"></script>
<script>
/*jslint unparam: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = "../Wizardseller/upload";
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
               
                $('<p/>').text(file.name).appendTo('#files');
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>
</body> 
</html>
