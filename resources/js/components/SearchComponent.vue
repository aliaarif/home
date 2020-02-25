<template>
  <div class="section">


    <!-- {{ this.$route.params.city }} -->
    <div class="row" id="ecommerce-products">
      <div class="col s12 m3 l3 pr-0 hide-on-med-and-down animate fadeLeft">
        <div class="card">
          <div class="card-content">
            <form action="#" class="display-grid">


              <p-check name="check" color="success" v-model="check">Check</p-check>

              <span class="card-title">Choose a Gender</span>
              <label class="mt-1">
                <input type="checkbox" @click="getGender('Male')" v-model='theBrothers'  name="gender-male" class="gender" value='Male' />
                <span> Male</span>
              </label>
              <label class="mt-1">
                <input type="checkbox" @click="getGender('Female')" v-model='theBrothers'  name="gender-female" class="gender" value='Female' />
                <span> Female</span>
              </label>

              <span class="card-title mt-10">Monthly Salary</span>
              <label class="mt-1">
                <input type="checkbox" @click="getSalary('2000-4000')" v-model='theBrothers' name="salary-range-1" class="salary" value='2000-4000' />
                <span> INR 2000 to INR 4000</span>
              </label>
              <label class="mt-1">
                <input type="checkbox" @click="getSalary('3000-4000')" v-model='theBrothers'  name="salary-range-2" class="salary" value='3000-5000' />
                <span> INR 3000 to INR 5000</span>
              </label>
              <label class="mt-1">
                <input type="checkbox" @click="getSalary('4000-7000')"  v-model='theBrothers' name="salary-range-3" class="salary" value='4000-7000' />
                <span> INR 4000 to INR 7000</span>
              </label>
              <label class="mt-1">
                <input type="checkbox" @click="getSalary('5000-10000')" v-model='theBrothers' name="salary-range-4" class="salary" value='5000-10000' />
                <span> INR 5000 to INR 10000</span>
              </label>

              <span class="card-title mt-10">Locality</span>
              <label class="mt-1" v-for="locality in listLocalities">
                <input type="checkbox" @click="getPlace(locality.name)" v-model='theBrothers'  :name="locality.name.replace(' ', '-')" class="place" :value="locality.name" />
                <span> {{ locality.name }}</span>
              </label>
              
              <span class="card-title mt-10">Customer Ratings</span>
              

              <label>
                <input type="checkbox" name="rating" value="5" />
                <span>
                  <i class="material-icons amber-text"> star </i>
                  <i class="material-icons amber-text"> star </i>
                  <i class="material-icons amber-text"> star </i>
                  <i class="material-icons amber-text"> star </i>
                  <i class="material-icons amber-text"> star </i>
                </span>
              </label>
              <label>
                <input type="checkbox" name="rating" value="4" />
                <span>
                  <i class="material-icons amber-text"> star </i>
                  <i class="material-icons amber-text"> star </i>
                  <i class="material-icons amber-text"> star </i>
                  <i class="material-icons amber-text"> star </i>
                </span>
              </label>
              <label>
                <input type="checkbox" name="rating" value="3" />
                <span>
                  <i class="material-icons amber-text"> star </i>
                  <i class="material-icons amber-text"> star </i>
                  <i class="material-icons amber-text"> star </i>
                </span>
              </label>
              <label>
                <input type="checkbox" name="rating" value="2" />
                <span>
                  <i class="material-icons amber-text"> star </i>
                  <i class="material-icons amber-text"> star </i>
                </span>
              </label>
              <label>
                <input type="checkbox" name="rating" value="1" />
                <span>
                  <i class="material-icons amber-text"> star </i>
                </span>
              </label>
            </form>
          </div>
        </div>
      </div>
      <div class="col s12 m12 l9">
        <!-- You have checked: {{ filtersObj }} -->
        <div class="col s12 m4 l4" v-for="candidate in listCandidates.data">
          <div class="card animate fadeLeft">
            <div class="card-badge"><a class="white-text"> <b>{{ candidate['gender'] }}</b> </a></div>
            <div class="card-content">
              <p>{{ candidate['name'] }}</p>
              <span class="card-title text-ellipsis">{{ candidate['locality'] }}</span>
              <img src="images/cards/watch-2.png" class="responsive-img" alt="">
              <p>{{ candidate['salary'].replace('-', ' INR to ') }} INR per month</p>
              <div class="row">
                <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger"
                href="#modal1">View</a>
              </div>
            </div>
          </div>
          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content pt-2">
              <div class="row" id="product-one">
                <div class="col s12">
                  <a class="modal-close right"><i class="material-icons">close</i></a>
                </div>
                <div class="col m6">
                  <img src="images/cards/watch-2.png" class="responsive-img" alt="">
                </div>
                <div class="col m6">
                  <p>Smartwatches</p>
                  <h5>Smartwatch 2.0 LTE Wifi</h5>
                  <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                  <p>Availability: <span class="green-text">36 Item Available</span></p>
                  <hr class="mb-5">
                  <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                  <p class="mt-3">- Accept SIM card and call</p>
                  <p>- Make calling instead of mobile phone</p>
                  <p>- Sync music play and sync control music</p>
                  <p>- Sync Facebook,Twiter,emailand calendar</p>
                  <h5>$399.00 <span class="prise-text-style ml-2">$459.00</span></h5>
                  <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2">ADD TO CART</a>
                  <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Pagination -->
        <div class="col s12 center">
          <vue-pagination   :pagination="listCandidates"
          @paginate="getCandidates"
          :offset="4">
        </vue-pagination>

      </div>





    </div>
  </div>


