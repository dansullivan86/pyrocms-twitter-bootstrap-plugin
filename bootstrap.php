<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Bootstrap Plugin
 *
 * A Twitter Bootstrap Plugin
 *
 * @author      Dan Sullivan
 * @package     PyroCMS\Addon\Plugins
 *
 */
class Plugin_Bootstrap extends Plugin
{

    public $version = '1.2.0';

    public $name = array(
        'en'    => 'Twitter Bootstrap Plugin',
    );

    public $description = array(
        'en'    => 'Easily add Twitter Bootstrap components from the WYSIWYG. <a target="_new" href="http://www.embu.co.uk/twitter-bootstrap-plugin">Full Documentation available here</a>'
    );

    public function _self_doc()
    {
        $info = array(
            'alert' => array(
                'description' => array(
                    'en' => 'Alert Component - Wrap any text for a basic warning alert message with dismiss button.'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'style' => array(
                        'type' => 'text',
                        'flags' => 'error|success|info',
                        'required' => true,
                    ),
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'align' => array(
                'description' => array(
                    'en' => 'Align - Float an element left or right.'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'position' => array(
                        'type' => 'text',
                        'flags' => 'left|right',
                        'required' => true,
                    ),
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'badge' => array(
                'description' => array(
                    'en' => 'Badge Component'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'style' => array(
                        'type' => 'text',
                        'flags' => 'success|warning|important|info|inverse',
                        'required' => true,
                    ),
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'carousel' => array(
                'description' => array(
                    'en' => 'Carousel Component - This plugin requires the PyroCMS galleries module to be installed.'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'slug' => array(
                        'type' => 'text',
                        'flags' => '',
                        'required' => true,
                    ),
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'collapse' => array(
                'description' => array(
                    'en' => 'Collapse Component - Get base styles and flexible support for collapsible components, this is a simplified version of the twitter bootstrap collapse plugin designed for single elements of expanding content.'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'title' => array(
                        'type' => 'text',
                        'flags' => '',
                        'required' => true,
                    ),
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'emphasis' => array(
                'description' => array(
                    'en' => 'Emphasis - Convey meaning through colour with a handful of emphasis utility classes.'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'style' => array(
                        'type' => 'text',
                        'flags' => 'muted|warning|error|info|success',
                        'required' => true,
                    ),
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'hero' => array(
                'description' => array(
                    'en' => 'Hero Component - A lightweight, flexible component to showcase key content on your site. It works well on marketing and content-heavy sites.'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'label' => array(
                'description' => array(
                    'en' => 'Label'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'style' => array(
                        'type' => 'text',
                        'flags' => 'success|warning|important|info|inverse',
                        'required' => true,
                    ),
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'lead' => array(
                'description' => array(
                    'en' => 'Lead - Make a paragraph stand out.'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'row' => array(
                'description' => array(
                    'en' => 'Row - Begin by adding a row then add as many spans as you require.'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'span' => array(
                'description' => array(
                    'en' => 'Span - Begin by adding a row then add as many spans as you require.'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'size' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'tabheader' => array(
                'description' => array(
                    'en' => 'Tab Header Component - wrap in {{ bootstrap:tabheaderwrap }} {{ /bootstrap:tabheaderwrap }} - Add quick, dynamic tab functionality to transition through panes of local content.'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'title' => array(
                        'type' => 'text',
                        'flags' => '',
                        'required' => true,
                    ),
                    'active' => array(
                        'type' => 'text',
                        'flags' => 'true|false',
                        'required' => false,
                    ),
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'tabcontent' => array(
                'description' => array(
                    'en' => 'Tab Content Component - wrap in {{ bootstrap:tabcontentwrap }} {{ /bootstrap:tabcontentwrap }} - Add quick, dynamic tab functionality to transition through panes of local content.'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'title' => array(
                        'type' => 'text',
                        'flags' => '',
                        'required' => true,
                    ),
                    'active' => array(
                        'type' => 'text',
                        'flags' => 'true|false',
                        'required' => false,
                    ),
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
            'well' => array(
                'description' => array(
                    'en' => 'Well Component - Use the well as a simple effect on an element to give it an inset effect.'
                ),
                'single' => false,
                'double' => true,
                'variables' => '',
                'attributes' => array(
                    'class' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                    'id' => array(
                        'type' => 'text',
                        'required' => false,
                    ),
                ),
            ),
        );

        return $info;
    }

    /**
     * Alert
     *
     * Usage: {{ bootstrap:alert style="" }} My Content {{ /bootstrap:alert }}
     *
     * Optional: class and id
     * Possible styles: error, success, info
     * Add " alert-block" after style to increase top and bottom padding
     *
     * @return html
     */
    function alert()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        $style = $this->attribute('style');
        if ($style)
        {
            $style = 'alert-'.$style;
        }
        return '<div class="alert '.$style.' '.$class.'" id="'.$id.'"><button type="button" class="close" data-dismiss="alert">×</button>'.$this->content().'</div>';
    }

    // --------------------------------------------------------------------------

    /**
     * Align
     *
     * Usage: {{ bootstrap:align position="" }} My Content {{ /bootstrap:align }}
     *
     * Optional: class and id
     *
     * @return html
     */
    function align()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        $position = $this->attribute('position');
        if ($position)
        {
            $position = 'pull-'.$position;
        }
        return '<div class="'.$position.' '.$class.'" id="'.$id.'">'.$this->content().'</div>';
    }

    // --------------------------------------------------------------------------

    /**
     * Badge
     *
     * Usage: {{ bootstrap:badge style="" }} My Content {{ /bootstrap:badge }}
     * Possible styles: default, success, warning, important, info, inverse
     *
     * Optional: class and id
     *
     * @return html
     */
    function badge()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        $style = $this->attribute('style');
        if ($style && $style != "default")
        {
            $style = 'badge-'.$style;
        }
        return '<span class="badge '.$style.' '.$class.'" id="'.$id.'">'.$this->content().'</span>';
    }

    /*************** Javacript Carousel Plugin ***************/

    /**
     * Carousel
     *
     * Usage: {{ bootstrap:carousel slug="Gallery Slug" }}
     * This function requires the galleries module to be installed
     *
     * Optional: class
     *
     * @return html
     */
    function carousel()
    {
        $class = $this->attribute('class');
        $limit  = $this->attribute('limit');
        $slug   = $this->attribute('slug');
        $offset = $this->attribute('offset');
        $safe_slug = str_replace(" ", "_", $slug);
        if ($limit){ $limit = 'limit="'.$limit.'"';}
        if ($offset){ $offset = 'offset="'.$offset.'"';}

        $html = <<<CAROUSEL
        <div id="$safe_slug" class="carousel slide $class">
            <div class="carousel-inner">
                {{ galleries:images slug="$slug" $limit $offset}}
                    <div class="item
                        {{ if order == "1" }}
                            active
                        {{ endif }}
                        "><img src="{{url:site}}files/large/{{ file_id }}" alt="{{ name }}">
                        {{ if description }}
                            <div class="carousel-caption"><p>{{ description }}</p></div>
                        {{ endif }}
                    </div>
                {{ /galleries:images }}
            </div>
            <a class="carousel-control left" href="#$safe_slug" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#$safe_slug" data-slide="next">&rsaquo;</a>
        </div>
CAROUSEL;
        return $html;
    }

    /*************** Javacript Carousel Plugin ***************/

    /*************** Javascript Collapse Plugin ***************/

    /**
     * Collapse
     *
     * Usage: {{ bootstrap:collapse title="My Title" }} My Content {{ /bootstrap:collapse }}
     *
     * Optional: class and id
     *
     * @return html
     */
    function collapse()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        $title = $this->attribute('title');
        if (!$title) { $title='Please enter a title'; }
        $safe_title = str_replace(" ", "_", $title);
        return '<button type="button" id="'.$id.'" class="btn btn-inverse '.$class.'" data-toggle="collapse" data-target="#'.$safe_title.'">'.$title.'</button>
                <div id="'.$safe_title.'" class="collapse out">'.$this->content().'</div>';
    }

    /*************** End Javascript Collapse Plugin ***************/

    // --------------------------------------------------------------------------

    /**
     * Emphasis
     *
     * Usage: {{ bootstrap:emphasis style="" }} My Content {{ /bootstrap:emphasis }}
     * Possible styles: muted, text-warning, text-error, text-info, text-success
     *
     * Optional: class and id
     *
     * @return html
     */
    function emphasis()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        $style = $this->attribute('style');
        if ($style && $style != "muted")
        {
            $style = "text-".$style;
        }
        return '<p class="'.$style.' '.$class.'" id="'.$id.'">'.$this->content().'</p>';
    }

    // --------------------------------------------------------------------------

    /**
     * Hero
     *
     * Usage: {{ bootstrap:hero }} My Content {{ /bootstrap:hero }}
     *
     * Optional: class and id
     *
     * @return html
     */
    function hero()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        return '<div class="jumbotron '.$class.'" id="'.$id.'">'.$this->content().'</div>';
    }

    // --------------------------------------------------------------------------

    /**
     * Jumbotron
     *
     * Usage: {{ bootstrap:hero }} My Content {{ /bootstrap:hero }}
     *
     * Optional: class and id
     *
     * @return html
     */
    function jumbotron()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        return '<div class="jumbotron '.$class.'" id="'.$id.'">'.$this->content().'</div>';
    }

    // --------------------------------------------------------------------------

    /**
     * Label
     *
     * Usage: {{ bootstrap:label style="" }} My Content {{ /bootstrap:label }}
     * Possible styles: default, success, warning, important, info, inverse
     *
     * Optional: class and id
     *
     * @return html
     */
    function label()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        $style = $this->attribute('style');
        if ($style && $style != "default")
        {
            $style = 'label-'.$style;
        }
        return '<span class="label '.$style.' '.$class.'" id="'.$id.'">'.$this->content().'</span>';
    }

    // --------------------------------------------------------------------------

    /**
     * Lead
     *
     * Usage: {{ bootstrap:lead }} My Content {{ /bootstrap:lead }}
     *
     * Optional: class and id
     *
     * @return html
     */
    function lead()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        return '<p class="lead '.$class.'" id="'.$id.'">'.$this->content().'</p>';
    }

    // --------------------------------------------------------------------------

    /**
     * Row
     *
     * Usage: {{ bootstrap:row }} My Content {{ /bootstrap:row }}
     *
     * Optional: class and id
     *
     * @return html
     */
    function row()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        return '<div class="row '.$class.'" id="'.$id.'">'.$this->content().'</div>';
    }

    // --------------------------------------------------------------------------

    /**
     * Col
     *
     * Usage: {{ bootstrap:col md_size="12" }} My Content {{ /boostrap:col }}
     *
     * Optional: class, id and offset
     *
     * @return html
     */
    function col()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        $xs_size = $this->attribute('xs_size');
        $sm_size = $this->attribute('sm_size');
        $md_size = $this->attribute('md_size');
        $lg_size = $this->attribute('lg_size');
        $xs_offset = $this->attribute('xs_offset');
        $sm_offset = $this->attribute('sm_offset');
        $md_offset = $this->attribute('md_offset');
        $lg_offset = $this->attribute('lg_offset');

        $html = '<div class="';
        if ($xs_size) {
            $html .= ' col-xs-'.$xs_size;
        }
        if ($sm_size) {
            $html .= ' col-sm-'.$sm_size;
        }
        if ($md_size) {
            $html .= ' col-md-'.$md_size;
        }
        if ($lg_size) {
            $html .= ' col-lg-'.$lg_size;
        }
        $html .= ' '.$class;

        if ($xs_offset) {
            $html .= ' col-xs-offset-'.$xs_offset;
        }
        if ($sm_offset) {
            $html .= ' col-sm-offset-'.$sm_offset;
        }
        if ($md_offset) {
            $html .= ' col-md-offset-'.$md_offset;
        }
        if ($lg_offset) {
            $html .= ' col-lg-offset-'.$lg_offset;
        }
        $html .= '" id="'.$id.'">'.$this->content().'</div>';
        return $html;
    }

        /*************** Javacript Tabs Plugin ***************/

    /**
     * Tab Header Wrap
     *
     * Usage: {{ bootstrap:tabheaderwrap }}  My Content {{ /bootstrap:tabheaderwrap }}
     *
     * Optional: class and id
     *
     * @return html
     */
    function tabheaderwrap()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        return '<ul class="nav nav-tabs '.$class.'" id="'.$id.'">'.$this->content().'</ul>';
    }

    // --------------------------------------------------------------------------

    /**
     * Tab Header
     *
     * Usage: {{ bootstrap:tabheader title="My Title" }}
     *
     * Optional: class and id
     *
     * @return html
     */
    function tabheader()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        $title = $this->attribute('title');
        $active = $this->attribute('active');
        if ($active == "true")
        {
            $active = "active";
        }
        else
        {
            $active = "";
        }
        if (!$title) { $title='Please enter a title'; }
        $safe_title = str_replace(" ", "_", $title);
        return '<li class="'.$active.' '.$class.'" id="'.$id.'"><a href="#'.$safe_title.'" data-toggle="tab">'.$title.'</a></li>';
    }

    // --------------------------------------------------------------------------

    /**
     * Tab Content Wrap
     *
     * Usage: {{ bootstrap:tabcontentwrap }} My Content {{ bootstrap:tabcontentwrap }}
     *
     * Optional: class and id
     *
     * @return html
     */
    function tabcontentwrap()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        return '<div class="tab-content '.$class.'" id="'.$id.'">'.$this->content().'</div>';
    }

    // --------------------------------------------------------------------------

    /**
     * Tab Content
     *
     * Usage: {{ bootstrap:tabscontent title="My Title" }} My Content {{ /bootstrap:tabscontent }}
     *
     * Optional: class, id and active
     *
     * @return html
     */
    function tabcontent()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        $active = $this->attribute('active');
        $title = $this->attribute('title');
        if (!$title) { $title='Please enter a the same title as a tabheader'; }
        $safe_title = str_replace(" ", "_", $title);
        if ($active == "true")
        {
            $active = "active";
        }
        else
        {
            $active = "";
        }
        return '<div class="tab-pane '.$active.' '.$class.'" id="'.$safe_title.'">'.$this->content().'</div>';
    }

    /*************** End Javascript Tabs Plugin ***************/

    /**
     * Well
     *
     * Usage: {{ bootstrap:well }} My Content {{ /bootstrap:well }}
     *
     * Optional: class and id
     * Add well-large or well-small to class for more or less padding
     *
     * @return html
     */
    function well()
    {
        $class = $this->attribute('class');
        $id = $this->attribute('id');
        return '<div class="well '.$class.'" id="'.$id.'">'.$this->content().'</div>';
    }
}

/* End of file bootstrap.php */