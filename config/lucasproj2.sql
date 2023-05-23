CREATE DATABASE [lucasproj2];
USE lucasproj2;

CREATE TABLE `texemple` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Volcado de datos para la tabla `texemple`
INSERT INTO `texemple` (`id`, `nom`) VALUES
(1, 'Eva'),
(2, 'Mario');

-- Indices de la tabla `texemple`
ALTER TABLE `texemple`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `texemple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
