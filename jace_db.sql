CREATE TABLE `users` (
   `id` int(11) not null auto_increment,
   `name` varchar(250) not null,
   `username` varchar(25) not null,
   `phone` varchar(11) not null,
   `email` varchar(50) not null,
   `password` varchar(32) not null,
   `date` datetime not null,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;