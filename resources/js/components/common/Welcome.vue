<template>
	<div>
		<header-bar></header-bar>
		<left-aside></left-aside>
		<div id="main">
			<div class="row">
				<div class="col s12">
					<div class="container">
						<div id="search-page" class="section" v-if="this.$route.fullPath == '/'">
							<div class="row" >
								<div class="col s12">
									

									<div class="row">


										
										<div class="input-field col s3">
											<select id="category" v-model="category">
												<option value="" disabled selected>Choose a category</option>
												<option value="Cook">Cook</option>
												<option value="Maid" selected>Maid</option>
												<option value="Driver">Driver</option>
											</select>
											<label>Choose a category</label>
											<br/>
											<input placeholder="Choose a city" id="searchTerm" type="text" class="search-box validate white search-circle" autocomplete="off">
										</div>

										<div class="col s12 m4 l3 grid" @click="goToLink('Delhi')">
											<figure class="card z-depth-0 grey lighten-4 border-radius-6 effect-bubba">
												<img  src="images/gallery/3.png" class="responsive-img card-image" alt="">
												<figcaption>
													<span>Delhi</span>
													<p class="description">Comming Soon...</p>
												</figcaption>
											</figure>
										</div>
										<div class="col s12 m4 l3 grid" @click="goToLink('Gurgaon')">
											<figure class="card z-depth-0 grey lighten-4 border-radius-6 effect-bubba">
												<img  src="images/gallery/3.png" class="responsive-img card-image" alt="">
												<figcaption>
													<span>Gurgaon</span>
													<p class="description">447+ candidates</p>
												</figcaption>
											</figure>
										</div>
										<div class="col s12 m4 l3 grid" @click="goToLink('Mumbai')">
											<figure class="card z-depth-0 grey lighten-4 border-radius-6 effect-bubba">
												<img  src="images/gallery/3.png" class="responsive-img card-image" alt="">
												<figcaption>
													<span>Mumbai</span>
													<p class="description">Comming Soon...</p>
												</figcaption>
											</figure>
										</div>
										

									</div>


									<div class="row">
										<div class="col s12">
											<!-- <ul class="tabs tabs-style">
												<li class="tab tab-style col s4"><a class="active"  href="javascript:;" @click="tab(1)"> Tab 1</a></li>
												<li class="tab tab-style col s4"><a  href="javascript:;" @click="tab(2)"> Tab 2</a></li>
												<li class="tab tab-style col s4"><a  href="javascript:;" @click="tab(3)"> Tab 3</a></li>
											</ul>

											<div id="test1" class="active" v-if="tabID == 1">1</div>
											<div id="test2" class="" v-if="tabID == 2">2</div>
											<div id="test3" class="" v-if="tabID == 3">3</div>
										-->
									</div>
									
									<div class="col s12">
										<div class="card z-depth-1">
											<div class="card-content">
												<p class="mb-2">About 62,00,000 results (0.40 seconds)</p>
												<div class="row">
													<div class="col l8 m12">
														<div class="result">
															<h6><a href="#">Materialize - Material Design Admin Template by PIXINVENT</a></h6>
															<p class="teal-text lighten-2">https://themeforest.net/item/materialize-material-design-admin-template</p>
															<p>Rating: 5 star - 128 reviews - US $24.00 In stak</p>
															<p>Mar 15, 2018 - Buy Materialize - Material Design Admin Template by PIXINVENT on ThemeForest.
															Materialize is a Material Design Admin Template</p>
														</div>
														<div class="row mt-3">
															<div class="col l6 m12">
																<p>Layout‎: ‎<span class="teal-text lighten-2">Responsive</span></p>
																<p>ThemeForest Files Included‎: ‎<span class="teal-text lighten-2">HTML Files‎, ‎CSS</span></p>
																<p>Author:PIXINVENT</p>
															</div>
															<div class="col l6 m12">
																<p>Created‎: ‎<span class="teal-text lighten-2">20 May 15</span></p>
																<p>Documentation‎: <span class="teal-text lighten-2">‎Well Documented</span></p>
															</div>
														</div>
														<h6 class="mt-3">Videos</h6>
														<div class="row video">
															<div class="col l4 m4 s12 p-3">
																<div class="row">
																	<div class="col s12">
																		<div class="card z-depth-0 grey lighten-4 border-radius-6">
																			<div class="card-image">
																				<img src="images/gallery/3.png" class="responsive-img" alt="">
																			</div>
																			<div class="card-content">
																				Materialize is a Material Design Admin Template.
																				<p class="teal-text lighten-2 truncate">www.youtube.com</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col l4 m4 s12">
																<div class="row">
																	<div class="col s12">
																		<div class="card z-depth-0 grey lighten-4 border-radius-6">
																			<div class="card-image">
																				<img src="images/gallery/19.png" class="responsive-img" alt="">
																			</div>
																			<div class="card-content">
																				Materialize admin is super flexible, powerful, clean.
																				<p class="teal-text lighten-2 truncate">www.youtube.com</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col l4 m4 s12">
																<div class="row">
																	<div class="col s12">
																		<div class="card z-depth-0 grey lighten-4 border-radius-6">
																			<div class="card-image">
																				<img src="images/gallery/20.png" class="responsive-img" alt="">
																			</div>
																			<div class="card-content">
																				Materialize admin includes 8 pre-built templates.
																				<p class="teal-text lighten-2 truncate">www.youtube.com</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

													</div>
													<div class="col l4 m12 right-content border-radius-6">
														<h5 class="mt-0">Materialize Admin</h5>
														<p>Material Design Admin Template by PIXINVENT</p>
														<img class="responsive-img mt-4 p-3 border-radius-6" src="images/gallery/34.png"
														alt="">
														<p class="mt-2 mb-2">Materialize is a Material Design Admin Template is the excellent responsive
														google material design inspired multipurpose admin template.</p>
														<hr>
														<p class="mt-2"><b class="blue-grey-text text-darken-4">Files Included:</b> HTML Files, CSS Files</p>
														<p class="mt-2"><b class="blue-grey-text text-darken-4">Layout:</b> Responsive</p>
														<p class="mt-2"><b class="blue-grey-text text-darken-4">Created:</b> 20 May 15</p>
														<p class="mt-2">Materialize - Material Design Admin Template by PIXINVENT</p>
														<p class="mt-5"><a href="#">Themeforest - $24</a></p>
													</div>
												</div>
												<ul class="pagination mt-5">
													<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
													<li class="active waves-effect border-radius-5"><a href="#!">1</a></li>
													<li class="waves-effect"><a href="#!">2</a></li>
													<li class="waves-effect"><a href="#!">3</a></li>
													<li class="waves-effect"><a href="#!">4</a></li>
													<li class="waves-effect"><a href="#!">5</a></li>
													<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- START RIGHT SIDEBAR NAV -->
					<router-view></router-view>
				</div>
			</div>
		</div>
	</div>
