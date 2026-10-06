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

## Data dan Konten

Portofolio ini menampilkan profil, pengalaman profesional, proyek teknik (Robotics & AI Pipeline), serta sertifikasi resmi milik Dzaka Prastiya. Seluruh aset dokumentasi visual dan berkas sertifikasi tersimpan rapi dalam folder `assets/`.

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
