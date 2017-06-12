<?php

/* posting_attach_body.html */
class __TwigTemplate_a79151ea4f35101cc5eb449b76ab27750ce5407870b6ecb50d2a1d8541ba76fb extends Twig_Template
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
        echo "<div class=\"panel bg3 panel-container\" id=\"attach-panel\">
\t<div class=\"inner\">

\t<p>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("ADD_ATTACHMENT_EXPLAIN");
        echo " <span class=\"hidden\" id=\"drag-n-drop-message\">";
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_DRAG_TEXTAREA");
        echo "</span></p>

\t<fieldset class=\"fields2\" id=\"attach-panel-basic\">
\t<dl>
\t\t<dt><label for=\"fileupload\">";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("FILENAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<input type=\"file\" name=\"fileupload\" id=\"fileupload\" class=\"inputbox autowidth\" />
\t\t\t<input type=\"submit\" name=\"add_file\" value=\"";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("ADD_FILE");
        echo "\" class=\"button2\" onclick=\"upload = true;\" />
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"filecomment\">";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("FILE_COMMENT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><textarea name=\"filecomment\" id=\"filecomment\" rows=\"1\" cols=\"40\" class=\"inputbox autowidth\">";
        // line 16
        echo (isset($context["FILE_COMMENT"]) ? $context["FILE_COMMENT"] : null);
        echo "</textarea></dd>
\t</dl>
\t</fieldset>

\t<div id=\"attach-panel-multi\" class=\"attach-panel-multi\">
\t\t<input type=\"button\" class=\"button2\" value=\"";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES");
        echo "\" id=\"add_files\" />
\t</div>

\t<div class=\"panel";
        // line 24
        if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attach_row", array()))) {
            echo " hidden";
        }
        echo " file-list-container\" id=\"file-list-container\">
\t\t<div class=\"inner\">
\t\t\t<table class=\"table1 zebra-list fixed-width-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"attach-name\">";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_FILENAME");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-comment\">";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("FILE_COMMENT");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-filesize\">";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_SIZE");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-status\">";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_STATUS");
        echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"responsive-skip-empty file-list\" id=\"file-list\">
\t\t\t\t\t<tr class=\"attach-row\" id=\"attach-row-tpl\">
\t\t\t\t\t\t\t<td class=\"attach-name\">
\t\t\t\t\t\t\t\t<span class=\"file-name ellipsis-text\"></span>
\t\t\t\t\t\t\t\t<span class=\"attach-controls\">
\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("PLACE_INLINE");
        echo "\" class=\"button2 hidden file-inline-bbcode\" />&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("DELETE_FILE");
        echo "\" class=\"button2 file-delete\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-comment\">
\t\t\t\t\t\t\t\t<textarea rows=\"1\" cols=\"30\" class=\"inputbox\"></textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-filesize\">
\t\t\t\t\t\t\t\t<span class=\"file-size\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-status\">
\t\t\t\t\t\t\t\t<span class=\"file-progress\">
\t\t\t\t\t\t\t\t\t<span class=\"file-progress-bar\"></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"file-status\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attach_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attach_row"]) {
            // line 59
            echo "\t\t\t\t\t\t<tr class=\"attach-row\" data-attach-id=\"";
            echo $this->getAttribute($context["attach_row"], "ATTACH_ID", array());
            echo "\">
\t\t\t\t\t\t\t<td class=\"attach-name\">
\t\t\t\t\t\t\t\t<span class=\"file-name ellipsis-text\"><a href=\"";
            // line 61
            echo $this->getAttribute($context["attach_row"], "U_VIEW_ATTACHMENT", array());
            echo "\">";
            echo $this->getAttribute($context["attach_row"], "FILENAME", array());
            echo "</a></span>
\t\t\t\t\t\t\t\t<span class=\"attach-controls\">
\t\t\t\t\t\t\t\t\t";
            // line 63
            if ((isset($context["S_INLINE_ATTACHMENT_OPTIONS"]) ? $context["S_INLINE_ATTACHMENT_OPTIONS"] : null)) {
                echo "<input type=\"button\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PLACE_INLINE");
                echo "\" class=\"button2 file-inline-bbcode\" />&nbsp; ";
            }
            // line 64
            echo "\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"delete_file[";
            echo $this->getAttribute($context["attach_row"], "ASSOC_INDEX", array());
            echo "]\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("DELETE_FILE");
            echo "\" class=\"button2 file-delete\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-comment\">
\t\t\t\t\t\t\t\t<textarea name=\"comment_list[";
            // line 69
            echo $this->getAttribute($context["attach_row"], "ASSOC_INDEX", array());
            echo "]\" rows=\"1\" cols=\"30\" class=\"inputbox\">";
            echo $this->getAttribute($context["attach_row"], "FILE_COMMENT", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t";
            // line 70
            echo $this->getAttribute($context["attach_row"], "S_HIDDEN", array());
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-filesize\">
\t\t\t\t\t\t\t\t<span class=\"file-size\">";
            // line 73
            echo $this->getAttribute($context["attach_row"], "FILESIZE", array());
            echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-status\">
\t\t\t\t\t\t\t\t<span class=\"file-status file-uploaded\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_attach_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 80,  169 => 73,  163 => 70,  157 => 69,  146 => 64,  140 => 63,  133 => 61,  127 => 59,  123 => 58,  103 => 41,  99 => 40,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  66 => 24,  60 => 21,  52 => 16,  47 => 15,  40 => 11,  33 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div class="panel bg3 panel-container" id="attach-panel">*/
/* 	<div class="inner">*/
/* */
/* 	<p>{L_ADD_ATTACHMENT_EXPLAIN} <span class="hidden" id="drag-n-drop-message">{L_PLUPLOAD_DRAG_TEXTAREA}</span></p>*/
/* */
/* 	<fieldset class="fields2" id="attach-panel-basic">*/
/* 	<dl>*/
/* 		<dt><label for="fileupload">{L_FILENAME}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<input type="file" name="fileupload" id="fileupload" class="inputbox autowidth" />*/
/* 			<input type="submit" name="add_file" value="{L_ADD_FILE}" class="button2" onclick="upload = true;" />*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="filecomment">{L_FILE_COMMENT}{L_COLON}</label></dt>*/
/* 		<dd><textarea name="filecomment" id="filecomment" rows="1" cols="40" class="inputbox autowidth">{FILE_COMMENT}</textarea></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* */
/* 	<div id="attach-panel-multi" class="attach-panel-multi">*/
/* 		<input type="button" class="button2" value="{L_PLUPLOAD_ADD_FILES}" id="add_files" />*/
/* 	</div>*/
/* */
/* 	<div class="panel<!-- IF not .attach_row --> hidden<!-- ENDIF --> file-list-container" id="file-list-container">*/
/* 		<div class="inner">*/
/* 			<table class="table1 zebra-list fixed-width-table">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th class="attach-name">{L_PLUPLOAD_FILENAME}</th>*/
/* 						<th class="attach-comment">{L_FILE_COMMENT}</th>*/
/* 						<th class="attach-filesize">{L_PLUPLOAD_SIZE}</th>*/
/* 						<th class="attach-status">{L_PLUPLOAD_STATUS}</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody class="responsive-skip-empty file-list" id="file-list">*/
/* 					<tr class="attach-row" id="attach-row-tpl">*/
/* 							<td class="attach-name">*/
/* 								<span class="file-name ellipsis-text"></span>*/
/* 								<span class="attach-controls">*/
/* 									<input type="button" value="{L_PLACE_INLINE}" class="button2 hidden file-inline-bbcode" />&nbsp;*/
/* 									<input type="button" value="{L_DELETE_FILE}" class="button2 file-delete" />*/
/* 								</span>*/
/* 								<span class="clear"></span>*/
/* 							</td>*/
/* 							<td class="attach-comment">*/
/* 								<textarea rows="1" cols="30" class="inputbox"></textarea>*/
/* 							</td>*/
/* 							<td class="attach-filesize">*/
/* 								<span class="file-size"></span>*/
/* 							</td>*/
/* 							<td class="attach-status">*/
/* 								<span class="file-progress">*/
/* 									<span class="file-progress-bar"></span>*/
/* 								</span>*/
/* 								<span class="file-status"></span>*/
/* 							</td>*/
/* 					</tr>*/
/* 					<!-- BEGIN attach_row -->*/
/* 						<tr class="attach-row" data-attach-id="{attach_row.ATTACH_ID}">*/
/* 							<td class="attach-name">*/
/* 								<span class="file-name ellipsis-text"><a href="{attach_row.U_VIEW_ATTACHMENT}">{attach_row.FILENAME}</a></span>*/
/* 								<span class="attach-controls">*/
/* 									<!-- IF S_INLINE_ATTACHMENT_OPTIONS --><input type="button" value="{L_PLACE_INLINE}" class="button2 file-inline-bbcode" />&nbsp; <!-- ENDIF -->*/
/* 									<input type="submit" name="delete_file[{attach_row.ASSOC_INDEX}]" value="{L_DELETE_FILE}" class="button2 file-delete" />*/
/* 								</span>*/
/* 								<span class="clear"></span>*/
/* 							</td>*/
/* 							<td class="attach-comment">*/
/* 								<textarea name="comment_list[{attach_row.ASSOC_INDEX}]" rows="1" cols="30" class="inputbox">{attach_row.FILE_COMMENT}</textarea>*/
/* 								{attach_row.S_HIDDEN}*/
/* 							</td>*/
/* 							<td class="attach-filesize">*/
/* 								<span class="file-size">{attach_row.FILESIZE}</span>*/
/* 							</td>*/
/* 							<td class="attach-status">*/
/* 								<span class="file-status file-uploaded"></span>*/
/* 							</td>*/
/* 						</tr>*/
/* 					<!-- END attach_row -->*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* 	</div>*/
/* </div>*/
/* */
