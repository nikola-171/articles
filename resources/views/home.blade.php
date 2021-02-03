@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <!--@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif-->

                   <!-- {{ __('You are logged in!') }}-->
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="naslov">naslov</label>
                            <input type="text" class="form-control" name="naslov">
                        </div>
                        <div class="form-group">
                            <label for="tekst">tekst</label>
                            <input type="text" class="form-control" name="tekst">
                        </div>
                        <div class="form-group">
                            <label for="autor">autor</label>
                            <input type="text" class="form-control" name="autor">
                        </div>
                        <div class="form-group">
                            <label for="datum">datum</label>
                            <input type="date" class="form-control" name="datum">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">prosledi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
