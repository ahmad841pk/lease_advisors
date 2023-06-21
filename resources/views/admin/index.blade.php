@extends('admin.layouts.master')
@section('title')
    Tenants
@endsection
@section('extra_vendor_css')
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
@endsection
@section('index')

    <!-- Basic table -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive card-body">
                    <table class="table" id="tenants">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="{{asset('backend/ed_muna/pic.jpeg')}}" height="60" width="70">
                            </td>
                            <td>Ed</td>
                            <td>Muna</td>
                            <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                            <td>
                                <a class="btn btn-primary" href="{{route('admin.contracts.view')}}">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <img src="{{asset('backend/ed_muna/pic2.jpeg')}}" height="60" width="70">
                            </td>
                            <td>Craig</td>
                            <td>Henderlite</td>
                            <td><span class="badge rounded-pill badge-light-success me-1">Completed</span></td>
                            <td>
                                <a class="btn btn-primary" href="{{route('admin.contracts.view')}}"></i>View</a>

                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <img src="{{asset('backend/ed_muna/pic3.jpg')}}" height="60" width="70">
                            </td>
                            <td>Tina</td>
                            <td>Laser</td>
                            <td><span class="badge rounded-pill badge-light-info me-1">Scheduled</span></td>
                            <td>
                                <a class="btn btn-primary" href="{{route('admin.contracts.view')}}">View</a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!--/ Basic table -->

@endsection
@section('extra_page_vendor_js')
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
@endsection
@section('page_js')
    <script src="{{asset('backend/app-assets/js/scripts/tables/table-datatables-basic.js')}}"></script>
@endsection
@section('extra_script')
    <script>
        $(document).ready(function () {
            $('#tenants').DataTable();
        });
    </script>

@endsection
