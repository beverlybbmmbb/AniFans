-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.2.0 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.12.0.7122
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla anifans.characters: ~4 rows (aproximadamente)
INSERT IGNORE INTO `characters` (`id`, `name`, `description`, `image`, `movie_id`, `created_at`, `updated_at`) VALUES
	(1, 'Mitsuha Miyamizu', 'A young woman from a rural town who mysteriously swaps bodies with Taki.', 'https://ui-avatars.com/api/?name=Mitsuha&background=c24e30&color=fdfaf4&size=200', 28, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(2, 'Taki Tachibana', 'A Tokyo high school student whose life changes when he swaps bodies with Mitsuha.', 'https://ui-avatars.com/api/?name=Taki&background=f0e6cc&color=2d1f0e&size=200', 28, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(3, 'Kaneda', 'A biker gang leader with unwavering determination and loyalty.', 'https://ui-avatars.com/api/?name=Kaneda&background=c24e30&color=fdfaf4&size=200', 27, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(4, 'Akira', 'A powerful psychic entity at the center of the conflict.', 'https://ui-avatars.com/api/?name=Akira&background=2e6b2e&color=fdfaf4&size=200', 27, '2026-06-01 09:15:40', '2026-06-01 09:15:40');

-- Volcando datos para la tabla anifans.countries: ~10 rows (aproximadamente)
INSERT IGNORE INTO `countries` (`id`, `name`, `slug`, `flag`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Japan', 'japan', '🇯🇵', 'Home of Studio Ghibli, Toei Animation, and countless anime masterpieces.', '2026-06-01 09:15:37', '2026-06-01 09:15:37'),
	(2, 'South Korea', 'south-korea', '🇰🇷', 'Premier animation production hub for international collaborations.', '2026-06-01 09:15:37', '2026-06-01 09:15:37'),
	(3, 'United States', 'united-states', '🇺🇸', 'Pixar, Disney Animation, and DreamWorks Studios.', '2026-06-01 09:15:37', '2026-06-01 09:15:37'),
	(4, 'France', 'france', '🇫🇷', 'European animation excellence with artistic innovation.', '2026-06-01 09:15:37', '2026-06-01 09:15:37'),
	(5, 'United Kingdom', 'united-kingdom', '🇬🇧', 'Aardman Animations and British animation tradition.', '2026-06-01 09:15:37', '2026-06-01 09:15:37'),
	(6, 'China', 'china', '🇨🇳', 'Emerging animation powerhouse with rich visual storytelling.', '2026-06-01 09:15:37', '2026-06-01 09:15:37'),
	(7, 'Spain', 'spain', '🇪🇸', 'European animation studios with distinctive style.', '2026-06-01 09:15:37', '2026-06-01 09:15:37'),
	(8, 'Canada', 'canada', '🇨🇦', 'Warner Bros. Animation and independent studios.', '2026-06-01 09:15:37', '2026-06-01 09:15:37'),
	(9, 'Germany', 'germany', '🇩🇪', 'German animation industry with precision and creativity.', '2026-06-01 09:15:37', '2026-06-01 09:15:37'),
	(10, 'Italy', 'italy', '🇮🇹', 'Italian animation heritage and contemporary studios.', '2026-06-01 09:15:37', '2026-06-01 09:15:37');

-- Volcando datos para la tabla anifans.favorites: ~18 rows (aproximadamente)
INSERT IGNORE INTO `favorites` (`id`, `user_id`, `movie_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 18, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(2, 1, 26, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(3, 1, 28, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(4, 2, 2, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(5, 2, 26, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(6, 2, 29, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(7, 3, 11, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(8, 3, 20, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(9, 3, 27, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(10, 4, 7, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(11, 4, 13, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(12, 4, 30, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(13, 5, 10, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(14, 5, 18, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(15, 5, 25, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(16, 6, 4, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(17, 6, 8, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(18, 6, 10, '2026-06-01 09:15:41', '2026-06-01 09:15:41');

-- Volcando datos para la tabla anifans.likes: ~0 rows (aproximadamente)

-- Volcando datos para la tabla anifans.migrations: ~10 rows (aproximadamente)
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2024_01_00_232113_create_countries_table', 1),
	(2, '2024_01_01_000002_create_users_table', 1),
	(3, '2024_01_01_000003_create_movies_table', 1),
	(4, '2024_01_01_000004_create_characters_table', 1),
	(5, '2024_01_01_000006_create_favorites_table', 1),
	(6, '2024_01_01_000007_create_trivia_questions_table', 1),
	(7, '2026_05_20_000000_create_sessions_table', 1),
	(8, '2026_05_24_213813_create_likes_table', 1),
	(9, '2026_05_25_001539_create_reviews_table', 1),
	(10, '2026_05_25_020958_create_trivia_results_table', 1);

-- Volcando datos para la tabla anifans.movies: ~30 rows (aproximadamente)
INSERT IGNORE INTO `movies` (`id`, `title`, `slug`, `synopsis`, `poster_path`, `backdrop_path`, `release_year`, `duration`, `rating`, `studio`, `genre`, `country_id`, `review_count`, `favorite_count`, `created_at`, `updated_at`) VALUES
	(1, 'Vampire Hunter D', 'vampire-hunter-d', 'Un cazador mitad vampiro lucha en un futuro postapocalíptico.', 'images/movies/vampire-hunter-d.webp', NULL, '1985', 80, 8.6, 'Ashi Productions', 'Horror', 1, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(2, 'El Castillo Ambulante', 'el-castillo-ambulante', 'Una joven maldecida entra en el mundo del mago Howl.', 'images/movies/el-castillo-ambulante.webp', NULL, '2004', 119, 9.2, 'Studio Ghibli', 'Fantasia', 1, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(3, 'Pesadilla Antes de Navidad', 'pesadilla-antes-de-navidad', 'Jack Skellington descubre la Navidad.', 'images/movies/pesadilla-antes-de-navidad.webp', NULL, '1993', 76, 9.0, 'Disney', 'Fantasia Oscura', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(4, 'Shrek', 'shrek', 'Un ogro se embarca en una misión para rescatar a una princesa.', 'images/movies/shrek.webp', NULL, '2001', 90, 8.9, 'DreamWorks', 'Comedia', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(5, 'Shrek 2', 'shrek-2', 'Shrek conoce a los padres de Fiona.', 'images/movies/shrek-2.webp', NULL, '2004', 93, 8.8, 'DreamWorks', 'Comedia', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(6, 'Shrek Tercero', 'shrek-tercero', 'Shrek debe encontrar al heredero del trono.', 'images/movies/shrek-3.webp', NULL, '2007', 93, 7.8, 'DreamWorks', 'Comedia', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(7, 'Shrek para Siempre', 'shrek-para-siempre', 'Shrek entra en una realidad alternativa.', 'images/movies/shrek-4.webp', NULL, '2010', 93, 7.6, 'DreamWorks', 'Comedia', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(8, 'La Princesa Mononoke', 'la-princesa-mononoke', 'Una guerra entre humanos y espíritus del bosque.', 'images/movies/la-princesa-mononoke.webp', NULL, '1997', 134, 9.5, 'Studio Ghibli', 'Fantasia', 1, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(9, 'Polar Express', 'polar-express', 'Un niño viaja en un tren mágico al Polo Norte.', 'images/movies/polar-express.webp', NULL, '2004', 100, 8.4, 'Warner Bros', 'Navidad', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(10, 'La Novia Cadáver', 'la-novia-cadaver', 'Un hombre se casa accidentalmente con una novia muerta.', 'images/movies/la-novia-cadaver.webp', NULL, '2005', 77, 8.8, 'Laika', 'Fantasia Oscura', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(11, 'La Tumba de las Luciérnagas', 'la-tumba-de-las-luciernagas', 'Dos hermanos sobreviven en Japón durante la guerra.', 'images/movies/la-tumba-de-las-luciernagas.webp', NULL, '1988', 89, 9.7, 'Studio Ghibli', 'Drama', 1, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(12, 'El Gato con Botas: El Último Deseo', 'el-gato-con-botas-el-ultimo-deseo', 'El Gato con Botas busca restaurar sus vidas perdidas.', 'images/movies/el-gato-con-botas-el-ultimo-deseo.webp', NULL, '2022', 102, 9.1, 'DreamWorks', 'Aventura', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(13, 'Pinocho de Guillermo del Toro', 'pinocho-de-guillermo-del-toro', 'Una versión oscura del clásico cuento de Pinocho.', 'images/movies/pinocchio.webp', NULL, '2022', 117, 9.0, 'Netflix', 'Fantasia', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(14, 'Mary and Max', 'mary-and-max', 'Una amistad entre dos personas por cartas.', 'images/movies/mary-and-max.webp', NULL, '2009', 92, 9.0, 'Melodrama Pictures', 'Drama', 6, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(15, 'Wolfwalkers', 'wolfwalkers', 'Una niña descubre un mundo de hombres lobo.', 'images/movies/wolfwalkers.webp', NULL, '2020', 103, 9.3, 'Cartoon Saloon', 'Fantasia', 5, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(16, 'Song of the Sea', 'song-of-the-sea', 'Dos hermanos descubren criaturas del folclore irlandés.', 'images/movies/song-of-the-sea.webp', NULL, '2014', 93, 9.1, 'Cartoon Saloon', 'Fantasia', 5, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(17, 'Persepolis', 'persepolis', 'Una joven crece en medio de la revolución iraní.', 'images/movies/persepolis.webp', NULL, '2007', 95, 8.9, 'Sony Pictures', 'Drama', 4, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(18, 'Klaus', 'klaus', 'Un cartero cambia una ciudad con actos de bondad.', 'images/movies/klaus.webp', NULL, '2019', 96, 9.0, 'Netflix', 'Navidad', 3, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(19, 'Fantasia', 'fantasia', 'Película musical experimental de Disney.', 'images/movies/fantasia.webp', NULL, '1940', 126, 8.8, 'Disney', 'Fantasia', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(20, 'The Iron Giant', 'the-iron-giant', 'Un niño se hace amigo de un robot gigante.', 'images/movies/the-iron-giant.webp', NULL, '1999', 86, 9.3, 'Warner Bros', 'Ciencia Ficcion', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(21, 'Spider-Man: Un Nuevo Universo', 'spider-man-un-nuevo-universo', 'Miles Morales descubre el multiverso.', 'images/movies/spider-man.webp', NULL, '2018', 117, 9.4, 'Sony', 'Superheroes', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(22, 'Wall-E', 'wall-e', 'Un robot solitario limpia la Tierra.', 'images/movies/wall-e.webp', NULL, '2008', 98, 9.2, 'Pixar', 'Ciencia Ficcion', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(23, 'Nausicaä del Valle del Viento', 'nausicaa-del-valle-del-viento', 'Una princesa intenta salvar su mundo.', 'images/movies/nausicaa-del-valle-del-viento.webp', NULL, '1984', 117, 9.4, 'Studio Ghibli', 'Fantasia', 1, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(24, 'Paprika', 'paprika', 'Los sueños y la realidad se mezclan.', 'images/movies/paprika.webp', NULL, '2006', 90, 8.9, 'Madhouse', 'Psicologico', 1, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(25, 'Ghost in the Shell', 'ghost-in-the-shell', 'Una cyborg investiga crimenes digitales.', 'images/movies/ghost-in-the-shell.webp', NULL, '1995', 83, 9.0, 'Production I.G', 'Cyberpunk', 1, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(26, 'Perfect Blue', 'perfect-blue', 'Una idol pierde la cordura entre realidad y ficción.', 'images/movies/perfect-blue.webp', NULL, '1997', 81, 9.1, 'Madhouse', 'Thriller', 1, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(27, 'Akira', 'akira', 'Neo-Tokio y poderes psíquicos peligrosos.', 'images/movies/akira.webp', NULL, '1988', 124, 9.4, 'Tokyo Movie Shinsha', 'Cyberpunk', 1, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(28, 'Your Name', 'your-name', 'Dos jóvenes intercambian cuerpos.', 'images/movies/your-name.webp', NULL, '2016', 106, 9.2, 'CoMix Wave Films', 'Romance', 1, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(29, 'El Viaje de Chihiro', 'el-viaje-de-chihiro', 'Una niña entra en un mundo espiritual.', 'images/movies/chihiro.webp', NULL, '2001', 125, 9.6, 'Studio Ghibli', 'Fantasia', 1, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(30, 'Las Guerreras del K-Pop', 'las-guerreras-del-k-pop', 'Grupo de chicas con poderes enfrentan fuerzas oscuras.', 'images/movies/las-guerreras-del-k-pop.webp', NULL, '2024', 110, 8.7, 'Netflix Animation', 'Accion', 2, 0, 0, '2026-06-01 09:15:40', '2026-06-01 09:15:40');

-- Volcando datos para la tabla anifans.reviews: ~107 rows (aproximadamente)
INSERT IGNORE INTO `reviews` (`id`, `movie_id`, `user_id`, `comment`, `rating`, `created_at`, `updated_at`) VALUES
	(1, 4, 2, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 9.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(2, 4, 3, 'Un viaje narrativo cautivador de principio a fin.', 10.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(3, 4, 6, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 10.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(4, 14, 3, 'Una de las producciones más destacadas dentro de su género.', 7.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(5, 14, 4, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 8.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(6, 14, 5, 'Una obra de profunda sensibilidad emocional y refinada animación.', 9.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(7, 14, 6, 'Una de las producciones más destacadas dentro de su género.', 9.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(8, 16, 2, 'Una obra de profunda sensibilidad emocional y refinada animación.', 10.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(9, 16, 3, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 7.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(10, 16, 4, 'Un viaje narrativo cautivador de principio a fin.', 7.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(11, 16, 5, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 7.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(12, 16, 6, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 8.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(13, 17, 2, 'Una de las producciones más destacadas dentro de su género.', 10.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(14, 17, 4, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 9.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(15, 17, 5, 'Una obra de profunda sensibilidad emocional y refinada animación.', 8.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(16, 17, 6, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 10.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(17, 3, 3, 'Un viaje narrativo cautivador de principio a fin.', 9.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(18, 3, 4, 'Una de las producciones más destacadas dentro de su género.', 9.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(19, 3, 5, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 8.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(20, 3, 6, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 8.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(21, 20, 2, 'Un viaje narrativo cautivador de principio a fin.', 9.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(22, 20, 3, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 8.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(23, 20, 5, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 10.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(24, 20, 6, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 10.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(25, 9, 2, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 9.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(26, 9, 3, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 7.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(27, 9, 4, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 8.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(28, 9, 5, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 8.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(29, 9, 6, 'Un viaje narrativo cautivador de principio a fin.', 8.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(30, 18, 5, 'Una de las producciones más destacadas dentro de su género.', 10.0, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(31, 18, 6, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(32, 10, 2, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(33, 10, 3, 'Una de las producciones más destacadas dentro de su género.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(34, 10, 4, 'Una de las producciones más destacadas dentro de su género.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(35, 10, 5, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(36, 13, 3, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(37, 13, 4, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(38, 13, 5, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(39, 13, 6, 'Una experiencia fílmica memorable que permanece en la mente del espectador.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(40, 23, 3, 'Una experiencia fílmica memorable que permanece en la mente del espectador.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(41, 23, 5, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(42, 26, 2, 'Un viaje narrativo cautivador de principio a fin.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(43, 26, 3, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(44, 26, 4, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(45, 26, 5, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(46, 26, 6, 'Una experiencia fílmica memorable que permanece en la mente del espectador.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(47, 28, 3, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(48, 28, 4, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(49, 28, 6, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(50, 12, 2, 'Una experiencia fílmica memorable que permanece en la mente del espectador.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(51, 12, 6, 'Una de las producciones más destacadas dentro de su género.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(52, 6, 2, 'Una obra de profunda sensibilidad emocional y refinada animación.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(53, 6, 3, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(54, 6, 4, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(55, 6, 5, 'Un viaje narrativo cautivador de principio a fin.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(56, 6, 6, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(57, 7, 2, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(58, 7, 3, 'Una obra de profunda sensibilidad emocional y refinada animación.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(59, 7, 4, 'Un viaje narrativo cautivador de principio a fin.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(60, 7, 5, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(61, 15, 3, 'Un viaje narrativo cautivador de principio a fin.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(62, 15, 5, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(63, 15, 6, 'Una experiencia fílmica memorable que permanece en la mente del espectador.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(64, 27, 2, 'Un viaje narrativo cautivador de principio a fin.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(65, 27, 3, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(66, 21, 2, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(67, 21, 3, 'Una experiencia fílmica memorable que permanece en la mente del espectador.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(68, 21, 4, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(69, 21, 5, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(70, 21, 6, 'Un viaje narrativo cautivador de principio a fin.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(71, 2, 2, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(72, 2, 4, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(73, 2, 6, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(74, 24, 2, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(75, 24, 3, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(76, 24, 4, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(77, 24, 5, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(78, 29, 2, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(79, 29, 3, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(80, 29, 5, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(81, 11, 3, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(82, 11, 4, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(83, 30, 2, 'Una obra de profunda sensibilidad emocional y refinada animación.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(84, 30, 5, 'Una obra de profunda sensibilidad emocional y refinada animación.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(85, 30, 6, 'Una experiencia fílmica memorable que permanece en la mente del espectador.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(86, 19, 2, 'Un viaje narrativo cautivador de principio a fin.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(87, 19, 3, 'Una de las producciones más destacadas dentro de su género.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(88, 19, 4, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(89, 19, 5, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(90, 19, 6, 'Una experiencia fílmica memorable que permanece en la mente del espectador.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(91, 1, 3, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(92, 1, 5, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(93, 8, 2, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 10.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(94, 8, 3, 'Una de las producciones más destacadas dentro de su género.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(95, 8, 5, 'Un viaje narrativo cautivador de principio a fin.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(96, 8, 6, 'Un ejemplo de excelencia narrativa y construcción cinematográfica.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(97, 5, 2, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(98, 5, 3, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(99, 5, 4, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 8.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(100, 5, 5, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(101, 5, 6, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(102, 22, 2, 'Una obra cinematográfica sobresaliente que encapsula la esencia del séptimo arte.', 7.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(103, 22, 3, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(104, 22, 4, 'Una de las producciones más destacadas dentro de su género.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(105, 22, 5, 'Una experiencia fílmica memorable que permanece en la mente del espectador.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(106, 25, 2, 'Una propuesta visualmente deslumbrante con una notable carga emocional.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(107, 25, 5, 'Una auténtica pieza de arte cinematográfico contemporáneo.', 9.0, '2026-06-01 09:15:41', '2026-06-01 09:15:41');

-- Volcando datos para la tabla anifans.sessions: ~0 rows (aproximadamente)

-- Volcando datos para la tabla anifans.trivia_questions: ~15 rows (aproximadamente)
INSERT IGNORE INTO `trivia_questions` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `difficulty`, `created_at`, `updated_at`) VALUES
	(1, 'En El Viaje de Chihiro, ¿cómo se llama Chihiro en la casa de baños?', 'Yuki', 'Sen', 'Hana', 'Mika', 'b', 'easy', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(2, '¿Qué estudio creó El Viaje de Chihiro?', 'Toei Animation', 'Studio Ghibli', 'Madhouse', 'A-1 Pictures', 'b', 'easy', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(3, '¿Cuál es la película donde dos personas intercambian cuerpos?', 'El jardín de las palabras', 'El tiempo contigo', 'Your Name', 'A Silent Voice', 'c', 'easy', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(4, 'En El Castillo Ambulante, ¿quién es el antagonista principal?', 'Howl', 'Calcifer', 'La Bruja del Páramo', 'Cabeza de Nabo', 'c', 'medium', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(5, '¿En qué año se estrenó Akira?', '1985', '1987', '1988', '1990', 'c', 'medium', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(6, '¿Qué país es conocido como la cuna de Studio Ghibli?', 'Corea del Sur', 'Japón', 'China', 'Tailandia', 'b', 'easy', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(7, 'En Coco, ¿qué instrumento toca Miguel?', 'Piano', 'Violín', 'Guitarra', 'Batería', 'c', 'easy', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(8, '¿Qué estudio creó la película Coco?', 'DreamWorks', 'Pixar Animation', 'Disney Animation', 'Sony Pictures', 'b', 'easy', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(9, 'En Your Name, ¿cómo se llama el cometa?', 'Tiamat', 'Tenki', 'Kimi', 'Yori', 'a', 'hard', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(10, '¿Qué película de Pixar cuenta la historia de las aventuras de la vida?', 'Up', 'Inside Out', 'Toy Story', 'Monsters Inc', 'a', 'medium', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(11, '¿Cómo se llama el niño en El Niño y la Garza?', 'Toto', 'Mahito', 'Kentaro', 'Saburo', 'b', 'hard', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(12, '¿Qué película trata sobre un guerrero que busca al último dragón?', 'Moana', 'Encanto', 'Raya y el Último Dragón', 'Frozen', 'c', 'medium', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(13, 'En El Viaje de Chihiro, ¿en qué se transforma Haku realmente?', 'Un lobo', 'Un dragón', 'Un fénix', 'Un zorro', 'b', 'hard', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(14, '¿Qué estudio creó la película Shaun el Cordero?', 'Aardman Animations', 'Studio Ghibli', 'Laika', 'Cartoon Saloon', 'a', 'medium', '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(15, '¿Qué explora principalmente Zootopia?', 'Viajes en el tiempo', 'Prejuicio y diversidad', 'Exploración espacial', 'Historia antigua', 'b', 'medium', '2026-06-01 09:15:40', '2026-06-01 09:15:40');

-- Volcando datos para la tabla anifans.trivia_results: ~29 rows (aproximadamente)
INSERT IGNORE INTO `trivia_results` (`id`, `user_id`, `score`, `correct_answers`, `total_questions`, `percentage`, `played_at`, `created_at`, `updated_at`) VALUES
	(1, 2, 80, 8, 10, 80.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(2, 2, 60, 6, 10, 60.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(3, 2, 90, 9, 10, 90.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(4, 2, 90, 9, 10, 90.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(5, 2, 70, 7, 10, 70.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(6, 2, 70, 7, 10, 70.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(7, 3, 90, 9, 10, 90.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(8, 3, 100, 10, 10, 100.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(9, 3, 90, 9, 10, 90.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(10, 3, 60, 6, 10, 60.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(11, 3, 80, 8, 10, 80.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(12, 4, 100, 10, 10, 100.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(13, 4, 90, 9, 10, 90.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(14, 4, 80, 8, 10, 80.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(15, 4, 80, 8, 10, 80.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(16, 4, 70, 7, 10, 70.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(17, 4, 50, 5, 10, 50.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(18, 5, 90, 9, 10, 90.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(19, 5, 80, 8, 10, 80.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(20, 5, 50, 5, 10, 50.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(21, 5, 50, 5, 10, 50.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(22, 5, 80, 8, 10, 80.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(23, 5, 80, 8, 10, 80.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(24, 6, 80, 8, 10, 80.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(25, 6, 80, 8, 10, 80.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(26, 6, 100, 10, 10, 100.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(27, 6, 90, 9, 10, 90.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(28, 6, 100, 10, 10, 100.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41'),
	(29, 6, 100, 10, 10, 100.00, NULL, '2026-06-01 09:15:41', '2026-06-01 09:15:41');

-- Volcando datos para la tabla anifans.users: ~6 rows (aproximadamente)
INSERT IGNORE INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `avatar`, `bio`, `role`, `age`, `gender`, `xp`, `level`, `streak`, `last_played_at`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@anifans.com', NULL, '$2y$12$QjwombwWyPcptM.o4x5Nhu7U2/WJILjEmyDYiJaH.RcoqkBLcX4hq', 'https://ui-avatars.com/api/?name=Admin&background=c24e30&color=fdfaf4', 'AniFans Platform Administrator', 'admin', NULL, NULL, 0, 1, 0, NULL, NULL, '2026-06-01 09:15:37', '2026-06-01 09:15:37'),
	(2, 'cinema_lover', 'cinema@example.com', NULL, '$2y$12$es36XhL81ENbvrL3Zd2WGOSerqKNp1I3b3X7rZIqypT3QL4w3nsFC', 'https://ui-avatars.com/api/?name=Cinema+Lover&background=2e6b2e&color=fdfaf4', 'Passionate about animated cinema', 'user', NULL, NULL, 0, 1, 0, NULL, NULL, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(3, 'ghibli_fan', 'ghibli@example.com', NULL, '$2y$12$CwVZL5d1HgAD0rV9UQ50BOrvP6MGhFSOnN.CGML9K5ifU.dpoPVE6', 'https://ui-avatars.com/api/?name=Ghibli+Fan&background=d4a373&color=2d1f0e', 'Studio Ghibli enthusiast', 'user', NULL, NULL, 0, 1, 0, NULL, NULL, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(4, 'anime_critic', 'critic@example.com', NULL, '$2y$12$UwC9XZ8aBi9wvV8eEKhM3.dS6DCzHZWO/FVa.Ulpv6zW/ls8RGRre', 'https://ui-avatars.com/api/?name=Anime+Critic&background=c24e30&color=fdfaf4', 'Critical reviews of animated films', 'user', NULL, NULL, 0, 1, 0, NULL, NULL, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(5, 'artistry_seeker', 'artist@example.com', NULL, '$2y$12$RTQncNsMKLbc36dkxnKbOeQV6SwrHxKBhSxGs53X066jXeSZiZvJ6', 'https://ui-avatars.com/api/?name=Artistry+Seeker&background=f0e6cc&color=2d1f0e', 'Lover of animation artistry', 'user', NULL, NULL, 0, 1, 0, NULL, NULL, '2026-06-01 09:15:40', '2026-06-01 09:15:40'),
	(6, 'pixel_perfectionist', 'pixel@example.com', NULL, '$2y$12$qhXUR5OS3BHQVdYsmpC5PebZEKloqQwQ.uS22ukshD2SqUGFKJLR6', 'https://ui-avatars.com/api/?name=Pixel+Perfectionist&background=2e6b2e&color=fdfaf4', 'Technical animation aficionado', 'user', NULL, NULL, 0, 1, 0, NULL, NULL, '2026-06-01 09:15:40', '2026-06-01 09:15:40');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
