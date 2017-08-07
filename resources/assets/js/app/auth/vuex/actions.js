import { isEmpty } from 'lodash'
import { setHttpToken } from '../../../helpers'
import localforage from 'localforage'

export const login = ({dispatch}, {payload, context}) => {
    return axios.post('/api/login', payload).then((response) =>{
      console.log(response)
      dispatch('setToken', response.data.meta.token).then(() => {
        dispatch('fetchUser')
      })
    }).catch((error) => {
        context.errors = error.response.data.errors
        return Promise.reject(error)
    })
}

export const setToken = ({ commit, dispatch }, token) => {
    if (isEmpty(token)) {
        return dispatch('checkTokenExists').then((token) => {
            setHttpToken(token)
        })
    }

    commit('setToken', token)
    setHttpToken(token)
}

export const fetchUser = ({ commit }) => {
    console.log("Paso por FETCH USER")
    return axios.get('/api/me').then((response) => {
        commit('setAuthenticated', true)
        commit('setUserData', response.data.data)
    })
}

/*
    En registro exitoso:
    1. Verificar si tiene perfil
    SI - Ir a inicio
    NO -    ir a perfil
            completar perfil
        Ir a inicio
*/

export const register = ({ dispatch }, { payload, context }) => {
    return axios.post('/api/register', payload).then((response) => {
        dispatch('setToken', response.data.meta.token).then(() => {
            dispatch('fetchUser')
        })
    }).catch((error) => {
        
        context.errors = error.response.data.errors
        return Promise.reject(error)
    })
}

export const logout = ({ dispatch }) => {
    console.log('saliendo...')
    return axios.post('/api/logout').then((response) => {
        dispatch('clearAuth')
    })
}

export const checkTokenExists = ({ commit, dispatch }, token) => {
    return localforage.getItem('authtoken').then((token) => {
        if (isEmpty(token)) {
            return Promise.reject('NO_STORAGE_TOKEN');
        }

        return Promise.resolve(token)
    })
}

export const clearAuth = ({ commit }, token) => {
    commit('setAuthenticated', false)
    commit('setUserData', null)
    commit('setToken', null)
    setHttpToken(null)
}
