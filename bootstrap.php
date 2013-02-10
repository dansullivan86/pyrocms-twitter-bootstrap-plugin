<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Bootstrap Plugin
 *
 * A Twitter Bootstrap Plugin
 *
 * @author		Dan Sullivan
 * @package		PyroCMS\Addon\Plugins
 *
 */
class Plugin_Bootstrap extends Plugin
{

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
		$limit	= $this->attribute('limit');
		$slug	= $this->attribute('slug');
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
        return '<div class="hero-unit '.$class.'" id="'.$id.'">'.$this->content().'</div>';
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
	 * Rowfluid
	 *
	 * Usage: {{ bootstrap:rowfluid }} My Content {{ /bootstrap:rowfluid }}
	 * 
	 * Optional: class and id
	 *
	 * @return html
	 */
    function rowfluid()
    {
    	$class = $this->attribute('class');
		$id = $this->attribute('id');
        return '<div class="row-fluid '.$class.'" id="'.$id.'">'.$this->content().'</div>';
    }

	// --------------------------------------------------------------------------
	
	/**
	 * Span
	 *
	 * Usage: {{ bootstrap:span size="12" }} My Content {{ /boostrap:span }}
	 * 
	 * Optional: class, id and offset
	 *
	 * @return html
	 */
    function span()
    {
    	$class = $this->attribute('class');
		$id = $this->attribute('id');
		$size = $this->attribute('size');
		$offset = $this->attribute('offset');
		if (!$size) { $size=12; }
		$html = '<div class="span'.$size.' '.$class;
		if ($offset)
		{
			$html .= ' offset'.$offset;
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