<template>

    <Head title="Category List" />
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Job List</h2>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
            <div class="mb-1 breadcrumb-right">
                <Link :href="`${this.$page.props.ADMIN_URL}/jobs/create`" class="dt-button add-new btn btn-primary" >New Job</Link>
            </div>
        </div>
    </div>


    <section class="app-user-list">

        <!--<div class="card">
            <div class="card-header">
                <h4 class="card-title">Collapsible</h4>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li>
                            <a data-action="collapse"><i data-feather="chevron-down"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <p class="card-text">
                        You can create a collapsible content by by adding <code>[data-action="collapse"]</code> and wrapping it up
                        with <code>.heading-elements</code> in <code>.card-header</code>
                    </p>
                    <p class="card-text">
                        Click on<i data-feather="chevron-down" class="mx-50"></i>to see card collapse in action
                    </p>
                </div>
            </div>
        </div>
         list and filter start
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title">Add New Company</h4>
            </div>
        </div>-->

        <div v-if="jobs.data.length > 0 || search != null" >
            <div class="card"  >
                <div  class="card-datatable table-responsive pt-0" >
                    <div class="d-flex justify-content-between align-items-center header-actions mx-0 row">
                        <div class="col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start">
                            <div class="select-search-area">
                                <label>Show <select class="form-select" v-model="perPage">
                                    <option :value="undefined">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-8 ps-xl-75 ps-0">
                            <div
                                class="d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap">
                                <div class="select-search-area">
                                    <label>Search:<input v-model="search" type="search" class="form-control"
                                                         placeholder="Type here for search"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" v-for="job in jobs.data" :key="job.id">
                    <div class="card card-bordered mb-4 card-hover cursor-pointer">
                        <!-- card body -->
                        <div class="card-body">
                            <div>
                                <div class="d-md-flex">
                                    <div class="mb-3 mb-md-0">
                                        <!-- Img -->
                                        <div class="avatar avatar-xl">
                                            <img src="@/images/logo.png" alt="Laravel UI - Bootstrap 5 Template" class="icon-shape border rounded-circle">
                                        </div>
                                    </div>
                                    <!-- text -->
                                    <div class="ms-md-3 w-100 mt-3 mt-xl-1">
                                        <div class="d-flex justify-content-between mb-5">
                                            <div>
                                                <!-- heading -->
                                                <h3 class="mb-1 fs-4"><a href="javascript:void(0)" class="text-inherit">Software Engineer
                                                    (Web3/Crypto)</a>
                                                    <span class="badge bg-light-danger text-danger ms-2">Featured Job</span>
                                                </h3>
                                                <div>
                                                    <span>at HelpDesk </span>
                                                    <!-- star -->
                                                    <span class="text-dark ms-2 fw-medium">4.5
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
                                                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="ms-0">(131 Reviews)</span>
                                                </div>
                                            </div>
                                            <div>
                                                <!-- bookmark -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark text-muted bookmark" viewBox="0 0 16 16">
                                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                                                </svg>
                                            </div>

                                        </div>

                                        <div class="d-md-flex justify-content-between ">
                                            <div class="mb-2 mb-md-0">
                                                <!-- year -->
                                                <span class="me-2"> <i class="fe fe-briefcase text-muted"></i><span class="ms-1 ">1 - 5
                                            years</span></span>
                                                <!-- salary -->

                                                <span class="me-2">
                                          <i class="fe fe-dollar-sign text-muted"></i><span class="ms-1 ">12k - 18k</span></span>
                                                                <!-- location -->
                                                                <span class="me-2">
                                          <i class="fe fe-map-pin text-muted"></i><span class="ms-1 ">Ahmedabad, Gujarat</span></span>
                                            </div>
                                            <!-- time -->
                                            <div>
                                                <i class="fe fe-clock text-muted"></i> <span>21 hours ago</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <Pagination :links="jobs.links" :from="jobs.from" :to="jobs.to"
                            :total="jobs.total" />
            </div>

        </div>
        <div class="card" v-else>
            <div class="card-body d-flex align-items-center justify-content-center">
                <img src="@/images/No-data.gif" alt="">
            </div>
        </div>
        <!-- list and filter end -->
    </section>







</template>

<script setup>
import Pagination from '@/components/Pagination';
import Modal from '@/components/Modal';
import Icon from '@/components/Icon';
import Text from '@/components/form/Text';
import Image from '@/components/form/Image';
import Textarea from '@/components/form/Textarea';
import TextEditor from '@/components/TextEditor';
import Radio from '@/components/form/Radio.vue';
import Video from '@/components/form/Video';
import BusinessCard from '@/components/modules/BusinessCard';
import Datepicker from 'vue3-datepicker'

import axios from 'axios';
import { ref, watch, computed } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { useForm } from '@inertiajs/inertia-vue3'
import debounce from "lodash/debounce";
import Swal from 'sweetalert2'

let props = defineProps({
    jobs: Object,
    filters: Object,
    url: String,
});



let deleteItem = (id) => {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#7367f0',
        cancelButtonColor: '#EA5455',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Inertia.delete(props.url +"/"+id, {
                preserveState: true, replace: true, onSuccess: page => {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                },
                onError: errors => {
                    Swal.fire(
                        'Oops...',
                        'Something went wrong!',
                        'error'
                    )
                }
            })
        }
    })
};





let search = ref(props.filters.search);
let perPage = ref(props.filters.perPage);

watch([search, perPage], debounce(function ([val, val2]) {
    Inertia.get(props.url, { search: val, perPage: val2 }, { preserveState: true, replace: true });
}, 300));

</script>