</div>
</template>
<style type="text/css" scoped>
#main{
	padding-left: 0px;
}
</style>
<script :src="bURL+'js/scripts/media-hover-effects.js'" type="text/javascript"></script>
<script>


import Breadcrumbs from './Breadcrumbs';
import HeaderBarForWelcome from './HeaderBarForWelcome';
import LeftAsideForWelcome from './LeftAsideForWelcome';
import RightAside from './RightAside';
import FooterBar from './FooterBar';								



export default {
	components: {
		'header-bar' : HeaderBarForWelcome,
		'left-aside' : LeftAsideForWelcome,
	},

	data: () => {
		return {
			tabID:localStorage.getItem('tab') ? localStorage.getItem('tab') : 1,
			active:'active'+localStorage.getItem('tab'),
			searchTermValue:'',
			localities: {},
			localitiesArray:[],
			category:''
		}
	},
	mounted() {
		//localStorage.clear();
		//alert(this.active);
		this.tabID = 1;

		axios.get('/api/load-localities')
		.then((res) => {
			//console.log(res.data.localities)
			this.localities = res.data.localities;
			this.localities.map(locality => { this.localitiesArray.push(locality.city); });
			$("#searchTerm").autocomplete({
				data: this.toObject(this.localitiesArray), 
				limit: 10, 
				onAutocomplete: (locality) => {
					//window.location.href = '/search/maid-in-'+locality;
					//localStorage.setItem('locality', locality);
					this.$router.push('/search/maid-in-'+locality);
				},
				minLength: 0 
			});
		}).catch(err => {});

	},

	watch:{
		tab: function(tabNew, tabOld){
			localStorage.setItem('tab', tabNew);
			this.tabID  = tabNew;
		}
	},

	

	computed: {
		// activeTab: function() {
		// 	return this.active ? 'active' : '';
		// }

		

	},

	methods: {
		toObject(arr) { 
			var rv = {}; 
			for (var i = 0; i < arr.length; ++i) 
				rv[arr[i]] = null; 
			return rv; 
		}, 
		tab: function(tab){
			localStorage.setItem('tab', tab);
			this.tabID  = tab;
			this.active  = 'active';
		},

		searchResults: function(){
			//const location = JSON.stringify($('#searchTerm').val()).replace(/['"]+/g, '');
			//this.$router.push('/search/maid-in-'+location);
			//$('#searchTerm').val();
		},
		goToLink: function(locality){
			this.$router.push('/search/maid-in-'+locality);
		}
	},

}
</script>