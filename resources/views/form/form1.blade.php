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

      
    
        <form class="my-4" action="{{ route('form.form1') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" label="Title" placeholder="Enter your title" :req="true"  />
            <x-form.input name="image" type="file" label="Image" :req="true" />
            <img src="" width="120" id="avatar" alt="">
            <x-form.textarea name="content" label="Content" placeholder="Enter your content" />
            <x-form.input name="duration" type="number" label="Duration" :req="true" />
            <x-form.input name="price" type="number" label="Price" :req="true" />
            <x-form.input name="sail_price" type="number" label="Sail Price" />
            <x-form.select name="instructor_id" label="Instructor">
                @foreach ($instructors as $id => $instructor)
                    <option value="{{ $id }}">{{ $instructor }}</option>
                @endforeach
            </x-form.select>


            <button type="submit" class="btn btn-primary my-4">send</button>
           
            {{-- duration price sail price instructor --}}
        </form>
    </div>

    <script>
        let inputs = document.querySelectorAll('input');
        inputs.forEach(el => {
            el.addEventListener('keyup', function() {
                if (el.value.length > 0) {
                    // this.nextElementSibling.classList.add('d-none'); el. === this. 
                    el.nextElementSibling.classList.add('d-none');
                    el.classList.remove('is-invalid');
                    el.classList.add('is-valid');
                } else {
                    this.nextElementSibling.classList.remove('d-none');
                    this.classList.add('is-invalid');
                    this.classList.remove('is-valid');
                }
            });
        });


            let imageInput = document.querySelector('input[name="image"]');
    
            imageInput.addEventListener('change', function() {
                const reader = new FileReader();

                    reader.addEventListener('load', ()=> {
                        document.getElementById('avatar').setAttribute('src', reader.result);
                    })
                    reader.readAsDataURL(this.files[0]);
            });

    </script>
</body>

</html>
