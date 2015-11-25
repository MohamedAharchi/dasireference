create database if not exists dasi character set utf8 collate utf8_unicode_ci;
use dasi;

grant all privileges on dasi.* to ‘dasi_user'@'localhost' identified by ‘dash’;