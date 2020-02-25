	<template>
		<div>
			<header class="page-topbar" id="header">
				<div class="navbar navbar-fixed"> 
					<nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-purple-deep-orange gradient-shadow">
						<div class="nav-wrapper">
							<ul  class="navbar-list right">
								<li>
									<router-link class="waves-effect waves-block waves-light" to="/blogs">
										<span> Blogs </span>
									</router-link>
								</li>

								<li>
									<router-link class="waves-effect waves-block waves-light translation-button" to="" data-target="info-dropdown">
										About Us &#x2B1D;
									</router-link>
								</li>

								<li>
									<router-link class="waves-effect waves-block waves-light translation-button" to="" data-target="accounts-dropdown">
										Accounts &#x2B1D;
									</router-link>
								</li>
							</ul>

							<ul class="dropdown-content" id="info-dropdown">
								<li>
									<router-link class="grey-text text-darken-1" to="/who-we-are">
										<i class="material-icons">info_outline</i> Who we are?
									</router-link>
								</li>
								<li>
									<router-link class="grey-text text-darken-1" to="/get-in-touch">
										<i class="material-icons">contact_phone</i> Get in touch
									</router-link>
								</li>
							</ul>

							<ul class="dropdown-content" id="accounts-dropdown">
								<li>
									<router-link class="grey-text text-darken-1" to="/login">
										<i class="material-icons">lock_open</i> Login
									</router-link>
								</li>
								<li>
									<router-link class="grey-text text-darken-1" to="/register">
										<i class="material-icons">portrait</i> Register
									</router-link>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
			<!-- END: Header-->
		</div>
	</template>
	<style type="text/css" scoped>
	
	</style>

	<script>
	export default {
		data: () => {
			return {
				bURL:window.bURL
			}
		},
		mounted() {

		}
	}
	</script>