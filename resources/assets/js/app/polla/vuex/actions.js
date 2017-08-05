import { isEmpty} from 'lodash'
import localforage from 'localforage'
import { setHttpToken } from '../../../helpers'

export const datosEquipos = ({commit}) => {
	return localforage.getItem('equipos').then((equipos) =>{
		if(isEmpty(equipos)){
			return axios.get('/api/grupes').then((response) => {
				commit('setEquiposData', response.data.data)
				localforage.setItem('equipos', response.data.data)
			})
		}
			commit('setEquiposData', equipos)
	})
}


export const datosPartidos = ({commit}) => {
	return localforage.getItem('partidosGrupos').then((partidosGrupos) =>{
		if(isEmpty(partidosGrupos)){
			return axios.get('/api/matcheses').then((response) => {
				commit('setPartidosData', response.data.data)
				localforage.setItem('partidosGrupos', response.data.data)
			})
		}
			commit('setPartidosData', partidosGrupos)
	})
}


export const datosCiudades = ({commit}) => {
	return localforage.getItem('ciudadesRusia').then((ciudades) =>{
		if(isEmpty(ciudades)){
			return axios.get('/api/ciudades').then((response) => {
				commit('setCiudadesData', response.data.data)
				localforage.setItem('ciudadesRusia', response.data.data)
			})
		}
			commit('setCiudadesData', ciudades)
	})
}



export const perfil = ({ commit, dispatch }, { payload}) => {
    return axios.post('/api/perfil', payload).then((response) => {
        console.log('sales')
        console.log(response)
        commit('setPerfilUsuario', response.data.data)
    }).catch((error) => {
        console.log("ERROR POLLA/VUEX/ACTIONS")

    })
}

export const getPerfil = ({commit}) => {
	return axios.get('/api/miperfil').then((response) =>{
		console.log(response.data)
		commit('setPerfilUsuario', response.data.data.descripcion)
	})
}

export const traeperfil = ({commit}, {context}) => {
	axios.get('/api/perfil').then((response) => {
		//console.log("Hurrah")
		if(response.data.data !=null){
			context.usuario = response.data.data
		}
		context.status = response.data.status
	}).catch((error) =>{
		window.location.reload(true);
	})	
}