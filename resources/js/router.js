import Vue from 'vue';


import Vuelidate from "vuelidate";
import VueRouter from 'vue-router';


import App from './components/AppComponent';
import Welcome from './components/WelcomeComponent';
import Dashboard from './components/DashboardComponent';
import SearchComponent from './components/SearchComponent';
import LoginComponent from './components/LoginComponent';
import RegisterComponent from './components/RegisterComponent';
import WhoWeAreComponent from './components/WhoWeAreComponent';
import GetInTouchComponent from './components/GetInTouchComponent';
import LogoutComponent from './components/LogoutComponent';
import AdminComponent from './components/AdminComponent';
import AdminTestComponent from './components/AdminTestComponent';
import ManageLocations from './components/ManageLocations';


import AddNewCountry from './components/AddNewCountry';
import AddNewState from './components/AddNewState';
import AddNewDistrict from './components/AddNewDistrict';
import AddNewCity from './components/AddNewCity';
import AddNewTahsil from './components/AddNewTahsil';
import AddNewVillage from './components/AddNewVillage';
import AddNewLocality from './components/AddNewLocality';


import TranslatorComponent from './components/TranslatorComponent';
import TranslatorTestComponent from './components/TranslatorTestComponent';
import RolesComponent from './components/RolesComponent';


Vue.use(VueRouter);
Vue.use(Vuelidate);




// Vue.directive("select", {
//   "twoWay": true,

//   "bind": function () {
//     $(this.el).material_select();

//     var self = this;

//     $(this.el).on('change', function() {
//       self.set($(self.el).val());
//     });
//   },

//   update: function (newValue, oldValue) {
//     $(this.el).val(newValue);
//   },

//   "unbind": function () {
//     $(this.el).material_select('destroy');
//   }
// });


window.layout = localStorage.getItem('layout') != null ? localStorage.getItem('layout') : 'Welcome';
window.loggedIn = localStorage.getItem('loggedIn') ? localStorage.getItem('loggedIn') : false;
window.role = localStorage.getItem('role') ? localStorage.getItem('role') : null;
window.token = localStorage.getItem('token') ? localStorage.getItem('token') : null;

const routes = [
{
  path: '/',
  component: Welcome,
  name: 'Welcome',
  meta: {
    auth: true,
    title: 'Home Page',
    metaTags: [
    {
      name: 'description',
      content: 'The home page of ArabEasy App.'
    },
    {
      property: 'og:description',
      content: 'The home page of ArabEasy App.'
    }
    ]
  },

  children: [
  
  {
    path: '/search/maid-in-:city',
    component: SearchComponent,
    name: 'Search',
    meta: {
      auth: true,
      title: 'Search Panel',
      metaTags: [
      {
        name: 'description',
        content: 'Search Panel'
      },
      {
        property: 'og:description',
        content: 'Search Panel'
      }
      ]
    }
  },
  {
    path: '/login',
    component: LoginComponent,
    name: 'Login',
    meta: {
      auth: true,
      title: 'Login Panel',
      metaTags: [
      {
        name: 'description',
        content: 'Login Panel'
      },
      {
        property: 'og:description',
        content: 'Login Panel'
      }
      ]
    }
  },
  {
    path: '/register',
    component: RegisterComponent,
    name: 'Register',
    meta: {
      auth: true,
      title: 'Register Panel',
      metaTags: [
      {
        name: 'description',
        content: 'Register Panel'
      },
      {
        property: 'og:description',
        content: 'Register Panel'
      }
      ]
    }

  },
  {
    path: '/who-we-are',
    component: WhoWeAreComponent,
    name: 'WhoWeAre'

  },
  {
    path: '/get-in-touch',
    component: GetInTouchComponent,
    name: 'GetInTouch'

  }    
  ],
  meta: {
    auth: false,
    title: 'Home Page - Example App',
    metaTags: [
    {
      name: 'description',
      content: 'The home page of our example app.'
    },
    {
      property: 'og:description',
      content: 'The home page of our example app.'
    }
    ]
  }
},
{
  path: '/dashboard',
  component: Dashboard,
  children: [
  {
    path: '/administrator',
    component: AdminTestComponent,
    name: 'Administrator'
  },
  {
    path: '/translator',
    component: TranslatorComponent,
    name: 'Translator'

  },
  {
    path: '/roles',
    component: RolesComponent,
    name: 'Roles'
  },
  {
    path: '/test',
    component: AdminTestComponent,
    name: 'AdminTest'
  },
  {
    path: '/manage-locations',
    component: ManageLocations,
    name: 'ManageLocations'
  },
  {
    path: '/add-new-district',
    component: AddNewDistrict,
    name: 'AdminTest1'
  },
  {
    path: '/test-link-2',
    component: AdminTestComponent,
    name: 'AdminTest2'
  },
  {
    path: '/test-link-3',
    component: AdminTestComponent,
    name: 'AdminTest3'
  },
  ],
  meta: {
    auth: true,
    title: 'Home Page - Example App',
    metaTags: [
    {
      name: 'description',
      content: 'The home page of our example app.'
    },
    {
      property: 'og:description',
      content: 'The home page of our example app.'
    }
    ]
  },
  beforeEnter: (to, from, next) => {
    axios.get('api/verify/'+role)
    .then(res => {
      console.log(res);
      if(res.data.status == 0){
        localStorage.removeItem('token');
        localStorage.removeItem('role');
        localStorage.removeItem('loggedIn');
        next('/');   
      }else{ next();}
    }).catch(err => { 
      console.log(err);
      next('/') 
    })
  }
},
];

const router = new VueRouter({ routes, mode: 'history', linkExactActiveClass: 'is-active',  });

router.beforeEach((to, from, next) => {
  const token = localStorage.getItem('token') || null
  window.axios.defaults.headers.common['Authorization'] = "Bearer "+token;
  next();    
});



export default router; 