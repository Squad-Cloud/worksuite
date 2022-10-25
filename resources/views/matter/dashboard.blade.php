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
													<input class="form-control" type="text" value="Hello World"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Responsible Solicitor</label>
													<input class="form-control" type="text" value=" Client One"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Originating Solicitor</label>
													<input class="form-control" type="text" value="Client One"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Practice Area</label>
													<input class="form-control" type="text" value="---" readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Client Reference Number</label>
													<input class="form-control" type="text" value="23423" readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Location</label>
													<input class="form-control" type="text" value="Karachi" readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Status</label>
													<select name="" id="" class="form-select">
														<option value="1">Open</option>
														<option value="2">Closed</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Open date</label>
													<input class="form-control" type="text" value="10/21/2022"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Pending date</label>
													<input class="form-control" type="text" value="10/21/2022"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Closed date</label>
													<input class="form-control" type="text" value="10/21/2022"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Limitation date</label>
													<input class="form-control" type="text" value="10/21/2022"
														readonly />
												</div>
												<div class="form-group">
													<label class="form-label">Billable:</label>
													<span> Yes, <span class="badge badge-soft-primary">
															hourly</span></span>
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
							<!-- <div class="tab-pane" id="activities">
								<p>Activities</p>
							</div> -->
							<div class="tab-pane fade show active" id="activities">
								<div class="card card-border mb-0 h-100">
									<div class="card-header card-header-action">
										<h6>Activities</h6>
										<div>
											<a class="btn btn-soft-primary" data-bs-toggle="modal"
												data-bs-target="#addActivity" href="#">
												<span class="nav-link-text"><span class="icon"><span
															class="feather-icon"><i
																data-feather="plus"></i></span></span> New Time
													Entry</span>
											</a>
											<a class="btn btn-soft-primary" data-bs-toggle="modal"
												data-bs-target="#addExpense" href="#">
												<span class="nav-link-text"><span class="icon"><span
															class="feather-icon"><i
																data-feather="plus"></i></span></span> New
													Expense</span>
											</a>
										</div>
									</div>
									<div class="card-body">
										<!-- <div data-simplebar class="nicescroll-bar"> -->
										<div class="contact-list-view">
											<table id="datable_custom" class="table nowrap w-100 mb-5">
												<thead>
													<tr>
														<th><span class="form-check mb-0">
																<input type="checkbox"
																	class="form-check-input check-select-all"
																	id="customCheck1">
																<label class="form-check-label"
																	for="customCheck1"></label>
															</span></th>
														<th>Type</th>
														<th>Qty</th>
														<th>Description</th>
														<th>Rate (Rs)</th>
														<th>Non-billable (Rs)</th>
														<th>Billable</th>
														<th>Date</th>
														<th>User</th>
														<th>Invoice Status</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td></td>
														<td>Type</td>
														<td>13 Jan, 2020</td>
														<td>0.01h</td>
														<td><span class="badge badge-light">draft</span></td>
														<td>-</td>
														<td>$ 2,300</td>
														<td>11/19/2022</td>
														<td>Client One</td>
														<td><span class="badge badge-light">Unbilled</span></td>
														<td>
															<div class="d-flex align-items-center">
																<div class="btn-group selectable-split-dropdown">
																	<button type="button"
																		class="btn btn-outline-light btn-dyn-text w-100p">Edit</button>
																	<button type="button"
																		class="btn btn-outline-light dropdown-toggle dropdown-toggle-split me-3"
																		data-bs-toggle="dropdown" aria-haspopup="true"
																		aria-expanded="false">
																		<span class="sr-only">Toggle Dropdown</span>
																	</button>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item" href="#">Duplicate</a>
																		<a class="dropdown-item" href="#">Delete</a>

																	</div>
																</div>
																<div class="d-flex">

																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
																		data-bs-toggle="tooltip" data-bs-placement="top"
																		title="" data-bs-original-title="Edit"
																		href="contact-details.html"><span
																			class="btn-icon-wrap"><span
																				class="feather-icon"><i
																					data-feather="edit"></i></span></span></a>
																	<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"
																		data-bs-toggle="tooltip" data-bs-placement="top"
																		title="" data-bs-original-title="Delete"
																		href="#"><span class="btn-icon-wrap"><span
																				class="feather-icon"><i
																					data-feather="trash-2"></i></span></span></a>
																</div>
															</div>
														</td>
													</tr>

												</tbody>
											</table>
										</div>
										<!-- </div> -->
									</div>
								</div>
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
		<!-- Add Expense Modal -->
