import { createApp, h } from "vue";

import chatSection from './components/Test'
import recruitersProfile from './Pages/Recuriters/Profile.vue'
createApp({
    components:{
        chatSection,
        recruitersProfile
    }
}).mount('#frontendDiv')
