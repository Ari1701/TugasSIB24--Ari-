const endpoint = 'https://crudcrud.com/api/eb832c0c76ce467496886277ae40fba0/products/';

  // Ambil data
  fetch(endpoint)
    .then((response) => response.json())
    .then((res) => {
      let datas = res;

      datas.forEach((data_product) => {
        document.getElementById('data_produk').innerHTML += `
        <tr id="${data_product._id}">
            <td>${data_product.nama_produk}</td>
            <td>${data_product.jumlah}</td>
            <td>${data_product.harga}</td>
            <td>
                <button onclick="edit_data('${data_product._id}', '${data_product.nama_produk}', '${data_product.jumlah}', '${data_product.harga}')">Edit</button>
                <button onclick="delete_data('${data_product._id}')">Hapus</button>
            </td>
        </tr>
        `;
      });
    })
    .catch((error) => {
      document.querySelector('.error').innerText = error.message;
      document.querySelector('.error').style.display = 'block';
    });

  // Fungsi untuk menambahkan data baru
  function tambah_data(event) {
    event.preventDefault();

    const input_nama_produk = document.getElementById('nama_produk').value;
    const input_jumlah = document.getElementById('jumlah').value;
    const input_harga = document.getElementById('harga').value;

    fetch(endpoint, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        nama_produk: input_nama_produk,
        jumlah: input_jumlah,
        harga: input_harga,
      }),
    })
    .then((response) => response.json())
    .then((data) => {
      // Reload halaman setelah berhasil menambahkan data
      window.location.reload();
    })
    .catch((error) => {
      console.error('Error:', error);
    });
  }

  // Fungsi untuk mengedit data
  function edit_data(id, nama_produk, jumlah, harga) {
    const newName = prompt("Masukkan nama produk baru:", nama_produk);
    const newQuantity = prompt("Masukkan jumlah baru:", jumlah);
    const newPrice = prompt("Masukkan harga baru:", harga);

    if (newName && newQuantity && newPrice) {
      fetch(endpoint + id, {
        method: 'PUT',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          nama_produk: newName,
          jumlah: newQuantity,
          harga: newPrice,
        }),
      })
      .then((response) => {
        if (response.ok) {
          // Update data di tabel
          document.getElementById(id).innerHTML = `
            <td>${newName}</td>
            <td>${newQuantity}</td>
            <td>${newPrice}</td>
            <td>
              <button onclick="edit_data('${id}', '${newName}', '${newQuantity}', '${newPrice}')" class = "edit">Edit</button>
              <button onclick="delete_data('${id}')" class = "delete">Hapus</button>
            </td>
          `;
        }
      })
      .catch((error) => {
        console.error('Error:', error);
      });
    }
  }

  // Fungsi untuk menghapus data
  function delete_data(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
      fetch(endpoint + id, {
        method: 'DELETE',
      })
      .then((response) => {
        if (response.ok) {
          // Hapus baris data dari tabel
          document.getElementById(id).remove();
        }
      })
      .catch((error) => {
        console.error('Error:', error);
      });
    }
  }
