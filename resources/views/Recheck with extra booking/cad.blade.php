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
                            <td>Buyer : {{$items["buyer"]}}</td>
                            <td>Order No. : {{$items["orderNo"]}}</td>
                        </tr>
                        <tr>
                            <td>Color : {{$items["color"]}}</td>
                            <td>Item : {{$items["item"]}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-2"></div>
            </div>

            <!-- CAD 2 input -->

            <div class="row">
                <h4 align="center"> Marker pcs input :</h4>

                <form class="form-horizontal" action="/recheck/cad/addMarker" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="addMarkerPcs"
                                   placeholder="Marker pcs">
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">
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
                    <form class="form-horizontal" action="/recheck/cad/uploadFile" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <select class="form-control" id="sel1" name="sel1">
                                        <option selected disabled>Select a Marker pcs</option>

                                        {{--showing marker pcs from database--}}
                                        @foreach($db  as $markerPcs)
                                            <option>{{$markerPcs["MarkerPcs"]}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <label class="btn btn-default btn-file"> <input type="file" hidden name="userFile" id="userFile" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
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


            {{-- <!-- CAD 1 input -->
             <div class="row">
                 <h4 align="center"><i>Marker Length (in meters) input : </i></h4>
                 <div class="col-sm-4"></div>
                 <div class="col-sm-4">
                     <form action="/recheck/cad/updateMarkerLength" method="post">
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                         <div class="form-group">
                             <select class="form-control" name="selectedMarkerPcs">
                                 <option selected disabled>Select a Marker pcs</option>
                                 --}}{{--showing marker pcs from database--}}{{--
                                 @foreach($db  as $markerPcs)
                                     <option>{{$markerPcs["MarkerPcs"]}}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control" name="updateMarkerLength"
                                    placeholder=""></td>
                         </div>
                             <button type="submit" class="btn btn-primary btn-block" name="update" value="update">
                                 Update
                             </button>
                         <button type="submit" class="btn btn-primary btn-block" name="update" value="update">
                             View All inputs
                         </button>
                     </form>
                 </div>
             </div>
         </div>
         <div class="col-sm-4"></div>
     </div>
     </form>
 </div>--}}

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

                            showing marker pcs and marker length from database to update
                            @foreach($db  as $markerPcs)
                                <form action="/recheck/cad/updateMarkerLength" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                                    <tr>
                                        <td>{{$markerPcs["MarkerPcs"]}}</td>
                                        <td>{{$markerPcs["markerLengthInMeter"]}}</td>
                                        <input type="hidden" name="hiddenMarkerPcs" value={{$markerPcs["MarkerPcs"]}}>
                                        <input type="hidden" name="hiddenMarkerLength"
                                               value={{$markerPcs["markerLengthInMeter"]}}>
                                        <td><input type="text" class="form-control" name="updateMarkerLength"
                                                   placeholder=""></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary" name="update" value="update">
                                                Update
                                            </button>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Delete</button>
                                        </td>
                                    </tr>

                                </form>
                            @endforeach
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

                            {{--showing marker pcs and piles from database to update--}}
                            @foreach($db  as $markerPcs)
                                <form action="/recheck/cad/updatePiles" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <tr>
                                        <td>{{$markerPcs["MarkerPcs"]}}</td>
                                        <td>{{$markerPcs["Piles"]}}</td>

                                        <input type="hidden" name="pilesHiddenMarkerPcs" value={{$markerPcs["MarkerPcs"]}}>
                                        <input type="hidden" name="hiddenMarkerpiles"
                                               value={{$markerPcs["Piles"]}}>

                                        <td><input type="text" class="form-control" name="updatePiles"
                                                   placeholder=""></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Delete</button>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach

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

                            {{--showing marker pcs and marker length from database to update--}}
                            @foreach($db  as $markerPcs)
                                <form action="/recheck/cad/updateMarkerPcs" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <tr>
                                    <td>{{$markerPcs["MarkerPcs"]}}</td>
                                    <input type="hidden" name="updateHiddenMarkerPcs" value={{$markerPcs["MarkerPcs"]}}>
                                    <td><input type="text" class="form-control" name="updateMarkerPcs"
                                               placeholder=""></td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </td>
                                </tr>
                                </form>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3"></div>
                </div>

            </div>
        </div>

    </div>
@endsection