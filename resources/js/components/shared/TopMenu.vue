<template>

<nav class="navbar is-success" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
		<router-link class="navbar-item" :to="{name: 'index'}" v-once>
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </router-link>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Home
      </a>
      <div class="navbar-item has-dropdown is-hoverable" v-show="isLoggedIn">
        <a class="navbar-link">
          User
        </a>

        <div class="navbar-dropdown">
					<router-link class="navbar-item" v-show="isLoggedIn" :to="{name: 'profile'}"> Profile </router-link>
     			<a class="navbar-item" href="#" v-show="isLoggedIn"  @click.prevent="logout"> Logout </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
        	<router-link :to="{name: 'signup'}" class="button is-primary"> <strong>Sign up</strong> </router-link>
          <router-link :to="{name: 'login'}" class="button is-light"> <strong>Log In</strong> </router-link>
        </div>
      </div>
    </div>
  </div>
</nav>
</template>

<script>
	import {siteName} from './../../config';
	import {mapGetters} from 'vuex';
	import jwtToken from '../../helpers/jwt-token';

	export default {
		data() {
			return {
				siteName: siteName
			}
		},
		computed: mapGetters([
			'isLoggedIn'
		]),
		methods: {
			logout() {
				jwtToken.removeToken();
				this.$store.dispatch('unsetAuthUser')
					.then(() => {
						this.$noty.success('You are logged out');
						this.$router.push({name: 'login'});
					});
			}
		}
	}
</script>
