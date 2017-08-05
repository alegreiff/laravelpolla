import {Equipos, Partidos} from '../components'

export default[
	{
		path: '/partidos',
		component: Partidos,
		name: 'partidos',
		meta:{
			needsAuth: true
		}
	},
	{
		path: '/equipos',
		component: Equipos,
		name: 'equipos',
		meta:{
			needsAuth: true
		}
	}
]	
