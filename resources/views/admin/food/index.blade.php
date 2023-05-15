@extends('admin.admin_master')

@section('breadcrumb')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Food</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Food</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('admin')
<div class="row">
    <div class="col-12">
        <a href="{{ route('food.create') }}" class="btn btn-primary mb-1">Create</a>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Food Index</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 15%">Food Image</th>
                    <th>Food Name</th>
                    <th>Province</th>
                    <th>Regency</th>
                    <th>Food Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($foods as $key => $food)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>
                        <a href="{{ $disk->url($food->food_image) }}" data-toggle="lightbox" data-title="{{ $food->food_name }}">
                            <img src="{{ $disk->url($food->food_image) }}" alt="Food Image" class="img-thumbnail">
                        </a>
                    </td>
                    <td>{{ $food->food_name }}</td>
                    <td>{{ $food->province->name }}</td>
                    <td>{{ $food->regency->name }}</td>
                    <td>{{ $food->food_desc }}</td>
                    <td>
                        <a href="{{ route('food.edit', $food->id) }}" class="btn btn-success" title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('food.destroy', $food->id) }}" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                <th>#</th>
                <th>Food Image</th>
                <th>Food Name</th>
                <th>Province</th>
                <th>Regency</th>
                <th>Food Description</th>
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
