<template>
  <div class="p-6 bg-white rounded-lg shadow-md">
    <div class="mb-6 flex gap-3 flex-wrap items-center">
      <input
          v-model="searchQuery"
          type="text"
          placeholder="Globale Suche..."
          class="p-2.5 border border-gray-300 rounded-lg shadow-sm w-72 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
      />
      <button
          @click="resetFilters"
          class="p-2.5 bg-blue-50 text-blue-700 rounded-lg hover:bg-blue-100 font-medium transition-colors duration-200 flex items-center shadow-sm border border-blue-200"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
        </svg>
        Filter zurücksetzen
      </button>
    </div>

    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-sm">
      <table class="w-full border-collapse text-sm">
        <thead>
        <tr class="bg-gray-50">
          <th v-for="column in columns" :key="column.key" class="p-3 border-b border-gray-200 font-medium text-gray-700">
            <div class="flex flex-col">
              <div
                  @click="sortBy(column.key)"
                  class="cursor-pointer flex items-center justify-between group"
              >
                <span class="group-hover:text-blue-600 transition-colors">{{ column.label }}</span>
                <span v-if="sortKey === column.key" class="ml-1 text-blue-600">
                  {{ sortOrder === 'asc' ? '▲' : '▼' }}
                </span>
                <span v-else class="ml-1 text-gray-300 opacity-0 group-hover:opacity-100">▲</span>
              </div>

              <div class="mt-2">
                <select
                    v-model="columnFilters[column.key]"
                    class="w-full p-1.5 text-xs border border-gray-300 rounded bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    @change="applyColumnFilter"
                >
                  <option value="">Alle</option>
                  <option
                      v-for="option in getUniqueValuesForColumn(column.key)"
                      :key="option"
                      :value="option"
                  >
                    {{ option }}
                  </option>
                </select>
              </div>
            </div>
          </th>
        </tr>
        </thead>

        <tbody class="divide-y divide-gray-200 bg-white">
        <tr
            v-for="row in filteredData"
            :key="row.id"
            class="hover:bg-blue-50 transition-colors duration-150"
        >
          <td
              v-for="column in columns"
              :key="column.key"
              class="p-3.5 border-t border-gray-100"
          >
            {{ row[column.key] }}
          </td>
        </tr>

        <tr v-if="filteredData.length === 0">
          <td :colspan="columns.length" class="p-8 text-center text-gray-500">
            <div class="flex flex-col items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="font-medium">Keine Daten gefunden</span>
            </div>
          </td>
        </tr>
        </tbody>
      </table>
    </div>

    <div class="mt-4 text-sm text-gray-600 flex justify-between items-center">
      <span class="font-medium">{{ filteredData.length }} von {{ props.data.length }} Einträgen angezeigt</span>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, reactive, onMounted } from 'vue';

const props = defineProps({
  data: {
    type: Array,
    required: true
  },
  columns: {
    type: Array,
    required: true
  }
});

const searchQuery = ref('');
const sortKey = ref('');
const sortOrder = ref('asc');
const columnFilters = reactive({});

onMounted(() => {
  props.columns.forEach(column => {
    columnFilters[column.key] = '';
  });
});

const sortBy = (key) => {
  if (sortKey.value === key) {
    sortOrder.value = sortOrder.value === 'asc' ? 'desc' : 'asc';
  } else {
    sortKey.value = key;
    sortOrder.value = 'asc';
  }
};

const getUniqueValuesForColumn = (columnKey) => {
  const uniqueValues = new Set();

  props.data.forEach(row => {
    if (row[columnKey] !== undefined && row[columnKey] !== null) {
      uniqueValues.add(row[columnKey]);
    }
  });

  return Array.from(uniqueValues).sort();
};

const applyColumnFilter = () => {
  // Diese Funktion kann leer bleiben, da die Reaktivität bereits durch die
  // v-model-Bindung an columnFilters gewährleistet ist
};

const resetFilters = () => {
  searchQuery.value = '';
  props.columns.forEach(column => {
    columnFilters[column.key] = '';
  });
};

const filteredData = computed(() => {
  let result = [...props.data];

  Object.keys(columnFilters).forEach(key => {
    if (columnFilters[key]) {
      result = result.filter(row =>
          String(row[key]) === String(columnFilters[key])
      );
    }
  });

  if (searchQuery.value) {
    result = result.filter(row =>
        Object.values(row).some(value =>
            String(value).toLowerCase().includes(searchQuery.value.toLowerCase())
        )
    );
  }

  if (sortKey.value) {
    result.sort((a, b) => {
      const valueA = a[sortKey.value];
      const valueB = b[sortKey.value];

      if (!isNaN(valueA) && !isNaN(valueB)) {
        return sortOrder.value === 'asc'
            ? Number(valueA) - Number(valueB)
            : Number(valueB) - Number(valueA);
      }

      let result = String(valueA).localeCompare(String(valueB));
      return sortOrder.value === 'asc' ? result : -result;
    });
  }

  return result;
});
</script>