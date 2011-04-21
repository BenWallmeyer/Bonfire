<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$lang['db_maintenance']			= 'Maintenance';
$lang['db_backups']				= 'Backups';

$lang['db_backup_warning']		= 'Note: Due to the limited execution time and memory available to PHP, backing up very large databases may not be possible. If your database is very large you might need to backup directly from your SQL server via the command line, or have your server admin do it for you if you do not have root privileges.';
$lang['db_filename']			= 'File Name';

$lang['db_drop_question']		= 'Add &lsquo;Drop Tables&rsquo; command to SQL?';
$lang['db_compress_question']	= 'Compression type?';
$lang['db_insert_question']		= 'Add &lsquo;Inserts&rsquo; for data to SQL?';

$lang['db_restore_note']		= 'The Restore option is only capable of reading un-compressed files. Gzip and Zip compression is good if you just want a backup to download and store on your computer.';

$lang['db_gzip']				= 'gzip';
$lang['db_zip']					= 'zip';
$lang['db_backup']				= 'Backup';
$lang['db_tables']				= 'Tables';
$lang['db_restore']				= 'Restore';
$lang['db_database']			= 'Database';
$lang['db_drop']				= 'Drop';
$lang['db_repair']				= 'Repair';
$lang['db_optimize']			= 'Optimize';

$lang['db_delete_note']			= 'Delete selected backup files: ';
$lang['db_no_backups']			= 'No previous backups were found.';
$lang['db_backup_delete_confirm']	= 'Really delete the following backup files?';
$lang['db_drop_confirm']		= 'Really delete the following database tables?';
$lang['db_drop_attention']		= '<p>Deleting tables from the database will result in loss of data.</p><p><strong>This may make your application non-functional.</strong></p>';

$lang['db_table_name']			= 'Table Name';
$lang['db_records']				= 'Records';
$lang['db_data_size']			= 'Data Size';
$lang['db_index_size']			= 'Index Size';
$lang['db_data_free']			= 'Data Free';
$lang['db_engine']				= 'Engine';
$lang['db_no_tables']			= 'No tables were found for the current database.';

$lang['db_restore_results']		= 'Restore Results';
$lang['db_back_to_tools']		= 'Back to Database Tools';
$lang['db_restore_file']		= 'Restore database from file';
$lang['db_restore_attention']	= '<p>Restoring a database from a backup file will result in some or all of your database being erased before restoring.</p><p><strong>This may result in a loss of data</strong>.</p>';

$lang['db_database_settings']	= 'Database Settings';
$lang['db_hostname']			= 'Hostname';
$lang['db_dbname']				= 'Database Name';
$lang['db_advanced_options']	= 'Advanced Options';
$lang['db_persistant_connect']	= 'Persistant Connection';
$lang['db_display_errors']		= 'Display Database Errors';
$lang['db_enable_caching']		= 'Enable Query Caching';
$lang['db_cache_dir']			= 'Cache Directory';
$lang['db_prefix']				= 'Prefix';

$lang['db_servers']				= 'Servers';
$lang['db_driver']				= 'Driver';
$lang['db_persistant']			= 'Persistant';
$lang['db_debug_on']			= 'Debug On';
$lang['db_strict_mode']			= 'Strict Mode';
$lang['db_running_on_1']		= 'You are currently running on the';
$lang['db_running_on_2']		= 'server.';