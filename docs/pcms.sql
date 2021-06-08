-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2021 at 02:15 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.19

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
  `title` varchar(75) NOT NULL,
  `descr` varchar(50) NOT NULL DEFAULT 'Aucune description.',
  `img` text,
  `section` text NOT NULL,
  `pin` int(1) NOT NULL DEFAULT '0',
  `datep` text NOT NULL,
  `author` varchar(25) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `descr`, `img`, `section`, `pin`, `datep`, `author`, `visible`) VALUES
(1, 'PamplemousseCMS ST', 'joined the game, part 2.', '/img/default.jpg', '<p><span style=\"font-size:16px\">Welcome to PamplemousseCMS ST !!</span></p>\r\n\r\n<p>Thank you for downloading PamplemousseCMS ST and joining the Pamplemousse.</p>\r\n\r\n<p><span style=\"font-size:12px\">This is the default article, you can edit or delete it.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:12px\">Lucas.</span></p>\r\n', 1, '1622211122', 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `wsname` varchar(50) NOT NULL,
  `wsdescr` varchar(100) NOT NULL,
  `wslink` varchar(50) NOT NULL,
  `wslang` varchar(3) NOT NULL,
  `wstheme` varchar(50) NOT NULL,
  `wsversion` varchar(10) NOT NULL,
  `wstimezone` text NOT NULL,
  `register` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `wsname`, `wsdescr`, `wslink`, `wslang`, `wstheme`, `wsversion`, `wstimezone`, `register`) VALUES
