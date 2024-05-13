@extends('frame.main')
@section('content')
    <h1>Tambah Kategori</h1>
    <form action="/categories/{{ $data->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" onkeyup="validate('name')" value="{{ $data->name }}"
                                id="name" name="name" placeholder="Nama Produk">
                            <div class="valid-feedback">
                                Input berhasil divalidasi.
                            </div>
                            <div class="invalid-feedback" id="nameerror">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="description" rows="4" name="description" placeholder="Deskripsi Produk">{{ $data->description }}</textarea>
                </div>
                <div class="mb-3 ">
                    <a href="/categories" class="btn btn-outline-primary">Kembali</a>
                    <button type="submit" class=" btn btn-primary disabled">Simpan</button>
                </div>
            </div>
        </div>
    </form>
    @push('script')
        <script>
            function valid() {
                let name = $('input[name="name"]').hasClass("is-valid");
                if (name) {
                    $("button").removeClass("disabled");
                } else {
                    $("button").addClass("disabled");
                }
            }
            // input validation
            function validate(data) {
                let input
                input = $('input[name="' + data + '"]').val();
                let form;
                form = {
                    name: input,
                };
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
        </script>
    @endpush
@endsection
