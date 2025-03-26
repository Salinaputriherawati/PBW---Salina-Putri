document.getElementById("formNilai").addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah halaman refresh

    let nim = document.getElementById("nim").value.trim();
    let nilai = parseInt(document.getElementById("nilai").value);
    let hasil = document.getElementById("hasil");

    // Validasi input
    if (!nim) {
        hasil.innerHTML = "NIM tidak boleh kosong!";
        hasil.style.color = "red";
        return;
    }

    if (isNaN(nilai) || nilai < 0 || nilai > 100) {
        hasil.innerHTML = "Nilai tidak valid!";
        hasil.style.color = "red";
        return;
    }

    // Menentukan huruf mutu berdasarkan skala nilai
    let hurufMutu;
    if (nilai >= 80) {
        hurufMutu = "A";
    } else if (nilai >= 70) {
        hurufMutu = "B";
    } else if (nilai >= 60) {
        hurufMutu = "C";
    } else if (nilai >= 50) {
        hurufMutu = "D";
    } else {
        hurufMutu = "E";
    }

    // Menampilkan hasil
    hasil.innerHTML = `Hasil Huruf Mutu: ${hurufMutu}`;
    hasil.style.color = "green";
});