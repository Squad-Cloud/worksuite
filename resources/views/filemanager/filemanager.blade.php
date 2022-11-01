@extends('layouts.app')

@section('content')     
 <!-- Styles -->
 <link href="{{ asset('vendor/file-manager/css/file-manager.css') }}" rel="stylesheet">
 <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
    <!-- Main Content -->
    <div class="hk-pg-wrapper">
        <div class="container-xxl">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="fm-main-block">
                <div id="fm"></div>
            </div>
        </div>
    </div>
</div></div></div>
@section('content')     

    <!-- File manager -->
@push('scripts')
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

    <script>

      document.addEventListener('DOMContentLoaded', function() {

        document.getElementById('fm-main-block').setAttribute('style', 'height:' + window.innerHeight + 'px');

  

        fm.$store.commit('fm/setFileCallBack', function(fileUrl) {

          window.opener.fmSetLink(fileUrl);

          window.close();

        });

      });

    </script>
    @endpush