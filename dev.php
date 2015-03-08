<?php
/*
 * There is thiis below.
 *
 * Thiis is a minimalist-evolving CMS made by Nicolas Liautaud. http://nliautaud.fr/thiis
 * Thiis is provided 'as is' without warranty of any kind, including working. If you found
 * a bug or you have interogations, ideas or needs about thiis, feel free to contact me.
 *
 * Thiis software is licensed under CC-BY 3.0. http://creativecommons.org/licenses/by/3.0
 * You can use, share and modify thiis for any purpose, just credit its author or website.
 * Data icons are generated from Mark James mini set. http://famfamfam.com/lab/icons/mini
 *
 * @package Thiis
 * @author Nicolas Liautaud <nicolas.liautaud@gmail.com>
 */
class Thiis
{
	var $version = 1364667604;
	var $visitor;
	var $infos = '';

	var $footnotes = array();
	var $translations = array(
		'en' => array(
			'add_one'=>'Add a new item',
			'cache'=>'Use cache (static page)',
			'del'=>'Delete',
			'dir_add'=>'New folder',
			'dir_edit'=>'Edit this folder',
			'down'=>'↓',
			'error_dir_add'=>'Already here',
			'error_dir_add_msg'=>'This folder already exists here. Please choose another name, or delete it first.',
			'error_file_path'=>'File manipulation error',
			'error_file_path_msg'=>'Impossible to manipulate files in the given path. Check the files path in setting and check directory permissions (775 needed).',
			'error_file_size'=>'Too big',
			'error_file_size_msg'=>'The file is too big to be uploaded. Change site setting or turn around.',
			'error_file_type'=>'Unauthorized file type',
			'error_file_type_msg'=>'This type of file is not allowed to be uploaded.',
			'error_last_admin'=>'This is the last admin account',
			'error_last_admin_msg'=>'You can\'t delete all the administrators account to not lose control of the website. Create another admin account first.',
			'error_last_data'=>'The last one',
			'error_last_data_msg'=>'You cannot delete this item because it\' the last of it\'s kind. Please make another first.',
			'error_login'=>'Login failed',
			'error_login_msg'=>'Invalid name/password combinaison.',
			'error_name_exist'=>'This item already exists',
			'error_name_exist_msg'=>'An item with this name already exists, delete it or choose another name.',
			'error_name_format'=>'Name error',
			'error_name_format_msg'=>'Please enter a name using only letters, numbers, points, underscores and dashs.',
			'error_name_reserved'=>'This name is reserved',
			'error_name_reserved_msg'=>'Some names are reserved for the system. Please choose another one.',
			'error_php'=>'PHP error',
			'error_php_msg'=>'The following error was encountered during the process : <br />',
			'error_right'=>'Login',
			'error_right_msg'=>'This require more right. Please place the severed hand on the scanner.',
			'fields_list'=>'Fields list',
			'file'=>'Files',
			'file_del'=>'Delete file',
			'file_upload'=>'Upload a file',
			'info_add'=>'There is a new one',
			'info_add_msg'=>'The value have been added.',
			'info_del'=>'One less',
			'info_del'=>'One less',
			'info_del_msg'=>'The value have been removed.',
			'info_dir_add'=>'A new place to be',
			'info_dir_add_msg'=>'The folder have been successfully created.',
			'info_dir_del'=>'Kaboom',
			'info_dir_del_msg'=>'The folder and its content have been successfully deleted.',
			'info_dir_edit'=>'A new name',
			'info_dir_edit_msg'=>'The folder was renamed successfully.',
			'info_edit'=>'Transformation !',
			'info_edit_msg'=>'The value have been changed.',
			'info_field_add'=>'Field added',
			'info_field_add_msg'=>'The new field have been added.',
			'info_field_del'=>'Field deleted',
			'info_field_del_msg'=>'The field have been deleted.',
			'info_file_add'=>'File uploaded',
			'info_file_add_msg'=>'The file was uploaded successfully. You should see it in the browser.',
			'info_file_del'=>'File deleted',
			'info_file_del_msg'=>'The file was successfully deleted.',
			'info_file_edit'=>'File edited',
			'info_file_edit_msg'=>'The file was successfully edited.',
			'info_preview'=>'This is a preview',
			'info_preview_msg'=>'No changes will be saved until you use the "Edit" button.',
			'info_undo'=>'Action canceled',
			'info_undo_msg'=>'The action was successfully canceled.',
			'info_update'=>'New update',
			'info_update_msg'=>'There is a new update availlable.',
			'info_updated'=>'Updated',
			'info_updated_msg'=>'The core of thiis was successfully updated.',
			'info_firstlogin'=>'Account creation',
			'info_firstlogin_msg'=>'Please define the new administrator account name and password.',
			'login_forgot'=>'Forgot your password?',
			'ok'=>'OK, thanks',
			'parent_dir'=>'Parent folder',
			'placeholder_date'=>'Day/Month/Year',
			'placeholder_email'=>'email@website.com',
			'placeholder_password'=>'Fill to change password',
			'thiis_hello'=>"=======Hi=======\nThe system is ready, you can start building via [[?admin>the administration]].",
			'toc'=>'Table of content',
			'toc_empty'=>'There is no structured headers.',
			'up'=>'↑',
			'update_to'=>'Update core to',
		),
		'fr' => array(
			'add'=>'Ajouter',
			'add_one'=>'Ajouter un élément',
			'admin'=>'Administrateurs',
			'administration'=>'Administration',
			'cache'=>'Mettre en cache (page statique)',
			'close'=>'Fermer',
			'content'=>'Contenu',
			'date'=>'Date',
			'default_value'=>'Valeur par défaut',
			'del'=>'Supprimer',
			'dir_add'=>'Nouveau dossier',
			'dir_edit'=>'Modifier ce dossier',
			'down'=>'↓',
			'edit'=>'Modifier',
			'error_action'=>'Action: Impossible',
			'error_action_msg'=>'Une erreur inconnue s\'est produite, impossible de faire cette action.',
			'error_dir_add'=>'Ce dossier existe déjà',
			'error_dir_add_msg'=>'Un dossier avec ce nom existe déjà à cet emplacement.',
			'error_file_path'=>'Erreur de fichier',
			'error_file_path_msg'=>'Impossible de manipuler les fichiers. Vérifiez le chemin d\'accès et ses permissions.',
			'error_file_size'=>'Trop gros',
			'error_file_size_msg'=>'Le fichier est trop volumineux pour être chargé. Réduisez sa taille.',
			'error_file_type'=>'Type de fichier interdit',
			'error_file_type_msg'=>'Ce type de fichier n\'est pas autorisé à être chargé.',
			'error_last_admin'=>'Dernier compte administrateur',
			'error_last_admin_msg'=>'Vous ne pouvez tous les supprimer. Créez-en un autre d\'abord.',
			'error_last_data'=>'Le dernier survivant',
			'error_last_data_msg'=>'Vous ne pouvez supprimer le dernier élément. Créez-en un autre d\'abord.',
			'error_login'=>'Erreur de connexion',
			'error_login_msg'=>'Mauvaise combinaison identifiant/mot de passe.',
			'error_name_exist'=>'Cet élément existe déjà',
			'error_name_exist_msg'=>'Supprimez-le ou choisissez un autre nom.',
			'error_name_format'=>'Erreur de nommage',
			'error_name_format_msg'=>'Veuillez utiliser uniquement lettres, nombres, points, tirets et tirets bas.',
			'error_name_reserved'=>'Nom réservé',
			'error_name_reserved_msg'=>'Certains noms sont réservés par le système. Choisissez-en un autre.',
			'error_php'=>'Erreur PHP',
			'error_php_msg'=>'L\'erreur suivante a été rencontrée durant le processus : <br />',
			'error_right'=>'Connexion',
			'error_right_msg'=>'Cette action nécessite une authentification.',
			'error_syntax'=>'Erreur de syntaxe',
			'error_syntax_msg'=>'Il y a un cafouillage de moustaches.',
			'fields_list'=>'Liste des champs',
			'file'=>'Fichiers',
			'fileinfo'=>'Infos fichiers',
			'file_del'=>'Supprimer ce fichier',
			'file_name'=>'Nom du fichier',
			'file_upload'=>'Charger un fichier',
			'filter'=>'Filtrer',
			'hide'=>'Cacher',
			'info_add'=>'Un de plus',
			'info_add_msg'=>'L\'élément a été ajouté.',
			'info_del'=>'Un de moins',
			'info_del_msg'=>'L\'élément a été supprimé.',
			'info_dir_add'=>'Dossier créé',
			'info_dir_add_msg'=>'Le nouveau dossier a été créé.',
			'info_dir_del'=>'Dossier supprimé',
			'info_dir_del_msg'=>'Le dossier a été supprimé, ainsi que son contenu.',
			'info_dir_edit'=>'Un nouveau nom',
			'info_dir_edit_msg'=>'Le dossier a été renommé.',
			'info_edit'=>'Transformation !',
			'info_edit_msg'=>'L\'élément a été modifié.',
			'info_field_add'=>'Champ ajouté',
			'info_field_add_msg'=>'Le champ a été ajouté.',
			'info_field_del'=>'Champ supprimé',
			'info_field_del_msg'=>'Le champ a été supprimé.',
			'info_file_add'=>'Fichier chargé',
			'info_file_add_msg'=>'Le fichier a été chargé, il apparaît dans le navigateur de fichiers.',
			'info_file_del'=>'Fichier supprimé',
			'info_file_del_msg'=>'Le fichier a été supprimé.',
			'info_file_edit'=>'Fichier modifié',
			'info_file_edit_msg'=>'Le fichier a été correctement modifié.',
			'info_firstlogin'=>'Création de compte',
			'info_firstlogin_msg'=>'Merci de définir le nom et le mot de passe du nouveau compte administrateur.',
			'info_preview'=>'Ceci est un aperçu',
			'info_preview_msg'=>'Rien ne sera enregistré tant que vous n\'aurez pas cliqué sur "Modifier".',
			'info_undo'=>'Marche arrière toute',
			'info_undo_msg'=>'L\'action a été correctement annulée.',
			'info_update'=>'Nouvelle mise à jour',
			'info_update_msg'=>'Une nouvelle version du système est disponible.',
			'info_updated'=>'Mis à jour',
			'info_updated_msg'=>'Le coeur du système a été mis à jour avec succès.',
			'login'=>'Connexion',
			'login_forgot'=>'Mot de passe oublié?',
			'logout'=>'Déconnexion',
			'name'=>'Nom',
			'new_field'=>'Nouveau champ',
			'new_item' =>'Nouvel élément',
			'no'=>'Non',
			'not_saved'=>'Non enregistré',
			'ok'=>'Ok, merci',
			'page'=>'Pages',
			'parent'=>'Parent',
			'parent_dir'=>'Dossier parent',
			'password'=>'Mot de passe',
			'placeholder_date'=>'Jour/Mois/Année',
			'placeholder_email'=>'email@domaine.fr',
			'placeholder_password'=>'Remplir pour changer de mot de passe',
			'preview'=>'Aperçu',
			'rank'=>'Rang',
			'rank'=>'Rangs',
			'right'=>'Droits',
			'setting'=>'Paramètres',
			'style'=>'Styles',
			'template'=>'Templates',
			'thiis_hello'=>"=======Bonjour=======\nLe système est prêt, vous pouvez le manipuler via [[?admin>l'administration]].",
			'time'=>'Heure',
			'timestamp'=>'Date/heure',
			'title'=>'Titre',
			'toc'=>'Table des matières',
			'toc_empty'=>'Il n\'y a pas de titres structurés.',
			'undo'=>'Annuler',
			'up'=>'↑',
			'update_to'=>'Mettre à jour vers la version',
			'user'=>'Utilisateurs',
			'value'=>'Valeur',
			'visitor'=>'Visiteur',
			'yes'=>'Oui',
		)
	);

