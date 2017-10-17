@extends('admin.layouts.master')
@section('content')
<div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class="absolute-wrapper"> </div> -->
    <!-- Menu -->
    @include('admin.layouts.partials.sidemenu')

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="side-body">
            <h1> Business Listings </h1>
            <p>Add or modify your business listings details.</p>
            <div class="container">
                <div class="row">


                    <div class="col-md-12">
                        <h4> Control Panel </h4>
                        <div class="table-responsive">


                            <table id="mytable" class="table table-bordred table-striped">

                                <thead>

                                    <th>
                                        <input type="checkbox" id="checkall" />
                                    </th>
                                    <th>Business Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Edit</th>

                                    <th>Delete</th>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <input type="checkbox" class="checkthis" />
                                        </td>
                                        <td>Mohsin</td>
                                        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                        <td>isometric.mohsin@gmail.com</td>
                                        <td>+923335586757</td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="Edit">
                                                <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span>
                                                </button>
                                            </p>
                                        </td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" class="checkthis" />
                                        </td>
                                        <td>Mohsin v1</td>
                                        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                        <td>isometric.mohsin@gmail.com</td>
                                        <td>+923335586757</td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="Edit">
                                                <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span>
                                                </button>
                                            </p>
                                        </td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                            </p>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <input type="checkbox" class="checkthis" />
                                        </td>
                                        <td>Mohsin v2</td>
                                        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                        <td>isometric.mohsin@gmail.com</td>
                                        <td>+923335586757</td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="Edit">
                                                <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span>
                                                </button>
                                            </p>
                                        </td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                            </p>
                                        </td>
                                    </tr>



                                    <tr>
                                        <td>
                                            <input type="checkbox" class="checkthis" />
                                        </td>
                                        <td>Mohsin v3</td>
                                        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                        <td>isometric.mohsin@gmail.com</td>
                                        <td>+923335586757</td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="Edit">
                                                <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span>
                                                </button>
                                            </p>
                                        </td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                            </p>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <input type="checkbox" class="checkthis" />
                                        </td>
                                        <td>Mohsin v4</td>
                                        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                        <td>isometric.mohsin@gmail.com</td>
                                        <td>+923335586757</td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="Edit">
                                                <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span>
                                                </button>
                                            </p>
                                        </td>
                                        <td>
                                            <p data-placement="top" data-toggle="tooltip" title="Delete">
                                                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                            </p>
                                        </td>
                                    </tr>


                                </tbody>

                            </table>

                            <div class="clearfix"></div>
                            <ul class="pagination pull-right">
                                <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                </li>
                                <li class="active"><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection