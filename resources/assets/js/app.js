
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


import Notification from './components/Notification.vue';

new Vue({
    el: '#app',
    data: {
    	firstData: ""
    },
    components: {
    	Notification
    }
});	