	var $default_data = array('data'=>array('page'=>array(),'user'=>array(),'setting'=>array(),'rank'=>array(),'right'=>array(),'style'=>array(),'template'=>array(),'file'=>array()),'page'=>array('index'=>array('parent'=>'','date'=>'','content'=>'')),'user'=>array(),'setting'=>array('site_title'=>'Thiis','site_description'=>'Thiis is default.'),'rank'=>array('visitor'=>0,'user'=>1,'admin'=>2),'right'=>array('page'=>1,'user'=>2,'setting'=>2,'rank'=>2,'right'=>2,'style'=>2,'template'=>2,'file'=>1,'dir'=>2),'style'=>array('default'=>'body {width:800px;margin:20px auto;font: normal normal normal 12px/12px Arial, sans-serif; line-height:1.4em;}
aside{position:fixed;}
article{width:700px;padding:0 10px 0 110px;}
a {color:black;letter-spacing:1px;font-weight:bold;text-decoration:none;}
a:hover{text-decoration:underline;}
h1 {font-size:1.5em; margin-top:0; text-transform:uppercase;}
footer {font-size:.8em; font-style:italic;}
code{white-space:pre-wrap;}'),'template'=>array('default'=>'<!doctype html>
<html lang="{{thiis>language}}">
<head>
	<meta charset="utf-8">
	<title>{{setting>site_title}} - {{page>title}}</title>
	<meta name="description" content="{{setting>site_description}}">
	<style type="text/css"><!--{{style>default}}--></style>
	<link rel="alternate" type="application/rss+xml" title="RSS feed" href="?rss" />
</head>
<body>
	<aside>
		<header><h1>[[index>{{setting>site_title}}]]</h1></header>
		<nav>{{thiis>pages_list}}</nav>
		<footer><p>Built with [[thiis]]</p></footer>
	</aside>
	<article>{{page>content}}</article>
</body>
</html>'),'file'=>array(0=>array()));

	/*
	* CONSTRUCTOR
	*/
	function Thiis($DATA)
	{
		$this->data = $DATA;
		$this->get = $this->md_function('htmlentities', $_GET);

		define('SERVERURL', 'http://' . $_SERVER['SERVER_NAME']);
		$path = dirname($_SERVER['SCRIPT_NAME']);
		define('FILEPATH', $path == '/' ? $path : $path . '/');
		define('FILENAME', basename($_SERVER['SCRIPT_NAME']));
		define('FILENAMEBASE', substr(FILENAME, 0, strpos(FILENAME,'.')));
		define('SITEURL', SERVERURL . FILEPATH . FILENAME);
		define('ADMINURL', SITEURL . '?admin');
		define('REQURL', str_replace('&undo', '', SERVERURL . $_SERVER['REQUEST_URI']));
		define('PAGENAME', empty($this->get['page']) ? 'index' : $this->get['page']);

		define('THIISURL', 'http://nliautaud.fr/thiis/');

		define('NAMECHAR', '[a-zA-Z0-9_.-]');
		define('PAGEPATTERN', '`^('.NAMECHAR.'*)(?:#(.+))?$`'); // [[name]] or [[name#anchor]] or [[#anchor]]
		define('URLPATTERN',
		'(?:([hH][tT][tT][pP][sS]?:)\/\/)?'	// protocol
		. '(?:([\w\.\-]+(?:\:[\w\.\&%\$\-]+)*)@)?'	// email
		. '((?:(?:\.?[^\s\(\)\<\>\\\'\"\.\[\]\,@;:]+)+\.[a-zA-Z]{2,6})|'	// (sub)domain
		. '((([01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}([01]?\d{1,2}|2[0-4]\d|25[0-5])))'	// ip
		. '(?:\b\:(?:6553[0-5]|655[0-2]\d|65[0-4]\d{2}|6[0-4]\d{3}|[1-5]\d{4}|[1-9]\d{0,3}|0)\b)?'	// port
		. '(?:(?:\/[^\/][\w\.\,\?\'\\\/\+&%\$#\=\:~_\-@]*)*[^\.\,\?\"\'\(\)\[\]!;<>{}\s\x7F-\xFF])?'); // params

		$this->check_defaults();

		// Rank constants
		foreach($this->get('rank') as $rank => $id) define(strtoupper($rank), $id);


		// Special outputs
		header('thiis-version: ' . $this->version);
		if(isset($this->get['rss'])&& $this->setting('output_rss') !== false)
			exit($this->xml_rss());
		if(isset($this->get['download']) && $this->setting('allow_download')) {
			header('Content-disposition: attachment; filename=thiis_'.$this->version.'.php');
			header('Content-type: text/php; charset=utf-8');
			exit("<?php\n" . $this->source_core());
		}

		// POST format
		if(get_magic_quotes_gpc()) {
			$this->post = $this->md_function('stripcslashes', $_POST, 'string');
		} else	$this->post = $_POST;

		// Session
		session_start();
		if(false === $this->check_login())
			$this->infos .= $this->admin_msg('login', 'error', '', REQURL, true);

		// Update
		if(isset($this->get['update'])) $this->update();
		// GET message
		if(isset($this->get['updated'])) $this->admin_msg('updated', 'info', '', ADMINURL);
		if(isset($this->get['undo'])) $this->admin_msg('undo', 'info', '', REQURL);
		// Actions
		if(!empty($this->post['action'])) $this->actions();
	}
	/*
	* Handle unknow method call
	*/
	public function __call($name, $arguments)
	{
		if($this->visitor->rank)
			$this->infos .= $this->admin_msg('php', 'error',
				'<p>Call to undefined Thiis method :
					<b>'.$name.'('.implode(', ', $arguments).')</b>
				</p>');
	}

	/*
	* Check default datas / construct.
	*/
	function check_defaults()
	{
		$this->default_data['page']['index']['content'] = $this->word('thiis_hello');
		$this->default_data['page']['index']['date'] = date('Y-m-d');
		$rewrite = false;
		foreach($this->default_data as $data_type => $content) {
			if(!$this->exist($data_type)) {
				$this->add($data_type, null, $content);
				$rewrite = true;
			}
		}
		if($rewrite) $this->source_rewrite_var();
	}

	/* SOURCE MANIPULATION */

	/*
	* Return actual file source content.
	* @return string
	*/
	function source() {
		return file_get_contents(FILENAME);
	}
	/*
	* Rewrite actual file source.
	* @param string $content
	*/
	function source_rewrite($content) {
		if($f = fopen(FILENAME, 'w+'))
			return fwrite($f, $content) && fclose($f);
		return false;
	}
	/*
	 * Return the actual core.
	 */
	function source_core() {
		$core_start = "\n/*\n * There is thiis below.";
		$src = $this->source();
		return substr($src, strpos($src, $core_start));
	}
	/*
	 * Rewrite a variable line in soure by an interpretation of its new value.
	 *
	 * @param string $type The data name.
	 * @param string $type Optionnal. If set, the data value will be replaced by this data.
	 * @return bool operation success
	 */
	function source_rewrite_var($data = null)
	{
		if($data === null) $data = $this->data;
		$data_str = $this->value_to_string($data);
		$vars = "<?php\n\$DATA = " . $data_str . ";\n";
		return $this->source_rewrite($vars . $this->source_core());
	}
	/*
	* Redirect to a given url.
	*
	* @param string $url The url to go.
	* @param array $params Optionnal. Additional url parameters.
	*/
	function redirect($url, $params = null)
	{
		if($params) {
			if(is_array($params)) $params = implode('&', $params);
			$sep = strpos($url, '?') !== false ? '&' : '?';
		} else $sep = '';

		header('Location: ' . $url . $sep . $params);
		exit;
	}

	/* VALUES REPRESENTATIONS */

	/*
	* Return a PHP-like string representation of a scalar value.
	*
	* @param mixed $value The string, numeric or bool value to represent.
	* @return string The string representation of the value.
	*/
	function scalar_to_string($val) {
		if($val === null)	return 'null';
		if(is_bool($val))	return ($val ? 'true' : 'false');
		if(is_string($val))	{
			// escape slashs & quotes
			$val = str_replace(array('\\', '\''), array('\\\\', '\\\''), $val);
			return '\''.$val.'\'';
		}
		return ''.$val;
	}
	/*
	* Return a PHP-like string representation of any value, including arrays.
	*
	* @param mixed $value The value to represent.
	* @param string $name Optionnal. If set, insert the value name before the value representation.
	* @param bool $indent Optionnal. If set to True, represent the value with indents and line-breaks.
	* @param bool $inside Optionnal. If set to True, use associative array operator between name and value.
	* @return string
	*/
	function value_to_string($value, $name = false, $indent = false, $inside = false)
	{
		if($indent) {
			$in = str_repeat("\t", $it);
			$sp = ' ';
			$nl = "\n";
			$str = $in;
		} else {
			$in = $sp = $nl = $str = '';
		}
		if($name !== false) {
			$del = $inside ? '=>' : '=';
			$str .= $this->value_to_string($name) . $sp . $del . $sp;
		}
		$nbr = 0;
		if(is_array($value))
		{
			$str .= 'array(' . $nl;
			foreach($value as $key => $val)
			{
				if($nbr) $str .= ',' . $nl;
				$str .= $this->value_to_string($val, $key, $indent, true);
				$nbr++;
			}
			$str .= $nl . $in . ')';
		}
		else $str .= $this->scalar_to_string($value);
		return $str;
	}
	/*
	 * Return the value interpretation of string(s).
	 *
	 * @param string|array $mixed The string or array to interpret.
	 * @return string|bool|int|float The interpreted value.
	 */
	function string_to_value($mixed)
	{
		if(is_array($mixed)) {
			foreach($mixed as $key => $val) {
				$mixed[$key] = $this->string_to_value($val);
			}
		}
		elseif(is_string($mixed))
		{
			$str = rtrim($mixed);
			if(preg_match('`^null$`i', $str))			return null;
			if(preg_match('`^true$`i', $str))			return true;
			if(preg_match('`^false$`i', $str))			return false;
			if(preg_match('`^\d+$`', $str))				return intval($str);
			if(preg_match('`^\d+\.\d+$`', $str))		return floatval($str);
			else return $str;
		}
		return $mixed;
	}
	/*
	 * Convert a string into a valable path.
	 *
	 * @param string $str The string to convert.
	 * @return string The string converted.
	 */
	function string_to_path($str)
	{
		$str = preg_replace('`(?:^\.?/|/\./|/$)`', '', trim($str));
		if(empty($str) || $str == '.') return '';
		return $str;
	}
	/*
	 * Convert a value to a JSON string.
	 * @param mixed $val The value
	 * @return string The JSON string
	 */
	function value_to_json($val, $lvl = 0)
	{
		if(is_string($val)) {
			$a = array('"', '\\', '/', "\b", "\f", "\n", "\r", "\t");
			$b = array('\"', '\\\\', '\/', '\\b', '\\f', '\\n', '\\r', '\\t');
			return '"' . str_replace($a, $b , $val) . '"';
		}
		elseif(!is_array($val)) return $this->scalar_to_string($val);
		$tab = str_repeat("\t", $lvl);
		$tabs = str_repeat("\t", $lvl+1);
		$str = "\n" . $tab . "[\n";
		foreach($val as $k => $v)
		{
			$str .= $tabs . '"' . $k . '": ';
			$str .= $this->value_to_json($v, $lvl+1);
			$str .= ",\n";
		}
		$str .= $tab . ']';
		return $str;
	}
	/*
	 * Convert a JSON string into a PHP value.
	 * @param string $json The JSON string.
	 * @return mixed The PHP value.
	 */
	function json_to_value($json)
	{
		$comment = false;
		$out = '$x=';
		for($i=0; $i < strlen($json); $i++)
		{
				if(!$comment)
				{
						if($json[$i] == '{' || $json[$i] == '[') $out .= ' array(';
						elseif($json[$i] == '}' || $json[$i] == ']') $out .= ')';
						elseif($json[$i] == ':') $out .= '=>';
						else $out .= $json[$i];
				}
				else $out .= $json[$i];
				if($json[$i] == '"' && $json[($i-1)] != "\\") $comment = !$comment;
		}
		eval($out . ';');
		return $x;
	}
	/*
	 * Return an exerpt of a <i>str</i> maintaining words integrity.
	 *
	 * @param string $string The original string.
	 * @param int $len The maximum number of characters of the excerpt.
	 * @param string $end String added to the end if <i>str</i> is cut. By default "...".
	 */
	function excerpt($str, $len, $end = '...')
	{
		if(strlen($str) > $len)
		{
			$str = mb_substr($str, 0, $len, 'UTF-8');
			$pos = max(strrpos($str, '.'), strrpos($str, ' '), strrpos($str, "\n"));
			if($pos) $str = substr($str, 0, $pos);
			$str .= $end;
		}
		return $str;
	}
	/*
	 * Return a css #id compliant string.
	 * Used for relying title id and anchor.
	 */
	static function string_to_id($str)
	{
		// remove tags
		$str = strip_tags($str);
		// replace any in-spaces by one underscore
		$str = preg_replace('`(?:\s|_)+`', '-', trim($str));
		// remove accents and delete special chars (based on their html code)
		$str = htmlentities($str, ENT_NOQUOTES, 'utf-8');
		$str = preg_replace('`&([A-za-z])(?:acute|cedil|circ|grave|orn|ring|slash|th|tilde|uml);`', '\1', $str);
		// delete anything else
		$str = preg_replace('`(?:&[^;]+;|[^a-zA-Z0-9-])`', '', $str);
		return $str;
	}

	/* DATA GETTERS */

	/*
	* Check if a given data <i>type</i>, <i>item</i> or item <i>field</i> exist.
	*
	* @param string $type The data type.
	* @param string $item Item name (optionnal)
	* @param string $field Item field name (optionnal)
	* @return boolean
	*/
	function exist($type, $item = null, $field = null)
	{
		if(!isset($this->data[$type])
		||($item && !isset($this->data[$type][$item]))
		||($field && !isset($this->data[$type][$item][$field])))
			return false;
		return true;
	}
	/*
	* Get all data of given <i>type</i> or a specific <i>item</i>or a specific item <i>field</i>.
	*
	* @param string $type The data type.
	* @param string $item Optionnal. If set get only the item with this name.
	* @param string $field Optionnal. If set get the value of the field whith this name.
	* @param boolean $i18n Optionnal. If true, try the item of the system language.
	* @return mixed Array of items, item array, item value, or null.
	*/
	function get($type, $item = null, $field = null, $i18n = false)
	{
		if(!$this->exist($type)) return null;
		if($item === null || !is_string($item)) {
			return $this->string_to_value($this->data[$type]);
		}
		if($i18n) {
			$item_i18n = $item . ':' . $this->language();
			if($this->exist($type, $item_i18n))
				$item = $item_i18n;
		}
		if($this->exist($type, $item)) {
			if($field === null)
				return $this->string_to_value($this->data[$type][$item]);
			if($this->exist($type, $item, $field))
				return $this->string_to_value($this->data[$type][$item][$field]);
			return null;
		}
		return null;
	}
	/*
	* Return the list of fields of data <i>type</i>.
	*
	* @param string $type The data type.
	* @return array The fields names.
	*/
	function get_fields($type)
	{
		if(!$this->exist($type) || empty($this->data[$type])) return array();
		$first = reset($this->data[$type]);
		if(empty($first) || !is_array($first)) return array();
		else return array_keys($first);
	}
	/*
	* Search values in data and return array of names.
	*
	* @param string $type The data type.
	* @param string $field Optionnal. The field filter (null for all).
	* @param string $value Optionnal. The value filter (null for all).
	* @param int $count Optionnal. The maximum number values to return.
	* @param int $method Optionnal. The sort method (null, SORT_ASC, SORT_DESC or other for shuffle).
	* @param string $sort Optionnal. Sort along this field. Don't sort if null.
	* @return array
	*/
	function find($type,
		$field = null, $value = null, $count = null,
		$method = null, $sort = null, $i18n = false
	) {
		$data = $this->get($type);
		if(!$data) return false;
		// sort
		if($method == SORT_ASC || $method == SORT_DESC)
			$data = $this->md_multisort($data, $sort, $method);
		elseif($method !== null)
			$data = $this->md_shuffle($data);

		// find
		$list = array();
		foreach($data as $name => $content)
		{
			if($i18n) {
				$lang = $this->language();
				$is_i18n = substr($name, -3, -2) == ':';
				if($is_i18n) {
					$is_good_i18n = substr($name, -2) == $lang;
					if(!$is_good_i18n) continue;
				} else {
					$exist_good_i18n = isset($data[$name . ':' . $lang]);
					if($exist_good_i18n) continue;
				}
			}

			if(($field === null && ($value === null || $value == $content))
			|| (is_array($content) && isset($content[$field]) && ($value === null || $content[$field] == $value)))
			{
				$list[] = $name;
				if($count === 1) return $name;
				elseif($count == count($list)) break;
			}
		}
		return $list;
	}
	/*
	 * Return a nested list of data names.
	 *
	 * @param string $type the data type
	 * @param string $parent the parent name
	 * @param int $lvl the current parenting level
	 * @return array
	 */
	function find_nested($type, $parent = '', $method = null, $sort = null, $max_lvl = null, $lvl = 0)
	{
		if($max_lvl && $lvl >= $max_lvl || $lvl > 999) return false;

		$childs = array_flip($this->find($type, 'parent', $parent, null, $method, $sort));
		if(empty($childs)) return array();

		foreach($childs as $name => $id) {
			$childs[$name] = $this->find_nested($type, $name, $method, $sort, $max_lvl, $lvl+1);
		}
		return $childs;
	}
	/*
	 * Return the item hierarchy as a parent chain.
	 *
	 * @param string $type the data type
	 * @param string $name the item name (optional, root by default)
	 * @return array parents items names
	 */
	function hierarchy($type, $name) {
		$hierarchy = array();
		$nbr = 0;
		while(!empty($name) && $nbr < 10) {
			$hierarchy[] = $name;
			$name = $this->get($type, $name, 'parent');
			$nbr++;
		}
		return array_reverse($hierarchy);
	}
	/*
	 * Get the nesting level between two data items.
	 * Positive: a is child of b. Negative: b is child of a.
	 *
	 * @param string $a the name of the first item
	 * @param string $b the name of the second item (optional, root by default)
	 * @return mixed the parenting level, or false
	 */
	function level($type, $a, $b = '')
	{
		$h = $this->hierarchy($type, $a);
		if(false !== ($a_id = array_search($a, $h))
		&& false !== ($b_id = array_search($b, $h)))
			return $a_id - $b_id;
		$h = $this->hierarchy($type, $b);
		if(false !== ($a_id = array_search($a, $h))
		&& false !== ($b_id = array_search($b, $h)))
			return $a_id - $b_id;
		return false;
	}

	/* DATA SETTERS */

	/*
	 * Delete a value of designed data.
	 *
	 * @param string $type the data type
	 * @param string $name the value name
	 * @return bool operation success
	 */
	function del($type, $name)
	{
		if(!$this->exist($type, $name)) return false;

		unset($this->data[$type][$name]);
		return true;
	}
	/*
	 * Add a data or a value in designed data.
	 *
	 * @param string $type the data type
	 * @param string $item the item name (optionnal, add data type if null)
	 * @param string $content the data content
	 * @param int $id the position to place the new item (optionnal, queue by default)
	 * @return bool operation success
	 */
	function add($type, $item, $content, $id = null)
	{
		// add data type
		if($item === null)
			$this->data[$type] = $content;
		// add data item
		else {
			$insert = $id !== null && $id >= 0 && $id < count($this->data[$type]);
			if($insert) {
				$before = array_slice($this->data[$type], 0, $id);
				$after = array_slice($this->data[$type], $id);
				$this->data[$type] = $before + array($item => $content) + $after;
			}
			else $this->data[$type][$item] = $content;
		}
		return true;
	}
	/*
	 * Edit an item in designed data.
	 *
	 * @param string $type the data type
	 * @param string $item the item name
	 * @param array $data the new item data
	 * @return bool operation success
	 */
	function edit($type, $item, $data)
	{
		if(!$this->exist($type, $item)) return false;

		$this->data[$type][$item] = $data;
		return true;
	}
	/*
	 * Rename an item in designed data.
	 *
	 * @param string $type The data type.
	 * @param string $item The item name.
	 * @param string $newname The new item name.
	 * @return bool operation success
	 */
	function rename($type, $item, $newname)
	{
		return $this->exist($type, $item)
			&& $this->add($type, $newname, $this->data[$type][$item])
			&& $this->del($type, $item);
	}
	/*
	 * Swap two items in designed data <i>type</i>.
	 *
	 * @param string $type The data type.
	 * @param string $item1 The first item name.
	 * @param string $item2 The second item name.
	 * @param bool $rewrite Optionnal. If set to false the data are not rewrited in source.
	 * @return bool operation success
	 */
	function swap($type, $item1, $item2, $rewrite = true)
	{
		$t = DATAPREFIX . $type;
		global $$t;
		if(isset(${$t}[$item1]) && isset(${$t}[$item2]))
		{
			$new = array();
			foreach($$t as $item => $val)
			{
				if($item == $item1) $new[$item2] = ${$t}[$item2];
				elseif($item == $item2) $new[$item1] = ${$t}[$item1];
				else $new[$item] = $val;
			}
			${$t} = $new;
			if($rewrite) return $this->source_rewrite_var($type);
			return true;
		}
		return false;
	}
	/*
	 * Swap two fields in all items of data <i>type</i>.
	 *
	 * @param string $type The data type.
	 * @param string $name1 The first field name.
	 * @param string $name2 The second field name.
	 * @param bool $rewrite Optionnal. If set to false the data are not rewrited in source.
	 * @return bool operation success
	 */
	function swap_fields($type, $name1, $name2, $rewrite = true)
	{
		$t = DATAPREFIX . $type;
		global $$t;
		$first = reset($$t);
		if(isset($first[$name1]) && isset($first[$name2]))
		{
			foreach($$t as $item => $fields)
			{
				$new = array();
				foreach($fields as $name => $val)
				{
					if($name == $name1) $new[$name2] = ${$t}[$item][$name2];
					elseif($name == $name2) $new[$name1] = ${$t}[$item][$name1];
					else $new[$name] = $val;
				}
				${$t}[$item] = $new;
			}
			if($rewrite) return $this->source_rewrite_var($type);
			return true;
		}
		return false;
	}

	/* FILES */

	/*
	* Return a list of files and directories according to root.
	*
	* @param string $path Optionnal. Additional path relative to "files_path" setting.
	* @param string $type_filter Optionnal. If set, return only files with this type.
	* @return array The description of found files (name, type, preview) and directories (name, type, path).
	*/
	function file_get($path = '', $keep = null, $skip = null)
	{
		$files = array();
		$previewable = array('jpg','jpeg','gif','png');

		$path = $this->root($path);
		$handle = @opendir($path);

		if(!$handle) return false;

		while(false !== ($file = readdir($handle)))
		{
			$fullpath = $path . '/' . $file;
			// hide files/folders starting with a dot and thiis file.
			if($file[0] == '.' || $fullpath == FILENAME) continue;
			// file
			if(is_file($fullpath))
			{
				// determine type by extension
				$type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
				if(in_array($type, $previewable)) $type = 'image';
				// skip according to types to keep and skip
				if(($skip == $type) || ($keep && $keep != $type)) continue;
				// create entry
				$files[$fullpath] = array('type' => $type);
				if($type == 'image') $files[$fullpath]['preview'] = $fullpath;
				if($data = $this->get('file', $fullpath)) $files[$fullpath] += $data;
			}
			// dir
			elseif(!$keep || $keep == '_dir') {
				$files[$fullpath] = array('type'=>'_dir');
			}
		}
		closedir($handle);
		ksort($files);
		return $files;
	}
	/*
	 * Upload a new file. (Look trough $_FILES) Relative to "files_path" setting.
	 *
	 * @param string $name The file name.
	 * @see actions()
	 */
	function file_add($name)
	{
		$file_tmp = $_FILES['data']['tmp_name']['file'];
		$file_ext = pathinfo($_FILES['data']['name']['file'], PATHINFO_EXTENSION);
		$file_size = filesize($file_tmp);

		// Check file autorisations (mime, type, ext)
		$unauthorized = false;
		$mime = $this->file_mime($file_tmp);
		$mime_pattern = '`[^;]\s*(?:'.$mime.'|'.dirname($mime).'|'.basename($mime).')`';
		if($blacklist = $this->setting('files_unauthorized'))
			$unauthorized = preg_match($mime_pattern, $blacklist);
		if($whitelist = $this->setting('files_authorized'))
			$unauthorized = !preg_match($mime_pattern, $whitelist);
		if($unauthorized) return $this->admin_msg('file_type', 'error');

		// Check max size
		if($max_size = $this->setting('files_max_size') && $file_size > $max_size) {
			return $this->admin_msg('file_size', 'error');
		}

		// Move
		if(!move_uploaded_file($file_tmp, $name)) {
			return $this->admin_msg('file_path', 'error');
		}

		return true;
	}
	/*
	 * Delete a file or a directory.
	 *
	 * @param string $path The target path.
	 */
	function file_del($path) {
		if(is_file($path)) return unlink($path);
		if(is_dir($path)) return $this->rmdir_r($path);
		return false;
	}
	/*
	 * Rename a file or a directory.
	 *
	 * @param string $oldpath The target path.
	 * @param string $newpath The new target path.
	 */
	function file_rename($oldpath, $newpath) {
		if($oldpath != $newpath && file_exists($oldpath))
			return rename($oldpath, $newpath);
		return false;
	}
	/*
	* Try to return the mime content type of the file located in <i>filepath</i>.
	*
	* @param string $filepath The file path.
	* @return string The file mime type.
	*/
	function file_mime($filepath)
	{
		// (PHP >= 5.3.0)
		if(class_exists('finfo')) {
			$fi = new finfo(FILEINFO_MIME);
			return $fi->buffer(file_get_contents($filepath));
		}
		// (PHP >= 4.3.0)
		elseif(function_exists('mime_content_type')) {
			return mime_content_type($filepath);
		}
		// Linux server
		elseif(PHP_OS == 'Linux'){
			$mime = exec('file --brief --mime-type ' . escapeshellcmd($filepath) . ' 2>/dev/null');
		   if(substr($mime, 0, 5) != 'ERROR') return $mime;
		}
		// Fail
		return false;
	}

	/* PARSER */

	/*
	 * Find and render any markup.
	 *
	 * @param string $str The string to parse.
	 * @param boolean $structure Parse headers, line breaks and paragraphs ? Default : false.
	 * @param boolean $php Execute php code ? If false, and by default delete php.
	 * @return string The parsed string.
	 */
	function parse($str, $structure = false, $php = true, $info = null)
	{
		if(!is_string($str)) return false;

		// render or delete php
		if($php && strpos($str, '<?php') !== false) {
			try { $str = $this->php_render($str, $info); }
			catch(Exception $phperror) {}
		}
		if(!$php || isset($phperror)) $str = preg_replace('`<\?php.*\?>`mUi', '', $str);

		// find and extract items to preserve
		global $p_items;
		if(!isset($p_items)) $p_items = array();
		$p_patterns = array(
			'`<\s*noparse[^>]*>(.*)</\s*noparse[^>]*>`smUi',
			'`<\s*script[^>]*>.*</\s*script[^>]*>`smUi');
		$p_func = create_function('$out', '
			global $p_items;
			$p_items[] = isset($out[1]) ? $out[1] : $out[0];
			return "<THIISpreserve".(count($p_items)-1)."/>";');
		foreach($p_patterns as $p) $str = preg_replace_callback($p, $p_func, $str);
		// parse code
		$str = preg_replace_callback('`(\n?)<code([^>]*)>(.*)(</\s*code[^>]*>)`smUi', array(&$this, 'parse_code'), $str);

		// hr
		$str = preg_replace('`___+`', '<hr />', $str);
		// lists
		$str = preg_replace_callback('`(?:\n(?:  |\t)+[-*][^\n]*)+`', array(&$this, 'parse_list'), $str);

		// find and render markups
		$markup_list = array('**'=>'**', '//'=>'//', '__'=>'__', '\'\''=>'\'\'', '{{'=>'}}', '[['=>']]', '(('=>'))');
		$markup_pattern = '`(\*\*|(?<!:)//|__|\'\'|\{\{|\}\}|\[\[|\]\]|\(\(|\)\))`';
		$markup_matches = preg_split($markup_pattern, $str, -1, PREG_SPLIT_DELIM_CAPTURE);
		$tree = $this->markup_tree_create($markup_list, $markup_matches);
		$str = $this->markup_tree_render($tree);

		// headers and paragraphs
		if($structure) {
			$str = $this->parse_headers($str);
			$str = $this->parse_breaks($str);
		}

		// dashes
		$str = preg_replace(
			array('`[^-](?<!<!)---(?!>)[^-]`', '`[^-](?<!<!)--(?!>)[^-]`'),
			array('&mdash;', '&ndash;'),
			$str);

		// retrieve preserved items
		foreach($p_items as $id => $item)
			$str = preg_replace('`<THIISpreserve'.$id.'/>`', $item, $str, 1);

		return $str;
	}

	/*
	 * Remove all markup in <i>string</i>.
	 *
	 * @param string $string The string containing markups.
	 * @param bool $headers Optionnal. If set to false, delete the headers content.
	 * @return string The string without markups.
	 */
	function markup_del($string, $headers = true)
	{
		if(!$headers)
		{
			$del = array(
				'`<header[^>]*>.*</header>`',
				'`<h[1-6][^>]*>.*</h[1-6]>`i');
			$string = preg_replace($del, '', $string);
		}
		$find = array(
			'`\*\*(.*?)\*\*`',	// bold
			'`//(.*?)//`',		// italic
			'`__(.*?)__`',		// underline
			'`\'\'(.*?)\'\'`',	// monospace
			'`(?:___+)`',		// horizontals
			'`\[\[(.*?)\]\]`',	// link
			'`{{.*?}}`',		// object
			'`\(\(.*?\)\)`'		// footnote
		);

		$string = preg_replace($find, '\\1', $string);
		$string = strip_tags($string);

		return $string;
	}

	function markup_tree_create($markups, &$matches)
	{
		static $linkurl;
		$tree = array('childs'=>array());
		$queue = array();
		$match_id = 0;
		$errors = false;
		while(($value = array_shift($matches)) !== null)
		{
			// determine parent node
			if($len = count($queue)+1) {
				$parent =& $tree;
				while($len > 1) {
					$childsnbr = count($parent['childs']);
					$parent =& $parent['childs'][$childsnbr-1];
					$len--;
				}
			}
			// is markup
			if($match_id++ % 2) {
				// closing
				if(!isset($markups[$value]) || $value === end($queue))
				{
					if($value == ']]') $linkurl = null;
					$open = array_pop($queue);
					// syntax error
					if($value != $markups[$open]) {
						$message = '<span style="color:#C00;">'
							. '<u><a href="'.THIISURL.'syntax" style="color:#C00;" type="_blank">Thiis syntax error :</a></u> '
							. 'unexpected <b>'.$value.'</b>, expected <b>'.$markups[$open].'</b></span>.';
						$parent['childs'][$childsnbr-1] = $message;
						$errors = true;
					}
				}
				// opening
				else
				{
					if($content = array_shift($matches)) $childs = array($content);
					else $childs = array();
					$node = array('type'=>$value, 'childs'=>$childs);
					if($value == '[[') $linkurl = $content;
					if($linkurl) $node['link'] = $linkurl;;
					$parent['childs'][] = $node;
					$queue[] = $value;
					$match_id++;
				}
			}
			// not markup
			elseif($value) $parent['childs'][] = $value;
		}
		if($errors) $this->admin_msg('syntax', 'error');
		return $tree;
	}

	function markup_tree_render($node)
	{
		$html = '';
		foreach($node['childs'] as $child) {
			if(is_array($child))
			{
				$child_render = $this->markup_tree_render($child);
				// params
				$name = $child_render;
				$params = null;
				if($param_pos = strpos($child_render, '>')) {
					$name = substr($child_render, 0, $param_pos);
					$params = substr($child_render, $param_pos + 1);
				}
				switch($child['type'])
				{
					case '**': $html .= '<strong>' . $child_render . '</strong>'; break;
					case '//': $html .= '<em>' . $child_render . '</em>'; break;
					case '__': $html .= '<u>' . $child_render . '</u>'; break;
					case "''": $html .= '<code>' . $child_render . '</code>'; break;
					case '((': $html .= $this->parse_footnote($child_render); break;
					case '[[': $html .= $this->parse_link($name, $params); break;
					case '{{':
						$link = isset($child['link']) ? $child['link'] : null;
						$html .= $this->parse_object($name, $params, $link);
						break;
					default : $html .= $child_render;
				}
			}
			else $html .= $child;
		}
		return $html;
	}
	/*
	 * Find and execute PHP code in given string.
	 *
	 * @param string $str The string to parse.
	 * @param string $info Information about the data location for errors (optionnal)
	 * @return string The string with evaluated PHP code.
	 */
	function php_render($str, $info = null)
	{
		ob_start();
		eval('?>' . $str);
		$str = ob_get_contents();
		ob_end_clean();

		$error_pattern = "`^<br />\n(<b>.* in <b>)/.*(</b> on line <b>[0-9]+</b>)<br />`";
		if(preg_match($error_pattern, $str, $error)) {
			$str = substr(preg_replace($error_pattern, '', $str), 7);
			if($this->visitor->rank)
				$this->infos .= $this->admin_msg('php', 'error', '<p>'.$error[1].$info.$error[2].'</p>');
			throw new Exception();
		}
		return $str;
	}
	/**
	 * Parse headers to create hierarchical structure.
	 * Surrounds headers by nested divs using related class and id.
	 *
	 * @param string $str The content to parse.
	 * @return string The modified content.
	 */
	function parse_headers($str)
	{
		$str = "\n\n".str_replace("\r", '', $str)."\n\n";
		// convert markups
		$marks = array('=', '-', '\`');
		foreach($marks as $i => $m) {
			$i++;
			$str = preg_replace_callback(
				array(
					// multi-lines
					"`(?:(?:\n\n)?$m{4,}\n?|\n\n)[ \t]*((?:.+?\n)+.*?)[ \t]*$m{4,}[ \t]*\n`",
					// one line
					"`\n[ \t]*$m{4,}[ \t]*([^\n]+?)[ \t]*$m*[ \t]*\n`"),
				create_function(
					'$out', 'return \'<h'.$i.'>\'.trim($out[1]).\'</h'.$i.'>\';'),
				$str);
		}
		// create structure
		for($i=1; $i<=6; $i++) {
			$pattern = "`(<\s*h$i.*>(.*)</\s*h$i>.*)(?=</div><div class=.h[1-$i]|<h[1-$i]|$)`siU";
			$function = create_function('$out',
				'return \'<div class="h'.$i.'" id="\'.Thiis::string_to_id($out[2]).\'">\'.$out[1].\'</div>\';');
			$tmp = preg_replace_callback($pattern, $function, $str);
			if($tmp !== null) $str = $tmp;
		}
		return $str;
	}
	/**
	 * Replaces double line-breaks with paragraph elements (from WP).
	 *
	 * @param string $txt The text which has to be formatted
	 * @param bool $br Convert remaining line-breaks into <br />
	 * @return string Text which has been converted into correct paragraph tags
	 */
	function parse_breaks($txt, $br = true)
	{
		$txt = $txt . "\n"; // just to make things a little easier, pad the end
		$txt = preg_replace('`<br />\s*<br />`', "\n\n", $txt);
		// Space things out a little
		$allblocks = '(?:table|thead|tfoot|caption|col|colgroup|tbody|tr|td|th|div|dl|dd|dt|ul|ol|li|pre|select|option|form|map|area|blockquote|address|math|style|input|p|h[1-6]|hr|fieldset|legend|section|article|aside|hgroup|header|footer|nav|details|menu|summary)';
		$txt = preg_replace('`(<' . $allblocks . '[^>]*>)`', "\n$1", $txt);
		$txt = preg_replace('`(</' . $allblocks . '>)`', "$1\n\n", $txt);
		$txt = str_replace(array("\r\n", "\r"), "\n", $txt); // cross-platform newlines
		if(strpos($txt, '<object') !== false){
			$txt = preg_replace('`\s*<param([^>]*)>\s*`', "<param$1>", $txt); // no pee inside object/embed
			$txt = preg_replace('`\s*</embed>\s*`', '</embed>', $txt);
		}
		$txt = preg_replace("`\n\n+`", "\n\n", $txt); // take care of duplicates
		// make paragraphs, including one at the end
		$txts = preg_split('`\n\s*\n`', $txt, -1, PREG_SPLIT_NO_EMPTY);
		$txt = '';
		foreach($txts as $tinkle){
			$txt .= '<p>' . trim($tinkle, "\n") . "</p>\n";
		}
		$txt = preg_replace('`<p>\s*</p>`', '', $txt); // under certain strange conditions it could create a P of entirely whitespace
		$txt = preg_replace('`<p>([^<]+)</(div|address|form)>`', "<p>$1</p></$2>", $txt);
		$txt = preg_replace('`<p>\s*(</?' . $allblocks . '[^>]*>)\s*</p>`', "$1", $txt); // don't pee all over a tag
		$txt = preg_replace("`<p>(<li.+?)</p>`", "$1", $txt); // problem with nested lists
		$txt = preg_replace('`<p><blockquote([^>]*)>`i', "<blockquote$1><p>", $txt);
		$txt = str_replace('</blockquote></p>', '</p></blockquote>', $txt);
		$txt = preg_replace('`<p>\s*(</?' . $allblocks . '[^>]*>)`', "$1", $txt);
		$txt = preg_replace('`(</?' . $allblocks . '[^>]*>)\s*</p>`', "$1", $txt);
		if($br) {
			$txt = preg_replace_callback('/<(script|style|noparse).*?<\/\\1>/s',
				create_function('$out','return str_replace("\n", "<WPPreserveNewline />", $out[0]);'),
				$txt);
			$txt = preg_replace('|(?<!<br />)\s*\n|', "<br />\n", $txt); // optionally make line breaks
			$txt = str_replace('<WPPreserveNewline />', "\n", $txt);
		}
		$txt = preg_replace('!(</?' . $allblocks . '[^>]*>)\s*<br />!', "$1", $txt);
		$txt = preg_replace('!<br />(\s*</?(?:p|li|div|dl|dd|dt|th|pre|td|ul|ol)[^>]*>)!', '$1', $txt);
		if(strpos($txt, '<pre') !== false)
		{
			$txt = preg_replace_callback('`<pre[^>]*>.*?</pre>`is',
				create_function('$out','return str_replace(array("<br />","<p>","</p>"),array("","\n",""),$out[0]);'),
				$txt );
		}
		$txt = preg_replace( "|\n</p>$|", '</p>', $txt );

		return $txt;
	}
	/*
	 * Return a HTML version of a given object markup. (parse callback)
	 *
	 * @param mixed $input A string to parse or the object description to render.
	 * @param string $p The parameters separated by commas
	 * @return string The HTML object.
	 */
	function parse_object($name, $p = null, $link = null)
	{
		// Alignment
		$push_left = $name[0] == ' ';
		$push_right = substr($name.$p, -1) == ' ';
		if($push_left && $push_right) $alignment = 'center';
		elseif($push_left) $alignment = 'right';
		elseif($push_right) $alignment = 'left';
		else $alignment = 'inline';

		$name = strtolower(trim($name));
		$p = $p ? explode(';', trim($p)) : array();

		// Size
		$size_pattern = '`^(\d+(?:px|%))$`i';
		if(!$w = $this->preg_array_shift($p, $size_pattern)) $w = false;
		if(!$h = $this->preg_array_shift($p, $size_pattern)) $h = false;
		if($w || $h)
		{
			$size = 'style="';
			if($w) $size .= 'width:' . $w . ';';
			if($h) $size = 'height:' . $h . ';';
			$size .= '"';
		} else $size = "";

		// Images
		if(false !== ($pos = strpos($link, '>'))) $link = substr($link, 0, $pos);
		$url_pattern = '`^(https?://)?([^/?#]*)?([^?#]*\.(?:jpe?g|gif|png))(?:\?([^#]*))?(?:#(.*))?$`i';
		if(preg_match($url_pattern, $name, $out))
		{
			if(empty($out[1])) $name = $this->root() . '/' . $name;

			if(!$crop = $this->preg_array_shift($p, '`^crop$`')) $crop = false;
			if(!$caption = $this->typed_array_shift($p, 'string')) $caption = false;
			return $this->html_image($name, $w, $h, $crop, $alignment, $caption, $link);
		}
		// Other objects
		switch($name)
		{
			// Table of contents
			case 'toc':
				if(!$dth = intval($this->preg_array_shift($p, '`^\d+$`'))) $dth = 4;
				if(!$req = intval($this->preg_array_shift($p, '`^\d+$`'))) $req = 3;
				$page = $this->preg_array_shift($p, '`^'.NAMECHAR.'+$`');

				$class = $alignment . substr('"'.$size, 0, -1);
				if(!empty($page)) return $this->html_toc($page, $dth, $req, $class);
				else return $this->html_toc(null, $dth, $req, $class);

			// Videos
			case 'youtube' :
			case 'vimeo' :
			case 'dailymotion' :
				$src = array(
					'youtube'		 => 'http://youtube.com/embed/',
					'vimeo'			 => 'http://player.vimeo.com/video/',
					'dailymotion' => 'http://dailymotion.com/embed/video/');
				if(empty($p[0])) return;
				else return '<div class="video"><iframe '
				. 'class="' . $alignment . ' ' . $name . '" '
				. 'frameborder="0" allowfullscreen ' . $size
				. 'src="' . $src[$name] . $p[0] . '"></iframe></div>';
				break;

			// Gallery
			case 'gallery' :
				// Columns and rows, or maximum count
				if(!$cols = intval($this->preg_array_shift($p, '`^\d+$`'))) $cols = 100;
				$rows = intval($this->preg_array_shift($p, '`^\d+$`'));
				// Name filter
				if(!$fltr = $this->preg_array_shift($p, '`\*`')) $fltr = '*';
				// Bool parameters
				$path = array_shift($p);
				$revr = $this->preg_array_shift($p, '`^reverse$`i') ? true : false;
				$rand = $this->preg_array_shift($p, '`^random$`i') ? true : false;
				$link = $this->preg_array_shift($p, '`^link$`i') ? true : false;
				return $this->html_gallery($path, $alignment, $w, $h, $cols, $rows, $fltr, $revr, $rand, $link, $p);
				break;


			// Twitter
			case 'twitter' :
				if(empty($p[0])) return '';

				if(!$rpp = $this->preg_array_shift($p, '`^[1-9][0-9]?$`')) $rpp = '4';
				$imgs = $this->preg_array_shift($p, '`^noavatars?$`i') ? 'false' : 'true';
				$tags = $this->preg_array_shift($p, '`^nohashtags?$`i') ? 'false' : 'true';
				$time = $this->preg_array_shift($p, '`^notimestamp$`i') ? 'false' : 'true';
				$profile = empty($p[1]);

				$out	= '<div class="' . $alignment . ' twitter" ' . $size . '>';
				$out .= '<script src="http://widgets.twimg.com/j/2/widget.js"></script>';
				$out .= '<script>new TWTR.Widget({version:3,rpp:' . $rpp . ',interval:6000,';
				$out .= $w ? 'width:"'.$w.'",' : 'width:"auto",';
				$out .= $h ? 'height:"'.$h.'",' : '';
				$out .= 'theme:{shell:{background:"inherit",color:"inherit"},';
				$out .= 'tweets:{background:"inherit",color:"inherit",links:"inherit"}},';
				if($profile) $out .= 'type:"profile",';
				else $out .= 'type:"list",title:"' . $p[0] . '",subject:"' . $p[1] . '",';

				$out .= 'features:{scrollbar:false,loop:false,live:true,hashtags:'.$tags.',';
				$out .= 'timestamp:'.$time.',avatars:'.$imgs.',behavior:"all"}}).render()';

				if($profile) $out .= '.setUser("' . $p[0] . '").start();</script>';
				else $out .= '.setList("' . $p[0] . '","' . $p[1] . '").start();</script>';
				return $out . '</div>';

			// Page
			case 'page' :
				if(count($p) == 1) array_unshift($p, PAGENAME);
				if($p[1] == 'name') return $p[0];
				// method
				$method = 'page_' . $p[1];
				if(method_exists($this, $method))
					return $this->$method($p[0]);
				// data get
				$info = $p[1] . ' of page "' . $p[0] . '"';
				return $this->parse($this->get('page', $p[0], $p[1]), false, true, $info);

			// Thiis method
			case 'thiis' :
				$func = 'html_' . array_shift($p);
				if(!$func || !method_exists($this, $func)) return;
				$p = $this->string_to_value($p);
				// 6 optional parameters please
				switch(count($p)) {
					case 1: return $this->$func($p[0]);
					case 2: return $this->$func($p[0], $p[1]);
					case 3: return $this->$func($p[0], $p[1], $p[2]);
					case 4: return $this->$func($p[0], $p[1], $p[2], $p[3]);
					case 5: return $this->$func($p[0], $p[1], $p[2], $p[3], $p[4]);
					case 6: return $this->$func($p[0], $p[1], $p[2], $p[3], $p[4], $p[5]);
				}
				return $this->$func();

			default :
				// Data
				if($this->get($name)) {
					if(count($p) == 1) return $this->get($name, $p[0], null, true);
					if(count($p) == 2) return $this->get($name, $p[0], $p[1], true);
					return;
				}
		}
		return;
	}
	/*
	 * Return a HTML version of a given footnote markup.
	 *
	 * @param string $note The markup content
	 * @return string The HTML.
	 */
	private function parse_footnote($note)
	{
		static $id; $id++;

		// get context in case of ((context>>note))
		$context = '';
		if(($pos = strrpos($note, '>>')) !== false) {
			$context = substr($note, 0, $pos);
			$note = substr($note, $pos+2);
		}
		$this->footnotes[] = $note;

		// render footnote anchor
		$fna = '<span id="fna-'.$id.'" class="note">';
		$fna.= $context;
		$fna.= $this->parse_link('#fn-' . $id, '<sup>' . $id . '</sup>');
		$fna.= '</span>';
		return $fna;
	}
	function parse_link($name = null, $alias = null)
	{
		if(empty($name)) return;

		// interwiki
		$wikis = array(
			'thiis' => THIISURL,
			'wikipedia' => 'http://wikipedia.org/wiki/',
			'google' => 'http://google.com/search?q=',
			'dokuwiki' => 'http://dokuwiki.org/');
		$wikis_alias = array(
			'is' => 'thiis',
			'wp' => 'wikipedia',
			'go' => 'google',
			'dw' => 'dokuwiki');
		if(isset($wikis[$name])) $wiki = $name;
		elseif(isset($wikis_alias[$name])) $wiki = $wikis_alias[$name];
		if(isset($wiki))
		{
			$class = 'external ' . $wiki;
			if(!$alias) $alias = $wiki;
			else {
				$alias = str_replace('_', ' ', $alias);
				$search = str_replace(' ', '_', $alias);
				if(preg_match('`^[a-z]{2}:`', $alias)) {
					$class .= ' ' . substr($alias, 0, 2);
					$alias = substr($alias, 3) . ' <span>(' . substr($alias, 0, 2) . ')</span>';
				}
			}
			$href = $wikis[$wiki] . @$search;
			$title = $wiki;
		}
		// special
		elseif($name[0] == '?') {
			if($name[0] == '?') $href = $name;
			$name = substr($name, 1);
			if(!$alias) $alias = $name;
			$title = '';
			$class = $name;
		}
		// file
		elseif(is_file($href = $this->root($name))) {
			if(!$alias) $alias = $name;
			$title = $name;
			$class = 'file';
		}
		// external
		elseif(!$name || preg_match('`^'.URLPATTERN.'$`', $name, $out))
		{
			$class = 'external';
			if(!$alias) $alias = $name;
			if(!empty($out[2])) $name = 'mailto:' . $out[0];
			elseif(empty($out[1])) $name = 'http://' . $name;
			$title = '';
			$href = $name;
		}
		// page
		elseif(preg_match(PAGEPATTERN, $name, $out))
		{
			if(!isset($out[2])) $out[2] = '';
			list(, $name, $anchor) = $out;

			if(!$name) $name = PAGENAME;
			if(empty($alias)) {
				if(!empty($anchor)) $alias = $anchor;
				elseif(!$this->setting('use_page_names')) $alias = $this->page_title($name);
				else $alias = $name;
			}
			// Class
			$class = 'page ' . $this->string_to_id($name);
			if($this->get('page', $name) == null) $class .= ' broken';
			elseif($name == PAGENAME) $class .= ' current';

			$anchor = $this->string_to_id($anchor);
			if($name == PAGENAME && $anchor) $href = '#' . $anchor;
			else $href = $this->page_url($name, $anchor);
			$title = '';
		}
		// unknown
		else $title = $class = '';
		// image link
		if(strpos($alias, '<figure') !== false) return $alias;
		// normal link
		if($href)  $href  = 'href="'.$href.'"';
		if($title) $title = 'title="'.$title.'"';
		if($class) $class = 'class="'.$class.'"';
		return "<a $href $title $class>$alias</a>";
	}
	/*
	 * Return a HTML version of a given list markup. (from parse callback)
	 *
	 * Markup guide : (indented by at least two spaces or a tabulation)
	 *     * unordered item
	 *     - ordored item
	 *     ** term
	 *     -- definition
	 *     ** term ** definition
	 *     -- term -- def
	 *
	 * @param string $code The list markup.
	 * @return string The HTML list.
	 */
	function parse_list($code)
	{
		preg_match_all('`((?:  |\t)+)(--|\*\*|[-*])(.*)`', $code[0], $out, PREG_SET_ORDER);
		if(!$out) return '';
		$html = '';
		$last_lvl = 0;
		$last_type = array();
		foreach($out as $o)
		{
			list(, $spaces, $opening, $content) = $o;
			$lvl = strlen($spaces);
			if($lvl != $last_lvl)
			{
				if($opening == '*') $type = 'ul';
				elseif($opening== '-') $type = 'ol';
				else $type = 'dl';

				if($lvl > $last_lvl)
				{
					$html .= "<$type>";
					$last_type[] = $type;
				}
				while($lvl < $last_lvl)
				{
					$html .= '</' . array_pop($last_type) . '>';
					$last_lvl -= 2;
				}
			}
			// definition lists items
			if($type == 'dl') {
				// term/definition
				$pos = strpos($content, $opening);
				if($pos !== false) {
					$html .= '<dt>' . substr($content, 0, $pos) . '</dt>';
					$html .= '<dd>' . substr($content, $pos + 2) . '</dd>';
				}
				// term only
				elseif($opening == '**') $html .= '<dt>' . $content . '</dt>';
				// definition only
				else $html .= '<dd>' . $content . '</dd>';
			}
			// classical lists items
			else $html .= '<li>' . $content . '</li>';
			$last_lvl = $lvl;
		}
		return $html . "</$type>";
	}
	/*
	 * Return a HTML version of a given code markup. (from parse callback)
	 *
	 * Markup guide :
	 *     \n<code foo>\n\t bar \n\t baz \n</code> block code (<pre foo><code>\t bar \n\t baz</code></pre>)
	 *     <code foo>bar</code> inline code (<code>bar</code>)
	 *
	 * @param array $markup The code markup.
	 * @return string The HTML code.
	 */
	function parse_code($markup)
	{
		global $p_items;
		list(, $spaces, $class, $content, $end) = $markup;
		$content = htmlentities($content);

		if($spaces == "\n") {
			$begin = "<pre".$class."><code>";
			$content = trim($content, "\r\n");
			$end .= "</pre>";
		}
		else $begin = "<code".$class.">";

		$p_items[] = $spaces.$begin.$content.$end;
		return "<THIISpreserve".(count($p_items)-1)."/>";
	}

	/* URL REWRITING */

	function edit_htaccess()
	{
		$htaccess_path = './.htaccess';
		$use_fancy_url = $this->setting('use_fancy_url');

		$thiis_start	= "\n\n#\n# Thiis\n#\n";
		$thiis_start .= "RewriteEngine on\n";
		$thiis_start .= "Options -Indexes -MultiViews +FollowSymLinks";
		$thiis_end = "\n\n#\n# End thiis\n#";

		$file_rule	= "\n\n# Thiis file " . FILENAME;
		if(FILENAMEBASE == 'index') {
			$file_rule .= "\n" . 'RewriteCond %{REQUEST_FILENAME} !-f';
			$file_rule .= "\n" . 'RewriteCond %{REQUEST_FILENAME} !-d';
			$file_rule .= "\n" . 'RewriteRule ^(' . NAMECHAR . '*)$	';
			$file_rule .= FILEPATH . '/index.php?page=$1	[QSA,L]';
		}
		else{
			$file_rule .= "\n" . 'RewriteRule ^' . FILENAMEBASE . '(?:/(' . NAMECHAR . '*))?$	';
			$file_rule .= FILEPATH . FILENAME . '?page=$1	[QSA,L]';
		}

		// There is no .htaccess file and we want : create the file.
		if(!file_exists($htaccess_path) && $use_fancy_url)
		{
			$content = $thiis_start . $file_rule . $thiis_end;
		}
		elseif(file_exists($htaccess_path)
		&& ($content = file_get_contents($htaccess_path)) !== false)
		{
			$is_rule = preg_match('`\Q' . $file_rule . '\E`', $content);

			// Add rules
			if($use_fancy_url)
			{
				if(!preg_match('`\Q' . $thiis_start . '\E`', $content)) {
					$content .= $thiis_start . $thiis_end;
				}
				if(!$is_rule) {
					// Escape backreferences
					$file_rule = addcslashes($file_rule, '\\$');
					// Always place index rule at the end
					if(FILENAMEBASE == 'index') {
						$content = preg_replace('`\Q' . $thiis_end . '\E`', $file_rule . $thiis_end, $content);
					}
					else $content = preg_replace('`\Q' . $thiis_start . '\E`', $thiis_start . $file_rule, $content);
				}
			}
			// Clean
			else {
				// Delete file rule
				if($is_rule) {
					$content = preg_replace('`\Q' . $file_rule . '\E`', '', $content);
				}
				// Delete Thiis part if there is no file rules
				if(substr_count($content, '# Thiis file') == 0) {
					$content = preg_replace('`\Q' . $thiis_start . '\E`', '', $content);
					$content = preg_replace('`\Q' . $thiis_end . '\E`', '', $content);
				}
				// Delete the file if there is nothing else
				if(trim($content) == '') {
					unlink($htaccess_path);
					unset($content);
				}
			}
		}
		// Write file
		if(isset($content))
		{
			$file = fopen($htaccess_path, 'w+');
			fwrite($file, $content);
			fclose($file);
		}
	}

	/* VERSIONING */

	/*
	 * Return the version of another thiis.
	 *
	 * @param string $param $url Optionnal. If not set, use the last official version.
	 * @return int|bool The found version or false
	 */
	function version($url = null)
	{
		if($url == null && !($url = $this->setting('update_url'))) $url = THIISURL;
		if($url == SITEURL) return $this->version;
		$h = $this->get_headers($url, 1);
		if(!empty($h['thiis-version'])) return intval($h['thiis-version']);
		return false;
	}
	/*
	 * Return the HTML headers of a given url. A php4 working version of get_headers().
	 *
	 * @param string $param $url
	 * @param int $param $format
	 * @return array
	 */
	function get_headers($url, $format=0)
	{
		// format url
		$url = parse_url($url);
		if(!isset($url["scheme"])){
			$url["host"] = $url["path"];
			$url["path"] = '';
		}
		$s_Host = $url['host'];
		if(empty($url['path'])) $url['path'] = '/?';
		$s_URI = $url['path'];
		if(!empty($url['query'])) $s_URI .= '?' . $url['query'];
		$s_Port = !empty($url['port']) ? $url['port'] : 80;
		// connexion
		if($fp = @fsockopen($s_Host, $s_Port, $errno, $errstr, 2))
		{
			$header = '';
			$request	= "GET $s_URI HTTP/1.0\r\n";
			$request .= "Host: $s_Host\r\n";
			$request .= "Connection: Close\r\n\r\n";
			// make/get request
			fputs($fp, $request);
			while(!feof($fp)) {
				$header .= fgets($fp, 4096);
				if(strpos($header,"\r\n\r\n")) break;
			}
			fclose($fp);
			// format output
			$header = preg_replace("/\r\n\r\n.*\$/",'',$header);
			$header = explode("\r\n", $header);
			if($format) {
				foreach($header as $i)
					if(preg_match('/^([a-zA-Z -]+): +(.*)$/', $i, $o))
						$v[$o[1]] = $o[2];
				return $v;
			}
			return $header;
		}
		return false;
	}
	/*
	 * Update thiis core from another thiis.
	 *
	 * @param string $param $dist_url Optionnal. If not set, use the setting "update_url" or the official version.
	 */
	function update($dist_url = null)
	{
		// check rights
		if($this->visitor->rank < ADMIN) {
			return $this->admin_msg('right', 'error', '', SITEURL);
		}
		// define distant url
		if($dist_url == null && !($dist_url = $this->setting('update_url')))
			$dist_url = THIISURL;

		// check distant headers
		$dist_headers = get_headers($dist_url, 1);
		if(!isset($dist_headers['thiis-version'])) return false;

		// download
		$dist_src = file_get_contents($dist_url . '?download');

		// rewrite
		$this->source_rewrite($dist_src);
		$this->source_rewrite_var($this->data);
		$this->redirect(ADMINURL, 'updated');
	}

	/* SESSIONS */

	/*
	 * Try to login with name/pass and return bool result.
	 *
	 * @param string $param $name the login name
	 * @param string $param $pass the login password
	 */
	function login($name, $pass, $fp)
	{
		if(($user = $this->get('user', $name))
		&& $user['password'] == $pass) {
			// session_regenerate_id(true);
			$_SESSION[$fp]['name'] = $name;
			$_SESSION[$fp]['password'] = $pass;
			$this->visitor = (object)$user;
			$this->visitor->name = $name;
			return true;
		}
		$this->visitor->rank = VISITOR;
		return false;
	}
	/*
	 * Logout.
	 */
	function logout($fp)
	{
		unset($_SESSION[$fp]);
		$this->redirect(SITEURL);
	}
	/*
	 * Return session fingerprint hash.
	 *
	 * @return string
	 */
	function fingerprint()
	{
		return 'thiis' . sha1('thiis' .
		$_SERVER['HTTP_USER_AGENT'] .
		$_SERVER['REMOTE_ADDR'] .
		$_SERVER['SCRIPT_NAME'] .
		session_id());
	}
	/*
	 * Check logout, login or login form display.
	 */
	function check_login()
	{
		$fp = $this->fingerprint();
		// logout url
		if(isset($this->get['logout'])) $this->logout($fp);
		// login form
		if(isset($this->post['login'])) {
			$pass = sha1($this->post['password']);
			// create first account
			if(!$this->get('user')) {
				$this->add('user', $this->post['login'], array('password' => $pass, 'rank' => 2));
				$this->source_rewrite_var();
			}
			// login
			return $this->login($this->post['login'], $pass, $fp);
		}
		// already logged
		if(isset($_SESSION[$fp])) {
			$name = $_SESSION[$fp]['name'];
			$pass = $_SESSION[$fp]['password'];
			if($this->login($name, $pass, $fp)) return true;
			unset($_SESSION[$fp]);
			return false;
		}
	}

	/* ACTIONS */

	/*
	 * Check for actions, manage global errors and execute it.
	 */
	function actions()
	{
		$action = $this->post['action'];
		$field = isset($this->post['field']);
		$newname = trim(strtolower(str_replace(' ','_', $this->post['newname'])));
		$name = !empty($this->post['name']) ? $this->post['name'] : $newname;
		$data_type = $this->post['data_type'];
		$old_data = $this->get($data_type);
		$data = isset($this->post['data']) ? $this->post['data'] : null;

		// Bases actions and true = undo message, false = confirm message, null = no message
		$actions = array(
			'add'=>true, 'edit'=>true, 'preview'=>false, 'del'=>true,
			'undo'=>false, 'arrange'=>null, 'filter'=>null);

		// Retrieve the good action name from translated one
		foreach($actions as $a => $u) {
			if($this->word($a) == $action) {
				$action = $a;
				$action_message = $u;
				break;
			}
		}
		//filter is a silent edit
		if($action == 'filter') $action = 'edit';

		// right error
		if(!$this->is_granted($action)
		|| !$this->is_granted($data_type)) {
			return $this->admin_msg('right', 'error');
		}
		// Naming
		if(empty($newname)) {
			// name from file
			if($data_type == 'file') {
				if(!empty($_FILES['data']['tmp_name']['file']))
					$newname = $name = trim(strtolower(str_replace(' ','_', $_FILES['data']['name']['file'])));
				else return;
			}
			// automatic name
			else $newname = $name = $this->vacant_name($data_type);
		}
		else {
			// name validity
			if(!preg_match('`^'.NAMECHAR.'+(:[a-z]{2})?$`', $newname))
				return $this->admin_msg('name_format', 'error');
			// name reserved
			if($this->is_reserved_name($newname))
				return $this->admin_msg('name_reserved', 'error');
			// name exists
			if($action == 'add' && $this->get($data_type, $newname))
				return $this->admin_msg('name_exist', 'error');
		}
		// Call the action method
		$action_method	= 'action_' . ($field ? 'field_' : '') . $action;
		if(method_exists('Thiis', $action_method))
		{
			if(is_array($data))
			{
				// Data may be a single value
				if(count($data) == 1) $data = reset($data);

				// Default date
				elseif(isset($data['date']) && empty($date))
					$data['date'] = date('Y-m-d');
			}
			// files : use full path and manage directory actions
			if($data_type == 'file' && !$field)
			{
				$path = $this->root($this->get['path']);
				if(isset($this->get['add_dir'])) return mkdir($path . '/' . $newname);
				elseif(isset($this->get['edit_dir'])) {
					if($action == 'edit') return $this->file_rename($path, dirname($path) . '/' . $newname);
					if($action == 'del') return $this->file_del($path);
				}
				$name = $path . '/' . $name;
				$newname = $path . '/' . $newname;
			}
			// manage cache
			elseif($data_type == 'page' && !empty($data['cache']) && $action != 'undo') {
				$content = $this->parse($data['content'], true);
				$data['cache'] = base64_encode(gzdeflate($content));
			}
			// do action on data
			if($result = $this->$action_method($data_type, $name, $data))
			{
				// additional actions on files / upload
				if(!empty($_FILES['data']['tmp_name']['file'])) {
					if($action == 'edit') $this->file_del($name);
					$this->file_add($newname);
				}
				// rename
				if($action == 'edit' && $newname != $name) {
					if($data_type == 'file') $this->file_rename($name, $newname);
					$this->rename($data_type, $name, $newname);
					$this->source_rewrite_var();
				}
				// Display an info message
				if($data_type == 'file' || $action_message === false) {
					$button = $action == 'preview' ? 'undo' : 'ok';
					$this->admin_msg($action, 'info');
				}
				// Display a undo message
				elseif($action_message === true) {
					$this->admin_msg_undo($action, $data_type, $old_data);
				}
				// Action modifying .htaccess
				if($data_type == 'setting' && $newname == 'use_fancy_url') {
					$this->edit_htaccess();
				}
			}
			elseif($result === false) $this->admin_msg($action, 'error');
		}
	}
	/*
	 * Add a new item into a data.
	 *
	 * @param string $type The data type.
	 * @param string $name The new item name.
	 * @param array $data The item data.
	 * @see actions()
	 */
	function action_add($type, $name, $data)
	{
		// Generate or encrypt password if needed
		if(isset($data['password'])) {
			if(!strlen(trim($data['password']))) {
				$data['password'] = sha1($this->rand_string(7));
			} else $data['password'] = sha1(trim($data['password']));
		}
		if(!$type) $this->add('data', $name, array());
		return $this->add($type, $name, $data) &&  $this->source_rewrite_var();
	}
	/*
	 * Edit a data item.
	 *
	 * @param string $type The data type.
	 * @param string $name The item name.
	 * @param array $data The new item content.
	 * @see actions()
	 */
	function action_edit($type, $name, $data)
	{
		// Do not change password if empty
		if(is_array($data) && isset($data['password'])) {
			if(!strlen(trim($data['password']))) {
				$data['password'] = $this->get($type, $name, 'password');
			} else $data['password'] = sha1(trim($data['password']));
		}
		return ($this->edit($type, $name, $data) || $this->add($type, $name, $data))
		&& $this->source_rewrite_var();
	}
	/*
	 * Delete a data item.
	 *
	 * @param string $type The data type.
	 * @param string $name The item name.
	 * @param array $data The item content.
	 * @see actions()
	 */
	function action_del($type, $name, $data)
	{
		// nothing to do if the item do not exist
		if(!$this->get($type, $name)) return true;

		// prevent deleting last data
		if(!count(array_diff($this->find($type), array($name)))) {
			return $this->admin_msg('last_data', 'error');
		}
		// prevent deleting last admin
		if($type == 'user'
		&& $this->get('user', $name, 'rank') == ADMIN
		&& count($this->find('user', 'rank', ADMIN)) < 2) {
			return $this->admin_msg('last_admin', 'error');
		}
		// delete
		$success = $this->del($type, $name) && $this->source_rewrite_var();
		if($type == 'file') $success &= $this->file_del($name);

		// Logout at self-delete
		if($type == 'user' && $name == $this->visitor->name) $this->logout();

		return $success;
	}
	/*
	 * Preview a data item. Apply changes without rewriting.
	 *
	 * @param string $type The data type.
	 * @param string $name The item name.
	 * @param array $data The new item content.
	 * @see actions()
	 */
	function action_preview($type, $name, $data)
	{
		return $this->edit($type, $name, $data);
	}
	/*
	 * Replace a data by the given <i>data_str</i>
	 *
	 * @param string $type The data type
	 * @param string $name The item name
	 * @param string $data The item data (serialized and base64 encoded)
	 * @see actions()
	 */
	function action_undo($type, $name, $data)
	{
		$data = base64_decode($data);
		$data = unserialize($data);
		$this->source_rewrite_var($type, $data);
		$this->redirect(REQURL, 'undo');
	}
	/*
	 * Place a data item after another one, and set parent.
	 *
	 * @param string $type The data type.
	 * @see actions()
	 */
	function action_arrange($type) {
		$new_parent = $this->post['parent'];
		$source_name = $this->post['source'];
		$target_name = $this->post['target'];

		$target_id = array_search($target_name, $this->find($type));
		$source = $this->get($type, $source_name);
		$source['parent'] = $new_parent;

		return 	$this->del($type, $source_name)
		&&		$this->add($type, $source_name, $source, $target_id)
		&&		$this->source_rewrite_var();
	}
	/*
	 * Add a new data field.
	 *
	 * @param string $type The data type.
	 * @param string $field The new field name.
	 * @param array $default The default field value.
	 * @see actions()
	 */
	function action_field_add($type, $field, $default)
	{
		if($data = $this->get($type)){
			foreach($data as $item => $val)
			{
				if(!is_array($val)) $val = array('value'=>$val);
				$val[$field] = $default;
				$this->edit($type, $item, $val);
			}
			return $this->source_rewrite_var($type);
		}
		return false;
	}
	/*
	 * Delete a data field.
	 *
	 * @param string $type The data type.
	 * @param string $field The field name.
	 * @see actions()
	 */
	function action_field_del($type, $field)
	{
		if(in_array($field, $this->get_fields($type)))
		{
			$data = $this->get($type);
			foreach($data as $item => $val)
			{
				unset($val[$field]);
				if(count($val) == 1){
					$val = reset($val);
				}
				$this->edit($type, $item, $val);
			}
			return $this->source_rewrite_var($type);
		}
		return false;
	}
	/*
	 * Swap a data field with the previous data field.
	 *
	 * @param string $type The data type.
	 * @param string $name The field name.
	 * @see actions()
	 */
	function action_field_up($type, $name, $data)
	{
		$fields = $this->get_fields($type);
		return $this->swap_fields($type, $name, $fields[array_search($name, $fields) - 1]);
	}
	/*
	 * Swap a data field with the next data field.
	 *
	 * @param string $type The data type.
	 * @param string $name The field name.
	 * @see actions()
	 */
	function action_field_down($type, $name, $data)
	{
		$fields = $this->get_fields($type);
		return $this->swap_fields($type, $name, $fields[array_search($name, $fields) + 1]);
	}


	/* PAGE */


	/*
	 * Return a page content, or 404.
	 *
	 * @param string $name the page name
	 */
	function page_content($name = null)
	{
		if(empty($name)) $name = PAGENAME;
		$page = $this->get('page', $name, null, true);

		if($page) {
			// return cache
			if(!empty($page['cache'])) return $this->string_to_value(gzinflate(base64_decode($page['cache'])));
			// parse content
			return $this->parse($page['content'], true, true, 'content of page "' . $name . '"');
		}
		// 404
		$p404 = $this->get('page', '404', 'content', true);
		header('HTTP/1.0 404 Not Found');
		if($p404) return $p404;
		return '<h1>404</h1>';
	}
	/*
	 * Return a page title.
	 *
	 * @param string $name Optionnal. The page name, by default the current page.
	 * @return string The "title" field if exists, or the first header, or the page name.
	 */
	function page_title($name = null)
	{
		if(empty($name)) $name = PAGENAME;
		// title field
		if($title = $this->get('page', $name, 'title')) return $title;
		$content = $this->get('page', $name, 'content');
		if(!$content) return $name;
		// main header
		$content = $this->parse_headers($content);
		if(false !== ($a = strpos($content, '<h1>'))
		&& false !== ($b = strpos($content, '</h1>', $a+1)))
			return substr($content, $a+4, $b - ($a+4));
		// name
		return $name;
	}
	/*
	 * Return the link to a specific page.
	 *
	 * @param string $name Optionnal. If not set use the current page.
	 * @param string $anchor Optionnal. The url anchor. (?page=name#anchor)
	 */
	function page_url($name, $anchor = '')
	{
		if($anchor) $anchor = '#' . $anchor;
		// Define href with URL rewriting or not
		if($this->setting('use_fancy_url'))
		{
			$href = SERVERURL.FILEPATH.'/';
			if(FILENAMEBASE != 'index') $href .= FILENAMEBASE . '/';
			if($name != 'index') $href .= $name;
			$href .= $anchor;
		}
		else $href = SITEURL.'?page='.$name.$anchor;

		return $href;
	}
	/*
	 * Return the footnotes of a page.
	 */
	function page_footnotes($page = null)
	{
		if(!$page) $page = PAGENAME;

		// if not already processed
		// quick parse any ((note)) in page content
		if($page != PAGENAME || empty($this->footnotes)) {
			$content = $this->get('page', $page, 'content');
			if(!$content) return false;
			preg_match_all('`\(\((.*)\)\)`U', $content, $out);
			foreach($out[1] as $note) $this->parse_footnote($note);
		}

		// render
		$fn = '';
		foreach($this->footnotes as $id => $note) {
			$id++;
			$fn.= '<div id="fn-'.$id.'" class="footnote">';
			$fn.= '<sup>'.$this->parse_link('#fna-'.$id, $id.' ').'</sup> ';
			$fn.= $this->parse($note);
			$fn.= '</div>';
		}
		return $fn;
	}

	/* HTML-XML */

	/*
	 * Return a nested list of pages links.
	 * @param string $parent list any childs of this parent. empty by default. (optionnal)
	 * @param string $sort_field sort list along this field (optionnal)
	 * @param int $max_lvl nesting limit level. null by default. (optionnal)
	 * @param int $pages use this nested pages names list. (optionnal)
	 * @return string
	 */
	public function html_pages_list(
		$parent = '', $deploy = true,
		$sort_field = null, $sort_method = null,
		$max_level = null, $pages = false)
	{
		if(!$pages) $pages = $this->find_nested('page', $parent, $sort_method, $sort_field, $max_level);
		$html = '<ul>';
		foreach($pages as $name => $childs)
		{
			if($this->get('page', $name, 'hide')) continue;
			$parent_lvl = $this->level('page', PAGENAME, $name);
			$is_parent = $parent_lvl !== false && $parent_lvl >= 0;

			if($is_parent) $html .= '<li class="parent">';
			else $html .= '<li>';

			$html .= $this->parse_link($name);
			if($childs && ($is_parent || $deploy)) {
				$html .= $this->html_pages_list($name, $sort_field, $sort_method, $max_level, $childs);
			}

			$html .= '</li>';
		}
		$html .= '</ul>';

		return $html;
	}
	/*
	 * Return a title/navigation breadcrumb according to the page hierarchy.
	 * @return array Plain text (for title meta), html (with links), root link (category)
	 */
	function html_breadcrumb($hierarchy = null, $sep = ', ', $end = ' : ') {
		if(!is_array($hierarchy))
			$hierarchy = $this->hierarchy('page', PAGENAME);
		$nbr = count($hierarchy);

		$html = $plain = '';
		foreach($hierarchy as $id => $p) {
			// separators
			if($nbr > 1) {
				if($id < $nbr - 1) {
					if($id) {
						$plain.= $sep;
						$html .= $sep;
					}
				} else {
					$plain.= $end;
					$html .= $end;
				}
			}
			// titles
			$ttl = $this->page_title($p);
			$plain.= $ttl;
			if($id < $nbr-1)
				$html .= $this->parse_link($p);
			else
				$html .= '<strong><a id="title" href="#top">' . $ttl . '</a></strong>';
		}
		return array('plain' => $plain, 'html' => $html);
	}
	/*
	 * Return an HTML image.
	 *
	 * @param string $url The image url.
	 * @param int $width Optionnal. If set, force the image display width.
	 * @param int $height Optionnal. If set, force the image display height.
	 * @param string $alignment Optionnal. An additional image alignment (inline|left|right|center).
	 * @param string $caption Optionnal. If set, return an image box.
	 */
	function html_image(
		$url,
		$width = false, $height = false, $crop = false,
		$alignment = '', $caption = '',
		$linkto = false, $style = ''
	){
		if($width || $height) {
			$url = '?image=' . $url;
			if($width) $url .= '&w=' . $width;
			if($height) $url .= '&h=' . $height;
			if($crop) $url .= '&crop';
		}

		switch($alignment) {
			case 'inline' : $float = 'display:inline-block;'; break;
			case 'center' :
				$float = 'display:block; text-align: center; margin-left:auto; margin-right:auto;';
				break;
			case 'right' : case 'left' : $float = 'float:'. $alignment . ';'; break;
			default : $float = '';
		}
		if(!empty($caption)) $float = '';

		if($linkto) {
			$image = $this->parse_link($linkto, '<img src="'.$url.'" alt="'.basename($url).'" />');
			if($float) $image = str_replace('><img', ' style="'.$float.' '.$style.'"><img', $image);
		}
		else $image = '<img src="'.$url.'" alt="'.basename($url).'" class="'.$alignment.'" style="'.$float.' '.$style.'" />';

		if(!empty($caption))
			return "<figure class=\"$alignment\" style=\"$float\">
						$image
						<figcaption>$caption</figcaption>
					</figure>";
		 return $image;
	}
	/*
	 * Return an HTML gallery of images.
	 *
	 * @param string $path Optionnal. The directory path containing images, relative to root.
	 * @param int $algn Optionnal. Additional images classes for alignment.
	 * @param int $wdth Optionnal. If set, force the images width.
	 * @param int $hght Optionnal. If set, force the images height.
	 * @param int $cols Optionnal. If set, define the number of images (or columns).
	 * @param int $rows Optionnal. If set, define the number of rows of the table gallery.
	 * @param string $filter Optionnal. If set, filter the images by name. Stars are wildcards.
	 * @param bool $name Optionnal. If set to true, display images boxes with their names.
	 * @param bool $revr Optionnal. If set to true, reverse images order.
	 * @param bool $rand Optionnal. If set to true, randomize images order.
	 */
	function html_gallery(
		$path = '', $algn = '',
		$wdth = false, $hght = false,
		$cols = false, $rows = false,
		$fltr = false,
		$revr = false, $rand = false,
		$link = false, $info = false
	){
		// Define maximum number
		$max = $rows ? $cols * $rows : $cols;
		// Replace stars by preg wildcards.
		$fltr = strtr(preg_quote($fltr), array('\*\*' => '\*', '\*' => '.*'));
		if($files = $this->file_get($path, 'image'))
		{
			// Sort
			if($rand) $files = $this->md_shuffle($files);
			else if($revr) $files = array_reverse($files);

			$out = '<div class="gallery">';
			if($rows) $out .= '<table><tr>';
			$count = 0;
			foreach($files as $name => $img)
			{
				$basename = basename($name);
				if(!$fltr || preg_match('`^' . $fltr . '$`i', $basename))
				{
					if($max && $count++ >= $max) break;

					$caption = '';
					if(!empty($info)) {
						foreach($info as $i) {
							if($i == 'name')
								$img[$i] = substr($basename, 0, strrpos($basename, '.'));
							if(isset($img[$i]) && $i != 'type' && $i != 'preview')
								$caption .= '<div class="' . $i . '">' . $this->parse($img[$i]) . '</div>';
						}
					}

					$url = $this->absroot($name);
					$linkto = $link ? $url : false;
					$image = $this->html_image($url, $wdth, $hght, $algn, $caption, $linkto);

					if($rows) {
						$out .= '<td>' . $image . '</td>';
						if($count%$cols == 0) $out .= '</tr><tr>';
					}
					else $out .= $image;
				}
			}
			if($rows) return $out . '</tr></table></div>';
			else return $out . '</div>';
		}
	}
	/*
	 * Return an HTML table of content based on a content analysis.
	 *
	 * @param string $name Optionnal. If set analyse this page instead of current page.
	 * @param int $depth Optionnal. The maximum headers level to display, by default 4.
	 * @param int $required Optionnal. The minimum number of elements required to return the toc. By default 3.
	 * @param string $class Optionnal. Additionnal class, like alignment.
	 * @param string $content Optionnal. If set, analyse this instead of a page content.
	 * @return string The HTML table of content.
	 */
	function html_toc(
		$name = null,
		$depth = 4,
		$required = 3,
		$class = '',
		$content = null
	){
		if(empty($name)) $name = PAGENAME;
		if($depth < 1 || $depth > 6) return '';
		if(!$content) $content = $this->get('page', $name, 'content');

		// Strip scripts and code
		$content = preg_replace('`<\s*noparse[^>]*>.*?</\s*noparse[^>]*>`si', '', $content);
		$content = preg_replace('`<\s*script[^>]*>.*?</\s*script[^>]*>`si', '', $content);
		$content = preg_replace('`<\s*code[^>]*>.*?</\s*code[^>]*>`si', '', $content);

		$markup = '(?<!=)[=]{'.(8-$depth).',7}(?!=)';
		$pattern = '`(?:<h([1-'.$depth.'])[^>]*>|(' . $markup . '))';
		$pattern .= '(.*?)';
		$pattern .= '(?:</h[1-'.$depth.'][^>]*>|' . $markup . ')`is';

		preg_match_all($pattern, $content, $out, PREG_SET_ORDER);

		foreach($out as $h)
		{
			if(!empty($h[2])) $lvl = 8 - strlen($h[2]);
			else $lvl = $h[1];
			$headers[$h[3]] = $lvl;
		}
		if(count($headers) < $required) return '';

		$html = '<div class="toc ' . $class . '"><header>' . $this->word('toc') . '</header>';

		if(empty($headers)) $html .= '<ul><li>' . $this->word('toc_empty');

		$prev_lvl = 0;
		foreach($headers as $title => $lvl)
		{
			if($prev_lvl > $lvl) $html .= '</li></ul></li><li>';
			elseif($prev_lvl == $lvl) $html .= '</li><li>';
			elseif($prev_lvl < $lvl) $html .= '<ul><li>';
			$html .= $this->parse_link($name.'#'.$title, $title);
			$prev_lvl = $lvl;
		}
		return $html . '</li></ul></div>';
	}
	/*
	 * Return a xml RSS feed of page.
	 * @return string
	 */
	function xml_rss()
	{
		// Header
		header("Content-Type: application/rss+xml");
		$xml = '<?xml version="1.0" encoding="utf-8"?>';
		$xml .= "\n".'<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">';
		$xml .= "\n".'<channel>';
		$xml .= "\n".'<atom:link href="'.SITEURL.'?rss" rel="self" type="application/rss+xml" />';

		$last_edit = $this->find('page', null, null, 1, SORT_DESC, 'date', true);
		$last_edit = $this->get('page', $last_edit, 'date');

		// Channel description
		$xml .= "\n".'<title>' . $this->setting('site_title') . '</title>';
		$xml .= "\n".'<link>' . SITEURL . '</link>';
		$xml .= "\n".'<description>' . $this->setting('site_description') . '</description>';
		$xml .= "\n".'<lastBuildDate>' . date('r', intval($last_edit)) . '</lastBuildDate>';
		$xml .= "\n".'<language>' . $this->language() . '</language>';

		// Items
		foreach($this->get('page') as $name => $page) {
			$url = $this->page_url($name);

			$content = $this->parse($page['content'], false);
			$content = $this->markup_del($content, false);
			$content = $this->excerpt($content, 300, '...');
			$content = html_entity_decode(strip_tags($content), ENT_QUOTES, 'UTF-8');

			$xml .= "\n".'<item>';
			$xml .= "\n\t".'<title>' . html_entity_decode($this->page_title($name), ENT_QUOTES, 'UTF-8'). '</title>';
			$xml .= "\n\t".'<link>' . $url . '</link>';
			$xml .= "\n\t".'<guid>' . $url . '</guid>';
			$xml .= "\n\t".'<pubDate>' . $page['date'] . '</pubDate>';
			$xml .= "\n\t".'<description>' . $content . '</description>';
			$xml .= "\n".'</item>';
		}
		$xml .= '</channel></rss>';
		return $xml;
	}

	/* ADMINISTRATION */

	/*
	 * Return styles of given html with every css encapsulated in given encapsulation id.
	 * @return string
	 */
	function admin_css($html, $id)
	{
		$output = '';
		$css_pattern = '`(?<=<!--|}|\);)\s*([^@{}]+{)`';
		$css_func = '
			$out = "";
			foreach(explode(",", $in[1]) as $i => $v)
				$out .= ($i?", ":"\n") . "#'.$id.' " . $v;
			return $out;';
		preg_match_all('`(<style[^>]*>\s*)(.*)(\s*</style>)`sU', $html, $styles, PREG_SET_ORDER);
		foreach($styles as $style) {
			list(,$open, $content, $close) = $style;
			$content = preg_replace_callback($css_pattern, create_function('$in', $css_func), $content);
			$content = preg_replace('`(#'.$id.'[^{]*)(body|html)`sU', '\\1#\\2' ,$content);
			$output .= $open . $content . $close;
		}
		return $output;
	}
	/*
	 * Return the administration menu
	 */
	function admin_menu()
	{
		$data = $this->find('data');
		$data[] = 'data';
		$html = '<ul>';
		foreach($data as $type) {
			if($this->is_granted($type)) {
				$html .= '<li class="'.$type;
				if($this->admin_current() == $type) $html .= ' selected">';
				else $html .= '">';
				$html .= $this->admin_link($type);
				$html .= '</li>';
			}
		}
		$html .= '</ul>';
		return $html;
	}
	/*
	 * Return the name of the admin page to display,
	 * according to rights and existing ones.
	 */
	function admin_current() {
		$type = $this->get['admin'];

		if($type == 'data' && $this->visitor->rank >= ADMIN)
			return 'data';

		$datas = $this->find('data');
		if(!in_array($type, $datas)) $type = reset($datas);
		if(!$this->is_granted($type)) return false;
		return $type;
	}
	/*
	 * Return an html link to a specific administration page.
	 *
	 * @param string $name Optionnal. Admin page name. If not set, link to admin index page.
	 * @param string $params Optionnal. Additionnal parameters. (example : add)
	 * @param string $text Optionnal. If set use this as link text.
	 */
	function admin_link($name = '', $params = null, $text = null, $class = '')
	{
		if($text === null) {
			if(!$this->setting('use_page_names')) {
				if(empty($name)) $text = $this->word('administration');
				else $text = $this->word($name);
			}
			else $text = ucfirst($name);
		}

		$href = ADMINURL;
		if(!empty($name)) $href .= '=' . $name;
		if(!isset($params['path']) && !empty($this->get['path'])) $params['path'] = $this->get['path'];
		if(!isset($params['page'])) $params['page'] = PAGENAME;
		foreach($params as $k => $v) {
			$href .= '&amp;';
			if(is_string($k)) $href .= $k . '=' . $v;
			else $href .= $v;
		}
		return '<a href="' . $href . '" class="' . $class . '">' . $text . '</a>';
	}
	/*
	 * Return the management page.
	 */
	function admin_management()
	{
		// TODO admin management

		$type = 'data';
		$data = $this->find($type);
		$name = !empty($this->get['edit']) ? $this->get['edit'] : '';

		// Update
		$other = $this->version();
		if($other > $this->version) {
			$this->admin_msg(
				'update', 'info',
				'<a href="'.SITEURL.'?update" class="btn">' . $this->word('update_to') . ' ' . date('y.m.d', $other) . '</a>',
				false);
		}

		// Add
		$html = $this->admin_form_add('');
		$html .= $this->admin_list('data');

		return $html;
	}
	/*
	 * Return the management page of data <i>type</i>.
	 */
	function admin_management_data($type)
	{
		$data = $this->find($type);
		$name = !empty($this->get['edit']) ? $this->get['edit'] : '';
		$html = '';

		// Add
		if(isset($this->get['add']))
			return $this->admin_form_add($type);

		if($type) {
			// Edit fields
			if(isset($this->get['edit_fields'])) {
				$html .= $this->admin_form_add($type, true);
				$html .= $this->admin_list_fields($type);
			}
			// Edit
			if(!empty($name) && in_array($name, $data)) {
				$html .= $this->admin_form_edit($type, $name);
			}
			// content
			else $html .= $this->admin_list($type);
		}

		return $html;
	}
	/*
	 * Return the management page of files.
	 */
	function admin_management_file()
	{
		$path = isset($this->get['path']) ? $this->get['path'] : '';
		while(!empty($path) && !file_exists($this->root($path))) {
			$path = $this->string_to_path(dirname($path));
			$this->string_to_path($p);
		}

		$html = '';
		// Add directory
		if(isset($this->get['add_dir'])) {
			$html .=	'<b>' . $this->word('dir_add') .	'</b>';
			$html .= '<form method="post" action="'.REQURL.'">';
			$html .= $this->admin_form_fields('file', '', null);
			$html .= '<div class="buttons">';
			$html .= '<input type="hidden" name="data_type" value="file" />';
			$html .= '<input type="submit" class="btn" name="action" value="' . $this->word('add') . '" />';
			$html .= '</div></form>';
		}

		// Edit directory
		if(isset($this->get['edit_dir'])
		&& $path && $path !='.') {
			$html .= '<br /><b>' . $this->word('dir_edit') .	'</b>';
			$html .= '<form method="post" action="' . REQURL . '">';
			$html .= $this->admin_form_fields('file', basename($path), null);
			$html .= '<div class="buttons">';
			$html .= '<input type="hidden" name="data_type" value="file" />';
			$html .= '<input type="submit" class="btn" name="action" value="' . $this->word('edit') . '" />';
			$html .= '<input type="submit" class="btn" name="action" value="' . $this->word('del') . '" />';
			$html .= '</div></form>';
		}

		// Add file
		if(isset($this->get['add'])) $html .= $this->admin_form_add('file');

		// Field edit
		if(isset($this->get['edit_fields'])) {
			$html .= $this->admin_form_add('file', true);
			$html .= $this->admin_list_fields('file');
		}

		// Edit file
		if(isset($this->get['edit']) && is_file($this->root($path) . '/' . $this->get['edit']))
		{
			$name = $this->get['edit'];
			$html .= $this->admin_form_edit('file', $name);
		}
		// browser
		else {
			$html .= $this->admin_list('file');
			$html .= $this->admin_link('file', array('path'=>$path, 'add_dir'), $this->word('dir_add'), 'btn add');
			if($path && $path !='.')
				$html .= $this->admin_link('file', array('path'=>$path, 'edit_dir'), $this->word('dir_edit'), 'btn edit');
		}

		return $html;
	}

	/*
	 * Return data list
	 */
	function admin_list($type)
	{
		$sort = !empty($this->get['sort']) ? $this->get['sort'] : ($type == 'file' ? 'type' : null);
		$method = (!empty($this->get['method']) && $this->get['method'] == 'desc') ? SORT_DESC : SORT_ASC;

		// define existing/filtered fields
		$existing_fields = $this->get_fields($type);
		$display_fields = $this->get('data', $type);
		if(!is_array($display_fields)) $display_fields = array($display_fields);

		if($display_fields) $fields = array_intersect($existing_fields, $display_fields);
		elseif($type == 'file') $fields = array('type', 'preview');
		elseif(!$existing_fields) $fields = array('value');
		else $fields = array();
		array_unshift($fields, 'name');
		// fields header
		$html_fields = '';
		foreach($fields as $field) {
			$fieldname = $this->word($field);
			if($sort == $field) {
				if($method == SORT_ASC)
					$html_fields .= $this->admin_link(
						$type, array('sort'=>$field, 'method'=>'desc'),
						$fieldname . ' ▲');
				else
					$html_fields .= $this->admin_link(
						$type, array('sort'=>$field, 'method'=>'asc'),
						$fieldname . ' ▼');
			}
			else $html_fields .= $this->admin_link($type, array('sort'=>$field), $fieldname);
		}

		// fields filtering form
		if($existing_fields) {
			$fields_selection .= '<form id="columnsFilter" method="post" action="' . REQURL . '">';
			$fields_selection .= '<input type="hidden" name="data_type" value="data" />';
			$fields_selection .= '<input type="hidden" name="newname" value="'.$type.'" />';
			$fields_selection .= '<input type="submit" class="btn" name="action" value="' . $this->word('filter') . '" />';
			foreach($existing_fields as $field) {
				$fieldname = $this->word($field);
				$fields_selection .= '<label class="label"><input type="checkbox" name="data[]" value="'.$field.'"';
				if(array_search($field, $display_fields) !== false) $fields_selection .= ' checked';
				$fields_selection .= ' />'.$fieldname.'</label>';
			}
			$fields_selection .= '</form>';
		}
		$fields_selection .= $this->admin_link($type, array('edit_fields'), $this->word('edit'), 'btn add');

		$html = '<div class="listhead">' . $html_fields . $fields_selection . '</div>';
		$html.= $this->admin_list_items($type, $fields, $sort, $method);
		$html .= $this->admin_link($type, array('add'), $this->word('add_one'), 'btn add');
		return $html;
	}
	/*
	 * Return data list items
	 */
	function admin_list_items($type, $fields, $sort = null, $method = SORT_DESC, $parent = false)
	{
		$html = '<ul class="list">';
		// files
		if($type == 'file') {
			$path = $this->path();
			// get and sort
			$files = $this->file_get($path);
			$files = $this->md_multisort($files, $sort, $method);
			$childs = array_keys($files);
			// parent directory
			$dir_icon = '<img class="icon" src="data:image/gif;base64,R0lGODlhDQALAMQAAOvGUf7ztuvPMf/78/fkl/Pbg+u8Rvjqteu2Pf3zxPz36Pz0z+vTmPzurPvuw/npofbjquvNefHVduuyN+uuMu3Oafbgjfnqvf/3zv/3xevPi+vRjP/20/bmsP///////yH5BAEAAB8ALAAAAAANAAsAAAVaoMcwWhR5aCp6WJtVACDMAsO6WR4EmbANLoBhiEBMKLGkYulwHBLIgVTRaDwIBIsDydlVr5ZC4YBcVK3ZgkTSoRgS37SkUoG4E4tFwnE5dCAQF25FhBOGhxQhADs=" alt="dir" />';
			if($path != $this->root()) {
			   $html .= '<li class="item dir">';
				$name = '<b>' . $dir_icon . '◄ ' . $this->word('parent_dir') . ' : ' . basename(dirname($path)) . '</b>';
				$html .= $this->admin_link('file', array('path'=>dirname($path)), $name);
				$html .= '</li>';
			}
		}
		// data
		else {
			$childs = $this->find($type, 'parent', $parent, null, $method, $sort);
			if($parent == false && empty($childs)) $childs = $this->find($type);
		}
		if(!$childs) return;

		// list data/files
		foreach($childs as $id => $name)
		{
			// skip translated item (manage versions in original item)
			if($this->i18n_lang($name)) continue;

			if($type == 'file') {
				$data = $files[$name];
				$childs_nbr = 0;
				$is_current = $is_parent = false;
				// directory
				if($data['type'] == '_dir') {
					$html .= '<li class="item dir">';
					$html .= $this->admin_link('file', array('path'=>$name), '<b>' . $dir_icon . basename($name) . '</b>');
					$html .= '</li>';
					continue;
				}
			} else {
				$data = $this->get($type, $name);
				$childs_nbr = count($this->find($type, 'parent', $name));
				if($type == 'page') {
					$level = $this->level($type, PAGENAME, $name);
					$is_current = $level === 0;
					$is_parent = $level > 0;
					$is_child = $level < 0;
				} else {
					$is_current = false;
					$is_parent = false;
					$is_child = true;
				}
			}

			// Adapt non-array values and add name data
			if(!is_array($data)) $data = array('value' => $data);
			else $data = array_intersect_key($data, array_flip($fields));
			$data = array('name' => $name) + $data;

			// Item columns
			$item_content = '';
			foreach($data as $key => $val)
			{
				if(($type == 'right' && $key == 'value')
						|| $key == 'rank')		$val = $this->word($this->find('rank', null, $val, 1));
				elseif($key == 'name')			$val = basename($val);
				elseif($key == 'preview')		$val = $this->html_image($name, false, '200');
				elseif($key == 'cache')			$val = !empty($val);
				elseif(is_string($val))			$val = $this->excerpt($this->markup_del($val, false), 30);
				elseif($val === true)			$val = $this->word('yes');
				elseif($val === false)			$val = $this->word('no');

				$item_content .= '<span class="column '.$key.'">' . $val . '</span>';
			}

			// Item link
			$params = array();
			if($type == 'page') $params['page'] = $name;
			if($is_current) $params['edit'] = basename($name);
			if(!empty($path)) $params['path'] = $path;

			$item_link = $this->admin_link($type, $params, $item_content);

			// Item translations
			$item_translations = '';
			$i=0;
			do {
				if($n = $this->preg_array_shift($childs, '`^(' .$name.':[a-z]{2})$`')) {
					$item_translations .= $this->admin_link($type, array('edit'=>$n, 'page'=>$n), $this->i18n_lang($n), 'lang');
					$i++;
				}
			} while ($n);
			if($item_translations) $item_translations = "<div class='i18n'>$item_translations</div>";

			// Item childs
			$item_childs = $this->admin_list_items($type, $fields, $sort, $method, $name);

			$item_class = $is_current ? ' current' : ($is_parent ? ' parent' : '');
			$html .= "
				<li class='item$item_class' draggable='true'>
					$item_link
					$item_translations
					$item_childs
				</li>";
		}
		$html .= '</ul>';
		return $html;

	}
	/*
	 * Return fields list
	 */
	function admin_list_fields($type)
	{
		$html = '<h4>' . $this->word('fields_list') . '</h4><ul class="fieldslist">';
		$fields = $this->get_fields($type);
		if(!$fields) return $html .= '<li class="locked"><div class="box">value</div></li></ul>';
		foreach($fields as $field)
		{
			if($this->is_reserved_name($field))
				$html .= '<li class="locked"><div class="box">' . $field . '</div>';
			else {
				$html .= '<li><div class="box">' . $field . '</div>';
				$html .= '<form method="post" class="inline" action="'.REQURL.'">';
				$html .= '<input type="submit" name="action" class="del" value="' . $this->word('del') . '" />';
				$html .= '<input type="submit" name="action" class="up" value="' . $this->word('up') . '" />';
				$html .= '<input type="submit" name="action" class="down" value="' . $this->word('down') . '" />';
				$html .= '<input type="hidden" name="data_type" value="' . $type . '" />';
				$html .= '<input type="hidden" name="field" value="true" />';
				$html .= '<input type="hidden" name="newname" value="' . $field . '" />';
				$html .= '</form>';
			}
			$html .= '</li>';
		}
		$html .= '</ul>';
		return $html;
	}
	/*
	 * Return login form.
	 */
	function admin_form_login($gotoreferer = true)
	{
		if($gotoreferer && isset($_SERVER['HTTP_REFERER'])) $goto = $_SERVER['HTTP_REFERER'];
		else $goto = REQURL;
		return '
		<form id="loginForm" method="post" action="'.REQURL.'" >
			<input type="hidden" name="goto" value="' . $goto . '" />
			<label class="field name">
				<div class="label">' . $this->word('name') . '</div>
				<input type="text" name="login" class="input" />
			</label>
			<label class="field password">
				<div class="label">' . $this->word('password') . '</div>
				<input type="password" name="password" class="input" />
			</label>
			<div class="buttons">
				<input type="submit" class="btn" value="' . $this->word('login') . '" />
				<a href="' . $goto . '">' . $this->word('login_forgot') . '</a>
			</div>
		</form>';
	}
	/*
	 * Return data addition form.
	 */
	function admin_form_add($type, $field = false)
	{
		if($field) $html = '<h1>' . $this->word('new_field') . '</h1>';
		else $html = '<h1>' . $this->word('new_item') . '</h1>';

		$html .= '<form id="addForm" class="'.$type.'" method="post" action="'.REQURL.'" ';
		if($type == 'file') $html .= 'enctype="multipart/form-data"';
		$html .= '><input type="hidden" name="data_type" value="' . $type . '" />';

		if($field) {
			$html .= '<input type="hidden" name="field" value="true" />';
			$html .= $this->admin_form_fields($type, '', array('default_value'=>''));
		}
		else {
			if(!$type) {
				$data = $fields = array();
			}
			else {
				$fields	= $this->get_fields($type);
				if($type == 'file') {
					if(!$fields) $fields = array();
					array_unshift($fields, 'file');
				}
				elseif(!$fields) $fields = array('value');
				$data = array_fill_keys($fields, null);
			}
			$html .= $this->admin_form_fields($type, '', $data);
		}
		$html .= '<div class="buttons">';
		$html .= '<input type="submit" class="btn" name="action" value="' . $this->word('add') . '" />';
		$html .= '</div></form>';
		return $html;
	}
	/*
	 * Return data edition form.
	 */
	function admin_form_edit($type, $name)
	{
		// name / save
		$html = '<h1>';
		if($type == 'page') $html .= $this->page_title($name);
		else $html .= $name;
		$html .= '<span class="savealert">* <span class="msg">(' . $this->word("not_saved") . ')</span></span></h1>';

		if($type == 'file') {
			$path = $this->root($this->get['path']) . '/' . $name;
			$html .= '<form method="post" action="'.REQURL.'" enctype="multipart/form-data" class="'.$type.'">';
			if(($data = $this->get($type, $path))
			|| ($data = reset($this->get($type)))) {
				$data = array_reverse($data, true);
				$data['file'] = $this->get['path'].'/'.$name;
				$data = array_reverse($data, true);;
			} else $data['file'] = $this->get['path'].'/'.$name;
		}
		else {
			$html .= '<form method="post" action="' . REQURL . '" class="'.$type.'">';
			$data = $this->get($type, $name);
		}

		$html .= $this->admin_form_fields($type, $name, $data);

		$html .= '<input type="hidden" name="data_type" value="' . $type . '" />';
		$html .= '<div class="buttons">';
		$html .= '<input type="submit" class="btn view" name="action" value="' . $this->word('preview') . '" id="previewBtn" />';
		$html .= '<input type="submit" class="btn edit" name="action" value="' . $this->word('edit') . '" id="editBtn" accesskey="s"/>';
		$html .= '<input type="submit" class="btn remv" name="action" value="' . $this->word('del') . '" id="delBtn" />';
		$html .= '</div>';

		return $html . '</form>';
	}
	/*
	 * Return html fields based on <i>item_fields</i>, used in admin forms.
	 */
	function admin_form_fields($type, $item_name, $item_fields)
	{
		// name field
		$name_placeholder = '';
		if($type == 'file' && !isset($this->get['add_dir']) && !isset($this->get['edit_fields']))
			$name_placeholder = $this->word('file_name');
		else $name_placeholder = $this->vacant_name($type);
		$name_field = "
			<label class='field name'>
				<div class='label'>{$this->word('name')}</div>
				<input type='text' name='newname' class='input' value='$item_name' placeholder='$name_placeholder'/>
				<input type='hidden' name='name' value='$item_name' />
			</label>";

		// no items or item is a value.
		if($item_fields === null) return $name_field;
		if(!is_array($item_fields)) $item_fields = array('value' => $item_fields);

		// make all fields
		$custom_fields = $base_fields = '';
		foreach($item_fields as $field_name => $field_value)
		{
			// define field type
			$field_type = $field_name;
			if($field_name != 'default_value')
			{
				$model = $this->find($type, null, $field_name);
				if(is_bool($field_value) || is_bool($model) || $field_name == 'cache') {
					$field_type = 'boolean';
				}
				elseif(is_string($field_value) || is_string($model)) {
					$field_value = htmlentities($field_value, ENT_QUOTES, 'utf-8');
				}
			}

			// make html input according to field type
			$nameclass = "name='data[$field_name]' class='input'";
			switch($field_type)
			{
				case 'boolean' :
					$false = $true = ' selected="selected"';
					if($field_value) $false = '';
					else $true = '';
					$input = "
						<select $nameclass>
							<option value='false' $false>{$this->word('no')}</option>
							<option value='true' $true>{$this->word('yes')}</option>
						</select>";
					break;

				case 'parent' :
					$similar_items = $this->md_flatten_keys($this->find_nested($type));
					unset($similar_items[$item_name]);
					foreach($similar_items as $name => $lvl) {
						$selected = $name == $item_fields['parent'] ? 'selected="selected"' : '';
						$spaces = str_repeat('&nbsp;', $lvl * 5);
						$options .= "
							<option value='$name' $selected>
								$spaces$name
							</option>";
					}
					$selected = empty($item_fields['parent']) ? 'selected="selected"' : '';
					$input = "
						<select $nameclass>
							<option $selected></option>
							$options
						</select>";
					break;

				case 'password' :
					$ph = $this->word('placeholder_password');
					$input = "
						<input $nameclass type='text' placeholder='$ph' />";
					break;

				case 'text' :
				case 'date' :
				case 'time' :
				case 'email' :
				case 'number' :
					$ph = $this->word('placeholder_'.$field_type);
					$input = "
						<input $nameclass type='$field_type' value='$field_value' placeholder='$ph' />";
					break;

				case 'file':
					$is_previewable = preg_match('`(?:jpe?g|png|gif)`i', pathinfo($field_value, PATHINFO_EXTENSION));
					if($is_previewable)
						$input = "
							<div class='preview box'>
								<a href='{$this->absroot($field_value)}' title='{$this->word('preview')}' target='_blank'>
									{$this->input_image($field_value)}
								</a>
							</div>";
					else $input = "<div>$field_value</div>";
					$input .= "<input $nameclass type='file' />";
					break;

				case 'rank' :
					$input = "<select $nameclass>";
					foreach($this->get('rank') as $rank => $rankid)
						if($rankid) {
							$input .= "<option value='$rankid' ";
							if($rankid == $field_value) $input .= 'selected="selected"';
							$input .= '>' . $this->word($rank) . '</option>';
						}
					$input .= '</select>';
					break;

				default :
					$main = !isset($main) ? 'main' : '';
					$multiline = strpos($field_value, "\n") != -1 ? ' multiline' : '';
					$input = "
						<div class='textarea$multiline'>
							<textarea placeholder='...' $nameclass>$field_value</textarea>
							<div class='shadow input'></div>
						</div>";
			}
			// make field
			$input = "
				<label class=\"field $field_name $main\">
					<div class=\"label\">{$this->word($field_name)}</div>
					$input
				</label>";

			// differanciate base fields and custom fields
			switch($field_name) {
				case 'date':
				case 'parent':
					$base_fields .= $input;
					break;
				default:
					$custom_fields .= $input;
			}
		}

		return "
			<div class='basefields'>
				$name_field
				$base_fields
			</div>
			<div class='customfields'>
				$custom_fields
			</div>";
	}
	/*
	 * Add to content an information message defined by a key.
	 *
	 * @param string $key The info key.
	 * @param string $info_type Optionnal. The information type (info, error).
	 * @param string $href Optionnal. Define the target of the link. Same page by default.
	 */
	function admin_msg($key, $info_type = 'info', $additional_content = '', $href = REQURL, $all = false)
	{
		if(!$all && !$this->visitor->rank) return;

		$link = '';
		if($href) {
			if($key == 'preview')
				$link = '<a href="' . $href . '" class="undo">' . $this->word('undo') . '</a>';
			else $link = '<a href="' . $href . '" class="close">' . $this->word('ok') . '</a>';
		}

		$this->infos .= "
			<div class='msg $info_type'>
				<h1>{$this->word($info_type . '_' . $key)}</h1>
				<p>{$this->word($info_type . '_' . $key . '_msg')}</p>
				$additional_content
				$link
			</div>";
	}
	/*
	 * Add to content an information message containing a undo form.
	 *
	 * @param string $info_type The type of the action giving rise to the message.
	 * @param string $data_type The type of data manipulated by the action.
	 * @param string $data The content of the data before the action manipulation.
	 */
	function admin_msg_undo($info_type, $data_type, $data)
	{
		$href = '?admin=' . $data_type;
		if($data_type == 'page'
		&& isset($this->get['edit'])
		&& !isset($this->get['edit_fields']))
			$href = '?page=' . $this->get['edit'];
		elseif(isset($this->get['page']))
			$href .= '&page=' . $this->get['page'];

		$this->admin_msg($info_type, 'info',
			'<form method="post" action="'.REQURL.'" id="undoForm">'
			.'<input type="submit" name="action" value="' . $this->word('undo') . '" class="a undo"/>'
			.'<input type="hidden" name="data_type" value="' . $data_type . '" />'
			.'<input type="hidden" name="newname" value="undo" />'
			.'<input type="hidden" name="data" value="'.base64_encode(serialize($data)).'" />'
			.'</form>');
	}

	/* TOOLS */

	/*
	 * Print the given array value, surrounded by <pre> tag for clarity.
	 */
	function preint($v)
	{
		echo '<pre style="border:1px solid grey;padding:.5em;">';
		print_r($this->md_function('htmlentities', $v));
		echo '</pre>';
	}

	/*
	 * Return a sorted version of a multi-dimentional
	 * array. Preserve the keys/values association.
	 *
	 * @param array $arr the array to sort
	 * @param string $col the array column base for sort
	 * @param int $method Optionnal. The sort method, by default SORT_ASC.
	 */
	function md_multisort($arr, $col, $method = SORT_ASC)
	{
		if(!is_array($arr) || empty($arr)) return false;
		if($col === null) return $arr;
		elseif($col == 'name') $tmp = array_keys($arr);
		else foreach($arr as $key => $row) $tmp[$key] = @$row[$col];
		array_multisort($tmp, $method, $arr);
		return $arr;
	}
	/*
	 * Return a shuffle version of a multi-dimentional
	 * array. Preserve the keys/values association.
	* @return array
	 */
	function md_shuffle($arr)
	{
		if(!is_array($arr)) return $arr;
		$keys = array_keys($arr);
		shuffle($keys);
		foreach ($keys as $key) $tmp[$key] = $arr[$key];
		return $tmp;
	}
	/*
	 * Apply a function to any given value, even a multi-dimentional array.
	 *
	 * @param string $func the function name
	 * @param mixed $arr the value
	 * @param string $type verify the checking function is_[type] (is_bool, is_null...)
	 * @return mixed
	 */
	function md_function($func, $arr, $type = null) {
		if(!is_array($arr)) {
			$check = 'is_' . $type;
			if(!$type || $check($arr)) return $func($arr);
			return $arr;
		}
		foreach ($arr as $k=>$v) $arr[$k] = $this->md_function($func, $v, $type);
		return $arr;
	}
	/*
	 * Flatten a multi-dimentional array by preserving any keys
	 * and indicating the nested level .
	 * @return array
	 */
	function md_flatten_keys($a, $lvl = 0){
		if(!is_array($a)) return $a;
		$b = array();
		foreach($a as $k => $v){
			$b[$k] = $lvl;
			if(is_array($v)) $b += $this->md_flatten_keys($v, $lvl+1);
		}
		return $b;
	}
	/*
	 * Attempts to remove the directory named by <i>dir</i> and its content.
	 *
	 * @see rmdir()
	 * @param string $dir Path to the directory.
	 * @return boolean Returns TRUE on success or FALSE on failure.
	 */
	function rmdir_r($dir)
	{
		if(is_dir($dir)) {
			$objs = scandir($dir);
			foreach($objs as $o) {
				if($o != '.' && $o != '..') {
					if(is_dir($dir.'/'.$o)) {
						$this->rmdir_r($dir.'/'.$o);
					} else unlink($dir.'/'.$o);
				}
			}
			reset($objs);
			return rmdir($dir);
		}
	}
	/*
	 * Shift the first value of a <i>type</i> in the <i>array</i> off and returns it.
	 *
	 * @param array $a The input array.
	 * @param string $t The type of value required (int|float|string|array).
	 * @param bool $ct If set to true, check for "real" type of string. (only int)
	 * @return mixed The required value, or false.
	 * @see array_shift()
	 */
	function typed_array_shift(&$a, $t, $ct = false)
	{
		if(!is_array($a)) return false;
		switch($t)
		{
			case 'string' :
				foreach($a as $k=>$v) if(is_string($v)){unset($a[$k]);return $v;}
			case 'int' :
				foreach($a as $k=>$v)
					if(is_int($v) || (is_string($v) && $ct && ctype_digit($v)))
					{unset($a[$k]);return intval($v);}
			case 'float' :
				foreach($a as $k=>$v) if(is_float($v)){unset($a[$k]);return $v;}
			case 'array' :
				foreach($a as $k=>$v) if(is_array($v)){unset($a[$k]);return $v;}
			case 'bool' :
				foreach($a as $k=>$v) if(is_bool($v)){unset($a[$k]);return $v;}
			case 'null' :
				foreach($a as $k=>$v) if(is_null($v)){unset($a[$k]);return $v;}
		}
		return false;
	}
	/*
	 * Shift the first string matching <i>pattern</i> in
	 * the <i>array</i> off and returns it.
	 * If there is sub-matches, return the first one.
	 *
	 * @param array $array The input array.
	 * @param string $pattern The pattern.
	 * @return mixed The required value, or false.
	 * @see array_shift()
	 */
	function preg_array_shift(&$array, $pattern)
	{
		if(!is_array($array)) return false;
		foreach($array as $key => $value)
		{
			if(is_string($value) && preg_match($pattern, trim($value), $out))
			{
				unset($array[$key]);
				if(isset($out[1])) return $out[1];
				else return $value;
			}
		}
		return false;
	}
	/*
	 * Return a random string.
	 *
	 * @param int $len The string length.
	 * @param string $chr Optionnal. The characters used in the string. Default: a-zA-Z0-9
	 * @return string	The random string
	 */
	function rand_string($len, $chr = null){
		if(!is_string($chr)) $chr = 'abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPRSTUVWXYZ023456789';
		srand((double)microtime()*1000000);
		$str = '';
		for($i = 0; $i <= $len; $i++) {
			$num = rand() % 33;
			$str .= substr($chr, $num, 1);
		}
		return $str;
	}

	/* LANGUAGE */

	/*
	 * Return the most appropriate language according to existing core translations
	 * and GET, SESSION, site setting and browser setting. If all failed, use "en".
	 *
	 * @return string The language code.
	 */
	function language()
	{
		if(!empty($this->get['lang'])
		&& isset($this->translations[$this->get['lang']])) return $this->get['lang'];

		if(!empty($_SESSION['lang'])
		&& isset($this->translations[$_SESSION['lang']])) return $_SESSION['lang'];

		if(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])
		&& ($browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2))
		&& isset($this->translations[$browser_lang])) return $browser_lang;

		if($setting_lang = $this->setting('language')
		&& isset($this->translations[$setting_lang])) return $setting_lang;

		return 'en';
	}
	/* Alias for syntax output */
	function html_language() {
		return $this->language();
	}
	/*
	 * Return a translation of a core key in the correct language.
	 *
	 * @param string $key The key of the sentence.
	 * @param string $lang Optionnal. If set, use this language.
	 * @return string The translated sentence.
	 */
	function word($key, $lang = '')
	{
		if(empty($lang)) $lang = $this->language();
		if(isset($this->translations[$lang][$key]))
			return $this->translations[$lang][$key];
		if(isset($this->translations['en'][$key]))
			return $this->translations['en'][$key];
		return ucfirst(str_replace('_', ' ', $key));
	}
	/*
	 * Check if a given item name is a i18n format, or return a
	 * i18n format version of the name for a given lang.
	 * @param string $name the data item name
	 * @param string $name the lang code (en, fr...)
	 * @return mixed lang code/false or i18n name format
	 */
	function i18n_lang($name, $lang = null)
	{
		$is_i18n = substr($name, -3, -2) == ':';
		if($lang === null) {
			if($is_i18n) return substr($name, -2);
			else return false;
		} else {
			if($is_i18n) return substr($name, 0, -2) . $lang;
			else return $name . ':' . $lang;
		}
	}

	/* CHECKERS */

	/*
	 * Check if a string is reserved by the system.
	 * @param string $str the string
	 * @return bool
	 */
	function is_reserved_name($str) {
		$reserved = array('name','value','content','parent','rank','password','timestamp');
		if(empty($str) || in_array($str, $reserved)) return true;
		return false;
	}
	/*
	 * Check if visitor have equal or superior right
	 * for an action on given <i>type</i>.
	 * @param string $type the data type
	 * @return bool
	 */
	function is_granted($type) {
		if(!isset($this->visitor->rank)) return false;
		return $this->visitor->rank >= $this->get('right', $type);
	}

	/* FAST GETTERS */

	/*
	 * Return the next vacant name for an item of data <i>type</i>, as "data_##".
	 *
	 * @param string $type The data type.
	 * @return string The name.
	 */
	function vacant_name($type)
	{
		$item = rtrim($type, 's');
		if($items = $this->find($type)) {
			rsort($items);
			if($id = $this->preg_array_shift($items, '`^' . $item . '_(\d+)$`')) {
				$id = intval($id) + 1;
				if($id < 10) $id = '0'.$id;
			} else $id = '01';
			return $item . '_' . $id;
		}
		return false;
	}
	/*
	 * Return the given setting.
	 */
	function setting($name)
	{
		return $this->get('setting', $name);
	}
	/*
	 * Return the current files path.
	 */
	function path()
	{
		$path = isset($this->get['path']) ? $this->root($this->get['path']) : '';
		while(!is_dir($path)) $path = $this->root(dirname($path));
		return $path;
	}
	/*
	 * Return the root path based on setting.
	 *
	 * @param string $relpath Optionnal. And additionnal relative path.
	 * @return string The path.
	 */
	function root($relpath = '')
	{
		$relpath = $this->string_to_path($relpath);
		$root = $this->string_to_path($this->setting('files_path'));
		$root = $this->string_to_path($root . '/' . $relpath);
		if(empty($root)) $root = '.';
		return $root;
	}
	/*
	 * Return the absolute root url based on setting.
	 *
	 * @param string $relpath Optionnal. And additionnal relative path.
	 * @return string The path.
	 */
	function absroot($path = '') {
		return SERVERURL . FILEPATH . '/' . $this->root($path);
	}
	function absurl($url)
	{
		// option
		if($url[0] == '?') return $this->absroot() . $url;
		// file
		if(is_file($url = $this->root($url))) return $url;
		// external url / mailto
		if(preg_match('`^'.URLPATTERN.'$`', $url, $out)) {
			if(!empty($out[2])) return 'mailto:' . $out[0];
			elseif(empty($out[1])) return 'http://' . $url;
			return $url;
		}
		// page
		elseif(preg_match(PAGEPATTERN, $url, $out))
		{
			if(!isset($out[2])) $out[2] = '';
			return $this->page_url($out[1], $out[2]);
		}
		return false;
	}
}

class Image
{
   var $path;
   var $image;
   var $type;
   var $width;
   var $height;

