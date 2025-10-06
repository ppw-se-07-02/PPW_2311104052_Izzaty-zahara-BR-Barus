const content = document.getElementById("content-area");

function loadContent(page) {
  content.style.opacity = 0;

  setTimeout(() => {
    if (page === "dashboard") {
      content.innerHTML = `
        <h2>Dashboard Admin Panda</h2>
        <p>Berikut ringkasan aktivitas terkini dari sistem Panda Corp.</p>

        <div class="dashboard-cards">
          <div class="card">
            <h3>Total User</h3>
            <p>124</p>
          </div>
          <div class="card">
            <h3>Produk Terdaftar</h3>
            <p>87</p>
          </div>
          <div class="card">
            <h3>Transaksi Bulan Ini</h3>
            <p>213</p>
          </div>
          <div class="card">
            <h3>Aktivitas Admin</h3>
            <p>17</p>
          </div>
        </div>

        <div class="chart"></div>

        <p style="margin-top:20px;">
          Sistem sedang dalam performa terbaik. Pastikan selalu memantau data user dan produk secara rutin.
        </p>
      `;
    }

    if (page === "datauser") {
      content.innerHTML = `
        <h2>Data User</h2>
        <table class="table-style">
          <tr><th>Nama</th><th>Email</th><th>Peran</th></tr>
          <tr><td>Andi</td><td>andi@example.com</td><td>Admin</td></tr>
          <tr><td>Sinta</td><td>sinta@example.com</td><td>User</td></tr>
        </table>
      `;
    }

    if (page === "produk") {
      content.innerHTML = `
        <h2>Kelola Produk</h2>
        <form>
          <label>Nama Produk</label>
          <input type="text" placeholder="Masukkan nama produk">
          <label>Harga</label>
          <input type="number" placeholder="Masukkan harga produk">
          <label>Kategori</label>
          <select>
            <option>Pakaian</option>
            <option>Makanan</option>
            <option>Aksesori</option>
          </select>
          <button type="button" onclick="alert('Produk berhasil disimpan!')">Simpan Produk</button>
        </form>
      `;
    }

    if (page === "password") {
      content.innerHTML = `
        <h2>Edit Password</h2>
        <form>
          <label>Password Lama</label>
          <input type="password" placeholder="Masukkan password lama">
          <label>Password Baru</label>
          <input type="password" placeholder="Masukkan password baru">
          <label>Konfirmasi Password Baru</label>
          <input type="password" placeholder="Ulangi password baru">
          <button type="button" onclick="alert('Password berhasil diperbarui!')">Perbarui Password</button>
        </form>
      `;
    }

    if (page === "logout") {
      content.innerHTML = `
        <h2>Anda telah keluar dari sistem</h2>
        <p>Terima kasih telah menggunakan Dashboard Panda.</p>
        <button onclick="loadContent('dashboard')">Kembali ke Dashboard</button>
      `;
    }

    content.style.opacity = 1;
  }, 200);
}

// Hubungkan menu
document.getElementById("menu-dashboard").addEventListener("click", () => loadContent("dashboard"));
document.getElementById("menu-datauser").addEventListener("click", () => loadContent("datauser"));
document.getElementById("menu-produk").addEventListener("click", () => loadContent("produk"));
document.getElementById("menu-password").addEventListener("click", () => loadContent("password"));
document.getElementById("menu-logout").addEventListener("click", () => loadContent("logout"));
