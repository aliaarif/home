require('./bootstrap');

window.Vue = require('vue');
window.Vuex = require('vuex');
window.bURL = 'http://dev.ez/';
Vue.config.productionTip = false;
import router from './router';
import App from "./components/AppComponent";
import Welcome from "./components/common/Welcome";
import Dashboard from "./components/common/Dashboard";
import PrettyCheckbox from 'pretty-checkbox-vue';

Vue.use(PrettyCheckbox);


//import PrettyInput from 'pretty-checkbox-vue/input';
import PrettyCheck from 'pretty-checkbox-vue/check';
//import PrettyRadio from 'pretty-checkbox-vue/radio';

//Vue.component('p-input', PrettyInput);
Vue.component('p-check', PrettyCheck);
// /Vue.component('p-radio', PrettyRadio);

Vue.use(Vuex);







const store = new Vuex.Store({
	state: {
		theBrothers: []
	},
});





new Vue({
	router,
	store: store,
	render: h => h(App)
}).$mount("#app");
