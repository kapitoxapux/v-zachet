//require('./bootstrap');

window.Vue=require('vue');

import vuetify from './plugins/vuetify';

import LoginComponent from './components/LoginComponent.vue';
import ButtonComponent from './components/ButtonComponent.vue';
//import 'bootstrap/dist/css/bootstrap.min.css';

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
                    'Accept': 'application/json'
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
    el: '#app',
    vuetify,
    data (){
        return {
          alignmentsAvailable: [
            'start',
            'center',
            'end',
            'baseline',
            'stretch',
          ],
          alignment: 'center',
          justifyAvailable: [
            'start',
            'center',
            'end',
            'space-around',
            'space-between',
          ],
          justify: 'center',
        }
    },
    /* data: function(){
        return {
            //csfr: cookie.parse(document.cookie)['XSRF-TOKEN']
        }
    }, */
    mixins: [mixin],
    components: {
        'login-component': LoginComponent,
        'button-component': ButtonComponent
    }
});