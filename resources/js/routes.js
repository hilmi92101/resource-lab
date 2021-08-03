import Home from './components/Home';  
import About from './components/About'; 

import Backoffice from './components/Backoffice/Index'; 
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
    ] 
}