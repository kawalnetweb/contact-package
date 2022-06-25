<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-4">
        <h4>Contact Us</h4>
        <div class="row">
            {{-- contact us --}}
            <div class="col-md-6">
                @if (\Session::has('success'))
                    <p class="alert alert-success">{{ \Session::get('success') }}</p>
                @endif
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="" class="form-label fw-bold">Name <span class="text-danger">*</span></label>
                        <input type="text" value="" class="form-control" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group mb-2">
                        <label for="" class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                        <input type="email" value="" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group mb-2">
                        <label for="" class="form-label fw-bold">Phone </label>
                        <input type="text" value="" class="form-control" name="phone" placeholder="Enter Phone">
                    </div>
                    <div class="form-group mb-2">
                        <label for="" class="form-label fw-bold">Messagge <span class="text-danger">*</span></label>
                        <textarea name="message" class="form-control" id="" cols="30" rows="4"></textarea>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Send Message">
                </form>
            </div>
            {{-- google map --}}
            <div class="col-md-6">
                {!! config('contact.google_embed_map') !!}
            </div>
        </div>

    </div>
</body>
</html>
