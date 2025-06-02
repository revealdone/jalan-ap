<template>
  <nav class="bg-gray-800 text-white px-4 py-3">
    <div class="max-w-6xl mx-auto flex justify-between items-center">
      <h1 class="text-lg font-bold">Dashboard Admin</h1>
      <div class="space-x-3">
        <a href="/" class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded">Home</a>
        <form method="POST" action="/logout" class="inline">
          <input type="hidden" name="_token" :value="csrfToken">
          <button type="submit" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded">Logout</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="max-w-5xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-4">Dashboard Admin</h1>
    <div class="mb-4 text-right">
      <a href="/laporan/create" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Laporan</a>
    </div>
    <div v-for="item in laporan" :key="item.id" class="border p-4 rounded mb-4">
      <h2 class="font-semibold text-lg">{{ item.judul }}</h2>
      <p class="text-sm text-gray-500">{{ item.tanggal }} - {{ item.lokasi }}</p>
      <p class="mt-2">{{ item.isi_laporan }}</p>
    </div>
  </div>
</template>


<script setup lang="ts">
const csrfToken = (document.querySelector('meta[name="csrf-token"]') as HTMLMetaElement)?.content;

interface Laporan {
  id: number;
  judul: string;
  lokasi: string;
  tanggal: string;
  isi_laporan: string;
}

defineProps<{ laporan: Laporan[] }>();
</script>

