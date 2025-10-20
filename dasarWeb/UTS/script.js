$(document).ready(function() {
  // 🔹 Validasi form input transaksi
  $("#formTransaksi").submit(function(e) {
    let nama = $("#nama").val().trim();
    let jenis = $("#jenis").val();
    let kategori = $("#kategori").val();
    let jumlah = $("#jumlah").val();
    let ket = $("#keterangan").val().trim();

    // Jika salah satu belum diisi
    if (nama === "" || jenis === "" || kategori === "" || jumlah === "" || ket.length < 5) {
      e.preventDefault();
      $("#error").hide().html("⚠️ Lengkapi semua data dengan benar!").fadeIn(300);
    } else {
      $("#error").fadeOut(300);
      $("button").fadeOut(200).fadeIn(400);
    }
  });

  // 🔹 Efek animasi saat tampilkan ringkasan keuangan
  $(".summary").hide().fadeIn(800);

  // Efek halus untuk tabel hasil transaksi
  $("table").hide().fadeIn(700);
});
