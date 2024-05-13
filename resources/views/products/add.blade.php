@extends('frame.main')
@section('content')
    <h1>Tambah Produk</h1>
    <form action="/products" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" onkeyup="validate('name')" id="name"
                                name="name" placeholder="Nama Produk">
                            <div class="valid-feedback">
                                Input berhasil divalidasi.
                            </div>
                            <div class="invalid-feedback" id="nameerror">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="price" class="form-label">Harga Produk</label>
                            <input type="text" class="form-control" id="price" onkeyup="validate('price')"
                                name="price" placeholder="Harga Produk">
                            <div class="valid-feedback">
                                Input berhasil divalidasi.
                            </div>
                            <div class="invalid-feedback" id="priceerror">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Foto Produk</label>
                    <div id="imagePreview" class="col-6 mb-3"></div>
                    <input class="form-control" type="file" id="photo" onchange="validate('photo')" name="photo">
                    <div class="valid-feedback">
                        Input berhasil divalidasi.
                    </div>
                    <div class="invalid-feedback" id="photoerror">
                        Looks good!
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="description" rows="4" name="description" placeholder="Deskripsi Produk"></textarea>
                </div>
                <div class="mb-3 ">
                    <a href="/products" class="btn btn-outline-primary">Kembali</a>
                    <button type="submit" class=" btn btn-primary disabled">Simpan</button>
                </div>
            </div>
        </div>
    </form>
    @push('script')
        <script>
            function valid() {
                let name = $('input[name="name"]').hasClass("is-valid");
                let price = $('input[name="price"]').hasClass("is-valid");
                let photo = !$('input[name="photo"]').hasClass("is-invalid");
                if (name && price && photo) {
                    $("button").removeClass("disabled");
                } else {
                    $("button").addClass("disabled");
                }
            }
            // input validation
            function validate(data) {
                let input
                input = $('input[name="' + data + '"]').val();
                if (data == 'photo') {
                    let fileInput = $('input[name="' + data + '"]')[0];
                    let file = fileInput.files[0];
                    input = new FormData();
                    input.append('file', file);
                    $.ajax({
                        url: "/checkfile",
                        type: "POST",
                        headers: {
                            "X-CSRF-TOKEN": $('input[name="_token"]').val(),
                        },
                        contentType: false,
                        processData: false,
                        data: input,
                        success: function(result) {
                            var reader = new FileReader();
                            reader.onload = function(event) {
                                $('#imagePreview').html('<img width="100%" src="' + event.target.result +
                                    '" class="rounded-2 shadow-lg">');
                            }
                            reader.readAsDataURL(file);
                            $('input[name="' + data + '"]').removeClass("is-invalid");
                            $('input[name="' + data + '"]').addClass("is-valid");
                            valid();
                        },
                        error: function(xhr, status, error) {
                            // console.log(xhr, status, error);
                            // Handle error response
                            let errors = xhr.responseJSON.errors;
                            // // Display validation errors to the user
                            $('input[name="' + data + '"]').removeClass("is-valid");
                            $('input[name="' + data + '"]').addClass("is-invalid");
                            $('#imagePreview').html('')
                            $("#" + data + "error").html(errors.file[0]);
                            valid();
                        },
                    });
                } else {
                    let form;
                    if (data == "name") {
                        form = {
                            name: input,
                        };
                    } else if (data == "price") {
                        form = {
                            price: input,
                        };
                    }
                    $.ajax({
                        url: "/check",
                        type: "POST",
                        headers: {
                            "X-CSRF-TOKEN": $('input[name="_token"]').val(),
                        },
                        data: form,
                        success: function(result) {
                            $('input[name="' + data + '"]').removeClass("is-invalid");
                            $('input[name="' + data + '"]').addClass("is-valid");
                            valid();
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr, status, error);
                            // Handle error response
                            let errors = xhr.responseJSON.errors;

                            // Display validation errors to the user
                            $('input[name="' + data + '"]').removeClass("is-valid");
                            $('input[name="' + data + '"]').addClass("is-invalid");
                            $("#" + data + "error").html(Object.values(errors)[0]);
                            valid();
                        },
                    });
                }

            }
        </script>
    @endpush
@endsection
