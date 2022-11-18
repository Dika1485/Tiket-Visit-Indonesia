CREATE TABLE `wisata`(
    `id` CHAR(255) NOT NULL,
    `nama` VARCHAR(255) NOT NULL,
    `harga` INT NOT NULL,
    `desc` TEXT NOT NULL
);
ALTER TABLE
    `wisata` ADD PRIMARY KEY `wisata_id_primary`(`id`);
CREATE TABLE `akun`(
    `id` CHAR(255) NOT NULL,
    `akun` VARCHAR(255) NOT NULL,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `tanggal_lahir` DATE NOT NULL,
    `admin` TINYINT(1) NOT NULL
);
ALTER TABLE
    `akun` ADD PRIMARY KEY `akun_id_primary`(`id`);
ALTER TABLE
    `akun` ADD UNIQUE `akun_akun_unique`(`akun`);
CREATE TABLE `transaksi`(
    `id` CHAR(255) NOT NULL,
    `id_wisata` CHAR(255) NOT NULL,
    `id_akun` CHAR(255) NOT NULL,
    `jumlah` INT NOT NULL,
    `status` VARCHAR(255) NOT NULL,
    `metode` VARCHAR(255) NULL,
    `schedule` DATE NULL
);
ALTER TABLE
    `transaksi` ADD PRIMARY KEY `transaksi_id_primary`(`id`);
CREATE TABLE `list_wisata`(
    `id_wisata` CHAR(255) NOT NULL,
    `akun` CHAR(255) NOT NULL
);
CREATE TABLE `notifikasi`(
    `id` CHAR(255) NOT NULL,
    `tanggal` DATE NOT NULL,
    `judul` VARCHAR(255) NOT NULL,
    `notif` TEXT NOT NULL
);
CREATE TABLE `produk`(
    `id` CHAR(255) NOT NULL,
    `nama` VARCHAR(255) NOT NULL,
    `desc` TEXT NOT NULL
);
ALTER TABLE
    `produk` ADD PRIMARY KEY `produk_id_primary`(`id`);
CREATE TABLE `makanan`(
    `id` CHAR(255) NOT NULL,
    `nama` VARCHAR(255) NOT NULL,
    `desc` TEXT NOT NULL
);
ALTER TABLE
    `makanan` ADD PRIMARY KEY `makanan_id_primary`(`id`);
CREATE TABLE `budaya`(
    `id` CHAR(255) NOT NULL,
    `nama` VARCHAR(255) NOT NULL,
    `desc` TEXT NOT NULL
);
ALTER TABLE
    `budaya` ADD PRIMARY KEY `budaya_id_primary`(`id`);
CREATE TABLE `favorit`(
    `id_akun` CHAR(255) NOT NULL,
    `id` CHAR(255) NOT NULL
);
CREATE TABLE `rating`(
    `id_wisata` CHAR(255) NOT NULL,
    `id_akun` CHAR(255) NOT NULL,
    `rate` INT NOT NULL
);
CREATE TABLE `alamat`(
    `id` CHAR(255) NOT NULL,
    `jalan` VARCHAR(255) NULL,
    `desa` VARCHAR(255) NULL,
    `kecamatan` VARCHAR(255) NULL,
    `kota` VARCHAR(255) NOT NULL,
    `provinsi` VARCHAR(255) NOT NULL
);
CREATE TABLE `media`(
    `id` CHAR(255) NOT NULL,
    `namefile` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `transaksi` ADD CONSTRAINT `transaksi_id_wisata_foreign` FOREIGN KEY(`id_wisata`) REFERENCES `wisata`(`id`);
ALTER TABLE
    `transaksi` ADD CONSTRAINT `transaksi_id_akun_foreign` FOREIGN KEY(`id_akun`) REFERENCES `akun`(`id`);
ALTER TABLE
    `rating` ADD CONSTRAINT `rating_id_akun_foreign` FOREIGN KEY(`id_akun`) REFERENCES `akun`(`id`);
ALTER TABLE
    `list_wisata` ADD CONSTRAINT `list_wisata_id_wisata_foreign` FOREIGN KEY(`id_wisata`) REFERENCES `wisata`(`id`);
ALTER TABLE
    `list_wisata` ADD CONSTRAINT `list_wisata_akun_foreign` FOREIGN KEY(`akun`) REFERENCES `akun`(`id`);
ALTER TABLE
    `notifikasi` ADD CONSTRAINT `notifikasi_id_foreign` FOREIGN KEY(`id`) REFERENCES `akun`(`id`);
ALTER TABLE
    `favorit` ADD CONSTRAINT `favorit_id_akun_foreign` FOREIGN KEY(`id_akun`) REFERENCES `akun`(`id`);
ALTER TABLE
    `rating` ADD CONSTRAINT `rating_id_wisata_foreign` FOREIGN KEY(`id_wisata`) REFERENCES `wisata`(`id`);