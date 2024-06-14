<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/buddha.jpg') }}" class="d-block w-100 img-fluid" alt="Majapahit 1"
                        style="max-height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kerajaan Majapahit</h5>
                        <p>Berdiri pada abad ke-13 hingga 15 merupakan kerajaan yang bercorak Hindu-Buddha </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/temple.jpg') }}" class="d-block w-100 img-fluid"
                        alt="Pendopo Agung Trowulan" style="max-height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kerajaan Majapahit</h5>
                        <p>Kerajaan paling besar dan berpengaruh di Nusantara</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title"><strong>Latar belakang WebGIS</strong></h3>
                <p class="card-text">Kerajaan Majapahit adalah kerajaan besar yang berdiri di Jawa Timur, Indonesia, sekitar tahun 1293 hingga 1527 Masehi. Kerajaan ini didirikan oleh Raden Wijaya dan mencapai puncak kejayaannya di bawah pemerintahan Raja Hayam Wuruk, dengan bantuan patih terkenal, Gajah Mada. Pada masa kejayaannya, Majapahit menguasai wilayah yang luas, mencakup hampir seluruh Nusantara, termasuk Sumatra, Kalimantan, Sulawesi, dan Semenanjung Malaya.

                    Majapahit dikenal sebagai kerajaan bercorak Hindu-Buddha yang kaya akan budaya dan seni. Ia menjadi pusat perdagangan dan kebudayaan, menjalin hubungan dengan banyak kerajaan dan bangsa lain. Kejayaan Majapahit ditandai oleh kekuatan militer, administrasi yang terorganisir, serta kemajuan dalam bidang sastra dan arsitektur, yang masih dapat dilihat pada peninggalan candi-candi dan karya sastra seperti "Negarakertagama".

                    Keruntuhan Majapahit disebabkan oleh berbagai faktor, termasuk konflik internal, serangan dari kerajaan-kerajaan lain, dan perubahan dalam jalur perdagangan maritim. Meskipun demikian, warisan Majapahit tetap berpengaruh dalam sejarah dan budaya Indonesia, terutama dalam konsep persatuan Nusantara..</p> <br>
                    <p>WebGIS ini dibentuk dengan tujuan untuk mendokumentasikan peninggalan atau situs sejarah dari Kerajaan Majapahit didalam suatu wadah yang dimana user dapat melakukan penambahan, pengeditan, hingga penghapusan informasi situs ejarah. User yang diberikan izin untuk melakukan semua itu merupakan user yang telah terdaftar akunnya didalam database.</p>

                </div>

        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-secondary" role="alert">
                            <h4><i class="fa-solid fa-location-pin"></i> Total lokasi situs yang telah ditambahkan</h4>
                            <p style="font-size: 28pt">{{ $Total_points }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-secondary" role="alert">
                            <h4><i class="fa-solid fa-draw-polygon"></i> Total area situs yang telah ditambahkan</h4>
                            <p style="font-size: 28pt">{{ $Total_polygons }}</p>
                        </div>
                    </div>
                </div>
                <hr>
                <p>Anda login sebagai <b>{{ Auth::user()->name }}</b> dengan email: <i>{{ Auth::user()->email }}</i></p>
                <hr>
            </div>
        </div>
    </div>

</x-app-layout>
