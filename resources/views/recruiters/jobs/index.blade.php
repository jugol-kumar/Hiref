@php($info = ['show' => true, 'button' => ['route'=>route('recruiter.dashboard'), 'label' => 'Add New Job']])
@extends('recruiters.layout.master', $info)


@section('recruiter_content')
    <div class="col-lg-9 col-md-8 col-12">
        <!-- Card -->
        <div class="card mb-4">
            <!-- Card header -->
            <div class="card-header d-flex align-items-center justify-content-between">
                <div>
                    <h3 class="mb-0">Jobs</h3>
                    <span>Manage your Jobs and its update like live, draft and
								insight.</span>
                </div>
                <a href="{{ route('recruiter.createJob') }}" class="btn btn-primary btn-sm">Add new job</a>
            </div>
            {{--
            <!-- Card body -->
            <div class="card-body">
                <!-- Form -->
                <form class="row">
                    <div class="col-lg-9 col-md-7 col-12 mb-lg-0 mb-2">
                        <input type="search" class="form-control" placeholder="Search Your Jobs" />
                    </div>
                    <div class="col-lg-3 col-md-5 col-12">
                        <select class="selectpicker" data-width="100%">
                            <option value="">Date Created</option>
                            <option value="Newest">Newest</option>
                            <option value="High Rated">High Rated</option>
                            <option value="Law Rated">Law Rated</option>
                            <option value="High Earned">High Earned</option>
                        </select>
                    </div>
                </form>
            </div>
            --}}
            <!-- Table -->
            <div class="table-responsive border-0 overflow-y-hidden">
                <table class="table mb-0 text-nowrap">
                    <thead class="table-light">
                    <tr>
                        <th scope="col" class="border-0">Jobs</th>
                        <th scope="col" class="border-0">Students</th>
                        <th scope="col" class="border-0">Rating</th>
                        <th scope="col" class="border-0">Status</th>
                        <th scope="col" class="border-0"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $key => $value)
                        <tr>
                            <td class="border-top-0">
                                <div class="d-lg-flex">
                                    <div>
                                        <a href="{{ route('client.single_job', $value->slug) }}" target="_blank">
                                            <img src="{{ global_asset($value->companyDetails->photos->count() ? $value->companyDetails->photos[0]->filename : null) }}"
                                                 height="70"
                                                 alt="{{ config("app.name") }}" class="rounded img-4by3-lg">
                                        </a>
                                    </div>
                                    <div class="ms-lg-3 mt-2 mt-lg-0">
                                        <h4 class="mb-1 h5">
                                            <a href="{{ route('client.single_job', $value->slug) }}" class="text-inherit" target="_blank">{{ $value->title }}</a>
                                        </h4>
                                        <span class="badge bg-light-primary text-primary">{{ $value->category->name }}</span>
<!--                                        <ul class="list-inline fs-6 mb-0">
                                            <li class="list-inline-item">
                                                <i class="mdi mdi-clock-time-four-outline text-muted me-1"></i>1h 30m
                                            </li>
                                            <li class="list-inline-item">
                                                <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                                </svg>Beginner
                                            </li>
                                        </ul>-->
                                    </div>
                                </div>
                            </td>
                            <td class="border-top-0">11,200</td>
                            <td class="border-top-0">
                                <span class="text-warning">4.5<i class="mdi mdi-star"></i></span>(3,250)
                            </td>
                            <td class="border-top-0">
                                <span class="badge bg-{{  $value->status ? 'primary' : 'warning' }}">{{ $value->status ? 'Published' : 'Un-Published' }}</span>
                            </td>
                            <td class="text-muted border-top-0">
                                <span class="dropdown dropstart">
                                    <a class="btn-icon btn btn-ghost btn-sm rounded-circle " href="#" role="button" id="courseDropdown"
                                       data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <span class="dropdown-menu" aria-labelledby="courseDropdown">
                                        <span class="dropdown-header">Setting </span>
                                        <a class="dropdown-item" href="{{ route('recruiter.editJob', $value->slug) }}"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>

                                        <button  class="dropdown-item" type="button"
                                                         onclick="deleteData({{ $value->id }})"
                                                >
                                            <i class="fe fe-trash  dropdown-item-icon"></i>  <span>Delete</span>
                                        </button>
                                        <form id="delete-form-{{ $value->id }}"
                                              method="POST"
                                              action="{{ route('recruiter.deleteJob', $value->id) }}"
                                              style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </span>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