</div>
</template>
<script>


import { required, email, minLength } from "vuelidate/lib/validators";
import VuePagination from './Pagination.vue';


// import PrettyInput from 'pretty-checkbox-vue/input';
import PrettyCheck from 'pretty-checkbox-vue/check';
// import PrettyRadio from 'pretty-checkbox-vue/radio';

// Vue.component('p-input', PrettyInput);
//Vue.component('p-check', PrettyCheck);
// Vue.component('p-radio', PrettyRadio);


export default {



  name: "SearchComponent",
  data: () => {
    return {
      check:true,
      listCandidates: {
        total: 0,
        per_page: 2,
        from: 1,
        to: 0,
        current_page: 1
      },
      listLocalities:{},
      offset: 4,
      filters:[],
      filtersObj: {

          // gender:localStorage.getItem('gender') ? localStorage.getItem('gender') : '',
          // salary:localStorage.getItem('salary') ? localStorage.getItem('salary') : '',
          // place:localStorage.getItem('place') ? localStorage.getItem('place') : ''

        },
        // gender:localStorage.getItem('gender') ? localStorage.getItem('gender') : '',
        // salary:localStorage.getItem('salary') ? localStorage.getItem('salary') : '',
        // place:localStorage.getItem('place') ? localStorage.getItem('place') : ''

      }
    },
    methods: {

      getGender: (gender) => {
        localStorage.setItem('gender', gender);

        //$().prop('checked',false);



//
$('#'+localStorage.getItem('gender')).prop('checked',true);        

        // if($('#'+localStorage.getItem('gender')).is(':checked')){

        //   alert(gender);

        // }


      },

      getSalary: (salary) => {
        localStorage.setItem('salary', salary);
      },

      getPlace: (place) => {
        localStorage.setItem('place', place);
      },

// aaa(){

//   //console.log(cls);
//   //var this = $(cls);
//   $('.locality').prop('checked',false);
//   $('.locality').prop('checked',true);
//   if($('.locality').is(':checked')){
//     console.log($(this).val());
//     //alert($(cls).val());
//     //this.filtersObj.locality = $(this).val();
//     //localStorage.setItem('locality', $(this).val());
//     //alert(localStorage.getItem('locality'));
//     //this.locality = localStorage.getItem('locality');
//     //this.filtersObj.locality = $(this).val();
//   }
// },

getLocalities(){
  const city = JSON.stringify(this.$route.params.city).replace(/['"]+/g, '');
  axios.get(`/api/load-localities/${city}`)
  .then((res) => {
    console.log(res.data.localities);
    this.listLocalities = res.data.localities
  }).catch(err => {});      
},

getCandidates(){
  const city = JSON.stringify(this.$route.params.city).replace(/['"]+/g, '');
  axios.get(`/api/load-candidates/${city}?page=${this.listCandidates.current_page}`)
  .then((res) => {
//console.log(res.data.data);
this.listCandidates = res.data
}).catch(err => {});
}
},
mounted() {
  //alert(this.gender);
  this.getLocalities();
  this.getCandidates(); 



  $(".gender").on('change', () => {
    $(".gender").prop('checked',false);
    $(this).prop('checked',true);
    if($(this).is(':checked')){

//alert($(this).val());
//this.filtersObj.gender = $(this).val();
//localStorage.setItem('gender', $(this).val());
//alert(localStorage.getItem('gender'));
//this.gender = localStorage.getItem('gender');
//this.filtersObj.gender = $(this).val();
}


});


  $(".salary").on('change', () => {
    $(".salary").prop('checked',false);
    $(this).prop('checked',true);
    if($(this).is(':checked')){
//alert($(this).val());
//this.filtersObj.salary = $(this).val();
//localStorage.setItem('salary', $(this).val());
//alert(localStorage.getItem('salary'));
//this.salary = localStorage.getItem('salary');
//this.filtersObj.salary = $(this).val();
}
});

// $(".place").on('change', () => {
//   $(".place").prop('checked',false);
//   $(this).prop('checked',true);
//   if($(this).is(':checked')){
// //alert($(this).val());
// //this.filtersObj.salary = $(this).val();
// //localStorage.setItem('place', $(this).val());
// //alert(localStorage.getItem('salary'));
// //this.salary = localStorage.getItem('salary');
// //this.filtersObj.salary = $(this).val();
// }
// });




},

components: {
  'vue-pagination': VuePagination,
// 'p-input': PrettyInput,
'p-check': PrettyCheck,
// 'p-radio': PrettyRadio
},


computed: {
  theBrothers: {
    set(val){
      this.$store.state.theBrothers = val;



// axios.get(`/api/filtered-candidates/${this.filtersObj}?page=${this.listCandidates.current_page}`)
// .then((res) => {

//   console.log(res.data.data);
//   this.listCandidates = res.data

// }).catch(err => {});

this.filtersObj.gender = localStorage.getItem('gender');
this.filtersObj.salary = localStorage.getItem('salary');
this.filtersObj.locality = localStorage.getItem('place');

localStorage.setItem('storeObj', JSON.stringify(this.filtersObj));

const filters = JSON.parse(localStorage.getItem('storeObj'));

console.log(filters);

},

get(){ 
  this.filters = this.$store.state.theBrothers;






  return this.$store.state.theBrothers
},

}
},

}
</script>
<style scoped></style>