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
    },
    tipos:{
        type: Object,
        required : true
    }
})

const change = (e) => {
    props.form.pdf = e.target.files[0];
}

defineEmits(['submit']);

</script>

<template>
 <FormSection @submitted="$emit('submit')">
    <template #title>
        {{ updating ? 'Actualizando Digesto' : 'Digesto Nueva' }}
    </template>

    <template #description>
           {{ updating ? 'Editando Digesto' : 'Creando Digesto' }}
    </template>

    <template #form>
        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="numero" value="numero"  />
            <TextInput id="numero" v-model="form.numero" type="text" autocomplete="numero" class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.numero" class="mt-2"/>
        </div>
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
            <InputLabel for="resumen" value="Resumen"  />
            <textarea id="resumen" v-model="form.resumen" name="resumen" rows="4" cols="50" class="mt-1 block w-full"></textarea>
            <InputError :message="$page.props.errors.resumen" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="tipo_id" value="Tipo"  />
            <select name="tipo_id" id="tipo_id" v-model="form.tipo_id">
                <option v-for="tipo in tipos" :value="tipo.id" >{{ tipo.name }}</option>
            </select>
            <InputError :message="$page.props.errors.tipo_id" class="mt-2"/>
        </div>


        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="pdf" value="PDF"  />
            <input id="pdf" @input="change" type="file"  class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.pdf" class="mt-2"/>
        </div>

    </template>
    <template #actions>
        <PrimaryButton>
            {{ updating ?  'Actualizar' : 'Guardar' }}
        </PrimaryButton>
    </template>
 </FormSection>
</template>
