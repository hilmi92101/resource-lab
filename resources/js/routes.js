import Home from './components/Home';  
import About from './components/About'; 

import Backoffice from './components/Backoffice/Index'; 
import BOForm from './components/Backoffice/Form'; 

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
            name: 'backoffice',
            path:'/backoffice', 
            component: Backoffice 
        }, 
        { 
            name: 'backoffice-form',
            path:'/backoffice/form', 
            component: BOForm 
        },
    ] 
}