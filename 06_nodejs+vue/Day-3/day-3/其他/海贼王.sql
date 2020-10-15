CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nengli` varchar(255) NOT NULL,
  `jituan` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `nengli`, `jituan`, `img`) VALUES
(1, '路飞', '超人系橡胶果实', '草帽海贼团', ''),
(2, '乔巴', '动物系人人果实', '草帽海贼团', ''),
(3, '罗宾', '超人系花花果实', '草帽海贼团', ''),
(4, '红发-香克斯', '霸王色霸气、武装色霸气', '红发海贼团', ''),
(5, '鹰眼-米霍克', '黑刀.夜', '王下七武海', ''),
(6, '女帝-波雅', '超人系甜甜果实', '九蛇海贼团、王下七武海', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
