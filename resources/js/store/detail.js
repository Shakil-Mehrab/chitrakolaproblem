import axios from 'axios'
export default {
    namespaced: true,
    state: {
        newsDetail:[],
        artDetail:[],

    },
    getters: {
        newsDetail (state) {
            return state.newsDetail
        },
        artDetail (state) {
            return state.artDetail
        }
    },

    mutations: {
        PUSH_NEWSDETAIL (state, data) {
            state.newsDetail=data
        },
        PUSH_ARTDETAIL (state, data) {
            state.artDetail=data
        },
    },
    actions: {
        async getNewsDetail({commit}, url) {
            let response = await axios.get(url)
            commit('PUSH_NEWSDETAIL', response.data.data)
            return response
        },
        async getArtDetail({commit}, url) {
            let response = await axios.get(url)
            commit('PUSH_ARTDETAIL', response.data.data)
            return response
        }
    },


}
