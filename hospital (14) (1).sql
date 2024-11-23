-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 23 2024 г., 19:38
-- Версия сервера: 5.7.39
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hospital`
--

-- --------------------------------------------------------

--
-- Структура таблицы `card`
--

CREATE TABLE `card` (
  `id_card` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `policy` varchar(16) NOT NULL,
  `dateBirth` date NOT NULL,
  `city` varchar(60) NOT NULL,
  `passport` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `card`
--

INSERT INTO `card` (`id_card`, `id_user`, `policy`, `dateBirth`, `city`, `passport`) VALUES
(11, 47, '12346690', '2024-05-17', 'Уфа', '8019708989'),
(22, 68, '455674', '2024-04-15', 'Уфа', '566775'),
(24, 73, '1234669056784536', '2003-02-13', 'Уфа', '8019708934'),
(25, 74, '1234669023498765', '2004-07-16', 'Уфа', '8019675844'),
(26, 91, '1234527615712345', '1987-08-13', 'Уфа', '8020775676'),
(27, 92, '6578969056784536', '2000-09-04', 'Уфа', '8097367891'),
(28, 93, '1234528915712345', '1980-12-13', 'Уфа', '8020777534'),
(29, 94, '1234673915712345', '1989-11-23', 'Уфа', '8019874536');

-- --------------------------------------------------------

--
-- Структура таблицы `directions`
--

CREATE TABLE `directions` (
  `id_direction` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `discription` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `directions`
--

INSERT INTO `directions` (`id_direction`, `name`, `discription`, `images`) VALUES
(14, 'Кардиология', 'Кардиология - обширный раздел медицины, занимающийся изучением сердечно-сосудистой системы человека: строения и развития сердца и сосудов, их функций, а также заболеваний, включая изучение причин их возникновения, механизмов развития, клинических проявлений, вопросов диагностики, а также разработку эффективных методов их лечения и профилактики. ', 'image 2.png'),
(23, 'Артроскопия', 'Артроскопия — это минимально инвазивная хирургическая процедура, осуществляемая в целях визуального обследования структур суставной полости, а также лечебного воздействия на них. Проводится процедура с использованием артроскопа — разновидности эндоскопа, который вводится в сустав через микроразрез.', 'Artroskopiya 1.png'),
(30, 'Хирургия', 'Хирургия — это область медицины, методика, которой предполагает лечение болезней, сопровождающихся нарушением целостности кожных покровов и внутренних тканей организма.', 'preview 1.png'),
(31, 'Нейрохирургия', 'Нейрохирургия — это высокоспециализированное направление медицины, сосредотачивающееся на диагностике, лечении и управлении расстройствами, затрагивающими нервную систему, включая мозг, спинной мозг и периферические нервы. Она охватывает широкий спектр состояний, от опухолей головного мозга и травм спинного мозга до хронических болевых синдромов и нарушений движения, таких как болезнь Паркинсона.', '1592489447282.6401.jpg'),
(32, 'Эндоскопия', 'Эндоскопия – это инструментальное исследование, позволяющее врачу произвести осмотр внутренних полостных или трубчатых органов, не прибегая к операции. Проведение подобных исследований требует специальной врачебной квалификации.', 'shutterstock_1054047.jpg'),
(33, 'Неврология', 'В отделении неврологии проводится лечение острых нарушений мозгового кровообращения (инсульта). Амбулаторно осуществляется лечение невралгий различного происхождения, заболеваний, связанных с травматическими или возрастными изменениями позвоночника, последствий черепно-мозговых травм.', 'gemorragicheskiy_insult_golovnogo_mozga.jpg.crop_display.jpg'),
(34, 'Травматология и ортопедия', 'Травматология и ортопедия — это направления медицины, которые изучают воздействие патологий и травмирующих факторов на опорно-двигательный аппарат человека. А именно, на костные, мышечные, суставные ткани, а также связки и сухожилия. В нашем отделении травматологии и ортопедии проводят лечение ушибов, переломов и других травм, а также их последствий.', '15....0.............jpg'),
(35, 'Пластическая хирургия', 'Пластическая хирургия — это раздел хирургии, занимающийся оперативными вмешательствами, направленными на устранение деформаций и дефектов какого-либо органа, ткани или поверхности человеческого тела.', 'plastic.jpg'),
(36, 'Гинекология', 'Гинекология — это направление медицины, которое специализируется на диагностике, лечении и профилактике патологических состояний женской репродуктивной системы.', 'Sovety-ginekologa.jpg'),
(37, 'Восстановительное лечение', 'Реабилитация или восстановительное лечение — это процесс и система медицинских, психологических, педагогических, социально-экономических мероприятий, направленных на устранение или возможно более полную компенсацию ограничений жизнедеятельности, вызванных нарушением здоровья со стойким расстройством функций организма.', 'scale_1200.jpeg'),
(38, 'Терапия', 'Терапия — это область медицины, изучающая внутренние болезни, их профилактику, диагностику и лечение. В состав терапии входят кардиология, пульмонология, гастроэнтерология, гематология, ревматология, нефрология, аллергология-иммунология, инфекционные болезни, эндокринология и другие направления.', 'Terapiya.jpg'),
(39, 'Офтальмология', 'Офтальмология — это область медицины, которая изучает глаз, его анатомию, физиологию и болезни, а также разрабатывает методы лечения и профилактики глазных болезней.', '1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `doctor`
--

CREATE TABLE `doctor` (
  `id_doctor` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_specialization` int(11) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `doctor`
