@extends('main')

@section('title')
    Home
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/recheckCAD.css') }}" rel="stylesheet">
@endsection

@section('ContentOfBody')
    <div class="container">
        <h1 align="center">Home</h1>

        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form>
                    <div class="form-group">
                        <select class="form-control" id="sel1">
                            <option selected disabled>Select a Department</option>
                            <option>Merchandising</option>
                            <option>CAD</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="input"
                               placeholder="Enter Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Login
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection