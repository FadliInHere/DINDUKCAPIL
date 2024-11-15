<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinas Kependudukan dan Pencatatan Sipil</title>
    <link rel="icon" href="/images/logobms.png" type="png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>

    <style>
        /* Dark Mode Styles */
        body.dark {
            background-color: #1a202c; /* Dark background */
            color: white; /* Light text color */
        }

        .dark .bg-gray-100 {
            background-color: #2d3748; /* Darker background for sections */
        }

        .dark .bg-blue-500 {
            background-color: #3182ce; /* Dark blue for Informasi Nav */
        }

        .dark .text-gray-600 {
            color: #cbd5e0; /* Light gray text */
        }

        .dark .bg-white {
            background-color: #2d3748; /* Darker white for white backgrounds */
        }

        .dark .text-blue-600 {
            color: #63b3ed; /* Lighter blue for text */
        }

        .dark .text-blue-500 {
            color: #63b3ed; /* Lighter blue for links */
        }

        .dark .bg-gray-800 {
            background-color: #2d3748; /* Dark footer background */
        }
    </style>
<!-- Navigation Bar -->
<nav class="bg-transparent p-6 shadow-md fixed top-0 w-full z-10">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-xl font-semibold text-black flex items-center">
            <img src="/images/logobms.png" alt="Logo" class="h-8 mr-2">DINDUKCAPIL
        </a>
        <div class="hidden md:flex space-x-4">
            <strong>
            <a href="{{ route('admin.login') }}" class="text-black hover:text-white">Login | </a>
            <a href="{{ route('register') }}" class="text-black hover:text-white">Register | </a>
            <a href="#faq" class="text-black hover:text-white">FAQ</a>
            </strong>
        </div>
        <div class="md:hidden flex items-center" id="burger-menu">
            <button id="burger-icon" class="text-white hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
    <div class="md:hidden hidden flex-col space-y-4 bg-white p-4 absolute top-16 right-0 w-48 shadow-lg rounded-lg" id="mobile-menu">
        <a href="{{ route('admin.login') }}" class="text-gray-600 hover:text-blue-600">Login</a>
        <a href="{{ route('register') }}" class="text-gray-600 hover:text-blue-600">Register</a>
        <a href="#faq" class="text-gray-600 hover:text-blue-600">FAQ</a>
    </div>
