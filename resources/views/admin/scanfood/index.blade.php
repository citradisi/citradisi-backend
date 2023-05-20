@extends('admin.admin_master')

@section('breadcrumb')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Food Scan</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Food Scan</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('admin')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Food Scan Index</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 15%">Food Image</th>
                    <th>Food Name</th>
                    <th>User Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($scan_foods as $key => $scan_food)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>
                        <a href="{{ $disk->url($scan_food->scan_food_image) }}" data-toggle="lightbox" data-title="{{ $scan_food->food->food_name }}">
                            <img src="{{ $disk->url($scan_food->scan_food_image) }}" alt="Food Image" class="img-thumbnail">
                        </a>
                    </td>
                    <td>{{ $scan_food->food->food_name }}</td>
                    <td>{{ $scan_food->user->name }}</td>
                    <td>
                        <a href="{{ route('scan_food.destroy', $scan_food->id) }}" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 15%">Food Image</th>
                    <th>Food Name</th>
                    <th>User Name</th>
                    <th>Action</th>
                </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection

@section('js')
    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
@endsection
