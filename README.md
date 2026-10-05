# Dzaka Prastiya Portfolio — UI Rework

Website ini adalah hasil perombakan UI dari template portfolio yang Anda kirim. Fokus perubahan ada pada visual dan data personal; hooks untuk fungsi template tetap dipertahankan.

## Yang dipertahankan

- Mobile navigation + toggle
- Smooth scroll melalui `.scrollto`
- Active navigation saat scroll
- Typed text pada hero
- AOS reveal animation
- Skill progress animation melalui Waypoints
- Isotope portfolio filters
- GLightbox preview
- Swiper pada halaman detail project
- Back-to-top
- PureCounter vendor tetap tersedia

## Data yang digunakan

Data utama mengikuti CV Dzaka Prastiya yang diberikan di percakapan. Foto profil, foto pengalaman, foto project, dan dua dokumen sertifikat berasal dari file yang Anda kirim.

PT Telekomunikasi Indonesia tidak dimasukkan ke timeline portfolio ini. Detail teknis Manga Localization juga tidak dibuat-buat karena deskripsi project di CV terduplikasi dengan project LEGO.

## Menjalankan

Cukup buka `index.html` melalui VS Code Live Server.

Atau jalankan static server:

```bash
python -m http.server 5500
```

Kemudian buka `http://localhost:5500`.

## Catatan contact form

Endpoint Formspree milik template lama sengaja dihapus agar tidak mengirim pesan ke endpoint pihak lain. Form UI tetap dipertahankan dan sekarang menunjuk ke `forms/contact.php` dengan alamat penerima Dzaka. Hosting harus mendukung PHP + `mail()`. Untuk GitHub Pages, ganti `action` dengan endpoint Formspree milik Anda sendiri.

## Struktur asset

- `assets/img/profile/` — foto profil Dzaka
- `assets/img/experience/` — dokumentasi Kominfo, Pacific, Robobrick, Persero Batam
- `assets/img/projects/` — dokumentasi LEGO sorter dan Manga localization
- `assets/img/certificates/` — preview + PDF RHCSA dan TOEFL
- `assets/vendor/` — vendor asli template