--

INSERT INTO `doctor` (`id_doctor`, `id_user`, `id_specialization`, `images`) VALUES
(22, 81, 14, 'bigstock-Medical-physician-doctor-woma-87839339.jpg'),
(23, 82, 15, 'image 3.png'),
(24, 83, 16, 'XXL_height (1).webp'),
(25, 84, 13, '50597-vrach-12.jpg'),
(26, 85, 17, '1669389661_11-indasil-club-p-portret-vracha-oboi-12.jpg'),
(27, 86, 9, 'pic_1534152300.jpg'),
(28, 87, 10, '5.jpg'),
(29, 88, 11, 'narkologicheskaya_klinika.jpg'),
(30, 89, 16, 'Не подтверждено 117698.~'),
(31, 90, 12, 'i (1).webp'),
(35, 99, 15, 'b41293d1ae609ed2fd33a3f3505d783f.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `record`
--

CREATE TABLE `record` (
  `id_record` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `id_card` int(11) NOT NULL,
  `date_record` date NOT NULL,
  `time_record` time NOT NULL,
  `doctor_notes` varchar(100) DEFAULT NULL,
  `diagnosis` varchar(100) DEFAULT NULL,
  `status` enum('новая','отменена','пройдено','не пришел') NOT NULL DEFAULT 'новая'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `record`
--

INSERT INTO `record` (`id_record`, `id_doctor`, `id_card`, `date_record`, `time_record`, `doctor_notes`, `diagnosis`, `status`) VALUES
(1, 27, 25, '2024-06-14', '08:00:00', '', 'Опухоль головного мозга', 'пройдено'),
(2, 24, 25, '2024-06-20', '08:00:00', 'Пропить курс витаминов', 'ОРВИ', 'пройдено'),
(3, 29, 22, '2024-06-21', '08:30:00', 'Носить стельки', 'Плоскостопие', 'пройдено'),
(4, 31, 22, '2024-06-21', '08:30:00', 'Наложение гипса', 'Перелом со смещением', 'пройдено'),
(5, 27, 28, '2024-06-21', '10:30:00', '13 ', 'Все хорошо', 'пройдено'),
(6, 27, 28, '2024-06-22', '08:30:00', '13 ', 'Все хорошо', 'пройдено'),
(7, 27, 28, '2024-06-13', '08:00:00', '13 ', 'Все хорошо', 'пройдено'),
(8, 27, 28, '2024-06-13', '08:00:00', '13 ', 'Все хорошо', 'новая'),
(9, 31, 24, '2024-06-15', '08:30:00', NULL, NULL, 'новая'),
(10, 27, 22, '2024-06-27', '08:00:00', NULL, NULL, 'новая'),
(11, 27, 22, '2024-06-25', '08:00:00', NULL, NULL, 'новая'),
(12, 27, 22, '2024-06-27', '10:30:00', NULL, NULL, 'новая'),
(13, 27, 22, '2024-06-25', '10:30:00', NULL, NULL, 'отменена'),
(14, 27, 22, '2024-06-25', '08:00:00', NULL, NULL, 'новая'),
(15, 27, 22, '2024-06-25', '19:30:00', NULL, NULL, 'новая');

-- --------------------------------------------------------

--
-- Структура таблицы `specialization`
--

CREATE TABLE `specialization` (
  `id_specialization` int(11) NOT NULL,
  `name_specialization` varchar(100) NOT NULL,
  `id_direction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `specialization`
--

INSERT INTO `specialization` (`id_specialization`, `name_specialization`, `id_direction`) VALUES
(9, 'Нейрохирург', 31),
(10, 'Артроскопист', 23),
(11, 'Ортопед', 34),
(12, 'Травматолог', 34),
(13, 'Кардиолог', 14),
(14, 'Заведующий кардиологического отделения', 14),
(15, 'Хирург', 30),
(16, 'Терапевт', 38),
(17, 'Главный хирург', 30);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `userName` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `patronymic` varchar(60) NOT NULL,
  `role` varchar(7) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `email_user`, `userName`, `password`, `surname`, `patronymic`, `role`) VALUES
(47, '12mir@mail.ru', '      Ольга            ', '123', '      Кочергина      ', '            Владимировна            ', 'admin'),
(68, 'ivan@mail.ru', 'Иван        ', '123', 'Иванов', 'Евгеньевич        ', 'user'),
(73, 'Marcina@mail.ru', 'Мария', 'marcina13', 'Маркина', 'Игоревна', 'user'),
(74, 'Ignatov.Stas05@mail.ru', 'Станислав', 'stas16', 'Игнатов', 'Константинович', 'user'),
(81, '13mir@mail.ru', 'Ольга', 'Olga123', 'Кочергина', 'Владимировна', 'doctor'),
(82, 'Shumaev65.Gleb@mail.ru', 'Глеб', 'Gleb568//', 'Шумаев', 'Евгеньевич', 'doctor'),
(83, 'aleksandraK45@mail.ru', 'Александра', 'Sasha45', 'Кузнецова', 'Викторовна', 'doctor'),
(84, 'Mihail@mail.ru', 'Михаил', 'Mihail123', ' Иванов ', 'Дмитриевич', 'doctor'),
(85, 'Beloysov.45@mail.ru', 'Евгений', 'welcome', 'Белоусов', 'Васильевич', 'doctor'),
(86, 'kir@mail.ru', 'Кира', '123', 'Иванова', 'Александровна', 'doctor'),
(87, 'elena@mail.ru', 'Елена', 'elena564', 'Коршунова', 'Викторовна', 'doctor'),
(88, 'oleg23@mail.ru', 'Олег', 'oleg23', 'Кутиев', 'Федорович', 'doctor'),
(89, 'zemfira@mail.ru', 'Земфира', 'zev23', 'Файзуллина', 'Ильдаровна', 'doctor'),
(90, 'tagir@mail.ru', 'Тагир', 'tagir1234', 'Камалов', 'Михаилович', 'doctor'),
(91, 'Ivan123@mail.ru', 'Петр', '123', 'Иванов', 'Иванович', 'user'),
(92, 'Aydar36@mail.ru', 'Айдар', 'Aydar36', 'Абдрашитов', 'Ирекович', 'user'),
(93, 'FedorIv45@mail.ru', 'Федор', '1234', 'Иванов', 'Петрович', 'user'),
(94, '435mir@mail.ru', 'Вероника', '13245', 'Казанцева', 'Олеговна', 'user'),
(99, 'anna@mail.ru', 'Анна', 'anna123', 'Максимова', 'Игоревна', 'doctor');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id_card`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id_direction`);

--
-- Индексы таблицы `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id_doctor`),
  ADD KEY `id_specialization` (`id_specialization`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id_record`),
  ADD KEY `id_doctor` (`id_doctor`),
  ADD KEY `id_card` (`id_card`);

--
-- Индексы таблицы `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`id_specialization`),
  ADD KEY `id_direction` (`id_direction`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `card`
--
ALTER TABLE `card`
  MODIFY `id_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `directions`
--
ALTER TABLE `directions`
  MODIFY `id_direction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id_doctor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `record`
--
ALTER TABLE `record`
  MODIFY `id_record` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id_specialization` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`id_specialization`) REFERENCES `specialization` (`id_specialization`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `record_ibfk_2` FOREIGN KEY (`id_doctor`) REFERENCES `doctor` (`id_doctor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `record_ibfk_3` FOREIGN KEY (`id_card`) REFERENCES `card` (`id_card`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `specialization`
--
ALTER TABLE `specialization`
  ADD CONSTRAINT `specialization_ibfk_1` FOREIGN KEY (`id_direction`) REFERENCES `directions` (`id_direction`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
