import 'vuetify/styles' //Estilos de vuetify
import { createVuetify } from 'vuetify'
//import { mdisvg } from 'vuetify/iconsets/mdi-svg'
import { mdiMenu } from '@mdi/js'
import { aliases, mdi } from 'vuetify/iconsets/mdi'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import '@mdi/font/css/materialdesignicons.css'

const vuetify = createVuetify({
    components,
    directives,
    //Indicamos el prefijo por defecto
    //Vueitfy soporta varias bibliotecas de iconos, pero acuparemos mdi
    icons: {
        defaultSet: 'mdi',
        aliases,
        mdiMenu,
        sets: {
          mdi,
        },
      },
    theme: {
        themes: {
            light: {
                dark: false,
            },
        },
    },
})

export default vuetify
