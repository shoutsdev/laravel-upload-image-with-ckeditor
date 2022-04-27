<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Ckeditor Image Upload Example - shouts.dev</title>
</head>
<body>

<h1>Laravel 9 Ckeditor Image Upload Example - shouts.dev</h1>
<textarea name="editor1"></textarea>

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

</body>
</html>
