import axios from 'axios'
export default {
    namespaced: true,
    state: {
        news: [],
        arts: [],
        slides: [],
        upcommingExibitions: []
    },
    getters: {
        news(state) {
            return state.news
        },
        arts(state) {
            return state.arts
        },
        slides(state) {
            return state.slides
        },
        upcommingExibitions(state) {
            return state.upcommingExibitions
        }
    },

    mutations: {
        PUSH_NEWS(state, data) {
            state.news.push(...data)
        },
        PUSH_ARTS(state, data) {
            state.arts.push(...data)
        },
        PUSH_SLIDES(state, data) {
            state.slides.push(...data)
        },
        PUSH_UPCOMMINGEXIBITION(state, data) {
            state.upcommingExibitions.push(...data)
        },
    },
    actions: {
        async getNews({ commit }) {
            let response = await axios.get('/api/news')
            commit('PUSH_NEWS', response.data.data)
            return response
        },
        async getExibitionArts({ commit }, url) {
            let response = await axios.get(url)
            commit('PUSH_ARTS', response.data.data)
            return response
        },
        async getArtistArts({ commit }, url) {
            let response = await axios.get(url)
            commit('PUSH_ARTS', response.data.data)
            return response
        },
        async getSlides({ commit }) {
            let response = await axios.get('/api/slides')
            commit('PUSH_SLIDES', response.data.data)
            return response
        },
        async getUpcommingExibitions({ commit }) {
            let response = await axios.get('/api/upcoming/exibitions')
            commit('PUSH_UPCOMMINGEXIBITION', response.data.data)
            return response
        },

    },


}
