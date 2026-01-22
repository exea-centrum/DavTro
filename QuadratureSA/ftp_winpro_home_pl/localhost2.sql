-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Czas wygenerowania: 05 Lut 2010, 20:16
-- Wersja serwera: 5.0.66
-- Wersja PHP: 5.2.6
-- 
-- Baza danych: `information_schema`
-- 
CREATE DATABASE `information_schema` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `information_schema`;

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `CHARACTER_SETS`
-- 

CREATE TEMPORARY TABLE `CHARACTER_SETS` (
  `CHARACTER_SET_NAME` varchar(64) NOT NULL default '',
  `DEFAULT_COLLATE_NAME` varchar(64) NOT NULL default '',
  `DESCRIPTION` varchar(60) NOT NULL default '',
  `MAXLEN` bigint(3) NOT NULL default '0'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `CHARACTER_SETS`
-- 

INSERT INTO `CHARACTER_SETS` VALUES ('big5', 'big5_chinese_ci', 'Big5 Traditional Chinese', 2);
INSERT INTO `CHARACTER_SETS` VALUES ('dec8', 'dec8_swedish_ci', 'DEC West European', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('cp850', 'cp850_general_ci', 'DOS West European', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('hp8', 'hp8_english_ci', 'HP West European', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('koi8r', 'koi8r_general_ci', 'KOI8-R Relcom Russian', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('latin1', 'latin1_swedish_ci', 'cp1252 West European', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('latin2', 'latin2_general_ci', 'ISO 8859-2 Central European', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('swe7', 'swe7_swedish_ci', '7bit Swedish', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('ascii', 'ascii_general_ci', 'US ASCII', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('ujis', 'ujis_japanese_ci', 'EUC-JP Japanese', 3);
INSERT INTO `CHARACTER_SETS` VALUES ('sjis', 'sjis_japanese_ci', 'Shift-JIS Japanese', 2);
INSERT INTO `CHARACTER_SETS` VALUES ('hebrew', 'hebrew_general_ci', 'ISO 8859-8 Hebrew', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('tis620', 'tis620_thai_ci', 'TIS620 Thai', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('euckr', 'euckr_korean_ci', 'EUC-KR Korean', 2);
INSERT INTO `CHARACTER_SETS` VALUES ('koi8u', 'koi8u_general_ci', 'KOI8-U Ukrainian', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('gb2312', 'gb2312_chinese_ci', 'GB2312 Simplified Chinese', 2);
INSERT INTO `CHARACTER_SETS` VALUES ('greek', 'greek_general_ci', 'ISO 8859-7 Greek', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('cp1250', 'cp1250_general_ci', 'Windows Central European', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('gbk', 'gbk_chinese_ci', 'GBK Simplified Chinese', 2);
INSERT INTO `CHARACTER_SETS` VALUES ('latin5', 'latin5_turkish_ci', 'ISO 8859-9 Turkish', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('armscii8', 'armscii8_general_ci', 'ARMSCII-8 Armenian', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('utf8', 'utf8_general_ci', 'UTF-8 Unicode', 3);
INSERT INTO `CHARACTER_SETS` VALUES ('ucs2', 'ucs2_general_ci', 'UCS-2 Unicode', 2);
INSERT INTO `CHARACTER_SETS` VALUES ('cp866', 'cp866_general_ci', 'DOS Russian', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('keybcs2', 'keybcs2_general_ci', 'DOS Kamenicky Czech-Slovak', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('macce', 'macce_general_ci', 'Mac Central European', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('macroman', 'macroman_general_ci', 'Mac West European', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('cp852', 'cp852_general_ci', 'DOS Central European', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('latin7', 'latin7_general_ci', 'ISO 8859-13 Baltic', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('cp1251', 'cp1251_general_ci', 'Windows Cyrillic', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('cp1256', 'cp1256_general_ci', 'Windows Arabic', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('cp1257', 'cp1257_general_ci', 'Windows Baltic', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('binary', 'binary', 'Binary pseudo charset', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('geostd8', 'geostd8_general_ci', 'GEOSTD8 Georgian', 1);
INSERT INTO `CHARACTER_SETS` VALUES ('cp932', 'cp932_japanese_ci', 'SJIS for Windows Japanese', 2);
INSERT INTO `CHARACTER_SETS` VALUES ('eucjpms', 'eucjpms_japanese_ci', 'UJIS for Windows Japanese', 3);

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `COLLATIONS`
-- 

CREATE TEMPORARY TABLE `COLLATIONS` (
  `COLLATION_NAME` varchar(64) NOT NULL default '',
  `CHARACTER_SET_NAME` varchar(64) NOT NULL default '',
  `ID` bigint(11) NOT NULL default '0',
  `IS_DEFAULT` varchar(3) NOT NULL default '',
  `IS_COMPILED` varchar(3) NOT NULL default '',
  `SORTLEN` bigint(3) NOT NULL default '0'
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `COLLATIONS`
-- 

INSERT INTO `COLLATIONS` VALUES ('big5_chinese_ci', 'big5', 1, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('big5_bin', 'big5', 84, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('dec8_swedish_ci', 'dec8', 3, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('dec8_bin', 'dec8', 69, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp850_general_ci', 'cp850', 4, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp850_bin', 'cp850', 80, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('hp8_english_ci', 'hp8', 6, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('hp8_bin', 'hp8', 72, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('koi8r_general_ci', 'koi8r', 7, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('koi8r_bin', 'koi8r', 74, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin1_german1_ci', 'latin1', 5, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin1_swedish_ci', 'latin1', 8, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin1_danish_ci', 'latin1', 15, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin1_german2_ci', 'latin1', 31, '', 'Yes', 2);
INSERT INTO `COLLATIONS` VALUES ('latin1_bin', 'latin1', 47, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin1_general_ci', 'latin1', 48, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin1_general_cs', 'latin1', 49, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin1_spanish_ci', 'latin1', 94, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin2_czech_cs', 'latin2', 2, '', 'Yes', 4);
INSERT INTO `COLLATIONS` VALUES ('latin2_general_ci', 'latin2', 9, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin2_hungarian_ci', 'latin2', 21, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin2_croatian_ci', 'latin2', 27, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin2_bin', 'latin2', 77, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('swe7_swedish_ci', 'swe7', 10, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('swe7_bin', 'swe7', 82, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('ascii_general_ci', 'ascii', 11, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('ascii_bin', 'ascii', 65, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('ujis_japanese_ci', 'ujis', 12, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('ujis_bin', 'ujis', 91, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('sjis_japanese_ci', 'sjis', 13, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('sjis_bin', 'sjis', 88, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('hebrew_general_ci', 'hebrew', 16, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('hebrew_bin', 'hebrew', 71, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('tis620_thai_ci', 'tis620', 18, 'Yes', 'Yes', 4);
INSERT INTO `COLLATIONS` VALUES ('tis620_bin', 'tis620', 89, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('euckr_korean_ci', 'euckr', 19, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('euckr_bin', 'euckr', 85, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('koi8u_general_ci', 'koi8u', 22, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('koi8u_bin', 'koi8u', 75, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('gb2312_chinese_ci', 'gb2312', 24, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('gb2312_bin', 'gb2312', 86, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('greek_general_ci', 'greek', 25, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('greek_bin', 'greek', 70, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1250_general_ci', 'cp1250', 26, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1250_czech_cs', 'cp1250', 34, '', 'Yes', 2);
INSERT INTO `COLLATIONS` VALUES ('cp1250_croatian_ci', 'cp1250', 44, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1250_bin', 'cp1250', 66, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('gbk_chinese_ci', 'gbk', 28, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('gbk_bin', 'gbk', 87, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin5_turkish_ci', 'latin5', 30, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin5_bin', 'latin5', 78, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('armscii8_general_ci', 'armscii8', 32, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('armscii8_bin', 'armscii8', 64, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('utf8_general_ci', 'utf8', 33, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('utf8_bin', 'utf8', 83, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('utf8_unicode_ci', 'utf8', 192, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_icelandic_ci', 'utf8', 193, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_latvian_ci', 'utf8', 194, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_romanian_ci', 'utf8', 195, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_slovenian_ci', 'utf8', 196, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_polish_ci', 'utf8', 197, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_estonian_ci', 'utf8', 198, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_spanish_ci', 'utf8', 199, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_swedish_ci', 'utf8', 200, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_turkish_ci', 'utf8', 201, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_czech_ci', 'utf8', 202, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_danish_ci', 'utf8', 203, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_lithuanian_ci', 'utf8', 204, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_slovak_ci', 'utf8', 205, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_spanish2_ci', 'utf8', 206, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_roman_ci', 'utf8', 207, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_persian_ci', 'utf8', 208, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_esperanto_ci', 'utf8', 209, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('utf8_hungarian_ci', 'utf8', 210, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_general_ci', 'ucs2', 35, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('ucs2_bin', 'ucs2', 90, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('ucs2_unicode_ci', 'ucs2', 128, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_icelandic_ci', 'ucs2', 129, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_latvian_ci', 'ucs2', 130, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_romanian_ci', 'ucs2', 131, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_slovenian_ci', 'ucs2', 132, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_polish_ci', 'ucs2', 133, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_estonian_ci', 'ucs2', 134, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_spanish_ci', 'ucs2', 135, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_swedish_ci', 'ucs2', 136, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_turkish_ci', 'ucs2', 137, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_czech_ci', 'ucs2', 138, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_danish_ci', 'ucs2', 139, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_lithuanian_ci', 'ucs2', 140, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_slovak_ci', 'ucs2', 141, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_spanish2_ci', 'ucs2', 142, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_roman_ci', 'ucs2', 143, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_persian_ci', 'ucs2', 144, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_esperanto_ci', 'ucs2', 145, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('ucs2_hungarian_ci', 'ucs2', 146, '', 'Yes', 8);
INSERT INTO `COLLATIONS` VALUES ('cp866_general_ci', 'cp866', 36, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp866_bin', 'cp866', 68, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('keybcs2_general_ci', 'keybcs2', 37, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('keybcs2_bin', 'keybcs2', 73, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('macce_general_ci', 'macce', 38, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('macce_bin', 'macce', 43, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('macroman_general_ci', 'macroman', 39, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('macroman_bin', 'macroman', 53, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp852_general_ci', 'cp852', 40, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp852_bin', 'cp852', 81, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin7_estonian_cs', 'latin7', 20, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin7_general_ci', 'latin7', 41, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin7_general_cs', 'latin7', 42, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('latin7_bin', 'latin7', 79, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1251_bulgarian_ci', 'cp1251', 14, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1251_ukrainian_ci', 'cp1251', 23, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1251_bin', 'cp1251', 50, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1251_general_ci', 'cp1251', 51, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1251_general_cs', 'cp1251', 52, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1256_general_ci', 'cp1256', 57, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1256_bin', 'cp1256', 67, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1257_lithuanian_ci', 'cp1257', 29, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1257_bin', 'cp1257', 58, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp1257_general_ci', 'cp1257', 59, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('binary', 'binary', 63, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('geostd8_general_ci', 'geostd8', 92, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('geostd8_bin', 'geostd8', 93, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp932_japanese_ci', 'cp932', 95, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('cp932_bin', 'cp932', 96, '', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('eucjpms_japanese_ci', 'eucjpms', 97, 'Yes', 'Yes', 1);
INSERT INTO `COLLATIONS` VALUES ('eucjpms_bin', 'eucjpms', 98, '', 'Yes', 1);

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `COLLATION_CHARACTER_SET_APPLICABILITY`
-- 

CREATE TEMPORARY TABLE `COLLATION_CHARACTER_SET_APPLICABILITY` (
  `COLLATION_NAME` varchar(64) NOT NULL default '',
  `CHARACTER_SET_NAME` varchar(64) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `COLLATION_CHARACTER_SET_APPLICABILITY`
-- 

INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('big5_chinese_ci', 'big5');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('big5_bin', 'big5');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('dec8_swedish_ci', 'dec8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('dec8_bin', 'dec8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp850_general_ci', 'cp850');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp850_bin', 'cp850');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('hp8_english_ci', 'hp8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('hp8_bin', 'hp8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('koi8r_general_ci', 'koi8r');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('koi8r_bin', 'koi8r');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin1_german1_ci', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin1_swedish_ci', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin1_danish_ci', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin1_german2_ci', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin1_bin', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin1_general_ci', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin1_general_cs', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin1_spanish_ci', 'latin1');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin2_czech_cs', 'latin2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin2_general_ci', 'latin2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin2_hungarian_ci', 'latin2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin2_croatian_ci', 'latin2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin2_bin', 'latin2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('swe7_swedish_ci', 'swe7');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('swe7_bin', 'swe7');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ascii_general_ci', 'ascii');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ascii_bin', 'ascii');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ujis_japanese_ci', 'ujis');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ujis_bin', 'ujis');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('sjis_japanese_ci', 'sjis');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('sjis_bin', 'sjis');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('hebrew_general_ci', 'hebrew');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('hebrew_bin', 'hebrew');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('tis620_thai_ci', 'tis620');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('tis620_bin', 'tis620');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('euckr_korean_ci', 'euckr');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('euckr_bin', 'euckr');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('koi8u_general_ci', 'koi8u');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('koi8u_bin', 'koi8u');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('gb2312_chinese_ci', 'gb2312');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('gb2312_bin', 'gb2312');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('greek_general_ci', 'greek');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('greek_bin', 'greek');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1250_general_ci', 'cp1250');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1250_czech_cs', 'cp1250');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1250_croatian_ci', 'cp1250');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1250_bin', 'cp1250');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('gbk_chinese_ci', 'gbk');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('gbk_bin', 'gbk');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin5_turkish_ci', 'latin5');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin5_bin', 'latin5');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('armscii8_general_ci', 'armscii8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('armscii8_bin', 'armscii8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_general_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_bin', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_unicode_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_icelandic_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_latvian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_romanian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_slovenian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_polish_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_estonian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_spanish_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_swedish_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_turkish_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_czech_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_danish_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_lithuanian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_slovak_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_spanish2_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_roman_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_persian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_esperanto_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('utf8_hungarian_ci', 'utf8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_general_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_bin', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_unicode_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_icelandic_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_latvian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_romanian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_slovenian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_polish_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_estonian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_spanish_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_swedish_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_turkish_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_czech_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_danish_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_lithuanian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_slovak_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_spanish2_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_roman_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_persian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_esperanto_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('ucs2_hungarian_ci', 'ucs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp866_general_ci', 'cp866');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp866_bin', 'cp866');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('keybcs2_general_ci', 'keybcs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('keybcs2_bin', 'keybcs2');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('macce_general_ci', 'macce');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('macce_bin', 'macce');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('macroman_general_ci', 'macroman');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('macroman_bin', 'macroman');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp852_general_ci', 'cp852');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp852_bin', 'cp852');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin7_estonian_cs', 'latin7');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin7_general_ci', 'latin7');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin7_general_cs', 'latin7');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('latin7_bin', 'latin7');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1251_bulgarian_ci', 'cp1251');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1251_ukrainian_ci', 'cp1251');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1251_bin', 'cp1251');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1251_general_ci', 'cp1251');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1251_general_cs', 'cp1251');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1256_general_ci', 'cp1256');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1256_bin', 'cp1256');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1257_lithuanian_ci', 'cp1257');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1257_bin', 'cp1257');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp1257_general_ci', 'cp1257');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('binary', 'binary');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('geostd8_general_ci', 'geostd8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('geostd8_bin', 'geostd8');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp932_japanese_ci', 'cp932');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('cp932_bin', 'cp932');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('eucjpms_japanese_ci', 'eucjpms');
INSERT INTO `COLLATION_CHARACTER_SET_APPLICABILITY` VALUES ('eucjpms_bin', 'eucjpms');

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `COLUMNS`
-- 

CREATE TEMPORARY TABLE `COLUMNS` (
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `COLUMN_NAME` varchar(64) NOT NULL default '',
  `ORDINAL_POSITION` bigint(21) NOT NULL default '0',
  `COLUMN_DEFAULT` longtext,
  `IS_NULLABLE` varchar(3) NOT NULL default '',
  `DATA_TYPE` varchar(64) NOT NULL default '',
  `CHARACTER_MAXIMUM_LENGTH` bigint(21) default NULL,
  `CHARACTER_OCTET_LENGTH` bigint(21) default NULL,
  `NUMERIC_PRECISION` bigint(21) default NULL,
  `NUMERIC_SCALE` bigint(21) default NULL,
  `CHARACTER_SET_NAME` varchar(64) default NULL,
  `COLLATION_NAME` varchar(64) default NULL,
  `COLUMN_TYPE` longtext NOT NULL,
  `COLUMN_KEY` varchar(3) NOT NULL default '',
  `EXTRA` varchar(20) NOT NULL default '',
  `PRIVILEGES` varchar(80) NOT NULL default '',
  `COLUMN_COMMENT` varchar(255) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `COLUMNS`
-- 

INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'CHARACTER_SETS', 'CHARACTER_SET_NAME', 1, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'CHARACTER_SETS', 'DEFAULT_COLLATE_NAME', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'CHARACTER_SETS', 'DESCRIPTION', 3, '', 'NO', 'varchar', 60, 180, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(60)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'CHARACTER_SETS', 'MAXLEN', 4, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLLATIONS', 'COLLATION_NAME', 1, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLLATIONS', 'CHARACTER_SET_NAME', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLLATIONS', 'ID', 3, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(11)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLLATIONS', 'IS_DEFAULT', 4, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLLATIONS', 'IS_COMPILED', 5, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLLATIONS', 'SORTLEN', 6, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLLATION_CHARACTER_SET_APPLICABILITY', 'COLLATION_NAME', 1, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLLATION_CHARACTER_SET_APPLICABILITY', 'CHARACTER_SET_NAME', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'TABLE_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'TABLE_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'TABLE_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'COLUMN_NAME', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'ORDINAL_POSITION', 5, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'COLUMN_DEFAULT', 6, NULL, 'YES', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'IS_NULLABLE', 7, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'DATA_TYPE', 8, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'CHARACTER_MAXIMUM_LENGTH', 9, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'CHARACTER_OCTET_LENGTH', 10, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'NUMERIC_PRECISION', 11, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'NUMERIC_SCALE', 12, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'CHARACTER_SET_NAME', 13, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'COLLATION_NAME', 14, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'COLUMN_TYPE', 15, NULL, 'NO', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'COLUMN_KEY', 16, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'EXTRA', 17, '', 'NO', 'varchar', 20, 60, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(20)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'PRIVILEGES', 18, '', 'NO', 'varchar', 80, 240, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(80)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMNS', 'COLUMN_COMMENT', 19, '', 'NO', 'varchar', 255, 765, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(255)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'GRANTEE', 1, '', 'NO', 'varchar', 81, 243, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(81)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'TABLE_CATALOG', 2, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'TABLE_SCHEMA', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'TABLE_NAME', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'COLUMN_NAME', 5, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'PRIVILEGE_TYPE', 6, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'IS_GRANTABLE', 7, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'CONSTRAINT_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'CONSTRAINT_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'CONSTRAINT_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'TABLE_CATALOG', 4, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'TABLE_SCHEMA', 5, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'TABLE_NAME', 6, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'COLUMN_NAME', 7, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'ORDINAL_POSITION', 8, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(10)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'POSITION_IN_UNIQUE_CONSTRAINT', 9, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(10)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'REFERENCED_TABLE_SCHEMA', 10, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'REFERENCED_TABLE_NAME', 11, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'REFERENCED_COLUMN_NAME', 12, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'SPECIFIC_NAME', 1, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'ROUTINE_CATALOG', 2, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'ROUTINE_SCHEMA', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'ROUTINE_NAME', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'ROUTINE_TYPE', 5, '', 'NO', 'varchar', 9, 27, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(9)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'DTD_IDENTIFIER', 6, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'ROUTINE_BODY', 7, '', 'NO', 'varchar', 8, 24, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(8)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'ROUTINE_DEFINITION', 8, NULL, 'YES', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'EXTERNAL_NAME', 9, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'EXTERNAL_LANGUAGE', 10, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'PARAMETER_STYLE', 11, '', 'NO', 'varchar', 8, 24, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(8)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'IS_DETERMINISTIC', 12, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'SQL_DATA_ACCESS', 13, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'SQL_PATH', 14, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'SECURITY_TYPE', 15, '', 'NO', 'varchar', 7, 21, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(7)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'CREATED', 16, '0000-00-00 00:00:00', 'NO', 'datetime', NULL, NULL, NULL, NULL, NULL, NULL, 'datetime', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'LAST_ALTERED', 17, '0000-00-00 00:00:00', 'NO', 'datetime', NULL, NULL, NULL, NULL, NULL, NULL, 'datetime', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'SQL_MODE', 18, NULL, 'NO', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'ROUTINE_COMMENT', 19, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'ROUTINES', 'DEFINER', 20, '', 'NO', 'varchar', 77, 231, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(77)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'SCHEMATA', 'CATALOG_NAME', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'SCHEMATA', 'SCHEMA_NAME', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'SCHEMATA', 'DEFAULT_CHARACTER_SET_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'SCHEMATA', 'DEFAULT_COLLATION_NAME', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'SCHEMATA', 'SQL_PATH', 5, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'SCHEMA_PRIVILEGES', 'GRANTEE', 1, '', 'NO', 'varchar', 81, 243, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(81)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'SCHEMA_PRIVILEGES', 'TABLE_CATALOG', 2, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'SCHEMA_PRIVILEGES', 'TABLE_SCHEMA', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'SCHEMA_PRIVILEGES', 'PRIVILEGE_TYPE', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'SCHEMA_PRIVILEGES', 'IS_GRANTABLE', 5, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'TABLE_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'TABLE_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'TABLE_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'NON_UNIQUE', 4, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(1)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'INDEX_SCHEMA', 5, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'INDEX_NAME', 6, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'SEQ_IN_INDEX', 7, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(2)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'COLUMN_NAME', 8, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'COLLATION', 9, NULL, 'YES', 'varchar', 1, 3, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(1)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'CARDINALITY', 10, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'SUB_PART', 11, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'PACKED', 12, NULL, 'YES', 'varchar', 10, 30, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(10)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'NULLABLE', 13, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'INDEX_TYPE', 14, '', 'NO', 'varchar', 16, 48, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(16)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'STATISTICS', 'COMMENT', 15, NULL, 'YES', 'varchar', 16, 48, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(16)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'TABLE_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'TABLE_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'TABLE_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'TABLE_TYPE', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'ENGINE', 5, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'VERSION', 6, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'ROW_FORMAT', 7, NULL, 'YES', 'varchar', 10, 30, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(10)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'TABLE_ROWS', 8, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'AVG_ROW_LENGTH', 9, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'DATA_LENGTH', 10, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'MAX_DATA_LENGTH', 11, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'INDEX_LENGTH', 12, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'DATA_FREE', 13, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'AUTO_INCREMENT', 14, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'CREATE_TIME', 15, NULL, 'YES', 'datetime', NULL, NULL, NULL, NULL, NULL, NULL, 'datetime', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'UPDATE_TIME', 16, NULL, 'YES', 'datetime', NULL, NULL, NULL, NULL, NULL, NULL, 'datetime', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'CHECK_TIME', 17, NULL, 'YES', 'datetime', NULL, NULL, NULL, NULL, NULL, NULL, 'datetime', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'TABLE_COLLATION', 18, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'CHECKSUM', 19, NULL, 'YES', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(21)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'CREATE_OPTIONS', 20, NULL, 'YES', 'varchar', 255, 765, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(255)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLES', 'TABLE_COMMENT', 21, '', 'NO', 'varchar', 80, 240, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(80)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'CONSTRAINT_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'CONSTRAINT_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'CONSTRAINT_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'TABLE_SCHEMA', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'TABLE_NAME', 5, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'CONSTRAINT_TYPE', 6, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLE_PRIVILEGES', 'GRANTEE', 1, '', 'NO', 'varchar', 81, 243, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(81)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLE_PRIVILEGES', 'TABLE_CATALOG', 2, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLE_PRIVILEGES', 'TABLE_SCHEMA', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLE_PRIVILEGES', 'TABLE_NAME', 4, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLE_PRIVILEGES', 'PRIVILEGE_TYPE', 5, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TABLE_PRIVILEGES', 'IS_GRANTABLE', 6, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'TRIGGER_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'TRIGGER_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'TRIGGER_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'EVENT_MANIPULATION', 4, '', 'NO', 'varchar', 6, 18, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(6)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'EVENT_OBJECT_CATALOG', 5, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'EVENT_OBJECT_SCHEMA', 6, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'EVENT_OBJECT_TABLE', 7, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'ACTION_ORDER', 8, '0', 'NO', 'bigint', NULL, NULL, 19, 0, NULL, NULL, 'bigint(4)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'ACTION_CONDITION', 9, NULL, 'YES', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'ACTION_STATEMENT', 10, NULL, 'NO', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'ACTION_ORIENTATION', 11, '', 'NO', 'varchar', 9, 27, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(9)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'ACTION_TIMING', 12, '', 'NO', 'varchar', 6, 18, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(6)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'ACTION_REFERENCE_OLD_TABLE', 13, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'ACTION_REFERENCE_NEW_TABLE', 14, NULL, 'YES', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'ACTION_REFERENCE_OLD_ROW', 15, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'ACTION_REFERENCE_NEW_ROW', 16, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'CREATED', 17, NULL, 'YES', 'datetime', NULL, NULL, NULL, NULL, NULL, NULL, 'datetime', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'SQL_MODE', 18, NULL, 'NO', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'TRIGGERS', 'DEFINER', 19, NULL, 'NO', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'USER_PRIVILEGES', 'GRANTEE', 1, '', 'NO', 'varchar', 81, 243, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(81)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'USER_PRIVILEGES', 'TABLE_CATALOG', 2, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'USER_PRIVILEGES', 'PRIVILEGE_TYPE', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'USER_PRIVILEGES', 'IS_GRANTABLE', 4, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'VIEWS', 'TABLE_CATALOG', 1, NULL, 'YES', 'varchar', 512, 1536, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(512)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'VIEWS', 'TABLE_SCHEMA', 2, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'VIEWS', 'TABLE_NAME', 3, '', 'NO', 'varchar', 64, 192, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(64)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'VIEWS', 'VIEW_DEFINITION', 4, NULL, 'NO', 'longtext', 4294967295, 4294967295, NULL, NULL, 'utf8', 'utf8_general_ci', 'longtext', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'VIEWS', 'CHECK_OPTION', 5, '', 'NO', 'varchar', 8, 24, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(8)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'VIEWS', 'IS_UPDATABLE', 6, '', 'NO', 'varchar', 3, 9, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(3)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'VIEWS', 'DEFINER', 7, '', 'NO', 'varchar', 77, 231, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(77)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'information_schema', 'VIEWS', 'SECURITY_TYPE', 8, '', 'NO', 'varchar', 7, 21, NULL, NULL, 'utf8', 'utf8_general_ci', 'varchar(7)', '', '', 'select', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'id_translation', 'id_text', 1, NULL, 'NO', 'varchar', 30, 30, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(30)', 'PRI', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'id_translation', 'polish', 2, NULL, 'YES', 'varchar', 150, 150, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(150)', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'id_translation', 'french', 3, NULL, 'YES', 'varchar', 150, 150, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(150)', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'id_translation', 'english', 4, NULL, 'YES', 'varchar', 150, 150, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(150)', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'planning', 'numorder', 1, '', 'NO', 'varchar', 16, 16, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(16)', 'PRI', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'planning', 'reference', 2, NULL, 'YES', 'varchar', 80, 80, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(80)', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'planning', 'customer', 3, NULL, 'YES', 'varchar', 80, 80, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(80)', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'planning', 'dateorder', 4, NULL, 'YES', 'date', NULL, NULL, NULL, NULL, NULL, NULL, 'date', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'planning', 'dateproduction', 5, NULL, 'YES', 'date', NULL, NULL, NULL, NULL, NULL, NULL, 'date', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'planning', 'datedelivery', 6, NULL, 'YES', 'date', NULL, NULL, NULL, NULL, NULL, NULL, 'date', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'planning', 'productionlength', 7, NULL, 'YES', 'float', NULL, NULL, 8, 2, NULL, NULL, 'float(8,2)', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'planning', 'deliveryinstruction', 8, NULL, 'YES', 'mediumtext', 16777215, 16777215, NULL, NULL, 'latin2', 'latin2_general_ci', 'mediumtext', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'sessions', 'id_session', 1, '', 'NO', 'varchar', 40, 40, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(40)', 'PRI', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'sessions', 'login', 2, '', 'NO', 'varchar', 10, 10, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(10)', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'sessions', 'temps_limite', 3, '0', 'NO', 'decimal', NULL, NULL, 10, 0, NULL, NULL, 'decimal(10,0)', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'settings', 'section', 1, '', 'NO', 'varchar', 40, 40, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(40)', 'PRI', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'settings', 'sectionkey', 2, '', 'NO', 'varchar', 60, 60, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(60)', 'PRI', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'settings', 'i', 3, '0', 'YES', 'int', NULL, NULL, 10, 0, NULL, NULL, 'int(11) unsigned', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'settings', 'c', 4, '', 'YES', 'varchar', 45, 45, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(45)', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'user', 'user', 1, NULL, 'NO', 'varchar', 30, 30, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(30)', 'PRI', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'user', 'customer', 2, NULL, 'NO', 'varchar', 80, 80, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(80)', 'PRI', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'user', 'type', 3, '1', 'NO', 'tinyint', NULL, NULL, 3, 0, NULL, NULL, 'tinyint(4)', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'user', 'language', 4, '', 'YES', 'varchar', 25, 25, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(25)', '', '', 'select,insert,update,references', '');
INSERT INTO `COLUMNS` VALUES (NULL, 'winpro2', 'user', 'password', 5, NULL, 'NO', 'varchar', 100, 100, NULL, NULL, 'latin2', 'latin2_general_ci', 'varchar(100)', '', '', 'select,insert,update,references', '');

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `COLUMN_PRIVILEGES`
-- 

CREATE TEMPORARY TABLE `COLUMN_PRIVILEGES` (
  `GRANTEE` varchar(81) NOT NULL default '',
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `COLUMN_NAME` varchar(64) NOT NULL default '',
  `PRIVILEGE_TYPE` varchar(64) NOT NULL default '',
  `IS_GRANTABLE` varchar(3) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `COLUMN_PRIVILEGES`
-- 


-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `KEY_COLUMN_USAGE`
-- 

CREATE TEMPORARY TABLE `KEY_COLUMN_USAGE` (
  `CONSTRAINT_CATALOG` varchar(512) default NULL,
  `CONSTRAINT_SCHEMA` varchar(64) NOT NULL default '',
  `CONSTRAINT_NAME` varchar(64) NOT NULL default '',
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `COLUMN_NAME` varchar(64) NOT NULL default '',
  `ORDINAL_POSITION` bigint(10) NOT NULL default '0',
  `POSITION_IN_UNIQUE_CONSTRAINT` bigint(10) default NULL,
  `REFERENCED_TABLE_SCHEMA` varchar(64) default NULL,
  `REFERENCED_TABLE_NAME` varchar(64) default NULL,
  `REFERENCED_COLUMN_NAME` varchar(64) default NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `KEY_COLUMN_USAGE`
-- 

INSERT INTO `KEY_COLUMN_USAGE` VALUES (NULL, 'winpro2', 'PRIMARY', NULL, 'winpro2', 'id_translation', 'id_text', 1, NULL, NULL, NULL, NULL);
INSERT INTO `KEY_COLUMN_USAGE` VALUES (NULL, 'winpro2', 'PRIMARY', NULL, 'winpro2', 'planning', 'numorder', 1, NULL, NULL, NULL, NULL);
INSERT INTO `KEY_COLUMN_USAGE` VALUES (NULL, 'winpro2', 'PRIMARY', NULL, 'winpro2', 'sessions', 'id_session', 1, NULL, NULL, NULL, NULL);
INSERT INTO `KEY_COLUMN_USAGE` VALUES (NULL, 'winpro2', 'PRIMARY', NULL, 'winpro2', 'settings', 'section', 1, NULL, NULL, NULL, NULL);
INSERT INTO `KEY_COLUMN_USAGE` VALUES (NULL, 'winpro2', 'PRIMARY', NULL, 'winpro2', 'settings', 'sectionkey', 2, NULL, NULL, NULL, NULL);
INSERT INTO `KEY_COLUMN_USAGE` VALUES (NULL, 'winpro2', 'PRIMARY', NULL, 'winpro2', 'user', 'user', 1, NULL, NULL, NULL, NULL);
INSERT INTO `KEY_COLUMN_USAGE` VALUES (NULL, 'winpro2', 'PRIMARY', NULL, 'winpro2', 'user', 'customer', 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `ROUTINES`
-- 

CREATE TEMPORARY TABLE `ROUTINES` (
  `SPECIFIC_NAME` varchar(64) NOT NULL default '',
  `ROUTINE_CATALOG` varchar(512) default NULL,
  `ROUTINE_SCHEMA` varchar(64) NOT NULL default '',
  `ROUTINE_NAME` varchar(64) NOT NULL default '',
  `ROUTINE_TYPE` varchar(9) NOT NULL default '',
  `DTD_IDENTIFIER` varchar(64) default NULL,
  `ROUTINE_BODY` varchar(8) NOT NULL default '',
  `ROUTINE_DEFINITION` longtext,
  `EXTERNAL_NAME` varchar(64) default NULL,
  `EXTERNAL_LANGUAGE` varchar(64) default NULL,
  `PARAMETER_STYLE` varchar(8) NOT NULL default '',
  `IS_DETERMINISTIC` varchar(3) NOT NULL default '',
  `SQL_DATA_ACCESS` varchar(64) NOT NULL default '',
  `SQL_PATH` varchar(64) default NULL,
  `SECURITY_TYPE` varchar(7) NOT NULL default '',
  `CREATED` datetime NOT NULL default '0000-00-00 00:00:00',
  `LAST_ALTERED` datetime NOT NULL default '0000-00-00 00:00:00',
  `SQL_MODE` longtext NOT NULL,
  `ROUTINE_COMMENT` varchar(64) NOT NULL default '',
  `DEFINER` varchar(77) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `ROUTINES`
-- 


-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `SCHEMATA`
-- 

CREATE TEMPORARY TABLE `SCHEMATA` (
  `CATALOG_NAME` varchar(512) default NULL,
  `SCHEMA_NAME` varchar(64) NOT NULL default '',
  `DEFAULT_CHARACTER_SET_NAME` varchar(64) NOT NULL default '',
  `DEFAULT_COLLATION_NAME` varchar(64) NOT NULL default '',
  `SQL_PATH` varchar(512) default NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `SCHEMATA`
-- 

INSERT INTO `SCHEMATA` VALUES (NULL, 'information_schema', 'utf8', 'utf8_general_ci', NULL);
INSERT INTO `SCHEMATA` VALUES (NULL, 'winpro2', 'latin2', 'latin2_general_ci', NULL);

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `SCHEMA_PRIVILEGES`
-- 

CREATE TEMPORARY TABLE `SCHEMA_PRIVILEGES` (
  `GRANTEE` varchar(81) NOT NULL default '',
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `PRIVILEGE_TYPE` varchar(64) NOT NULL default '',
  `IS_GRANTABLE` varchar(3) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `SCHEMA_PRIVILEGES`
-- 

INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'SELECT', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'INSERT', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'UPDATE', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'DELETE', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'CREATE', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'DROP', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'REFERENCES', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'INDEX', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'ALTER', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'CREATE TEMPORARY TABLES', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'LOCK TABLES', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'EXECUTE', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'CREATE VIEW', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'SHOW VIEW', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'CREATE ROUTINE', 'NO');
INSERT INTO `SCHEMA_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'winpro2', 'ALTER ROUTINE', 'NO');

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `STATISTICS`
-- 

CREATE TEMPORARY TABLE `STATISTICS` (
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `NON_UNIQUE` bigint(1) NOT NULL default '0',
  `INDEX_SCHEMA` varchar(64) NOT NULL default '',
  `INDEX_NAME` varchar(64) NOT NULL default '',
  `SEQ_IN_INDEX` bigint(2) NOT NULL default '0',
  `COLUMN_NAME` varchar(64) NOT NULL default '',
  `COLLATION` varchar(1) default NULL,
  `CARDINALITY` bigint(21) default NULL,
  `SUB_PART` bigint(3) default NULL,
  `PACKED` varchar(10) default NULL,
  `NULLABLE` varchar(3) NOT NULL default '',
  `INDEX_TYPE` varchar(16) NOT NULL default '',
  `COMMENT` varchar(16) default NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `STATISTICS`
-- 

INSERT INTO `STATISTICS` VALUES (NULL, 'winpro2', 'id_translation', 0, 'winpro2', 'PRIMARY', 1, 'id_text', 'A', 68, NULL, NULL, '', 'BTREE', '');
INSERT INTO `STATISTICS` VALUES (NULL, 'winpro2', 'planning', 0, 'winpro2', 'PRIMARY', 1, 'numorder', 'A', 122, NULL, NULL, '', 'BTREE', '');
INSERT INTO `STATISTICS` VALUES (NULL, 'winpro2', 'sessions', 0, 'winpro2', 'PRIMARY', 1, 'id_session', 'A', 78, NULL, NULL, '', 'BTREE', '');
INSERT INTO `STATISTICS` VALUES (NULL, 'winpro2', 'settings', 0, 'winpro2', 'PRIMARY', 1, 'section', 'A', 4, NULL, NULL, '', 'BTREE', '');
INSERT INTO `STATISTICS` VALUES (NULL, 'winpro2', 'settings', 0, 'winpro2', 'PRIMARY', 2, 'sectionkey', 'A', 8, NULL, NULL, '', 'BTREE', '');
INSERT INTO `STATISTICS` VALUES (NULL, 'winpro2', 'user', 0, 'winpro2', 'PRIMARY', 1, 'user', 'A', 3, NULL, NULL, '', 'BTREE', '');
INSERT INTO `STATISTICS` VALUES (NULL, 'winpro2', 'user', 0, 'winpro2', 'PRIMARY', 2, 'customer', 'A', 3, NULL, NULL, '', 'BTREE', '');

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `TABLES`
-- 

CREATE TEMPORARY TABLE `TABLES` (
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `TABLE_TYPE` varchar(64) NOT NULL default '',
  `ENGINE` varchar(64) default NULL,
  `VERSION` bigint(21) default NULL,
  `ROW_FORMAT` varchar(10) default NULL,
  `TABLE_ROWS` bigint(21) default NULL,
  `AVG_ROW_LENGTH` bigint(21) default NULL,
  `DATA_LENGTH` bigint(21) default NULL,
  `MAX_DATA_LENGTH` bigint(21) default NULL,
  `INDEX_LENGTH` bigint(21) default NULL,
  `DATA_FREE` bigint(21) default NULL,
  `AUTO_INCREMENT` bigint(21) default NULL,
  `CREATE_TIME` datetime default NULL,
  `UPDATE_TIME` datetime default NULL,
  `CHECK_TIME` datetime default NULL,
  `TABLE_COLLATION` varchar(64) default NULL,
  `CHECKSUM` bigint(21) default NULL,
  `CREATE_OPTIONS` varchar(255) default NULL,
  `TABLE_COMMENT` varchar(80) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `TABLES`
-- 

INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'CHARACTER_SETS', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 576, 0, 16661376, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=29127', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'COLLATIONS', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 423, 0, 16737264, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=39662', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'COLLATION_CHARACTER_SET_APPLICABILITY', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 387, 0, 16733880, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=43351', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'COLUMNS', 'SYSTEM VIEW', 'MyISAM', 0, 'Dynamic', NULL, 0, 0, 281474976710655, 1024, 0, NULL, '2010-02-05 20:16:51', '2010-02-05 20:16:51', NULL, 'utf8_general_ci', NULL, 'max_rows=17430', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'COLUMN_PRIVILEGES', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 2565, 0, 16757145, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=6540', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'KEY_COLUMN_USAGE', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 4637, 0, 16762755, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=3618', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'ROUTINES', 'SYSTEM VIEW', 'MyISAM', 0, 'Dynamic', NULL, 0, 0, 281474976710655, 1024, 0, NULL, '2010-02-05 20:16:51', '2010-02-05 20:16:51', NULL, 'utf8_general_ci', NULL, 'max_rows=18345', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'SCHEMATA', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 3656, 0, 16755448, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=4588', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'SCHEMA_PRIVILEGES', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 2179, 0, 16767405, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=7699', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'STATISTICS', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 2679, 0, 16770540, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=6262', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'TABLES', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 3641, 0, 16763164, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=4607', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'TABLE_CONSTRAINTS', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 2504, 0, 16749256, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=6700', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'TABLE_PRIVILEGES', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 2372, 0, 16748692, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=7073', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'TRIGGERS', 'SYSTEM VIEW', 'MyISAM', 0, 'Dynamic', NULL, 0, 0, 281474976710655, 1024, 0, NULL, '2010-02-05 20:16:51', '2010-02-05 20:16:51', NULL, 'utf8_general_ci', NULL, 'max_rows=15304', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'USER_PRIVILEGES', 'SYSTEM VIEW', 'MEMORY', 0, 'Fixed', NULL, 1986, 0, 16759854, 0, 0, NULL, NULL, NULL, NULL, 'utf8_general_ci', NULL, 'max_rows=8447', '');
INSERT INTO `TABLES` VALUES (NULL, 'information_schema', 'VIEWS', 'SYSTEM VIEW', 'MyISAM', 0, 'Dynamic', NULL, 0, 0, 281474976710655, 1024, 0, NULL, '2010-02-05 20:16:51', '2010-02-05 20:16:51', NULL, 'utf8_general_ci', NULL, 'max_rows=30147', '');
INSERT INTO `TABLES` VALUES (NULL, 'winpro2', 'id_translation', 'BASE TABLE', 'MyISAM', 10, 'Dynamic', 68, 53, 3616, 281474976710655, 2048, 0, NULL, '2007-11-30 20:54:11', '2009-10-27 19:35:57', '2008-10-09 00:16:39', 'latin2_general_ci', NULL, '', '');
INSERT INTO `TABLES` VALUES (NULL, 'winpro2', 'planning', 'BASE TABLE', 'MyISAM', 10, 'Dynamic', 122, 46, 5704, 281474976710655, 4096, 0, NULL, '2007-11-30 20:54:11', '2010-01-13 13:12:34', '2008-10-09 00:16:39', 'latin2_general_ci', NULL, '', '');
INSERT INTO `TABLES` VALUES (NULL, 'winpro2', 'sessions', 'BASE TABLE', 'MyISAM', 10, 'Dynamic', 78, 52, 4056, 281474976710655, 6144, 0, NULL, '2007-11-30 20:54:11', '2010-01-13 13:04:27', '2008-10-09 00:16:39', 'latin2_general_ci', NULL, '', '');
INSERT INTO `TABLES` VALUES (NULL, 'winpro2', 'settings', 'BASE TABLE', 'MyISAM', 10, 'Dynamic', 8, 29, 232, 281474976710655, 2048, 0, NULL, '2007-11-30 20:54:11', '2007-12-09 03:15:09', '2008-10-09 00:16:39', 'latin2_general_ci', NULL, '', '');
INSERT INTO `TABLES` VALUES (NULL, 'winpro2', 'user', 'BASE TABLE', 'MyISAM', 10, 'Dynamic', 3, 60, 180, 281474976710655, 2048, 0, NULL, '2007-11-30 20:54:11', '2007-11-30 20:56:46', '2008-10-09 00:16:39', 'latin2_general_ci', NULL, '', '');

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `TABLE_CONSTRAINTS`
-- 

CREATE TEMPORARY TABLE `TABLE_CONSTRAINTS` (
  `CONSTRAINT_CATALOG` varchar(512) default NULL,
  `CONSTRAINT_SCHEMA` varchar(64) NOT NULL default '',
  `CONSTRAINT_NAME` varchar(64) NOT NULL default '',
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `CONSTRAINT_TYPE` varchar(64) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `TABLE_CONSTRAINTS`
-- 

INSERT INTO `TABLE_CONSTRAINTS` VALUES (NULL, 'winpro2', 'PRIMARY', 'winpro2', 'id_translation', 'PRIMARY KEY');
INSERT INTO `TABLE_CONSTRAINTS` VALUES (NULL, 'winpro2', 'PRIMARY', 'winpro2', 'planning', 'PRIMARY KEY');
INSERT INTO `TABLE_CONSTRAINTS` VALUES (NULL, 'winpro2', 'PRIMARY', 'winpro2', 'sessions', 'PRIMARY KEY');
INSERT INTO `TABLE_CONSTRAINTS` VALUES (NULL, 'winpro2', 'PRIMARY', 'winpro2', 'settings', 'PRIMARY KEY');
INSERT INTO `TABLE_CONSTRAINTS` VALUES (NULL, 'winpro2', 'PRIMARY', 'winpro2', 'user', 'PRIMARY KEY');

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `TABLE_PRIVILEGES`
-- 

CREATE TEMPORARY TABLE `TABLE_PRIVILEGES` (
  `GRANTEE` varchar(81) NOT NULL default '',
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `PRIVILEGE_TYPE` varchar(64) NOT NULL default '',
  `IS_GRANTABLE` varchar(3) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `TABLE_PRIVILEGES`
-- 


-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `TRIGGERS`
-- 

CREATE TEMPORARY TABLE `TRIGGERS` (
  `TRIGGER_CATALOG` varchar(512) default NULL,
  `TRIGGER_SCHEMA` varchar(64) NOT NULL default '',
  `TRIGGER_NAME` varchar(64) NOT NULL default '',
  `EVENT_MANIPULATION` varchar(6) NOT NULL default '',
  `EVENT_OBJECT_CATALOG` varchar(512) default NULL,
  `EVENT_OBJECT_SCHEMA` varchar(64) NOT NULL default '',
  `EVENT_OBJECT_TABLE` varchar(64) NOT NULL default '',
  `ACTION_ORDER` bigint(4) NOT NULL default '0',
  `ACTION_CONDITION` longtext,
  `ACTION_STATEMENT` longtext NOT NULL,
  `ACTION_ORIENTATION` varchar(9) NOT NULL default '',
  `ACTION_TIMING` varchar(6) NOT NULL default '',
  `ACTION_REFERENCE_OLD_TABLE` varchar(64) default NULL,
  `ACTION_REFERENCE_NEW_TABLE` varchar(64) default NULL,
  `ACTION_REFERENCE_OLD_ROW` varchar(3) NOT NULL default '',
  `ACTION_REFERENCE_NEW_ROW` varchar(3) NOT NULL default '',
  `CREATED` datetime default NULL,
  `SQL_MODE` longtext NOT NULL,
  `DEFINER` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `TRIGGERS`
-- 


-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `USER_PRIVILEGES`
-- 

CREATE TEMPORARY TABLE `USER_PRIVILEGES` (
  `GRANTEE` varchar(81) NOT NULL default '',
  `TABLE_CATALOG` varchar(512) default NULL,
  `PRIVILEGE_TYPE` varchar(64) NOT NULL default '',
  `IS_GRANTABLE` varchar(3) NOT NULL default ''
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `USER_PRIVILEGES`
-- 

INSERT INTO `USER_PRIVILEGES` VALUES ('''winpro2''@''%''', NULL, 'USAGE', 'NO');

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `VIEWS`
-- 

CREATE TEMPORARY TABLE `VIEWS` (
  `TABLE_CATALOG` varchar(512) default NULL,
  `TABLE_SCHEMA` varchar(64) NOT NULL default '',
  `TABLE_NAME` varchar(64) NOT NULL default '',
  `VIEW_DEFINITION` longtext NOT NULL,
  `CHECK_OPTION` varchar(8) NOT NULL default '',
  `IS_UPDATABLE` varchar(3) NOT NULL default '',
  `DEFINER` varchar(77) NOT NULL default '',
  `SECURITY_TYPE` varchar(7) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Zrzut danych tabeli `VIEWS`
-- 

