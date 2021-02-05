@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a new artical </div>
                    <div class="card-body">
                        <div class="container" id="forma" style="width:100%; min-width:300px; max-width:75vh;">
                            <form action="/register_article" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="naslov">title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="tekst">content</label>
                                    <textarea rows="7" cols="30" class="form-control" name="content" style="resize:none;">
                                    </textarea>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="autor">author</label>
                                            <input type="text" class="form-control" name="author">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="datum">date</label>
                                            <input type="date" class="form-control" name="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                </div>
                            </form>
                        </div>                    
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>
@endsection
