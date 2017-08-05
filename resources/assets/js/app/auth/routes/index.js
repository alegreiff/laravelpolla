import {Login, Register, Perfil, Tempo} from '../components'

export default[
	{
		path: '/login',
		component: Login,
		name: 'login',
		meta:{
			guest: true,
			needsAuth: false
		}
	},
	{
		path: '/register',
		component: Register,
		name: 'register',
		meta:{
			guest: true,
			needsAuth: false
		}
	},{
		path: '/tempo',
		component: Tempo,
		name: 'tempo',
		meta:{
			guest: true,
			needsAuth: false
		}
	},{
		path: '/perfil',
		component: Perfil,
		name: 'perfil',
		meta:{
			needsAuth: true
		}
	}
		
]	
