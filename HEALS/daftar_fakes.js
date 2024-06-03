document.addEventListener('DOMContentLoaded', function() {
    var map = L.map('map').setView([-8.5833, 116.1167], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var markerData = [
        {lat: -8.577125662345455, lng: 116.08436134953062, title: "RS Bhayangkara", color: "red", content: "rumah-sakit"},
        {lat: -8.59904109211086, lng: 116.11358999785524, title: "RSUD Mataram", color: "red"},
        {lat: -8.589858174493028, lng: 116.09345311378829, title: "RS Universitas Mataram", color: "red"},
        {lat: -8.579281944483506, lng: 116.09365840786575, title: "RS Kemala Hikmah Polwi", color: "red"},
        {lat: -8.586423718126822, lng: 116.11436356295383, title: "RS Siti Hajar", color: "red"},
        {lat: -8.592841532519087, lng: 116.09879115636869, title: "RS Siloam", color: "red"},
        {lat: -8.569610189561642, lng: 116.07971459213104, title: "RSK St. Antonius", color: "red"},
        {lat: -8.58027225551394, lng: 116.10908057539206, title: "RSAD Wira Bhakti", color: "red"},
        {lat: -8.585277782806351, lng: 116.12276827421712, title: "RS Risa Sentra Medika", color: "red"},
        {lat: -8.577783637903256, lng: 116.14687285113482, title: "RS Harapan Keluarga", color: "red"},
        {lat: -8.603877650976377, lng: 116.11352388429225, title: "RS Biomedika", color: "red"},
        {lat: -8.561997223037627, lng: 116.1125989005121, title: "RS Metro Medika", color: "red"},
        {lat: -8.606397830572252, lng: 116.13204570646643, title: "RSUD Provinsi", color: "red"},
        {lat: -8.599105456502096, lng: 116.11404455923004, title: "RS Umum Daerah Mataram", color: "red"},
    
        {lat: -8.583115391658659, lng: 116.10546646324116, title: "Puskesmas Mataram", color: "blue"},
        {lat: -8.567647504668098, lng: 116.0930887495358, title: "Puskesmas Pejeruk", color: "blue"},
        {lat: -8.57880336891152, lng: 116.09430213802104, title: "Puskesmas Dasan Agung", color: "blue"},
        {lat: -8.594243089404841, lng: 116.10065718705604, title: "Puskesmas Pagesangan", color: "blue"},
    
        {lat: -8.579701467714079, lng: 116.09522857245445, title: "Klinik Kuret Mataram (dr. Angela)", color: "green"},
        {lat: -8.583115391658659, lng: 116.11324281188887, title: "Klinik Risa Husada", color: "green"},
        {lat: -8.577171604070509, lng: 116.11702053357368, title: "Klinik Glora", color: "green"},
        {lat: -8.577171604070509, lng: 116.11702053357368, title: "Klinik Mitra Medistra", color: "green"}
    ];
    
    markerData.forEach(function(markerInfo) {
        var icon;
        if (markerInfo.color === "red") {
            icon = L.icon({
                iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });
        } else if (markerInfo.color === "blue") {
            icon = L.icon({
                iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });
        } else if (markerInfo.color === "green") {
            icon = L.icon({
                iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });
        }
        
        var marker = L.marker([markerInfo.lat, markerInfo.lng], {icon: icon}).addTo(map);
        marker.bindPopup(markerInfo.title);
        
        marker.on('click', function() {
            var menuItem = document.querySelector('[data-content="' + markerInfo.content + '"]');
            menuItem.click();
        });
    });

    const facilities = [
        { no: 1, nama: 'RSIA Sarila Husada', alamat: 'Jl. Veteran No. 41 - 43, Kroyo, Kecamatan Sragen, Kroyo, Kec. Karangmalang, Kabupaten Sragen, Jawa Tengah 57211', telp: '+62271891194', url: 'google.com'  },
        { no: 2, nama: 'Puskesmas Kedawung II', alamat: 'Jl. Solo Baturetno, KM.32 Karangpelem, Kec. Kedawung, Kab. Sragen', telp: '08112952372' },
        { no: 3, nama: 'Apotek Kimia Farma', alamat: 'Jl. Sukowati No.440a, Dusun Kebayan Sragen Manggis, Sragen Wetan, Kec. Sragen, Kabupaten Sragen, Jawa Tengah 57214', telp: '0271892209' },
        { no: 4, nama: 'RS RIZKY AMALIA', alamat: 'Jl. Ahmad Yani No.100 Cantel Wetan, Sragen Tengah, Sragen.', telp: '02718823814' },
        { no: 5, nama: 'RSU Mardi Lestari', alamat: 'Jl. Rokan No.2, Magero, Sragen Tengah, Kec. Sragen, Kabupaten Sragen, Jawa Tengah 57251', telp: '0271891033' },
        { no: 6, nama: 'Klinik Aisyiyah', alamat: 'Jl.Pemuda 4A, Sragen Wetan', telp: '0271892889' },
        { no: 7, nama: 'Laboratorium Klinik Budi Sehat', alamat: 'Jl. HOS. Cokroaminoto, Dusun Kebayan Sragen Manggis, Sragen Wetan, Kec. Sragen, Kabupaten Sragen, Jawa Tengah 57214', telp: '02715890919' },
        { no: 8, nama: 'Laboratorium Kesehatan Kab. Sragen', alamat: 'Jl. Sukowati, Kebayan 1, Sragen Kulon, Kec. Sragen, Kabupaten Sragen, Jawa Tengah 57212', telp: '0271891078' },
        { no: 9, nama: 'Puskesmas Jenar', alamat: 'Jl .RayaTangen - Banyurip Km 8, Kec. Jenar', telp: '08112655199' },
        { no: 10, nama: 'Puskesmas Plupuh II', alamat: 'Ds. Pungsari, Kec. Plupuh', telp: '08112632444' }
    ];

    let filteredFacilities = [...facilities];
    const rowsPerPage = 5;
    let currentPage = 1;

    function renderTable(page, data) {
        const tableBody = document.getElementById('facility-table');
        tableBody.innerHTML = '';
        const start = (page - 1) * rowsPerPage;
        const end = page * rowsPerPage;
        const paginatedFacilities = data.slice(start, end);

        paginatedFacilities.forEach(facility => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${facility.no}</td>
                <td>${facility.nama}</td>
                <td>${facility.alamat}</td>
                <td>${facility.telp}</td>
                <td><button><a href="" data-no=${facility.no}>Detail</a></button></td>
            `;
            tableBody.appendChild(row);
        });

        document.getElementById('page-info').textContent = page;
        document.getElementById('prev').disabled = page === 1;
        document.getElementById('next').disabled = end >= data.length;
    }

    document.getElementById('search').addEventListener('input', function(e) {
        const query = e.target.value.toLowerCase();
        filteredFacilities = facilities.filter(facility => 
            facility.nama.toLowerCase().includes(query) ||
            facility.alamat.toLowerCase().includes(query) ||
            facility.telp.includes(query)
        );

        currentPage = 1;
        renderTable(currentPage, filteredFacilities);
    });

    document.getElementById('prev').addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            renderTable(currentPage, filteredFacilities);
        }
    });

    document.getElementById('next').addEventListener('click', function() {
        if ((currentPage * rowsPerPage) < filteredFacilities.length) {
            currentPage++;
            renderTable(currentPage, filteredFacilities);
        }
    });

    renderTable(currentPage, filteredFacilities);
});
