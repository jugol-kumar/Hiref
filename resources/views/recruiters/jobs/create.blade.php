@extends('recruiters.layout.master')
@section('recruiter_content')

    <div class="col-lg-9 col-md-8 col-12">
        <!-- Page header-->
        <div class="py-4 py-lg-6 bg-primary">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                        <div class="d-lg-flex align-items-center justify-content-between">
                            <!-- Content -->
                            <div class="mb-4 mb-lg-0">
                                <h1 class="text-white mb-1">Add New Job</h1>
                                <p class="mb-0 text-white lead">
                                    Just fill the form and create your courses.
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('recruiter.allJobs') }}" class="btn btn-white btn-sm me-1">Back to List</a>
                                <a href="instructor-courses.html" class="btn btn-success btn-sm">Save</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <div class="pb-12">
            <div class="container">
                <div id="courseForm" class="bs-stepper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <!-- Stepper Button -->
                            <div class="bs-stepper-header shadow-sm" role="tablist">
                                <div class="step" data-target="#test-l-1">
                                    <button type="button" class="step-trigger" role="tab" id="courseFormtrigger1" aria-controls="test-l-1">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">Basic Information</span>
                                    </button>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-2">
                                    <button type="button" class="step-trigger" role="tab" id="courseFormtrigger2" aria-controls="test-l-2">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Courses Media</span>
                                    </button>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-3">
                                    <button type="button" class="step-trigger" role="tab" id="courseFormtrigger3" aria-controls="test-l-3">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">Curriculum</span>
                                    </button>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-4">
                                    <button type="button" class="step-trigger" role="tab" id="courseFormtrigger4" aria-controls="test-l-4">
                                        <span class="bs-stepper-circle">4</span>
                                        <span class="bs-stepper-label">Settings</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Stepper content -->
                            <div class="bs-stepper-content mt-5">
                                <form onSubmit="return false">
                                    <!-- Content one -->
                                    <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger1">
                                        <!-- Card -->
                                        <div class="card mb-3 ">
                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Basic Information</h4>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="courseTitle" class="form-label">Job Title</label>
                                                    <input id="courseTitle" class="form-control" type="text" placeholder="Enter Job Title" />
                                                    <small>Write a 60 character job title.</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Job category</label>
                                                    <select class="selectpicker" data-width="100%" name="category" onchange="subCateory(this)">
                                                        <option selected disabled  value="">Select category</option>
                                                        @foreach($categories as $cat)
                                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <small>Help people find your courses by choosing
                                                        categories that represent your course.</small>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col" id="subCategory-card" style="display: none">
                                                            <label class="form-label">Job category</label>
                                                            <select class="selectpicker" data-width="100%" onchange="childCategory(this)"  id="sub_category" >
                                                                <option selected disabled  value="">Select category</option>
                                                            </select>
                                                            <small>Help people find your courses by choosing
                                                                categories that represent your course.</small>
                                                        </div>
                                                        <div class="col" id="childCategory-card" style="display: none">
                                                            <label class="form-label">Job category</label>
                                                            <select class="selectpicker" data-width="100%"  id="child_category" >
                                                                <option selected disabled  value="">Select child category</option>
                                                            </select>
                                                            <small>Help people find your courses by choosing
                                                                categories that represent your course.</small>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="form-label">Job Type</label>
                                                            <select name="job_type" class="selectpicker" data-width="100%">
                                                                <option value="">Select Type</option>
                                                                <option value="Full Time">Full Time</option>
                                                                <option value="Part Time">Part Time</option>
                                                                <option value="Freelance">Freelance</option>
                                                                <option value="Internship">Internship</option>
                                                                <option value="Temporary">Temporary</option>
                                                                <option value="Contract">Contract</option>
                                                                <option value="Seasonal">Seasonal</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label class="form-label">Label</label>
                                                            <select name="job_label" class="selectpicker" data-width="100%">
                                                                <option value="" selected disabled>Select level</option>
                                                                <option value="Beginner">Beginner</option>
                                                                <option value="Junior">Junior</option>
                                                                <option value="Mid-level">Mid-level</option>
                                                                <option value="Senior">Senior</option>
                                                                <option value="Lead">Lead</option>
                                                                <option value="Manager">Manager</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <button class="btn btn-primary" onclick="courseForm.next()">
                                            Next
                                        </button>
                                    </div>



                                    <!-- Content two -->
                                    <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger2">
                                        <!-- Card -->
                                        <div class="card mb-3  border-0">

                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Courses Media</h4>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">


                                                <div class="mb-3">
                                                    <label class="form-label">Job Description</label>
                                                    <textarea name="input" placeholder="Textarea" class="form-control"></textarea>
                                                </div>


                                                <div class="mb-3">
                                                    <label class="form-label">Job</label>
                                                    <textarea name="input" placeholder="Textarea" class="form-control quill-editor"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary" onclick="courseForm.previous()">
                                                Previous
                                            </button>
                                            <button class="btn btn-primary" onclick="courseForm.next()">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Content three -->
                                    <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger3">
                                        <!-- Card -->
                                        <div class="card mb-3  border-0">
                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Curriculum</h4>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body ">
                                                <div class="bg-light rounded p-2 mb-4">
                                                    <h4>Introduction to JavaScript</h4>
                                                    <!-- List group -->
                                                    <div class="list-group list-group-flush border-top-0" id="courseList">
                                                        <div id="courseOne">
                                                            <div class="list-group-item rounded px-3 mb-1" id="introduction">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                            <span class="align-middle">Introduction</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div><a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                            title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                           title="Delete"><i class="fe fe-trash-2 fs-6"></i></a>
                                                                        <a href="#" class="text-inherit" aria-expanded="true" data-bs-toggle="collapse"
                                                                           data-bs-target="#collapselistOne" aria-controls="collapselistOne">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistOne" class="collapse show" aria-labelledby="introduction"
                                                                     data-bs-parent="#courseList">
                                                                    <div class="card-body">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item rounded px-3 mb-1" id="development">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                            <span class="align-middle">Installing Development Software</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div><a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                            title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                           title="Delete"><i class="fe fe-trash-2 fs-6"></i></a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                                                           data-bs-target="#collapselistTwo" aria-expanded="false"
                                                                           aria-controls="collapselistTwo">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistTwo" class="collapse" aria-labelledby="development"
                                                                     data-bs-parent="#courseList">
                                                                    <div class="card-body">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item rounded px-3 mb-1" id="project">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                            <span class="align-middle">Hello World Project from GitHub</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div><a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                            title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                           title="Delete"><i class="fe fe-trash-2 fs-6"></i></a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                                                           data-bs-target="#collapselistThree" aria-expanded="false"
                                                                           aria-controls="collapselistThree">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistThree" class="collapse" aria-labelledby="project"
                                                                     data-bs-parent="#courseList">
                                                                    <div class="card-body">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item rounded px-3 mb-1" id="sample">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                            <span class="align-middle">Our Sample Website</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div><a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                            title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                           title="Delete"><i class="fe fe-trash-2 fs-6"></i></a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                                                           data-bs-target="#collapselistFour" aria-expanded="false"
                                                                           aria-controls="collapselistFour">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistFour" class="collapse" aria-labelledby="sample"
                                                                     data-bs-parent="#courseList">
                                                                    <div class="card-body">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal"
                                                       data-bs-target="#addLectureModal">Add Lecture +</a>
                                                </div>
                                                <div class="bg-light rounded p-2 mb-4">
                                                    <h4>JavaScript Beginnings</h4>

                                                    <!-- List group -->
                                                    <div class="list-group list-group-flush border-top-0" id="courseListSecond">
                                                        <div id="courseTwo">
                                                            <div class="list-group-item rounded px-3 mb-1" id="introductionSecond">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                            <span class="align-middle">Introduction</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div><a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                            title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                           title="Delete"><i class="fe fe-trash-2 fs-6"></i></a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                                                           data-bs-target="#collapselistFive" aria-expanded="false"
                                                                           aria-controls="collapselistFive">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistFive" class="collapse" aria-labelledby="introductionSecond"
                                                                     data-bs-parent="#courseListSecond">
                                                                    <div class="card-body">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item rounded px-3 mb-1" id="developmentSecond">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                            <span class="align-middle">Installing Development Software</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                            title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                           title="Delete"><i class="fe fe-trash-2 fs-6"></i></a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                                                           data-bs-target="#collapselistSix" aria-expanded="false"
                                                                           aria-controls="collapselistSix">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistSix" class="collapse" aria-labelledby="developmentSecond"
                                                                     data-bs-parent="#courseListSecond">
                                                                    <div class="card-body">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item rounded px-3 mb-1" id="projectSecond">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                            <span class="align-middle">Hello World Project from GitHub</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div><a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                            title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                           title="Delete"><i class="fe fe-trash-2 fs-6"></i></a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                                                           data-bs-target="#collapselistSeven" aria-expanded="false"
                                                                           aria-controls="collapselistSeven">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistSeven" class="collapse" aria-labelledby="projectSecond"
                                                                     data-bs-parent="#courseListSecond">
                                                                    <div class="card-body">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="list-group-item rounded px-3 mb-1" id="sampleSecond">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">
                                                                        <a href="#" class="text-inherit">
                                                                            <i class="fe fe-menu me-1 text-muted align-middle"></i>
                                                                            <span class="align-middle">Our SampleWebsite</span>
                                                                        </a>
                                                                    </h5>
                                                                    <div><a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                            title="Edit"><i class="fe fe-edit fs-6"></i></a>
                                                                        <a href="#" class="me-1 text-inherit" data-bs-toggle="tooltip" data-placement="top"
                                                                           title="Delete"><i class="fe fe-trash-2 fs-6"></i></a>
                                                                        <a href="#" class="text-inherit" data-bs-toggle="collapse"
                                                                           data-bs-target="#collapselistEight" aria-expanded="false"
                                                                           aria-controls="collapselistEight">
                                                                            <span class="chevron-arrow"><i class="fe fe-chevron-down"></i></span></a>
                                                                    </div>
                                                                </div>
                                                                <div id="collapselistEight" class="collapse" aria-labelledby="sampleSecond"
                                                                     data-bs-parent="#courseListSecond">
                                                                    <div class="card-body">
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Article +</a>
                                                                        <a href="#" class="btn btn-secondary btn-sm">Add
                                                                            Description +</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn btn-outline-primary btn-sm mt-3" data-bs-toggle="modal"
                                                       data-bs-target="#addLectureModal">Add Lecture +</a>
                                                </div>
                                                <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                                   data-bs-target="#addSectionModal">Add Section</a>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-secondary" onclick="courseForm.previous()">
                                                Previous
                                            </button>
                                            <button class="btn btn-primary" onclick="courseForm.next()">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Content four -->
                                    <div id="test-l-4" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="courseFormtrigger4">
                                        <!-- Card -->
                                        <div class="card mb-3  border-0">
                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Requirements</h4>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <input name='tags' value='jquery, bootstrap' autofocus>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-22">
                                            <!-- Button -->
                                            <button class="btn btn-secondary mt-5" onclick="courseForm.previous()">
                                                Previous
                                            </button>
                                            <button type="submit" class="btn btn-danger mt-5">
                                                Submit For Review
                                            </button>
                                        </div>
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

