@extends('layouts.app')

@section('content')
<div class="container">
                    <h1>Jobs</h1>

                    @foreach($job as $jobs)
                        
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            <h3 class="card-title"><strong>{{$jobs->title}}</strong></h3>
                                            <h5 class="card-text"><strong>{{$jobs->category}}</strong></h5>
                                            
                                            <strong>Location</strong> : <p>{{$jobs->location}}</p>
                                            <p class="card-text">{{$jobs->excerpt}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        <br>

                    @endforeach
</div>
@endsection
