<x-admin>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">product: {{ $product->id }}</h1>
  </div>

  <a href="/admin/product" class="btn btn-primary mb-3"><i class="fas fa-plus"> Back</i></a>
  <a href="/admin/product/update-form/{{$product->id}}" class="btn btn-success mb-3"><i class="fas fa-plus"> Update</i></a>
  <a href="#" class="btn btn-danger mb-3" id="delete"><i class="fas fa-plus"> Delete</i></a>

  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <th>Id</th>
            <td id="product-id">{{ $product->id }}</td>
          </tr>
          <tr>
            <th>Nama Produk</th>
            <td>{{ $product->name }}</td>
          </tr>
          <tr>
            <th>Deskripsi</th>
            <td>{{ $product->description }}</td>
          </tr>
          <tr>
            <th>Harga</th>
            <td>{!! $product->price !!}</td>
          </tr>
          <tr>
            <th>Link produk</th>
            <td>{!! $product->link !!}</td>
          </tr>
          <tr>
            <th>Popular</th>
            <td>{{ $product->isPopular }}</td>
          </tr>
          <tr>
            <th>Image Preview</th>
            <td><img src="/images/product/{{$product->id}}_preview.{{$product->imageExtension}}" class="img-fluid" alt="{{$product->id}}_preview"></td>
          </tr>
          <tr>
            <th>Image Content</th>
            <td><img src="/images/product/{{$product->id}}_content.{{$product->imageExtension}}" class="img-fluid" alt="{{$product->id}}_content"></td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  @push('scripts')
  <script type="text/javascript">
    $(document).on("click", "#delete", (e) => {
      e.preventDefault(e);
      var id = $('#product-id').text();

      if (confirm('Are you sure want to delete?')) {
        $.post("/admin/product/delete", {
            id: id,
            _token: "{{ csrf_token() }}"
          })
          .done(function(data) {
            alert("Data deleted");
            location.replace('/admin/product')
          });
      }
    });
  </script>
  @endpush

</x-admin>