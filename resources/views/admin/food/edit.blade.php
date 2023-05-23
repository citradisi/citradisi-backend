@extends('admin.admin_master')

@section('breadcrumb')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('food.index') }}">Food</a></li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@section('admin')
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Food Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('food.edit', $food->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="card-body">
                <div class="form-group">
                  <label for="food_name">Food Name</label>
                  <input type="text" class="form-control" name="food_name" id="food_name" placeholder="Food Name" value="{{ $food->food_name }}">
                  @error('food_name') <span class="text-danger"> {{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="food_category">Food Category</label>
                    <input type="text" class="form-control" name="food_category" id="food_category" placeholder="Food Name" value="{{ $food->food_category }}">
                    @error('food_category') <span class="text-danger"> {{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="food_material">Food Material</label>
                    <textarea name="food_material" id="food_material" cols="30" rows="10" class="form-control" placeholder="Food Description">{{ $food->food_material }}</textarea>
                    @error('food_material') <span class="text-danger"> {{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="food_make">Food Make</label>
                    <textarea name="food_make" id="food_make" cols="30" rows="10" class="form-control" placeholder="Food Description">{{ $food->food_make }}</textarea>
                    @error('food_make') <span class="text-danger"> {{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="food_image">Food Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="food_image" id="food_image">
                            <label class="custom-file-label" for="food_image">Choose file</label>
                        </div>
                    </div>
                    @error('food_image') <span class="text-danger"> {{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <img id="showImage" class="img-thumbnail mt-2" src="{{ $disk->url($food->food_image) }}" alt="Image Show">
                </div>
                <!-- end row -->

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#food_image').change(function(e) {
            const reader = new FileReader();
            reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
        $('#province_id').select2()
        $('#regency_id').select2();
        $(document).ready(function() {
            $('#province_id').on('change', function () {
                var id_province = this.value;
                $("#regency_id").html('');
                $.ajax({
                    url: "{{url('api/fetch-regency')}}",
                    type: "POST",
                    data: {
                        province_id: id_province,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#regency_id').html('<option value="">Select Regency</option>');
                        $.each(result.regency, function (key, value) {
                            $("#regency_id").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        })
    })

</script>
@endsection
