<template>
    <Head title="Dashboard" />


    <section class="app-dashboard">
        <div class="card">
            <div class="card-body border-bottom">
                <div class="card card-statistics">
                    <div class="card-header">
                        <vue-notification-list></vue-notification-list>

                        <h4 class="card-title">Settings</h4>
                    </div>
                    <div class="card-body statistics-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <Link class="nav-link active"
                                          id="v-pills-home-tab"
                                          data-bs-toggle="pill"
                                          data-bs-target="#v-pills-home"
                                          type="button" role="tab"
                                          aria-controls="v-pills-home"
                                          aria-selected="true">Frontend Setting</Link>

                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <div class="card">
                                            <h2>Frontend Setup</h2>
                                            <div class="card-body">
                                                <form class="form form-vertical" @submit.prevent="updateBuisnessSetting()">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <Text v-model="createForm.name" label="App Name" placeholder="App Name" />
                                                        </div>
                                                        <div class="col-6">
                                                            <Image v-model="createForm.header_logo" :showFile="props.bSettings.header_logo" label="Header Logo"/>
                                                        </div>
                                                        <div class="col-6">
                                                            <Image v-model="createForm.footer_logo"  :showFile="props.bSettings.footer_logo" label="Footer Logo"/>
                                                        </div>
                                                        <div class="col-12">
                                                            <Textarea v-model="createForm.app_details" label="App About" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Select Timezone</label>
                                                            <v-select
                                                                v-model="createForm.timezone"
                                                                dir="ltr"
                                                                :value="tz"
                                                                label="tz"
                                                                :options="options"
                                                                placeholder="~~ Select Timezone ~~"/>
                                                            <span v-if="error" class="error">{{ error }}</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Select Country</label>
                                                            <v-select
                                                                v-model="createForm.country"
                                                                dir="ltr"
                                                                :value="id"
                                                                label="name"
                                                                :options="countries"
                                                                placeholder="~~ Select Timezone ~~"/>
                                                            <span v-if="error" class="error">{{ error }}</span>
                                                        </div>


                                                        <div class="col-12 mt-2">
                                                            <button type="submit"
                                                                    class="btn btn-primary me-1 waves-effect waves-float waves-light">
                                                                <div class="spinner-border text-white" role="status">
                                                                </div>
                                                                Submit
                                                            </button>
                                                            <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import Text from '@/components/form/Text';
import Image from '@/components/form/Image';
import Textarea from '@/components/form/Textarea';
import TextEditor from '@/components/TextEditor';
import { usePage, useForm } from '@inertiajs/inertia-vue3'
import timezons from "../../../Store/timezone";

const APP_URL = usePage().props.value.ADMIN_URL;
let props = defineProps({
    option:[],
    countries:[],
    errors:[],
    bSettings:[]
})
let countries = props.countries;
let options = timezons.timesones;
// let createForm = useForm({
//     name        :  '',
//     header_logo :  '',
//     footer_logo :  '',
//     app_details :  '',
//     timezone    :  '',
//     country     :  '',
// })

let createForm = useForm({
    name        : props.bSettings.name ?? '',
    header_logo : '',
    footer_logo : '',
    app_details : props.bSettings.details ?? '',
    timezone    : props.bSettings.timezone?.tz ?? '',
    country     : props.bSettings.country?.name ?? '',
})

let updateBuisnessSetting = () =>{
    createForm.post(APP_URL+"/settings", {
        onSuccess: (res)=>{
            $sToast.fire({
               icon: "success",
               text: "Business Settings Update Successfully Done.:)",
            });
        },
        onError: (res) =>{
            $sToast.fire({
                icon: "error",
                text: "Business Settings Not Update (:",
            });
        }
    });
}


</script>
