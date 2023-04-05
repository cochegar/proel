require('./bootstrap')
import { createApp } from 'vue'
import slider from './components/slider'
const app = createApp({})
app.component('slider', slider)
app.mount('.slider')