<div class="modal" tabindex="-1" id="addExpense">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-light text-black">
				<h5 class="modal-title">New Expense Entry</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="col-lg-12">
					<div class="form-check">
						<h6>Expense Type</h6>
						<input class="form-check-input" type="radio" name="flexRadioDefault"
							id="flexRadioDefault1" checked>
						<label class="form-check-label" for="flexRadioDefault1">
							<b>Disbursement:</b> expense requiring payment to avendor on behalf of a
							client(e.g court fees)
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="flexRadioDefault"
							id="flexRadioDefault2">
						<label class="form-check-label" for="flexRadioDefault2">
							<b>Expense Recoveries:</b> expense not linked directly to a vendor
							payment (e.g photocopies, postage)
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<label class="form-label">Expense Category</label>
							<select class="form-select">
								<option selected>Select an expense category</option>

							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-label">Amount</label>
							<div class="input-group flex-nowrap">
								<span class="input-group-text" id="addon-wrapping">Rs</span>
								<input type="text" class="form-control" placeholder="00.1" aria-label="Username"
									aria-describedby="addon-wrapping">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-label">Reference</label>
							<input type="text" class="form-control" placeholder="Enter cheque reference number"
								aria-label="Username" aria-describedby="addon-wrapping">
							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-label">Vender</label>
							<select class="form-select">
								<option>Specify a vender</option>

							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label class="form-label">Matter</label>
							<p>Hello World</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<div class="form-label-group">
									<label class="form-label">Address</label>
									<small class="text-muted">1200</small>
								</div>
								<textarea class="form-control" rows="5"
									placeholder="Write your address here"></textarea>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group ">
								<label class="form-label">Date</label>
								<input class="form-control join1" type="date" value="" required />
							</div>
							<div class="form-group mb-3">
								<div class="form-group">
									<label class="form-label">Firm</label>
									<select class="form-select">
										<option>Zubair Ayub</option>

									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="p-3 mb-2 bg-light text-dark">
					<button type="button" class="btn btn-outline-primary-btn btn-primary btn-sm">Save
						Entry</button>
					<button type="button" class="btn btn-outline-primary-btn btn-soft-primary btn-sm">Save and
						create another</button>
					<button type="button" class="btn btn-outline-primary-btn btn-soft-primary btn-sm">Save and
						duplicate</button>
					<button type="button" class="btn btn-outline-primary-btn btn-soft-primary btn-sm"
						data-bs-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Add Expense Modal End -->

<!-- New Time Entry Modal -->
<div class="modal" tabindex="-1" id="addActivity">
<div class="modal-dialog modal-lg">
<div class="modal-content">
	<div class="modal-header p-3 mb-2 bg-light text-dark">
		<h5 class="modal-title">New time entry</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	</div>
	<div class="modal-body">
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group ">
					<label class="form-label">Duration</label>
					<div>
						<input class="form-control join1 d-inline-block w-auto" type="text" name="duration" placeholder="1h 12m, 1:12 ..." required />
						<button class="btn btn-primary"><span class="icon"><span class="feather-icon"><i data-feather="play"></i></span> 00:00:00</span></button>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group ">
					<label class="form-label">Matter</label>
					<p class="">lorem ispum dolor ispm tihe hydr iumrk </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label class="form-label">Activity Category</label>
					<select class="form-select">
						<option selected>Find a Category</option>

					</select>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group ">
					<label class="form-label">Date</label>
					<input class="form-control join1" type="date" value="" required />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 ">
				<div class="form-group">
					<div class="form-label-group">
						<label class="form-label">Address</label>
						<small class="text-muted">1200</small>
					</div>
					<textarea class="form-control" rows="5"
						placeholder="Write your address here"></textarea>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group ">
					<label class="form-label">Firm user</label>
					<select class="form-select">
						<option>Zubair Ayub</option>
					</select>
				</div>
				<div class="input-group mb-3">
					<label class="input-group">Rate</label>
					<input type="text" class="form-control" placeholder="0.00" aria-label="Username">
					<span class="input-group-text">hr/</span>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value=""
								id="flexCheckIndeterminate">
							<label class="form-check-label" for="flexCheckIndeterminate">
								Non-Billable
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">

				<div class="p-3 mb-2 bg-light text-dark">
					<button type="button" class="btn btn-outline-primary-btn btn-primary btn-sm">Save
						Entry</button>
					<button type="button"
						class="btn btn-outline-primary-btn btn-soft-primary btn-sm">Save and create
						another</button>
					<button type="button"
						class="btn btn-outline-primary-btn btn-soft-primary btn-sm">Save and
						duplicate</button>
					<button type="button" class="btn btn-outline-primary-btn btn-soft-primary btn-sm"
						data-bs-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
		<!-- New Time Entry Modal End -->
        @endsection