<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
    <title>HTML to PDF</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
           
            <div class="col-md-12 mt-5">
                <div class="card">
                <div class="card-header bg-info">
                        <h6 class="text-white">Paste Your HTML Here</h6>
                    </div>
                    <div class="card-body">
                        <form class="image-upload" method="post" action="{{ url('convertToPDF') }}" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="form-group">
                                
                                <textarea name="html_code" id="html_code" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
                            </div>  
                            <input type="submit" name="submit" class="btn btn-success col-md-12" value="Download PDF">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            height: 500,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            setup: function (editor) {
                editor.on('init', function () {
                     this.setContent(editor.value);
                });
            }
        });
        </script>
</body>
</html>