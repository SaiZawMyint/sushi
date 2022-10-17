import { createStore } from 'vuex';
import axiosClient from '../axios';
const store = createStore({
    state: {
        user: {
            data: {},
            token: sessionStorage.getItem('TOKEN'),
            showacc: true,
            otp: ''
        },
        store: {
            name: 'My Stores',
            photo: '',
            status: true,
            stores: [
                {
                    id: 0,
                    name: 'My Store',
                    photo: '',
                    status: true,
                    description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit rerum delectus veniam, quaerat maiores qui obcaecati amet iusto perspiciatis nostrum? Ipsum quo a reprehenderit adipisci deserunt laudantium voluptas accusantium?"
                },
                {
                    id: 1,
                    name: 'My Store 1',
                    photo: '',
                    status: true,
                    description: "Welcome to my store"
                },
                {
                    id: 2,
                    name: 'My Store 2',
                    photo: '',
                    status: true,
                    description: "Welcome to my store"
                },
                {
                    id: 2,
                    name: 'My Store 2',
                    photo: '',
                    status: true,
                    description: "Welcome to my store"
                },
                {
                    id: 2,
                    name: 'My Store 2',
                    photo: '',
                    status: true,
                    description: "Welcome to my store"
                },
                {
                    id: 2,
                    name: 'My Store 2',
                    photo: '',
                    status: true,
                    description: "Welcome to my store"
                },
                {
                    id: 2,
                    name: 'My Store 2',
                    photo: '',
                    status: true,
                    description: "Welcome to my store"
                }
            ]
        },
        modalBox: {
            data: {

            },
            step: {
                one: true,
                two: false,
                three: false
            }
        },
        loadingScreen: {
            show: false,
            title: ''
        },
        popUpNoti: {
            
        }
    },
    getters: {},
    actions: {
        register({ commit }, user) {
            return axiosClient.post('/register', user)
                .then(({ data }) => {
                    commit('setUser', data)
                    return data;
                })
        },
        login({ commit }, user,
        ) {
            return axiosClient.post('/login', user)
                .then(({ data }) => {
                    commit('setUser', data)
                    return data;
                })
        },
        logout({ commit }) {
            return axiosClient.post('/logout')
                .then((res) => {
                    commit('logout')
                    return res
                })
        },
        otp({commit},data) {
            return axiosClient.post('/otp',data)
                .then((res) => {
                    return res;
                })
        },
        verifyOTP({commit},data){
            return axiosClient.post('/otp/verification',data)
            .then(res=>{return res.data});
        },
        refreshUser({commit}){
            return axiosClient.post('/getUser').then(res=>{
                const data = {
                    user: res.data,
                    token: sessionStorage.getItem('TOKEN')
                }
                commit('setUser',data)
                return res;
            })
        }
        ,
        modalBox({ commit }, data) {
            commit('modal', data)
            return data
        }
    },
    mutations: {
        logout: state => {
            state.user.data = {}
            state.user.token = null
            sessionStorage.removeItem('TOKEN')
        },
        setUser: (state, data) => {
            state.user.data = data.user
            state.user.token = data.token
            sessionStorage.setItem("TOKEN", data.token)
        },
        modal: (state, data) => {
            state.modalBox.data = data
        },
        otp: (state,data)=>{
            state.user.otp = data.code
        }
    },
    module: {}
})
export default store