(1, 'PamplemousseCMS Demo', 'joined the game, part 2.', 'http://localhost', 'en', 'plm-classic2-270521', 'ST2', 'Europe/Paris', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `id` varchar(75) NOT NULL,
  `name` text NOT NULL,
  `l_accessdenied` text NOT NULL,
  `l_admin` text NOT NULL,
  `l_articlepin` text NOT NULL,
  `l_articleposted` text NOT NULL,
  `l_articles` text NOT NULL,
  `l_articleupdated` text NOT NULL,
  `l_backwebsite` text NOT NULL,
  `l_badrequest` text NOT NULL,
  `l_ban` text NOT NULL,
  `l_banned` text NOT NULL,
  `l_by` text NOT NULL,
  `l_config` text NOT NULL,
  `l_create` text NOT NULL,
  `l_createarticle` text NOT NULL,
  `l_createpage` text NOT NULL,
  `l_delete` text NOT NULL,
  `l_descr` text NOT NULL,
  `l_doclang` text NOT NULL,
  `l_edit` text NOT NULL,
  `l_editarticle` text NOT NULL,
  `l_editor` text NOT NULL,
  `l_editpage` text NOT NULL,
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
  `l_implmousse` text NOT NULL,
  `l_lang` text NOT NULL,
  `l_lastlogin` text NOT NULL,
  `l_letsgo` text NOT NULL,
  `l_link` text NOT NULL,
  `l_list` text NOT NULL,
  `l_listarticles` text NOT NULL,
  `l_listpages` text NOT NULL,
  `l_listusers` text NOT NULL,
  `l_login` text NOT NULL,
  `l_logout` text NOT NULL,
  `l_map` text NOT NULL,
  `l_member` text NOT NULL,
  `l_methodnotallowed` text NOT NULL,
  `l_mostrecentarticles` text NOT NULL,
  `l_myspace` text NOT NULL,
  `l_name` text NOT NULL,
  `l_newemail` text NOT NULL,
  `l_newprofilepic` text NOT NULL,
  `l_newpw` text NOT NULL,
  `l_newpwc` text NOT NULL,
  `l_newusername` text NOT NULL,
  `l_no` text NOT NULL,
  `l_noarticle` text NOT NULL,
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
  `l_panel` text NOT NULL,
  `l_powered` text NOT NULL,
  `l_publish` text NOT NULL,
  `l_published` text NOT NULL,
  `l_pw` text NOT NULL,
  `l_pwc` text NOT NULL,
  `l_pwerror` text NOT NULL,
  `l_rank` text NOT NULL,
  `l_read` text NOT NULL,
  `l_recover` text NOT NULL,
  `l_register` text NOT NULL,
  `l_registrationdate` text NOT NULL,
  `l_registrationwebsite` text NOT NULL,
  `l_registrationsclosed` text NOT NULL,
  `l_rememberme` text NOT NULL,
  `l_requesttimeout` text NOT NULL,
  `l_seconds` text NOT NULL,
  `l_section` text NOT NULL,
  `l_settings` text NOT NULL,
  `l_soon` text NOT NULL,
  `l_space` text NOT NULL,
  `l_spaceof` text NOT NULL,
  `l_theme` text NOT NULL,
  `l_toomanyrequest` text NOT NULL,
  `l_trash` text NOT NULL,
  `l_unban` text NOT NULL,
  `l_username` text NOT NULL,
  `l_usernamemax` text NOT NULL,
  `l_usernamemin` text NOT NULL,
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
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `name`, `l_accessdenied`, `l_admin`, `l_articlepin`, `l_articleposted`, `l_articles`, `l_articleupdated`, `l_backwebsite`, `l_badrequest`, `l_ban`, `l_banned`, `l_by`, `l_config`, `l_create`, `l_createarticle`, `l_createpage`, `l_delete`, `l_descr`, `l_doclang`, `l_edit`, `l_editarticle`, `l_editor`, `l_editpage`, `l_edituser`, `l_email`, `l_emailerror`, `l_emailused`, `l_error`, `l_errorserver`, `l_homepage`, `l_httpnotsupported`, `l_general`, `l_id`, `l_image`, `l_implmousse`, `l_lang`, `l_lastlogin`, `l_letsgo`, `l_link`, `l_list`, `l_listarticles`, `l_listpages`, `l_listusers`, `l_login`, `l_logout`, `l_map`, `l_member`, `l_methodnotallowed`, `l_mostrecentarticles`, `l_myspace`, `l_name`, `l_newemail`, `l_newprofilepic`, `l_newpw`, `l_newpwc`, `l_newusername`, `l_no`, `l_noarticle`, `l_nopage`, `l_notextended`, `l_notfound`, `l_notimplemented`, `l_notregistered`, `l_notregisteredsection1`, `l_notregisteredsection2`, `l_ok`, `l_pageloaded`, `l_pagemenu`, `l_pageposted`, `l_pages`, `l_pageupdated`, `l_panel`, `l_powered`, `l_publish`, `l_published`, `l_pw`, `l_pwc`, `l_pwerror`, `l_rank`, `l_read`, `l_recover`, `l_register`, `l_registrationdate`, `l_registrationwebsite`, `l_registrationsclosed`, `l_rememberme`, `l_requesttimeout`, `l_seconds`, `l_section`, `l_settings`, `l_soon`, `l_space`, `l_spaceof`, `l_theme`, `l_toomanyrequest`, `l_trash`, `l_unban`, `l_username`, `l_usernamemax`, `l_usernamemin`, `l_usernameused`, `l_users`, `l_userupdated`, `l_version`, `l_website`, `l_wrongemailpw`, `l_yes`, `l_youarebanned`) VALUES
('de', 'Deutsch', 'Zugriff verweigert', 'Betreuung', 'Artikel mit stecknadel versehen', 'Ihr artikel wurde veröffentlicht', 'Artikel', 'Ihr artikel wurde aktualisiert', ' Zurück zur website', 'Falsche abfrage', 'Verbieten', 'verboten', 'von', 'Konfiguration', 'Erstellen', 'Artikel erstellen', 'Seite erstellen', 'Entfernen', 'Beschreibung', 'um eine neue sprache hinzuzufügen, klicken sie hier', 'Bearbeiten', 'Artikel bearbeiten', 'Verleger', 'Seite bearbeiten', 'Einen bearbeiten', 'E-Mail-Adresse', 'Ihre E-Mail-Adresse ist ungültig', 'Bereits verwendete E-Mail-Adresse', 'Fehler', 'Server-Fehler', 'Startseite', 'HTTP-Version nicht unterstützt', 'Allgemein', 'ID', 'Bild', 'Ich bin eine Pamplemousse', 'Sprache', 'Letzte verbindung', 'Los geht\'s', 'Verknüpfung', 'Liste', 'Liste der Artikel', 'Liste der Seiten', 'Liste der Benutzer', 'Verbinden', 'Verbindung', 'Plan', 'Mitglied', 'Nicht zugelassene Methode', 'Die neuesten Artikel', 'Mein Raum', 'Name', 'Neue E-Mail-Adresse', 'Neues Foto im Profil', 'Neues Passwort', 'Neues Passwort bestätigen', 'Neuen Account gemacht ', 'Nein', 'Hier gibt es keine Artikel', 'Hier ist keine Seite', 'Nicht erweitert', 'Unauffindbar', 'Nicht implementiert', 'Hey, Sie sind nicht angemeldet', 'Wir sehen, dass Sie nicht auf', 'Melden Sie sich an, um Ihre Beiträge an die Gemeinschaft zu teilen', 'Ihr Konto wurde eingerichtet', 'Seite mit', 'Seite im Menü hinzufügen', 'Ihre Seite wurde veröffentlicht', 'Seiten', 'Ihre Seite wurde gut aktualisiert', 'Panel', 'wird von', 'Veröffentlichen', 'Veröffentlicht am', 'Passwort', 'Bestätigung Passwort', 'Ihre Passwörter stimmen nicht überein', 'Besoldungsgruppe', 'Lesen', 'Zurück', 'Eintragung', 'Datum der Aufnahme', 'Anmeldung auf der Website', 'Anmeldeschluss auf dieser Website', 'Sich an mich erinnern', 'Zeit für Anfragen abgelaufen', 'sekunde(n)', 'Abschniit', 'Einstellungen', 'Bald', 'Raum', 'Raum von', 'Thema', ' Zu viele Forderungen', 'Mülleimer', 'Entblößen', 'Benutzername', 'Der Benutzername darf 25 Zeichen nicht überschreiten', ' Der Benutzername muss mindestens 3 Zeichen lang sein', 'Bereits verwendeter Benutzername', 'Benutzer', ' Der Benutzer wurde aktualisiert', 'Version', 'Webseite', 'E-mail oder falsches passwort', 'Ja', 'Sie sind von der Website verbannt'),
('en', 'English', 'Access denied', 'Administrator', 'Pin the article', 'Your article has been posted', 'Articles', 'Your article has been updated', 'Back to the website', 'Bad request', 'Ban', 'banned', 'by', 'Configuration', 'Create', 'Create a article', 'Create a page', 'Delete', 'Description', 'to add a new language, click here', 'Edit', 'Edit a article', 'Editor', 'Edit a page', 'Edit a user', 'Email address', 'Your email address is not valid', 'Email address already used', 'Error', 'Error server', 'Homepage', 'HTTP Version not supported', 'General', 'ID', 'Image', 'I\'m a Pamplemousse', 'Language', 'Last login', 'Let\'s go', 'Link', 'List', 'List of articles', 'List of pages', 'List of users', 'Login', 'Logout', 'Map', 'Member', 'Method not allowed', 'Most recent articles', 'My Space', 'Name', 'New email address', 'New profile pic', 'New password', 'New password confirm', 'New username', 'No', 'There are no articles here', 'There are no pages here', 'Not extended', 'Not found', 'Not implemented', 'Hey, you’re not registered', 'I see you’re still not registered on', 'Sign up to share your contributions to the community', 'Your account has been created', 'Page loaded in', 'Add page to menu', 'Your page has been posted', 'Pages', 'Your page has been updated', 'Panel', 'is powered by', 'Publish', 'Published on', 'Password', 'Password confirm', 'Your passwords don’t match', 'Rank', 'Read', 'Recover', 'Register', 'Registration date', 'Registration on the website', 'Registrations are closed on this site', 'Remember me', 'Request time out', 'second(s)', 'Section', 'Settings', 'Soon', 'Space', 'Space of', 'Theme', 'Too many request', 'Trash', 'Unban', 'Username', 'Username must not exceed 25 characters', 'The username must be a minimum of 3 characters', 'Username is already in use', 'Users', 'User has been updated', 'Version', 'Website', 'Wrong e-mail address or password', 'Yes', 'You are banned from the site'),
('es', 'Español', '¡Acceso denegado', 'Administrador', 'Fijar el artículo', '¡Su artículo ha sido publicado', 'Artículos', '¡Su artículo ha sido actualizado', 'Volver al sitio', '¡Solicitud errónea', 'Desterrar', 'desterrado', 'por', 'Configuración', 'Crear', 'Crear un artículo', 'Crear una página', 'Eliminar', 'Descripción', 'para añadir un nuevo idioma, haga clic aquí', 'Editar', 'Editar un artículo', 'Editor', 'Editar una página', 'Editar un usuario', 'Correo electrónico', '¡Su correo electrónico no es válida', '¡Correo electrónico ya utilizada', 'Error', '¡Error de servidor', 'Inicio', '¡Versión HTTP no soportada', 'General', 'ID', 'Imagen', '¡Soy un Pamplemousse', 'Idioma', 'Última conexión', 'Vamos', 'Enlace', 'Lista', 'Lista de artículos', 'Lista de páginas', 'Lista de usarios', 'Conexión', 'Desconexión', 'Mapa', 'Miembro', 'Método no permitido', 'Últimos artículos', 'Mi Espacio', 'Nombre', 'Nueva dirección de correo electrónico', 'Nueva foto de perfil', 'Nueva contraseña', 'Confirmación nueva contraseña', 'Nuevo nombre de usario', 'No', '¡No hay artículos aquí', '¡No hay pàgina aquí', '¡No extendido', '¡No encontrada', '¡No implementado', '¡Oye, no estás registrado', 'Vemos que no está registrado en', '¡Regístrese para compartir sus contribuciones a la comunidad', '¡Su cuenta ha sido creada', 'Página cargada en', ' Añadir página al menú', 'Su página ha sido publicada', 'Páginas', 'Su página ha sido actualizada', 'Panel', 'es impulsado por', 'Publicar', 'Publicado el', 'Contraseña', 'Confirmación de contraseña', '¡Sus contraseñas no coinciden', 'Grado', 'Leer', 'Recuperar', 'Inscripción', 'Fecha de inscripción', 'Registro en el sitio web', 'Las inscripciones están cerradas en este sitio', 'Recordarme', '¡Solicitar tiempo muerto', 'segundo(s)', 'Contenido', 'Parámetros', 'Pronto', 'Espacio', 'Espacio de', 'Tema', '¡Demasiadas solicitudes', 'Papelera de reciclaje', 'Desempacar', 'Nombre de usuario', ' ¡El nombre de usuario no debe exceder los 25 caracteres', ' ¡El nombre de usuario debe tener un mínimo de 3 caracteres', '¡Nombre de usuario ya utilizado', 'Usuarios', 'El usuario ha sido actualizado', 'Versión', 'Sitio web', '¡Correo electrónico o contraseña incorrecta', 'Sí', 'Usted está desterrado del sitio'),
('fr', 'Français', 'Accès refusé', 'Administrateur', 'Épingler l\'article', 'Votre article a bien été postée', 'Articles', 'Votre article a été mis à jour', 'Retour vers le site', 'Mauvaise requête', 'Bannir', 'banni', 'par', 'Configuration', 'Créer', 'Créer un article', 'Créer une page', 'Effacer', 'Description', 'pour ajouter une nouvelle langue, cliquez-ici', 'Éditer', 'Éditer un article', 'Éditeur', 'Éditer une page', 'Éditer un utilisateur', 'Adresse email', 'Votre adresse mail n\'est pas valide', 'Adresse mail déjà utilisée', 'Erreur', 'Erreur du serveur', 'Accueil', 'Version HTTP non prise en charge', 'Général', 'ID', 'Image', 'Je suis un Pamplemousse', 'Langue', 'Dernière connexion', 'C\'est parti', 'Lien', 'Liste', 'Liste des articles', 'Liste des pages', 'Liste des utilisateurs', 'Connexion', 'Déconnexion', 'Plan', 'Membre', 'Méthode non-autorisée', 'Articles les plus récents', 'Mon Espace', 'Nom', 'Nouvelle adresse mail', 'Nouvelle photo de profil', 'Nouveau mot de passe', 'Confirmation nouveau mot de passe', 'Nouveau nom d\'utilisateur', 'Non', 'Il n\'y a aucun article ici', 'Il n\'y a aucune page ici', 'Non étendu', 'Introuvable', 'Non implémenté', 'Hey, vous n\'êtes pas inscrit', 'Nous voyons que vous n\'êtes pas inscrit sur', 'Inscrivez-vous pour partager vos contributions à la communauté', 'Votre compte a bien été crée', 'Page chargée en', 'Ajouter la page sur le menu', 'Votre page a bien été postée', 'Pages', 'Votre page a bien été mis à jour', 'Panel', 'est propulsé par', 'Publier', 'Publié le', 'Mot de passe', 'Confirmation mot de passe', 'Vos mots de passes ne correspondent pas', 'Grade', 'Lire', 'Récupérer', 'Inscription', 'Date d\'inscription', 'Inscription sur le site web', 'Les inscriptions sont fermées sur ce site', 'Se souvenir de moi', 'Temps dépassé pour les requêtes', 'seconde(s)', 'Section', 'Paramètres', 'Bientôt', 'Espace', 'Espace de', 'Thème', 'Trop de requêtes', 'Corbeille', 'Débannir', 'Nom d\'utilisateur', 'Le nom d\'utilisateur ne doit pas dépassé les 25 caractères', 'Le nom d\'utilisateur doit faire minimum 3 caractères', 'Nom d\'utilisateur déjà utilisé', 'Utilisateurs', 'L\'utilisateur a été mis à jour', 'Version', 'Site web', 'Adresse email ou mot de passe incorrect', 'Oui', 'Vous êtes banni du site'),
('it', 'Italiano', 'Accesso negato', 'Amministratore', 'Appuntare l\'articolo', 'Il tuo articolo è stato pubblicato', 'Articoli', 'Il tuo articolo è stato aggiornato', 'Ritorno al sito', 'Richiesta errata', 'Bandire', 'bandito', 'per', 'Configurazione', 'Crea', 'Crea articolo', 'Crea pagina', 'Eliminare', 'Descrizione', 'per aggiungere una nuova lingua, clicca qui', 'Modifica', 'Modifica articolo', 'Editor', 'Modifica pagina', ' Modificare un utente', 'Indirizzo e-mail', 'Il tuo indirizzo email non è valido', 'Indirizzo email già usato', 'Errore', 'Errore del server', 'Home', 'Versione HTTP non supportata', 'Generale', 'ID', 'Immagine', 'Sono una Pamplemousse', 'Linguaggio', 'Ultima connessione', 'Andiamo', 'Collagamento', 'Lista', 'Lista degli articoli', 'Lista delle pagine', 'Liste degli utenti', 'Accesso', 'Logout', 'Mappa', 'Membro', 'Metodo non permesso', 'Articoli più recenti', 'Mia area', 'Nome', 'Nuovo indirizzo email', 'Nuova foto del profilo', 'Nuova password', 'Conferma nuova password', 'Nuovo nome utente', 'Non', 'Non ci sono articoli qui', 'Non c\'è nessuna pagina qui', 'Non esteso', 'Non trovato', 'Non implementato', 'Ehi, non sei registrato', 'Vediamo che non sei registrato su', 'Registrati per condividere i tuoi contributi alla comunità', 'Il tuo account è stato creato correttamente', 'Pagina caricata in', 'Aggiungi pagina al menu', 'La tua pagina è stata pubblicata', 'Pagine', 'La tua pagina è stata aggiornata', 'Panel', 'è alimentato da', 'Pubblicare', 'Pubblicato il', 'Password', 'Conferma password', 'Le tue password non corrispondono', 'Grado', 'Leggere', 'Recuperare', 'Iscrizione', 'Data d\'iscrizione', 'Iscrizione al sito web', ' Le iscrizioni sono chiuse su questo sito', 'Ricordate di me', 'Tempo scaduto per le richieste', 'attimo', 'Contenuto', 'Impostazioni', 'Presto', 'Area', 'Area di', 'Tema', 'Troppe richieste', 'Cestino', 'Disfare', 'Nome utente', 'Il nome utente non deve superare i 25 caratteri', ' Il nome utente deve essere almeno 3 caratteri', 'Nome utente già in uso', 'Utenti', 'L\'utente è stato aggiornato', 'Rilascio', 'Sito web', 'Indirizzo email o password errati', 'Sì', 'Sei bandito dal sito'),
('nl', 'Nederlands', 'Toegang geweigerd', 'Beheerder', 'Zet het artikel vast', 'Uw artikel is geplaatst', 'Artikelen', ' Uw artikel is bijgewerkt', 'Terug naar de site', 'Slechte query', 'Bannen', 'verbannen', 'van', 'Configureren', 'Maken', 'Maak een artikel', 'Maak een pagina', 'Wissen', 'Beschrijving', 'klik hier om een nieuwe taal toe te voegen', 'Bewerken', 'Een artikel bewerken', 'Uitgever', 'Een pagina bewerken', 'Een gebruiker bewerken', 'E-mailadres', 'Uw e-mailadres is ongeldig', 'E-mailadres wordt al gebruikt', 'Fout', 'Serverfout', 'Startpagina', 'HTTP-versie wordt niet ondersteund', 'Algemeen', 'ID', 'Beeld', ' Ik ben een Pamplemousse', 'Taal', 'Laatste verbinding', 'Kom op', 'Koppeling', 'Lijst', 'Lijst van artikelen', 'Lijst met pagina\'s', 'Lijst met gebruikers', 'Verbinding', 'Ontkoppeling', 'Map', 'Lid', 'Ongeautoriseerde methode', 'Meest recente artikels', 'Mijn ruimte', 'Naam', 'Nieuw e-mailadres', 'Nieuwe profielfoto', 'Nieuw wachtwoord', 'Bevestig nieuw wachtwoord', 'Nieuwe gebruikersnaam', 'Niet', 'Er zijn hier geen artikelen', ' Er zijn hier geen pagina\'s', 'Niet verlengd', 'Niet gevonden', 'Niet geïmplementeerd', 'Hé, je bent niet geregistreerd', 'We zien dat u niet bent geregistreerd op', 'Meld je aan om je bijdragen aan de gemeenschap te delen', 'Uw account is gemaakt', 'Pagina geladen in', ' Pagina toevoegen aan menu', 'Uw pagina is geplaatst', 'Pagina\'s', 'Uw pagina is bijgewerkt', 'Panel', 'wordt aangedreven door', 'Publiceren', 'Publiceerde de', 'Wachtwoord', 'Bevestiging van wachtwoord', 'Uw wachtwoorden komen niet overeen', 'Graad', 'Lezen', 'Herstellen', 'Inschrijving', 'Registratiedatum', 'Registratie op de website', 'De registratie is op deze site gesloten', 'Onthoud mij', ' Tijd voor aanvragen overschreden', 'seconde(n)', 'Inhoud', 'Instellingen', 'Binnenkort', 'Ruimte', 'Ruimte van', 'Thema', ' Te veel verzoeken', 'Prullenbak', 'Debannen', 'Gebruikersnaam', 'Gebruikersnaam mag niet langer zijn dan 25 tekens', 'Gebruikersnaam moet minimaal 3 tekens lang zijn', 'Gebruikersnaam wordt al gebruikt', 'Gebruikers', 'Gebruiker is bijgewerkt', 'Versie', 'Webpagina', 'Onjuist e-mailadres of wachtwoord', 'Ja', ' Je bent verboden van de site'),
('pt', 'Português', 'Acesso negado', 'Administrador', 'Afixar o artigo', 'O seu artigo foi publicado', 'Artigos', 'Seu artigo foi atualizado', ' Voltar para o site', 'Pedido errado', 'Banir', 'banido', 'por', 'Configuração', 'Criar', 'Criar um artigo', 'Criar uma página', 'Apagar', 'Descrição', 'para adicionar uma nova língua, clique aqui', 'Editar', 'Editar um artigo', 'Editora', 'Editar uma página', 'Editar um utilizador', 'Endereço de e-mail', 'O seu e-mail não é válido', 'Endereço de e-mail já utilizado', 'Erro', 'Erro do servidor', 'Página inicial', 'Versão HTTP não suportada', 'Geral', 'ID', 'Imagem', 'Eu sou uma Pamplemousse', 'Idioma', 'Última conexão', 'Vamos', 'Link', 'Lista', 'Lista dos artigos', 'Lista de páginas', 'Lista de usuários', 'Conexão', 'Desconexão', 'Mapa', 'Membro', 'Método não autorizado', 'Artigos mais recentes', 'Meu espaço', 'Nome', 'Novo endereço de e-mail', 'Nova foto de perfil', 'Nova senha', 'Confirmação da nova senha', 'Novo nome de usuário', 'Não', 'Não há nenhum artigo aqui', 'Não há nenhuma página aqui', 'Estendido', 'Não encontrado', 'Não implementado', 'Ei, você não está registrado', 'Vemos que não está inscrito em', 'Inscreva-se para compartilhar suas contribuições para a comunidade', 'A sua conta foi criada', 'Página carregada em', 'Adicionar a página do menu', 'A sua página foi postada', 'Páginas', 'Sua página foi atualizada bem', 'Painel', 'é alimentado por', 'Publicar', 'Publicado em', 'Senha', 'Confirmação da Senha', 'As suas senhas não correspondem', 'Grau', 'Ler', 'Recuperar', 'Inscrição', 'Data de inscrição', 'Inscrição no sítio web', 'As inscrições estão fechadas neste site', 'Lembrar-se de mim', 'Expirou o tempo de requisição', 'segundo(s)', 'Conteúdo', 'Parâmetros', 'Em breve', 'Área', 'Área de', 'Tema', 'Demasiados pedidos', 'Lixeira', 'Empacotar', 'Nome de usuário', 'O utilizador não deverá ter mais de 25 caracteres', 'O nome de utilizador deve ter pelo menos 3 caracteres', ' Nome de utilizador já utilizado', 'Usuários', 'O utilizador foi actualizado', 'Lançamento', 'Sítio web', 'Endereço de email ou senha inválidos', 'Sim', 'Você está banido do site');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(75) NOT NULL,
  `section` text NOT NULL,
  `datep` text NOT NULL,
  `author` varchar(25) NOT NULL,
  `menu` int(11) NOT NULL DEFAULT '1',
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `section`, `datep`, `author`, `menu`, `visible`) VALUES
(1, 'Example page', '<p>This is an example page.<br />\r\n<br />\r\nHi! I hope you&rsquo;re okay.</p>\r\n', '1622446685', 'Admin', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pw` text NOT NULL,
  `rank` int(11) NOT NULL,
  `register` text NOT NULL,
  `lastlogin` text NOT NULL,
  `profilepicture` varchar(255) NOT NULL DEFAULT '/img/profile.png',
  `ban` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `mail`, `pw`, `rank`, `register`, `lastlogin`, `profilepicture`, `ban`) VALUES
(1, 'Admin', 'admin@pamplemoussecms.com', '$2y$10$slGTsjZF6VfVOgyFc7Fse.k./FooY/nQTdgY/4.IXwIj0pcIzXgua', 2, '1622642008', '1623161720', '/img/profile.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username_author` (`author`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
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
  ADD UNIQUE KEY `pseudo` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
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
