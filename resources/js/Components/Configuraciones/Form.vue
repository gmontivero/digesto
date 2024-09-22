<script setup>
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components//InputError.vue';
import PrimaryButton from '@/Components//PrimaryButton.vue';
import FormSection from '@/Components//FormSection.vue';

const props  = defineProps({
    form : {
        type : Object,
        required : true
    },
    updating : {
        type : Boolean,
        required : false,
        default : false
    }
})

const change = (e) => {
    props.form.imagen = e.target.files[0];
    alert(props.form.imagen.name)
}

defineEmits(['submit']);

</script>

<template>
 <FormSection @submitted="$emit('submit')">
    <template #title>
        {{ updating ? 'Actualizando Imagenes de Inicio' : 'Creando Imagen de Inicio' }}
    </template>

    <template #description>
           {{ updating ? 'Editando Imagen de Inicio' : 'Creando Imagen de Inicio' }}
    </template>

    <template #form>
        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="imagen" value="Imagen"  />
            <input id="imagen" @input="change" type="file"  class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.imagen" class="mt-2"/>
            <TextInput id="nombre" v-model="form.nombre" type="text" autocomplete="nombre"
            class="mt-1 block "/>
        </div>
    </template>
    <template #actions>
        <PrimaryButton>
            {{ updating ?  'Actualizar' : 'Guardar' }}
        </PrimaryButton>
    </template>
 </FormSection>
</template>
