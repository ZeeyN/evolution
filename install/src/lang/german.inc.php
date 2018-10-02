<?php
/**
 * MODX Installer language file
 *
 * @author Marc Hinse
 * @author Bogdan Günther
 * @version 1.5.0
 * @date 2018/02/23
 *
 * @language German
 * @package modx
 * @subpackage installer
 *
 * Please commit your language changes on Transifex (https://www.transifex.com/projects/p/modx-evolution/) or on GitHub (https://github.com/modxcms/evolution).
 */
$_lang["agree_to_terms"] = 'Lizenzbedingungen akzeptieren und installieren';
$_lang["alert_database_test_connection"] = 'Sie müssen eine Datenbank erstellen oder die Datenbank-Verbindung testen!';
$_lang["alert_database_test_connection_failed"] = 'Der Test der Datenbank-Auswahl ist fehlgeschlagen!';
$_lang["alert_enter_adminconfirm"] = 'Das Administrator-Passwort und dessen Bestätigung stimmen nicht überein!';
$_lang["alert_enter_adminlogin"] = 'Sie müssen einen Benutzernamen für das Administrator-Benutzerkonto angeben!';
$_lang["alert_enter_adminpassword"] = 'Sie müssen ein Passwort für das Administrator-Benutzerkonto angeben!';
$_lang["alert_enter_database_name"] = 'Sie müssen einen Datenbank-Namen angeben!';
$_lang["alert_enter_host"] = 'Sie müssen einen Datenbank-Host angeben!';
$_lang["alert_enter_login"] = 'Sie müssen einen Datenbank-Login-Namen angeben!';
$_lang["alert_server_test_connection"] = 'Bitte testen Sie Ihre Datenbank-Verbindung!';
$_lang["alert_server_test_connection_failed"] = 'Die Datenbank-Verbindung konnte nicht hergestellt werden!';
$_lang["alert_table_prefixes"] = 'Tabellen-Präfixe müssen mit einem Buchstaben beginnen!';
$_lang["all"] = 'Alle';
$_lang["and_try_again"] = ', und versuchen Sie es erneut. Falls Sie Hilfe bei der Lösung des Problems benötigen';
$_lang["and_try_again_plural"] = ', und versuchen Sie es erneut. Falls Sie Hilfe bei der Lösung der Probleme benötigen';
$_lang["begin"] = 'Anfang';
$_lang["btnback_value"] = 'Zurück';
$_lang["btnclose_value"] = 'Schließen';
$_lang["btnnext_value"] = 'Weiter';
$_lang["cant_write_config_file"] = 'MODX konnte die Konfigurationsdatei nicht erstellen. Bitte fügen Sie folgendes in eine leere Datei ein:';
$_lang["cant_write_config_file_note"] = 'Sobald dieser Vorgang beendet ist, können Sie sich im MODX-Manager anmelden unter http://ihredomain.de/[+MGR_DIR+]/.';
$_lang["checkbox_select_options"] = 'Checkbox-Auswahlmöglichkeiten:';
$_lang["checking_if_cache_exist"] = 'Überprüfe ob die Ordner <span class="mono">/assets/cache</span> und <span class="mono">/assets/cache/rss</span> existieren: ';
$_lang["checking_if_cache_file_writable"] = 'Überprüfe ob die Datei <span class="mono">/assets/cache/siteCache.idx.php</span> beschreibbar ist: ';
$_lang["checking_if_cache_file2_writable"] = 'Überprüfe ob die Datei <span class="mono">assets/cache/sitePublishing.idx.php</span> beschreibbar ist: ';
$_lang["checking_if_cache_writable"] = 'Überprüfe ob die Ordner <span class="mono">/assets/cache</span> und <span class="mono">/assets/cache/rss</span> beschreibbar sind: ';
$_lang["checking_if_config_exist_and_writable"] = 'Überprüfe ob die Datei <span class="mono">/[+MGR_DIR+]/includes/config.inc.php</span> existiert und beschreibbar ist: ';
$_lang["checking_if_export_exists"] = 'Überprüfe ob der Ordner <span class="mono">/assets/export</span> existiert: ';
$_lang["checking_if_export_writable"] = 'Überprüfe ob der Ordner <span class="mono">assets/export</span> beschreibbar ist: ';
$_lang["checking_if_images_exist"] = 'Überprüfe ob die Ordner <span class="mono">/assets/images</span>, <span class="mono">/assets/files</span>,  <span class="mono">/assets/backup</span>, <span class="mono">/assets/.thumbs</span> existieren: ';
$_lang["checking_if_images_writable"] = 'Überprüfe ob die Ordner <span class="mono">/assets/images</span>, <span class="mono">/assets/files</span>,  <span class="mono">/assets/backup</span>, <span class="mono">/assets/.thumbs</span> beschreibbar sind: ';
$_lang["checking_mysql_strict_mode"] = 'Überprüfe MySQL Strict-Mode: ';
$_lang["checking_mysql_version"] = 'Überprüfe MySQL-Version: ';
$_lang["checking_php_version"] = 'Überprüfe PHP-Version: ';
$_lang["checking_registerglobals"] = 'Überprüfe ob PHP register_globals ausgeschaltet sind: ';
$_lang["checking_registerglobals_note"] = 'Diese Konfiguration macht Ihre Website angreifbarer für Cross Site Scripting (XSS) Attacken. Sie sollten mit Ihrem Provider sprechen, ob diese Einstellung geändert werden kann. Es gibt normalerweise drei Möglichkeiten: Ändern der globalen php.ini, Hinzufügen von Regeln zu der .htaccess-Datei im Root-Verzeichnis der MODX-Installation oder durch Hinzufügen einer angepassten php.ini in jedem Verzeichnis Ihrer MODX-Installation. Sie können MODX trotzdem installieren, aber Sie müssen sich den möglichen Sicherheitsrisiken bewusst sein.';
$_lang["checking_sessions"] = 'Überprüfe ob die Sessions sauber definiert sind: ';
$_lang["checking_table_prefix"] = 'Überprüfe Tabellen-Präfix `';
$_lang["choose_language"] = 'Sprache auswählen';
$_lang["chunks"] = 'Chunks';
$_lang["config_permissions_note"] = 'Für neue Linux/Unix Installationen bitte eine leere Datei <span class="mono">config.inc.php</span> im Ordner <span class="mono">/[+MGR_DIR+]/includes/</span> anlegen und die Dateirechte auf 0666 setzen.';
$_lang["connection_screen_collation"] = 'Kollation:';
$_lang["connection_screen_connection_method"] = 'Verbindungsmethode:';
$_lang["connection_screen_database_connection_information"] = 'Datenbankinformationen';
$_lang["connection_screen_database_connection_note"] = 'Bitte geben Sie den Namen der Datenbank an, die Sie für MODX nutzen wollen. Falls die Datenbank nicht existiert, wird MODX versuchen sie zu erstellen. Dies kann fehlschlagen, falls Sie nicht die nötigen Rechte besitzen. Bei vielen Web-Hosting-Angeboten sind die Datenbanken bereits eingerichtet oder können in der Administrationsoberfläche des Web-Hosting-Angebots erstellt werden. Notieren Sie diesen Namen und geben Sie ihn hier ein.';
$_lang["connection_screen_database_host"] = 'Datenbank-Host:';
$_lang["connection_screen_database_info"] = 'Datenbank-Information';
$_lang["connection_screen_database_login"] = 'Datenbank-Login-Name:';
$_lang["connection_screen_database_name"] = 'Datenbank-Name:';
$_lang["connection_screen_database_pass"] = 'Datenbank-Passwort:';
$_lang["connection_screen_database_test_connection"] = 'Klicken Sie hier, um die Datenbank zu erstellen bzw. um die Verbinding zu testen.';
$_lang["connection_screen_default_admin_email"] = 'Administrator-E-Mail:';
$_lang["connection_screen_default_admin_login"] = 'Administrator-Benutzername:';
$_lang["connection_screen_default_admin_note"] = 'Bitte geben Sie weitere Details zu Ihren Administrator-Benutzerkonto an. Sie können Ihren Namen eingeben und ein Passwort, dass Sie nicht vergessen. Diese Daten benötigen Sie für die Anmeldung im MODX-Manager (dem MODX-Adminbereich) nachdem die Installation abgeschlossen ist.';
$_lang["connection_screen_default_admin_password"] = 'Administrator-Passwort:';
$_lang["connection_screen_default_admin_password_confirm"] = 'Passwort bestätigen:';
$_lang["connection_screen_default_admin_user"] = 'Standard Administrator-Konto';
$_lang["connection_screen_defaults"] = 'Standard-Manager-Einstellungen';
$_lang["connection_screen_server_connection_information"] = 'Server-Verbindungs- und Anmeldeinformation';
$_lang["connection_screen_server_connection_note"] = 'Bitte geben Sie den Datenbank-Server, den Datenbank-Login-Namen sowie das Datenbank-Passwort ein und testen Sie dann die Verbindung.';
$_lang["connection_screen_server_test_connection"] = 'Klicken Sie hier, um die Datenbank-Verbindung zu testen und die verfügbaren Kollationen aufzulisten.';
$_lang["connection_screen_table_prefix"] = 'Tabellen-Präfix:';
$_lang["creating_database_connection"] = 'Stelle Verbindung zur Datenbank her: ';
$_lang["database_alerts"] = 'Datenbank Meldungen!';
$_lang["database_connection_failed"] = 'Datenbank-Verbindung fehlgeschlagen!';
$_lang["database_connection_failed_note"] = 'Bitte Überprüfen Sie Ihre Datenbank-Anmeldung und versuchen Sie es erneut.';
$_lang["database_use_failed"] = 'Datenbank konnte nicht ausgewählt werden!';
$_lang["database_use_failed_note"] = 'Bitte prüfen Sie den Datenbankzugang für den gewählten Benutzer und versuchen Sie es erneut.';
$_lang["default_language"] = 'Manager Standard-Sprache';
$_lang["default_language_description"] = 'Das ist die voreingestellte Sprache die im MODX-Manager (dem MODX-Adminbereich) verwendet wird.';
$_lang["depedency_create"] = 'Abhängigkeit erstellt';
$_lang["depedency_update"] = 'Abhängigkeit aktualisiert';
$_lang["during_execution_of_sql"] = ' während des Ausführens des SQL-Statements ';
$_lang["encoding"] = 'utf-8';
$_lang["error"] = 'Fehler';
$_lang["errors"] = 'Fehler';
$_lang["failed"] = 'fehlgeschlagen!';
$_lang["guid_set"] = 'GUID gesetzt';
$_lang["help"] = 'Hilfe!';
$_lang["help_link"] = 'http://de.modx.com/forum/';
$_lang["help_title"] = 'Unterstützung zur Installation finden Sie in den MODX-Foren';
$_lang["iagree_box"] = 'Ich stimme den <a href="../assets/docs/license.txt" target="_blank">Lizenzbedingungen</a> zu. Inoffizielle Übersetzungen der GNU GPL Version 2 Lizenz finden Sie auf der <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0-translations.html" target="_blank">GNU Operating System Website</a>.';
$_lang["install"] = 'Installieren';
$_lang["install_overwrite"] = 'Installieren/Überschreiben';
$_lang["install_results"] = 'Installationsergebnisse';
$_lang["install_update"] = 'Installation/Update';
$_lang["installation_error_occured"] = 'Folgende Fehler sind während der Installation aufgetreten';
$_lang["installation_install_new_copy"] = 'Neue Kopie installieren von ';
$_lang["installation_install_new_note"] = 'Beachten Sie, dass diese Option alle Daten in der Datenbank überschreibt.';
$_lang["installation_mode"] = 'Installationsmodus';
$_lang["installation_new_installation"] = 'Neue Installation';
$_lang["installation_note"] = '<b>Achtung:</b> Nach dem Anmelden im MODX-Manager sollten Sie die Konfigurationseinstellungen unter <b>Werkzeuge -> Konfiguration</b> vornehmen und speichern bevor Sie Ihre Seite aufrufen.';
$_lang["installation_successful"] = 'Installation war erfolgreich!';
$_lang["installation_upgrade_advanced"] = 'Upgrade Installation für Fortgeschrittene<br /><small>(Anpassung der Datenbank-Konfiguration)</small>';
$_lang["installation_upgrade_advanced_note"] = 'Für fortgeschrittene Datenbank-Administratoren oder bei einem Umzug auf einen Server mit anderem Datenbank-Zeichensatz oder anderer Datenbank-Kollation. <b>Sie müssen die vollständigen Datenbank-Anmeldedaten sowie den Datenbank-Zeichensatz und die Datenbank-Kollation kennen.</b>';
$_lang["installation_upgrade_existing"] = 'Upgrade einer bestehenden Installation';
$_lang["installation_upgrade_existing_note"] = 'Upgrade Ihrer Dateien und der Datenbank.';
$_lang["installed"] = 'Installiert';
$_lang["installing_demo_site"] = 'Installiere Beispiel-Website: ';
$_lang["language_code"] = 'de';
$_lang["loading"] = 'Laden …';
$_lang["modules"] = 'Module';
$_lang["modx_footer1"] = '&copy; 2005-[+current_year+] <a href="http://modx.com/" target="_blank" style="color: green; text-decoration:underline">MODX</a> Content Management Framework (CMF) Projekt. Alle Rechte vorbehalten. MODX ist lizensiert gemäß GNU GPL.';
$_lang["modx_footer2"] = 'MODX ist freie Software.  Wir ermutigen Sie, kreativ zu sein und MODX so zu nutzen wie es Ihnen am besten passt. Stellen Sie nur sicher, dass Sie bei Veränderungen des Quellcodes und der Weiterverbreitung der modifizierten MODX-Version den Quelltext frei zugänglich belassen!';
$_lang["modx_install"] = 'MODX &raquo; Installation';
$_lang["modx_requires_php"] = ', und MODx benötigt PHP [+min_version+] oder höher';
$_lang["mysql_5051"] = 'Warnung: MySQL-Server-Version ist 5.0.51!';
$_lang["mysql_5051_warning"] = 'MySQL-Server-Version ist 5.0.51 hat bekannte Bugs. Es wird empfohlen ein Update auf eine neuere Version durchzuführen, bevor Sie fortfahren.';
$_lang["mysql_version_is"] = ' Ihre MySQL-Version ist: ';
$_lang["no"] = 'Nein';
$_lang["none"] = 'Keine';
$_lang["not_found"] = 'nicht gefunden';
$_lang["ok"] = 'OK!';
$_lang["optional_items"] = 'Optionale Einstellungen';
$_lang["optional_items_note"] = 'Bitte wählen Sie Ihre Installationsoptionen und klicken Sie auf Installieren:';
$_lang["php_security_notice"] = '<legend>Sicherheitshinweis</legend><p>MODX wird mit Ihrer PHP-Version vermutlich laufen, unter dieser PHP-Version wird die Benutzung von MODX nicht empfohlen. Ihre Version von PHP ist aufgrund verschiedener Sicherheitslöcher angreifbar. Bitte führen Sie ein Update auf PHP-Version 4.4.1 oder höher durch, um die Sicherheitsprobleme zu beheben.</p>';
$_lang["please_correct_error"] = '. Bitte beheben Sie den Fehler';
$_lang["please_correct_errors"] = '. Bitte beheben Sie die Fehler';
$_lang["plugins"] = 'Plugins';
$_lang["preinstall_validation"] = 'Prüfung vor der Installation';
$_lang["recommend_collation"] = 'utf8mb4_general_ci';
$_lang["recommend_collations_order"] = 'utf8mb4_unicode_ci,utf8mb4_general_ci,utf8_unicode_ci,utf8_general_ci,utf8mb4_bin,utf8_bin,utf8mb4_unicode_520_ci,utf8_unicode_520_ci,utf8_general_mysql500_ci';
$_lang["recommend_setting_change_title"] = 'Empfohlene Änderung der Konfiguration';
$_lang["recommend_setting_change_validate_referer_confirmation"] = 'Einstellung aktivieren: <em>HTTP_REFERER-Header überprüfen?</em>';
$_lang["recommend_setting_change_validate_referer_description"] = 'Ihre Seite überprüft momentan nicht die HTTP_REFERER von eingehenden Requests. Wir empfehlen dringend, diese Einstellung vorzunehmen, um das Risiko von CSFR-Attacken (Cross Site Request Forgery) zu reduzieren.';
$_lang["remove_install_folder_auto"] = 'Installationsordner löschen<br />(Dies erfordert die entsprechenden Zugriffsrechte um den Ordner löschen zu können).';
$_lang["remove_install_folder_manual"] = 'Bitte denken Sie daran den Ordner <b>install</b> zu löschen bevor Sie sich im MODX-Manager anmelden.';
$_lang["resetting_database"] = 'Datenbank wurde für die Demoseite zurückgesetzt:';
$_lang["retry"] = 'Erneut versuchen';
$_lang["running_database_updates"] = 'Führe Datenbank-Updates durch: ';
$_lang["sample_web_site"] = 'Beispiel-Website';
$_lang["sample_web_site_note"] = 'Beachten Sie, dass damit alle Dokumente und Ressourcen <b>überschrieben</b> werden.';
$_lang["session_problem"] = 'Ein Problem mit Ihren Server-Sessions wurde festgestellt. Bitte kontaktieren Sie Ihren Server-Administator um dieses Problem zu beheben.';
$_lang["session_problem_try_again"] = 'Erneut versuchen?';
$_lang["setup_cannot_continue"] = 'Leider kann die Installation wegen oben aufgeführter Gründe nicht fortgesetzt werden.';
$_lang["setup_couldnt_install"] = 'MODX konnte die Tabellen in der gewählten Datenbank nicht anlegen/ändern.';
$_lang["setup_database"] = 'Die Installation wird nun versuchen die Datenbank einzurichten:<br />';
$_lang["setup_database_create_connection"] = 'Verbindung zur Datenbank: ';
$_lang["setup_database_create_connection_failed"] = 'Datenbank-Verbindung fehlgeschlagen!';
$_lang["setup_database_create_connection_failed_note"] = 'Bitte prüfen Sie die Datenbank-Anmeldedaten und versuchen Sie es erneut.';
$_lang["setup_database_creating_tables"] = 'Erstelle Datenbank-Tabellen: ';
$_lang["setup_database_creation"] = 'Lege Datenbank an `';
$_lang["setup_database_creation_failed"] = 'Datenbank-Erstellung fehlgeschlagen!';
$_lang["setup_database_creation_failed_note"] = ' – Die Datenbank konnte nicht angelegt werden!';
$_lang["setup_database_creation_failed_note2"] = 'Die Datenbank konnte nicht angelegt werden und es wurde keine Datenbank mit gleichem Namen gefunden. Höchstwahrscheinlich lässt Ihr Web-Hosting-Provider das Anlegen von Datenbanken mit einem externem Script nicht zu. Bitte legen Sie die Datenbank wie vom Web-Hosting-Provider beschrieben an oder geben Sie die Verbindungsdaten einer bereits angelegten Datenbank an.';
$_lang["setup_database_selection"] = 'Datenbank wählen`';
$_lang["setup_database_selection_failed"] = 'Datenbank-Auswahl fehlgeschlagen …';
$_lang["setup_database_selection_failed_note"] = 'Die Datenbank existiert nicht, es wird versucht versucht sie anzulegen.';
$_lang["snippets"] = 'Snippets';
$_lang["some_tables_not_updated"] = 'Manche Tabellen wurden nicht aktualisiert. Dies könnte an zuvor individuell ausgeführten Modifikationen liegen.';
$_lang["status_checking_database"] = 'Überprüfe Datenbank: ';
$_lang["status_connecting"] = ' Verbindung zum Host: ';
$_lang["status_failed"] = 'fehlgeschlagen!';
$_lang["status_failed_could_not_create_database"] = 'fehlgeschlagen – konnte Datenbank nicht erstellen';
$_lang["status_failed_database_collation_does_not_match"] = 'fehlgeschlagen – Unterschied in der Datenbank-Kollation; benutzen Sie SET NAMES oder wählen Sie %s';
$_lang["status_failed_table_prefix_already_in_use"] = 'fehlgeschlagen – Tabellen-Präfix bereits verwendet!';
$_lang['status_failed_mysqli'] = 'error - mysqli extension for PHP is not installed!';
$_lang["status_passed"] = 'In Ordnung – Datenbank ausgewählt';
$_lang["status_passed_database_created"] = 'In Ordnung – Datenbank erstellt';
$_lang["status_passed_server"] = 'In Ordung – Kollationen sind nun auswählbar';
$_lang["strict_mode"] = 'Warnung: MySQL-Server hat „sql_mode strict“ aktiviert';
$_lang["strict_mode_error"] = 'Bestimmte MODX-Funktionen funktionieren nicht korrekt solange „STRICT_TRANS_TABLES sql_mode“ aktiviert ist. Sie können den MySQL-Modus ändern, in dem Sie die Datei „my.cnf“ anpassen oder Ihren Server-Administrator kontaktieren.';
$_lang["summary_setup_check"] = 'Es wird überprüft, ob alles für die Installation bereit ist.';
$_lang["system_configuration"] = 'MODX-Konfiguration';
$_lang["system_configuration_validate_referer_description"] = 'Die Aktivierung der Einstellung <strong>HTTP_REFERER-Header überprüfen?</strong> wird empfohlen. Diese Einstellung kann ihre Website vor CSFR-Attacken (Cross Site Request Forgery) schützen. Bei manchen Server Konfigurationen kann nach dem Aktivieren der MODX Manager nicht mehr erreichbar sein.';
$_lang["table_prefix_already_inuse"] = ' – Tabellen-Präfix wird bereits benutzt!';
$_lang["table_prefix_already_inuse_note"] = 'Die gewählte Datenbank konnte nicht beschrieben werden, da der Tabellen-Präfix bereits verwendet wird. Bitte wählen Sie einen anderen Präfix und wiederholen Sie die Installation.';
$_lang["table_prefix_not_exist"] = ' – Tabellen-Präfix existiert nicht in der gewählten Datenbank!';
$_lang["table_prefix_not_exist_note"] = 'Die gewählte Datenbank konnte nicht beschrieben werden, da keine Tabellen mit dem gewählten Präfix existieren. Bitte wählen Sie einen existierenden Präfix und wiederholen Sie die Installation.';
$_lang["templates"] = 'Templates';
$_lang["to_log_into_content_manager"] = 'Um sich im Manager anzumelden ([+MGR_DIR+]/index.php), klicken Sie bitte auf den Schließen-Button.';
$_lang["toggle"] = 'Umschalten';
$_lang['tvs'] = 'Template-Variablen';
$_lang["unable_install_chunk"] = 'Konnte Chunk nicht installieren. Datei';
$_lang["unable_install_module"] = 'Konnte Modul nicht installieren. Datei';
$_lang["unable_install_plugin"] = 'Konnte Plugin nicht installieren. Datei';
$_lang["unable_install_snippet"] = 'Konnte Snippet nicht installieren. Datei';
$_lang["unable_install_template"] = 'Konnte Template nicht installieren. Datei';
$_lang["upgrade_note"] = '<b>Achtung:</b> Nach dem Anmelden im Manager sollten Sie die Konfigurationseinstellungen unter <b>Werkzeuge &gt; Konfiguration</b> überprüfen und speichern bevor Sie Ihre Seite aufrufen.';
$_lang["upgraded"] = 'Aktualisiert';
$_lang["validate_referer_title"] = 'HTTP_REFERER-Header überprüfen?';
$_lang["visit_forum"] = ', besuchen Sie die <a href="http://de.modx.com/forum/" target="_blank">MODX-Foren</a>.';
$_lang["warning"] = 'ACHTUNG!';
$_lang["welcome_message_start"] = 'Wählen Sie zunächst den Intallationstyp aus:';
$_lang["welcome_message_text"] = 'Dieses Programm wird Sie durch die Installation begleiten.';
$_lang["welcome_message_welcome"] = 'Willkommen beim MODX-Installationsprogramm.';
$_lang["writing_config_file"] = 'Schreibe Konfigurationsdatei: ';
$_lang["yes"] = 'Ja';
$_lang["you_running_php"] = ' – Benutzte PHP-Version ';
?>
