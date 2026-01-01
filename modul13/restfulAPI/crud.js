const db = require("./db");

// CREATE
function createMahasiswa(nama, nim, jurusan, email, cb) {
  db.query(
    "INSERT INTO mahasiswa (nama,nim,jurusan,email) VALUES (?,?,?,?)",
    [nama, nim, jurusan, email],
    cb
  );
}

// READ
function getAllMahasiswa(cb) {
  db.query("SELECT * FROM mahasiswa", cb);
}

// UPDATE
function updateMahasiswa(id, nama, nim, jurusan, email, cb) {
  db.query(
    "UPDATE mahasiswa SET nama=?, nim=?, jurusan=?, email=? WHERE id=?",
    [nama, nim, jurusan, email, id],
    cb
  );
}

// DELETE
function deleteMahasiswa(id, cb) {
  db.query("DELETE FROM mahasiswa WHERE id=?", [id], cb);
}

module.exports = {
  createMahasiswa,
  getAllMahasiswa,
  updateMahasiswa,
  deleteMahasiswa,
};
