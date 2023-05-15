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
                    <label for="province_id">Province</label>
                    <select class="form-control select2" id="province_id" name="province_id" style="width: 100%;">
                        <option value="">Select Province</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province->id }}" {{ $province->id == $food->province_id ? 'selected' : '' }}>{{ $province->name }}</option>
                        @endforeach
                    </select>
                    @error('province_id') <span class="text-danger"> {{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="regency_id">Regency</label>
                    <select class="form-control" id="regency_id" name="regency_id" style="width: 100%;">
                        <option value="">Select Regency</option>
                        @foreach ($food->regencies as $regency)
                            <option value="{{ $regency->id }}" {{ $regency->id == $food->regency_id ? 'selected' : '' }}>{{ $regency->name }}</option>
                        @endforeach
                    </select>
                    @error('regency_id') <span class="text-danger"> {{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                  <label for="food_desc">Food Description</label>
                  <textarea name="food_desc" id="food_desc" cols="30" rows="10" class="form-control" placeholder="Food Description">{{ $food->food_desc }}</textarea>
                  @error('food_desc') <span class="text-danger"> {{ $message }}</span> @enderror
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
