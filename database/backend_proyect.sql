-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2021 a las 09:50:23
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `backend_proyect`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `menu_id` char(36) COLLATE utf8_spanish_ci DEFAULT NULL,
  `icon` varchar(150) COLLATE utf8_spanish_ci DEFAULT 'icon-circle',
  `name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `href` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `position` tinyint(4) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `menu_id`, `icon`, `name`, `href`, `position`, `active`, `deleted`, `created`, `modified`) VALUES
('03b88f63-9478-4685-aac1-8b1af8948348', NULL, 'icon-grid', 'Catálogos', '/', 2, 1, 1, '2021-05-14 12:21:24', '2021-09-14 20:24:30'),
('124c4b75-d3c2-4c1c-834b-2e6e005d76ca', NULL, 'icon-monitor', 'Tablero', '/Dashboard/index/', 1, 1, 1, '2021-05-26 14:06:19', '2021-09-14 20:29:34'),
('230a27cd-1f74-4a1c-87d9-f4ec11fd7798', '03b88f63-9478-4685-aac1-8b1af8948348', 'icon-circle', 'Plazos', '/Terms/index', 2, 1, 1, '2021-05-14 12:23:48', '2021-09-14 20:25:04'),
('392c1e4f-07d8-4755-aea8-02fc1f0a990d', NULL, 'icon-server', 'Administración', '/', 5, 1, 0, '2021-05-14 12:58:10', '2021-05-14 12:58:10'),
('39811806-a2d9-48e9-89d8-af089199063a', '392c1e4f-07d8-4755-aea8-02fc1f0a990d', 'icon-circle', 'Roles', '/Roles/index', 1, 1, 0, '2021-05-14 12:58:50', '2021-09-14 21:21:35'),
('4105f8cb-112d-44a6-8d06-41989dd14a92', NULL, 'icon-home', 'Inicio', '/Dashboard/index/', 1, 1, 0, '2021-04-30 14:55:37', '2021-09-14 21:05:58'),
('4b549bef-ab6d-4982-97c6-cdb66515b36e', NULL, 'icon-settings', 'Opciones', '/Options/index', 4, 1, 1, '2021-05-14 12:53:54', '2021-09-14 20:28:43'),
('550c223c-f7a7-4e42-acd3-c930b17a5d92', '4105f8cb-112d-44a6-8d06-41989dd14a92', 'icon-circle', 'Presentación', '/Dashboard/index/', 1, 1, 1, '2021-05-13 13:28:05', '2021-09-14 21:06:06'),
('5abdb0c4-0848-4128-81ad-819959194b49', NULL, 'icon-box', 'Mis Pedidos', '/Orders/Myorders/', 2, 1, 1, '2021-05-26 14:11:47', '2021-09-14 20:28:54'),
('5d33adac-02fa-4007-9d94-27142002697e', NULL, 'icon-clock', 'Registros', '/Logs/index', 6, 1, 1, '2021-05-14 13:18:39', '2021-09-14 20:29:01'),
('7af358c7-fd58-488d-9892-f4d11612c1ad', NULL, 'icon-users', 'Usuarios', '/Users/index', 3, 1, 0, '2021-05-14 12:36:24', '2021-05-14 12:36:24'),
('7d1f7ca0-b88f-4210-9b63-5d6cf846b6a7', '392c1e4f-07d8-4755-aea8-02fc1f0a990d', 'icon-circle', 'Permisos', '/Permissions/index', 3, 1, 0, '2021-05-14 13:01:16', '2021-05-14 13:01:59'),
('7e736b12-a78b-4cf3-a3d3-cbb62e1af502', NULL, 'icon-user', 'Mi cuenta', '/Users/account', 3, 1, 1, '2021-05-26 14:13:24', '2021-09-14 20:29:58'),
('823b5c72-f5f5-4b26-b557-e713c6323f6e', '03b88f63-9478-4685-aac1-8b1af8948348', 'icon-circle', 'Productos', '/CatProducts/index', 1, 1, 1, '2021-05-14 12:22:49', '2021-09-14 20:28:14'),
('957e09a3-95e7-4181-b27f-e7eb7ea007d7', '392c1e4f-07d8-4755-aea8-02fc1f0a990d', 'icon-circle', 'Menús', '/Menus/index', 2, 1, 0, '2021-05-14 13:00:13', '2021-05-14 13:00:38'),
('aee9ca19-11b2-4335-a2a3-d3823d4cfacd', '03b88f63-9478-4685-aac1-8b1af8948348', 'icon-circle', 'Generos', '/Genders/index', 5, 1, 1, '2021-05-14 12:27:33', '2021-05-31 10:36:31'),
('b72b3e3f-04af-46f4-a7df-185e55f798ef', '03b88f63-9478-4685-aac1-8b1af8948348', 'icon-circle', 'Localidades', '/CatLocalities/index', 4, 1, 1, '2021-05-14 12:26:17', '2021-09-14 20:27:45'),
('c1e96934-bb8b-473f-ad14-67b3a8bc13de', NULL, 'icon-book-open', 'Publicaciones', '/Posts/index', 2, 1, 1, '2021-05-14 12:18:04', '2021-09-14 23:54:44'),
('e1d8c006-3be1-4432-995f-8dfb1652abe6', '03b88f63-9478-4685-aac1-8b1af8948348', 'icon-circle', 'Municipios', '/CatMunicipalities/index', 3, 1, 1, '2021-05-14 12:25:30', '2021-09-14 20:27:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `controller` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `action` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `controller`, `action`, `active`, `deleted`, `created`, `modified`) VALUES
('0a259ce5-e7f4-4515-8db5-5d69bc619bd5', 'Acceder al Inicio', 'Acceder al Inicio', 'Dashboard', 'dashboard', 1, 0, '2021-05-15 12:51:01', '2021-09-14 22:28:27'),
('0a449318-92d2-42c2-87f1-892e5f5b181d', 'Acceder a Mis Pedidos', 'Acceso a Mis Pedidos', 'Orders', 'myorders', 1, 1, '2021-05-15 12:52:13', '2021-09-14 22:28:39'),
('3f641f33-7ee4-432b-8b9c-a86b7ea04f7f', 'Acceder a la cuenta del usuario', 'Acceder a la cuenta del usuario', 'Users', 'account', 1, 1, '2021-05-15 12:53:47', '2021-09-14 22:28:48'),
('4105f8cb-112d-44a6-8d06-41989dd14a92', 'Todos los permisos', 'Todos los permisos y acciones del sistema', '*', '*', 1, 0, '2021-04-30 14:52:34', '2021-04-30 14:52:34'),
('7797caa8-ce3f-4ebf-bd35-e937820c5592', 'Ver productos', 'Ver la lista de los productos', 'CatProducts', 'index', 1, 1, '2021-05-15 12:53:00', '2021-09-14 22:27:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `title` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `user_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `page` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color_icon` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `page`, `icon`, `color_icon`, `active`, `deleted`, `created`, `modified`) VALUES
('2d16d379-3a35-4fa2-b6db-6fd74808a3e5', 'Usuario de registro', 'Usuario para agregar publicaciones', NULL, 'icon-plus-circle', 'primary', 1, 0, '2021-09-14 23:00:59', '2021-09-14 23:36:14'),
('4105f8cb-112d-44a6-8d06-41989dd14a92', 'Administrador', 'Administrador del sistema', 'admin', 'icon-server', 'danger', 1, 0, '2021-04-30 14:51:20', '2021-05-15 14:09:34'),
('42d9523f-a62e-4f0d-a4af-a821167a0f35', 'Usuario de registro y actualización', 'Usuario para crear publicaciones y actualizarlos', NULL, 'icon-edit', 'success', 1, 0, '2021-09-14 23:03:07', '2021-09-14 23:33:08'),
('4ab19130-67fa-418c-9f39-513d1325977b', 'Usuario de acceso', 'Rol de usuario básico', NULL, 'icon-user', 'secondary', 1, 0, '2021-05-14 14:15:45', '2021-09-14 23:33:35'),
('54a73610-9e57-4714-a448-7f488df29a5a', 'Usuario de consulta', 'Usuario para consultar las publicaciones', NULL, 'icon-eye', 'info', 1, 0, '2021-09-14 22:59:49', '2021-09-14 23:33:47'),
('b44e618c-c4a6-47df-8a32-2921ad3f5206', 'Gestor de publicaciones', 'Usuario que podra agregar, editar y eliminar publicaciones', NULL, 'icon-settings', 'warning', 1, 0, '2021-09-14 23:26:32', '2021-09-14 23:32:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_menus`
--

