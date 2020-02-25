<template>
	<aside  :class="this.$parent.menu_dark == 'light' ? 'sidenav-main nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded' : 'sidenav-main nav-expanded nav-lock nav-collapsible navbar-full sidenav-active-rounded sidenav-dark'">
		<div class="brand-sidebar">

			

			<h1 class="logo-wrapper">
				<router-link class="brand-logo darken-1" to="/">
					<img :src="bURL+'images/logo/materialize-logo.png'" alt="materialize logo"/>
					<span class="logo-text">ArabEasy</span>
				</router-link>
				<router-link class="navbar-toggler" to=""><i class="material-icons">radio_button_checked</i></router-link>
			</h1>
		</div>
		

		<ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">

			<!-- 
			<li  class="navigation-header">

				
				{{ this.$parent.menu_dark }}
				
			</li> -->

			<li :class="this.$route.fullPath == '/' || this.$route.fullPath == '/dashboard' ? 'bold open active' : 'bold open' ">
				<router-link :class="this.$route.fullPath == '/' || this.$route.fullPath == '/dashboard' ? this.$parent.menu_color : '' " to="/"  data-i18n=""><i class="material-icons">dashboard</i>
					<span class="menu-title" data-i18n="">Dashboard</span>
				</router-link>
			</li>


			<!-- <li :class="this.$route.fullPath == '/' || this.$route.fullPath == '/dashboard' ? 'active' : '' ">
				<router-link :class="this.$route.fullPath == '/' || this.$route.fullPath == '/dashboard' ? 'collapsible-body active' : '' " to="/"  data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Dashboard</span>
				</router-link>
			</li>
			<li  class="navigation-header"></li>
		-->
		<!-- <li class="bold">
			<a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">add_to_queue</i><span class="menu-title" data-i18n="">Extra Components</span></a>
			<div class="collapsible-body">
				<ul class="collapsible collapsible-sub" data-collapsible="accordion">
					<li><a class="collapsible-body" href="extra-components-range-slider.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Range Slider</span></a>
					</li>
					<li><a class="collapsible-body" href="extra-components-sweetalert.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Sweetalert</span></a>
					</li>
					<li><a class="collapsible-body" href="extra-components-nestable.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Nestable</span></a>
					</li>
					<li><a class="collapsible-body" href="extra-components-translation.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Translation</span></a>
					</li>
					<li><a class="collapsible-body" href="extra-components-highlight.html" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Highlight</span></a>
					</li>
				</ul>
			</div>
		</li> -->
		<!-- {{ this.$parent.menu_color }} -->
		<li :class="this.$router.currentRoute.name == null ? 'bold open active' : 'bold open' " v-if="this.$parent.role == 'administrator'">
			<router-link class="collapsible-header waves-effect waves-cyan " to="/dashboard/manage-locations"><i class="material-icons">content_paste</i>
				<span class="menu-title" data-i18n="">Manage Locations</span>
			</router-link>
			<div class="collapsible-body">
				<ul class="collapsible collapsible-sub" data-collapsible="accordion">

					<li :class="this.$route.fullPath == '/dashboard/add-new-district' ? 'active' : '' ">
						<router-link :class="this.$route.fullPath == '/dashboard/add-new-district' ? this.$parent.menu_color : '' " to="/dashboard/add-new-district" data-i18n="" >
							<i class="material-icons" v-if="this.$route.fullPath == '/dashboard/add-new-district'">radio_button_checked</i>
							<i class="material-icons" v-else>radio_button_unchecked</i>
							<span>Add New District</span>
						</router-link>
					</li>

					<li :class="this.$route.fullPath == '/dashboard/add-new-district' ? 'active' : '' ">
						<router-link :class="this.$route.fullPath == '/dashboard/add-new-district' ? this.$parent.menu_color : '' " to="/dashboard/add-new-district" data-i18n="" >
							<i class="material-icons" v-if="this.$route.fullPath == '/dashboard/add-new-district'">radio_button_checked</i>
							<i class="material-icons" v-else>radio_button_unchecked</i>
							<span>Add New District</span>
						</router-link>
					</li>



					<li :class="this.$route.fullPath == '/dashboard/add-new-district' ? 'active' : '' ">
						<router-link :class="this.$route.fullPath == '/dashboard/add-new-district' ? this.$parent.menu_color : '' " to="/dashboard/add-new-district" data-i18n="" >
							<i class="material-icons" v-if="this.$route.fullPath == '/dashboard/add-new-district'">radio_button_checked</i>
							<i class="material-icons" v-else>radio_button_unchecked</i>
							<span>Add New District</span>
						</router-link>
					</li>

					<li :class="this.$route.fullPath == '/dashboard/add-new-district' ? 'active' : '' ">
						<router-link :class="this.$route.fullPath == '/dashboard/add-new-district' ? this.$parent.menu_color : '' " to="/dashboard/add-new-district" data-i18n="" >
							<i class="material-icons" v-if="this.$route.fullPath == '/dashboard/add-new-district'">radio_button_checked</i>
							<i class="material-icons" v-else>radio_button_unchecked</i>
							<span>Add New District</span>
						</router-link>
					</li>


					<li :class="this.$route.fullPath == '/dashboard/add-new-locality' ? 'active' : '' ">
						<router-link :class="this.$route.fullPath == '/dashboard/add-new-locality' ? this.$parent.menu_color : '' " to="/dashboard/add-new-locality"  data-i18n="">
							<i class="material-icons" v-if="this.$route.fullPath == '/dashboard/add-new-locality'">radio_button_checked</i>
							<i class="material-icons" v-else>radio_button_unchecked</i>
							<span>Add New Locality</span>
						</router-link>
					</li>
					<li :class="this.$route.fullPath == '/dashboard/test-link-3' ? 'active' : '' ">
						<router-link :class="this.$route.fullPath == '/dashboard/test-link-3' ? this.$parent.menu_color : '' " to="/dashboard/test-link-3" data-i18n="">
							<i class="material-icons" v-if="this.$route.fullPath == '/dashboard/test-link-3'">radio_button_checked</i>
							<i class="material-icons" v-else>radio_button_unchecked</i>
							<span>Test Link 3</span>
						</router-link>
					</li>
				</ul>
			</div>
		</li>










	</ul>
	<div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="javascript:;" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
</template>
<style lang="stylus" scoped></style>
<script src="{{ asset('js/vendors.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
import PerfectScrollbar from 'perfect-scrollbar';

export default {
	data: () => {
		return {
			bURL:window.bURL,
			role:window.role
		}
	},
	mounted(){


		

		new PerfectScrollbar('.leftside-navigation ');
		new PerfectScrollbar('.slide-out-right-body, .chat-body .collection');
		new PerfectScrollbar('.chat-body .collection');
		new PerfectScrollbar('.theme-cutomizer');
		new PerfectScrollbar('.dropdown-content');
		
		

	},
	methods:{

	},
}
</script>