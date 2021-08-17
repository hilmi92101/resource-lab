import Home from './components/Home';  
import About from './components/About'; 
import Blank from './components/Blank'; 

import Backoffice from './components/Backoffice/Index'; 
import BOForm from './components/Backoffice/Form'; 
import BODropzone from './components/Backoffice/Dropzone'; 
import BOGallery from './components/Backoffice/Gallery'; 
import BOButtonMenu from './components/Backoffice/ButtonMenu'; 
import BOLoginUser from './components/Backoffice/LoginUser'; 

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

        

        
    ] 
}