@extends('index')
@section('title','Company')
@section('content')
<!-- CONTAINER OPEN -->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Add Company</h1>
                <div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Company</h3>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" id="myForm" action="" method="POST" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="form-row">


                                <div class="col-xl-12 mb-3">
                                    <label for="validationCustom01" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="" id="validationCustom01"
                                        required>
                                    <div class="invalid-feedback">Please provide a name.</div>
                                </div>


                            </div>
                            <button class="btn btn-primary" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="row row-cards">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Companies</h3>
                            <div class="page-options ms-auto">

                            </div>
                        </div>
                        <div class="card-header border-bottom-0 row">
                            <div class="page-options ms-auto">

                            </div>
                        </div>
                        <div class="e-table px-5 pb-5">
                            <div class="table-responsive table-lg">
                                <table class="table border-top table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NO.</th>
                                            <th class="text-center">Name</th>

                                        </tr>
                                    </thead>
                                    <tbody id="appendData">
                                    </tbody>
                                </table>
                                <div class="float-end mt-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault();
            var name = $("input[name='name']").val();
            var payload = {
                'name': name
            };
            if (!name) {
                return;
            }
            $.ajax({
                url: "{{ route('addCompany') }}",
                type: 'POST',
                data: payload,
                dataType: 'json',
                success: function(response) {
                    $("input[name='name']").val(null);
                    ajaxCall();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        });
    });

    function ajaxCall(){
            $.ajax({
                url: "{{ route('getCompany') }}",
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#appendData').empty();
                    response.data.forEach((element,index) => {
                            $('#appendData').append(`<tr>
                            <td class="align-middle text-center">
                                <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">${index+1}
                                </div>
                            </td>
                            <td class="text-nowrap align-middle text-center">${element.name}
                            </td>
                            </tr>`);
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }
        ajaxCall();
</script>
