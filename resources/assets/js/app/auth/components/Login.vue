<template>
<div>
	<div class="layout-padding">
		<div class="row gutter">
			<div class="borde width-1of2">
				<div class="card">
					<div class="card-content">
						<form action="" @submit.prevent="submit">
							<input v-model="email" placeholder="Correo">
							<span class="tag label tag bg-light" v-if="errors.email"> {{errors.email[0]}} </span>
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
		
		
	</div>
</div>
</template>
<script>
import { mapActions } from 'vuex'
import localforage from 'localforage'
import { isEmpty} from 'lodash'
import { Toast } from 'quasar-framework'
	export default{
		data(){
			return {

				email: null,
				password: null,
				errors: [] 
			}
		},
		mounted(){
			//console.log(" loop ")
			
		},
		watch:{
			errors: function(val){
				if(this.errors.root){
					this.mensaje(this.errors.root);
				}
			}
		},
		methods:{
			...mapActions({
				login: 'auth/login',
				miperfil: 'polla/getPerfil',
				
				
			}),
			submit(){
				console.log("SUBMIT")
				this.login({
					payload: {
						email: this.email,
						password: this.password
					},
					context: this
				}).then(() =>{
					this.miperfil({
						payload: {
							id: 6
						}
					})
					this.$router.replace({name: 'tempo'})
					
				})
				//this.carga();
				/*this.verify();
				this.partidos();
				this.ciudades();*/
				
				/*this.login({
					payload: {
						email: this.email,
						password: this.password
					},
					context: this
				}).then(() => {
					localforage.getItem('intended').then((name) => {
						if(isEmpty(name)){
							this.$router.replace({ name: 'home'})							
							return
						}

						this.$router.replace({ name: name})						
					})
				});*/

			},

			mensaje (mensaje) {
      			Toast.create(mensaje)
    		}
		}
	}
</script>