</nav>


    <!-- Informasi Nav -->
    <section id="home" class="bg-blue-500 text-white text-center py-20">
        <div class="container mx-auto">
            <h1 class="text-5xl font-bold">Selamat Datang di Portal Informasi Instansi Pemerintah</h1>
            <p class="mt-4 text-lg">Dapatkan informasi terkini dan pemberitahuan penting</p>
        </div>
    </section>

    <!-- Berita -->
    <section id="about" class="py-20 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-semibold">Berita Terkini</h2>
        <p class="text-gray-600 mt-4">Dapatkan Berita Terbaru Di Website Resmi kami</p>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Berita 1 -->
            <div class="bg-white p-6 shadow-lg rounded-lg flex flex-col items-center">
                <div class="w-full h-64 bg-gray-300 rounded-lg mb-4">
                    <img src="https://img.antaranews.com/cache/1200x800/2024/03/14/94.jpg.webp" alt="BMKG News Image" class="w-full h-full object-cover object-top rounded-lg">
                </div>
                <h3 class="text-2xl font-semibold text-blue-600">BMKG: Waspadai potensi cuaca ekstrem di Jateng pada 14-16 November</h3>
                <p class=" text-sm mt-4 text-gray-600">Kamis, 14 November 2024</p>
                <p class="mt-4 text-gray-600">Cilacap (ANTARA) - Badan Meteorologi Klimatologi dan Geofisika (BMKG) mengimbau masyarakat untuk mewaspadai cuaca ekstrem yang berpotensi terjadi di sejumlah wilayah Jawa Tengah (Jateng) pada 14-16 November 2024....</p>
                <a href="https://jateng.antaranews.com/berita/558778/bmkg-waspadai-potensi-cuaca-ekstrem-di-jateng-pada-14-16-november" target="_blank" class="mt-8 inline-block bg-white text-blue-500 px-6 py-3 rounded-full font-semibold hover:bg-blue-600 hover:text-white">Baca Selengkapnya...</a>
            </div>
            <!-- Berita 2 -->
            <div class="bg-white p-6 shadow-lg rounded-lg flex flex-col items-center">
                <div class="w-full h-64 bg-gray-300 rounded-lg mb-4">
                    <img src="https://joglojateng.com/wp-content/uploads/2024/11/2024-11-14-08_31_59-Jateng-layoutjoglojateng@gmail.com-Gmail-%E2%80%94-Mozilla-Firefox.jpg" alt="Feature 2 Image" class="w-full h-full object-cover object-top rounded-lg">
                </div>
                <h3 class="text-2xl font-semibold text-blue-600">Bappeda Jateng Gelar Evaluasi & Penyerahan Penghargaan TPPS Terbaik</h3>
                <p class=" text-sm mt-4 text-gray-600">Kamis, 14 November 2024</p>
                <p class="mt-4 text-gray-600">SEMARANG, Joglo Jateng – Badan Perencanaan Pembangunan Daerah (Bappeda) Jateng menyelenggarakan Evaluasi Percepatan Penurunan Stunting di Ruang Rapat Bappeda Jateng, Rabu (13/11). Dalam kegiatan tersebut juga dilakukan penyerahan penghargaan kepada pemerintah daerah berperingkat terbaik dalam penilaian kinerja aksi konvergensi percepatan penurunan stunting Tahun 2024.</p>
                <a href="https://joglojateng.com/2024/11/14/bappeda-jateng-gelar-evaluasi-penyerahan-penghargaan-tpps-terbaik/" target="_blank" class="mt-8 inline-block bg-white text-blue-500 px-6 py-3 rounded-full font-semibold hover:bg-blue-600 hover:text-white">Baca Selengkapnya...</a>
            </div>
            <!-- Berita 3 -->
            <div class="bg-white p-6 shadow-lg rounded-lg flex flex-col items-center">
                <div class="w-full h-64 bg-gray-300 rounded-lg mb-4">
                    <img src="https://asset-2.tstatic.net/banyumas/foto/bank/images/Sosialisasi-pengentasan-anak-tidak-bersekolah-di-banyumas.jpg" alt="Feature 3 Image" class="w-full h-full object-cover object-top rounded-lg">
                </div>
                <h3 class="text-2xl font-semibold text-blue-600">Duh, 15.229 Anak di Banyumas Tidak Seolah. Ini yang Dilakukan Pemkab</h3>
                <p class=" text-sm mt-4 text-gray-600">Kamis, 14 November 2024</p>
                <p class="mt-4 text-gray-600">anak tidak sekolah (ATS) di Kabupaten Banyumas mencapai 15.229 anak, yang tersebar di 27 kecamatan.Sekretaris Dinas Pendidikan Banyumas Sarno mengatakan, angka tersebut terbilang tinggi sehingga perlu perhatian dan dukungan berbagai pihak.Hal itu disampaikannya saat sosialisasi Pengananan Anak Tidak Sekolah (PATS) di Ruang Hastinapura Java Heritage Purwokerto, Rabu (13/11/2024).</p>
                <a href="https://banyumas.tribunnews.com/2024/11/14/duh-15229-anak-di-banyumas-tidak-seolah-ini-yang-dilakukan-pemkab" target="_blank" class="mt-8 inline-block bg-white text-blue-500 px-6 py-3 rounded-full font-semibold hover:bg-blue-600 hover:text-white">Baca Selengkapnya...</a>
            </div>
            <!-- Berita 4 -->
            <div class="bg-white p-6 shadow-lg rounded-lg flex flex-col items-center">
                <div class="w-full h-64 bg-gray-300 rounded-lg mb-4">
                    <img src="https://cloud.jpnn.com/photo/arsip/normal/2024/11/14/arsip-foto-warga-desa-notog-kecamatan-patikraja-kabupaten-8q-der1.jpg" alt="Feature 4 Image" class="w-full h-full object-cover object-top rounded-lg">
                </div>
                <h3 class="text-2xl font-semibold text-blue-600">Sejumlah Desa di Banyumas Masih Terdampak Kekeringan</h3>
                <p class=" text-sm mt-4 text-gray-600">Kamis, 14 November 2024</p>
                <p class="mt-4 text-gray-600">Kepala Pelaksana Badan Penanggulangan Bencana Daerah (BPBD) Banyumas Budi Nugroho mengatakan sejumlah desa di kabupaten itu masih terdampak kekeringan meskipun secara umum wilayah tersebut telah memasuki musim hujan.</p>
                <a href="https://www.jpnn.com/news/sejumlah-desa-di-banyumas-masih-terdampak-kekeringan" target="_blank" class="mt-8 inline-block bg-white text-blue-500 px-6 py-3 rounded-full font-semibold hover:bg-blue-600 hover:text-white">Baca Selengkapnya...</a>
            </div>
            <!-- Berita 5 -->
            <div class="bg-white p-6 shadow-lg rounded-lg flex flex-col items-center">
                <div class="w-full h-64 bg-gray-300 rounded-lg mb-4">
                    <img src="https://imgcdn.espos.id/@espos/images/2023/10/pj-bupati-banyumas-1.jpg?quality=60" alt="Feature 5 Image" class="w-full h-full object-cover object-top rounded-lg">
                </div>
                <h3 class="text-2xl font-semibold text-blue-600">Jembatan Kaca Limpakuwus Memakan Korban, Begini Reaksi Pj Bupati Banyumas</h3>
                <p class=" text-sm mt-4 text-gray-600">Rabu, 25 Oktober 2023</p>
                <p class="mt-4 text-gray-600">Penjabat (Pj) Bupati Banyumas, Hanung Cahyo Saputro, mengaku prihatin dengan insiden jatuhnya dua wisatawan asal Cilacap dari wahana jembatan kaca di Hutan Pinus Limpakuwus, Kecamatan Sumbang, Kab..</p>
                <a href="https://regional.espos.id/jembatan-kaca-limpakuwus-memakan-korban-begini-reaksi-pj-bupati-banyumas-1777126" target="_blank" class="mt-8 inline-block bg-white text-blue-500 px-6 py-3 rounded-full font-semibold hover:bg-blue-600 hover:text-white">Baca Selengkapnya...</a>
            </div>
            <!-- Berita 6 -->
            <div class="bg-white p-6 shadow-lg rounded-lg flex flex-col items-center">
                <div class="w-full h-64 bg-gray-300 rounded-lg mb-4">
                    <img src="https://cdn.rri.co.id/berita/Purwokerto/o/1731313317644-mapsi_banyumas/z23l8jpwzw2wxou.jpeg" alt="Feature 6 Image" class="w-full h-full object-cover object-top rounded-lg">
                </div>
                <h3 class="text-2xl font-semibold text-blue-600">Banyumas Borong 6 Penghargaan Lomba MAPSI SD Tingkat Provinsi</h3>
                <p class=" text-sm mt-4 text-gray-600">Senin, 11 November 2024</p>
                <p class="mt-4 text-gray-600">Penjabat (Pj) Bupati Banyumas, Hanung Cahyo Saputro, mengaku prihatin dengan insiden jatuhnya dua wisatawan asal Cilacap dari wahana jembatan kaca di Hutan Pinus Limpakuwus, Kecamatan Sumbang, Kab..</p>
                <a href="https://rri.co.id/daerah/1111876/banyumas-borong-6-penghargaan-lomba-mapsi-sd-tingkat-provinsi" target="_blank" class="mt-8 inline-block bg-white text-blue-500 px-6 py-3 rounded-full font-semibold hover:bg-blue-600 hover:text-white">Baca Selengkapnya...</a>
            </div>
        </div>
    </div>
