const express = require("express");
const cors = require("cors");
const path = require("path");
const crud = require("./crud");

const app = express();
app.use(cors());
app.use(express.json());

// 👉 INI YANG PENTING
app.use(express.static(path.join(__dirname, "public")));

const PORT = 3000;

// CREATE
app.post("/mahasiswa", (req, res) => {
  const { nama, nim, jurusan, email } = req.body;
  crud.createMahasiswa(nama, nim, jurusan, email, err => {
    if (err) return res.status(500).send(err);
    res.send("Mahasiswa ditambahkan");
  });
});

// READ
app.get("/mahasiswa", (req, res) => {
  crud.getAllMahasiswa((err, rows) => {
    if (err) return res.status(500).send(err);
    res.json(rows);
  });
});

// UPDATE
app.put("/mahasiswa/:id", (req, res) => {
  const { id } = req.params;
  const { nama, nim, jurusan, email } = req.body;
  crud.updateMahasiswa(id, nama, nim, jurusan, email, err => {
    if (err) return res.status(500).send(err);
    res.send("Mahasiswa diupdate");
  });
});

// DELETE
app.delete("/mahasiswa/:id", (req, res) => {
  crud.deleteMahasiswa(id, err => {
    if (err) return res.status(500).send(err);
    res.send("Mahasiswa dihapus");
  });
});

app.listen(PORT, () => {
  console.log(`🚀 Server berjalan di http://localhost:${PORT}`);
});
