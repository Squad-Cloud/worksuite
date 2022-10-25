@extends('layouts.app')

@section('content')
		<!-- Wrapper -->
		<div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light"
			data-footer="simple">
			<!-- Main Content -->
			<div class="hk-pg-wrapper">
				<div class="container-xxl">
					<!-- Page Header -->
					<div class="d-flex justify-content-between align-items-center">
						<div class="hk-pg-header pt-7 pb-4">
							<h1 class="pg-title">{{$matter->id}}-{{$matter->client->name}}</h1>
							<p>{{$matter->description}} </p>
						</div>
						<ul class="nav nav-pills active-theme nav-light px-2 flex-shrink-0 d-flex">
							<li class="nav-item me-1">
								<a class="btn btn-soft-primary" href="javascript:void(0);">
									<span class="nav-link-text"><span class="icon"><span class="feather-icon"><i
													data-feather="copy"></i></span></span> Duplicate</span>
								</a>
							</li>
							<li class="nav-item me-1">
								<a class="btn btn-soft-primary" href="javascript:void(0);">
									<span class="nav-link-text"><span class="icon"><span class="feather-icon"><i
													data-feather="share"></i></span></span> Share</span>
								</a>
							</li>
							<li class="nav-item me-1">
								<a class="btn btn-soft-primary" href="javascript:void(0);">
									<span class="nav-link-text"><span class="icon"><span class="feather-icon"><i
													data-feather="edit"></i></span></span> Edit Matter</span>
								</a>
							</li>
						</ul>
					</div>
					<ul class="nav nav-line nav-light nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="tab" href="#dashboard">
								<span class="nav-link-text">Dashboard</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#activities">
								<span class="nav-link-text">Activities</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#calendar">
								<span class="nav-link-text">Calendar</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#communication">
								<span class="nav-link-text">Communication</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#notes">
								<span class="nav-link-text">Notes</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#documents">
								<span class="nav-link-text">Documents</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#tasks">
								<span class="nav-link-text">Tasks</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#bills">
								<span class="nav-link-text">Bills</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#transaction">
								<span class="nav-link-text">Transactions</span>
							</a>
						</li>
					</ul>

					<!-- /Page Header -->

					<!-- Page Body -->
					<div class="hk-pg-body">
						<div class="tab-content">
							<div class="tab-pane fade show active" id="dashboard">
								<div class="row">
									<div class="col-xxl-9 col-lg-8 col-md-7 mb-md-4 mb-3">
										<div class="card card-border mb-0 h-100">
											<div class="card-header card-header-action">
												<h6>Financial</h6>

											</div>
											<div class="card-body">
												<div class="d-flex align-items-center h-100">
													<div class="card flex-grow-1 justify-content-center h-100">
														<div class="text-center">
															<span class="d-block fw-medium fs-6 mb-2">Outstanding
																Balance</span>
															<span class="d-block fs-2 fw-medium text-dark mb-2">Pkr
																8.8k</span>
															<a class="btn btn-soft-primary" href="javascript:void(0);">
																<span class="nav-link-text"><span class="icon"><span
																			class="feather-icon"><i
																				data-feather="eye"></i></span></span>
																	View Bills</span>
															</a>
														</div>
														<!-- <div class="separator-full mt-5"></div> -->
													</div>
													<div class="card flex-grow-1 justify-content-center h-100">
														<div class="text-center">
															<span class="d-block fw-medium fs-6 mb-2">Total
																Amount</span>
															<span class="d-block fs-2 fw-medium text-dark mb-2">Pkr
																8.8k</span>
															<a class="btn btn-soft-primary" href="javascript:void(0);">
																<span class="nav-link-text"><span class="icon"><span
																			class="feather-icon"><i
																				data-feather="eye"></i></span></span>
																	New Request</span>
															</a>
														</div>
													</div>
													<div class="card flex-grow-1 justify-content-center h-100">
														<div class="text-center">
															<span class="d-block fw-medium fs-6 mb-2">Amount
																Received</span>
															<span class="d-block fs-2 fw-medium text-dark mb-2">Pkr
																8.8k</span>
															<a class="btn btn-soft-primary" href="javascript:void(0);">
																<span class="nav-link-text"><span class="icon"><span
																			class="feather-icon"><i
																				data-feather="eye"></i></span></span>
																	View Transaction</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-lg-4 col-md-5 mb-md-4 mb-3">
										<div class="card-header card-header-action">
											<h6>Contacts</h6>
										</div>
										<div class="card-body card-border">
											<div class="contact-card">
												<div class="card-body text-center">
													<div class="avatar avatar-xl avatar-soft-primary avatar-rounded">
														<span class="initial-wrap">C</span>
													</div>
													<div class="user-name"><span class="contact-star marked"><span
																class="feather-icon"><i
																	data-feather="star"></i></span></span>Client One
													</div>
													<div class="user-email">charlie@leernoca.monster</div>
													<div class="user-contact">+741 56 1916</div>
													<div class="user-desg"><span
															class="badge badge-danger badge-indicator badge-indicator-lg me-2"></span>
														Admin</div>
												</div>
												<div class="card-footer text-muted position-relative">
													<a href="#" class="d-flex align-items-center">
														<span class="feather-icon me-2"><i
																data-feather="inbox"></i></span>
														<span class="fs-7 lh-1">Message</span>
													</a>
													<div class="v-separator-full m-0"></div>
													<a href="#" class="d-flex align-items-center" data-bs-toggle="modal"
														data-bs-target="#contact_detail">
														<span class="feather-icon me-2"><i
																data-feather="user-check"></i></span>
														<span class="fs-7 lh-1">Profile</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-12">
										<div class="card card-border mb-0">
											<div class="card-header card-header-action">
												<h6>Matter Details</h6>
											</div>
											<div class="card-body">
												<div class="form-group">
													<label class="form-label">Matter description</label>
													<input class="form-control" type="text" value="{{$matter->description}}"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Responsible Solicitor</label>
													<input class="form-control" type="text" value="{{$matter->client->name}}"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Originating Solicitor</label>
													<input class="form-control" type="text" value="{{$matter->client->name}}"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Practice Area</label>
													<input class="form-control" type="text" value="---" readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Client Reference Number</label>
													<input class="form-control" type="text" value="{{$matter->id}}-{{$matter->client->name}}" readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Location</label>
													<input class="form-control" type="text" value="{{$matter->location}}" readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Status</label>
													<select name="" id="" class="form-select" >
														<option>{{$matter->status == 1 ? 'Open' : 'Close'}}</option>
														{{-- <option value="2">Closed</option> --}}
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Open date</label>
													<input class="form-control" type="text" value="{{$matter->open_date}}"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Pending date</label>
													<input class="form-control" type="text" value="{{$matter->pending_date}}"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Closed date</label>
													<input class="form-control" type="text" value="{{$matter->close_date}}"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Limitation date</label>
													<input class="form-control" type="text" value="{{$matter->limit_date}}"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Billable:</label>
													<span> Yes, <span class="badge badge-soft-primary">
                                                        {{$matter->billing->name}}</span></span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-12">
										<div class="card card-border mb-0">
											<div class="card-header card-header-action">
												<h6>Timeline</h6>
											</div>
											<div class="card-body">
												<div class="todo-body">
													<div data-simplebar class="nicescroll-bar">
														<div class="container">

															<div class="collapse-simple mt-4">
																<div class="card">
																	<div class="card-header">
																		<a role="button" data-bs-toggle="collapse"
																			href="#todo_collapse_1"
																			aria-expanded="true">
																			<h5 class="mb-0">Recently Assigned</h5>
																		</a>
																	</div>
																	<div id="todo_collapse_1" class="collapse show">
																		<div class="card-body">
																			<ul id="todo_list" class="advance-list">
																				<li
																					class="advance-list-item single-task-list active-todo">
																					<div
																						class="d-flex align-items-center justify-content-between">
																						<div
																							class="d-flex align-items-center">
																							
																							<div>
																								<span
																									class="todo-star marked"><span
																										class="feather-icon"><i
																											data-feather="star"></i></span></span>
																								<span
																									class="badge badge-danger badge-indicator badge-indicator-xl"></span>
																								<span
																									class="todo-text text-dark text-truncate">Video
																									conference with
																									Canada Team</span>
																								<span
																									class="badge badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none"><span><i
																											class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
																							</div>
																						</div>
																						<div
																							class="d-flex flex-shrink-0 align-items-center ms-3">
																							<span
																								class="todo-time d-lg-inline-block d-none text-primary me-3">Tomorrow</span>
																							<div
																								class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																								<img src="dist/img/avatar7.jpg"
																									alt="user"
																									class="avatar-img">
																							</div>
																							<span
																								class="badge badge-primary ms-3 d-md-inline-block d-none">Calls</span>
																							<div class="dropdown">
																								<button
																									class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																									aria-expanded="false"
																									data-bs-toggle="dropdown"><span
																										class="icon"><span
																											class="feather-icon"><i
																												data-feather="more-vertical"></i></span></span></button>
																								<div role="menu"
																									class="dropdown-menu dropdown-menu-end">
																									<a class="dropdown-item edit-task"
																										href="#">Edit
																										Task</a>
																									<a class="dropdown-item view-task"
																										href="#">View
																										Task</a>
																									<a class="dropdown-item delete-task"
																										href="#">Delete
																										Task</a>
																								</div>
																							</div>
																						</div>
																					</div>
																				</li>
																				<li
																				class="advance-list-item single-task-list">
																				<div class="d-flex align-items-center justify-content-between">	
																					<div class="d-flex align-items-center">
																						<div>
																							<span class="todo-star">
																								<span class="feather-icon">
																									<i data-feather="star"></i>
																								</span>
																							</span>
																							<span class="badge badge-warning badge-indicator badge-indicator-xl"></span>
																								<span class="todo-text text-dark text-truncate">Client objective meeting</span>
																								<span class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none">
																									<span><i class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span>
																								</span>
																							</div>
																						</div>
																						<div
																							class="d-flex flex-shrink-0 align-items-center ms-3">
																							<span class="todo-time d-lg-inline-block d-none text-danger me-3">Yesterday</span>
																							<div class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																								<img src="dist/img/avatar9.jpg" alt="user" class="avatar-img">
																							</div>
																							<span class="badge badge-violet ms-3 d-md-inline-block d-none">Conferences</span>
																							<div class="dropdown">
																								<button class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown">
																									<span class="icon">
																										<span class="feather-icon">
																											<i data-feather="more-vertical"></i>
																										</span>
																									</span>
																								</button>
																								<div role="menu" class="dropdown-menu dropdown-menu-end">
																									<a class="dropdown-item edit-task" href="#">Edit Task</a>
																									<a class="dropdown-item view-task" href="#">View Task</a>
																									<a class="dropdown-item delete-task" href="#">Delete Task</a>
																								</div>
																							</div>
																						</div>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
															<div class="collapse-simple mt-4">
																<div class="card">
																	<div class="card-header">
																		<a role="button" data-bs-toggle="collapse" href="#todo_collapse_2" aria-expanded="true">
																			<h5 class="mb-0">Yesterday</h5>
																		</a>
																	</div>
																	<div id="todo_collapse_2" class="collapse show">
																		<div class="card-body">
																			<ul id="todo_list_1" class="advance-list">
																				<li class="advance-list-item single-task-list">
																					<div class="d-flex align-items-center justify-content-between">
																						<div class="d-flex align-items-center">
																							<div>
																								<span class="todo-star">
																									<span class="feather-icon">
																										<i data-feather="star"></i>
																									</span>
																								</span>
																								<span class="badge badge-warning badge-indicator badge-indicator-xl"></span>
																								<span class="todo-text text-dark text-truncate">Fix tooltip word wrap/break rules</span>
																								<span class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none">
																									<span>
																										<i class="badge-dot ri-checkbox-blank-circle-fill"></i>High</span></span>
																							</div>
																						</div>
																						<div class="d-flex flex-shrink-0 align-items-center ms-3">
																							<span class="todo-time d-lg-inline-block d-none text-danger me-3">4
																								Days ago</span>
																							<div class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																								<img src="dist/img/avatar2.jpg" alt="user" class="avatar-img">
																							</div>
																							<span class="badge badge-warning ms-3 d-md-inline-block d-none">Project</span>
																							<div class="dropdown">
																								<button class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown">
																									<span class="icon"><span class="feather-icon">
																										<i data-feather="more-vertical"></i></span></span></button>
																								<div role="menu" class="dropdown-menu dropdown-menu-end">
																									<a class="dropdown-item edit-task" href="#">Edit Task</a>
																									<a class="dropdown-item view-task" href="#">View Task</a>
																									<a class="dropdown-item delete-task" href="#">Delete Task</a>
																								</div>
																							</div>
																						</div>
																					</div>
																				</li>
																				<li class="advance-list-item single-task-list">
																					<div class="d-flex align-items-center justify-content-between">
																						<div class="d-flex align-items-center">
																							<div>
																								<span class="todo-star">
																									<span class="feather-icon"><i data-feather="star"></i></span></span>
																								<span class="badge badge-warning badge-indicator badge-indicator-xl"></span>
																								<span class="todo-text text-dark text-truncate">Redesigning
																									the base model</span>
																								<span class="badge  badge-sm badge-outline badge-danger badge-wth-indicator badge-wth-icon ms-3 d-lg-inline-block d-none">
																									<span><i class="badge-dot ri-checkbox-blank-circle-fill"></i>Urgent</span></span>
																							</div>
																						</div>
																						<div class="d-flex flex-shrink-0 align-items-center ms-3">
																							<span class="todo-time d-lg-inline-block d-none me-3">2 Aug, 2020</span>
																							<div class="avatar avatar-xs avatar-rounded d-md-inline-block d-none">
																								<img src="dist/img/avatar13.jpg" alt="user" class="avatar-img">
																							</div>
																							<div class="dropdown">
																								<button class="btn btn-icon btn-rounded btn-flush-light flush-soft-hover dropdown-toggle no-caret"
																									aria-expanded="false" data-bs-toggle="dropdown"><span
																										class="icon">
																										<span class="feather-icon"><i data-feather="more-vertical"></i></span></span></button>
																								<div role="menu" class="dropdown-menu dropdown-menu-end">
																								<a class="dropdown-item edit-task" href="#">Edit Task</a>
																									<a class="dropdown-item view-task" href="#">View Task</a>
																									<a class="dropdown-item delete-task" href="#">Delete Task</a>
																								</div>
																							</div>
																						</div>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="activities">
								<p>Activities</p>
							</div>
							<div class="tab-pane" id="calendar">
								<p>calender</p>

							</div>
							<div class="tab-pane" id="communication">
								<p>Communication</p>

							</div>
							<div class="tab-pane" id="notes">
								<p>Notes</p>

							</div>
							<div class="tab-pane" id="documents">
								<p>Documents</p>

							</div>
							<div class="tab-pane" id="task">
								<p>Tasks</p>

							</div>
							<div class="tab-pane" id="bills">
								<p>Bills</p>

							</div>
							<div class="tab-pane" id="transaction">
								<p>Transactions</p>

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