   function Image($path)
   {
		$this->path = $path;
		$info = @getimagesize($path);
		if(!$info) throw new Exception('Unknown Image');
		list($this->width, $this->height, $this->type) = $info;
   }
   function load()
   {
		switch($this->type) {
			case IMAGETYPE_JPEG : $this->image = imagecreatefromjpeg($this->path); break;
			case IMAGETYPE_GIF :  $this->image = imagecreatefromgif($this->path); break;
			case IMAGETYPE_PNG :  $this->image = imagecreatefrompng($this->path); break;
		}
   }
   function save($path, $type = null, $compression = 75, $permissions = null)
   {
		if($type === null) $type = $this->type;
		switch($type) {
			case IMAGETYPE_JPEG : imagejpeg($this->image, $path, $compression); break;
			case IMAGETYPE_GIF :  imagegif($this->image, $path); break;
			case IMAGETYPE_PNG :  imagepng($this->image, $path); break;
		}
		if($permissions != null) chmod($path,$permissions);
   }
   function output($type = null)
   {
		if($type === null) $type = $this->type;
		// Type and cache control
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime($this->path)) . ' GMT');
		header('Content-Type: '. $type);
		switch($type) {
			case IMAGETYPE_GIF :
			case IMAGETYPE_PNG :
				imagepng($this->image); break;
			case IMAGETYPE_JPEG :
				imagejpeg($this->image); break;
		}
   }
   function resize($width = null, $height = null, $crop = false)
   {
		if(!$width && !$height) return;
		// compute sizes
		if($crop){
			if($width == null) $width = $this->width;
			if($height == null) $height = $this->height;
			$ratio = max($width/$this->width, $height/$this->height);
			$y = ($this->height - $height / $ratio) * .5;
			$this->height = $height / $ratio;
			$x = ($this->width - $width / $ratio) * .5;
			$this->width = $width / $ratio;
		}
		else{
			if(!$width) $width = $this->width * $height/$this->height;
			if(!$height) $height = $this->height * ($width/$this->width);
			$x = $y = 0;
		}
		$new = imagecreatetruecolor($width, $height);
		// preserve transparency
		if($this->type == IMAGETYPE_GIF or $this->type == IMAGETYPE_PNG){
			imagealphablending($new, false);
			imagefill($new, 0, 0, imagecolorallocatealpha($new, 0, 0, 0, 127));
			imagesavealpha($new, true);
		}
		imagecopyresampled($new, $this->image, 0, 0, $x, $y, $width, $height, $this->width, $this->height);
		$this->image = $new;
		$this->width = imagesx($this->image);
		$this->height = imagesy($this->image);
   }
	function is_animated() {
		if($this->type != IMAGETYPE_GIF
		|| !($fh = @fopen($this->path, 'rb')))
			return false;
		$count = 0;
		while(!feof($fh) && $count < 2) {
			$chunk = fread($fh, 1024 * 100); //read 100kb at a time
			$count += preg_match_all('#\x00\x21\xF9\x04.{4}\x00(\x2C|\x21)#s', $chunk, $matches);
		}
		fclose($fh);
		return $count > 1;
	}
}








