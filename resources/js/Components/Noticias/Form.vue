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
    props.form.foto = e.target.files[0];
}

defineEmits(['submit']);

</script>

<template>
 <FormSection @submitted="$emit('submit')">
    <template #title>
        {{ updating ? 'Actualizando Noticia' : 'Noticia Nueva' }}
    </template>

    <template #description>
           {{ updating ? 'Editando Noticia' : 'Creando Noticia' }}
    </template>

    <template #form>
        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="fecha" value="Fecha"  />
            <TextInput id="fecha" v-model="form.fecha" type="date" autocomplete="fecha" class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.fecha" class="mt-2"/>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="titulo" value="Titulo"  />
            <TextInput id="titulo" v-model="form.titulo" type="text" autocomplete="titulo" class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.titulo" class="mt-2"/>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="encabezado" value="Encabezado"  />
            <textarea id="encabezado" v-model="form.encabezado" name="encabezado" rows="4" cols="50" class="mt-1 block w-full"></textarea>
            <InputError :message="$page.props.errors.encabezado" class="mt-2"/>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="cuerpo" value="Cuerpo"  />
            <textarea id="cuerpo" v-model="form.cuerpo" name="cuerpo" rows="4" cols="50" class="mt-1 block w-full"></textarea>
            <InputError :message="$page.props.errors.cuerpo" class="mt-2"/>
        </div>
        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="foto" value="Imagen"  />
            <input id="foto" @input="change" type="file"  class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.foto" class="mt-2"/>
        </div>

    </template>
    <template #actions>
        <PrimaryButton>
            {{ updating ?  'Actualizar' : 'Guardar' }}
        </PrimaryButton>
    </template>
 </FormSection>
</template>
