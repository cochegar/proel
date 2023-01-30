require('./bootstrap')

import { createApp } from 'vue'
import Slider from './components/Slider'

const app = createApp({})

app.component('slider', Slider)

app.mount('#slider')

