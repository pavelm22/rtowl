<script setup>

</script>

<template>
  <div class="p-4">
    <h2 class="text-3xl font-bold text-[var(--owlrt-black)]">Welcome to the Dashboard</h2>
    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <div class="bg-[var(--owlrt-dusty-pink)] p-4 rounded-lg shadow">
        <h3 class="text-xl font-semibold text-[var(--owlrt-black)]">Traffic Statistics</h3>
        <div class="mt-2">
          <div class="h-48 bg-[var(--owlrt-white)] flex items-center justify-center">
            <p class="text-[var(--owlrt-gray)]">Chart Placeholder</p>
          </div>
        </div>
      </div>
      <div class="bg-[var(--owlrt-white)] p-4 rounded-lg shadow">
        <h3 class="text-xl font-semibold text-[var(--owlrt-black)]">Total Teams</h3>
        <p class="mt-2 text-3xl font-bold text-[var(--owlrt-red)]">10</p>
      </div>
      <div class="bg-[var(--owlrt-white)] p-4 rounded-lg shadow">
        <h3 class="text-xl font-semibold text-[var(--owlrt-black)]">Total Members</h3>
        <p class="mt-2 text-3xl font-bold text-[var(--owlrt-red)]">50</p>
      </div>
    </div>
    <div class="mt-8">
      <h3 class="text-2xl font-semibold text-[var(--owlrt-black)]">Recent Activities</h3>
      <ul class="mt-2 space-y-2">
        <li class="bg-[var(--owlrt-white)] p-2 rounded shadow">Added new team member: John Doe</li>
        <li class="bg-[var(--owlrt-white)] p-2 rounded shadow">Updated sponsor information</li>
      </ul>
    </div>
  </div>

  <div class="p-4 hidden" id="team">
    <div class="flex justify-between items-center">
      <h2 class="text-2xl font-bold text-[var(--owlrt-black)]">Teams</h2>
      <button class="bg-[var(--owlrt-red)] text-[var(--owlrt-white)] px-4 py-2 rounded hover:opacity-80">Add New Team</button>
    </div>
    <div class="mt-4">
      <table class="min-w-full bg-[var(--owlrt-white)]">
        <thead>
        <tr>
          <th class="px-6 py-3 border-b-2 border-[var(--owlrt-gray)] text-left text-sm font-semibold text-[var(--owlrt-gray)]">Name</th>
          <th class="px-6 py-3 border-b-2 border-[var(--owlrt-gray)] text-left text-sm font-semibold text-[var(--owlrt-gray)]">Description</th>
          <th class="px-6 py-3 border-b-2 border-[var(--owlrt-gray)] text-left text-sm font-semibold text-[var(--owlrt-gray)]">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="px-6 py-4 border-b border-[var(--owlrt-gray)]">Team A</td>
          <td class="px-6 py-4 border-b border-[var(--owlrt-gray)]">Description of Team A</td>
          <td class="px-6 py-4 border-b border-[var(--owlrt-gray)]">
            <button class="text-[var(--owlrt-red)] hover:underline">Edit</button>
            <button class="text-[var(--owlrt-red)] ml-2 hover:underline">Delete</button>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<style scoped>

</style>