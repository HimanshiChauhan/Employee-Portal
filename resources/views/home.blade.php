@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Job Details</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Enter the job details in the form below !!
                     

                    <form method="POST" action="{{ route('job-form') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="job_title" class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>

                            <div class="col-md-6">
                                <input id="name" name="title" type="text" class="form-control{{ $errors->has('job_title') ? ' is-invalid' : '' }}" name="job_title" value="{{ old('job_title') }}" required autofocus>

                                @if ($errors->has('job_title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('job_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="job_excerpt" class="col-md-4 col-form-label text-md-right">{{ __('Job Excerpt') }}</label>

                            <div class="col-md-6">
                            <textarea name="excerpt" class="form-control{{ $errors->has('job_excerpt') ? ' is-invalid' : '' }}" rows="2" id="comment"></textarea>

                                @if ($errors->has('job_excerpt'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('job_excerpt') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="job_location" class="col-md-4 col-form-label text-md-right">{{ __('Job Location') }}</label>

                            <div class="col-md-6">
                                <input id="password" name="location" type="text" class="form-control{{ $errors->has('job_location') ? ' is-invalid' : '' }}" name="job_location" required>

                                @if ($errors->has('job_location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('job_location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" name="category" id="sel1">
                                <option>Design</option>
                                <option>Engineering</option>
                                <option>Marketing</option>
                                <option>SEO</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Job Description') }}</label>

                            <div class="col-md-6">
                            <textarea class="form-control" name="description" rows="5" id="comment"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
