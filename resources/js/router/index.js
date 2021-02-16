import Vue from 'vue';
import VueRouter from 'vue-router';
import InicioPublicaciones  from '../components/InicioPublicaciones';
import MostrarPublicacion  from '../components/MostrarPublicacion';

const routes = [
    {
        path: '/',
        component: InicioPublicaciones
    },
    {
        path: '/publicacion/:id',
        name: "publicacion",
        component: MostrarPublicacion
    }
]

const router = new VueRouter({
    mode: 'history',
    routes
});


Vue.use(VueRouter);

export default router;
