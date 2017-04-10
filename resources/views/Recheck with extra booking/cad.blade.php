@extends('main')

@section('title')
    Recheck with extra booking
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/recheckCAD.css') }}" rel="stylesheet">
@endsection

@section('ContentOfBody')
    <div class="container">
        <h1 align="center">CAD Department</h1>
        <div class="row">

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-5">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Buyer : a</td>
                            <td>Order No. : 2</td>
                        </tr>
                        <tr>
                            <td>Color : White</td>
                            <td>Item : 12</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-2"></div>
            </div>

            <!-- CAD 2 input -->

            <div class="row">
                <h4 align="center"> Marker pcs input :</h4>

                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input"
                                   placeholder="Marker pcs">
                        </div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-primary">
                                ADD
                            </button>
                            <button type="button" class="btn btn-primary">
                                EDIT
                            </button>
                        </div>
                    </div>
                </form>

                <!-- CAD 1 input -->
                <div class="row">
                    <h4 align="center"><i>Upload File: </i></h4>
                    <form class="form-horizontal">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <select class="form-control" id="sel1">
                                        <option selected disabled>Select a Marker pcs</option>
                                        <option>500</option>
                                        <option>100</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <label class="btn btn-default btn-file"> <input type="file" hidden>
                                    </label>
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                        </div>
                    </form>
                </div>


                <!-- cad 5 input -->
                <div class="row">
                    <h4 align="center">Marker Length (in meters) input :</h4>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Marker pcs</th>
                                <th>Marker length in meter</th>
                                <th>Update Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>500</td>
                                <td>10</td>
                                <td><input type="text" class="form-control" id="mock up"
                                           placeholder=""></td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </td>

                            </tr>
                            <tr>
                                <td>500</td>
                                <td>10</td>
                                <td><input type="text" class="form-control" id="mock up"
                                           placeholder=""></td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3"></div>
                </div>

                <!-- cad 4 Piles -->
                <div class="row">
                    <h4 align="center">Piles input :</h4>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Marker pcs</th>
                                <th>pilesph</th>
                                <th>Update Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>500</td>
                                <td>10</td>
                                <td><input type="text" class="form-control" id="mock up"
                                           placeholder=""></td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </td>

                            </tr>
                            <tr>
                                <td>500</td>
                                <td>10</td>
                                <td><input type="text" class="form-control" id="mock up"
                                           placeholder=""></td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3"></div>
                </div>


                <!-- edit option for marker pcs -->
                <div class="row">
                    <h4 align="center">Edit Marker pcs</h4>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Marker pcs</th>
                                <th>Update Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>500</td>
                                <td><input type="text" class="form-control" id="mock up"
                                           placeholder=""></td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </td>

                            </tr>
                            <tr>
                                <td>500</td>
                                <td><input type="text" class="form-control" id="mock up"
                                           placeholder=""></td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3"></div>
                </div>

            </div>
        </div>

    </div>
@endsection