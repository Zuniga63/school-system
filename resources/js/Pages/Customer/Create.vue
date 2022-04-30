<template>
  <app-layout title="Nuevo Estudiante">
    <template #header>
      <div class="flex justify-between">
        <!-- TITLE OF HEADER -->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Registrar Estudiante
        </h2>

        <!-- BUTTON FOR ADD CUSTOMER -->
        <link-button :href="route('customer.index')"> Regresar </link-button>
      </div>
    </template>

    <!-- CONTENT -->
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
      <customer-form/>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import LinkButton from "@/Components/Form/LinkButton.vue";
import CustomerForm from "./Partial/CustomerFormBasic.vue";

export default {
  components: {
    AppLayout,
    LinkButton,
    CustomerForm,
  },
};
</script>