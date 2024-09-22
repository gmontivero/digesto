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
    cargos:{
        type: Object,
        required : true
    }
})

const change = (e) => {
    props.form.imagen = e.target.files[0];
}

defineEmits(['submit']);

</script>

<template>
 <FormSection @submitted="$emit('submit')">
    <template #title>
        {{ updating ? 'Actualizando Autoridad' : 'Autoridad Nueva' }}
    </template>

    <template #description>
           {{ updating ? 'Editando Autoridad' : 'Creando Autoridad' }}
    </template>

    <template #form>
        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="nombre" value="Nombre y Apellido"  />
            <TextInput id="nombre" v-model="form.nombre" type="text" autocomplete="nombre" class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.nombre" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="twitter" value="Twitter"  />
            <TextInput id="twitter" v-model="form.twitter" type="text" autocomplete="twitter" class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.twitter" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="instagram" value="Instagram"  />
            <TextInput id="instagram" v-model="form.instagram" type="text" autocomplete="instagram" class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.instagram" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="email" value="Email"  />
            <TextInput id="email" v-model="form.email" type="text" autocomplete="email" class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.email" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="facebook" value="Facebook"  />
            <TextInput id="facebook" v-model="form.facebook" type="text" autocomplete="facebook" class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.facebook" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="info" value="Información"  />
            <textarea id="info" v-model="form.info" name="info" rows="4" cols="50" class="mt-1 block w-full"></textarea>
            <InputError :message="$page.props.errors.info" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="cargo_id" value="Cargo"  />
            <select name="cargo_id" id="cargo_id" v-model="form.cargo_id">
                <option v-for="cargo in cargos" :value="cargo.id" >{{ cargo.nombre }}</option>
            </select>
            <InputError :message="$page.props.errors.cargo_id" class="mt-2"/>
        </div>


        <div class="col-span-6 sm:col-span-6">
            <InputLabel for="imagen" value="Foto"  />
            <input id="imagen" @input="change" type="file"  class="mt-1 block w-full" />
            <InputError :message="$page.props.errors.imagen" class="mt-2"/>
        </div>

    </template>
    <template #actions>
        <PrimaryButton>
            {{ updating ?  'Actualizar' : 'Guardar' }}
        </PrimaryButton>
    </template>
 </FormSection>
</template>
