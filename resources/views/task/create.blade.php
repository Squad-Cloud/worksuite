@extends('layouts.app')
@section('content')
<style>
		.tasklist-cards-wrap{
			min-height: 80px;
		}
	</style>

	<!-- Wrapper -->
	<div class="hk-wrapper" data-layout="vertical" data-layout-style="collapsed" data-menu="light" data-footer="simple" data-hover="active">

		<!-- Main Content -->
		<div class="hk-pg-wrapper pb-0">
			<!-- Page Body -->
			<div class="hk-pg-body py-0">
				<div class="taskboardapp-wrap">
					
					<div class="taskboardapp-content">
						<div class="taskboardapp-detail-wrap">
							<header class="taskboard-header">
								<div class="d-flex align-items-center flex-1">
									<div class="d-flex">
										<a class="taskboardapp-title link-dark" href="#">
											<h1>
												JurisLPM
												<span class="task-star marked"><span class="feather-icon"><i data-feather="star"></i></span></span>
											</h1>
										</a>
										<div class="ms-3">
											<div class="input-group">
												<span class="input-affix-wrapper">
													<span class="input-prefix"><i class="ri-lock-line"></i></span>
													<select class="form-select">
														<option selected="" value="1">Private Task</option>
														<option value="2">Public Task</option>
													</select>
												</span>
											</div>
										</div>
									</div>
								</div>
								
								<ul class="nav nav-pills active-theme nav-light px-2 flex-shrink-0 d-xxl-flex d-none">
									<li class="me-1">
										<div class="input-group mb-3">
											<span class="input-group-text" id="daterange"><span class="icon"><span class="feather-icon"><i data-feather="calendar"></i></span></span></span>
											<input type="daterange" id="daterange" class="form-control" name="daterange">
										</div>
										
									</li>
									<li class="nav-item me-1">
										<a class="btn btn-soft-primary" href="javascript:void(0);">
											<span class="nav-link-text"><span class="icon"><span class="feather-icon"><i data-feather="filter"></i></span></span> Filter Results</span>
										</a>
									</li>
									<li class="nav-item me-1">
										<a class="btn btn-soft-primary" href="javascript:void(0);">
											<span class="nav-link-text"><span class="icon"><span class="feather-icon"><i data-feather="grid"></i></span></span> Task Category</span>
										</a>
									</li>
									<li class="nav-item me-1">
										<a class="btn btn-soft-primary" href="javascript:void(0);">
											<span class="nav-link-text"><span class="icon"><span class="feather-icon"><i data-feather="list"></i></span></span> Task</span>
										</a>
									</li>
									<li class="nav-item me-1">
										<a class="btn btn-soft-primary" href="javascript:void(0);">
											<span class="nav-link-text"><span class="icon"><span class="feather-icon"><i data-feather="bar-chart-2"></i></span></span> Add Column</span>
										</a>
									</li>
									<li class="nav-item me-1">
										<a class="btn btn-soft-primary" href="javascript:void(0);">
											<span class="nav-link-text"><span class="icon"><span class="feather-icon"><i data-feather="save"></i></span></span> Publish Task Board</span>
										</a>
									</li>
								</ul>
							</header>
							<div class="taskboard-body">
								<div>
									<div class="taskbar-toolbar">
										<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
											<button class="btn btn-soft-primary flex-shrink-0 btn-add-newlist me-4" data-bs-toggle="modal" data-bs-target="#add_task_list"><span class="nav-link-text"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span> Create New</span></button>
										</div>
									</div>
									<div id="kb_scroll" class="tasklist-scroll position-relative">
										<div id="tasklist_wrap" class="tasklist-wrap">
											<div class="card card-simple card-border tasklist">
												<div class="card-header card-header-action">
													<div class="tasklist-handle">
														<h6 class="text-uppercase fw-bold  d-flex align-items-center mb-0"><span class="tasklist-name">All Modules</span><span class="badge badge-pill badge-soft-violet ms-2">19</span></h6>
														<div class="card-action-wrap">
															<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
															<div role="menu" class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item edit-tasklist" href="#" data-bs-toggle="modal" data-bs-target="#edit_task_list">Edit</a>
																<a class="dropdown-item delete-tasklist" href="#">Delete</a>
																<a class="dropdown-item clear-tasklist" href="#">Clear All</a>
															</div>
														</div>
													</div>
													<button class="btn btn-white btn-block btn-add-newtask" data-bs-toggle="modal" data-bs-target="#add_new_card"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span></button>
												</div>
												<div data-simplebar class="card-body">
													<div id="i1" class="tasklist-cards-wrap">
														<div class="card card-border card-simple tasklist-card">
															<div class="card-header card-header-action">
																<h6 class="fw-bold">Application Pages</h6>
																<div class="card-action-wrap">
																	<a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
																		<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign to</span></a>
																		<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach files</span></a>
																		<a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
																	</div>
																</div>
															</div>
															<div class="card-body">
																<div class="avatar-group avatar-group-overlapped">
																	<div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dean">
																		<img src="assets/dist/img/avatar13.jpg" alt="user" class="avatar-img">
																	</div>
																	<div class="avatar avatar-xs avatar-soft-danger avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tom">
																		<span class="initial-wrap">B</span>
																	</div>
																	<div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Danial">
																		<img src="assets/dist/img/avatar2.jpg" alt="user" class="avatar-img">
																	</div>
																</div>
															</div>
															<div class="card-footer text-muted justify-content-between">
																<div>
																	<span class="task-counter">
																		<span><i class="ri-checkbox-line"></i></span>
																		<span>4/8</span>
																	</span>
																	<span class="task-discuss">
																		<span><i class="ri-message-3-line"></i></span>
																		<span>24</span>
																	</span>
																</div>
																<div>
																	<span class="task-deadline">
																		22 Sep, 22
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card card-simple card-border tasklist">
												<div class="card-header card-header-action">
													<div class="tasklist-handle">
														<h6 class="text-uppercase fw-bold  d-flex align-items-center mb-0"><span class="tasklist-name">In progress</span><span class="badge badge-pill badge-soft-violet ms-2">6</span></h6>
														<div class="card-action-wrap">
															<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
															<div role="menu" class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item edit-tasklist" href="#" data-bs-toggle="modal" data-bs-target="#edit_task_list">Edit</a>
																<a class="dropdown-item delete-tasklist" href="#">Delete</a>
																<a class="dropdown-item clear-tasklist" href="#">Clear All</a>
															</div>
														</div>
													</div>
													<button class="btn btn-white btn-block btn-add-newtask" data-bs-toggle="modal" data-bs-target="#add_new_card"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span></button>
												</div>
												<div data-simplebar class="card-body">
												 	<div id="i2" class="tasklist-cards-wrap">
														<div class="card card-border card-wth-progress card-simple tasklist-card">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-warning w-45" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															
															<div class="card-header card-header-action">
																<h6 class="fw-bold">Profile Pages</h6>
																<div class="card-action-wrap">
																	<a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
																		<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign to</span></a>
																		<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach files</span></a>
																		<a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
																	</div>
																</div>
															</div>
															<div class="card-body">
																<div class="avatar-group avatar-group-overlapped">
																	<div class="avatar avatar-rounded" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Katharine">
																		<img src="assets/dist/img/avatar8.jpg" alt="user" class="avatar-img">
																	</div>
																</div>
															</div>
															<div class="card-footer text-muted justify-content-between">
																<div>
																	<span class="task-counter">
																		<span><i class="ri-checkbox-line"></i></span>
																		<span>4/8</span>
																	</span>
																</div>
																<div>
																	<span class="task-deadline">
																		18 Sep, 22
																	</span>
																</div>
															</div>
														</div>
														<div class="card card-border card-wth-progress card-simple tasklist-card">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-primary w-85" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															
															<div class="card-header card-header-action">
																<h6 class="fw-bold">Advance Tables</h6>
																<div class="card-action-wrap">
																	<a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
																		<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign to</span></a>
																		<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach files</span></a>
																		<a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
																	</div>
																</div>
															</div>
															<div class="card-footer text-muted justify-content-between">
																<div>
																	<span class="task-counter">
																		<span><i class="ri-checkbox-line"></i></span>
																		<span>4/8</span>
																	</span>
																	<span class="task-discuss">
																		<span><i class="ri-message-3-line"></i></span>
																		<span>24</span>
																	</span>
																</div>
																<div>
																	<span class="task-deadline">
																		22 Sep, 22
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card card-simple card-border tasklist">
												<div class="card-header card-header-action">
													<div class="tasklist-handle">
														<h6 class="text-uppercase fw-bold  d-flex align-items-center mb-0"><span class="tasklist-name">Completed</span><span class="badge badge-pill badge-soft-violet ms-2">4</span></h6>
														<div class="card-action-wrap">
															<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
															<div role="menu" class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item edit-tasklist" href="#" data-bs-toggle="modal" data-bs-target="#edit_task_list">Edit</a>
																<a class="dropdown-item delete-tasklist" href="#">Delete</a>
																<a class="dropdown-item clear-tasklist" href="#">Clear All</a>
															</div>
														</div>
													</div>
													<button class="btn btn-white btn-block btn-add-newtask" data-bs-toggle="modal" data-bs-target="#add_new_card"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span></button>
												</div>
												<div data-simplebar class="card-body">
													<div id="i3" class="tasklist-cards-wrap">
														<div class="card card-border card-simple card-wth-progress tasklist-card">
															<div class="progress progress-bar-xs">
																<div class="progress-bar bg-success w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="card-header card-header-action">
																<h6 class="fw-bold">Forms</h6>
																<div class="card-action-wrap">
																	<a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
																		<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign to</span></a>
																		<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach files</span></a>
																		<a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
																	</div>
																</div>
														
															</div>
															<div class="card-body">
																<p>Form validation works only online. Check by activating local server.</p>
															</div>
															<div class="card-footer text-muted justify-content-between">
																<div>
																	<span class="task-counter">
																		<span><i class="ri-checkbox-line"></i></span>
																		<span>18/18</span>
																	</span>
																</div>
																<div>
																	<span class="task-deadline">
																		28 Sep, 22
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card card-simple card-border tasklist">
												<div class="card-header card-header-action">
													<div class="tasklist-handle">
														<h6 class="text-uppercase fw-bold  d-flex align-items-center mb-0"><span class="tasklist-name">Pending</span><span class="badge badge-pill badge-soft-violet ms-2">7</span></h6>
														<div class="card-action-wrap">
															<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-horizontal"></i></span></span></a>
															<div role="menu" class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item edit-tasklist" href="#" data-bs-toggle="modal" data-bs-target="#edit_task_list">Edit</a>
																<a class="dropdown-item delete-tasklist" href="#">Delete</a>
																<a class="dropdown-item clear-tasklist" href="#">Clear All</a>
															</div>
														</div>
													</div>
													<button class="btn btn-white btn-block btn-add-newtask" data-bs-toggle="modal" data-bs-target="#add_new_card"><span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span></button>
												</div>
												<div data-simplebar class="card-body">
													<div id="i4" class="tasklist-cards-wrap">
														<div class="card card-border card-simple tasklist-card">
															<div class="card-header card-header-action">
																<h6 class="fw-bold">Authentication</h6>
																<div class="card-action-wrap">
																	<a class="btn btn-xs btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#task_detail"><span class="feather-icon dropdown-icon"><i data-feather="edit-2"></i></span><span>Edit</span></a>
																		<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="user"></i></span><span>Assign to</span></a>
																		<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="paperclip"></i></span><span>Attach files</span></a>
																		<a class="dropdown-item delete-task" href="#"><span class="feather-icon dropdown-icon"><i data-feather="trash-2"></i></span><span>Delete</span></a>
																	</div>
																</div>
															</div>
															<div class="card-body">
																<div>
																	<span class="badge badge-soft-light my-1">Unassigned</span>
																	<span class="badge badge-soft-danger my-1">Collaborator</span>
																</div>
															</div>
															<div class="card-footer text-muted justify-content-between">
																<div>
																	<span class="task-counter">
																		<span><i class="ri-checkbox-line"></i></span>
																		<span>12/18</span>
																	</span>
																	<span class="task-discuss">
																		<span><i class="ri-message-3-line"></i></span>
																		<span>24</span>
																	</span>
																</div>
																<div>
																	<span class="task-deadline">
																		22 Sep, 20
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card card-simple card-border tasklist add-new-task">
												<button class="btn btn-soft-primary btn-add-newlist flex-shrink-0"  data-bs-toggle="modal" data-bs-target="#add_task_list">Add New List</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
						
						
						
					
						
					
						
					
						
						
					</div>
				</div>
			</div>
			<!-- /Page Body -->
		</div>
		<!-- /Main Content -->
	</div>
    <!-- /Wrapper -->

 <!-- Add New Card -->
	 <div id="add_new_card" class="modal fade add-new-task" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h5 class="mb-4">Create New Card</h5>
					<form>
						<div class="row gx-3">
							<div class="col-sm-12">
								<div class="form-group">
									<label class="form-label">Name</label>
									<input class="form-control task-name" type="text"/>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label class="form-label">Start Date</label>
									<input class="form-control" name="single-date-pick" type="text"/>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label class="form-label">End Date</label>
									<input class="form-control" name="single-date-pick" type="text"/>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Note/Description</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group mt-3">
									<label class="form-label">Set priority:</label>
									<div class="form-check form-check-inline">
										<div class="form-check form-check-primary">
											<input type="radio" id="customRadioc2" name="customRadioc2" class="form-check-input">
											<label class="form-check-label" for="customRadioc2">High</label>
										</div>
									</div>
									<div class="form-check form-check-inline">
										<div class="form-check form-check-primary">
											<input type="radio" id="customRadioc3" name="customRadioc2" class="form-check-input">
											<label class="form-check-label" for="customRadioc3">Medium</label>
										</div>
									</div>
									<div class="form-check form-check-inline">
										<div class="form-check form-check-primary">
											<input type="radio" id="customRadioc4" name="customRadioc2" class="form-check-input">
											<label class="form-check-label" for="customRadioc4">Low</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer align-items-center">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary btn-add-task" >Add</button>
				</div>
			</div>
		</div>
	</div>
<!-- /Add New Card -->
<!-- Add Task List -->
	<div id="add_task_list" class="modal fade add-tasklist-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h5 class="mb-4">Add Task List</h5>
					<form>
						<div class="row gx-3">
							<div class="col-sm-12">
								<div class="form-group">
									<label class="form-label">Name</label>
									<input class="form-control" type="text"/>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer align-items-center">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary btn-add-tasklist" >Add</button>
				</div>
			</div>
		</div>
	</div>
<!-- /Add Task List -->
@endsection