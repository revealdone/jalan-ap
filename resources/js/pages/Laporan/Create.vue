<template>
  <form @submit.prevent="submit" class="max-w-xl mx-auto p-6">
    <h1 class="text-xl font-bold mb-4">Input Laporan</h1>

    <div class="mb-4">
      <label>Judul</label>
      <input v-model="form.judul" type="text" class="w-full border rounded p-2" />
    </div>

    <div class="mb-4">
      <label>Tanggal</label>
      <input v-model="form.tanggal" type="date" class="w-full border rounded p-2" />
    </div>

    <div class="mb-4">
      <label>Lokasi</label>
      <input v-model="form.lokasi" type="text" class="w-full border rounded p-2" />
    </div>

    <div class="mb-4">
      <label>Isi Laporan</label>
      <textarea v-model="form.isi_laporan" class="w-full border rounded p-2"></textarea>
    </div>

<div class="flex justify-between">
  <a href="/dashboard" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
  <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
</div>

  </form>
</template>

<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';

const form = useForm({
  judul: '',
  tanggal: '',
  lokasi: '',
  isi_laporan: '',
});

function submit() {
  form.post(route('laporan.store'));
}
</script>