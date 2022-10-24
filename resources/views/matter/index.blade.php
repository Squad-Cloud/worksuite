@extends('layouts.app')

@section('content')
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        <div class="container-xxl">
        <!-- Page Header -->
        <div class="hk-pg-header pt-7 pb-4">
            <h1 class="pg-title"></h1>
            <p> </p>
        </div>
        <!-- /Page Header -->
        <!-- Page Body -->
        <div class="hk-pg-body">
          <!-- Start -->
            <div class="row">
            <h5 class="col-sm-8 mt-2">Matters</h5>
            <div class="col-sm-4">						
                <div>
                    <a href="{{route('add_matter')}}" class="btn btn-primary btn-sm btn btn-outline-primary">Add new matter+</a>
                    <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-save"></i>    Export</button>
                </div>
            </div>
        </div>
        
            <div class="row">
                <div class="col-sm-8">
                    <div class="col-lg-2">
                    <div class="form-group">
                        <select class="form-select">
                            <option selected>10</option>
                      
                        </select>
                    </div>
                </div>
            </div>
                <div class="col-sm-4">
                    <div class="input-group">
                        <div class="form-outline">
                          <input type="search" id="form1" class="form-control" placeholder="Search" />
                          <!-- <label class="form-label" for="form1">Search</label> -->
                        </div>
                     
                      </div>
                </div>
        </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Matetr ID</th>
                <th scope="col">Client</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($matter as $key => $item)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>EMP-0{{$item->id}}</td>
                    <td>{{$item->client->name}}</td>
                    <td>{{$item->client->email}}</td>
                    <td>{{$item->open_date}}</td>
                    <td><i class="bi bi-share"></i></td>
                  </tr>
                @empty
                <tr>
                    <td>No Data Foundtd</td>
                </tr>
                @endforelse
              
            </tbody>
          </table>
          <!-- start ends -->
        </div>
        <!-- /Page Body -->		
    </div>
    </div>
@endsection
