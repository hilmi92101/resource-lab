import Home from './components/Home';  
import About from './components/About'; 
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
    ] 
}