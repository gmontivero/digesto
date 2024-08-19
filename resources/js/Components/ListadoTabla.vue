<script>
  const digestos = [
    {
      numero: '921/2024',
      titulo: 'Decreto Nº 921',
      resumen: 'Declárase "CIUDADANA DESTACADA, DISTINCIÓN CIUDAD DE LOS AZAHARES" a la Sra. Emma Olaya de la Fuente de Sisterna, en reconocimiento a su amor por la vida, por demostrar a la sociedad que siempre se puede más',
      fecha: '01/07/2024',
      pdf: 'pdf/dispensa1.pdf',
    },
    {
        numero: '920/2024',
      titulo: 'Decreto Nº 920',
      resumen: 'Declárase "INSTITUCION DESTACADA DE LA CIUDAD DE LA RIOJA, DISTINCIÓN CIUDAD DE LOS AZAHARES" a la FUNDACION PADRE ENRI PRAOLINI en reconocimiento a su destacada tarea social y comunitaria desarrollada en zonas de alta vulnerabilidad social.',
      fecha: '01/06/2024',
      pdf: 'pdf/dispensa6.pdf',
    }
  ]

  const FakeAPI = {
    async fetch ({ page, itemsPerPage, sortBy, search }) {
      return new Promise(resolve => {
        setTimeout(() => {
          const start = (page - 1) * itemsPerPage
          const end = start + itemsPerPage
          const items = digestos.slice().filter(item => {
            if (search.resumen && !item.resumen.toLowerCase().includes(search.resumen.toLowerCase())) {
              return false
            }
            return true
          })

          if (sortBy.length) {
            const sortKey = sortBy[0].key
            const sortOrder = sortBy[0].order
            items.sort((a, b) => {
              const aValue = a[sortKey]
              const bValue = b[sortKey]
              return sortOrder === 'desc' ? bValue - aValue : aValue - bValue
            })
          }

          const paginated = items.slice(start, end)

          resolve({ items: paginated, total: items.length })
        }, 500)
      })
    },
  }

  export default {
    data: () => ({
      itemsPerPage: 5,
      headers: [
        { title: 'Número',align: 'start',sortable: false,key: 'numero' },
        { title: 'Titulo', key: 'titulo', align: 'end' },
        { title: 'Resumen', key: 'resumen', align: 'end' },
        { title: 'Fecha', key: 'fecha', align: 'end' },
        { title: 'PDF', key: 'pdf', align: 'end' },
      ],
      serverItems: [],
      loading: true,
      totalItems: 0,
      resumen: '',
      search: '',
    }),
    watch: {
      resumen () {
        this.search = String(Date.now())
      },
    },
    methods: {
      loadItems ({ page, itemsPerPage, sortBy }) {
        this.loading = true
        FakeAPI.fetch({ page, itemsPerPage, sortBy, search: { resumen: this.resumen, } }).then(({ items, total }) => {
          this.serverItems = items
          this.totalItems = total
          this.loading = false
        })
      },
    },
  }
</script>

<template>
    <v-data-table-server
      v-model:items-per-page="itemsPerPage"
      :items="serverItems"
      :items-length="totalItems"
      :loading="loading"
      :search="search"
      item-value="resumen"
      @update:options="loadItems">
      <template v-slot:headers>
            <tr>
                <th v-for="h in headers" class="v-data-table__td v-data-table-column--align-start v-data-table__th bg-sky-300">
                <span>{{h.title}}</span>
                </th>
            </tr>
      </template>
      <template v-slot:item.pdf="{ item }">
          <a :href="item.pdf" target="_blank">
            PDF
          </a>
        </template>
      <template v-slot:tfoot>
        <tr>
          <td>
            <v-text-field v-model="resumen" class="ma-2" density="compact" placeholder="Escriba para buscar..." hide-details></v-text-field>
          </td>
        </tr>
      </template>
    </v-data-table-server>
</template>

