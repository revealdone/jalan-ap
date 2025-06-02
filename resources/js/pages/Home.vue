<template>
  <!-- Sticky Navbar -->
<nav class="fixed top-0 left-0 w-full z-50 bg-gray-800 text-white px-4 py-3 shadow-md">
  <div class="max-w-6xl mx-auto flex items-center justify-between">
    <!-- Logo -->
    <div class="flex items-center">
      <img src="/jaksel.png" alt="Logo Jaksel" class="h-15 w-auto" />
    </div>

    <!-- Judul Tengah -->
    <div class="flex-1 text-center">
      <h1 class="text-lg font-bold">Laporan Jalan</h1>
    </div>

    <!-- Login dan Register -->
    <div class="flex gap-2">
      <a href="/login" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">Login</a>
      <a href="/register" class="bg-gray-600 hover:bg-gray-700 px-4 py-2 rounded">Register</a>
    </div>
  </div>
</nav>


  <!-- Konten dengan padding top agar tidak tertutup navbar -->
  <div class="max-w-4xl mx-auto pt-24 pb-10">
    <h1 class="text-2xl font-bold mb-4">
      Daftar Laporan Pemeliharaan Dan Penataan Jalan Bulan Maret 2025 KECAMATAN PESANGGRAHAN
    </h1>
    <div v-for="item in laporan" :key="item.id" class="border p-4 rounded mb-4">
      <h2 class="font-semibold text-lg">{{ item.judul }}</h2>
      <p class="text-sm text-gray-500">{{ item.tanggal }} - {{ item.lokasi }}</p>
      <p class="mt-2">{{ item.isi_laporan }}</p>
    </div>
  </div>

  <Footer />
</template>

<script setup lang="ts">
import Footer from '@/components/Footer.vue';

interface Laporan {
  id: number;
  judul: string;
  lokasi: string;
  tanggal: string;
  isi_laporan: string;
}

defineProps<{ laporan: Laporan[] }>();
</script>
