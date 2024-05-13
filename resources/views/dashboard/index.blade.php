@extends('frame.main')
@section('content')
    <h1 class="mb-5">Dashboard</h1>

    <div class="row">
        <div class="col-xl-7 col-md-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body d-flex justify-content-between">Jumlah Produk <span
                                class="fw-bold my-auto">{{ $products->count() }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body d-flex justify-content-between">Jumlah Kategori <span
                                class="fw-bold my-auto">{{ $categories->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-md-12">
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            let products = {{ json_encode($products->count()) }}
            let categories = {{ json_encode($categories->count()) }}
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Produck', 'Kategori'],
                    datasets: [{
                        label: 'Jumlah',
                        data: [products, categories],
                        borderWidth: 1
                    }],
                    backgroundColor: [
                        '#28a754',
                        '#dc3545'
                    ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {

                    }
                }
            });
        </script>
    @endpush
@endsection