/*
 *	OUTPUT IMAGE
 */
if(!empty($_GET['image']))
{
	$w = !empty($_GET['w']) ? $_GET['w'] : null;
	$h = !empty($_GET['h']) ? $_GET['h'] : null;
	// redirect to the original if there is no resize to do
	if(!$w && !$h) header('Location: '. $_GET['image']);

	try {
		$image = new Image($_GET['image']);
		// redirect to the original if animated
		if($image->is_animated()) header('Location: '. $image->path);
		$image->load();
		$image->resize($w, $h, isset($_GET['crop']));
		$image->output();
	} catch (Exception $e) {}
	die();
}

/*
 *	OUTPUT THIIS
 */

if(!isset($DATA) || !is_array($DATA)) $DATA = array();
$thiis = new Thiis($DATA);

// Html output
$templates = $thiis->find('template');
$template_name = in_array(PAGENAME, $templates) ? PAGENAME : reset($templates);
$template = $thiis->get('template', $template_name);
$output = $thiis->parse($template, false, true, 'template "' . $template_name . '"');

if(!isset($thiis->get['admin'])) exit($output);

/*
 *	OUTPUT ADMINISTRATION
 */

// frames positions
switch($thiis->setting('admin_position')) {
	case 'full':
		$admin_position = 'width:100%; height:100%; left:0; top:0; border:none;';
		$site_position  = false; break;
	case 'top':
		$admin_position = 'width:100%; height:45%; left:0; top:0; border-bottom-width:3px;';
		$site_position  = 'width:100%; height:55%; left:0; bottom:0;'; break;
	case 'bottom':
		$admin_position = 'width:100%; height:45%; left:0; bottom:0; border-top-width:3px;';
		$site_position  = 'width:100%; height:55%; left:0; top:0;'; break;
	case 'left':
		$admin_position = 'width:45%; height:100%; left:0; top:0; border-right-width:3px;';
		$site_position  = 'width:55%; height:100%; right:0; top:0;'; break;
	default:
		$admin_position = 'width:45%; height:100%; right:0; top:0; border-left-width:3px;';
		$site_position  = 'width:55%; height:100%; left:0; top:0;';
}

