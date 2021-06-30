-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 30, 2021 at 12:58 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descr` varchar(75) NOT NULL,
  `img` text,
  `section` text NOT NULL,
  `pin` int(1) NOT NULL DEFAULT '0',
  `datep` int(20) NOT NULL,
  `author` varchar(25) NOT NULL,
  `category` varchar(50) NOT NULL,
  `visible` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `descr`, `img`, `section`, `pin`, `datep`, `author`, `category`, `visible`) VALUES
(1, 'PamplemousseCMS ST', 'joined the game, part 2', 'http://localhost/img/default.jpg', '<p><span style=\"font-size:16px\">Welcome to PamplemousseCMS ST !!</span></p>\r\n\r\n<p>Thank you for downloading PamplemousseCMS ST and joining the Pamplemousse.</p>\r\n\r\n<p><span style=\"font-size:12px\">This is the default article, you can edit or delete it.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:12px\">Lucas.</span></p>\r\n', 1, 1623680318, 'Admin', 'General', 1);

-- --------------------------------------------------------

--
-- Table structure for table `articles_categories`
--

CREATE TABLE `articles_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `tag` varchar(25) NOT NULL,
  `visible` int(1) NOT NULL DEFAULT '1',
  `def` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles_categories`
--

INSERT INTO `articles_categories` (`id`, `name`, `tag`, `visible`, `def`) VALUES
(1, 'General', 'general', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `wsname` varchar(30) NOT NULL,
  `wsdescr` varchar(75) NOT NULL,
  `wslink` varchar(100) NOT NULL,
  `wslang` varchar(2) NOT NULL,
  `wstheme` varchar(50) NOT NULL,
  `wspaneltheme` varchar(50) NOT NULL,
  `cmsversion` varchar(10) NOT NULL,
  `wstimezone` varchar(75) NOT NULL,
  `register` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `wsname`, `wsdescr`, `wslink`, `wslang`, `wstheme`, `wspaneltheme`, `cmsversion`, `wstimezone`, `register`) VALUES
(1, 'PamplemousseCMS Demo', 'joined the game, part 2.', 'http://localhost', 'en', 'pm-classic2-230621', 'pm-panel-classic2-230621', 'ST4', 'Europe/Paris', 1);

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

CREATE TABLE `langs` (
  `id` varchar(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `l_accessdenied` text NOT NULL,
  `l_admin` text NOT NULL,
  `l_allarticles` text NOT NULL,
  `l_and` text NOT NULL,
  `l_articlepin` text NOT NULL,
  `l_articlepinned` text NOT NULL,
  `l_articleposted` text NOT NULL,
  `l_articles` text NOT NULL,
  `l_articleupdated` text NOT NULL,
  `l_backwebsite` text NOT NULL,
  `l_badrequest` text NOT NULL,
  `l_ban` text NOT NULL,
  `l_banishoneself` text NOT NULL,
  `l_banned` text NOT NULL,
  `l_by` text NOT NULL,
  `l_cannotchangesuperadmin` text NOT NULL,
  `l_categories` text NOT NULL,
  `l_category` text NOT NULL,
  `l_categoryposted` text NOT NULL,
  `l_categorysametag` text NOT NULL,
  `l_categoryupdated` text NOT NULL,
  `l_config` text NOT NULL,
  `l_create` text NOT NULL,
  `l_createarticle` text NOT NULL,
  `l_createcategory` text NOT NULL,
  `l_createpage` text NOT NULL,
  `l_delete` text NOT NULL,
  `l_descr` text NOT NULL,
  `l_doclang` text NOT NULL,
  `l_edit` text NOT NULL,
  `l_editarticle` text NOT NULL,
  `l_editcategory` text NOT NULL,
  `l_editor` text NOT NULL,
  `l_editpage` text NOT NULL,
  `l_editrank` text NOT NULL,
  `l_edituser` text NOT NULL,
  `l_email` text NOT NULL,
  `l_emailerror` text NOT NULL,
  `l_emailused` text NOT NULL,
  `l_error` text NOT NULL,
  `l_errorserver` text NOT NULL,
  `l_homepage` text NOT NULL,
  `l_httpnotsupported` text NOT NULL,
  `l_general` text NOT NULL,
  `l_id` text NOT NULL,
  `l_image` text NOT NULL,
  `l_impamplemousse` text NOT NULL,
  `l_in` text NOT NULL,
  `l_lang` text NOT NULL,
  `l_lastlogin` text NOT NULL,
  `l_letsgo` text NOT NULL,
  `l_link` text NOT NULL,
  `l_list` text NOT NULL,
  `l_listarticles` text NOT NULL,
  `l_listcategories` text NOT NULL,
  `l_listpages` text NOT NULL,
  `l_listranks` text NOT NULL,
  `l_listusers` text NOT NULL,
  `l_login` text NOT NULL,
  `l_logout` text NOT NULL,
  `l_map` text NOT NULL,
  `l_member` text NOT NULL,
  `l_methodnotallowed` text NOT NULL,
  `l_mostrecentarticles` text NOT NULL,
  `l_mostrecentpages` text NOT NULL,
  `l_mostrecentusers` text NOT NULL,
  `l_myspace` text NOT NULL,
  `l_name` text NOT NULL,
  `l_newemail` text NOT NULL,
  `l_newprofilepic` text NOT NULL,
  `l_newpw` text NOT NULL,
  `l_newpwc` text NOT NULL,
  `l_newusername` text NOT NULL,
  `l_no` text NOT NULL,
  `l_noarticle` text NOT NULL,
  `l_nocategory` text NOT NULL,
  `l_nopage` text NOT NULL,
  `l_notextended` text NOT NULL,
  `l_notfound` text NOT NULL,
  `l_notimplemented` text NOT NULL,
  `l_notregistered` text NOT NULL,
  `l_notregisteredsection1` text NOT NULL,
  `l_notregisteredsection2` text NOT NULL,
  `l_ok` text NOT NULL,
  `l_pageloaded` text NOT NULL,
  `l_pagemenu` text NOT NULL,
  `l_pageposted` text NOT NULL,
  `l_pages` text NOT NULL,
  `l_pageupdated` text NOT NULL,
  `l_pamplemoussecms` text NOT NULL,
  `l_panel` text NOT NULL,
  `l_paneltheme` text NOT NULL,
  `l_permissions` text NOT NULL,
  `l_powered` text NOT NULL,
  `l_publish` text NOT NULL,
  `l_published` text NOT NULL,
  `l_pw` text NOT NULL,
  `l_pwc` text NOT NULL,
  `l_pwerror` text NOT NULL,
  `l_pwmin` text NOT NULL,
  `l_rank` text NOT NULL,
  `l_ranks` text NOT NULL,
  `l_rankupdated` text NOT NULL,
  `l_read` text NOT NULL,
  `l_recover` text NOT NULL,
  `l_register` text NOT NULL,
  `l_registrationdate` text NOT NULL,
  `l_registrationsclosed` text NOT NULL,
  `l_registrationwebsite` text NOT NULL,
  `l_rememberme` text NOT NULL,
  `l_requesttimeout` text NOT NULL,
  `l_seconds` text NOT NULL,
  `l_section` text NOT NULL,
  `l_settings` text NOT NULL,
  `l_settingsupdated` text NOT NULL,
  `l_smarty` text NOT NULL,
  `l_soon` text NOT NULL,
  `l_space` text NOT NULL,
  `l_spaceof` text NOT NULL,
  `l_success` text NOT NULL,
  `l_tag` text NOT NULL,
  `l_theme` text NOT NULL,
  `l_toomanyrequest` text NOT NULL,
  `l_trash` text NOT NULL,
  `l_unban` text NOT NULL,
  `l_username` text NOT NULL,
  `l_usernamemax` text NOT NULL,
  `l_usernamemin` text NOT NULL,
  `l_usernameunauthorized` text NOT NULL,
  `l_usernameused` text NOT NULL,
  `l_users` text NOT NULL,
  `l_userupdated` text NOT NULL,
  `l_version` text NOT NULL,
  `l_website` text NOT NULL,
  `l_wrongemailpw` text NOT NULL,
  `l_yes` text NOT NULL,
  `l_youarebanned` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `name`, `l_accessdenied`, `l_admin`, `l_allarticles`, `l_and`, `l_articlepin`, `l_articlepinned`, `l_articleposted`, `l_articles`, `l_articleupdated`, `l_backwebsite`, `l_badrequest`, `l_ban`, `l_banishoneself`, `l_banned`, `l_by`, `l_cannotchangesuperadmin`, `l_categories`, `l_category`, `l_categoryposted`, `l_categorysametag`, `l_categoryupdated`, `l_config`, `l_create`, `l_createarticle`, `l_createcategory`, `l_createpage`, `l_delete`, `l_descr`, `l_doclang`, `l_edit`, `l_editarticle`, `l_editcategory`, `l_editor`, `l_editpage`, `l_editrank`, `l_edituser`, `l_email`, `l_emailerror`, `l_emailused`, `l_error`, `l_errorserver`, `l_homepage`, `l_httpnotsupported`, `l_general`, `l_id`, `l_image`, `l_impamplemousse`, `l_in`, `l_lang`, `l_lastlogin`, `l_letsgo`, `l_link`, `l_list`, `l_listarticles`, `l_listcategories`, `l_listpages`, `l_listranks`, `l_listusers`, `l_login`, `l_logout`, `l_map`, `l_member`, `l_methodnotallowed`, `l_mostrecentarticles`, `l_mostrecentpages`, `l_mostrecentusers`, `l_myspace`, `l_name`, `l_newemail`, `l_newprofilepic`, `l_newpw`, `l_newpwc`, `l_newusername`, `l_no`, `l_noarticle`, `l_nocategory`, `l_nopage`, `l_notextended`, `l_notfound`, `l_notimplemented`, `l_notregistered`, `l_notregisteredsection1`, `l_notregisteredsection2`, `l_ok`, `l_pageloaded`, `l_pagemenu`, `l_pageposted`, `l_pages`, `l_pageupdated`, `l_pamplemoussecms`, `l_panel`, `l_paneltheme`, `l_permissions`, `l_powered`, `l_publish`, `l_published`, `l_pw`, `l_pwc`, `l_pwerror`, `l_pwmin`, `l_rank`, `l_ranks`, `l_rankupdated`, `l_read`, `l_recover`, `l_register`, `l_registrationdate`, `l_registrationsclosed`, `l_registrationwebsite`, `l_rememberme`, `l_requesttimeout`, `l_seconds`, `l_section`, `l_settings`, `l_settingsupdated`, `l_smarty`, `l_soon`, `l_space`, `l_spaceof`, `l_success`, `l_tag`, `l_theme`, `l_toomanyrequest`, `l_trash`, `l_unban`, `l_username`, `l_usernamemax`, `l_usernamemin`, `l_usernameunauthorized`, `l_usernameused`, `l_users`, `l_userupdated`, `l_version`, `l_website`, `l_wrongemailpw`, `l_yes`, `l_youarebanned`) VALUES
('de', 'Deutsch', 'Zugriff verweigert', 'Betreuung', 'Alle Artikel', 'und', 'Artikel mit stecknadel versehen', 'Dieser Artikel ist festgenagelt', 'Ihr artikel wurde veröffentlicht', 'Artikel', 'Ihr artikel wurde aktualisiert', ' Zurück zur website', 'Falsche abfrage', 'Verbieten', 'Es ist unmöglich, sich selbst zu verbannen', 'verboten', 'von', 'Die Besoldungsgruppe Super-admin kann nicht geändert werden', 'Kategorien', 'Kategorie', 'Ihre Kategorie wurde gepostet', 'Es ist unmöglich, mehrere Kategorien mit demselben Tag zu haben', 'Ihre Kategorie wurde aktualisiert', 'Konfiguration', 'Erstellen', 'Artikel erstellen', 'Kategorie erstellen', 'Seite erstellen', 'Entfernen', 'Beschreibung', 'um eine neue sprache hinzuzufügen, klicken sie hier', 'Bearbeiten', 'Artikel bearbeiten', 'Eine Kategorie bearbeiten', 'Verleger', 'Seite bearbeiten', 'Einen Rang editieren', 'Einen Benutzer bearbeiten', 'E-Mail-Adresse', 'Ihre E-Mail-Adresse ist ungültig', 'Bereits verwendete E-Mail-Adresse', 'Fehler', 'Server-Fehler', 'Startseite', 'HTTP-Version nicht unterstützt', 'Allgemein', 'ID', 'Bild', 'Ich bin eine Pamplemousse', 'in', 'Sprache', 'Letzte verbindung', 'Los geht\'s', 'Verknüpfung', 'Liste', 'Liste der Artikel', 'Liste der Kategorien', 'Liste der Seiten', 'Liste der Besoldungsgruppen', 'Liste der Benutzer', 'Verbinden', 'Verbindung', 'Plan', 'Mitglied', 'Nicht zugelassene Methode', 'Die neuesten Artikel', 'Die aktuellsten Seiten', ' Die neuesten Benutzer', 'Mein Raum', 'Name', 'Neue E-Mail-Adresse', 'Neues Foto im Profil', 'Neues Passwort', 'Neues Passwort bestätigen', 'Neuen Account gemacht ', 'Nein', 'Hier gibt es keine Artikel', 'Hier gibt es keine Kategorie', 'Hier ist keine Seite', 'Nicht erweitert', 'Unauffindbar', 'Nicht implementiert', 'Hey, Sie sind nicht angemeldet', 'Wir sehen, dass Sie nicht auf', 'Melden Sie sich an, um Ihre Beiträge an die Gemeinschaft zu teilen', 'Ihr Konto wurde eingerichtet', 'Seite mit', 'Seite im Menü hinzufügen', 'Ihre Seite wurde veröffentlicht', 'Seiten', 'Ihre Seite wurde gut aktualisiert', 'PamplemousseCMS', 'Panel', 'Thema des panel', 'Berechtigungen', 'wird von', 'Veröffentlichen', 'Veröffentlicht am', 'Passwort', 'Bestätigung Passwort', 'Ihre Passwörter stimmen nicht überein', 'Ihr Passwort muss mindestens 8 Zeichen lang sein', 'Besoldungsgruppe', 'Besoldungsgruppen', 'Der Dienstgrad wurde auf den neuesten Stand gebracht', 'Lesen', 'Zurück', 'Eintragung', 'Datum der Aufnahme', 'Anmeldeschluss auf dieser Website', 'Anmeldung auf der Website', 'Sich an mich erinnern', 'Zeit für Anfragen abgelaufen', 'sekunde(n)', 'Abschniit', 'Einstellungen', 'Ihre Einstellungen wurden aktualisiert', 'Smarty', 'Bald', 'Raum', 'Raum von', 'Erfolg', 'Tag', 'Thema', ' Zu viele Forderungen', 'Mülleimer', 'Entblößen', 'Benutzername', 'Der Benutzername darf 25 Zeichen nicht überschreiten', ' Der Benutzername muss mindestens 3 Zeichen lang sein', 'Nicht autorisierter Benutzername, da Sonderzeichen enthalten oder verboten', 'Bereits verwendeter Benutzername', 'Benutzer', ' Der Benutzer wurde aktualisiert', 'Version', 'Webseite', 'E-mail oder falsches passwort', 'Ja', 'Sie sind von der Website verbannt'),
('en', 'English', 'Access denied', 'Administrator', 'All articles', 'and', 'Pin the article', 'This article is pinned', 'Your article has been posted', 'Articles', 'Your article has been updated', 'Back to the website', 'Bad request', 'Ban', 'It is impossible to banish oneself', 'banned', 'by', ' Cannot change super-admin grade', 'Categories', 'Category', 'Your category has been posted', 'It is impossible to have several categories with the same tag', 'Your category has been updated', 'Configuration', 'Create', 'Create a article', 'Create a category', 'Create a page', 'Delete', 'Description', 'to add a new language, click here', 'Edit', 'Edit a article', 'Edit a category', 'Editor', 'Edit a page', 'Edit a rank', 'Edit a user', 'Email address', 'Your email address is not valid', 'Email address already used', 'Error', 'Error server', 'Homepage', 'HTTP Version not supported', 'General', 'ID', 'Image', 'I\'m a Pamplemousse', 'in', 'Language', 'Last login', 'Let\'s go', 'Link', 'List', 'List of articles', 'List of categories', 'List of pages', 'List of ranks', 'List of users', 'Login', 'Logout', 'Map', 'Member', 'Method not allowed', 'Most recent articles', 'Most recent pages', 'Most recent users', 'My Space', 'Name', 'New email address', 'New profile pic', 'New password', 'New password confirm', 'New username', 'No', 'There are no articles here', 'There are no categories here', 'There are no pages here', 'Not extended', 'Not found', 'Not implemented', 'Hey, you’re not registered', 'I see you’re still not registered on', 'Sign up to share your contributions to the community', 'Your account has been created', 'Page loaded in', 'Add page to menu', 'Your page has been posted', 'Pages', 'Your page has been updated', 'PamplemousseCMS', 'Panel', 'Theme panel', 'Permissions', 'is powered by', 'Publish', 'Published on', 'Password', 'Password confirm', 'Your passwords don’t match', 'Your password must be at least 8 characters', 'Rank', 'Ranks', 'The rank has been updated', 'Read', 'Recover', 'Register', 'Registration date', 'Registrations are closed on this site', 'Registration on the website', 'Remember me', 'Request time out', 'second(s)', 'Section', 'Settings', 'Your settings have been updated', 'Smarty', 'Soon', 'Space', 'Space of', 'Success', 'Tag', 'Theme', 'Too many request', 'Trash', 'Unban', 'Username', 'Username must not exceed 25 characters', 'The username must be a minimum of 3 characters', 'Unauthorized username because it contains special or prohibited characters', 'Username is already in use', 'Users', 'User has been updated', 'Version', 'Website', 'Wrong e-mail address or password', 'Yes', 'You are banned from the site'),
('es', 'Español', '¡Acceso denegado', 'Administrador', 'Todos los artículos', 'y', 'Fijar el artículo', 'Este artículo está sellado', '¡Su artículo ha sido publicado', 'Artículos', '¡Su artículo ha sido actualizado', 'Volver al sitio', '¡Solicitud errónea', 'Desterrar', 'Es imposible desterrarse a sí mismo', 'desterrado', 'por', 'No es posible modificar el grado super-admin', 'Categorías', 'Categoría', '¡Su categoría ha sido publicada', '¡Es imposible tener varias categorías con la misma etiqueta', '¡Su categoría ha sido actualizada', 'Configuración', 'Crear', 'Crear un artículo', 'Crear una categoría', 'Crear una página', 'Eliminar', 'Descripción', 'para añadir un nuevo idioma, haga clic aquí', 'Editar', 'Editar un artículo', 'Editar una categoría', 'Editor', 'Editar una página', 'Editar un grado', 'Editar un usuario', 'Correo electrónico', '¡Su correo electrónico no es válida', '¡Correo electrónico ya utilizada', 'Error', '¡Error de servidor', 'Inicio', '¡Versión HTTP no soportada', 'General', 'ID', 'Imagen', '¡Soy un Pamplemousse', 'en', 'Idioma', 'Última conexión', 'Vamos', 'Enlace', 'Lista', 'Lista de artículos', 'Lista de categorías', 'Lista de páginas', 'Lista de grados', 'Lista de usarios', 'Conexión', 'Desconexión', 'Mapa', 'Miembro', 'Método no permitido', 'Últimos artículos', 'Páginas más recientes', 'Usuarios más recientes', 'Mi Espacio', 'Nombre', 'Nueva dirección de correo electrónico', 'Nueva foto de perfil', 'Nueva contraseña', 'Confirmación nueva contraseña', 'Nuevo nombre de usario', 'No', '¡No hay artículos aquí', '¡No hay categorías aquí', '¡No hay pàgina aquí', '¡No extendido', '¡No encontrada', '¡No implementado', '¡Oye, no estás registrado', 'Vemos que no está registrado en', '¡Regístrese para compartir sus contribuciones a la comunidad', '¡Su cuenta ha sido creada', 'Página cargada en', ' Añadir página al menú', 'Su página ha sido publicada', 'Páginas', 'Su página ha sido actualizada', 'PamplemousseCMS', 'Panel', 'Tema del panel', 'Permisos', 'es impulsado por', 'Publicar', 'Publicado el', 'Contraseña', 'Confirmación de contraseña', '¡Sus contraseñas no coinciden', '¡Su contraseña debe contener al menos 8 caracteres', 'Grado', 'Grados', 'El grado ha sido actualizado', 'Leer', 'Recuperar', 'Inscripción', 'Fecha de inscripción', 'Las inscripciones están cerradas en este sitio', 'Registro en el sitio web', 'Recordarme', '¡Solicitar tiempo muerto', 'segundo(s)', 'Contenido', 'Parámetros', 'La configuración ha sido actualizada', 'Smarty', 'Pronto', 'Espacio', 'Espacio de', 'Éxito', 'Etiqueta', 'Tema', '¡Demasiadas solicitudes', 'Papelera de reciclaje', 'Desempacar', 'Nombre de usuario', ' ¡El nombre de usuario no debe exceder los 25 caracteres', '¡El nombre de usuario debe tener un mínimo de 3 caracteres', '¡Nombre de usuario no autorizado porque contiene caracteres especiales o prohibidos', '¡Nombre de usuario ya utilizado', 'Usuarios', 'El usuario ha sido actualizado', 'Versión', 'Sitio web', '¡Correo electrónico o contraseña incorrecta', 'Sí', 'Usted está desterrado del sitio'),
('fr', 'Français', 'Accès refusé', 'Administrateur', 'Tous les articles', 'et', 'Épingler l\'article', 'Cet article est épinglé', 'Votre article a bien été postée', 'Articles', 'Votre article a été mis à jour', 'Retour vers le site', 'Mauvaise requête', 'Bannir', 'Il est impossible de se bannir soi-même', 'banni', 'par', 'Il est impossible de modifier le grade super-admin', 'Catégories', 'Catégorie', 'Votre catégorie a bien été postée', 'Il est impossible d\'avoir plusieurs catégories avec le même tag', 'Votre catégorie a bien été mis à jour', 'Configuration', 'Créer', 'Créer un article', 'Créer une catégorie', 'Créer une page', 'Effacer', 'Description', 'pour ajouter une nouvelle langue, cliquez-ici', 'Éditer', 'Éditer un article', 'Éditer une catégorie', 'Éditeur', 'Éditer une page', 'Éditer un grade', 'Éditer un utilisateur', 'Adresse email', 'Votre adresse mail n\'est pas valide', 'Adresse mail déjà utilisée', 'Erreur', 'Erreur du serveur', 'Accueil', 'Version HTTP non prise en charge', 'Général', 'ID', 'Image', 'Je suis un Pamplemousse', 'dans', 'Langue', 'Dernière connexion', 'C\'est parti', 'Lien', 'Liste', 'Liste des articles', 'Liste des catégories', 'Liste des pages', 'Liste des grades', 'Liste des utilisateurs', 'Connexion', 'Déconnexion', 'Plan', 'Membre', 'Méthode non-autorisée', 'Articles les plus récents', 'Pages les plus récentes', 'Utilisateurs les plus récents', 'Mon Espace', 'Nom', 'Nouvelle adresse mail', 'Nouvelle photo de profil', 'Nouveau mot de passe', 'Confirmation nouveau mot de passe', 'Nouveau nom d\'utilisateur', 'Non', 'Il n\'y a aucun article ici', 'Il n\'y a aucune catégorie ici', 'Il n\'y a aucune page ici', 'Non étendu', 'Introuvable', 'Non implémenté', 'Hey, vous n\'êtes pas inscrit', 'Nous voyons que vous n\'êtes pas inscrit sur', 'Inscrivez-vous pour partager vos contributions à la communauté', 'Votre compte a bien été crée', 'Page chargée en', 'Ajouter la page sur le menu', 'Votre page a bien été postée', 'Pages', 'Votre page a bien été mis à jour', 'PamplemousseCMS', 'Panel', 'Thème du panel', 'Permissions', 'est propulsé par', 'Publier', 'Publié le', 'Mot de passe', 'Confirmation mot de passe', 'Vos mots de passes ne correspondent pas', 'Votre mot de passe doit contenir au moins 8 caractères', 'Grade', 'Grades', 'Le grade a bien été mis à jour', 'Lire', 'Récupérer', 'Inscription', 'Date d\'inscription', 'Les inscriptions sont fermées sur ce site', 'Inscription sur le site web', 'Se souvenir de moi', 'Temps dépassé pour les requêtes', 'seconde(s)', 'Section', 'Paramètres', 'Vos paramètres ont bien été mis à jour', 'Smarty', 'Bientôt', 'Espace', 'Espace de', 'Succès', 'Tag', 'Thème', 'Trop de requêtes', 'Corbeille', 'Débannir', 'Nom d\'utilisateur', 'Le nom d\'utilisateur ne doit pas dépassé les 25 caractères', 'Le nom d\'utilisateur doit faire minimum 3 caractères', 'Nom d\'utilisateur non-autorisé car il contient des caractères spéciaux ou interdits.Nom d\'utilisateur non-autorisé car il contient des caractères spéciaux ou interdits', 'Nom d\'utilisateur déjà utilisé', 'Utilisateurs', 'L\'utilisateur a été mis à jour', 'Version', 'Site web', 'Adresse email ou mot de passe incorrect', 'Oui', 'Vous êtes banni du site'),
('it', 'Italiano', 'Accesso negato', 'Amministratore', 'Tutti gli articoli', 'e', 'Appuntare l\'articolo', 'Questo articolo è appuntato', 'Il tuo articolo è stato pubblicato', 'Articoli', 'Il tuo articolo è stato aggiornato', 'Ritorno al sito', 'Richiesta errata', 'Bandire', 'È impossibile bandirsi da soli', 'bandito', 'per', 'Impossibile modificare il grado super-admin', 'Categoria', 'Categoria', 'La tua categoria è stata pubblicata', 'È impossibile avere più categorie con lo stesso tag', 'La sua categoria è stata aggiornata', 'Configurazione', 'Crea', 'Crea articolo', 'Creare una categoria', 'Crea pagina', 'Eliminare', 'Descrizione', 'per aggiungere una nuova lingua, clicca qui', 'Modifica', 'Modifica articolo', 'Modifica una categoria', 'Editor', 'Modifica pagina', 'Modificare un grado', ' Modificare un utente', 'Indirizzo e-mail', 'Il tuo indirizzo email non è valido', 'Indirizzo email già usato', 'Errore', 'Errore del server', 'Home', 'Versione HTTP non supportata', 'Generale', 'ID', 'Immagine', 'Sono una Pamplemousse', 'nella', 'Linguaggio', 'Ultima connessione', 'Andiamo', 'Collagamento', 'Lista', 'Lista degli articoli', 'Lista delle categorie', 'Lista delle pagine', 'Lista dei gradi', 'Liste degli utenti', 'Accesso', 'Logout', 'Mappa', 'Membro', 'Metodo non permesso', 'Articoli più recenti', 'Pagine più recenti', ' Utenti più recenti', 'Mia area', 'Nome', 'Nuovo indirizzo email', 'Nuova foto del profilo', 'Nuova password', 'Conferma nuova password', 'Nuovo nome utente', 'Non', 'Non ci sono articoli qui', 'Non c\'è nessuna categoria qui', 'Non c\'è nessuna pagina qui', 'Non esteso', 'Non trovato', 'Non implementato', 'Ehi, non sei registrato', 'Vediamo che non sei registrato su', 'Registrati per condividere i tuoi contributi alla comunità', 'Il tuo account è stato creato correttamente', 'Pagina caricata in', 'Aggiungi pagina al menu', 'La tua pagina è stata pubblicata', 'Pagine', 'La tua pagina è stata aggiornata', 'PamplemousseCMS', 'Panel', 'Tema del panel', 'Permessi', 'è alimentato da', 'Pubblicare', 'Pubblicato il', 'Password', 'Conferma password', 'Le tue password non corrispondono', 'La password deve contenere almeno 8 caratteri', 'Grado', 'Gradi', 'Il grado è stato aggiornato', 'Leggere', 'Recuperare', 'Iscrizione', 'Data d\'iscrizione', ' Le iscrizioni sono chiuse su questo sito', 'Iscrizione al sito web', 'Ricordate di me', 'Tempo scaduto per le richieste', 'attimo', 'Contenuto', 'Impostazioni', ' Le impostazioni sono state aggiornate', 'Smarty', 'Presto', 'Area', 'Area di', 'Successo', 'Tag', 'Tema', 'Troppe richieste', 'Cestino', 'Disfare', 'Nome utente', 'Il nome utente non deve superare i 25 caratteri', ' Il nome utente deve essere almeno 3 caratteri', 'Nome utente non autorizzato in quanto contiene caratteri speciali o vietati', 'Nome utente già in uso', 'Utenti', 'L\'utente è stato aggiornato', 'Rilascio', 'Sito web', 'Indirizzo email o password errati', 'Sì', 'Sei bandito dal sito'),
('nl', 'Nederlands', 'Toegang geweigerd', 'Beheerder', 'Alle artikelen', 'en', 'Zet het artikel vast', 'Dit artikel is gespeld', 'Uw artikel is geplaatst', 'Artikelen', ' Uw artikel is bijgewerkt', 'Terug naar de site', 'Slechte query', 'Bannen', 'Het is onmogelijk om zichzelf te baniseren', 'verbannen', 'van', 'Kan super-admin-kwaliteit niet wijzigen', 'Categorieën', 'Categorie', 'Je categorie is geplaatst', 'Het is onmogelijk om meerdere categorieën met dezelfde tag te hebben', 'Uw categorie is bijgewerkt', 'Configureren', 'Maken', 'Maak een artikel', 'Maak een categorie', 'Maak een pagina', 'Wissen', 'Beschrijving', 'klik hier om een nieuwe taal toe te voegen', 'Bewerken', 'Een artikel bewerken', 'Een categorie bewerken', 'Uitgever', 'Een pagina bewerken', 'Bewerk een cijfer', 'Een gebruiker bewerken', 'E-mailadres', 'Uw e-mailadres is ongeldig', 'E-mailadres wordt al gebruikt', 'Fout', 'Serverfout', 'Startpagina', 'HTTP-versie wordt niet ondersteund', 'Algemeen', 'ID', 'Beeld', ' Ik ben een Pamplemousse', 'in', 'Taal', 'Laatste verbinding', 'Kom op', 'Koppeling', 'Lijst', 'Lijst van artikelen', 'Lijst met categorieën', 'Lijst met pagina\'s', 'Lijst van kwaliteiten', 'Lijst met gebruikers', 'Verbinding', 'Ontkoppeling', 'Map', 'Lid', 'Ongeautoriseerde methode', 'Meest recente artikels', 'Meest recente pagina\'s', 'Meest recente gebruikers', 'Mijn ruimte', 'Naam', 'Nieuw e-mailadres', 'Nieuwe profielfoto', 'Nieuw wachtwoord', 'Bevestig nieuw wachtwoord', 'Nieuwe gebruikersnaam', 'Niet', 'Er zijn hier geen artikelen', 'Er zijn hier geen categorieën', ' Er zijn hier geen pagina\'s', 'Niet verlengd', 'Niet gevonden', 'Niet geïmplementeerd', 'Hé, je bent niet geregistreerd', 'We zien dat u niet bent geregistreerd op', 'Meld je aan om je bijdragen aan de gemeenschap te delen', 'Uw account is gemaakt', 'Pagina geladen in', ' Pagina toevoegen aan menu', 'Uw pagina is geplaatst', 'Pagina\'s', 'Uw pagina is bijgewerkt', 'PamplemousseCMS', 'Panel', 'Thema paneel', 'Permessies', 'wordt aangedreven door', 'Publiceren', 'Publiceerde de', 'Wachtwoord', 'Bevestiging van wachtwoord', 'Uw wachtwoorden komen niet overeen', 'Uw wachtwoord moet minimaal 8 tekens lang zijn', 'Graad', 'Rangen', 'De rang is bijgewerkt', 'Lezen', 'Herstellen', 'Inschrijving', 'Registratiedatum', 'De registratie is op deze site gesloten', 'Registratie op de website', 'Onthoud mij', ' Tijd voor aanvragen overschreden', 'seconde(n)', 'Inhoud', 'Instellingen', 'Uw instellingen zijn bijgewerkt', 'Smarty', 'Binnenkort', 'Ruimte', 'Ruimte van', 'Succes', 'Label', 'Thema', ' Te veel verzoeken', 'Prullenbak', 'Debannen', 'Gebruikersnaam', 'Gebruikersnaam mag niet langer zijn dan 25 tekens', 'Gebruikersnaam moet minimaal 3 tekens lang zijn', 'Niet-geautoriseerde gebruikersnaam omdat deze speciale of verboden tekens bevat', 'Gebruikersnaam wordt al gebruikt', 'Gebruikers', 'Gebruiker is bijgewerkt', 'Versie', 'Webpagina', 'Onjuist e-mailadres of wachtwoord', 'Ja', ' Je bent verboden van de site'),
('pt', 'Português', 'Acesso negado', 'Administrador', 'Todos os artigos', 'e', 'Afixar o artigo', 'Este artigo está marcado', 'O seu artigo foi publicado', 'Artigos', 'Seu artigo foi atualizado', ' Voltar para o site', 'Pedido errado', 'Banir', 'É impossível banirmo-nos a nós próprios', 'banido', 'por', 'Não é possível modificar o grau super-admin', 'Categorias', 'Categoria', 'Sua categoria foi postada bem', 'É impossível ter várias categorias com a mesma tag', 'Sua categoria foi atualizado bem', 'Configuração', 'Criar', 'Criar um artigo', 'Criar uma categoria', 'Criar uma página', 'Apagar', 'Descrição', 'para adicionar uma nova língua, clique aqui', 'Editar', 'Editar um artigo', 'Editar uma categoria', 'Editora', 'Editar uma página', ' Editar um Grau', 'Editar um utilizador', 'Endereço de e-mail', 'O seu e-mail não é válido', 'Endereço de e-mail já utilizado', 'Erro', 'Erro do servidor', 'Página inicial', 'Versão HTTP não suportada', 'Geral', 'ID', 'Imagem', 'Eu sou uma Pamplemousse', 'na', 'Idioma', 'Última conexão', 'Vamos', 'Link', 'Lista', 'Lista dos artigos', 'Lista de categorias', 'Lista de páginas', 'Lista dos graus', 'Lista de usuários', 'Conexão', 'Desconexão', 'Mapa', 'Membro', 'Método não autorizado', 'Artigos mais recentes', 'Páginas mais recentes', 'Utilizadores mais recentes', 'Meu espaço', 'Nome', 'Novo endereço de e-mail', 'Nova foto de perfil', 'Nova senha', 'Confirmação da nova senha', 'Novo nome de usuário', 'Não', 'Não há nenhum artigo aqui', 'Não há nenhuma categoria aqui', 'Não há nenhuma página aqui', 'Estendido', 'Não encontrado', 'Não implementado', 'Ei, você não está registrado', 'Vemos que não está inscrito em', 'Inscreva-se para compartilhar suas contribuições para a comunidade', 'A sua conta foi criada', 'Página carregada em', 'Adicionar a página do menu', 'A sua página foi postada', 'Páginas', 'Sua página foi atualizada bem', 'PamplemousseCMS', 'Painel', 'Tema do painel', 'Permissões', 'é alimentado por', 'Publicar', 'Publicado em', 'Senha', 'Confirmação da Senha', 'As suas senhas não correspondem', 'Sua senha deve conter pelo menos 8 caracteres', 'Grau', 'Graus', 'O grau foi atualizado', 'Ler', 'Recuperar', 'Inscrição', 'Data de inscrição', 'As inscrições estão fechadas neste site', 'Inscrição no sítio web', 'Lembrar-se de mim', 'Expirou o tempo de requisição', 'segundo(s)', 'Conteúdo', 'Parâmetros', 'Suas configurações foram atualizadas', 'Smarty', 'Em breve', 'Área', 'Área de', 'Sucesso', 'Tag', 'Tema', 'Demasiados pedidos', 'Lixeira', 'Empacotar', 'Nome de usuário', 'O utilizador não deverá ter mais de 25 caracteres', 'O nome de utilizador deve ter pelo menos 3 caracteres', 'Nome de utilizador não autorizado porque contém caracteres especiais ou proibidos', ' Nome de utilizador já utilizado', 'Usuários', 'O utilizador foi actualizado', 'Lançamento', 'Sítio web', 'Endereço de email ou senha inválidos', 'Sim', 'Você está banido do site');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `section` text NOT NULL,
  `datep` int(20) NOT NULL,
  `author` varchar(25) NOT NULL,
  `menu` int(1) NOT NULL DEFAULT '1',
  `visible` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `section`, `datep`, `author`, `menu`, `visible`) VALUES
(1, 'Example page!!', '<p>This is an example page.<br />\r\n<br />\r\nHi! I hope you&rsquo;re okay.</p>\r\n', 1622446685, 'Admin', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pw` text NOT NULL,
  `rank` int(2) NOT NULL,
  `register` int(20) NOT NULL,
  `lastlogin` int(20) NOT NULL,
  `profilepicture` text NOT NULL,
  `ban` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `pw`, `rank`, `register`, `lastlogin`, `profilepicture`, `ban`) VALUES