</section>


    <!-- Testimonials Section -->
    <!-- <section class="bg-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-semibold">What Our Clients Say</h2>
            <p class="text-gray-600 mt-4">Hear from those who have experienced our services.</p>
            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-6 border border-gray-200 rounded-lg">
                    <p class="text-gray-600 italic">"Amazing service with exceptional support."</p>
                    <h4 class="text-blue-600 mt-4 font-semibold">Client A</h4>
                    <div class="mt-4 flex justify-center">
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                </div>
                <div class="p-6 border border-gray-200 rounded-lg">
                    <p class="text-gray-600 italic">"This is exactly what our business needed."</p>
                    <h4 class="text-blue-600 mt-4 font-semibold">Client B</h4>
                    <div class="mt-4 flex justify-center">
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                </div>
                <div class="p-6 border border-gray-200 rounded-lg">
                    <p class="text-gray-600 italic">"Exceptional quality and timely delivery!"</p>
                    <h4 class="text-blue-600 mt-4 font-semibold">Client C</h4>
                    <div class="mt-4 flex justify-center">
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                        <svg class="w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21 16.54 13.97 22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- FAQ Section -->
<section id="faq" class="py-20 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-semibold">Pertanyaan Umum (FAQ)</h2>
        <p class="text-gray-600 mt-4">Informasi Layanan Kependudukan</p>
                <div class="mt-6 max-w-2xl mx-auto bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M12 4a8 8 0 11-8 8 8 8 0 018-8z"></path>
                    </svg>
                </div>
                <div class="ml-3">
                <h5 class="alert-heading">📢 Pemberitahuan Layanan Online</h5>
                <p class="mb-0">Silakan gunakan layanan online kami di <a href="http://gratiskabeh.banyumaskab.go.id" class="alert-link" target="_blank">gratiskabeh.banyumaskab.go.id</a></p>
                </div>
            </div>
        </div>
        <div class="mt-10 space-y-6 text-center max-w-4xl mx-auto">
            <div class="border-b border-gray-200 pb-4">
                <h3 class="text-2xl font-semibold text-blue-600 cursor-pointer hover:text-blue-500" onclick="toggleAnswer('answer1')">Bagaimana cara membuat KTP Elektronik (KTP-el)</h3>
                <div id="answer1" class="answer mt-2 text-gray-600 max-h-0 overflow-hidden transition-all duration-500">
                Untuk membuat KTP Elektronik (KTP-el), Anda perlu datang langsung ke kantor Dinas Kependudukan dan Pencatatan Sipil dengan membawa dokumen persyaratan seperti Kartu Keluarga (KK), Akta Kelahiran, dan foto diri. Setelah pendaftaran, Anda akan dilakukan perekaman data dan foto untuk pembuatan KTP-el.
                </div>
            </div>
            <div class="border-b border-gray-200 pb-4">
                <h3 class="text-2xl font-semibold text-blue-600 cursor-pointer hover:text-blue-500" onclick="toggleAnswer('answer2')"> Apakah saya bisa mengganti data di KTP atau KK jika ada kesalahan?</h3>
                <div id="answer2" class="answer mt-2 text-gray-600 max-h-0 overflow-hidden transition-all duration-500">
                Ya, jika terdapat kesalahan data pada KTP atau KK, Anda bisa melakukan perubahan data di Dinas Kependudukan dan Pencatatan Sipil dengan membawa dokumen yang membuktikan adanya kesalahan, seperti akta kelahiran atau surat keterangan lainnya.
                </div>
            </div>
            <div class="border-b border-gray-200 pb-4">
                <h3 class="text-2xl font-semibold text-blue-600 cursor-pointer hover:text-blue-500" onclick="toggleAnswer('answer3')">Apakah saya bisa mengganti status perkawinan di KTP dan KK?</h3>
                <div id="answer3" class="answer mt-2 text-gray-600 max-h-0 overflow-hidden transition-all duration-500">
                Ya, jika status perkawinan Anda berubah, Anda bisa mengajukan perubahan data pada KTP dan KK di Dinas Kependudukan dan Pencatatan Sipil dengan membawa akta nikah atau akta cerai yang sah.
                </div>
            </div>
            <div class="border-b border-gray-200 pb-4">
                    <h3 class="text-2xl font-semibold text-blue-600 cursor-pointer hover:text-blue-500" onclick="toggleAnswer('answer4')">Dindukcapil lokasinya dimana sih?</h3>
                <div id="answer4" class="answer mt-2 text-gray-600 max-h-0 overflow-hidden transition-all duration-500">
                    Anda bisa langsung mengakses atau memeriksa lokasi melalui tautan berikut:
                    <a href="https://maps.app.goo.gl/pX1sMYrfJsNtATnN6" target="_blank" rel="noopener noreferrer"><strong>DINDUKCAPIL PURWOKERTO</strong></a>
                    <div class="iframe-container" style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126627.11832594621!2d109.22885109229902!3d-7.342953258644499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e62c2310019%3A0xaf005e0fa2a22b6a!2sDepartment%20of%20Population%20and%20Civil%20Registration%20Banyumas!5e0!3m2!1sen!2sid!4v1731586601354!5m2!1sen!2sid" width="1000" height="300" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <div class="border-b border-gray-200 pb-4">
                <h3 class="text-2xl font-semibold text-blue-600 cursor-pointer hover:text-blue-500" onclick="toggleAnswer('answer5')">Bagaimana jika saya kehilangan KTP atau KK?</h3>
                <div id="answer5" class="answer mt-2 text-gray-600 max-h-0 overflow-hidden transition-all duration-500">
                Jika Anda kehilangan KTP atau KK, Anda harus melaporkan kehilangan tersebut ke kepolisian untuk mendapatkan surat keterangan kehilangan. Kemudian, Anda dapat mengajukan permohonan pembuatan KTP atau KK baru di Dinas Kependudukan dan Pencatatan Sipil.
               </div>
            </div>
        </div>
    </div>
