const API_URL = "http://localhost:3000/mahasiswa";

const form = document.getElementById("formMahasiswa");
const tbody = document.getElementById("dataMahasiswa");

const idInput = document.getElementById("id");
const namaInput = document.getElementById("nama");
const nimInput = document.getElementById("nim");
const jurusanInput = document.getElementById("jurusan");
const emailInput = document.getElementById("email");

function loadData() {
    fetch(API_URL)
        .then(res => res.json())
        .then(data => {
            tbody.innerHTML = "";
            data.forEach(m => {
                tbody.innerHTML += `
                <tr>
                    <td>${m.id}</td>
                    <td>${m.nama}</td>
                    <td>${m.nim}</td>
                    <td>${m.jurusan}</td>
                    <td>${m.email}</td>
                    <td>
                        <button class="btn-edit" onclick="editData(${m.id}, '${m.nama}', '${m.nim}', '${m.jurusan}', '${m.email}')">Edit</button>
                        <button class="btn-delete" onclick="deleteData(${m.id})">Hapus</button>
                    </td>
                </tr>`;
            });
        });
}

form.addEventListener("submit", function (e) {
    e.preventDefault();

    const data = {
        nama: namaInput.value,
        nim: nimInput.value,
        jurusan: jurusanInput.value,
        email: emailInput.value
    };

    if (idInput.value === "") {
        // CREATE
        fetch(API_URL, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data)
        }).then(() => loadData());
    } else {
        // UPDATE
        fetch(`${API_URL}/${idInput.value}`, {
            method: "PUT",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data)
        }).then(() => loadData());
    }

    form.reset();
    idInput.value = "";
});

function deleteData(id) {
    fetch(`${API_URL}/${id}`, {
        method: "DELETE"
    }).then(() => loadData());
}

function editData(id, nama, nim, jurusan, email) {
    idInput.value = id;
    namaInput.value = nama;
    nimInput.value = nim;
    jurusanInput.value = jurusan;
    emailInput.value = email;
}

loadData();
