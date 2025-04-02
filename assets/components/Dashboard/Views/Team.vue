<script setup>
import Table from "@/components/Dashboard/Core/Table.vue";
import Modal from "@/components/Dashboard/Core/Modal.vue"
import { ref, onMounted } from 'vue';

const data = ref([]);
const loading = ref(true);
const error = ref(null);

const fetchTeams = async () => {
  try {
    loading.value = true;
    const response = await fetch('/api/teams');

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    data.value = await response.json();
    error.value = null;
  } catch (err) {
    error.value = err.message;
    console.error('Fehler beim Abrufen der Teams:', err);
  } finally {
    loading.value = false;
  }
};

onMounted(() => {
  fetchTeams();
});
</script>

<template>
  <Table :columns="data?.columns" :data="data?.data"></Table>
  <Modal />
</template>

<style scoped>

</style>