@push('js')

    <script>
        function subCateory(event){
            let categoryId = event.value;
            if (categoryId){
                $.ajax({
                    url: `{{ route('recruiter.getSubCat', '') }}/${categoryId}`,
                    method: 'GET',
                    dataType: 'JSON',
                    success:function (data) {
                        if (data.length == 0){
                            $('#subCategory-card').hide('slow');
                            swal({
                                position: 'top-end',
                                type: 'error',
                                title: 'error',
                                text:'no have any Sub Category for this Category',
                                showConfirmButton: true,
                            });
                        }
                        else{
                            $('#subCategory-card').show('slow');
                            $('#sub_category').append('<option>Processing.....</option>');
                            $('#sub_category').empty();
                            $('#sub_category').append('<option selected disabled value="">'+'Select sub category'+'</option>');
                            $.each(data.data, function (key, value) {
                                $('#sub_category').append('<option value="'+value.id+'" >'+value.name+'</option>');
                            })
                            $('#sub_category').selectpicker('refresh');
                        }
                    }
                })
            } else{
                $('#sub_category').empty();
            }
        }

        function childCategory(event) {
            let categoryId = event.value;
            if (categoryId){
                $.ajax({
                    url: `{{ route('recruiter.getChildCat', '') }}/${categoryId}`,
                    method: 'GET',
                    dataType: 'JSON',
                    success:function (data) {
                        if (data.length == 0){
                            $('#childCategory-card').hide('slow');
                            swal({
                                position: 'top-end',
                                type: 'error',
                                title: 'error',
                                text:'no have any Sub Category for this Category',
                                showConfirmButton: true,
                            });
                        }
                        else{
                            $('#childCategory-card').show('slow');
                            $('#child_category').append('<option>Processing.....</option>');
                            $('#child_category').empty();
                            $('#child_category').append('<option selected disabled value="">'+'Select sub category'+'</option>');
                            $.each(data.data, function (key, value) {
                                $('#child_category').append('<option value="'+value.id+'" >'+value.name+'</option>');
                            })
                            $('#child_category').selectpicker('refresh');
                        }
                    }
                })
            } else{
                $('#child_category').empty();
            }
        }


        $('.quill-editor').each(function(i, el) {
            var el = $(this), id = 'quilleditor-' + i, val = el.val(), editor_height = 200;
            var div = $('<div/>').attr('id', id).css('height', editor_height + 'px').html(val);
            el.addClass('d-none');
            el.parent().append(div);

            var quill = new Quill('#' + id, {
                modules: { toolbar: true },
                theme: 'snow'
            });
            quill.on('text-change', function() {
                el.html(quill.getContents());
            });
        });
    </script>


@endpush
