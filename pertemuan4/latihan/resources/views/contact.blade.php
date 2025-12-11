<x-layout>
    <x-slot:title>
        Contact
    </x-slot:title>

    <div class="container mx-auto px-4 py-12">
        <div class="mb-12 text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Contact Us</h1>
            <p class="text-gray-600 text-lg">Hubungi kami untuk pertanyaan atau saran</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-4xl mx-auto">
            <!-- Contact Form -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>
                <form class="space-y-4">
                    <div>
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600"
                            placeholder="Masukkan nama Anda"
                        >
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600"
                            placeholder="Masukkan email Anda"
                        >
                    </div>

                    <div>
                        <label for="subject" class="block text-gray-700 font-semibold mb-2">Subjek</label>
                        <input 
                            type="text" 
                            id="subject" 
                            name="subject"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600"
                            placeholder="Masukkan subjek"
                        >
                    </div>

                    <div>
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
                        <textarea 
                            id="message" 
                            name="message"
                            rows="5"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600"
                            placeholder="Masukkan pesan Anda"
                        ></textarea>
                    </div>

                    <button 
                        type="submit"
                        class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition duration-200"
                    >
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h2>
                
                <div class="space-y-8">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Email</h3>
                            <p class="text-gray-600">jenasaldera1425@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Telepon</h3>
                            <p class="text-gray-600">+62 812 345 678 90</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Alamat</h3>
                            <p class="text-gray-600">jl jalan no 420<br>Bandung, Indonesia</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Jam Kerja</h3>
                            <p class="text-gray-600">Senin - Jumat: 09:00 - 17:00<br>Sabtu: 10:00 - 14:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
