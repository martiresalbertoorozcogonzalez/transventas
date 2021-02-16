import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
   state: {
       carros: [],
       cabezales: [],
       furgones: []
   },
   mutations: {
       AGREGAR_CARROS(state, carros) {
           state.carros = carros;
       },
       AGREGAR_CABEZALES(state, cabezales) {
        state.cabezales = cabezales;
       },
       AGREGAR_FURGONES(state, furgones) {
        state.furgones = furgones;
       }
   }
});
