

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles.css') }}" /> 
    <title>Upload Page</title>
</head>
<body>
    <div class="container">
        <form method="POST" enctype="multipart/form-data" action="{{ route('subir-imagen') }}">
            @csrf
            <div class="row justify-content-lg-center ">
                <div class="col-md-6 drag-card " id="dropContainer" >
                    Suelte o arrastre imagenes para subirse
                    <input name="img" class="p-2" type="file" id="fileInput" >
                </div>
            </div>
            <div class="row justify-content-lg-center ">
                <div>
                    <button type="submit" class="btn btn-success" id="buttonUpload">Enviar</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        var dropContainer = document.getElementById('dropContainer');
        var uploadButton = document.getElementById('buttonUpload');
        dropContainer.ondragover = dropContainer.ondragenter = function(evt) {
            evt.preventDefault();
        };
        dropContainer.ondrop = function(evt) {
            
            var fileInput = document.getElementById('fileInput'); 
            fileInput.files = evt.dataTransfer.files;

            const dT = new DataTransfer();
            dT.items.add(evt.dataTransfer.files[0]);
            fileInput.files = dT.files;

            evt.preventDefault();
            uploadButton.disabled = false;
        };

    </script>
</body>
</html>