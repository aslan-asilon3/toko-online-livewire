<div>
    <div class="container">
        <h3>Product</h3>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif



            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0?>
                    @foreach ($products as $product)
                    <?php $no++ ?>
                    <tr>
                        <th scope="row">{{ $no }}</th>
                        <td>{{ $product->title }}</td>
                        <td>Rp{{ number_format($product->price,2,",",".") }}</td>
                        <td>
                            <button class="btn btn-sm btn-info text-white">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
                </table>

        </div>

</div>
