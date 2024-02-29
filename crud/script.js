// Ambil elemen-elemen yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// Tambah event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // Periksa apakah keyword kosong
  console.log(keyword.value);
  console.log("ketik");
  if (keyword.value === "") {
    // Hapus data dari container
    container.innerHTML = "";

    return;
  }

  // Buat objek ajax
  var xhr = new XMLHttpRequest();

  // Cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // Hapus data dari container
      container.innerHTML = "";

      // Isi container dengan data baru
      container.innerHTML = xhr.responseText;
    }
  };

  // Eksekusi ajax
  xhr.open("GET", "ajax/pelajar.php?keyword=" + keyword.value, true);
  xhr.send();
});
