@extends('layouts.joblist')

@section('content')
<div class="container">
                    <h1 class="display-5" style="font-family: Gill Sans, sans-serif;"><strong>Open Positions</strong></h1>
                    
                    <br>

                    @foreach($job as $jobs)
                    <div class="row justify-content-center" style="font-family: Gill Sans, sans-serif;">
                    <div class="col-md-8">
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            
                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            <h3><center><strong>{{$jobs->title}}</strong></center></h3>
                                            <p class="text-justify">{{$jobs->excerpt}}</p>
                                            <p><strong>Job Category</strong> : {{$jobs->category}}</p>
                                            <p><strong>Job Location</strong> : {{$jobs->location}}</p>
                                        </div>
                                    
                                
                            </div>
                        </div>
                        <br>

                    @endforeach
</div>
@endsection
