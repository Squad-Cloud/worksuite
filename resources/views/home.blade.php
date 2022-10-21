@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{-- {{ session('status') }} --}}
                           
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="">@lang('heading.nam;e')</label>
                        <input type="text" name="" id="">
                    </div>
                    
                    <div class="form-group">
                        <label for="">{{ __('heading.age') }}</label>
                        <input type="text" name="" id="">
                    </div>
                    {{ __('validation.accepted') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
