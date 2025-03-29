import { createApp } from 'vue'
import './app.css'
import App from './App.vue'
import 'flowbite'
import router from './routes/router.js'

const app = createApp(App)
app.use(router)
app.mount('#app')