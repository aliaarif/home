<template>
  <div id="register-page" class="row">
    <div class="right col s12 m6 l6 z-depth-1 card-panel border-radius-6 register-card bg-opacity-8">
      <form  @submit.prevent="login" class="login-form">
        <div class="row">
          <div class="input-field col s12">
            <h5 class="ml-4">Login Panel</h5>
            <p class="ml-4">Login to ArabEasy portal!</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12" >
            <i class="material-icons prefix pt-2">mail_outline</i>
            <input id="username" type="text" v-model="form.username">
            <label for="username" >Username / Mobile / Email</label>
            <span class="red-text" role="alert" v-if="this.$v.form.username.$error">Please provide your username(username/email/mobile)</span>          
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix pt-2">lock_outline</i>
            <input id="password" type="password" v-model="form.password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <select id="role" v-model="form.role">
              <option value="" disabled selected>Login As</option>
              <option value="administrator">Administrator</option>
              <option value="translator" selected>Translator</option>
              <option value="client">Client</option>
            </select>
            <label>Materialize Select</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <p class="margin medium-small">
              <router-link to="/register">
                Already have an account? Login
              </router-link>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
import { required, email, minLength } from "vuelidate/lib/validators";
export default {
  name: "LoginComponent",
  data: () => {
    return {
     form: {
      username: '',
      password: ''
    },
    layout: localStorage.getItem('loggedIn') == null ? false : localStorage.getItem('layout') ,
    role: localStorage.getItem('role') == null ? false : localStorage.getItem('role') ,
    token: localStorage.getItem('token') == null ? false : localStorage.getItem('token') ,
    //ucode: localStorage.getItem('ucode') == null ? false : localStorage.getItem('ucode') ,
    loggedIn: localStorage.getItem('loggedIn') == null ? false : localStorage.getItem('loggedIn') ,
  }
},
validations: {
  form: {
    username: { required, email },
    password: { required, min: minLength(8) },
  }
},
methods: {
  login(){
    this.$v.form.$touch();
    if(this.$v.form.$error){
      if(this.$v.form.username.$error){
        $('#username').focus();
        return;
      }else if(this.$v.form.password.$error){
       $('#password').focus();
       return;
     }       
   } 
   axios.interceptors.request.use((config) => {
    this.loading = true;
    return config;
  }, (error) => {
    this.loading = false;
    return Promise.reject(error);
  });
   axios.interceptors.response.use((response) => {
    this.loading = false;
    return response;
  }, (error) => {
    this.loading = false;
    return Promise.reject(error);
  });
   axios.post('/api/login', {'email': this.form.username, 'password': this.form.password })
   .then((res) => {
    layout =  res.data.role ? 'Dashboard' : 'Welcome';
    localStorage.setItem('layout', layout);
    localStorage.setItem('role', res.data.role);
    localStorage.setItem('token', res.data.user.api_token);
    localStorage.setItem('ucode', res.data.user.ucode);
    localStorage.setItem('loggedIn', true);
    window.location.href=bURL;
  }).catch(err => {})},
 },
 mounted() {
  if(loggedIn){
    this.$router.push('/');
  }
},

}
</script>
<style scoped></style>