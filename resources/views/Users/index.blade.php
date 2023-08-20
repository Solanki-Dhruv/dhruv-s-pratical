@extends('index')
@section('title','Users')
@section('content')
<!-- CONTAINER OPEN -->

<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid" id="addUser">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Add Users</h1>
                <div>

                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Users</h3>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" method="POST" id="userForm" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="form-row">

                                <div class="col-xl-6 mb-3">
                                    <label for="validationCustom01" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" oninput="validateInput(this)" value="" id="validationCustom01"
                                        required>
                                    <div class="invalid-feedback">Please provide a name.</div>
                                </div>

                                <div class="col-xl-6 mb-3">
                                    <label for="validationCustom01" class="form-label">Email</label>
                                    <input type="email" name="email" oninput="validateEmail(this)" class="form-control" value="" id="validationCustom01"
                                        required>
                                    <div class="invalid-feedback">Please provide a email.</div>
                                </div>

                                <div class="col-xl-6 mb-3">
                                    <label for="validationCustom01" class="form-label">Mobile</label>
                                    <input type="number" name="mobile" class="form-control" value="" id="validationCustom01"
                                        required>
                                    <div class="invalid-feedback">Please provide a Mobile.</div>
                                </div>

                                <div class="col-xl-6 mb-3">
                                    <label for="validationCustom01" class="form-label">Company</label>
                                    <select  name="company" class="form-control select2-show-search" value="" id="validationCustom01"
                                        required>
                                        <option value="{{null}}">Select Company</option>

                                        @foreach($companies as $data)
                                            <option value="{{$data->uuid}}">{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please provide a company.</div>
                                </div>

                                <div class="col-xl-6 mb-3">
                                    <label for="validationCustom01" class="form-label">Experiance</label>
                                    <input type="number" name="experience" class="form-control" value="" id="validationCustom01"
                                        required>
                                    <div class="invalid-feedback">Please provide a experiance.</div>
                                </div>

                                <div class="col-xl-4 mb-3" style="margin-bottom: 15px !important;margin-top:15px">
                                    <label for="validationCustom" class="form-label">Hobby</label>

                                    <div class="form-check" style="display:inline-block">
                                        <input class="form-check-input" type="checkbox" name="hobby[]"
                                            id="validationCustom" value="cricket" checked>
                                        <label class="form-check-label" for="validationCustom061">
                                            Cricket
                                        </label>
                                    </div>
                                    <div class="form-check" style="display:inline;margin-left:12px">
                                        <input class="form-check-input" type="checkbox" name="hobby[]" value="games"
                                            id="validationCustom" >
                                        <label class="form-check-label" for="validationCustom24">
                                            Games
                                        </label>
                                    </div>
                                    <div class="form-check" style="display:inline;margin-left:12px">
                                        <input class="form-check-input" type="checkbox" name="hobby[]" value="reading"
                                            id="validationCustom" >
                                        <label class="form-check-label" for="validationCustom24">
                                            Reading
                                        </label>
                                    </div>
                                    <div class="invalid-feedback" id="hobbyErrorMessage"></div>
                                </div>

                                <div class="col-xl-4 mb-3" style="margin-bottom: 15px !important;margin-top:15px">
                                    <label for="validationCustom01" class="form-label">Gender</label>

                                    <div class="form-check" style="display:inline-block">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="validationCustom24" value="male" checked>
                                        <label class="form-check-label" for="validationCustom061">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check" style="display:inline;margin-left:12px">
                                        <input class="form-check-input" type="radio" name="gender" value="female"
                                            id="validationCustom24" >
                                        <label class="form-check-label" for="validationCustom24">
                                            Female
                                        </label>
                                    </div>

                                </div>

                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">Message:</label>
                                    <div class="mb-4">
                                        <textarea class="form-control" rows="3" id="validationCustom02" name="message" spellcheck="false" required></textarea>
                                    </div>
                                </div>

                                <div class="col-xl-12 mb-3" id="fileInput">
                                    <label for="imgInp" class="form-label">Profile Image</label>
                                    <div class="form-group">
                                        <input type="file" class=""
                                            data-default-file="" data-bs-height="80"
                                            accept="image/*"  name="image" id="file"  />
                                    </div>
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
                            <h3 class="card-title">Users</h3>
                            <div class="page-options ms-auto">

                            </div>
                        </div>
                        <div class="card-header border-bottom-0 row">
                            <div class="page-options ms-auto">

                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control" placeholder="Search" name="search"
                                            value="" id="searchFunction" >
                                        <a class="btn btn-primary input-group-text btn btn-primary" id="clearFunction"><i
                                                 aria-hidden="true"></i>Clear</a>
                                    </div>

                            </div>
                        </div>
                        <div class="e-table px-5 pb-5">
                            <div class="table-responsive table-lg">
                                <table class="table border-top table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NO.</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Hobby</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="appendUsers">

                                    </tbody>
                                </table>
                                <button id="viewMoreButton" class="btn btn-primary mt-3" style="display: flex;justify-content:center;margin:auto">View More</button>

                                <div class="float-end mt-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="main-container container-fluid" id="updateUser" style="display: none">
            <div class="page-header">
                <h1 class="page-title">Update Users</h1>
                <div>

                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Users</h3>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" method="POST" id="userUpdateForm" enctype="multipart/form-data" novalidate>
                            @csrf

                            <input type="hidden" name="uuid" class="form-control"  value="" id="validationCustom01">

                            <div class="form-row">
                                <div class="col-xl-6 mb-3">
                                    <label for="validationCustom01" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" oninput="validateInput(this)" value="" id="name"
                                        required>
                                    <div class="invalid-feedback">Please provide a name.</div>
                                </div>

                                <div class="col-xl-6 mb-3">
                                    <label for="validationCustom01" class="form-label">Email</label>
                                    <input type="email" name="email" oninput="validateEmail(this)" class="form-control" value="" id="email"
                                        required>
                                    <div class="invalid-feedback">Please provide a email.</div>
                                </div>

                                <div class="col-xl-6 mb-3">
                                    <label for="validationCustom01" class="form-label">Mobile</label>
                                    <input type="number" name="mobile" class="form-control" value="" id="mobile"
                                        required>
                                    <div class="invalid-feedback">Please provide a Mobile.</div>
                                </div>

                                <div class="col-xl-6 mb-3">
                                    <label for="validationCustom01" class="form-label">Company</label>
                                    <select  name="company" class="form-control select2-show-search" value="" id="company"
                                        required>
                                    </select>
                                    <div class="invalid-feedback">Please provide a company.</div>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="validationCustom01" class="form-label">Experiance</label>
                                    <input type="number" name="experience" class="form-control" value="" id="experience"
                                        required>
                                    <div class="invalid-feedback">Please provide a experiance.</div>
                                </div>

                                <div class="col-xl-4 mb-3" style="margin-bottom: 15px !important;margin-top:15px">
                                    <label for="validationCustom" class="form-label">Hobby</label>

                                    <div class="form-check" style="display:inline-block">
                                        <input class="form-check-input" type="checkbox" name="hobbies[]"
                                            id="cricket" value="cricket" checked>
                                        <label class="form-check-label" for="validationCustom061">
                                            Cricket
                                        </label>
                                    </div>
                                    <div class="form-check" style="display:inline;margin-left:12px">
                                        <input class="form-check-input" type="checkbox" name="hobbies[]" value="games"
                                            id="games" >
                                        <label class="form-check-label" for="validationCustom24">
                                            Games
                                        </label>
                                    </div>
                                    <div class="form-check" style="display:inline;margin-left:12px">
                                        <input class="form-check-input" type="checkbox" name="hobbies[]" value="reading"
                                            id="reading" >
                                        <label class="form-check-label" for="validationCustom24">
                                            Reading
                                        </label>
                                    </div>
                                    <div class="invalid-feedback" id="hobbyErrorMessage"></div>
                                </div>

                                <div class="col-xl-4 mb-3" style="margin-bottom: 15px !important;margin-top:15px">
                                    <label for="validationCustom01" class="form-label">Gender</label>

                                    <div class="form-check" style="display:inline-block">
                                        <input class="form-check-input" type="radio" name="genders"
                                            id="male" value="male">
                                        <label class="form-check-label" for="validationCustom061">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check" style="display:inline;margin-left:12px">
                                        <input class="form-check-input" type="radio" name="genders" value="female"
                                            id="female">
                                        <label class="form-check-label" for="validationCustom24">
                                            Female
                                        </label>
                                    </div>

                                </div>

                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">Message:</label>
                                    <div class="mb-4">
                                        <textarea class="form-control" rows="3" id="message" name="message" spellcheck="false" required></textarea>
                                    </div>
                                </div>

                                <div class="col-xl-12 mb-3" id="fileInputData">
                                    <label for="imgInp" class="form-label">Profile Image</label>
                                    <div class="form-group">
                                        <input type="file" class=""
                                            data-default-file="" data-bs-height="80"
                                            accept="image/*"  name="image" id="updateFile"  />
                                    </div>
                                    <input type="text" id="inputField" placeholder="Enter text">
                                </div>

                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script>

let currentPage = 1;
var previousSearch = null
const itemsPerPage = 3;


    $(document).ready(function () {

$('#searchFunction').on('change',function(){
    previousSearch = $("#searchFunction").val();
    currentPage = 1;
    $('#appendUsers').empty();
    showListing(currentPage,previousSearch);
});

        $('#viewMoreButton').click(function () {
            currentPage++;
            showListing(currentPage,previousSearch);
        });

        $("#userForm").submit(function (event) {
        event.preventDefault();

        var formData = new FormData();

        var name = $("input[name='name']").val();
        var email = $("input[name='email']").val();
        var mobile = $("input[name='mobile']").val();

        var selectElement = document.getElementById('company');
        var selectedValue = selectElement.value;
        var company = $("select[name='company']").val();


        var experience = $("input[name='experience']").val();
        var message = $("textarea[name='message']").val();
        var hobbies = [];
        $("input[name='hobby[]']:checked").each(function () {
            hobbies.push($(this).val());
        });

        var gender = $("input[name='gender']:checked").val();
        var fileInput = document.getElementById("file");
        var selectedFile = fileInput.files[0];

        if (!name || !email || !mobile || !company || !experience || !message || hobbies.length === 0 || !gender || !selectedFile) {

            if (!name) $("input[name='name']").addClass("is-invalid");
            if (!email) $("input[name='email']").addClass("is-invalid");
            if (!mobile) $("input[name='mobile']").addClass("is-invalid");
            if (!company) $("select[name='company']").addClass("is-invalid");
            if (!experience) $("input[name='experience']").addClass("is-invalid");
            if (!message) $("textarea[name='message']").addClass("is-invalid");
            if (hobbies.length === 0) $("#hobbyErrorMessage").text("Please select at least one hobby.").addClass("text-danger");
            if (!gender) $("input[name='gender']").addClass("is-invalid");
            if (!selectedFile) $("#fileErrorMessage").text("Please select a file.").addClass("text-danger");
            return;
        } else {
            $(".is-invalid").removeClass("is-invalid");
            $("#hobbyErrorMessage").text("").removeClass("text-danger");
            $("#fileErrorMessage").text("").removeClass("text-danger");
        }

        formData.append('name', name);
        formData.append('email', email);
        formData.append('mobile', mobile);
        formData.append('company', company);
        formData.append('experience', experience);
        formData.append('message', message);
        formData.append('hobby', hobbies);
        formData.append('gender', gender);
        formData.append('image', selectedFile);

            $.ajax({
                type: "POST",
                url: "{{ route('registerUser') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    setNull();
                    $('#appendUsers').empty();
                    currentPage = 1;
                    showListing(currentPage,previousSearch);
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        });

        function showListing(page,search) {
            $.ajax({
                url: "{{ route('allUsers') }}",
                type: 'GET',
                data: { page: page, search: search },
                dataType: 'json',
                success: function(response) {
                    // console.log(response.data.data);
                    // $('#appendUsers').empty();
                    setNull();
                    if(response.data.last_page === page){
                        $('#viewMoreButton').css('display','none');
                    }else{
                        $('#viewMoreButton').css('display','block');
                    }
                    response.data.data.forEach((element,index) => {

                        const calculatedIndex = (page - 1) * itemsPerPage + index + 1;
                            $('#appendUsers').append(`<tr>
                                            <td class="align-middle text-center">
                                                <div
                                                    class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">${calculatedIndex}
                                                </div>
                                            </td>

                                            <td class="text-nowrap align-middle text-center">
                                                ${element.name}
                                            </td>
                                            <td class="text-nowrap align-middle text-center">
                                                ${ element.hobby != null ?  element.hobby: 'N/A'}
                                            </td>
                                            <td class="text-nowrap align-middle text-center">
                                                ${element.email}
                                            </td>
                                            <td class="align-middle text-center"><img alt="image"
                                            class="avatar avatar-md br-7" src="${element.image}">
                                            </td>

                                            <td class="text-center align-middle" style="min-width: 165px">
                                                <a data-user-id="${element.uuid}" class="btn btn-secondary py-1 me-2 update-button">Update</a>
                                                <a  data-user-id="${element.uuid}" class="btn btn-danger py-1 delete-button"><span
                                                        class="bi bi-trash fs-16"></span></a>
                                            </td>
                                        </tr>

                                        `);
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }

        showListing(currentPage,previousSearch);

        function setNull(){
            try{
            $("input[name='name']").val(null);
            $("input[name='email']").val(null);
            $("input[name='mobile']").val(null);
            // $("select[name='company']").prop("selectedIndex", 0);
            $("input[name='experience']").val(null);
            $("textarea[name='message']").val(null);
            $("input[name='hobby[]']").prop("checked", false);
            $("#fileInput").empty();
            $("#fileInput").append(`<div class="col-xl-12 mb-3" id="fileInput">
                                    <label for="imgInp" class="form-label">Profile Image</label>
                                    <div class="form-group">
                                        <input type="file" class="dropify"
                                            data-default-file="" data-bs-height="80"
                                            accept="image/*"  name="image" id="file"  />
                                    </div>
                                </div>`);
            return
            }catch{
                return;
            }
        }

        $('#appendUsers').on('click', '.delete-button', function () {
                var userId = $(this).data('user-id');
                $.ajax({
                url: "/delete-users/"+userId,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#appendUsers').empty();
                    currentPage = 1;
                    showListing(currentPage,previousSearch);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });

        });


        $('#clearFunction').on('click',function(){
            $("input[name='search']").val(null);
            $('#appendUsers').empty();
            currentPage = 1;
            previousSearch = null;
            showListing(currentPage,previousSearch);
        })

        $('#appendUsers').on('click', '.update-button', function () {
    var userId = $(this).data('user-id');

    $.ajax({
        url: "/update-user/" + userId,
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            $('#addUser').css('display', 'none');
            $('#updateUser').css('display', 'block');

            $('#company').empty().append(`<option value="{{null}}">Select Company</option>`);
            response.companies.forEach(function(element) {
                $('#company').append(`<option value="${element.uuid}" ${element.uuid === response.data.company_uuid ? 'selected' : ''}>${element.name}</option>`);
            });

            $("input[name='name']").val(response.data.name);
            $("input[name='email']").val(response.data.email);
            $("input[name='mobile']").val(response.data.mobile);
            $("input[name='experience']").val(response.data.experience);
            $("input[name='uuid']").val(response.data.uuid);
            $("textarea[name='message']").val(response.data.message);

            var gender = response.data.gender;
            if (gender === "male") {
                $("#male").prop("checked", true);
            } else if (gender === "female") {
                $("#female").prop("checked", true);
            }

            // alert(response.data.hobby);
            response.data.hobby.split(',').forEach(function(hobbyValue) {
                $("input[name='hobby[]'][value='" + hobbyValue + "']").prop("checked", true);
            });

            var imageElement = document.getElementById("uploadedImage");

            if (imageElement) {
                imageElement.parentNode.removeChild(imageElement);
            }

            imageElement = document.createElement("img");
            imageElement.src = "{{ asset('') }}" + response.data.image;
            imageElement.height = "100";
            imageElement.width = "100";
            imageElement.id = "uploadedImage";

            var inputField = document.getElementById("inputField");
            inputField.insertAdjacentElement("afterend", imageElement);
            inputField.style.display = 'none';
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
});



$("#userUpdateForm").submit(function (event) {
        event.preventDefault();

        var formData = new FormData();

        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var mobile = document.getElementById('mobile').value;

        var selectElement = document.getElementById('company');
        var selectedValue = selectElement.value;

        var company = selectElement.value;
        var experience = document.getElementById('experience').value;
        var message = document.getElementById('message').value;
        var uuid = $("input[name='uuid']").val();
        var hobbies = [];
        $("input[name='hobbies[]']:checked").each(function () {
            hobbies.push($(this).val());
        });

        var genderRadios = document.getElementsByName("genders");

        var gender;
        for (var i = 0; i < genderRadios.length; i++) {
            if (genderRadios[i].checked) {
                gender = genderRadios[i].value;
                break;
            }
        }

        // alert(gender);

        // var gender = $("input[name='gender']:checked").val();
        var fileInput = document.getElementById("updateFile");
        var selectedFile = fileInput.files[0];

        if (!name || !email || !mobile || !company || !experience || !message || hobbies.length === 0 || !gender) {

            if (!name) $("input[name='name']").addClass("is-invalid");
            if (!email) $("input[name='email']").addClass("is-invalid");
            if (!mobile) $("input[name='mobile']").addClass("is-invalid");
            if (!company) $("select[name='company']").addClass("is-invalid");
            if (!experience) $("input[name='experience']").addClass("is-invalid");
            if (!message) $("textarea[name='message']").addClass("is-invalid");
            if (hobbies.length === 0) $("#hobbyErrorMessage").text("Please select at least one hobby.").addClass("text-danger");
            if (!gender) $("input[name='gender']").addClass("is-invalid");
            // if (!selectedFile) $("#fileErrorMessage").text("Please select a file.").addClass("text-danger");
            return;
        } else {
            $(".is-invalid").removeClass("is-invalid");
            $("#hobbyErrorMessage").text("").removeClass("text-danger");
            $("#fileErrorMessage").text("").removeClass("text-danger");
        }

        formData.append('uuid', uuid);
        formData.append('name', name);
        formData.append('email', email);
        formData.append('mobile', mobile);
        formData.append('company', company);
        formData.append('experience', experience);
        formData.append('message', message);
        formData.append('hobby', hobbies);
        formData.append('gender', gender);

        if(selectedFile){
            formData.append('image', selectedFile);
        }

            $.ajax({
                type: "POST",
                url: "{{ route('updateUserData') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {

                 $('#addUser').css('display', 'block');
                 $('#updateUser').css('display', 'none');
                    // setNull();
                    $('#appendUsers').empty();
                    currentPage = 1;
                    showListing(currentPage,previousSearch);
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        });

    });
</script>
<script>
    function validateInput(inputField) {
      let inputValue = inputField.value;
      let cleanedValue = inputValue.replace(/[^a-zA-Z]/g, '');

      inputField.value = cleanedValue;

      let validationMessage = document.getElementById("validationMessage");
      if (inputValue !== cleanedValue) {
        validationMessage.textContent = "Only letters are allowed.";
      } else {
        validationMessage.textContent = "";
      }
    }

    function validateEmail(inputField) {
      let inputValue = inputField.value;
      let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      let isValidEmail = emailPattern.test(inputValue);
      let validationMessage = document.getElementById("validationMessage");
      if (isValidEmail) {
        validationMessage.textContent = "";
      } else {
        validationMessage.textContent = "Invalid email address.";
      }
    }

</script>