</section>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy;2024 Dindukcapil. PKL-Smecone25</p>
        </div>
    </footer>

    <button id="dark-mode-toggle" class="bg-blue-500 text-white p-3 rounded-full fixed bottom-4 right-4 shadow-lg hover:bg-blue-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v3m0 12v3m7.072-7.072l-2.121 2.121m-12.142 0l-2.121-2.121m1.415-4.243l-2.121 2.121m14.142 0l-2.121-2.121m-2.121-4.243a9 9 0 11-12.727 12.728A9 9 0 0112 3z"></path>
        </svg>
    </button>


    <script>
        // JavaScript to toggle the burger menu
        const burgerIcon = document.getElementById('burger-icon');
        const mobileMenu = document.getElementById('mobile-menu');
        burgerIcon.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        // Dark Mode Toggle
        const darkModeToggle = document.getElementById('dark-mode-toggle');
        darkModeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark');
        });
            // JavaScript function to toggle visibility of answers with smooth transition
        function toggleAnswer(answerId) {
        const answers = document.querySelectorAll('.answer');
        const currentAnswer = document.getElementById(answerId);
        // Close all answers
        answers.forEach((answer) => {
            if (answer !== currentAnswer) {
                answer.style.maxHeight = null; // Collapse the other answers
            }
        });
        // Toggle the current answer
        if (currentAnswer.style.maxHeight) {
            currentAnswer.style.maxHeight = null; // Collapse it if it's already open
        } else {
            currentAnswer.style.maxHeight = currentAnswer.scrollHeight + "px"; // Expand the current answer
        }
    }
    </script>

</body>
</html>