CREATE TABLE `roles_menus` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `role_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `menu_id` char(36) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles_menus`
--

INSERT INTO `roles_menus` (`id`, `role_id`, `menu_id`) VALUES
('0be2ea9a-464b-489a-b122-11e6eaf334f5', '2d16d379-3a35-4fa2-b6db-6fd74808a3e5', '4105f8cb-112d-44a6-8d06-41989dd14a92'),
('0c11543f-2de6-4bdb-8af6-7fd7250fb5a1', '4105f8cb-112d-44a6-8d06-41989dd14a92', 'aee9ca19-11b2-4335-a2a3-d3823d4cfacd'),
('0f02f9c3-f524-4eea-ac30-87affb1fb743', '4105f8cb-112d-44a6-8d06-41989dd14a92', '03b88f63-9478-4685-aac1-8b1af8948348'),
('16f81052-a435-422f-8b26-9ccc618034a8', '4105f8cb-112d-44a6-8d06-41989dd14a92', 'b72b3e3f-04af-46f4-a7df-185e55f798ef'),
('18b58455-d347-4581-9af7-a557f194cb12', '4ab19130-67fa-418c-9f39-513d1325977b', '4105f8cb-112d-44a6-8d06-41989dd14a92'),
('32cd7f7d-3f92-4d7a-abee-3446883eae2b', 'b44e618c-c4a6-47df-8a32-2921ad3f5206', '4105f8cb-112d-44a6-8d06-41989dd14a92'),
('3d4cfee0-c076-48cb-a7d7-696aed8e55e7', '54a73610-9e57-4714-a448-7f488df29a5a', '4105f8cb-112d-44a6-8d06-41989dd14a92'),
('3e46dffb-214a-4e2a-b2f6-fcfea18d2c2d', '4105f8cb-112d-44a6-8d06-41989dd14a92', '4b549bef-ab6d-4982-97c6-cdb66515b36e'),
('4105f8cb-112d-44a6-8d06-41989dd14a92', '4105f8cb-112d-44a6-8d06-41989dd14a92', '4105f8cb-112d-44a6-8d06-41989dd14a92'),
('496ea2d5-f477-4621-8b14-945633a280f7', '54a73610-9e57-4714-a448-7f488df29a5a', 'c1e96934-bb8b-473f-ad14-67b3a8bc13de'),
('5413e646-88d3-4b45-a5cf-099ee417d0a2', 'b44e618c-c4a6-47df-8a32-2921ad3f5206', 'c1e96934-bb8b-473f-ad14-67b3a8bc13de'),
('5ff71689-0470-49e8-aee1-e4ddac95d87a', '4105f8cb-112d-44a6-8d06-41989dd14a92', '5d33adac-02fa-4007-9d94-27142002697e'),
('6f4d3030-bdf5-4879-a51f-fde2ac2af8cd', '2d16d379-3a35-4fa2-b6db-6fd74808a3e5', 'c1e96934-bb8b-473f-ad14-67b3a8bc13de'),
('8e54fb40-d745-49d3-b437-3bdb50565432', '4105f8cb-112d-44a6-8d06-41989dd14a92', 'c1e96934-bb8b-473f-ad14-67b3a8bc13de'),
('96ceb327-2578-47ea-86b3-bfe545651c71', '4105f8cb-112d-44a6-8d06-41989dd14a92', '7af358c7-fd58-488d-9892-f4d11612c1ad'),
('a065eb63-0138-4504-8c05-c6eecb47ac62', '4105f8cb-112d-44a6-8d06-41989dd14a92', '392c1e4f-07d8-4755-aea8-02fc1f0a990d'),
('a74b6103-e6ba-4098-a664-e90c522c0b6a', '4105f8cb-112d-44a6-8d06-41989dd14a92', '957e09a3-95e7-4181-b27f-e7eb7ea007d7'),
('b34be19e-6f0f-4db3-81d1-b91bfd93db4c', '42d9523f-a62e-4f0d-a4af-a821167a0f35', '4105f8cb-112d-44a6-8d06-41989dd14a92'),
('b4005fef-d6a7-4d1f-973f-15d8619930bf', '4105f8cb-112d-44a6-8d06-41989dd14a92', '823b5c72-f5f5-4b26-b557-e713c6323f6e'),
('c41480f6-6ec9-4ede-a4f9-8136cf6e7f84', '4105f8cb-112d-44a6-8d06-41989dd14a92', '230a27cd-1f74-4a1c-87d9-f4ec11fd7798'),
('c92705f8-1a47-4834-8c01-806e04a57a76', '4105f8cb-112d-44a6-8d06-41989dd14a92', 'e1d8c006-3be1-4432-995f-8dfb1652abe6'),
('d17e0101-710c-4c7b-9e16-b868b210a6b8', '4105f8cb-112d-44a6-8d06-41989dd14a92', '39811806-a2d9-48e9-89d8-af089199063a'),
('db0dea85-4292-4908-97e2-a738ba2c97b4', '4105f8cb-112d-44a6-8d06-41989dd14a92', '7d1f7ca0-b88f-4210-9b63-5d6cf846b6a7'),
('e618287b-c14a-4ef7-a58a-4db8a61aef25', '4105f8cb-112d-44a6-8d06-41989dd14a92', '550c223c-f7a7-4e42-acd3-c930b17a5d92'),
('ec71fdb2-4f98-4516-a268-263ee0ce2e76', '42d9523f-a62e-4f0d-a4af-a821167a0f35', 'c1e96934-bb8b-473f-ad14-67b3a8bc13de');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `role_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `permission_id` char(36) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles_permissions`
--

