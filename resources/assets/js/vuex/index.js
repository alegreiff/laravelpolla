import Vue from 'vue'
import Vuex from 'vuex'
import auth from '../app/auth/vuex'
import polla from '../app/polla/vuex'

Vue.use(Vuex)

export default new Vuex.Store({
	modules: {
		auth: auth,
		polla: polla
	}
})