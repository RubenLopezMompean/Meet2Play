<?php

/* plupload.html */
class __TwigTemplate_e67f1d6f7428d69471df0370539165cd505dde99d4eca73c3f6e98a923aac70f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
//<![CDATA[
phpbb.plupload = {
\ti18n: {
\t\t'b': '";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("BYTES_SHORT"), "js");
        echo "',
\t\t'kb': '";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("KB"), "js");
        echo "',
\t\t'mb': '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("MB"), "js");
        echo "',
\t\t'gb': '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("GB"), "js");
        echo "',
\t\t'tb': '";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("TB"), "js");
        echo "',
\t\t'Add Files': '";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES"), "js");
        echo "',
\t\t'Add files to the upload queue and click the start button.': '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES_TO_QUEUE"), "js");
        echo "',
\t\t'Close': '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_CLOSE"), "js");
        echo "',
\t\t'Drag files here.': '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_DRAG"), "js");
        echo "',
\t\t'Duplicate file error.': '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_DUPLICATE_ERROR"), "js");
        echo "',
\t\t'File: %s': '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_FILE"), "js");
        echo "',
\t\t'File: %s, size: %d, max file size: %d': '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_FILE_DETAILS"), "js");
        echo "',
\t\t'File count error.': '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_COUNT"), "js");
        echo "',
\t\t'File extension error.': '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_EXTENSION_ERROR"), "js");
        echo "',
\t\t'File size error.': '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_SIZE_ERROR"), "js");
        echo "',
\t\t'File too large:': '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_TOO_LARGE"), "js");
        echo "',
\t\t'Filename': '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_FILENAME"), "js");
        echo "',
\t\t'Generic error.': '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_GENERIC_ERROR"), "js");
        echo "',
\t\t'HTTP Error.': '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_HTTP_ERROR"), "js");
        echo "',
\t\t'Image format either wrong or not supported.': '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_IMAGE_FORMAT"), "js");
        echo "',
\t\t'Init error.': '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_INIT_ERROR"), "js");
        echo "',
\t\t'IO error.': '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_IO_ERROR"), "js");
        echo "',
\t\t'Invalid file extension:': '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_INVALID_EXT"), "js");
        echo "',
\t\t'N/A': '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_NOT_APPLICABLE"), "js");
        echo "',
\t\t'Runtime ran out of available memory.': '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_RUNTIME_MEMORY"), "js");
        echo "',
\t\t'Security error.': '";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_SECURITY_ERROR"), "js");
        echo "',
\t\t'Select files': '";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_SELECT_FILES"), "js");
        echo "',
\t\t'Size': '";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_SIZE"), "js");
        echo "',
\t\t'Start Upload': '";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_START_UPLOAD"), "js");
        echo "',
\t\t'Start uploading queue': '";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_START_CURRENT_UPLOAD"), "js");
        echo "',
\t\t'Status': '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_STATUS"), "js");
        echo "',
\t\t'Stop Upload': '";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_STOP_UPLOAD"), "js");
        echo "',
\t\t'Stop current upload': '";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_STOP_CURRENT_UPLOAD"), "js");
        echo "',
\t\t\"Upload URL might be wrong or doesn't exist.\": '";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_UPLOAD_URL"), "js");
        echo "',
\t\t'Uploaded %d/%d files': '";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_UPLOADED"), "js");
        echo "',
\t\t'%d files queued': '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_FILES_QUEUED"), "js");
        echo "',
\t\t'%s already present in the queue.': '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("PLUPLOAD_ALREADY_QUEUED"), "js");
        echo "'
\t},
\tconfig: {
\t\truntimes: 'html5',
\t\turl: '";
        // line 45
        echo (isset($context["S_PLUPLOAD_URL"]) ? $context["S_PLUPLOAD_URL"] : null);
        echo "',
\t\tmax_file_size: '";
        // line 46
        echo (isset($context["FILESIZE"]) ? $context["FILESIZE"] : null);
        echo "b',
\t\tchunk_size: '";
        // line 47
        echo (isset($context["CHUNK_SIZE"]) ? $context["CHUNK_SIZE"] : null);
        echo "b',
\t\tunique_names: true,
\t\tfilters: [";
        // line 49
        echo (isset($context["FILTERS"]) ? $context["FILTERS"] : null);
        echo "],
\t\t";
        // line 50
        echo (isset($context["S_RESIZE"]) ? $context["S_RESIZE"] : null);
        echo "
\t\theaders: {'X-PHPBB-USING-PLUPLOAD': '1', 'X-Requested-With': 'XMLHttpRequest'},
\t\tfile_data_name: 'fileupload',
\t\tmultipart_params: {'add_file': '";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("ADD_FILE"), "js");
        echo "'},
\t\tform_hook: '#postform',
\t\tbrowse_button: 'add_files',
\t\tdrop_element : 'message',
\t},
\tlang: {
\t\tERROR: '";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("ERROR"), "js");
        echo "',
\t\tTOO_MANY_ATTACHMENTS: '";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb')->lang("TOO_MANY_ATTACHMENTS"), "js");
        echo "',
\t},
\torder: '";
        // line 62
        echo (isset($context["ATTACH_ORDER"]) ? $context["ATTACH_ORDER"] : null);
        echo "',
\tmaxFiles: ";
        // line 63
        echo (isset($context["MAX_ATTACHMENTS"]) ? $context["MAX_ATTACHMENTS"] : null);
        echo ",
\tdata: ";
        // line 64
        echo (isset($context["S_ATTACH_DATA"]) ? $context["S_ATTACH_DATA"] : null);
        echo ",
}
//]]>
</script>
";
        // line 68
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/plupload/plupload.full.min.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('4');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 69
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/javascript/plupload.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('4');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);    }

    public function getTemplateName()
    {
        return "plupload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 69,  232 => 68,  225 => 64,  221 => 63,  217 => 62,  212 => 60,  208 => 59,  199 => 53,  193 => 50,  189 => 49,  184 => 47,  180 => 46,  176 => 45,  169 => 41,  165 => 40,  161 => 39,  157 => 38,  153 => 37,  149 => 36,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* //<![CDATA[*/
/* phpbb.plupload = {*/
/* 	i18n: {*/
/* 		'b': '{LA_BYTES_SHORT}',*/
/* 		'kb': '{LA_KB}',*/
/* 		'mb': '{LA_MB}',*/
/* 		'gb': '{LA_GB}',*/
/* 		'tb': '{LA_TB}',*/
/* 		'Add Files': '{LA_PLUPLOAD_ADD_FILES}',*/
/* 		'Add files to the upload queue and click the start button.': '{LA_PLUPLOAD_ADD_FILES_TO_QUEUE}',*/
/* 		'Close': '{LA_PLUPLOAD_CLOSE}',*/
/* 		'Drag files here.': '{LA_PLUPLOAD_DRAG}',*/
/* 		'Duplicate file error.': '{LA_PLUPLOAD_DUPLICATE_ERROR}',*/
/* 		'File: %s': '{LA_PLUPLOAD_FILE}',*/
/* 		'File: %s, size: %d, max file size: %d': '{LA_PLUPLOAD_FILE_DETAILS}',*/
/* 		'File count error.': '{LA_PLUPLOAD_ERR_FILE_COUNT}',*/
/* 		'File extension error.': '{LA_PLUPLOAD_EXTENSION_ERROR}',*/
/* 		'File size error.': '{LA_PLUPLOAD_SIZE_ERROR}',*/
/* 		'File too large:': '{LA_PLUPLOAD_ERR_FILE_TOO_LARGE}',*/
/* 		'Filename': '{LA_PLUPLOAD_FILENAME}',*/
/* 		'Generic error.': '{LA_PLUPLOAD_GENERIC_ERROR}',*/
/* 		'HTTP Error.': '{LA_PLUPLOAD_HTTP_ERROR}',*/
/* 		'Image format either wrong or not supported.': '{LA_PLUPLOAD_IMAGE_FORMAT}',*/
/* 		'Init error.': '{LA_PLUPLOAD_INIT_ERROR}',*/
/* 		'IO error.': '{LA_PLUPLOAD_IO_ERROR}',*/
/* 		'Invalid file extension:': '{LA_PLUPLOAD_ERR_FILE_INVALID_EXT}',*/
/* 		'N/A': '{LA_PLUPLOAD_NOT_APPLICABLE}',*/
/* 		'Runtime ran out of available memory.': '{LA_PLUPLOAD_ERR_RUNTIME_MEMORY}',*/
/* 		'Security error.': '{LA_PLUPLOAD_SECURITY_ERROR}',*/
/* 		'Select files': '{LA_PLUPLOAD_SELECT_FILES}',*/
/* 		'Size': '{LA_PLUPLOAD_SIZE}',*/
/* 		'Start Upload': '{LA_PLUPLOAD_START_UPLOAD}',*/
/* 		'Start uploading queue': '{LA_PLUPLOAD_START_CURRENT_UPLOAD}',*/
/* 		'Status': '{LA_PLUPLOAD_STATUS}',*/
/* 		'Stop Upload': '{LA_PLUPLOAD_STOP_UPLOAD}',*/
/* 		'Stop current upload': '{LA_PLUPLOAD_STOP_CURRENT_UPLOAD}',*/
/* 		"Upload URL might be wrong or doesn't exist.": '{LA_PLUPLOAD_ERR_UPLOAD_URL}',*/
/* 		'Uploaded %d/%d files': '{LA_PLUPLOAD_UPLOADED}',*/
/* 		'%d files queued': '{LA_PLUPLOAD_FILES_QUEUED}',*/
/* 		'%s already present in the queue.': '{LA_PLUPLOAD_ALREADY_QUEUED}'*/
/* 	},*/
/* 	config: {*/
/* 		runtimes: 'html5',*/
/* 		url: '{S_PLUPLOAD_URL}',*/
/* 		max_file_size: '{FILESIZE}b',*/
/* 		chunk_size: '{CHUNK_SIZE}b',*/
/* 		unique_names: true,*/
/* 		filters: [{FILTERS}],*/
/* 		{S_RESIZE}*/
/* 		headers: {'X-PHPBB-USING-PLUPLOAD': '1', 'X-Requested-With': 'XMLHttpRequest'},*/
/* 		file_data_name: 'fileupload',*/
/* 		multipart_params: {'add_file': '{LA_ADD_FILE}'},*/
/* 		form_hook: '#postform',*/
/* 		browse_button: 'add_files',*/
/* 		drop_element : 'message',*/
/* 	},*/
/* 	lang: {*/
/* 		ERROR: '{LA_ERROR}',*/
/* 		TOO_MANY_ATTACHMENTS: '{LA_TOO_MANY_ATTACHMENTS}',*/
/* 	},*/
/* 	order: '{ATTACH_ORDER}',*/
/* 	maxFiles: {MAX_ATTACHMENTS},*/
/* 	data: {S_ATTACH_DATA},*/
/* }*/
/* //]]>*/
/* </script>*/
/* <!-- INCLUDEJS {T_ASSETS_PATH}/plupload/plupload.full.min.js -->*/
/* <!-- INCLUDEJS {T_ASSETS_PATH}/javascript/plupload.js -->*/
/* */
