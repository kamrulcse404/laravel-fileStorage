<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>File Store</title>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-6">
                <h3>Input Form</h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6">
                <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="title" style="color: #2c2c54">File Title</label>
                        <input type="text" name="title" class="form-control" id="title"
                            placeholder="Enter title" value="{{ old('title') }}" required>
                        @error('title')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label class="form-label" for="Image" style="color: #2c2c54">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-outline-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
