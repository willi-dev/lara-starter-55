@extends('layouts.app-admin')

@section('content-admin')
<div>
    @include('_partials.sidebar-left')
    
     <div class="page-container">
        @include('_partials.header-nav')

        <main class="main-content bgc-grey-100">
            <div id="mainContent">
                <div class="container-fluid">
                    <h4 class="c-grey-900 mT-10 mB-30">Google Maps</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                <h6 class="c-grey-900 mB-20">Google Maps</h6>
                                <div id="google-map" style="padding-bottom:75%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        @include('_partials.footer-content')

    </div>

</div>

@endsection