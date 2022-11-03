<template>

    <Head title="Create Question" />
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Create Job</h2>
                </div>
            </div>
        </div>
    </div>
    <section class="question-create-form">
        <form class="row pt-75" @submit.prevent="updateItem(editItem.id)">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Job Besic Details</h2>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <Text v-model="createForm.title" label="Job Title" placeholder="Enter job title" :error="props.errors.title"/>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <label>Job Type</label>
                                <v-select v-model="createForm.types"  label="type" :options="allTypes" placeholder="Select Job Type"></v-select>
                                <span class="error text-danger" v-if="props.errors.types">{{ props.errors.types }}</span>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <label>Label</label>
                                <v-select v-model="createForm.city"  label="label" :options="allLabels" placeholder="Select Your City"></v-select>
                                <span class="error text-danger" v-if="props.errors.city">{{ props.errors.city }}</span>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-1">
                                        <label class="form-label">Select a Category</label>
                                        <v-select v-model="createForm.category_id"
                                                  @update:modelValue="categorySelected"
                                                  label="name"
                                                  :options="categories"
                                                  placeholder="Select Category"
                                                  :reduce="category => category.id">
                                        </v-select>
                                    </div>
                                </div>
                                <div class="col" v-if="sub_categories.length > 0">
                                    <div class="mb-1">
                                        <label class="form-label">Select a Sub Category</label>
                                        <v-select v-model="createForm.sub_category_id"
                                                  @update:modelValue="subCategorySelected"
                                                  label="name"
                                                  :options="sub_categories"
                                                  placeholder="Select Sub Category"
                                                  :reduce="category => category.id"></v-select>
                                    </div>
                                </div>
                                <div class="col" v-if="child_categories.length > 0">
                                    <div class="mb-1">
                                        <label class="form-label">Select a Child Category</label>
                                        <v-select v-model="createForm.child_category_id"
                                                  label="name"
                                                  placeholder="Select Child Category"
                                                  :options="child_categories"
                                                  :reduce="category => category.id"></v-select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Job Compensation</h2>
                        <div class="row">
                            <div class="col mb-2">
                                <label>Select Currency</label>
                                <v-select
                                    v-model="createForm.currency"
                                    :options="countries"
                                    placeholder="Search Country Name"
                                    :reduce="country => country.id"
                                    label="currency_name">
                                    <template v-slot:option="option">
                                        {{ option.currency }} / {{ option.currency_symbol }}
                                    </template>
                                </v-select>
                                <span class="error text-danger" v-if="props.errors.city">{{ props.errors.city }}</span>
                            </div>
                            <div class="col">
                                <Text type="number" v-model="createForm.max_salary" label="Max Salary" placeholder="Maximum salary"/>
                            </div>
                            <div class="col">
                                <Text type="number" v-model="createForm.min_salary" label="Min Salary" placeholder="Minimum salary"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Company Details</h2>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <label>Job Descriptions</label>
                                <v-select
                                    v-model="createForm.company"
                                    :options="props.companies"
                                    placeholder="Search Country Name"
                                    :reduce="company => company.id"
                                    label="name">
                                    <template v-slot:option="option">
                                        {{ option.name }}
                                    </template>
                                </v-select>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Company Details</h2>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <label>Job Descriptions</label>
                                <TextEditor v-model="createForm.job_details"/>
                            </div>
                        </div>
                    </div>
                </div>



                <button v-if="!isShow" class="btn btn-outline-primary me-1" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="ms-25 align-middle">Loading...</span>
                </button>
                <button type="submit" class="btn btn-primary me-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                    Discard
                </button>
            </div>
        </form>

    </section>
</template>

<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/inertia-vue3'
import axios from 'axios';
import Icon from '@/components/Icon';
import Text from '@/components/form/Text';
import Image from '@/components/form/Image';
import Textarea from '@/components/form/Textarea';
import TextEditor from '@/components/TextEditor';
import Radio from '@/components/form/Radio.vue';
import Video from '@/components/form/Video';
import BusinessCard from '@/components/modules/BusinessCard';
import Datepicker from 'vue3-datepicker'
import types from '@/Store/timezone.js'


let allTypes = types.types;
let allLabels = types.labels;

let props = defineProps({
    categories: Object,
    url: String,
    subbycat_url: String,
    childbysubcat_url: String,
    countries:[],
    companies:Object,
    errors:Object
});


let createForm = useForm({
    category_id: '',
    sub_category_id: '',
    child_category_id: '',
    title:'',
    types:'',
    labels:'',
    job_details:'',
    currency:19,
    max_salary:'',
    min_salary:'',
    company:'',

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


let options = {a: 'Option A', b: 'Option B', c: 'Option C', d: 'Option D', e: 'Option E'}

const sub_categories = ref([])
const child_categories = ref([])

let categorySelected = (e) => {
    axios.post(props.subbycat_url, { category: e })
        .then(res => {
            sub_categories.value = res.data
            createForm.sub_category_id = null
            createForm.child_category_id = null
        })
        .catch(error => {
            console.log(error)
        });
}

let subCategorySelected = (e) => {
    axios.post(props.childbysubcat_url, { subcategory: e })
        .then(res => {
            child_categories.value = res.data
            createForm.child_category_id = null
        })
        .catch(error => {
            console.log(error)
        });
}

let createNewCategory = () => {
    createForm.post(props.url, {
        onSuccess: () => {
            createForm.reset()
        }
    });
}

</script>
