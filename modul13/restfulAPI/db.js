const mysql = require("mysql");

const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "akademik",
});

connection.connect((err) => {
  if (err) {
    console.log("❌ Gagal koneksi database");
    console.log(err);
    return;
  }
  console.log("✅ Database terkoneksi");
});

module.exports = connection;
