@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    You are logged in!
                    
                </div>
            </div>
            <form action="{{ route('master') }}">
                <div class="form-group row mb-1">
                    <div class="col-md-8 offset-md-1">
                        <button type="submit" class="btn btn-primary">
                            {{__('Home')}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
