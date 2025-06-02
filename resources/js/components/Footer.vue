<template>
  <footer class="bg-gray-900 text-gray-300 mt-10">
    <!-- Logo dan Sosial Media -->
    <div class="py-10 text-center">
      <img
        class="mx-auto mb-4"
        src="/jaksel.png"
        alt="Logo Jakarta Selatan"
        width="300"
      />
      <div class="space-x-4 mt-4">
        <a href="https://facebook.com/PemkotJakartaSelatan" target="_blank" aria-label="Facebook">
          <i class="fab fa-facebook-f text-white hover:text-blue-500"></i>
        </a>
        <a href="https://twitter.com/kotajaksel" target="_blank" aria-label="Twitter">
          <img
            class="inline-block align-middle"
            src="https://selatan.jakarta.go.id/modul/kecamatan/pesanggrahan/public/assets/images/icons/twitter-x-footer.png"
            width="14"
            height="14"
            alt="Twitter X"
          />
        </a>
        <a href="https://www.youtube.com/KominfotikJaksel" target="_blank" aria-label="YouTube">
          <i class="fab fa-youtube text-white hover:text-red-600"></i>
        </a>
        <a href="https://www.instagram.com/kotajakartaselatan/" target="_blank" aria-label="Instagram">
          <i class="fab fa-instagram text-white hover:text-pink-500"></i>
        </a>
      </div>
    </div>

    <!-- Konten Informasi -->
    <div class="container mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div>
        <h4 class="text-lg font-bold mb-2">Pelayanan Informasi</h4>
        <p class="text-sm text-gray-400">
          Pelayanan sistem informasi Smart Goverment menjadi kebutuhan pemerintah untuk memberikan informasi cepat,
          efektif dan efisien.
        </p>
      </div>

      <div>
        <h4 class="text-lg font-bold mb-2">Alamat</h4>
        <a
          href="https://goo.gl/maps/1nXvQyajCZfXauPe7"
          target="_blank"
          class="text-sm text-gray-400 hover:underline"
        >
          Jl. Prapanca Raya No. 9, Jakarta Selatan, Indonesia 12170
        </a>
      </div>

      <div>
        <h4 class="text-lg font-bold mb-2">Kontak</h4>
        <ul class="text-sm text-gray-400 space-y-1">
          <li>(021) 727-866-29</li>
          <li>
            <a href="mailto:kominfotikjs@jakarta.go.id" class="hover:underline">
              kominfotikjs@jakarta.go.id
            </a>
          </li>
        </ul>
      </div>

      <div>
        <h4 class="text-lg font-bold mb-2">Jam Operasional</h4>
        <ul class="text-sm text-gray-400 space-y-1">
          <li>Senin - Jumat (07.30 - 16.00)</li>
          <li>Sabtu - Minggu (Tutup)</li>
        </ul>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="bg-gray-800 py-4 text-center text-sm text-gray-400">
      Hak Cipta © 2025
      <span class="text-white font-semibold">Pemerintah Kota Administrasi Jakarta Selatan</span>
    </div>
  </footer>
</template>

<script setup lang="ts">
// Tidak diperlukan script khusus di sini
</script>

<style scoped>
/* Pastikan fontawesome sudah terload, bisa dari CDN atau plugin */
</style>