// fields width, according to displayed fields number and action column.
$type = $thiis->admin_current();

if($type == 'file') $default_fields = 2;
else $default_fields = 1;

$display_fields = count($thiis->get('data', $type));
if(!$display_fields) {
	$existing_fields = count($thiis->get_fields($type));
	if(!$existing_fields)
		$display_fields = 1;
}
$fields = $default_fields + $display_fields;
$fields_w = (int) (100 / $fields);

?>
<!doctype html>
<!-- THIIS is another cms. -->
<html>
	<head>
		<meta charset="utf-8">
		<meta name="robots" content="noindex">
		<meta name="googlebot" content="noindex">
		<meta name="thiis" data_type="<?php echo $type; ?>">
		<title><?php echo $thiis->setting('site_title') . ' - ' . $thiis->word('admin'); ?></title>
		<?php
			if($site_position) echo $thiis->admin_css($output, 'siteframe');
		?>
		<style type="text/css"><!--
			html,
			body {
				width:100%;
				height:100%;
				margin:0;
				padding:0;
				overflow:hidden;
			}
			#adminframe,
			#siteframe {
				position: absolute;
				min-width: 360px;
				margin:0;
				overflow: auto;
				-moz-box-sizing:	border-box;
				-webkit-box-sizing:	border-box;
				-ms-box-sizing:		border-box;
				box-sizing:			border-box;
			}
			#siteframe {
				<?php echo $site_position; ?>
			}
			section#siteframe > div,
			section#siteframe > div > div {
				display: block; line-height: 1;
				margin:0; padding:0; border: 0;
				font-size: 100%; font: inherit;
			}
			#adminframe {
				padding: 0 1%;
				overflow-x: hidden;
				z-index: 99999;

				color: #222;
				background:#fafafa;
				border: 0 ridge #eee;
				<?php echo $admin_position ?>

				font: normal 12px Arial, sans-serif;
				line-height: 2.5em;
			}
			@media (max-width:800px) {
				#adminframe { width: 100%; left: 0; }
				#siteframe { display: none; }
			}
			#adminframe * {
				-moz-box-sizing:	border-box;
				-webkit-box-sizing:	border-box;
				-ms-box-sizing:		border-box;
				box-sizing:			border-box;
			}

			#adminframe a,
			#adminframe .a {
				background: none;
				border: none;
				font: inherit;
				cursor: pointer;
				color:#CD4C0F;
				text-decoration: none;
			}
				#adminframe a:hover,
				#adminframe .a:hover {
					text-decoration: underline;
				}
				#adminframe a.btn:hover {
					text-decoration: none;
				}

			#adminframe img { margin: 0; border: 0;}
			#adminframe img.icon { width:auto; margin-right:6px; position:relative; top:1px;}

			#adminframe header {
				color: #bbb;
				text-align: center;
			}
			#adminframe header a { color: #bbb; }
			#adminframe header .close { float: left; }
			#adminframe header .version { float: right}

			#adminframe nav ul {
				margin: 0;
				padding: 0;
				text-align: center;
				font-weight: bold;
				border-bottom: 1px solid #cacaca;
			}
			#adminframe nav li {
				display:inline;
				list-style:none;
			}
			#adminframe nav a {
				display:inline-block;
				padding: 0 1em;
				margin-right: -1px;

				color: #222;
				border: 1px solid #cacaca;
				border-top-color: #CD4C0F;
				border-width: 2px 1px 0 1px;
				border-radius: 2px 2px 0 0;
			}
			#adminframe nav a:hover,
			#adminframe nav .selected a {
				color:#CD4C0F;
				text-decoration:none;
			}
			#adminframe nav .file a {
				border-top-color: #ebae32;
			}
			#adminframe nav .data a,
			#adminframe nav .plus {
				position: relative;
				width: 2em;
				min-width: 0;
				color: transparent;
				text-shadow: none;
				border-top-color: #cacaca;
			}
			#adminframe nav li.data a:before,
			#adminframe .plus:before {
				font: normal 2em/0px sans-serif;
				content: "+"; color: #cacaca;
				position: absolute; top: 50%; left: 18%;
			}
			#adminframe nav li.data a:hover {
				color: transparent; text-shadow: none;
			}
			#adminframe nav li.data a:hover:before {
				color:#CD4C0F;
			}

			/* BUTTONS */

			#adminframe button,
			#adminframe .btn {
				position: relative;
				display: inline-block;
				width: auto;
				min-width: 0;
				margin: 1em .5em 1em 0;
				padding: .5em 1em;
				vertical-align: top;

				border: 1px solid #cacaca;
				border-radius: 2px;

				color: #555;
				cursor: pointer;
				font-size: 11px;
				font-weight: bold;
				text-transform: uppercase;
				text-shadow: 1px 1px 0 #fff;

				background: none;
				background: -moz-linear-gradient(top, #fff 0%, #f7f7f7 100%);
				background: -webkit-linear-gradient(top, #fff 0%,#f7f7f7 100%);
				background: -o-linear-gradient(top, #fff 0%,#f7f7f7 100%);
				background: -ms-linear-gradient(top, #fff 0%,#f7f7f7 100%);
				background: linear-gradient(top, #fff 0%,#f7f7f7 100%);
			}
			#adminframe button:active,
			#adminframe .btn:active {
				box-shadow: 1px 1px 0 #fff;
				background: -moz-linear-gradient(bottom, #fff 0%, #f7f7f7 100%);
				background: -webkit-linear-gradient(bottom, #fff 0%,#f7f7f7 100%);
				background: -o-linear-gradient(bottom, #fff 0%,#f7f7f7 100%);
				background: -ms-linear-gradient(bottom, #fff 0%,#f7f7f7 100%);
				background: linear-gradient(bottom, #fff 0%,#f7f7f7 100%);
			}
			#adminframe button:hover,
			#adminframe .btn:hover {
				box-shadow: -1px -1px 0 #fff, 1px 1px 2px #eee;
				background: -moz-linear-gradient(top, #fff 10%, #f3f3f3 100%);
				background: -webkit-linear-gradient(top, #fff 10%,#f3f3f3 100%);
				background: -o-linear-gradient(top, #fff 10%,#f3f3f3 100%);
				background: -ms-linear-gradient(top, #fff 10%,#f3f3f3 100%);
				background: linear-gradient(top, #fff 10%,#f3f3f3 100%);
			}
			#adminframe .btn.view,
			#adminframe .btn.edit,
			#adminframe .btn.remv {
				width: 100px;
			}
			#adminframe .btn.add {
				padding: 0 0 0 2em;
			}
			#adminframe .btn.add:before,
			#adminframe .btn.remv:before {
				color: #ccc; font: normal 2em/0px sans-serif;
				position: absolute; top: 55%; left: .2em;
			}
			#adminframe .btn.add:before { content: "+"; }
			#adminframe .btn.remv:before { content: "x"; }

			#adminframe .btn.up,
			#adminframe .btn.down,
			#adminframe .btn.del {
				width: 2em;
				height: 2em;
				color: transparent;
			}
			#adminframe .btn.up {
				background: url(data:image/gif;base64,R0lGODlhCAAHALMAAJLNXpDEaZPNX4/NU5bUWJnXWpDNVIvFWXyuWmOPRf///////wAAAAAAAAAAAAAAACH5BAEAAAsALAAAAAAIAAcAAAQYUMmUpE0A1QmKOBWVEIE4GcA2DamliFsEADs=) no-repeat center;}
			#adminframe .btn.down {
				background: url(data:image/gif;base64,R0lGODlhCAAHALMAAJLNXpDEaZPNX4/NU5bUWJnXWpDNVIvFWXyuWmOPRf///////wAAAAAAAAAAAAAAACH5BAEAAAsALAAAAAAIAAcAAAQXUKlEk5RpAHuT2RhFBNUEFMLBmcgaXhEAOw==) no-repeat center;}
			#adminframe .btn.del {
				background: url(data:image/gif;base64,R0lGODlhCAAIANUAALba/OLp8ElVa0NLXIivyJXK/MDf/T5FVbvc/Ym77MvM0ZrA1t7n7ykxQ67T5dXn8LDR46jL3tXb5J7O+1Jhe1dwkbHX/KvU+6TR++zx9naXtMfj/u0xMeXt9fL2+u3x9s8dHf///////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAACIALAAAAAAIAAgAAAYgwBDIE/qAPkLOEaT8eJhQZDEaCmWgzeSyaUR2q9JiNQgAOw==) no-repeat center;}

			#adminframe .buttons {
				text-align:center;
				padding-bottom: 1em;
			}

			/* DATA LISTS */

			#adminframe .listhead a,
			#adminframe .column,
			#adminframe li.dir a {
				display: inline-block;
				width:<?php echo $fields_w ?>%;
				padding: 0 1%;
				color:#555;
				line-height: 1em;
				letter-spacing:0;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				position:relative;
				vertical-align: middle;
			}
			#adminframe .listhead {
				overflow: hidden;
				color: #CD4C0F;
				position: relative;
				border: 1px solid #cacaca;

				max-height: 2.5em;
				-webkit-transition: max-height 1s 1s ease;
				-moz-transition: max-height 1s 1s ease;
				-ms-transition: max-height 1s 1s ease;
				-o-transition: max-height 1s 1s ease;
				transition: max-height 1s 1s ease;
			}
			#adminframe .listhead:hover {
				max-height: 50em;
			}
			#adminframe .listhead a {
				font-weight:bold;
			}
			#adminframe #columnsFilter input[type=checkbox] {
				margin: 0 .5em 0 1em;

			}
			#adminframe .listhead .btn.add {
				position: absolute;
				top: 0;
				right: 0;
				width: 2em;
				height: 100%;
				margin: 0;
				border-width: 0 0 0 1px;
			}

			#adminframe .list {
				position: relative;
				margin:0;
				padding:0;
				border: 1px solid #cacaca;
				border-top: 0;
				box-shadow: 1px 1px 0 #fff;
				line-height: 2.5em;
			}
			#adminframe .list .list {
				border: none;
			}
			#adminframe .list .item {
				list-style: none;
				overflow: hidden;

				background: #fff;
				border-top: 1px solid #eee;
			}
			#adminframe main>.list>.item:first-child {
				border-top: 0;
			}
			#adminframe .list .item:hover {
				background: #fafafa;
			}
			#adminframe .list .item a {
				display: block;
			}
			#adminframe .list .item .name {
				color:#CD4C0F;
			}
			#adminframe .list .item.current > a .name {
				font-weight: bold;
			}

			/*TODO drag&drop*/

			#adminframe .listhead,
			#adminframe .list .item {
				padding-left: 1.5em;
			}
			#adminframe .list .item {
				position: relative;
				cursor: move;
			}
			#adminframe .list .item:before {
				content: "≡";
				line-height: 0;
				position: absolute;
				top: 1.35em;
				left: .5em;
				color: #cacaca;
			}
			#adminframe .list .item:after {
				content: "≡";
				padding-left: .5em;
				color: #CD4C0F;
				display: block;
				height: 0;
				width: 100%;
				position: relative;
				left: -1.5em;
				opacity: .5;
				-webkit-transition: all .3s ease;
				   -moz-transition: all .3s ease;
					-ms-transition: all .3s ease;
					 -o-transition: all .3s ease;
						transition: all .3s ease;
			}
			#adminframe .list .item.overin:after,
			#adminframe .list .item.over:after {
				height: 2.5em;
				border: 1px dotted #CD4C0F;
			}
			#adminframe .list .item.overin:after {
				left: 1.5em;
			}
			#adminframe .list .item.dragged {
				opacity: .5;
			}
			#adminframe .list.dragged{
				margin-bottom: .5em;
			}

			#adminframe .delzone {
				display: inline-block;
				margin-top: 1em;
				height: 2.6em;
				width: 20%;
				position: absolute;
				right: 2.5%;
				border: 1px dashed #cacaca;
				opacity: 0;
			}
			#adminframe .delzone.show {
				opacity: 1;
			}
			#adminframe .delzone.over {
				border-width: 2px;
			}



			#adminframe .fieldslist { margin:0; padding:0; list-style:none;}
			#adminframe .fieldslist li {display: inline; margin: 0 .5em .5em 0;}
			#adminframe .fieldslist li.locked {font-style:italic;}
			#adminframe .fieldslist .box,
			#adminframe .fieldslist form,
			#adminframe .fieldslist li input { display: inline; margin: 0;}
			#adminframe .fieldslist li input { font-size: 1em; margin-right: 0px;}


			#adminframe .box {
				display: inline-block;
				border: 1px solid #cacaca; color:#555;
				margin: .2em 0; padding: .3em .4em;
				background: #fff;
				box-shadow: 1px 1px 0 #fff;
			}

			/* FORMS */

			#adminframe #loginForm {
				width: 50%;
				margin: auto;
			}
			#adminframe h1 {
				position: relative;
				font: bold 2em/1.2em Georgia;
				margin: 0 0 .25em 0;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				color: #333;
				text-shadow: 2px 1px 0 #fff;
				-webkit-transition: all 60s linear;
				   -moz-transition: all 60s linear;
					-ms-transition: all 60s linear;
					 -o-transition: all 60s linear;
						transition: all 60s linear;
			}
				#adminframe .saved { color: green; }
				#adminframe .notsaved { color: #CD4C0F; }
				#adminframe .savealert {
					margin-left: .1em;
					opacity: 0;
					color: #CD4C0F;
				}
				#adminframe .notsaved .savealert {
					opacity: 1;
				}
					#adminframe .savealert .msg {
						position: absolute;
						top: .1em;
						font: normal .4em Arial;
						-webkit-transition: font-size 600s ease-in;
						   -moz-transition: font-size 600s ease-in;
							-ms-transition: font-size 600s ease-in;
							 -o-transition: font-size 600s ease-in;
								transition: font-size 600s ease-in;
					}
					#adminframe .notsaved .savealert .msg {
						font-size: .85em;
					}

			#adminframe .field {
				width: 100%;
				display: inline-block;
				line-height: 2em;
				margin-top: .5em;
			}
			#adminframe .basefields .field {
				width: 30%;
				min-width: 0;
				margin-right: 4.5%;
				float: left;
			}
			#adminframe .basefields .field:last-child {
				margin-right: 0;
			}
			#adminframe .basefields .field .input {
				width: 100%;
			}

			#adminframe .label {
				color:#555; font-size:11px; font-weight:bold;
				color: rgba(0,0,0, 0.6);
				text-shadow: 2px 1px 0 #fff;
			}

			/* INPUTS */

			#adminframe .input,
			#adminframe .CodeMirror {
				height: 2.2em;
				width: 100%;
				padding: .4em;

				background: #fff;
				color: #555;
				font: normal 12px/16px "Monaco", "Andale Mono", "Courier New", Courier, mono;
				border: 1px solid #cacaca;
				border-radius: 2px;
				box-shadow: 1px 1px 0 #fff;
			}
			#adminframe button:hover,
			#adminframe .input:hover,
			#adminframe .btn:hover,
			#adminframe button:focus,
			#adminframe .input:focus,
			#adminframe .btn:focus {
				border-top-color: #EBAE32;
			}
			#adminframe button:focus,
			#adminframe .input:focus,
			#adminframe .btn:focus {
				border-color: #EBAE32;
				outline: none;
			}


			/* AREAS */

			#adminframe .field .text,
			#adminframe .field .textarea {
				position: relative;
			}
			#adminframe .field textarea,
			#adminframe .field .shadow {
				position: relative;
				min-height: 2em;
				height: 100%;
				max-height: 15em;
				width: 100%;
				overflow: hidden;
				resize: none;
				font-size: 14px;
				line-height: 18px;
				white-space: pre-wrap;
				word-wrap: break-word;

				-webkit-transition: all .2s ease-out;
				-moz-transition: all .2s ease-out;
				-ms-transition: all .2s ease-out;
				-o-transition: all .2s ease-out;
				transition: all .2s ease-out;
			}
			#adminframe .field textarea {
				position: absolute;
				z-index: 2;
				margin: 0;
			}
			#adminframe .field .multiline textarea:focus {
				overflow-y: auto;
			}
			#adminframe .field:first-child .multiline textarea,
			#adminframe .field:first-child .multiline .shadow {
				width: 105%;
				left: -2.5%;
				padding: 2em 1.5em;
				min-height: 10em;
				max-height: 30em;
				color: #333;
			}
			#adminframe .field:first-child .multiline .shadow {
			}
			#adminframe .page .field:first-child textarea,
			#adminframe .page .field:first-child .shadow,
			#adminframe .page .field:first-child .CodeMirror {
				font: normal 18px/1.4em Georgia, Times, serif;
			}

			#adminframe div.CodeMirror {
				height: auto;
				padding: 0;
			}
			#adminframe div.CodeMirror-scroll {
				max-height: 50em;
			}
			#adminframe .page div.CodeMirror-scroll {
				max-height: 40em;
			}
			#adminframe .CodeMirror + .shadow {
				display: none;
			}
			#adminframe .CodeMirror pre {
				height: 1.4em;
			}


			#adminframe form .preview { margin:3px 0; text-align: center; width: 100%;}
			#adminframe form .preview img{
				max-height: 40%;
				max-width: 100%;
				transition: max-height .5s .3s ease;
				-moz-transition: max-height .5s .3s ease;
				-webkit-transition: max-height .5s .3s ease;
				-o-transition: max-height .5s .3s ease;}
			#adminframe form .preview img:hover {max-height: 100%;}

			/* TOOLBAR */

			#adminframe .toolbar {
				position: relative;
				z-index: 2;
				margin: 0 -2.5%;
				padding: 0 2.5%;
				white-space: nowrap;
				background: #eee;
			}
				#adminframe .toolbar button,
				#adminframe .toolbar .btn,
				#adminframe .images-list {
					-webkit-transition: all .4s ease;
					-moz-transition: all .4s ease;
					-o-transition: all .4s ease;
					transition: all .4s ease;
				}
				#adminframe .toolbar button,
				#adminframe .toolbar .btn {
					padding: .3em .7em;
					font: normal 12px Georgia;
					text-transform: none;
					box-shadow: none;
					height: 2.2em;
					min-width: 2.2em;
					max-width: 9.5em;

					vertical-align: top;
				}
					#adminframe .toolbar button.show,
					#adminframe .toolbar .btn.show,
					#adminframe .toolbar select:focus {
						outline: none;
						opacity: .5;
					}

				#adminframe .toolbar select,
				#adminframe .toolbar .switcher {
					-webkit-appearance: none;
					background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAECAYAAACtBE5DAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFJJREFUeNpi/Hu673945zEGGPjHYsNQtTibgYnJpJCx2vI/XMKqOp/BmIWFkeH///8Mv3+c+T8hJOS/75SL/6GAASwBws839v3f/BoiCMIAAQYAWAEw0VSRwLQAAAAASUVORK5CYII=) no-repeat 92% 55%,
						-webkit-linear-gradient(top, #fff 0%,#f7f7f7 100%);
					background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAECAYAAACtBE5DAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFJJREFUeNpi/Hu673945zEGGPjHYsNQtTibgYnJpJCx2vI/XMKqOp/BmIWFkeH///8Mv3+c+T8hJOS/75SL/6GAASwBws839v3f/BoiCMIAAQYAWAEw0VSRwLQAAAAASUVORK5CYII=) no-repeat 92% 55%,
						-moz-linear-gradient(top, #fff 0%, #f7f7f7 100%);
					background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAECAYAAACtBE5DAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFJJREFUeNpi/Hu673945zEGGPjHYsNQtTibgYnJpJCx2vI/XMKqOp/BmIWFkeH///8Mv3+c+T8hJOS/75SL/6GAASwBws839v3f/BoiCMIAAQYAWAEw0VSRwLQAAAAASUVORK5CYII=) no-repeat 92% 55%,
						-o-linear-gradient(top, #fff 0%,#f7f7f7 100%);
					background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAECAYAAACtBE5DAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFJJREFUeNpi/Hu673945zEGGPjHYsNQtTibgYnJpJCx2vI/XMKqOp/BmIWFkeH///8Mv3+c+T8hJOS/75SL/6GAASwBws839v3f/BoiCMIAAQYAWAEw0VSRwLQAAAAASUVORK5CYII=) no-repeat 92% 55%,
						-ms-linear-gradient(top, #fff 0%,#f7f7f7 100%);
					background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAECAYAAACtBE5DAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFJJREFUeNpi/Hu673945zEGGPjHYsNQtTibgYnJpJCx2vI/XMKqOp/BmIWFkeH///8Mv3+c+T8hJOS/75SL/6GAASwBws839v3f/BoiCMIAAQYAWAEw0VSRwLQAAAAASUVORK5CYII=) no-repeat 92% 55%,
						linear-gradient(top, #fff 0%,#f7f7f7 100%);
				}
				#adminframe .toolbar .select {
					display: inline-block;
					vertical-align: top;
				}
					#adminframe .toolbar .select button {
						display: block;
						min-width: 8em;
						margin-bottom: 0;
					}
					#adminframe .toolbar .options {
						position: absolute;
						overflow: hidden;
						z-index: 9;

						max-height: 0;
						-webkit-transition: max-height .3s ease;
						-moz-transition: max-height .3s ease;
						-o-transition: max-height .3s ease;
						transition: max-height .3s ease;
					}
					#adminframe .toolbar .switcher.show + .options {
						max-height: 10em;
					}
						#adminframe .toolbar .options button {
							border-top: 0;
							margin-top: 0;
						}

				#adminframe .toolbar input {
					font-family: Arial;
					-webkit-appearance: none;
				}
				#adminframe #insert_url {
					width: 5em;
				}
				#adminframe #insert_url:focus {
					width: 15em;
					max-width: 15em;
					background: white;
				}
				#adminframe .images-list {
					max-height: 0;
					margin: 0 -1% 0 -1%;
					overflow-y: hidden;
					overflow-x: hidden;
					white-space: nowrap;
					opacity: 0;
					line-height: 0;
				}
					#adminframe .images-switcher.show + .images-list {
						padding-bottom: 1em;
						max-height: 300px;
						overflow-x: auto;
						opacity: 1;
					}
					#adminframe .toolbar .image {
						display: inline-block;
						line-height: 0;
						overflow: hidden;
						cursor: pointer;
						background-position: 50%;

						border-right: 2px solid #555;
						max-width: 15%;
						-webkit-transition: all .2s ease;
					}
					#adminframe .toolbar .image:last-child {
						border-right: none;
					}
					#adminframe .toolbar .image:hover,
					#adminframe .toolbar .image:last-child {
						max-width: 24%;
					}
					#adminframe .toolbar img {
						visibility: hidden;
					}

			/* MESSAGES */

			@-webkit-keyframes appear { from { opacity: 0; } }
			@-moz-keyframes appear { from { opacity: 0; } to { opacity: 1; } }
			@-ms-keyframes appear { from { opacity: 0; } to { opacity: 1; } }
			@-o-keyframes appear { from { opacity: 0; } to { opacity: 1; } }
			@keyframes appear { from { opacity: 0; } to { opacity: 1; } }

			#adminframe .messages {
				min-height: 3em;
				overflow: auto;
				padding-top: 1em;
				-webkit-animation: appear 1s 1 ease-in-out;
				-moz-animation: appear 1s 1 ease-in-out;
				-ms-animation: appear 1s 1 ease-in-out;
				-o-animation: appear 1s 1 ease-in-out;
				animation: appear 1s 1 ease-in-out;
			}
				#adminframe .messages .msg {
					padding: 0;
					border-left: 2px solid #ccc;
					border-right: 2px solid #ccc;
					overflow: hidden;
					max-height: 10em;

					-webkit-transition: all .5s ease;
					   -moz-transition: all .5s ease;
						-ms-transition: all .5s ease;
						 -o-transition: all .5s ease;
							transition: all .5s ease;
				}
				#adminframe .messages .msg.hide {
					opacity: 0;
					max-height: 0;
				}
					#adminframe .messages h1 {font-weight:bold;}
					#adminframe .messages h1,
					#adminframe .messages p {
						display: inline;
						margin: .2em .5em;
						font-size:1em;
					}
					#adminframe .messages form,
					#adminframe .messages input {
						display: inline-block;
						margin: 0;
						line-height: 1em;font-weight:bold;
					}

					#adminframe .messages .error { border-color: #E7B69F; }
					#adminframe .messages .error h1 { color: #c00; }

					#adminframe .messages .info { border-color: #95BE95; }
					#adminframe .messages .info h1 { color: green; }

					#adminframe .messages .close {
						position: absolute;
						right: 3%;
					}

			-->
		</style>
	</head>
	<body>
		<aside id="adminframe">
			<header>
				<div class="close">
					<?php echo $thiis->parse_link(PAGENAME, $thiis->word('close')) ?>
				</div>
				<div class="version">
					<a href="<?php echo THIISURL ?>">thiis</a>
					v<?php echo date('y.m.d', $thiis->version) ?>
				</div>
				<?php
				// logout link
				if(isset($thiis->visitor->name)): ?>
				<div class="logout">
					<a href="?logout"><?php echo $thiis->word('logout') ?></a>
					(<?php echo $thiis->visitor->name ?>)
				</div>
				<?php endif; ?>
			</header>
			<?php
			// LOGIN
			if(!isset($thiis->visitor->name)):
				if($firstlogin = !$thiis->get('user'))
					echo $thiis->admin_msg('firstlogin', 'info');
				echo $thiis->admin_form_login(false);
			?>

			<?php
			// CONTENT
			else:
			?>
			<nav role="navigation">
				<?php echo $thiis->admin_menu() ?>
			</nav>
			<aside class="messages">
				<?php echo $thiis->infos ?>
			</aside>
			<main class="content">
				<?php
				$type = $thiis->admin_current();
				switch($type) {
					case false :	break;
					case 'data' :	echo $thiis->admin_management(); break;
					case 'file' :	echo $thiis->admin_management_file(); break;
					default : 		echo $thiis->admin_management_data($type); break;
				}
				?>
			</main>
			<?php
			endif; // END CONTENT
			?>
		</aside>

		<?php
		// CodeMirror
		if($cm = $thiis->setting("codemirror_path")):
		?>
		<link rel="stylesheet" href="<?php echo $cm ?>/lib/codemirror.css">
		<script src="<?php echo $cm ?>/lib/codemirror.js"></script>
		<script src="<?php echo $cm ?>/mode/php/php.js"></script>
		<script src="<?php echo $cm ?>/mode/css/css.js"></script>
		<script src="<?php echo $cm ?>/mode/xml/xml.js"></script>
		<script src="<?php echo $cm ?>/mode/javascript/javascript.js"></script>
		<script src="<?php echo $cm ?>/mode/clike/clike.js"></script>
		<script>
			form = document.querySelector('#adminframe main form');
			var areas = form.querySelectorAll('.textarea textarea');
			var type = form.querySelector('main form input[name=data_type]').value;
			for(var i in areas)
				CodeMirror.fromTextArea(areas[i], {
					lineNumbers: true,
					matchBrackets: true,
					mode: type == 'style' ? 'text/css' : 'application/x-httpd-php',
					indentUnit: 4,
					indentWithTabs: true,
					lineWrapping: true,
					tabMode: "shift",
					viewportMargin: 20,
					extraKeys: {
						"Ctrl-S": function() { form.querySelector('.btn.edit').click(); },
						"Ctrl-P": function() { form.querySelector('.btn.view').click(); }
					  }
				});
		</script>
		<?php
		// Default scripts
		else:
		?>
		<script type="text/javascript">
			// cross-browser event
			function efix(e) {
				e = e || window.event;
				e.target = e.target || e.srcElement || e.originalTarget;
				e.keyCode = e.keyCode || e.wich;
				return e;
			}
			// cross-browser eventListeners
			function listen(el, type, listener, useCapture) {
				if(el.addEventListener){
					el.addEventListener(type, listener, useCapture);
				} else if (el.attachEvent) {
					el.attachEvent('on' + type, listener);
				}
			}
			function listenAll(els, type, listener, useCapture) {
				for(var i=0, el; el=els[i]; i++) {
					listen(el, type, listener, useCapture);
				}
			}
			function addClass(el, cl){
				el.className += ' '+cl;
			}
			function removeClass(el, cl){
				var r = new RegExp('((^| +)'+cl+')( |$)', 'g'),
					c = el.className.match(r);
				el.className = el.className.replace(r, '$3');
				return c;
			}
			function toggleClass(el, cl){
				if(!removeClass(el, cl)) addClass(el, cl);
			}

			function ajaxRequest() {
				if(window.ActiveXObject){
					for(var mode in ["Msxml2.XMLHTTP", "Microsoft.XMLHTTP"]){
						try{ return new ActiveXObject(mode) }
						catch(e){}
					}
				}
				if (window.XMLHttpRequest) return new XMLHttpRequest()
				return false
			}

			// selection tools
			function getSelection(e) {
				return {
					start: e.selectionStart,
					end: e.selectionEnd,
					value: e.value.slice(e.selectionStart, e.selectionEnd)
				};
			}
			function setSelection(e, start, end) {
				e.focus();
				e.selectionStart = start;
				e.selectionEnd = end;
				return getSelection(e);
			}
			function replaceSelection(e, string) {
				var selection = getSelection(e),
					txtEvt = document.createEvent('TextEvent');

				txtEvt.initTextEvent('textInput', true, true, null, string);
				e.dispatchEvent(txtEvt);

				return setSelection(e, selection.start, selection.start + string.length);
			}
			function extendSelection(e, extendTo, ifRangeSelectToo) {
				var selection = getSelection(e);

				if(extendTo === undefined
				|| (ifRangeSelectToo === undefined && selection.value.length))
					return selection;

				var before = e.value.substr(0, selection.start),
					after = e.value.substr(selection.end),
					linestart = 0;

				if(extendTo == ' ') var linestart = before.lastIndexOf('\n') + 1;

				var lextend = before.substr(linestart).lastIndexOf(extendTo) + linestart;
				if (lextend == -1) lextend = 0;

				if(extendTo == ' ') var rextend = after.search(/(\n| )/);
				else var rextend = after.indexOf(extendTo);
				if (rextend == -1) rextend = e.value.length - selection.end;
				return setSelection(e, lextend + extendTo.length, selection.end + rextend);
			}
			function wrapSelection(e, left, right) {
				var selection = getSelection(e),
					txtEvt = document.createEvent('TextEvent');

				txtEvt.initTextEvent('textInput', true, true, null, left + selection.value + right);
				e.dispatchEvent(txtEvt);

				return setSelection(e, selection.start + left.length, selection.end + left.length);
			}
		</script>
		<?php
		// EDITION script
		if(!empty($thiis->get['edit']) || isset($thiis->get['add'])):
		?>
		<script type="text/javascript">

			main = document.querySelector('#adminframe main');
			title = main.querySelector('h1');
			form = main.querySelector('form');

			// not-saved alert
			var fields = form.querySelectorAll('.input');
			listenAll(fields, 'input', function() {
				title.className = 'notsaved';
			});

			// close messages
			var close = document.querySelectorAll(".close");
			listenAll(close, 'click', function(e) {
				e = efix(e);
				e.preventDefault();
				addClass(e.target.parentNode, 'hide');
				return false;
			});

			// general shortcuts
			listen(document, 'keydown', function(e) {
				e = efix(e);
				var tgtType = e.target.tagName.toLowerCase();

				// close messages with echap
				var close = document.querySelector('.messages .close');
				if(e.keyCode == 27 && close) {
					close.click();
					return false;
				}
				else if(e.ctrlKey) {
					// undo with ctrl + z
					var undo = document.querySelector('.messages .undo');
					if(e.keyCode == 90 && undo && tgtType != "input" && tgtType != "textarea") {
						undo.click();
						return false;
					}
					// save with ctrl + s
					var edit = form.querySelector('.btn.edit');
					if(e.keyCode == 83 && edit) {
						edit.click();
						return false;
					}
					// preview with ctrl + p
					var view = form.querySelector('.btn.view');
					if(e.keyCode == 80 && view) {
						view.click();
						return false;
					}
				}
			});


			// Toolbar

			var imageDragStart = function(event, path) {
				var icon = document.createElement("img");
				icon.src = "?image="+path+"&h=200";
				event.dataTransfer.setDragImage(icon, -10, -10);
				event.dataTransfer.setData("Text", "{{"+path+"}}");
			}

			<?php
			$page_insert = '';
			$pages = $thiis->find('page');
			foreach($pages as $page)
				$page_insert .= "<option value=\"$page\">$page - {$thiis->page_title($page)}</option>";
			?>
			var toolbar = document.createElement('div');
			toolbar.className = 'toolbar';
			toolbar.innerHTML = ''+
				'<button data-tag="**"><b>b</b></button>'+
				'<button data-tag="//"><em>i</em></button>'+
				'<button data-tag="__"><u>u</u></button>'+
				'<button data-tag="--"><del>d</del></button>'+
				'<select id="insert_page" class="btn">'+
					'<option hidden>Link to page</option>'+
					<?php echo "'$page_insert'+"; ?>
				'</select>'+
				'<input id="insert_url" class="btn" type="text" value="http://" />'+
				'<span class="select">'+
					'<button class="switcher">≡ Lists</button>'+
					'<span class="options">'+
						'<button data-list="*">&bull; Unordered</button>'+
						'<button data-list="-">1. Ordered</button>'+
					'</span>'+
				'</span>'+
				'<span class="select">'+
					'<button class="switcher"># Titles</button>'+
					'<span class="options">'+
						'<button data-tag="\n#########\n">Main title</button>'+
						'<button data-tag="\n=========\n">Subtitle</button>'+
					'</span>'+
				'</span>'+
				'<button class="images-switcher">☐ Images</button>'+
				'<div class="images-list"></div>';

			main.insertBefore(toolbar, form);

			// Toolbar switchs events

			switchers = toolbar.querySelectorAll('.switcher');
			listen(document, 'click', function(e) {
				var e = efix(e);
				for(var i=0, s; s=switchers[i]; i++){
					if(s != e.target) removeClass(s, 'show');
					else addClass(s, 'show');
				}
			});

			// Areas

			areas = form.querySelectorAll('.field textarea');

			function populateShadow(area) {
				var parent = area.parentNode;
				var shadow = area.nextElementSibling;
				var val = area.value.replace(/</g, '&lt;');
				shadow.innerHTML = val;
				if(val.indexOf("\n") != -1) {
					shadow.innerHTML += '\n\n';
					parent.className = 'textarea multiline';
				}
				else if(removeClass(parent, 'multiline'))
					shadow.style.height = 'auto';
			}

			// populate shadow on start and edit
			for(var i=0, area; area=areas[i]; i++) {
				populateShadow(area);
				var populate = function(e) { populateShadow(efix(e).target); }
				listen(area, 'keyup', populate);
				listen(area, 'keydown', populate);
			}

			// store last selected (or first)
			currArea = areas[0];
			listenAll(areas, 'focus', function(e) {
				currArea = efix(e).target;
			});

			// resize main area to fit max space
			if(currArea.value.indexOf("\n") != -1) {
				var emptySpace =  adminframe.offsetHeight - (form.offsetTop + form.offsetHeight),
					shadow = currArea.nextElementSibling;
				shadow.style.height = shadow.offsetHeight + emptySpace + 'px';
				shadow.style.maxHeight = currArea.style.maxHeight = shadow.style.height;
			}

			// tabulations
			listenAll(areas, 'keydown', function(e)
			{
				e = efix(e);
				if(e.keyCode != 9) return;
				e.preventDefault();

				var sel = getSelection(currArea);

				// insert unique
				if(sel.value == '' && !e.shiftKey)
					return wrapSelection(currArea, '\t', '');

				// extend selection to full lines
				var extendedSel = extendSelection(currArea, '\n', true),
					extendedSel = setSelection(currArea, extendedSel.start-1, extendedSel.end);

				// add or remove tabs at every newline and count replacements
				var search = new RegExp('\n' + (e.shiftKey ? '\t' : ''), 'g'),
					replace = '\n' + (e.shiftKey ? '' : '\t'),
					nbrInside = (sel.value.match(search)||[]).length,
					nbrBefore = (extendedSel.value.match(search)||[]).length - nbrInside;
				replaceSelection(currArea, extendedSel.value.replace(search, replace))

				// update original selection
				if(!e.shiftKey)
					setSelection(currArea, sel.start + nbrBefore, sel.end + nbrBefore + nbrInside);
				else
					setSelection(currArea, sel.start - nbrBefore, sel.end - nbrBefore - nbrInside);
			});

			// TOOLBAR insertions

			// basic
			var insertBtns = toolbar.querySelectorAll('button[data-tag]');
			listenAll(insertBtns, 'click', function(e) {
				var e = efix(e),
					tag = e.target.getAttribute('data-tag') || e.target.parentNode.getAttribute('data-tag');
				tag = tag.replace(/\\n/g, "\n");

				extendTo = tag.indexOf('\n') != -1 ? '\n' : ' ';

				extendSelection(currArea, extendTo);
				wrapSelection(currArea, tag, tag);
				populateShadow(currArea);
			});

			// links
			var insert_link = function(e) {
				var e = efix(e);

				// only entry key for text input
				if(e.target.id == "insert_url" && e.keyCode != 13) return;
				e.preventDefault();

				var content = e.target.value;
				if(!content) return;

				// reset input
				if(e.target.nodeName.toLowerCase() == 'select') e.target.selectedIndex = 0;
				else e.target.value = 'http://';

				extendSelection(currArea, ' ');
				var selection = getSelection(currArea);
				if(selection.value.length)
					content += '>';

				wrapSelection(currArea, '[[' + content, ']]');
				populateShadow(currArea);
			}
			var urlInput = document.getElementById('insert_url');
			listen(urlInput, 'click', function(e) {
				e = efix(e);
				setSelection(e.target, e.target.value.length, e.target.value.length);
			});
			urlInput.onkeypress = insert_link;
			document.getElementById('insert_page').onchange = insert_link;

			// lists
			var listBtns = toolbar.querySelectorAll('button[data-list]');
			listenAll(listBtns, 'click', function(e) {
				e = efix(e);
				var type = e.target.getAttribute('data-list') || e.target.parentNode.getAttribute('data-list'),
					sel = extendSelection(currArea, '\n', true),
					sel = setSelection(currArea, sel.start-1, sel.end),
					val = sel.value.replace(/\n[ \t]?([ \t]*)/g, '\n$1\t'+type+' '),
					sel = replaceSelection(currArea, val);
				setSelection(currArea, sel.start+1, sel.end);
			});

			<?php
			// images list for toolbar quick insert
			$image_insert = '';
			$images = $thiis->file_get($thiis->path(), 'image');
			foreach($images as $path => $image) {
				$image_insert .= "<div class='image' style='background-image:url(?image=$path&h=200)' ";
				$image_insert .= "ondragstart='imageDragStart(event, \\\"$path\\\"); this.style.opacity=.3;' ";
				$image_insert .= "ondragend='this.style.opacity=1' ";
				$image_insert .= "draggable='true'><img src='?image=$path&h=200'/></div>";
			}
			?>
			// images load and switch
			imgSwitch = toolbar.querySelector('.images-switcher');
			listen(imgSwitch, 'click', function() {
				var tgt = toolbar.querySelector('.images-list');
				if(tgt.innerHTML == "")
					tgt.innerHTML = <?php echo '"'.$image_insert.'"' ?>;
				toggleClass(imgSwitch, 'show');
			});

		</script>
		<?php
		// LISTING script
		else:
		?>
		<script type="text/javascript">

			meta = document.querySelector('meta[name=thiis]');
			main = document.querySelector('#adminframe main');
			data_type = meta.getAttribute('data_type');


			// ITEMS LIST columns filtering

			if((btn = main.querySelector("#columnsFilter>.btn"))) {
				btn.style.display = 'none';
				var boxes = main.querySelectorAll("#columnsFilter>label>input");
				listenAll(boxes, 'click', function(e) {
					e = efix(e);
					e.target.form.submit();
				});
			}

			// DRAG & DROP

			itemName = function(i) {
				return i.querySelector('.column.name').innerHTML;
			}
			updateMsgAndView = function(r)
			{
				r.onreadystatechange = function() {
					if(r.readyState == 4) {
						console.log(r.responseText);
						// make element from response for DOM traversing
						var responseHTML = document.createElement('div');
						responseHTML.innerHTML = r.responseText;

						// get some parts
						var new_msgs = responseHTML.querySelector('#adminframe .messages');
						var new_site = responseHTML.querySelector('#siteframe');

						// replace
						document.querySelector('#adminframe .messages').innerHTML = new_msgs.innerHTML;
						document.querySelector('#siteframe').innerHTML = new_site.innerHTML;
					}
				}
			}

			list = main.querySelectorAll('.list');
			items = main.querySelectorAll('.list .item');
			items_core = main.querySelectorAll('.list .item span');

			delzone = document.createElement('div');
			delzone.className = 'delzone';
			main.appendChild(delzone);
			listen(delzone, 'dragenter', function(e) {
				if(dragged == undefined) return;
				addClass(this, 'over');
			});
			listen(delzone, 'dragover', function(e) {
				e = efix(e);
				e.preventDefault();
				return false;
			});
			listen(delzone, 'dragleave', function(e) {
				if(dragged == undefined) return;
				removeClass(this, 'over');
			});
			listen(delzone, 'drop', function(e)
			{
				if(dragged == undefined) return;
				e = efix(e);
				e.preventDefault();

				removeClass(this, 'over');

				// list all childs items names
				var names = '';
				[].forEach.call(dragged.querySelectorAll('.column.name'), function(n) {
					names += n.innerHTML + ' & ';
				});
				names = names.slice(0, -3);

				// confirm
				var d = dragged;
				var confirmMsg = confirm(<?php echo '\''.$thiis->word('del').' \''; ?> + names + ' ?');
				if(!confirmMsg) return;

				// delete
				d.parentNode.removeChild(d);

				var r = new ajaxRequest();
				updateMsgAndView(r);
				var parameters = 'action=del'
					+ '&newname=' + itemName(d)
					+ '&data_type=' + encodeURIComponent(data_type);

				r.open('POST', '', true);
				r.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				r.send(parameters);
			});


			listenAll(items, 'dragstart', function(e) {
				dragged = this;
				addClass(this, 'dragged');
				addClass(delzone, 'show');

				e = efix(e);
				e.stopPropagation();
				e.dataTransfer.effectAllowed = 'move';
			});
			listenAll(items, 'dragover', function(e) {
				e = efix(e);
				e.preventDefault();
				e.stopPropagation();
				e.dataTransfer.dropEffect = 'move';
				return false;
			});
			listenAll(items, 'dragenter', function(e) {
				if(dragged == undefined || this == dragged)
					return;
				e = efix(e);
				e.stopPropagation();
				addClass(this, 'over');
			});
			listenAll(items, 'dragleave', function(e) {
				e = efix(e);
				e.stopPropagation();
				removeClass(this, 'over');
			});
			endDrag = function(e) {
				removeClass(dragged, 'dragged');
				removeClass(delzone, 'show');
				[].forEach.call(items, function (item) {
					removeClass(item, 'over');
					removeClass(item, 'overin');
				});
				dragged = undefined;
			}
			arrangeItem = function(o)
			{
				var	parameters = 'action=arrange'
						+'&data_type=' + encodeURIComponent(data_type)
						+'&source=' + itemName(dragged)
						+'&target='+ itemName(o.after)
						+'&parent=' + (o.parent !== null ? itemName(o.parent) : '');

				var r = new ajaxRequest();
				updateMsgAndView(r);
				r.open('POST', '', true);
				r.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				r.send(parameters);
			}
			listenAll(items, 'drop', function(e) {
				if(dragged == undefined) return;
				e = efix(e);
				e.stopPropagation();

				if(this != dragged)
				{
					var parentItem = this.parentNode.parentNode;
					if(parentItem.tagName.toLowerCase() != 'li') parentItem = null;
					arrangeItem({after:this, parent:parentItem});

					if(this.nextSibling)
						this.parentNode.insertBefore(dragged, this.nextSibling);
					else this.parentNode.appendChild(dragged);
				}
				endDrag();
				return false;
			});
			listenAll(items, 'dragend', endDrag);


			listenAll(items_core, 'dragenter', function(e) {
				var item = this.parentNode.parentNode;
				if(dragged == undefined || item == dragged)
					return;

				e = efix(e);
				e.stopPropagation();
				addClass(item, 'overin');
			});
			listenAll(items_core, 'dragleave', function(e) {
				e = efix(e);
				e.stopPropagation();
				removeClass(this.parentNode.parentNode, 'overin');
			});
			listenAll(items_core, 'drop', function(e) {
				if(dragged == undefined) return;
				e = efix(e);
				e.stopPropagation();

				var target = this.parentNode.parentNode;
				if(target != dragged){
					var childsList = target.querySelector('.list');
					if(childsList) {
						var lastChild = target.querySelector('.list>li:last-child');
						arrangeItem({after:lastChild, parent:target});
					} else {
						childsList = document.createElement('ul');
						childsList.className = 'list';
						target.appendChild(childsList);
						arrangeItem({after:target, parent:target});
					}
					childsList.appendChild(dragged);
				}
				endDrag();
				return false;
			});
			listenAll(items_core, 'dragend', endDrag);


		</script>
		<?php
		endif;
		endif;
		// END ADMIN SCRIPTS

		// SITEFRAME
		if($site_position):
		?>
		<section id="siteframe">
			<div id="html">
				<?php
				// Extract site body
				$site_body_begin = strpos($output, '<body');
				$site_body_end = strrpos($output, '</body>');
				$site_body = substr($output, $site_body_begin + 5, $site_body_end);
				$site_body = '<div id="body"' . $site_body . '</div>';

				// remove scripts
				$site_body = preg_replace('`<script[^>]*>.*?</script>`i', '', $site_body);

				// Replace pages links by administration links with page previewed
				if($thiis->setting('use_fancy_url')) {
					$page_pattern = '`(<a href="[^"]+/[^"#/]*)((?:#[^"]+)?")`';
					$del = '?';
				} else {
					$page_pattern = '`(<a href="[^\?]+\?page=[^"#]*)((?:#[^"]+)?")`';
					$del = '&';
				}
				echo preg_replace($page_pattern, '\\1'.$del.'admin='.$type.'&edit='.@$thiis->get['edit'].'\\2', $site_body);
				?>
			</div>
		</section>
		<?php
		endif;
		// END SITEFRAME
		?>
	</body>
</html>