(1, 'Admin', 'admin@pamplemoussecms.com', '$2y$10$slGTsjZF6VfVOgyFc7Fse.k./FooY/nQTdgY/4.IXwIj0pcIzXgua', 4, 1622642008, 1625057111, 'http://localhost/img/profile.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_ranks`
--

CREATE TABLE `users_ranks` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `p_articles` int(1) NOT NULL,
  `p_categories` int(1) NOT NULL,
  `p_configuration` int(1) NOT NULL,
  `p_pages` int(1) NOT NULL,
  `p_panelaccess` int(1) NOT NULL,
  `p_ranks` int(1) NOT NULL,
  `p_users` int(1) NOT NULL,
  `superadmin` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_ranks`
--

INSERT INTO `users_ranks` (`id`, `name`, `p_articles`, `p_categories`, `p_configuration`, `p_pages`, `p_panelaccess`, `p_ranks`, `p_users`, `superadmin`) VALUES
(1, 'Member', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Editor', 1, 1, 0, 1, 1, 0, 0, 0),
(3, 'Administrator', 1, 1, 1, 1, 1, 1, 1, 0),
(4, 'Super-Admin', 1, 1, 1, 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username_author` (`author`) USING BTREE,
  ADD KEY `category_name` (`category`);

--
-- Indexes for table `articles_categories`
--
ALTER TABLE `articles_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username_author2` (`author`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_ranks`
--
ALTER TABLE `users_ranks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles_categories`
--
ALTER TABLE `articles_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_ranks`
--
ALTER TABLE `users_ranks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `category_name` FOREIGN KEY (`category`) REFERENCES `articles_categories` (`name`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `username_author` FOREIGN KEY (`author`) REFERENCES `users` (`username`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `username_author2` FOREIGN KEY (`author`) REFERENCES `users` (`username`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
