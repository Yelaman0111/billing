require('./bootstrap');

require('alpinejs');

import { createApp } from "vue";
import router from './router'
import UsersIndex from './components/users/UsersIndex'

createApp({
    components: {
        UsersIndex
    }
}).use(router).mount('#app')