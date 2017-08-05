<template>
  <!-- root node required -->
  <div>
    <!-- your content -->
    <div class="layout-padding">
      <!-- if you want automatic padding -->
      <h3>DATA Usuario</h3>
      <pre> {{ error }} </pre>
		<form action="" @submit.prevent="submit">
			<input type="text" v-model="usuario.descripcion">
			<button class="primary small" type="submit">Enviar .. </button>
		</form>
      <pre>{{ usuario }}</pre>
      <p>{{ usuario.descripcion }} </p>
      <hr>
      <p>{{ status }}</p>
    </div>
  </div>
</template>
<script>
import { mapActions } from 'vuex'
	export default{
		data(){
			return{
				usuario: {
					user_id:  '',
					descripcion: ''
				},
				status: null,
				error: null
			}
		},
		mounted(){
			this.traeperfil({
				context: this
			})
		},

		methods:{
			...mapActions({
				perfil: 'polla/perfil',
				traeperfil: 'polla/traeperfil',
				logout: 'auth/logout'

			}),
			submit() {
				this.perfil({
					payload: {
						descripcion: this.usuario.descripcion
					}
				})
				console.log(this.usuario)
			}
		}
	}
</script>
