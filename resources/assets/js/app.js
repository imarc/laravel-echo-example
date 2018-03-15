require('./bootstrap');

import Vue from 'vue';

const app = new Vue({
    el: '#app',

    data() {
        return {
            messages: []
        }
    },

    mounted() {
        window.Echo.channel('global')
            .listen('TestEvent', (e) => {
                this.messages.unshift(e.data);
            });
    },

    methods: {
        broadcast() {
            axios.get('/broadcast-test');
        }
    }
});

