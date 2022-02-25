require('./bootstrap');

import Alpine from 'alpinejs';
import { createApp } from 'vue';
import router from './router'

createApp({}).use(router).mount('#app')
