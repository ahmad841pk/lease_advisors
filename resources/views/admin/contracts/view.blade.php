@extends('admin.layouts.master')
@section('title')
    Contract View
@endsection
@section('extra_vendor_css')
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
@endsection
@section('extra_page_css')
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">
@endsection
@section('index')

    <!-- Basic table -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card" style="width: 30%">
                <div class="card-header">
                    <div class="col-md-6 mb-1" style="width: 100%">
                        <label class="form-label" for="fp-default"><h3>Expiry Date Filter:</h3></label>
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="table-responsive card-body">
                    <table class="table" id="tenants">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Properties</th>
                            <th>Expiry Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ed Muna</td>
                            <td>22 Jan, 2024</td>
                            <td>
                                <a class="btn btn-success" href="{{route('admin.contracts.view')}}">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Craig Henderlite</td>
                            <td>22 Jan, 2025</td>
                            <td>
                                <a class="btn btn-info" href="{{route('admin.contracts.view')}}">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tina Laser</td>
                            <td>22 Jan, 2026</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('admin.contracts.view')}}">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ed Muna</td>
                            <td>22 Jan, 2024</td>
                            <td>
                                <a class="btn btn-warning" href="{{route('admin.contracts.view')}}">View</a>
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
    <script src="{{asset('backend/app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
@endsection
@section('page_js')
    <script src="{{asset('backend/app-assets/js/scripts/tables/table-datatables-basic.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/scripts/forms/pickers/form-pickers.js')}}"></script>

@endsection
@section('extra_script')
    <script>
        $(document).ready(function () {
            $('#tenants').DataTable();
        });
    </script>

@endsection
