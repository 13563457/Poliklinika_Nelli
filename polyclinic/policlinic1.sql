-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 25 2024 г., 09:28
-- Версия сервера: 5.7.39
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `policlinic1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ambulator`
--

CREATE TABLE `ambulator` (
  `nomer` int(11) NOT NULL,
  `fio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_roj` date NOT NULL,
  `pol` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasport` int(11) NOT NULL,
  `polis` int(11) NOT NULL,
  `adres` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephon` int(11) NOT NULL,
  `gruppa` int(11) NOT NULL,
  `protiv` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ambulator`
--

INSERT INTO `ambulator` (`nomer`, `fio`, `date_roj`, `pol`, `pasport`, `polis`, `adres`, `telephon`, `gruppa`, `protiv`) VALUES
(1, 'Иванов  Пётр Сергеевич', '2014-03-05', 'м', 3356765, 3456, 'Красная 75', 892835452, 3, 'нет');

-- --------------------------------------------------------

--
-- Структура таблицы `doctor`
--

CREATE TABLE `doctor` (
  `id_doctor` int(11) NOT NULL,
  `name_doctor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kvalific` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciaization` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `doctor`
--

INSERT INTO `doctor` (`id_doctor`, `name_doctor`, `adress`, `kvalific`, `speciaization`) VALUES
(1, 'Иванов Виталий Андреевич', 'Москва', 'Средняя', 'Невролог'),
(2, 'Попова Алина Олеговна', 'Москва', 'Высшая', 'Терапевт'),
(3, 'Иванова Ольга Константиновна', 'Зелееноград', 'Высшая', 'Травмотолог'),
(4, 'Друщиц Виталий Семенович', 'Москва', 'Средняя', 'Хирург'),
(5, 'Воронин Кирилл Константинович', 'Москва', 'Высшая', 'Кардиолог'),
(6, 'Седорчук Светлана Ивановна', 'Санкт-Петербург', 'Высшая', 'Хирург');

-- --------------------------------------------------------

--
-- Структура таблицы `kart`
--

CREATE TABLE `kart` (
  `id_kart` int(11) NOT NULL,
  `fio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_roj` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pol` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasport` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `polis` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adres` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephon` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gruppa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `protiv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `kart`
--

INSERT INTO `kart` (`id_kart`, `fio`, `date_roj`, `pol`, `pasport`, `polis`, `adres`, `telephon`, `gruppa`, `protiv`) VALUES
(1, 'Терентьев Марк Ярославович', '757', 'м', '65755', '3876', 'гриат', '890045643', '3', 'нет'),
(2, '$fio', '$date_roj', '$pol', '$pasport', '$polis', '$adres', '$telephon', '$gruppa', '$protiv');

-- --------------------------------------------------------

--
-- Структура таблицы `lechenie`
--

CREATE TABLE `lechenie` (
  `id_lechenie` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `name_lechenie` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` date NOT NULL,
  `period` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lechenie`
--

INSERT INTO `lechenie` (`id_lechenie`, `id_doctor`, `id_patient`, `name_lechenie`, `date_start`, `period`) VALUES
(1, 6, 1, 'Операция', '2023-03-29', '16 дней'),
(2, 1, 3, 'Воспаление легких', '2023-05-24', '20 дней'),
(3, 3, 7, 'Герпес', '2023-02-24', '9 дней'),
(4, 5, 5, 'Невроз', '2023-12-06', '14 дней'),
(5, 2, 4, 'Крапивница', '2023-10-01', '30 дней'),
(6, 4, 2, 'Крапивница', '2023-10-02', '30 дней');

-- --------------------------------------------------------

--
-- Структура таблицы `patient`
--

CREATE TABLE `patient` (
  `id_patient` int(11) NOT NULL,
  `name_patient` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soc_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sem_pol` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_birth` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `patient`
--

INSERT INTO `patient` (`id_patient`, `name_patient`, `adress`, `soc_status`, `sem_pol`, `year_of_birth`) VALUES
(1, 'Иванов Иван Иванович', 'Краснодар', 'Инжинер', 'холост', 2000),
(2, 'Петров Петр Николаевич', 'Минск', 'Студент', 'холост', 1997),
(3, 'Виленкова Анна Олеговна', 'Москва', 'Студентка', 'не замужем', 1999),
(4, 'Ионова Кристина Николаевна', 'Москва', 'Парехмахер', 'не замужем', 2000),
(5, 'Шкляр Семен Александрович', 'Пермь', 'Механик', 'женат', 1991),
(6, 'Котова Ирина Романова', 'Зеленоград', 'бугалтер', 'жената', 1993),
(7, 'Бойко Константин Леонидович', 'Зеленоград', 'Инжинер', 'холост', 1999);

-- --------------------------------------------------------

--
-- Структура таблицы `tal`
--

CREATE TABLE `tal` (
  `id_patient` int(11) NOT NULL,
  `spec` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fio` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vremya` time(6) NOT NULL,
  `nomer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tal`
--

INSERT INTO `tal` (`id_patient`, `spec`, `fio`, `vremya`, `nomer`) VALUES
(1, 'педиатр', 'Иванов  Пётр Сергеевич', '09:41:02.000000', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `name`, `family`, `login`, `password`, `role`) VALUES
(1, 'Виктория', 'Шевчук', 'vika', 'vika1', 1),
(2, 'Нелли', 'Бархович', 'nelly', 'nelly2', 2),
(3, 'Александра', 'Петрова', 'sasha', 'sasha3', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `uslugi`
--

CREATE TABLE `uslugi` (
  `id_uslugi` int(11) NOT NULL,
  `img` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_uslugi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vrach` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `uslugi`
--

INSERT INTO `uslugi` (`id_uslugi`, `img`, `name_uslugi`, `vrach`) VALUES
(1, '1.png', 'терапевтические', 'терапевт , аллерголог, гастроэнтеролог, кардиолог, иммунолог , инфекционист.'),
(2, '2.png', 'хирургические', 'хирург, уролог, травматолог ,офтальмолог, оториноларинголог , сердечно-сосудистый.'),
(3, '3.png', 'неврологические', 'невролог, нарколог, психиатр.'),
(4, '4.png', 'педиатрия', 'педиатр , невролог детский , аллерголог - иммунолог ,  эндокринолог .');

-- --------------------------------------------------------

--
-- Структура таблицы `zapis`
--

CREATE TABLE `zapis` (
  `id_zapis` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `fio` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ambulator`
--
ALTER TABLE `ambulator`
  ADD UNIQUE KEY `id_nomer` (`nomer`);

--
-- Индексы таблицы `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id_doctor`);

--
-- Индексы таблицы `kart`
--
ALTER TABLE `kart`
  ADD PRIMARY KEY (`id_kart`);

--
-- Индексы таблицы `lechenie`
--
ALTER TABLE `lechenie`
  ADD PRIMARY KEY (`id_lechenie`),
  ADD KEY `id_doctor` (`id_doctor`),
  ADD KEY `id_patient` (`id_patient`);

--
-- Индексы таблицы `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_patient`);

--
-- Индексы таблицы `tal`
--
ALTER TABLE `tal`
  ADD PRIMARY KEY (`id_patient`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id_uslugi`);

--
-- Индексы таблицы `zapis`
--
ALTER TABLE `zapis`
  ADD PRIMARY KEY (`id_zapis`),
  ADD KEY `id_doctor` (`id_doctor`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id_doctor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `kart`
--
ALTER TABLE `kart`
  MODIFY `id_kart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `lechenie`
--
ALTER TABLE `lechenie`
  MODIFY `id_lechenie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `patient`
--
ALTER TABLE `patient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `tal`
--
ALTER TABLE `tal`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id_uslugi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `zapis`
--
ALTER TABLE `zapis`
  MODIFY `id_zapis` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `lechenie`
--
ALTER TABLE `lechenie`
  ADD CONSTRAINT `lechenie_ibfk_1` FOREIGN KEY (`id_doctor`) REFERENCES `doctor` (`id_doctor`),
  ADD CONSTRAINT `lechenie_ibfk_2` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`);

--
-- Ограничения внешнего ключа таблицы `zapis`
--
ALTER TABLE `zapis`
  ADD CONSTRAINT `zapis_ibfk_1` FOREIGN KEY (`id_doctor`) REFERENCES `doctor` (`id_doctor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
