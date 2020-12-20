import NewsDetail from './components/News/variants/AppNewsDetail.vue';
import ArtDetail from './components/Art/variant/AppArtDetail.vue';
import ExibitionArts from './components/Exibition/variant/AppExibitionArts.vue';
import ArtistArts from './components/Artists/variant/AppArtistArts.vue';





export const routes = [
    { path: '/news/detail/:id', component: NewsDetail },
    { path: '/art/detail/:id', component: ArtDetail },
    { path: '/exibition/:id', component: ExibitionArts },
    { path: '/artist/:id', component: ArtistArts },



]

