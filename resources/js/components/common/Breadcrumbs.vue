<template>
	<div  class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
		<!-- Search for small screen-->
		<div class="container">
			<div class="row">
				<div class="col s10 m6 l6 breadcrumbs-left">
					<h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down">Blank Page</h5>
					<ol class="breadcrumbs mb-0">
						<li class="breadcrumb-item"><a href="javascript:;">Home</a>
						</li>
						<li class="breadcrumb-item"><a href="javascript:;">Pages</a>
						</li>
						<li class="breadcrumb-item active">Blank Page
						</li>
					</ol>
				</div>
				<div class="col s2 m6 l6"><a class="btn btn-floating dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="javascript:;" data-target="dropdown1"><i class="material-icons">expand_more            </i><i class="material-icons right">arrow_drop_down</i></a>
					<ul class="dropdown-content" id="dropdown1" tabindex="0">
						<li tabindex="0"><a class="grey-text text-darken-2" href="javascript:;">Profile<span class="new badge red">2</span></a></li>
						<li tabindex="0"><a class="grey-text text-darken-2" href="javascript:;">Contacts</a></li>
						<li tabindex="0"><a class="grey-text text-darken-2" href="javascript:;">FAQ</a></li>
						<li class="divider" tabindex="-1"></li>
						<li tabindex="0"><a  class="grey-text text-darken-2" href="javascript:;">Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</template>
<style lang="stylus" scoped>

</style>

<script>
export default {
	mounted() {
		
	}
}
</script>