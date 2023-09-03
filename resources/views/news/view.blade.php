<x-admin>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">News: {{ $news->id }}</h1>
  </div>

  <a href="/news" class="btn btn-primary mb-3"><i class="fas fa-plus"> Back</i></a>
  <a href="/news/update-form/{{$news->id}}" class="btn btn-success mb-3"><i class="fas fa-plus"> Update</i></a>
  <a href="#" class="btn btn-danger mb-3" id="delete"><i class="fas fa-plus"> Delete</i></a>

  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <th>Id</th>
            <td id="news-id">{{ $news->id }}</td>
          </tr>
          <tr>
            <th>Title</th>
            <td>{{ $news->title }}</td>
          </tr>
          <tr>
            <th>Preview</th>
            <td>{{ $news->preview }}</td>
          </tr>
          <tr>
            <th>Content</th>
            <td>{!! $news->content !!}</td>
          </tr>
          <tr>
            <th>Image</th>
            <td><img src="/images/news/{{$news->id}}.png" class="img-fluid" alt="{{$news->id}}"></td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  @push('scripts')
  <script type="text/javascript">
    $(document).on("click", "#delete", (e) => {
      e.preventDefault(e);
      var id = $('#news-id').text();

      if (confirm('Are you sure want to delete?')) {
        $.post("/news/delete", {
            id: id,
            _token: "{{ csrf_token() }}"
          })
          .done(function(data) {
            alert("Data deleted");
            location.replace('/news')
          });
      }
    });
  </script>
  @endpush

</x-admin>