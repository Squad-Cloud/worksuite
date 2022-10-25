@extends('layouts.app')
@section('content')
    <!-- Wrapper -->
	<div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
	


		<!-- Main Content -->
		<div class="hk-pg-wrapper">
			<div class="container-xxl">
				<!-- Page Header -->
				<div class="hk-pg-header pt-7 pb-4">
					<h1 class="pg-title">Billing</h1>
					<p>billing view table </p>
				</div>
				<!-- /Page Header -->

				<!-- Page Body -->
				<div class="hk-pg-body">
																			
<table class="table">
	<thead>
		<tr>
		<th scope="col">#</th>
		<th scope="col">NAME</th>
		<th scope="col">DUE DATE</th>
		<th scope="col">ASSIGNED BY</th>
		<th scope="col">ASSIGNED TO</th>
		<th scope="col"> STATUS </th>
		<th scope="col">ACTIONS</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<th scope="row">1</th>
		<td>Mark</td>
		<td>Otto</td>
		<td>@mdo</td>
		<td>Jacob</td>
		<td>
            <select class="form-select" type=""  value=""/>
            <option selected>To do</option>
            <option value="1">In house</option>
            </select>
        </td>
		<td><a href="#"><span class="feather-icon"><i data-feather="edit"></i></span></a>
		<a href="#"><span class="feather-icon"><i data-feather="trash-2"></i></span></a></td>
		</tr>
		
	</tbody>
	
</table>
													
				</div>
				<!-- /Page Body -->		
			</div>
			
			<!-- Page Footer -->
			<div class="hk-footer">
				<footer class="container-xxl footer">
					<div class="row">
						<div class="col-xl-8">
							<p class="footer-text"><span class="copy-text">JurisLPM © 2022 All rights reserved.</span> <a href="#" class="" target="_blank">Privacy Policy</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">System Status</a></p>
						</div>
						<div class="col-xl-4">
							<a href="#" class="footer-extr-link link-default"><span class="feather-icon"><i data-feather="external-link"></i></span><u>Send feedback to our help forum</u></a>
						</div>
					</div>
				</footer>
            </div>
            <!-- / Page Footer -->

		</div>
		<!-- /Main Content -->
	</div>
    <!-- /Wrapper -->
    @endsection