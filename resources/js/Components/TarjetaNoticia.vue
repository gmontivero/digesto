<script setup>
defineProps({
    src: {
        type: String,
    }
});
</script>
<template>
    <v-card class="mx-auto">
      <v-img  class="" src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg" cover></v-img>

      <v-card-title>
        <slot name="title" />
      </v-card-title>

      <v-card-subtitle class="flex-wrap">
        <slot name="subtitle" />
      </v-card-subtitle>

      <v-card-actions>
        <v-btn color="orange-lighten-2" text="Leer"></v-btn>
        <v-spacer></v-spacer>
      </v-card-actions>

    </v-card>
  </template>
