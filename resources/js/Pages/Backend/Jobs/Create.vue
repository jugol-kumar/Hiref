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
        <form class="row pt-75" @submit.prevent="updateItem(editItem.id)">
            <div class="col-md-10 mx-auto">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <Text v-model="updateForm.title" label="Job Title" placeholder="Enter job title" :error="props.errors.title"/>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <label>Job Type</label>
                                <v-select v-model="updateForm.types"  label="type" :options="allTypes" placeholder="Select Job Type"></v-select>
                                <span class="error text-danger" v-if="props.errors.types">{{ props.errors.types }}</span>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <label>Label</label>
                                <v-select v-model="updateForm.city"  label="label" :options="allLabels" placeholder="Select Your City"></v-select>
                                <span class="error text-danger" v-if="props.errors.city">{{ props.errors.city }}</span>
                            </div>


                            <div class="col-12 col-md-4 mb-2">
                                <label>Category</label>
                                <v-select v-model="updateForm.city"
                                          @update:modelValue="categorySelected"
                                          :reduce="category => category.id"
                                          label="name"
                                          :options="props.categories"
                                          placeholder="Select Your Category"></v-select>
                                <span class="error text-danger" v-if="props.errors.city">{{ props.errors.city }}</span>
                            </div>


                            <div class="col-12 col-md-6">
                                <Text type="email" v-model="updateForm.email" label="Company Email" placeholder="info@example.info.bd" :error="props.errors.email"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <Text type="text" v-model="updateForm.phone" label="Company Phone" placeholder="+8801***-********" :error="props.errors.phone"/>
                            </div>

                            <div class="col-12 col-md-6">
                                <Image v-model="updateForm.cover" label="Company Cover Pic" :error="props.errors.cover"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <Image v-model="updateForm.logo" label="Company Logo" :error="props.errors.logo"/>
                            </div>

                            <div class="col-12 text-center mt-2 pt-50">
                                <!--                        <button v-if="!isShow" class="btn btn-outline-primary me-1" type="button" disabled>-->
                                <!--                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>-->
                                <!--                            <span class="ms-25 align-middle">Loading...</span>-->
                                <!--                        </button>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label>Starting Date</label>
                                <datepicker  class="form-control" placeholder="Choose a date"/>
                                <span class="error text-danger" v-if="props.errors.starting_date">{{ props.errors.starting_date }}</span>
                            </div>
                            <div class="col-12 col-md-6">
                                <Text v-model="updateForm.employee_size" label="Employee Size" placeholder="50 to 500"  :error="props.errors.employee_size"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label>City</label>
                                <v-select v-model="updateForm.city"  label="name" :options="props.cities" :reduce="city => city.id" placeholder="Select Your City"></v-select>
                                <span class="error text-danger" v-if="props.errors.city">{{ props.errors.city }}</span>
                            </div>
                            <div class="col-12 col-md-6">
                                <Text type="url" v-model="updateForm.website" label="Company Website" :error="props.errors.website" placeholder="https://www.example.info.bd" />
                            </div>
                            <div class="col-12 col-md-12">
                                <Text type="text" v-model="updateForm.address" label="Company Address" :error="props.errors.address" placeholder="plot-1552, city-dhaka, bangladesh" />
                            </div>
                            <Textarea v-model="updateForm.details" label="Company Details" :error="props.errors.details" />
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary me-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                    Discard
                </button>
            </div>
        </form>
        <!-- list and filter end -->
    </section>




    <!-- Modal to add new user starts-->
    <Modal id="newItem" size="lg" v-vb-is:modal>
        <div class="modal-body pb-5 px-sm-5 pt-50">
            <div class="text-center mb-2">
                <h1 class="mb-1">Add Company Information</h1>
                <p>Give here a new company full details.</p>
            </div>
            <form id="editUserForm" class="row pt-75" @submit.prevent="newItem">
                <div class="col-12 col-md-6">
                    <Text v-model="createForm.name" label="Company Name" placeholder="Company Name" :error="props.errors.name"/>
                </div>
                <div class="col-12 col-md-6">
                    <Text v-model="createForm.type"  label="Company Type" placeholder="It/Garments/etc" :error="props.errors.type"/>
                </div>

                <div class="col-12 col-md-6">
                    <Text type="email" v-model="createForm.email" label="Company Email" placeholder="info@example.info.bd" :error="props.errors.email"/>
                </div>
                <div class="col-12 col-md-6">
                    <Text type="text" v-model="createForm.phone" label="Company Phone" placeholder="+8801***-********" :error="props.errors.phone"/>
                </div>

                <div class="col-12 col-md-6">
                    <Image v-model="createForm.cover" label="Company Cover Pic" :error="props.errors.cover"/>
                </div>
                <div class="col-12 col-md-6">
                    <Image v-model="createForm.logo" label="Company Logo" :error="props.errors.logo"/>
                </div>

                <div class="col-12 col-md-6">
                    <label>Starting Date</label>
                    <datepicker v-model="createForm.starting_date"  class="form-control" placeholder="Choose a date"/>
                    <span class="error text-danger" v-if="props.errors.starting_date">{{ props.errors.starting_date }}</span>

                </div>

                <div class="col-12 col-md-6">
                    <Text v-model="createForm.employee_size" label="Employee Size" placeholder="50 to 500"  :error="props.errors.employee_size"/>
                </div>

                <div class="col-12 col-md-6">
                    <label>City</label>
                    <v-select v-model="createForm.city"  label="name" :options="props.cities" :reduce="city => city.id" placeholder="Select Your City"></v-select>
                    <span class="error text-danger" v-if="props.errors.city">{{ props.errors.city }}</span>
                </div>
                <div class="col-12 col-md-6">
                    <Text type="url" v-model="createForm.website" label="Company Website" :error="props.errors.website" placeholder="https://www.example.info.bd" />
                </div>
                <div class="col-12 col-md-12">
                    <Text type="text" v-model="createForm.address" label="Company Address" :error="props.errors.address" placeholder="plot-1552, city-dhaka, bangladesh" />
                </div>


                <Textarea v-model="createForm.details" label="Company Details" :error="props.errors.details" />

                <div class="col-12 text-center mt-2 pt-50">
                    <!--                        <button v-if="!isShow" class="btn btn-outline-primary me-1" type="button" disabled>-->
                    <!--                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>-->
                    <!--                            <span class="ms-25 align-middle">Loading...</span>-->
                    <!--                        </button>-->

                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Discard
                    </button>
                </div>
            </form>
        </div>
    </Modal>
    <!-- Modal to add new user Ends-->


    <!--    show modal-->

    <Modal id="editItem" size="lg" title="Show Category" v-vb-is:modal>
        <div class="modal-body pb-5 px-sm-5 pt-50">
            <div class="text-center mb-2">
                <h1 class="mb-1">Edit Company Information</h1>
                <p>Give here a new company full details.</p>
            </div>
            <form class="row pt-75" @submit.prevent="updateItem(editItem.id)">
                <div class="col-12 col-md-6">
                    <Text v-model="updateForm.name" label="Company Name" placeholder="Company Name" :error="props.errors.name"/>
                </div>
                <div class="col-12 col-md-6">
                    <Text v-model="updateForm.type"  label="Company Type" placeholder="It/Garments/etc" :error="props.errors.type"/>
                </div>

                <div class="col-12 col-md-6">
                    <Text type="email" v-model="updateForm.email" label="Company Email" placeholder="info@example.info.bd" :error="props.errors.email"/>
                </div>
                <div class="col-12 col-md-6">
                    <Text type="text" v-model="updateForm.phone" label="Company Phone" placeholder="+8801***-********" :error="props.errors.phone"/>
                </div>

                <div class="col-12 col-md-6">
                    <Image v-model="updateForm.cover" label="Company Cover Pic" :error="props.errors.cover"/>
                </div>
                <div class="col-12 col-md-6">
                    <Image v-model="updateForm.logo" label="Company Logo" :error="props.errors.logo"/>
                </div>

                <div class="col-12 col-md-6">
                    <label>Starting Date</label>
                    <datepicker  class="form-control" placeholder="Choose a date"/>
                    <span class="error text-danger" v-if="props.errors.starting_date">{{ props.errors.starting_date }}</span>

                </div>

                <div class="col-12 col-md-6">
                    <Text v-model="updateForm.employee_size" label="Employee Size" placeholder="50 to 500"  :error="props.errors.employee_size"/>
                </div>

                <div class="col-12 col-md-6">
                    <label>City</label>
                    <v-select v-model="updateForm.city"  label="name" :options="props.cities" :reduce="city => city.id" placeholder="Select Your City"></v-select>
                    <span class="error text-danger" v-if="props.errors.city">{{ props.errors.city }}</span>
                </div>
                <div class="col-12 col-md-6">
                    <Text type="url" v-model="updateForm.website" label="Company Website" :error="props.errors.website" placeholder="https://www.example.info.bd" />
                </div>
                <div class="col-12 col-md-12">
                    <Text type="text" v-model="updateForm.address" label="Company Address" :error="props.errors.address" placeholder="plot-1552, city-dhaka, bangladesh" />
                </div>


                <Textarea v-model="updateForm.details" label="Company Details" :error="props.errors.details" />

                <div class="col-12 text-center mt-2 pt-50">
                    <!--                        <button v-if="!isShow" class="btn btn-outline-primary me-1" type="button" disabled>-->
                    <!--                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>-->
                    <!--                            <span class="ms-25 align-middle">Loading...</span>-->
                    <!--                        </button>-->

                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Discard
                    </button>
                </div>
            </form>
        </div>
    </Modal>








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
import types from '@/Store/timezone.js'

let allTypes = types.types;
let allLabels = types.labels;
let props = defineProps({
    companies: Object,
    cities:Object,
    filters: Object,
    url: String,
    errors:Object,
    pageLogo:"",
    pageCover:"",
    categories:Object,
    subCategoryUrl:String,
});

let createForm = useForm({
    name: '',
    type:'',
    email:'',
    phone:'',
    cover:'',
    logo:'',
    starting_date:'',
    employee_size:'',
    city:'',
    website:'',
    address:'',
    details:''
});
let updateForm = useForm({
    name:'',
    type:'',
    email:'',
    phone:'',
    cover:'',
    logo:'',
    starting_date:'',
    employee_size:'',
    city:'',
    website:'',
    address:'',
    details:'',

    showLogo:'',
    showCover:''
});

let sub_categories = ref({});

let categorySelected = (e) => {
    axios.post(props.subCategoryUrl, { category: e })
        .then(res => {
            sub_categories.value = res.data
        })
        .catch(error => {
            console.log(error)
        });
}



</script>
