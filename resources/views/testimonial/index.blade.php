<x-admin>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Testimonial</h1>
  </div>

  <a href="/admin/testimonial/create" class="btn btn-success mb-3"><i class="fas fa-plus"> Add</i></a>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="myTable" class="display">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Testi</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($testimonial as $testimonial)
            <tr>
              <td>{{ $testimonial->id }}</td>
              <td>{{ $testimonial->name }}</td>
              <td>{{ $testimonial->testi }}</td>
              <td class="text-center"><a href="/admin/testimonial/{{$testimonial->id}}"><i class="bi-eye"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-admin>