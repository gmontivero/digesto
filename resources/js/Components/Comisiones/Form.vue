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

defineEmits(['submit']);

</script>

<template>
 <FormSection @submitted="$emit('submit')">
    <template #title>
        {{ updating ? 'Actualizando Comisión' : 'Creando Comisión' }}
    </template>

    <template #description>
           {{ updating ? 'Editando Comisión' : 'Creando Comisión' }}
    </template>

    <template #form>
        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="nombre" value="Nombre"  />
            <TextInput id="nombre" v-model="form.nombre" type="text" autocomplete="nombre" class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.nombre" class="mt-2"/>
        </div>
    </template>
    <template #actions>
        <PrimaryButton>
            {{ updating ?  'Actualizar' : 'Guardar' }}
        </PrimaryButton>
    </template>
 </FormSection>
</template>
