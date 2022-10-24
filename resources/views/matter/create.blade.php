@extends('layouts.app')

@section('content')
	<!-- Wrapper -->
	<div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">



		<!-- Main Content -->
		<div class="hk-pg-wrapper">
			<div class="container-xxl">
				<!-- Page Header -->
				<div class="hk-pg-header pt-7 pb-4">
					<h1 class="pg-title">Add Case</h1>
					<p>Add matter information </p>
				</div>
				<!-- /Page Header -->

				<!-- Page Body -->
				<div class="hk-pg-body">
					<div class="row edit-profile-wrap">
						<div class="col-sm-12">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="tab_block_1">
									<form action="{{route('store_matter')}}" method="post" enctype="multipart/form-data">
                                        @csrf
										<div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Matter Detail</span></div>
										<div class="row gx-3">
											<div class="col-sm-12 col-xs-12">
												<div class="form-group">
													<label class="form-label">Client</label>
													<select class="form-select" name="client_id">
														<option >Select</option>
														@forelse ($client as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>                                                            
                                                        @empty
                                                        <option>No Data Found</option>                                                            
                                                        @endforelse

													</select>
												</div>
											</div>

											<div class="col-sm-12">
												<div class="form-group">
													<div class="form-label-group">
														<label class="form-label">Matter Description</label>
														
													</div>
													<textarea class="form-control" name="description" rows="4" placeholder="Write your Notes here"></textarea>
												</div>
											</div>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<div class="form-group">
													<label class="form-label">Responsible Solicitor</label>
													<select class="form-select" name="responsible_solicitor">
														<option >Select</option>
														@forelse ($client as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>                                                            
                                                        @empty
                                                        <option>No Data Found</option>                                                            
                                                        @endforelse
													</select>
												</div>
											</div>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<div class="form-group">
													<label class="form-label">Originating Solicitor</label>
													<select class="form-select" name="originating_solicitor">
														<option >Select</option>
														@forelse ($client as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>                                                            
                                                        @empty
                                                        <option>No Data Found</option>                                                            
                                                        @endforelse
													</select>
												</div>
											</div>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<div class="form-group">
													<label class="form-label">Location</label>
													<input type="text" name="location" class="form-control">
												</div>
											</div>
										
											<div class="col-md-4 col-sm-6 col-xs-12">
												<div class="form-group">
													<label class="form-label">Matter Status</label>
													<select class="form-select" name="status">
														<option selected>Open</option>
														<option value="1">Closed</option>
														<option value="2">Pending</option>
													</select>
												</div>
											</div>
											<div class="col-md-4 col-sm-6 col-xs-12">
												
												<div class="form-group">
													<label class="form-label">Open date</label>
													<div class="input-group mb-3">
														<span class="input-group-text" id=""><span class="icon"><span class="feather-icon"><i data-feather="calendar"></i></span></span></span>
														<input type="date" class="form-control singledate" name="opendate">
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<div class="form-group">
													<label class="form-label">Closed date</label>
													<div class="input-group mb-3">
														<span class="input-group-text" id=""><span class="icon"><span class="feather-icon"><i data-feather="calendar"></i></span></span></span>
														<input type="date" class="form-control singledate" name="closedate">
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<div class="form-group">
													<label class="form-label">Pending date</label>
													<div class="input-group mb-3">
														<span class="input-group-text" id=""><span class="icon"><span class="feather-icon"><i data-feather="calendar"></i></span></span></span>
														<input type="date" class="form-control singledate" name="pendingdate">
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-6 col-xs-12">
												<div class="form-group">
													<label class="form-label">Statute of limitations date</label>
													<div class="input-group mb-3">
														<span class="input-group-text" id=""><span class="icon"><span class="feather-icon"><i data-feather="calendar"></i></span></span></span>
														<input type="date" class="form-control singledate" name="statutedate">
													</div>
												</div>
											</div>
										</div>
	
										<div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Billing Preference</span></div>
										<div class="row gx-3">
											<div class="col-lg-4 col-md-6 col-sm-12 ">
												<div class="form-group">
													<label class="form-label">Billing Method</label>
													<select class="form-select" name="billingType">
														<option >Select</option>
														@forelse ($billing as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>                                                            
                                                        @empty
                                                        <option>No Data Found</option>                                                            
                                                        @endforelse
													</select>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="form-group">
													<label class="form-label">Rates</label>
													<input type="number" name="rates" class="form-control" min="0">
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-primary mt-5">Save Changes</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Body -->		
			</div>
		</div>
		<!-- /Main Content -->
	</div>
    <!-- /Wrapper -->
    @endsection
    