-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 04 2022 г., 21:33
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `database_sait`
--

-- --------------------------------------------------------

--
-- Структура таблицы `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `Customer` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `customer`
--

INSERT INTO `customer` (`id_customer`, `Customer`) VALUES
(1, 'Обрезная доска'),
(2, 'Необрезная доска'),
(3, 'Слэб'),
(4, 'Торцевые спилы и капы'),
(5, 'Столярная заготовка');

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) UNSIGNED NOT NULL,
  `SCAN` varchar(45) NOT NULL DEFAULT 'no_img.png',
  `thickness` int(30) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `TEXT_com` text NOT NULL,
  `COAST` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `transactions`
--

INSERT INTO `transactions` (`id`, `SCAN`, `thickness`, `id_customer`, `TEXT_com`, `COAST`) VALUES
(1, '1.jpg', 20, 1, 'Обрезная доска из лиственницы — это неотшлифованный пласт дерева, очищенный от коры и обзола. Лиственница прекрасно зарекомендовала себя в качестве строительного материала для создания различных пристроек, покрытия полов и устройства придомовых территорий. Доски из лиственницы востребованы благодаря прочности, прекрасному внешнему виду и долговечности.', 60000),
(2, '2.jpg', 30, 1, 'Производитель: Россия\r\n\r\nПиломатериал сухой обрезной Дуб. Сорт В. Ширина доски от 100 мм., толщина 30 мм + длина от 1000 до 1999 мм. Цена на материал указана розничная. При заказе доски дуба от 1 куб. метра предоставляется скидка. Наша Цена включает НДС 20%!', 30000),
(3, '3.jpg', 52, 1, 'Дуб американский красный произрастает в Северной Америке. Древесина имеет различия по цвету: от розового до бледного красновато-коричневого. Обычно древесина имеет красноватый тон, хотя иногда по цвету, она приближается к. породам белого дуба. Крупные сердцевинные лучи не создают красивого рисунка, как у белого дуба, а текстура обычно крупнее. Средний показатель плотности древесины из группы красного дуба составляет около 750 кг/м3 в сухом состоянии. Порода нестойкая, и в основном служит для внутреннего применения.\r\n\r\nДуб красный хорошо поддается машинной обработке, полировке и покраске, неплохо склеивается. Часто для получения гладкой поверхности целесообразно уменьшать угол резания до 20°.', 164450),
(4, '4.jpg', 52, 1, 'Доска Ятоба или бразильская вишня. Древесина ятоба имеет роскошный красновато-коричневый цвет и превосходную твердость. Тропический гигант вырастает до 40 метров, а развитая крона обладает мощными ветками. Продажа пиломатериалов породы ятоба осуществляется в нашей компании. Толщина изделий составляет 27-52мм.\r\n\r\nХарактеризуется ценное дерево выделением вещества копала. Смола, сок, появляющееся из повреждений в коре, а также воздействие воздуха способствуют появлению данного вещества. Копал напоминает канифоль или ладан и обеспечивает повышенную вязкость древесины.\r\n\r\nДревесина ятоба хорошо удерживает крепежные элементы. По механическим свойствам превосходит дуб. Процесс сушки не терпит спешки. Золотистый блеск у древесины получается после шлифовки или полировки.\r\n\r\nКак правило, натуральный материал востребован для изготовления мебели, лестниц, производства паркета, создания спортивного инвентаря, а также в строительстве общего назначения.', 347300),
(5, '5.jpg', 52, 2, 'Элитная обрезная доска с особой текстурой и цветом. Дерево для его производства произрастает в Конго, Камеруне, Танзании. Изделие имеет светлую заболонь с темно-коричневым ядром, к которому тянутся тонкие частые прожилки.\r\n\r\nПиломатериалы из венге отличаются большим весом и твердостью. Не теряют своей геометрии при негативном воздействии окружающей среды. Обрабатываются легко, а вот полируются с трудом. Устойчивы к механическим и динамическим нагрузкам, не боятся ударов и падения острых предметов.\r\nИз этой породы производят мебель, декоративный шпон. Ею выполняют внутреннюю отделку интерьеров и застилают полы. Паркетная доска из венге признана одним из самых прочных напольных покрытий. Ультрамодный шоколадный оттенок ассоциируется с роскошью и аристократизмом.', 424350),
(6, '6.jpg', 80, 2, 'Производитель: Россия\r\n\r\nПиломатериал сухой необрезной Карагач. Ширина доски от 100 мм, толщина 70, 80 мм и длина от 1 метра. Цена на материал указана розничная. При заказе доски дуба от 1 куб. метра предоставляется скидка. Наша Цена включает НДС 20%!', 200340),
(7, '7.jpg', 60, 2, 'Производитель: Россия\r\n\r\nПиломатериал сухой необрезной Карагач. Ширина доски от 100 мм, толщина 30, 50, 60 мм и длина от 1 метра. ', 46000),
(8, '8.jpg', 50, 2, 'Производитель: Россия\r\n\r\nПиломатериал сухой необрезной Дуб. Ширина доски от 100 мм., толщина 50 мм + длина от 2 метров. \r\n', 75540),
(9, '9.jpg', 80, 3, 'Карагач  (от тюркского «кара» — чёрный, «агач» — дерево) – дерево, которое принадлежит к семейству ильмовых и вязовых. Его аромат обладает гипо-аллергенным и тонизирующим воздействием.', 17000),
(10, '10.jpg', 80, 3, 'Карагач  (от тюркского «кара» — чёрный, «агач» — дерево) – дерево, которое принадлежит к семейству ильмовых и вязовых. Его аромат обладает гипо-аллергенным и тонизирующим воздействием', 17800),
(11, '11.jpg', 80, 3, 'Карагач  (от тюркского «кара» — чёрный, «агач» — дерево) – дерево, которое принадлежит к семейству ильмовых и вязовых. Его аромат обладает гипо-аллергенным и тонизирующим воздействием.', 12200),
(12, '12.jpg', 80, 3, 'Преимущество цельного массива шелковицы заключается не только в долговечности изделий, но и необычной окраске самой древесины, которая со временем темнеет, приобретая насыщенный красно-бурый оттенок.\r\nДревесина шелковицы упругая, практически не рассыхается и устойчива к короблению. Это позволяет использовать слэбы ствола в качестве основы для кухонных столешниц, дизайнерских барных стоек, столов для дома и офиса, изголовий для кроватей, подносов и разделочных досок для приготовления пищи.', 9000),
(13, '13.jpg', 10000, 4, 'Торцевые спилы создают благородный и индивидуальный стиль. Сложность текстуры, естественные детали – сучки и натуральные контуры только дополняют дизайн. При обработке продукции стараются сохранить структуру поверхности максимально.\r\nОтличительные свойства – своеобразная геометрия, отражающая естественные очертания. Она подчеркивает природное изящество изделий, чего сложно добиться с другой продукцией, в которой прослеживается вмешательство человека.\r\n\r\nКарагач – порода дерева с прочной и довольно плотной древесиной, выделяющийся темным буро-красным цветом. Его свойства ценятся резчиками по дереву. Более того, несмотря на свою прочность, она очень просто поддается обработке, не трескается и не гниет. На ней хорошо видно годичные кольца, а текстура прекрасно видна не только в поперечном, но и в продольном разрезе.', 12800),
(14, '14.jpg', 600, 4, 'Торцевые спилы создают благородный и индивидуальный стиль. Сложность текстуры, естественные детали – сучки и натуральные контуры только дополняют дизайн. При обработке продукции стараются сохранить структуру поверхности максимально.\r\nОтличительные свойства – своеобразная геометрия, отражающая естественные очертания. Она подчеркивает природное изящество изделий, чего сложно добиться с другой продукцией, в которой прослеживается вмешательство человека.\r\n\r\nКарагач – порода дерева с прочной и довольно плотной древесиной, выделяющийся темным буро-красным цветом. Его свойства ценятся резчиками по дереву. Более того, несмотря на свою прочность, она очень просто поддается обработке, не трескается и не гниет. На ней хорошо видно годичные кольца, а текстура прекрасно видна не только в поперечном, но и в продольном разрезе.', 19400),
(15, '15.jpg', 8000, 4, 'Торцевые спилы создают благородный и индивидуальный стиль. Сложность текстуры, естественные детали – сучки и натуральные контуры только дополняют дизайн. При обработке продукции стараются сохранить структуру поверхности максимально.\r\nОтличительные свойства – своеобразная геометрия, отражающая естественные очертания. Она подчеркивает природное изящество изделий, чего сложно добиться с другой продукцией, в которой прослеживается вмешательство человека.\r\n\r\nКарагач – порода дерева с прочной и довольно плотной древесиной, выделяющийся темным буро-красным цветом. Его свойства ценятся резчиками по дереву. Более того, несмотря на свою прочность, она очень просто поддается обработке, не трескается и не гниет. На ней хорошо видно годичные кольца, а текстура прекрасно видна не только в поперечном, но и в продольном разрезе.', 8300),
(16, '16.jpg', 6000, 4, 'Торцевые спилы создают благородный и индивидуальный стиль. Сложность текстуры, естественные детали – сучки и натуральные контуры только дополняют дизайн. При обработке продукции стараются сохранить структуру поверхности максимально.\r\nОтличительные свойства – своеобразная геометрия, отражающая естественные очертания. Она подчеркивает природное изящество изделий, чего сложно добиться с другой продукцией, в которой прослеживается вмешательство человека.\r\n\r\nКарагач – порода дерева с прочной и довольно плотной древесиной, выделяющийся темным буро-красным цветом. Его свойства ценятся резчиками по дереву. Более того, несмотря на свою прочность, она очень просто поддается обработке, не трескается и не гниет. На ней хорошо видно годичные кольца, а текстура прекрасно видна не только в поперечном, но и в продольном разрезе.', 11900),
(17, '17.jpg', 52, 5, 'Столярная заготовка Орех Американский – это брусок из экзотической древесины камерной сушки с размерами: толщина 52 мм (2”), ширина от 110 до 350 мм и длина от 700 до 1100 мм.\r\n\r\nАмериканский орех (black walnut) — Орех черный произрастает на обширной территории в Северной Америке — от южной части канадской провинции Онтарио к югу до штата Техас, на востоке — от штата Мэн до Флориды. Однако запасы породы невелики.  Этому дереву не страшны морозы до -40°С и достаточно длительные подтопления. Черный орех вообще достаточно влаголюбив. Эти способности американского ореха делают довольно легким его культивирование в Средней полосе и на Урале. За свою долгую жизнь дерево способно подниматься над землей на высоту до 50 метров.', 6300),
(18, '18.jpg', 52, 5, 'Столярная заготовка Зебрано – это брусок из экзотической древесины камерной сушки с размерами: толщина 52 мм (2”), ширина от 110 до 350 мм и длина от 700 до 1100 мм.\r\n\r\nЗебрано (zebra wood , zingana) — древесина экзотической породы семейства Brachistegia fleuryana. Популярность растение приобрело за счет своей прочности, плотности, а также благодаря крупной оригинальной текстуре. В разрезе узор древесины похож на окраску зебры, то есть на светлом фоне расположены темные полосы. Родина дерева — тропические леса Западной Африки, так же растение произрастает на территории стран Камерун, Конго, Габон и Экваториальной Гвинеи. Иногда на рынке можно встретить древесину и под другим названием — зингана и зебравуд. Зебрано очень декоративная светло-золотистого цвета, с узкими штрихами от темно-коричневой до почти черной окраски. Поверхность блестящая.', 6300),
(19, '19.jpg', 52, 5, 'Столярная заготовка Венге – это брусок из экзотической древесины камерной сушки с размерами: толщина 52 мм (2”), ширина от 110 до 350 мм и длина от 700 до 1100 мм.\r\n\r\nВенге – это ценная порода древесины, которая произрастает преимущественно в Конго. Дерево обладает беловатой заболонью, темно-коричневым, с частыми прожилками, ядром, а также эстетичной текстурой. Очень твердая и тяжелая древесина у Венге, с плотностью в сухом состоянии около 880 кг/м3. Волокна прямые. Текстура крупная. Стойкая древесина. Легко обрабатывается, но полируется с трудом.', 6300),
(20, '20.jpg', 52, 5, 'Столярная заготовка Амарант – это брусок из экзотической древесины камерной сушки с размерами: толщина 52 мм (2”), ширина от 110 до 350 мм и длина от 700 до 1100 мм.\r\n\r\nАмарант — это дерево из тропических лесов Центральной и Южной Америки. Латинское название Purpleheart переводится как пурпурное сердце. Это название амарант получил за характерный фиолетовый цвет древесины, который она приобретает при сушке на воздухе. Благодаря своему экзотическому цвету древесина амаранта достаточна дорога и применяется для производства эксклюзивного паркета, элементов мебели, музыкальных инструментов, сувениров и украшений.', 4800);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Индексы таблицы `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;