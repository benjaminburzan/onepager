<?php

return array(
  'slug'    => 'content-7',
  'groups'    => array('contents'),

  'contents' => array(
    array(
      'name'=>'title',
      'value'=>'See our cool features'
    ),
    array(
      'name'=>'description',
      'type'=>'textarea',
      'value' => 'A fool thinks himself to be wise, but a wise man knows himself to be a fool.'
    ),

    array(
      'name'=>'image',
      'label'=>'Image',
      'type'=>'image',
      'value' => 'http://placekitten.com.s3.amazonaws.com/homepage-samples/200/286.jpg'
      )
  ),

  'settings' => array(
    array(
      'name' => 'title_size',
      'label' => 'Title Size',
      'append' => 'px',
      'value' => '@section_title_size'
    ),
    array(
      'name' => 'desc_size',
      'label' => 'Description Size',
      'append' => 'px',
      'value' => '@section_desc_size'
    ),
    array(
      'name'     => 'title_transformation',
      'label'    => 'Title Transformation',
      'type'     => 'select',
      'value'    => 'text-uppercase',
      'options'  => array(
        'text-lowercase'   => 'Lowercase',
        'text-uppercase'   => 'Uppercase',
        'text-capitalize'  => 'Capitalized'
      ),
    ),
    array(
      'name'     => 'animation_title',
      'label'    => 'Animation Title',
      'type'     => 'select',
      'value'    => 'fadeInDown',
      'options'  => array(
        '0'           => 'None',
        'fadeIn'      => 'Fade',
        'fadeInLeft'  => 'Slide Left',
        'fadeInRight' => 'Slide Right',
        'fadeInUp'    => 'Slide Up',
        'fadeInDown'  => 'Slide Down',
      )
    ),

     array(
      'name'     => 'animation_item',
      'label'    => 'Animation Items',
      'type'     => 'select',
      'value'    => 'zoomIn',
      'options'  => array(
        '0'             => 'None',
        'fadeIn'        => 'Fade',
        'zoomIn'        => 'Zoom In',
        'fadeInLeft'    => 'Slide Left',
        'fadeInRight'   => 'Slide Right',
        'fadeInUp'      => 'Slide Up',
        'fadeInDown'    => 'Slide Down',
      )
    ),
  ),

  'styles' => array(
    array(
      'name' => 'bg_color',
      'label' => 'Background Color',
      'type' => 'colorpicker',
      'value' => '#fff'
    ),
    array(
      'name' => 'title_color',
      'label' => 'Title Color',
      'type' => 'colorpicker',
      'value' => '#323232'

    ),
    array(
      'name' => 'text_color',
      'label' => 'Text Color',
      'type' => 'colorpicker',
      'value' => '#727272'
    ),
  ),

  'assets' => function( $path ){
    Onepager::addStyle('content-7', $path . '/style.css');
  }
);
