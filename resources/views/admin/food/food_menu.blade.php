@extends('layouts.dashboard')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add Food Menu</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('food.menu.store') }}" method="post">
                        @csrf

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">Food Category<span class="text-danger">*</span> </label>
                                <select name="food_category_id" class="form-control" id="food_category">
                                    <option value="">--Select--</option>
                                    @foreach ($food_categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->food_category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">Food Item<span class="text-danger">*</span> </label>
                                <select name="food_item_id" class="form-control" id="food_item">
                                    <option value="">--Select--</option>
                                </select>
                            </div>
                        </div>

                        {{-- <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">Number Of Person<span class="text-danger">*</span> </label>
                                <select name="number_person_id" class="form-control">
                                    <option value="">--Select--</option>
                                    @foreach ($all_persons as $persons)
                                        <option value="{{ $persons->id }}">{{ $persons->number_person }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="form-label">Booking Type<span class="text-danger">*</span> </label>
                                <select name="booking_type_id" class="form-control">
                                    <option value="">--Select--</option>
                                    @foreach ($all_bookings as $bookings)
                                        <option value="{{ $bookings->id }}">{{ $bookings->booking_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="col-lg-6">
                            <label for="" class="form-label">Price <span class="text-danger">*</span> </label>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="price">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label for="" class="form-label">Discount <span class="text-danger" style="font-size: 11px">(Optional)</span> </label>
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" class="form-control" name="discount">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info">Add Menu</button>
                                </div>
                            </div>
                        </div>

                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer_script')
    <script>
        $('#food_category').change(function(){
            var food_category = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/getfoodcategory',
                type: 'post',
                data:{'food_category':food_category},
                success:function(data){
                    $('#food_item').html(data);
                }
            });
        });
    </script>
@endsection
