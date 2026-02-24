<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="my-4">Form Course</h1>

        {{-- @include('partial.errors') --}}



        <form class="my-4" action="{{ route('form.form2') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="image" label="Image" placeholder="Enter your image" type="file" />
            <button type="submit" class="btn btn-primary my-4">send</button>


        </form>
    </div>


</body>

</html>
