@extends('frame.main')
@section('content')
    <h1>Daftar Kategori <a href="/categories/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a></h1>
    <table class="table text-center" id="categories">
        <thead>
            <tr>
                <th class="text-center" scope="col">#</th>
                <th class="text-center" scope="col">Nama kategori</th>
                <th class="text-center" scope="col">Deskripsi</th>
                <th class="text-center" scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ Str::limit($category->description, 20) ?? '-' }}</td>
                    <td>
                        <a href="/categories/{{ $category->id }}" class="badge btn bg-primary px-1"><i
                                class="fa-solid fa-circle-info"></i></a>
                        <a href="/categories/{{ $category->id }}/edit" class="badge btn bg-info px-1"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        @csrf
                        <button id="delButton{{ $category->id }}" class="badge btn bg-danger px-1"><i
                                class="fa-solid fa-trash"></i></button>
                    </td>
                    @push('script')
                        <script>
                            $('#delButton' + {{ $category->id }}).click(() => {
                                Swal.fire({
                                    title: "Apakah anda yakin?",
                                    text: "Data yang dihapus tidak dapat dikembalikan!",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#3085d6",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "Hapus",
                                    cancelButtonText: "Batal",
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        $.ajax({
                                            url: '/categories/' + {{ $category->id }},
                                            type: 'DELETE',
                                            headers: {
                                                "X-CSRF-TOKEN": $('input[name="_token"]').val(),
                                            },
                                            success: function(response) {
                                                // Handle success response
                                                // Set a value in session storage
                                                console.log(response);
                                                sessionStorage.setItem('success', 'Produk berhasil dihapus');
                                                // redirect to /product
                                                window.location.href = '/categories';

                                            },
                                            error: function(xhr, status, error) {
                                                // Handle error response
                                                console.error(xhr.responseText);
                                            }
                                        });
                                    }
                                });
                            })
                        </script>
                    @endpush
                </tr>
            @endforeach
        </tbody>
    </table>
    @push('script')
        <script>
            $("#categories").DataTable({
                columnDefs: [{
                    orderable: false,
                    targets: 3
                }],
                paging: true,
                lengthMenu: [5, 10, 20, {
                    label: "Semua",
                    value: -1
                }],
                pageLength: 5,
                language: {
                    decimal: "",
                    searchPlaceholder: "Cari Data",
                    emptyTable: "Tabel kosong",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
                    infoFiltered: "(filtered from _MAX_ total entries)",
                    infoPostFix: "",
                    thousands: ",",
                    lengthMenu: "Tampilkan _MENU_ data",
                    loadingRecords: "Loading...",
                    processing: "",
                    search: "Cari:",
                    zeroRecords: "Data tidak ditemukan",
                    paginate: {
                        first: "<<",
                        last: ">>",
                        next: ">",
                        previous: "<",
                    },
                    aria: {
                        orderable: "Order by this column",
                        orderableReverse: "Reverse order this column",
                    },
                },
            });
            if (sessionStorage.getItem('success')) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: sessionStorage.getItem('success')
                });
                sessionStorage.removeItem('success');
            }
        </script>
    @endpush
    @if (session('success'))
        @push('script')
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: {!! json_encode(session('success')) !!}
                });
            </script>
        @endpush
    @endif
@endsection
