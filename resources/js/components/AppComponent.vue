<template>
	<div>
		<keep-alive>
			<component :is="dynamicComponent"></component>
		</keep-alive>
	</div>	
</template>
<style type="text/css" scoped></style>
<script>	

import Welcome from './common/Welcome';							
import Dashboard from './common/Dashboard';		




export default {
	components: {
		'welcome' : Welcome,
		'dashboard' : Dashboard,

	},
	data: () => {
		return {
			loggedIn:window.loggedIn,
			bURL: window.bURL,
			role:localStorage.getItem('role'),
			token:localStorage.getItem('token')
		}
	},
	computed: {
		dynamicComponent() {
			if(layout == 'Dashboard') {
				return 'dashboard';
			} else {
				return 'welcome';
			}
		}
	},

	mounted() {
		
	},

	watch: {
		'$route' (to, from) {
			document.title = to.meta.title || 'ArabEasy';
		}
	},


	methods: {
		


	}
}
</script>