INSERT INTO `roles_permissions` (`id`, `role_id`, `permission_id`) VALUES
('4105f8cb-112d-44a6-8d06-41989dd14a92', '4105f8cb-112d-44a6-8d06-41989dd14a92', '4105f8cb-112d-44a6-8d06-41989dd14a92'),
('4497b37a-75d7-47c7-be65-bc099454603d', '4ab19130-67fa-418c-9f39-513d1325977b', '0a259ce5-e7f4-4515-8db5-5d69bc619bd5'),
('5a91b191-0f1e-48af-ac09-ea3436563e9c', '2d16d379-3a35-4fa2-b6db-6fd74808a3e5', '0a259ce5-e7f4-4515-8db5-5d69bc619bd5'),
('6c6322db-caa5-4ea8-83a4-c07f13e2e667', 'b44e618c-c4a6-47df-8a32-2921ad3f5206', '0a259ce5-e7f4-4515-8db5-5d69bc619bd5'),
('8bf732e6-674b-4204-9267-8f302521af5d', '54a73610-9e57-4714-a448-7f488df29a5a', '0a259ce5-e7f4-4515-8db5-5d69bc619bd5'),
('d24ed44c-0a19-47c1-95b1-d401172dbadb', '42d9523f-a62e-4f0d-a4af-a821167a0f35', '0a259ce5-e7f4-4515-8db5-5d69bc619bd5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `role_id` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `mother_last_name` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `theme` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `user`, `password`, `name`, `last_name`, `mother_last_name`, `email`, `theme`, `active`, `deleted`, `created`, `modified`) VALUES
('4b8d094c-eab6-47c2-a3ee-e90a7e5ecf02', '4ab19130-67fa-418c-9f39-513d1325977b', 'jorge', '$2y$10$ycQFcU/tLkVP3d41v5TVF.xPHLj2CZEa.rn3Gq7dPOcL9OtAppXeu', 'Jorge', 'Itza', 'Gomez', 'jorgeitza023@gmail.com', 'light', 1, 0, '2021-05-24 14:58:01', '2021-05-26 12:32:44'),
('fba56bd9-b1c2-11eb-ae70-0021ccb8b7e2', '4105f8cb-112d-44a6-8d06-41989dd14a92', 'admin', '$2y$10$EJ.QRFNxRxDVXhgAMO47Eeg1e3cKzeI4rSey0KoyEPfqk448PlXN.', 'Jodelle', 'Ferland', 'Micah', 'alessagillespie9y@hotmail.com', 'dark', 1, 0, '2021-05-10 14:07:37', '2021-09-15 02:22:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles_menus`
--
ALTER TABLE `roles_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_group_id` (`role_id`),
  ADD KEY `co_menu_id` (`menu_id`);

--
-- Indices de la tabla `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_group_id` (`role_id`),
  ADD KEY `co_permission_id` (`permission_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_group_id` (`role_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `roles_menus`
--
ALTER TABLE `roles_menus`
  ADD CONSTRAINT `roles_menus_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `roles_menus_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD CONSTRAINT `roles_permissions_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `roles_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
