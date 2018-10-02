<?php
/**
 * EVO Installer language file
 *
 * @version 1.5.0
 * @date 2018/02/23
 * @author EVO Project Team
 *
 * @language Polish
 * @package evo
 * @subpackage installer
 *
 * Please commit your language changes on Transifex (https://www.transifex.com/projects/p/modx-evolution/) or on GitHub (https://github.com/modxcms/evolution).
 */
$_lang["agree_to_terms"] = 'Akceptuję warunki umowy licencyjnej';
$_lang["alert_database_test_connection"] = 'Musisz utworzyć nową bazę danych lub sprawdzić czy wybrana przez Ciebie nazwa bazy jest poprawna!';
$_lang["alert_database_test_connection_failed"] = 'Test połączenia z wybraną bazą danych nie powiódł się!';
$_lang["alert_enter_adminconfirm"] = 'Wpisane hasła dla konta administratora są różne.';
$_lang["alert_enter_adminlogin"] = 'Musisz wprowadzić nazwę użytkownika dla konta administratora!';
$_lang["alert_enter_adminpassword"] = 'Musisz wprowadzić hasło dla konta administratora!';
$_lang["alert_enter_database_name"] = 'Musisz wprowadzić nazwę bazy danych!';
$_lang["alert_enter_host"] = 'Musisz wprowadzić nazwę hosta bazy danych!';
$_lang["alert_enter_login"] = 'Musisz wprowadzić nazwę użytkownika bazy danych!';
$_lang["alert_server_test_connection"] = 'Musisz przetestować połączenie z serwerem!';
$_lang["alert_server_test_connection_failed"] = 'Test połączenia z serwerem nie powiódł się!';
$_lang["alert_table_prefixes"] = 'Pierwszym znakiem prefiksu tabeli musi być litera!';
$_lang["all"] = 'Wszystkie';
$_lang["and_try_again"] = ' i spróbuj ponownie. Jeśli potrzebujesz pomocy przy rozwiązywaniu problemu';
$_lang["and_try_again_plural"] = ' i spróbuj ponownie. Jeśli potrzebujesz pomocy przy rozwiązywaniu problemów';
$_lang["begin"] = 'Rozpocznij';
$_lang["btnback_value"] = 'Wstecz';
$_lang["btnclose_value"] = 'Zamknij';
$_lang["btnnext_value"] = 'Dalej';
$_lang["cant_write_config_file"] = 'EVO nie może zapisać pliku konfiguracyjnego. Skopiuj następujący kod do pliku';
$_lang["cant_write_config_file_note"] = 'Once that\'s been done, you can log into EVO Admin by pointing your browser at YourSiteName.com/[+MGR_DIR+]/.';
$_lang["checkbox_select_options"] = 'Zaznacz wybrane opcje: ';
$_lang["checking_if_cache_exist"] = 'Sprawdzanie, czy istnieją foldery <span class=\"mono\">/assets/cache</span> oraz <span class=\"mono\">/assets/cache/rss</span>: ';
$_lang["checking_iconv"] = 'Sprawdzanie czy rozszerzenie <span class="mono">iconv</span> jest dostępne: ';
$_lang["checking_iconv_note"] = 'Ważne jest zainstalowanie/włączenie rozszerzenia iconv. Skontaktuj się się z hostingiem jeśli nie wiesz jak włączyć iconv.';
$_lang["checking_if_cache_file_writable"] = 'Sprawdzanie, czy plik <span class=\"mono\">/assets/cache/siteCache.idx.php</span> jest zapisywalny: ';
$_lang["checking_if_cache_file2_writable"] = 'Sprawdzanie, czy plik <span class=\"mono\">/assets/cache/sitePublishing.idx.php</span> jest zapisywalny: ';
$_lang["checking_if_cache_writable"] = 'Sprawdzanie, czy foldery <span class=\"mono\">/assets/cache</span> oraz <span class=\"mono\">/assets/cache/rss</span> są zapisywalne: ';
$_lang["checking_if_config_exist_and_writable"] = 'Sprawdzanie, czy plik <span class=\"mono\">/[+MGR_DIR+]/includes/config.inc.php</span> istnieje i jest zapisywalny: ';
$_lang["checking_if_export_exists"] = 'Sprawdzanie, czy istnieje folder <span class=\"mono\">/assets/export</span>: ';
$_lang["checking_if_export_writable"] = 'Sprawdzanie, czy folder <span class=\"mono\">/assets/export</span> jest zapisywalny: ';
$_lang["checking_if_images_exist"] = 'Sprawdzanie, czy istnieją foldery <span class="mono">/assets/images</span>, <span class="mono">/assets/files</span>,  <span class="mono">/assets/backup</span> and <span class="mono">/assets/.thumbs</span> : ';
$_lang["checking_if_images_writable"] = 'Sprawdzanie, czy foldery  <span class="mono">/assets/images</span>, <span class="mono">/assets/files</span>,  <span class="mono">/assets/backup</span> and <span class="mono">/assets/.thumbs</span> są zapisywalne: ';
$_lang["checking_mysql_strict_mode"] = 'Sprawdzanie trybu "strict sql_mode" dla MySQL: ';
$_lang["checking_mysql_version"] = 'Sprawdzanie wersji MySQL: ';
$_lang["checking_php_version"] = 'Sprawdzanie wersji PHP: ';
$_lang["checking_registerglobals"] = 'Sprawdzanie, czy zmienne globalne (Register_Globals) są wyłączone: ';
$_lang["checking_registerglobals_note"] = 'This configuration makes your site much more susceptible to Cross Site Scripting (XSS) attacks. You should speak to your host about disabling this setting, usually by one of three ways: modifying the global php.ini file, adding rules to a .htaccess file in the root of your EVO install, or adding custom php.ini override files in every directory on your install (and there\'s a lot of them). You will still be able to install EVO, but consider yourself warned.';
$_lang["checking_sessions"] = 'Sprawdzanie, czy obsługa sesji jest skonfigurowana poprawnie: ';
$_lang["checking_table_prefix"] = 'Sprawdzanie prefiksu tabeli `';
$_lang["choose_language"] = 'Wybierz język';
$_lang["chunks"] = 'Chunki';
$_lang["config_permissions_note"] = 'Dla nowych instalacji na systemach Linux/Unix utwórz pusty plik o nazwie <span class="mono">config.inc.php</span> w folderze <span class="mono">/[+MGR_DIR+]/includes/</span> i ustaw dla niego prawa dostępu na 0666.';
$_lang["connection_screen_collation"] = 'System porównań (collation): ';
$_lang["connection_screen_connection_method"] = 'Metoda połączenia: ';
$_lang["connection_screen_database_connection_information"] = 'Informacje o bazie danych';
$_lang["connection_screen_database_connection_note"] = 'Enter the database name to use or which you wish to create for this EVO install. If no database exists, the installer will attempt to create one. This may fail depending on the MySQL user permissions.';
$_lang["connection_screen_database_host"] = 'Host bazy danych:';
$_lang["connection_screen_database_info"] = 'Informacje o bazie danych';
$_lang["connection_screen_database_login"] = 'Nazwa użytkownika bazy: ';
$_lang["connection_screen_database_name"] = 'Nazwa bazy: ';
$_lang["connection_screen_database_pass"] = 'Hasło do bazy: ';
$_lang["connection_screen_database_test_connection"] = 'Tworzenie lub testowanie wybranej bazy danych.';
$_lang["connection_screen_default_admin_email"] = 'Adres e-mail administratora: ';
$_lang["connection_screen_default_admin_login"] = 'Nazwa dla konta administratora: ';
$_lang["connection_screen_default_admin_note"] = 'Teraz musisz skonfigurować konto administratora. Podaj nazwę oraz hasło, które na pewno zapamiętasz. Będziesz potrzebował tych danych aby zalogować się do Menedżera EVO po zakończeniu procesu instalacji.';
$_lang["connection_screen_default_admin_password"] = 'Hasło administratora: ';
$_lang["connection_screen_default_admin_password_confirm"] = 'Potwierdź hasło: ';
$_lang["connection_screen_default_admin_user"] = 'Domyślna nazwa użytkownika';
$_lang["connection_screen_defaults"] = 'Domyślne ustawienia Menedżera';
$_lang["connection_screen_server_connection_information"] = 'Informacje dotyczące połączenia i logowania';
$_lang["connection_screen_server_connection_note"] = 'Przed przetestowaniem połączenia wpisz nazwę hosta bazy danych (nazwę serwera lub adres IP), nazwę użytkownika oraz hasło.';
$_lang["connection_screen_server_test_connection"] = 'Testowanie połączenia z bazą danych i sprawdzanie systemu porównań.';
$_lang["connection_screen_table_prefix"] = 'Prefiks tabeli: ';
$_lang["creating_database_connection"] = 'Łączenie z bazą danych: ';
$_lang["database_alerts"] = 'Ostrzeżenia bazy danych!';
$_lang["database_connection_failed"] = 'Połączenie z bazą danych nie powiodło się!';
$_lang["database_connection_failed_note"] = 'Sprawdź nazwę użytkownika i hasło, a następnie spróbuj ponownie.';
$_lang["database_use_failed"] = 'Baza danych nie może być użyta!';
$_lang["database_use_failed_note"] = 'Sprawdź prawa dostępu do bazy danych dla wybranego użytkownika i spróbuj ponownie.';
$_lang["default_language"] = 'Domyślny język Menedżera';
$_lang["default_language_description"] = 'This is the default language that will be used in the EVO Manager back end control panel.';
$_lang["depedency_create"] = 'Zależność utworzona';
$_lang["depedency_update"] = 'Zależność uaktualniona';
$_lang["during_execution_of_sql"] = ' podczas wykonywania zapytania SQL ';
$_lang["encoding"] = 'utf-8';
$_lang["error"] = 'błąd';
$_lang["errors"] = 'błędy';
$_lang["failed"] = 'NIE POWIODŁO SIĘ!';
$_lang["guid_set"] = 'GUID ustawiony';
$_lang["help"] = 'Pomoc!';
$_lang["help_link"] = 'https://evo.im/';
$_lang["help_title"] = 'Installation assistance in the EVO forums';
$_lang["iagree_box"] = 'I agree to the terms of <a href="../assets/docs/license.txt" target="_blank">the EVO license</a>. For translations of the GPL version 2 license, please visit the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0-translations.html" target="_blank">GNU Operating System website</a>.';
$_lang["install"] = 'Instaluj';
$_lang["install_overwrite"] = 'Instaluj/Nadpisz: ';
$_lang["install_results"] = 'Wyniki instalacji';
$_lang["install_update"] = 'Instaluj/Aktualizuj: ';
$_lang["installation_error_occured"] = 'Podczas instalacji wystąpił następujący błąd';
$_lang["installation_install_new_copy"] = 'Zainstaluj nową kopię ';
$_lang["installation_install_new_note"] = 'Wybór tej opcji może spowodować nadpisanie danych w wybranej bazie danych.';
$_lang["installation_mode"] = 'Typ instalacji';
$_lang["installation_new_installation"] = 'Nowa instalacja';
$_lang["installation_note"] = '<strong>Note:</strong> After logging into the manager you should edit and save your System Configuration settings before browsing the site by choosing <strong>Tools</strong> -> System Configuration in the EVO Manager.';
$_lang["installation_successful"] = 'Instalacja zakończona pomyślnie!';
$_lang["installation_upgrade_advanced"] = 'Zaawansowany tryb aktualizacji';
$_lang["installation_upgrade_advanced_note"] = 'Tryb dla użytkowników zaawansowanych. Wybierz go, jeśli przenosisz instalację do bazy danych z innym kodowaniem znaków.<br /><b>Będziesz potrzebował pełnej nazwy bazy danych, nazwy użytkownika oraz jego hasła, jak również szczegółów dotyczących połączenia i systemu porównań.</b>';
$_lang["installation_upgrade_existing"] = 'Aktualizuj bieżącą instalację';
$_lang["installation_upgrade_existing_note"] = 'Aktualizuje bieżące pliki i bazę danych.';
$_lang["installed"] = 'Zainstalowano';
$_lang["installing_demo_site"] = 'Instalowanie strony demo: ';
$_lang["language_code"] = 'pl';
$_lang["loading"] = 'Ładowanie...';
$_lang["modules"] = 'Moduły';
$_lang["modx_footer1"] = '&copy; 2005-[+current_year+] the <a href="http://evo.im/" target="_blank" style="color: green; text-decoration:underline">EVO</a> Content Management Framework (CMF) project. All rights reserved. EVO is licensed under the GNU GPL.';
$_lang["modx_footer2"] = 'EVO is free software.  We encourage you to be creative and make use of EVO in any way you see fit. Just make sure that if you do make changes and decide to redistribute your modified EVO, that you keep the source code free!';
$_lang["modx_install"] = 'EVO &raquo; Instaluj';
$_lang["modx_requires_php"] = ', i EVO wymagają PHP [+min_version+] lub późniejszy ';
$_lang["mysql_5051"] = ' MySQL w wersji 5.0.51!';
$_lang["mysql_5051_warning"] = 'Wersja 5.0.51 MySQL posiada wiele dobrze znanych błędów, które mogą przyczynić się do nieprawidłowego działania EVO. Zalecamy uaktualnienie MySQL przed kontynuowaniem instalacji.';
$_lang["mysql_version_is"] = 'Wersja MySQL: ';
$_lang["no"] = 'Nie';
$_lang["none"] = 'Żadne';
$_lang["not_found"] = 'nie znaleziono';
$_lang["ok"] = 'OK!';
$_lang["optional_items"] = 'Komponenty opcjonalne';
$_lang["optional_items_note"] = 'Wybierz opcje instalacji, a następnie kliknij przycisk `Instaluj`: ';
$_lang["php_security_notice"] = '<legend>Security notice</legend><p>While EVO will work on your PHP version, usage of EVO on this version is not recommended. Your version of PHP is vulnerable to numerous security holes. Please upgrade to PHP version is 5.6 or higher, which patches these holes. It is recommended you upgrade to this version for the security of your own website.</p>';
$_lang["please_correct_error"] = '. Proszę popraw błąd';
$_lang["please_correct_errors"] = '. Proszę popraw błędy';
$_lang["plugins"] = 'Pluginy';
$_lang["preinstall_validation"] = 'Weryfikacja pre-instalacyjna';
$_lang["recommend_collation"] = 'utf8mb4_general_ci';
$_lang["recommend_collations_order"] = 'utf8mb4_unicode_ci,utf8mb4_general_ci,utf8_unicode_ci,utf8_general_ci,utf8mb4_bin,utf8_bin,utf8mb4_unicode_520_ci,utf8_unicode_520_ci,utf8_general_mysql500_ci';
$_lang["recommend_setting_change_title"] = 'Rekomendowana zmiana ustawień';
$_lang["recommend_setting_change_validate_referer_confirmation"] = 'Zmiana ustawienia: <em>Weryfikuj nagłówki HTTP_REFERER?</em>';
$_lang["recommend_setting_change_validate_referer_description"] = 'Strona nie została skonfigurowana aby weryfikować nagłówki HTTP_REFERER. Zalecamy włączenie tej opcji aby zmniejszyć ryzyko ataków CSRF (Cross Site Request Forgery).';
$_lang["remove_install_folder_auto"] = 'Usuń folder instalatora z zasobów mojej strony <br />&nbsp;(Ta operacja wymaga uprawnień do usuwania plików dla folderu instalatora).';
$_lang["remove_install_folder_manual"] = 'Pamiętaj aby usunąć folder &quot;<b>install</b>&quot; przed zalogowaniem się do Menedżera EVO.';
$_lang["resetting_database"] = 'Resetuj bazę danych do wersji demo:';
$_lang["retry"] = 'Spróbuj ponownie';
$_lang["running_database_updates"] = 'Wykonywanie aktualizacji bazy danych: ';
$_lang["sample_web_site"] = 'Przykładowa strona internetowa';
$_lang["sample_web_site_note"] = 'Pamiętaj, że ta operacja <b>nadpisze</b> istniejące już dokumenty i zasoby.';
$_lang["session_problem"] = 'Wystąpił problem z obsługą sesji przez serwer. Proszę skonsultuj się z administratorem aby usunąć ten problem.';
$_lang["session_problem_try_again"] = 'Ponowić próbę?';
$_lang["setup_cannot_continue"] = 'Z powodów wymienionych powyżej instalacja nie może być kontynuowana';
$_lang["setup_couldnt_install"] = 'EVO setup couldn\'t install/alter some tables inside the selected database.';
$_lang["setup_database"] = 'Instalator spróbuje teraz skonfigurować bazę danych:<br />';
$_lang["setup_database_create_connection"] = 'Łączenie z bazą danych: ';
$_lang["setup_database_create_connection_failed"] = 'Połączenie z bazą danych nie powiodło się!';
$_lang["setup_database_create_connection_failed_note"] = 'Sprawdź nazwę użytkownika i hasło, a następnie spróbuj ponownie.';
$_lang["setup_database_creating_tables"] = 'Tworzenie tabel: ';
$_lang["setup_database_creation"] = 'Tworzenie bazy danych `';
$_lang["setup_database_creation_failed"] = 'Błąd podczas próby utworzenia bazy danych!';
$_lang["setup_database_creation_failed_note"] = ' - Instalator nie mógł utworzyć bazy danych!';
$_lang["setup_database_creation_failed_note2"] = 'Instalator nie był w stanie utworzyć bazy danych. Nie mógł również odnaleźć istniejącej bazy danych o wybranej nazwie. Prawdopodobnie konfiguracja Twojego hostingu nie zezwala zewnętrznym skryptom na tworzenie baz danych. Proszę utwórz bazę danych według instrukcji dostarczonych przez administratora hostingu, a następnie uruchom instalatora ponownie.';
$_lang["setup_database_selection"] = 'Wybieranie bazy danych `';
$_lang["setup_database_selection_failed"] = 'Błąd podczas wybierania bazy danych...';
$_lang["setup_database_selection_failed_note"] = 'Baza danych nie istnieje. Instalator podejmie próbę jej utworzenia.';
$_lang["snippets"] = 'Snippety';
$_lang["some_tables_not_updated"] = 'Niektóre tabele nie zostały zaktualizowane. Może to być wynikiem wcześniejszych ich modyfikacji.';
$_lang["status_checking_database"] = 'Sprawdzanie bazy danych: ';
$_lang["status_connecting"] = 'Łączenie z hostem: ';
$_lang["status_failed"] = 'BŁĄD!';
$_lang["status_failed_could_not_create_database"] = 'BŁĄD! - nie można utworzyć bazy danych';
$_lang["status_failed_database_collation_does_not_match"] = 'BŁĄD! - niezgodność systemów porównań; użyj SET NAMES lub wybierz %s';
$_lang["status_failed_table_prefix_already_in_use"] = 'BŁĄD! - wybrany prefiks tabeli jest już wykorzystywany!';
$_lang['status_failed_mysqli'] = 'error - mysqli extension for PHP is not installed!';
$_lang["status_passed"] = 'OK - baza danych została wybrana';
$_lang["status_passed_database_created"] = 'OK - baza danych utworzona';
$_lang["status_passed_server"] = 'OK - system porównań dostępny';
$_lang["strict_mode"] = 'Tryb `strict sql_mode` dla MySQL jest włączony!';
$_lang["strict_mode_error"] = 'Certain features of EVO may not work properly unless the STRICT_TRANS_TABLES sql_mode is disabled. You can set the MySQL mode by editing the my.cnf file or contact your server administrator.';
$_lang["summary_setup_check"] = 'Instalator wykonał serię testów aby sprawdzić, czy wszystko jest gotowe do rozpoczęcia procesu instalacji.';
$_lang["system_configuration"] = 'Konfiguracja systemu';
$_lang["system_configuration_validate_referer_description"] = 'Włączenie <strong>weryfikacji nagłówków HTTP_REFERER</strong> jest rekomendowane aby zmniejszyć prawdopodobieństwo ataków CSRF, jednak przy niektórych konfiguracjach serwera może spowodować, że Menedżer EVO będzie niedostępny.';
$_lang["table_prefix_already_inuse"] = '- Tabele o tym prefiksie już istnieją w wybranej bazie danych!';
$_lang["table_prefix_already_inuse_note"] = 'Nie można zainstalować EVO w wybranej bazie danych, ponieważ zawiera ona już tabele z określonym prefiksem. Wybierz inny prefiks dla tabeli i uruchom instalatora ponownie.';
$_lang["table_prefix_not_exist"] = '- Tabele o tym prefiksie nie istnieją w wybranej bazie danych!';
$_lang["table_prefix_not_exist_note"] = 'Nie można zaktualizować EVO w wybranej bazie danych, ponieważ nie zawiera ona tabel z określonym prefiksem. Wybierz prefiks, który został zastosowany dla istniejących już tabel i uruchom instalatora ponownie.';
$_lang["templates"] = 'Szablony';
$_lang["to_log_into_content_manager"] = 'Po kliknięciu w przycisk `Zamknij` będziesz mógł zalogować się do Menedżera EVO ([+MGR_DIR+]/index.php).';
$_lang["toggle"] = 'Odwróć zaznaczenie';
$_lang['tvs'] = 'Zmienne Szablonów';
$_lang["unable_install_chunk"] = 'Nie można zainstalować chunków. Plik';
$_lang["unable_install_module"] = 'Nie można zainstalować modułów. Plik';
$_lang["unable_install_plugin"] = 'Nie można zainstalować pluginów. Plik';
$_lang["unable_install_snippet"] = 'Nie można zainstalować snippetów. Plik';
$_lang["unable_install_template"] = 'Nie można zainstalować szablonów. Plik';
$_lang["upgrade_note"] = '<strong>Uwaga:</strong> Przed rozpoczęciem przeglądania swojej strony zaloguj się jako administrator do Menedżera EVO, a następnie sprawdź i zapisz konfigurację systemu.';
$_lang["upgraded"] = 'Zaktualizowano';
$_lang["validate_referer_title"] = 'Weryfikuj nagłówki HTTP_REFERER?';
$_lang["visit_forum"] = ', visit the <a href="http://forums.modx.com/" target="_blank">EVO Forums</a>.';
$_lang["warning"] = 'UWAGA!';
$_lang["welcome_message_start"] = 'Najpierw wybierz typ instalacji: ';
$_lang["welcome_message_text"] = 'Ten kreator przeprowadzi Cię przez proces instalacji.';
$_lang["welcome_message_welcome"] = 'Welcome to the EVO installation program.';
$_lang["writing_config_file"] = 'Zapisywanie pliku konfiguracyjnego: ';
$_lang["yes"] = 'Tak';
$_lang["you_running_php"] = '- włączone PHP';
?>
