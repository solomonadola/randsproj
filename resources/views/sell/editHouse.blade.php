@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li>
                    <a href="{{ route('home') }}">
                        <i class="la la-dashboard"></i>

                        <span>Dashboard</span>
                    </a>

                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="la la-files-o"></i>
                        <span> Manage Rent </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="{{ route('viewRenter') }}">view Rent</a></li>
                        <li><a href="{{ route('addrentalhouse') }}">add rent house</a></li>

                    </ul>
                </li>

             <li class="submenu">
                        <a href="#">
                            <i class="la la-pie-chart"></i>
                            <span> Manage Sell </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('viewSeller') }}">View Sell</a></li>
                            <li><a href="{{ route('addsellhouse') }}">Add Sell House</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-user-alt"></i>
                            <span> Manage customer </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('addcustomer') }}">Add Customer</a></li>
                            <li><a href="{{ route('viewcustomer') }}">View Customer </a></li>
                        </ul>
                    </li>
                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span> Houses </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
<!-- Page Wrapper -->
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>

                            @endif
                            <h3 class="page-title">update house</h3>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <form action="{{ url('/house/submit/'.$id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">house title</label>
                                <input name="title" class="form-control" type="text" value="{{ $data->title }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="location">house location</label>
                                <input name="location" class="form-control" type="text" value="{{ $data->location }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="for">for</label>
                                <select name="for" class="form-control">
                                    <option value="rental">rental</option>
                                    <option value="sell">sell</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="status">status</label>
                                <select name="status" class="form-control">
                                    @if ($data->status=='rented')
                                    <option value="rented">rented</option>
                                    <option value="not rented">not rented</option>
                                    @else
                                    <option value="not rented">not rented</option>
                                    <option value="rented">rented</option>
                                    @endif


                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="size">size</label>
                                <input name="size" class="form-control" value="{{ $data->size }}" type="text">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md- col-lg-3">
                            <div class="form-group">
                                <label for="bedrooms">bedrooms</label>
                                <input name="bedrooms" class="form-control" value="{{ $data->bed_rooms }}" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="bathrooms">bathrooms</label>
                                <input name="bathrooms" class="form-control" value="{{ $data->bath_rooms }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="description">description</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control " value=""
                                    type="text">{{ $data->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-sm-8">

                            <div class="container">
                                <div class="mySlides">
                                    <div class="numbertext">1 / 6</div>
                                    <img src="{{ '/assets/house_images/house2.jpg' }}" style="width:70%; ">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">2 / 6</div>
                                    <img src="{{ '/assets/house_images/house4.jpg' }}" style="width:70%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">3 / 6</div>
                                    <img src="{{ '/assets/house_images/house5.jpg' }}" style="width:70%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">4 / 6</div>
                                    <img src="{{ '/assets/house_images/house6.jpg' }}" style="width:70%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">5 / 6</div>
                                    <img src="{{ '/assets/house_images/house7.jpg' }}" style="width:70%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">6 / 6</div>
                                    <img src="{{ '/assets/house_images/house5.jpg' }}" style="width:70%">
                                </div>

                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                <a class="next" onclick="plusSlides(1)">❯</a>



                                <div class="row">
                                    <div class="column">
                                        <img class="demo cursor" src="{{ '/assets/house_images/house2.jpg' }}"
                                            style="width:100%" onclick="currentSlide(1)">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="{{ '/assets/house_images/house4.jpg' }}"
                                            style="width:100%" onclick="currentSlide(2)">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="{{ '/assets/house_images/house5.jpg' }}"
                                            style="width:100%" onclick="currentSlide(3)">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="{{ '/assets/house_images/house6.jpg' }}"
                                            style="width:100%" onclick="currentSlide(4)">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="{{ '/assets/house_images/house7.jpg' }}"
                                            style="width:100%" onclick="currentSlide(5)">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="{{ '/assets/house_images/house5.jpg' }}"
                                            style="width:100%" onclick="currentSlide(6)">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label for="image">update image</label>
                                <input name="image[]" class="form-control" type="file" multiple>
                            </div>
                        </div>

                    </div>

                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</div>
<!-- /Page Wrapper -->
@section('script')

{{-- update js --}}
<script>
    $(document).on('click','.edit_appraisal',function()
        {
            var _this = $(this).parents('tr');
            $('#e_id').val(_this.find('.id').text());
            $('#e_date').val(_this.find('.date').text());

            var name = (_this.find(".name").text());
            var _option = '<option selected value="' + name + '">' + _this.find('.name').text() + '</option>'
            $( _option).appendTo("#e_name");

            var designation = (_this.find(".designation").text());
            var _option = '<option selected value="' + designation + '">' + _this.find('.designation').text() + '</option>'
            $( _option).appendTo("#e_designation");

            var customer_experience = (_this.find(".customer_experience").text());
            var _option = '<option selected value="' + customer_experience + '">' + _this.find('.customer_experience').text() + '</option>'
            $( _option).appendTo("#e_customer_experience");

            var marketing = (_this.find(".marketing").text());
            var _option = '<option selected value="' + marketing + '">' + _this.find('.marketing').text() + '</option>'
            $( _option).appendTo("#e_marketing");

            var management = (_this.find(".management").text());
            var _option = '<option selected value="' + management + '">' + _this.find('.management').text() + '</option>'
            $( _option).appendTo("#e_management");

            var administration = (_this.find(".administration").text());
            var _option = '<option selected value="' + administration + '">' + _this.find('.administration').text() + '</option>'
            $( _option).appendTo("#e_administration");

            var presentation_skill = (_this.find(".presentation_skill").text());
            var _option = '<option selected value="' + presentation_skill + '">' + _this.find('.presentation_skill').text() + '</option>'
            $( _option).appendTo("#e_presentation_skill");

            var quality_of_work = (_this.find(".quality_of_work").text());
            var _option = '<option selected value="' + quality_of_work + '">' + _this.find('.quality_of_work').text() + '</option>'
            $( _option).appendTo("#e_quality_of_work");

            var efficiency = (_this.find(".efficiency").text());
            var _option = '<option selected value="' + efficiency + '">' + _this.find('.efficiency').text() + '</option>'
            $( _option).appendTo("#e_efficiency");

            var integrity = (_this.find(".integrity").text());
            var _option = '<option selected value="' + integrity + '">' + _this.find('.integrity').text() + '</option>'
            $( _option).appendTo("#e_integrity");

            var professionalism = (_this.find(".professionalism").text());
            var _option = '<option selected value="' + professionalism + '">' + _this.find('.professionalism').text() + '</option>'
            $( _option).appendTo("#e_professionalism");

            var team_work = (_this.find(".team_work").text());
            var _option = '<option selected value="' + team_work + '">' + _this.find('.team_work').text() + '</option>'
            $( _option).appendTo("#e_team_work");

            var critical_thinking = (_this.find(".critical_thinking").text());
            var _option = '<option selected value="' + critical_thinking + '">' + _this.find('.critical_thinking').text() + '</option>'
            $( _option).appendTo("#e_critical_thinking");

            var conflict_management = (_this.find(".conflict_management").text());
            var _option = '<option selected value="' + conflict_management + '">' + _this.find('.conflict_management').text() + '</option>'
            $( _option).appendTo("#e_conflict_management");

            var attendance = (_this.find(".attendance").text());
            var _option = '<option selected value="' + attendance + '">' + _this.find('.attendance').text() + '</option>'
            $( _option).appendTo("#e_attendance");

            var ability_to_meet_deadline = (_this.find(".ability_to_meet_deadline").text());
            var _option = '<option selected value="' + ability_to_meet_deadline + '">' + _this.find('.ability_to_meet_deadline').text() + '</option>'
            $( _option).appendTo("#e_ability_to_meet_deadline");

            var status = (_this.find(".status").text());
            var _option = '<option selected value="' + status + '">' + _this.find('.status').text() + '</option>'
            $( _option).appendTo("#e_status");
        });
</script>

{{-- delete model --}}
<script>
    $(document).on('click','.delete_appraisal',function()
    {
        var _this = $(this).parents('tr');
        $('.e_id').val(_this.find('.id').text());
    });
</script>

<script>
    // select auto id and email
        $('#name').on('change',function()
        {
            $('#employee_id').val($(this).find(':selected').data('employee_id'));
        });
</script>

<script>
    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
@endsection


@endsection
