<template>
<div>
	<div class="layout-padding">
		<div class="card">
			<div class="card-content">
				<form action="" @submit.prevent="submit">
					<input v-model="name" placeholder="Nombre" :class="{'pink-1': errors.name}">
					<span class="tag label tag bg-light" v-if="errors.name"> {{errors.name[0]}} </span>
					<br>
					<input v-model="email" placeholder="Correo">
					<span class="tag label tag bg-light" v-if="errors.email"> {{errors.email[0]}} </span>
					<br>
					<input v-model="descripcion" placeholder="descripcion">
					<span class="tag label tag bg-light" v-if="errors.descripcion"> {{errors.descripcion[0]}} </span>
					<br>
					<input v-model="password" type="password" placeholder="Contraseña">
					<span class="tag label tag bg-light" v-if="errors.password"> {{errors.password[0]}} </span>
					<br>
					<button class="primary small" type="submit">Enviar</button>
				</form>
			</div>
		</div>
		
	</div>
</div>
</template>
<script>
import { mapActions } from 'vuex'
	export default{
		data(){
			return {
				name: null,
				email: null,
				password: null,
				descripcion: null,
				errors: []
			}
		},
		methods:{
			revisar(){
				console.log("loope");
			},
			...mapActions({
				register: 'auth/register'
			}),
			submit(){
				this.register({
					payload:{
						name: this.name,
						email: this.email,
						password: this.password
						//descripcion: this.descripcion
					},
					context: this
				}).then(()=>{
					this.$router.replace({ name: 'home'})
				})
			}
		}
	}
</script>
<style>
	.dis_error{
		background-color: lime !important;
		color: red;
	}
</style>