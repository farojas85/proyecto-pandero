require('./bootstrap');

import { createApp } from 'vue';
import router from './router'
import axios from 'axios'
import Form from 'vform'


window.form = Form
const app = createApp({})
app.use(router)
app.mount("#app")
//createApp({}).use(router).mount('#app')
