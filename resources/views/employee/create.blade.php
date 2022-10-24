@extends('layouts.app')

@section('content')
<div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
    <div class="hk-pg-wrapper">
        <div class="container-xxl">
            <!-- Page Header -->
				<div class="hk-pg-header pt-7 pb-4">
					<h1 class="pg-title">Add Employee</h1>
					<p>Add Employees Info </p>
				</div>
				<!-- /Page Header -->
                <form action="{{route('store_employee')}}" method="post" enctype="multipart/form-data">
                    @csrf
            <div class="hk-pg-body">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label class="form-label">Empolyee ID</label>
                <input class="form-control" type="text" name="emp_id" value="" />
                @error('emp_id')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label class="form-label">Empolyee Name</label>
                <input class="form-control" type="text" name="emp_name" value="" />
                @error('emp_name')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label class="form-label">Empolyee Email</label>
                <input class="form-control" type="email" name="emp_email" value="" />
                @error('emp_email')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label class="form-label">Empolyee Password</label>
                <input class="form-control" type="password" name="emp_password" value="" />
                @error('emp_password')
                <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
            </div>
        </div>

    </div>



    <div class="row">
        <div class="col-md-3">
            <label class="form-label">Slack Username</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" name="emp_slack" class="form-control" placeholder="Username" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="form-label">Joining Date</label>
                <input class="form-control join1" name="emp_join_date" type="date" value="" />
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label class="form-label">Exit Date</label>
                <input class="form-control" type="date" name="emp_exit" value="" />
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label class="form-label">Gender</label>
                <input class="form-control" type="gender" name="emp_gender" placeholder="Male" value="" />
            </div>
        </div>
    </div>

    <div class="row gx-3">
        <div class="col-md-11 ">
            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label">Address</label>
                    <small class="text-muted">1200</small>
                </div>
                <textarea class="form-control" name="emp_address" rows="5" placeholder="Write your address here"></textarea>
            </div>
        </div>
    </div>



    <div class="col-md-11">
        <div class="form-group">
            <label class="form-label">Skills</label>
            <input class="form-control" type="text" name="emp_skills" value="" />
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-label">Designation</label>
                <select class="form-select" name="designation">
                    <option value="">Select</option>
                    @forelse ($designation as $key => $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @empty
                        <span>No Data</span>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label">Department</label>
                <select class="form-select" name="department">
                    <option value="">Select</option>
                    @forelse ($department as $key => $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @empty
                        <span>No Data</span>
                    @endforelse
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <label class="form-label">Mobile</label>
            <div class="input-group mb-3">
                {{-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">----</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">333</a></li>
                    <li><a class="dropdown-item" href="#">300</a></li>
                    <li><a class="dropdown-item" href="#">322</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Other</a></li>
                </ul> --}}
                <select name="code" id="code">
                    <option value="333">333</option>
                    <option value="300">300</option>
                </select>
                <input type="number" name="mobile" class="form-control" aria-label="Enter Mobile Number">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="form-label">Hourly Rate (USD)</label>
                <input class="form-control" type="text" name="hourly_rate" value="" />
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-label">Login</label>
                <select class="form-select" name="is_login">
                    <option selected>Enable</option>
                    <option value="1">Disable</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label class="form-label">Email Notifications</label>
                <div class="form-check">
                    <div class="d-inline-block">
                        <input type="radio" id="notiYes" name="emp_notification" class="form-check-input">
                        <label class="form-check-label" for="enYes">Enable</label>
                    </div>
                    <div class="d-inline-block mx-5">
                        <input type="radio" d="notiNo" name="emp_notification" checked class="form-check-input">
                        <label class="form-check-label" for="enNo">Disable</label>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-2">
        <div class="form-group">
            <label class="form-label">Select Language</label>
            <select class="form-select" name="language">
                <option selected>English</option>
                <option value="1">French</option>
                <option value="2">italian</option>
                <option value="3">Spanish</option>
            </select>
        </div>
    </div>

    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="form-group">
                <div class="media align-items-center">
                    <div class="media-head me-5">
                        <div class="avatar avatar-xxl">
                            <img src="{{asset('assets/dist/img/avatar3.jpg')}}" alt="user" class="avatar-img">
                        </div>
                    </div>
                    <div class="media-body">
                        <div class="btn btn-soft-primary btn-file mb-1">
                            <button type="button" class="btn btn-primary mt-1">Select Image</button>
                            <input type="file" class="upload" name="image">
                        </div>
                        <div class="form-text text-muted">
                            For better preview recommended size is 450px x 450px. Max size 5mb.
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
    @endsection