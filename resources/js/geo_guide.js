require('./bootstrap');

window.Vue=require('vue');

import cookie from "cookie";
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';

Vue.use(VueResource);
//import VueCsrf from '/srv/www/v-zachet/node_modules/vue-csrf/dist/index.js';
Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-XSRF-TOKEN', cookie.parse(document.cookie)['XSRF-TOKEN']);
    next();
});
Vue.use(VueRouter);
/* Vue.use(VueCsrf,{
    selector: 'meta[name="csrf-token"]',
    attribute: 'content'
}); */

import AppComponent from './components/AppComponent.vue';
import MainComponent from './components/MainComponent.vue';
import GeodesyComponent from './components/GeodesyComponent.vue';
import GeologyComponent from './components/GeologyComponent.vue';
import HydraulicsComponent from './components/HydraulicsComponent.vue';
import BasketComponent from './components/BasketComponent.vue';
import 'bootstrap/dist/css/bootstrap.min.css';

const routes=[
    {
        path: '/',
        name: 'main',
        component: MainComponent
    },
    {
        path: '/geodesy',
        name: 'geodesy',
        component: GeodesyComponent
    },
    {
        path: '/geology',
        name: 'geology',
        component: GeologyComponent
    },
    {
        path: '/hydraulics',
        name: 'hydraulics',
        component: HydraulicsComponent
    },
    {
        path: '/basket',
        name: 'basket',
        component: BasketComponent
    }
];

const router=new VueRouter({
    mode: 'history',
    routes
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const mixin={
    methods: {
        postRequest: function(link,data){
            const myHeaders=new Headers(
                {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    //'X-CSRF-TOKEN': cookie.parse(document.cookie)['XSRF-TOKEN']
                }
            );

            let myInit={
                method: 'POST',
                headers: myHeaders,
                body: JSON.stringify(data),
                credentials: 'same-origin',
                mode: 'cors',
                cache: 'no-cache'
            };
            return new Promise(
                (resolve,reject)=>{
                    fetch(link,myInit)
                        .then(
                            function(response)
                            {
                                if(response.ok)
                                {
                                    resolve({
                                            status: 'OK',
                                            body: response.json()
                                        }
                                    )
                                } else {
                                    reject({
                                            status: 'Failed',
                                            message: 'Data Error!'
                                        }
                                    )
                                }
                            }
                        );
                }
            );
        }
    }
};

new Vue({
    el: '#application',
    data: function(){
        return {
            //csfr: cookie.parse(document.cookie)['XSRF-TOKEN']
        }
    },
    mixins: [mixin],
    components: {
        'body-component': AppComponent
    },
    router
});