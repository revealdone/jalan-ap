<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import { type BreadcrumbItem } from '@/types';

interface Laporan {
  id: number;
  judul: string;
  lokasi: string;
  tanggal: string;
  isi_laporan: string;
}

defineProps<{ laporan: Laporan[] }>();

const csrfToken = (document.querySelector('meta[name="csrf-token"]') as HTMLMetaElement)?.content;

const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Welcome Admin KECAMATAN PESANGGRAHAN',
    href: '/dashboard',
  },
];

function handleDelete(id: number) {
  if (confirm('Yakin ingin menghapus laporan ini?')) {
    router.delete(`/laporan/${id}`);
  }
}

function logout() {
  if (confirm('Yakin ingin logout?')) {
    router.post('/logout');
  }
}

</script>

<template>
  <Head title="Dashboard" />

  <AppLayout :breadcrumbs="breadcrumbs">
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white px-4 py-3 rounded-xl mb-4">
      <div class="flex justify-between items-center">
        <h1 class="text-lg font-bold">Dashboard Admin</h1>
        <div class="space-x-3">
          <a href="/" class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded">Home</a>
          <!-- <form method="POST" action="/logout" class="inline"> -->
            <input type="hidden" name="_token" :value="csrfToken" />
            <button
  @click="logout"
  class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded"
>
  Logout
</button>
          <!-- </form> -->
        </div>
      </div>
    </nav>

    <!-- Konten utama -->
    <div class="flex h-full flex-1 flex-col gap-4 rounded-xl">
      <div class="mb-4 text-right">
        <a href="/laporan/create" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Laporan</a>
      </div>

      <div class="grid auto-rows-min gap-4 md:grid-cols-3">
        <div
          v-for="item in laporan"
          :key="item.id"
          class="border border-gray-300 dark:border-gray-700 rounded-xl p-4"
        >
          <h2 class="font-semibold text-lg">{{ item.judul }}</h2>
          <p class="text-sm text-gray-500">{{ item.tanggal }} - {{ item.lokasi }}</p>
          <p class="mt-2">{{ item.isi_laporan }}</p>

          <div class="mt-4 flex gap-2">
            <a
              :href="`/laporan/${item.id}/edit`"
              class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded"
            >
              Edit
            </a>

            <form
              :action="`/laporan/${item.id}`"
              method="POST"
              @submit.prevent="handleDelete(item.id)"
            >
              <input type="hidden" name="_method" value="DELETE" />
              <input type="hidden" name="_token" :value="csrfToken" />
              <button
                type="submit"
                class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded"
              >
                Hapus
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- Placeholder bawah jika perlu -->
      <div
        class="relative min-h-[200px] flex-1 rounded-xl border border-sidebar-border/70 dark:border-sidebar-border md:min-h-min mt-6"
      >
        <PlaceholderPattern />
      </div>
    </div>
  </AppLayout>
</template>
