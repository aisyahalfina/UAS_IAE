# Payment Service
Microservice ini bertanggung jawab mengelola data pembayaran siswa pada sistem kursus online.

### Teknologi:
- Node.js + Express
- PostgreSQL
- GraphQL (Apollo Server)
- REST API
- Docker

### Endpoint:
- `POST /api/payments` – membuat pembayaran baru
- `GET /api/payments` – menampilkan semua pembayaran

### GraphQL:
- `createPayment(user_id, amount)`
- `getPayments`

### Env Variables:
- PORT
- DB_USER
- DB_PASSWORD
- DB_NAME
- DB_HOST
- DB_PORT

### Author:
Nindy – Payment Service Developer
