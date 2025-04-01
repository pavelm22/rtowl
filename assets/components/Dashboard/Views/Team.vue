<script setup>
import Table from "@/components/Dashboard/Core/Table.vue";
import Modal from "@/components/Dashboard/Core/Modal.vue"
import { ref, onMounted } from 'vue';
import axios from 'axios';

const data = ref([]);
const loading = ref(true);
const error = ref(null);

const fetchTeams = async () => {
  try {
    loading.value = true;
    const response = await axios.get('/api/teams');
    data.value = response.data;
    error.value = null;
  } catch (err) {
    error.value = err.response?.data?.message || err.message;
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