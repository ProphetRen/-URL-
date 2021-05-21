import axios from "axios"
import Vue from "vue"
import Vuex from "vuex"

Vue.use(Vuex);
let store = new Vuex.Store({
  actions:{
    GET_PRODUCTS_FROM_API({commit}){
      return axios('http://localhost:3000/films',{
        method:"GET"
      })
        .then((films)=>{
          commit('SET_FILMS_TO_STATE',films.data);
        })
    },
  },
  mutations:{
    SET_PRODUCTS_TO_STATE:(state, films) =>{
      state.products = films;
    },
  },

  state:{
    films: [],
  },

  getters:{
    PRODUCTS(state){
      return state.films;
    },
  }
});

export default store;