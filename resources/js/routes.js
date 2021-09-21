import Home from './components/Home';  
import About from './components/About'; 
import Blank from './components/Blank'; 

import Backoffice from './components/Backoffice/Index'; 
import BOForm from './components/Backoffice/Form'; 
import BODropzone from './components/Backoffice/Dropzone'; 
import BOGallery from './components/Backoffice/Gallery'; 
import BOButtonMenu from './components/Backoffice/ButtonMenu'; 
import BOLoginUser from './components/Backoffice/LoginUser'; 

//import VLanding from './components/Vuetify/Landing';
import VStudyingHome from './components/Vuetify/Studying/Home';  
import VStudyingAbout from './components/Vuetify/Studying/About';  
import VStudyingTextColor from './components/Vuetify/Studying/TextColor';  
import VStudyingButtonsIcons from './components/Vuetify/Studying/ButtonsIcons';  
import VStudyingBreakpointsVisibility from './components/Vuetify/Studying/BreakpointsVisibility';  
import VStudyingProjects from './components/Vuetify/Studying/Projects';  
import VStudyingCards from './components/Vuetify/Studying/Cards';  

import VLandingApp from './components/Vuetify/Landing/App';


export default { 
    mode: 'history', 
    routes: [ 
        { 
            name: 'home',
            path:'/', 
            component: Home 
        }, 
        { 
            name: 'about',
            path:'/about', 
            component: About 
        },
        { 
            name: 'blank',
            path:'/blank', 
            component: Blank 
        }, 
        
        { 
            name: 'backoffice',
            path:'/backoffice', 
            component: Backoffice 
        }, 
        { 
            name: 'backoffice-form',
            path:'/backoffice/form', 
            component: BOForm 
        },
        { 
            name: 'backoffice-dropzone',
            path:'/backoffice/dropzone', 
            component: BODropzone 
        },
        { 
            name: 'backoffice-gallery',
            path:'/backoffice/gallery', 
            component: BOGallery 
        },
        { 
            name: 'backoffice-button-menu',
            path:'/backoffice/button-menu', 
            component: BOButtonMenu 
        },
        { 
            name: 'backoffice-login-user',
            path:'/backoffice/login-user', 
            component: BOLoginUser
        },

        // { 
        //     name: 'vuetify-landing',
        //     path:'/vuetify', 
        //     component: VLanding
        // },
        { 
            name: 'vuetify-studying-home',
            path:'/vuetify/studying', 
            component: VStudyingHome
        },
        { 
            name: 'vuetify-studying-about',
            path:'/vuetify/studying/about', 
            component: VStudyingAbout
        },
        { 
            name: 'vuetify-studying-text-color',
            path:'/vuetify/studying/text-color', 
            component: VStudyingTextColor
        },
        { 
            name: 'vuetify-studying-buttons-icons',
            path:'/vuetify/studying/buttons-icons', 
            component: VStudyingButtonsIcons
        },
        { 
            name: 'vuetify-studying-breakpoints-visibility',
            path:'/vuetify/studying/breakpoints-visibility', 
            component: VStudyingBreakpointsVisibility
        },
        { 
            name: 'vuetify-studying-projects',
            path:'/vuetify/studying/projects', 
            component: VStudyingProjects
        },
        { 
            name: 'vuetify-studying-cards',
            path:'/vuetify/studying/cards', 
            component: VStudyingCards
        },

        { 
            name: 'vuetify-studying-cards',
            path:'/vuetify/landing/v1', 
            component: VLandingApp
        },
        
        
        
        
    ] 
}