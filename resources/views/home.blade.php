<x-app-layout>
    <section id="home" class="hero bg-primary text-primary-content py-20 md:px-8">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <img src="{{ asset('hero.png') }}" class="max-w-xs" alt="Mockup Hero">
            <div>
                <h1 class="text-5xl font-bold">HidroQu</h1>
                <p class="py-6">
                    Solusi Hidroponik Cerdas untuk Memantau Kesehatan Tanaman melalui Pemindaian Daun melalui HidroQu
                    AI. Identifikasi kekurangan nutrisi dan optimalkan budidaya hidroponik Anda.
                </p>
                <a href="#about" class="btn btn-success">Selengkapnya</a>
            </div>
        </div>
    </section>

    <section id="about" class="scroll-mt-20 bg-base-100 text-base-content py-12">
        <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center">
            <div class="mb-4 lg:mb-0 lg:mr-8">
                <h3 class="text-3xl font-bold mb-4">Mengapa HidroQu?</h3>
                <p>
                    HidroQu adalah pendamping hidroponik cerdas Anda, menyederhanakan perawatan tanaman dengan teknologi
                    pemindaian daun yang canggih. Analisis tingkat nutrisi secara instan dan dapatkan saran khusus untuk
                    menanam tanaman sehat seperti tomat, bayam, dan mentimun. Tumbuh lebih cerdas, bukan lebih keras,
                    dengan HidroQu.
                </p>
            </div>
            <div
                class="max-w-lg border-2 border-dashed border-neutral p-4 h-72 w-full lg:min-w-max flex items-center justify-center overflow-hidden">
                <img src="{{ asset('about.jpg') }}" class="w-full h-full object-cover border border-base-200"
                     alt="Mockup About">
            </div>
        </div>
    </section>

    <section id="features" class="scroll-mt-20 py-20 px-6 bg-gradient-to-br from-white to-base-100 text-center">
        <h2 class="text-3xl font-semibold mb-8 text-base-content">Fitur-fitur HidroQu</h2>
        <div
            class="container xl:px-20 mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <div
                class="card bg-base-100 text-base-content border-primary border-dotted border-4 hover:bg-primary hover:text-primary-content hover:-translate-y-2 transition-all duration-300 rounded-lg">
                <div class="card-body p-4">
                    <div class="w-full h-72 mb-4 overflow-hidden rounded-lg">
                        <img src="{{ asset('scan.png') }}" class="w-full h-full object-cover" alt="Mockup Scan">
                    </div>
                    <h3 class="text-xl font-bold mb-2">Scan Nutrisi Tanaman</h3>
                    <p class="text-base leading-relaxed">Analisis cepat dan akurat. Cukup scan daun tanaman Anda untuk
                        mengetahui kandungan nutrisi dan kondisi kesehatan tanaman secara real-time.</p>
                </div>
            </div>

            <div
                class="card bg-base-100 text-base-content border-primary border-dotted border-4 hover:bg-primary hover:text-primary-content hover:-translate-y-2 transition-all duration-300 rounded-lg">
                <div class="card-body p-4">
                    <div class="w-full h-72 mb-4 overflow-hidden rounded-lg">
                        <img src="{{ asset('notif.png') }}" class="w-full h-full object-cover"
                             alt="Mockup Notification">
                    </div>
                    <h3 class="text-xl font-bold mb-2">Notifikasi Panen</h3>
                    <p class="text-base leading-relaxed">Jangan lewatkan waktu panen terbaik! HidroQu akan mengingatkan
                        Anda dengan notifikasi otomatis saat tanaman Anda mendekati masa panen, sehingga hasil panen
                        lebih optimal.</p>
                </div>
            </div>

            <div
                class="card bg-base-100 text-base-content border-primary border-dotted border-4 hover:bg-primary hover:text-primary-content hover:-translate-y-2 transition-all duration-300 rounded-lg">
                <div class="card-body p-4">
                    <div class="w-full h-72 mb-4 overflow-hidden rounded-lg">
                        <img src="{{ asset('komunitas.png') }}" class="w-full h-full object-cover object-top"
                             alt="Mockup Community">
                    </div>
                    <h3 class="text-xl font-bold mb-2">Komunitas</h3>
                    <p class="text-base leading-relaxed">Terhubung dengan sesama penggemar hidroponik! Diskusikan tips,
                        berbagi pengalaman, dan temukan inspirasi untuk meningkatkan hasil tanam Anda di fitur komunitas
                        HidroQu.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="download" class="scroll-mt-20 bg-neutral text-neutral-content py-16">
        <div class="container mx-auto px-4 flex flex-col items-center">
            <h2 class="text-4xl font-bold text-center">Download HidroQu</h2>
            <p class="py-4 text-center max-w-xl">Mulai perjalanan hidroponik Anda sekarang! Unduh aplikasi HidroQu dan
                nikmati kemudahan merawat tanaman dengan teknologi cerdas. Klik tombol di bawah ini untuk mengunduh
                secara gratis!</p>
            <a href="https://storage.googleapis.com/hidroqu/application/hidroqu.apk" class="btn btn-secondary">Download
                Aplikasi</a>
        </div>
    </section>
</x-app-layout>