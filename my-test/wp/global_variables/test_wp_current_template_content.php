<?php
/**
 * 'is_page'              => 'get_page_template', 的 get_page_template 获得了 global $_wp_current_template_content
 *
 * $_wp_current_template_content =
 * <!-- wp:template-part {"slug":"header-transparent","theme":"bagberry","area":"header"} /-->
 * <!-- wp:post-content {"layout":{"type":"constrained"}} /-->
 * <!-- wp:template-part {"slug":"footer","theme":"bagberry"} /-->
 */

/*
 * 根据提供的代码片段，$_wp_current_template_content 包含了模板的内容，它是一个包含多个模板部分的字符串。
 *
 * 这段代码使用了 WordPress 的块编辑器语法，每个 <!-- wp:... --> 部分表示一个块。根据提供的代码片段，$_wp_current_template_content 包含了以下内容：
 *
 * <!-- wp:template-part {"slug":"header-transparent","theme":"bagberry","area":"header"} /-->：这是一个模板部分块，指定了一个名为 "header-transparent" 的模板部分，它属于 "bagberry" 主题的 "header" 区域。
 * <!-- wp:post-content {"layout":{"type":"constrained"}} /-->：这是一个包含文章内容的块，指定了一个带有约束布局的文章内容。
 * <!-- wp:template-part {"slug":"footer","theme":"bagberry"} /-->：这是一个模板部分块，指定了一个名为 "footer" 的模板部分，它属于 "bagberry" 主题。
 *
 * 这些模板部分可以包含特定的 HTML、PHP 或其他代码，用于定义和组织页面的不同部分。通过访问 $_wp_current_template_content，你可以获取当前模板的内容，并在适当的位置进行处理或输出。
 *
 * 请注意，这只是一个代码片段，并不能完整地展示模板的全部内容。在实际使用中，通常会有更多的模板部分和其他内容组成完整的模板。
 */