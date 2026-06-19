 # Inventory System API v1

Base URL: `http://localhost:8000/api/v1`

## Autentikasi

- **POST /register** — Mendaftarkan akun pengguna baru.
- **POST /login** — Masuk ke sistem dan mendapatkan token akses API.

## Kategori Barang

- **GET /categories** — Mengambil semua daftar kategori.
- **POST /categories** — Menambahkan kategori baru. Body: `{ name }`
- **GET /categories/{id}** — Melihat detail satu kategori.
- **PUT /categories/{id}** — Memperbarui nama kategori. Body: `{ name }`
- **DELETE /categories/{id}** — Menghapus kategori. *(Khusus Admin)*

## Item Barang

- **GET /items** — Mengambil semua daftar item.
- **GET /items?category_id={id}** — Mengambil daftar item, difilter berdasarkan kategori tertentu. Jika kategori tidak memiliki item, mengembalikan array kosong.
- **POST /items** — Menambahkan item baru. Body: `{ name, quantity, price, category_id }`
- **GET /items/{id}** — Melihat detail satu item.
- **PUT /items/{id}** — Memperbarui data item.
- **DELETE /items/{id}** — Menghapus item. *(Khusus Admin)*
