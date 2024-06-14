@extends('pages.layouts.app')
@section('content')
    <!--begin::Content-->
    <div class="mt-5 mt-lg-10 mb-5 mb-lg-10 z-index-2">
        <div class="container">
            <div class="border border-gray-300 rounded p-10">
                <!--begin::Stepper-->
                <div class="stepper stepper-pills" id="booking_step_form">
                    <!--begin::Nav-->
                    <div class="stepper-nav flex-center flex-wrap mb-10">
                        <!--begin::Step 1-->
                        <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                            <!--begin::Wrapper-->
                            <div class="stepper-wrapper d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Step 1
                                    </h3>

                                    <div class="stepper-desc">
                                        Ride Info
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Line-->
                            <div class="stepper-line h-40px"></div>
                            <!--end::Line-->
                        </div>
                        <!--end::Step 1-->

                        <!--begin::Step 2-->
                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                            <!--begin::Wrapper-->
                            <div class="stepper-wrapper d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Step 2
                                    </h3>

                                    <div class="stepper-desc">
                                        Select Vehicle
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Line-->
                            <div class="stepper-line h-40px"></div>
                            <!--end::Line-->
                        </div>
                        <!--end::Step 2-->

                        <!--begin::Step 3-->
                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                            <!--begin::Wrapper-->
                            <div class="stepper-wrapper d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">3</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Step 3
                                    </h3>

                                    <div class="stepper-desc">
                                        Final Details
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Line-->
                            <div class="stepper-line h-40px"></div>
                            <!--end::Line-->
                        </div>
                        <!--end::Step 3-->
                    </div>
                    <!--end::Nav-->

                    <!--begin::Form-->
                    <form class="form mx-auto" novalidate="novalidate" id="booking_step_form_data">
                        @csrf
                        <!--begin::Group-->
                        <div class="mb-5">
                            <!--begin::Step 1-->
                            <div class="flex-column current" data-kt-stepper-element="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label required">Select Service Type</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <select class="form-control" name="service_type" required>
                                                <option value="">Select Service Type</option>
                                                <option value="Airport_pickup">Airport Pickup</option>
                                                <option value="To_airport">To Airport</option>
                                                <option value="Charter">Charter</option>
                                                <option value="Point_to_point">Point to Point</option>
                                                <option value="wedding">Wedding</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Pickup Date</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="date" class="form-control"
                                                        name="pickup_date" value="" required>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Pickup Time</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="time" class="form-control"
                                                        name="pickup_time" value="" required>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>

                                        <!--begin::Input group-->
                                        <div class="fv-row ">
                                            <!--begin::Label-->
                                            <label class="form-label required">Pickup Location</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <div class="input-group">
                                                <input type="text" id="pickupautocomplete" class="form-control"
                                                    name="pickup_location" placeholder="Pick Up Location" value=""
                                                    aria-describedby="basic-addon2" required/>
                                                <span class="input-group-text" id="pickupIcon" style="cursor: pointer;">
                                                    <i class="ki-duotone ki-focus fs-4"><span class="path1"></span><span
                                                            class="path2"></span></i>
                                                </span>

                                                <div class="form-group" id="Pickup_latitudeArea">
                                                    <label>Latitude</label>
                                                    <input type="text" id="pickup_latitude" name="pickup_latitude"
                                                        class="form-control" value="" required>
                                                </div>

                                                <div class="form-group" id="Pickup_longtitudeArea">
                                                    <label>Longitude</label>
                                                    <input type="text" name="pickup_longitude" id="pickup_longitude"
                                                        class="form-control" value="" required>
                                                </div>
                                            </div>
                                            <button type="button" id="add-stop-btn" class="btn text-primary"
                                                onclick="addStop()" style="text-decoration: underline">+ Add Stop</button>

                                            <!--end::Input-->
                                            <!-- Begin::Add Stop Feature -->
                                            <div id="stops-container" class="mb-4 text-end"></div>

                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row ">
                                            <!--begin::Label-->
                                            <label class="form-label required">Dropoff Location</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <div class="input-group">
                                                <input type="text" id="dropoffautocomplete" class="form-control"
                                                    name="dropoff_location" placeholder="Dropoff Location" value=""
                                                    aria-describedby="basic-addon2" required/>
                                                <span class="input-group-text" id="dropoffIcon" style="cursor: pointer;">
                                                    <i class="ki-duotone ki-focus fs-4"><span class="path1"></span><span
                                                            class="path2"></span></i>
                                                </span>

                                                <div class="form-group" id="dropoff_latitudeArea">
                                                    <label>Latitude</label>
                                                    <input type="text" id="dropoff_latitude" name="dropoff_latitude"
                                                        class="form-control" required>
                                                </div>

                                                <div class="form-group" id="dropoff_longtitudeArea">
                                                    <label>Longitude</label>
                                                    <input type="text" name="dropoff_longitude" id="dropoff_longitude"
                                                        class="form-control" required>
                                                </div>
                                            </div>

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-2 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Number of Passengers</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="number" class="form-control"
                                                        name="no_passengers" value="1" min="1"
                                                        max="100" required>
                                                    <!--end::Input-->
                                                    <button type="button" id="add-stop-btn" class="btn text-primary"
                                                        onclick="toggleChildSeat()" style="text-decoration: underline">+
                                                        Add Child Seat</button>
                                                </div>
                                                <!--end::Input group-->

                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span>Luggage Count</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="number" class="form-control"
                                                        name="luggage_count" value="0" min="0"
                                                        max="100" required>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        {{-- Child Row --}}
                                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2"
                                            id="child-seat-container" style="display: none;">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                    <!--begin::Input-->
                                                    <select class="form-control" name="child_seat_type">
                                                        <option value="ChildSeatInfantCount">Infant (ages 0-1)</option>
                                                        <option value="ChildSeatToddlerCount">Toddler Seat (ages 1-3)</option>
                                                        <option value="ChildSeatBoosterCount">Booster Seat (ages 3-6)</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Input-->
                                                    <input type="number" class="form-control"
                                                        name="no_child_seat" placeholder="# Child Seat" value="1"
                                                        min="1" max="100">
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                    </div>
                                    {{-- Map Div --}}
                                    <div class="col-sm-6">
                                        <div id="map" style="width: 100%; height: 400px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-column" data-kt-stepper-element="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card-header pt-7">
                                            <div class="card-title d-flex">
                                                <i class="ki-duotone ki-user fs-1 me-2"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span></i>
                                                <h2>Continue as guest</h2>
                                            </div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">First Name</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control"
                                                        name="fname" value="" placeholder="First Name">
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Last Name</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control"
                                                        name="lname" value="" required placeholder="Last Name">
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="fv-row mb-2">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Email</span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="email" class="form-control"
                                                name="email" value="" placeholder="Email" required>
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row mb-2">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Phone</span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="tel" class="form-control"
                                                name="phone" value="" placeholder="(555) 555-5555" required>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-header pt-7">
                                            <div class="card-title d-flex">
                                                <i class="ki-duotone ki-user fs-1 me-2"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span></i>
                                                <h2>Continue as guest</h2>
                                            </div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">First Name</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control"
                                                        name="fname" value="" placeholder="First Name">
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->

                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mt-3">
                                                        <span class="required">Last Name</span>
                                                    </label>
                                                    <!--end::Label-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control"
                                                        name="lname" value="" required placeholder="Last Name">
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="fv-row mb-2">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Email</span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="email" class="form-control"
                                                name="email" value="" placeholder="Email" required>
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row mb-2">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required">Phone</span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="tel" class="form-control"
                                                name="phone" value="" placeholder="(555) 555-5555" required>
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row mt-10">
                                            <a href="javascript(0);" class="btn btn-light-primary">Continue as guest</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" id="paymentDiv" style="display: none;">
                                        Price
                                    </div>
                                </div>

                            </div>
                            <!--begin::Step 2-->
                            <div class="flex-column" data-kt-stepper-element="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="fv-row mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">Example Label 1</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="input1"
                                                placeholder="" value="" required />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">Example Label 2</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <textarea class="form-control form-control-solid" rows="3" name="input2" placeholder="" required></textarea>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="fv-row mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">Example Label 1</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="input1"
                                                placeholder="" value="" required />
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-row mb-2">
                                            <!--begin::Label-->
                                            <label class="form-label">Example Label 2</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <textarea class="form-control form-control-solid" rows="3" name="input2" placeholder="" required></textarea>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--end::Group-->

                        <!--begin::Actions-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                {{-- <button type="button" class="btn btn-light btn-active-light-primary"
                                    data-kt-stepper-action="previous">
                                    Back
                                </button> --}}
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">
                                        Submit
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>

                                <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                    Continue
                                </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>

                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
        </div>
    </div>
    <!--end::Content-->
@endsection
@section('SCRIPT')
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places"></script>
    <script></script>
@endsection
