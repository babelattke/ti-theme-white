<?php
/**
 * TastyIgniter White Theme
 * Config file
 * version: 0.0.1
 * author: Mauricio Lattke
 *
 */

 return [
     'form' => [
         'general' => [
             'title' => 'General',
             'fields' => [
                'logo_image' => [
                    'label' => 'Logo Image',
                    'span' => 'left',
                    'comment' => 'Upload custom logo or text to your website.',
                    'type' => 'mediafinder',
                ],
                'favicon' => [
                    'label' => 'Favicon',
                    'type' => 'mediafinder',
                    'span' => 'right',
                    'comment' => 'Upload your favicon ( png, ico, jpg, gif or bmp ).',
                ],
                'logo_text' => [
                    'label' => 'Logo Text',
                    'type' => 'text',
                    'span' => 'left',
                ],
                'logo_height' => [
                    'label' => 'Logo Height',
                    'type' => 'text',
                    'span' => 'right',
                    'default' => '40px',
                    'rules' => 'required',
                    'assetVar' => 'logo-height',
                ],
                'font.family' => [
                    'label' => 'Font Family',
                    'type' => 'text',
                    'span' => 'left',
                    'default' => '"Titillium Web",Arial,sans-serif',
                    'comment' => 'The font family to use for the main body text.',
                    'rules' => 'required',
                    'assetVar' => 'font-family-sans-serif',
                ],
                'font.weight' => [
                    'label' => 'Font Weight',
                    'type' => 'text',
                    'span' => 'right',
                    'rules' => 'required',
                    'default' => '400',
                    'assetVar' => 'font-weight-normal',
                ],
            ],
            ],
            'colors' => [
                'title' => 'Colors',
                'fields' => [
                    'body.background' => [
                        'label' => 'Body background color',
                        'type' => 'colorpicker',
                        'span' => 'left',
                        'default' => '#F5F5F5',
                        'rules' => 'required',
                        'assetVar' => 'body-bg',
                    ],
                    'font.color' => [
                        'label' => 'Font Color',
                        'type' => 'colorpicker',
                        'span' => 'right',
                        'default' => '#333333',
                        'rules' => 'required',
                        'assetVar' => 'body-color',
                    ],
                    'button.default.background' => [
                        'label' => 'Main color',
                        'type' => 'colorpicker',
                        'span' => 'left',
                        'default' => '#64544d',
                        'rules' => 'required',
                        'assetVar' => 'secondary',
                    ],
                    'button.primary.background' => [
                        'label' => 'Primary color',
                        'type' => 'colorpicker',
                        'span' => 'right',
                        'default' => '#ed561a',
                        'rules' => 'required',
                        'assetVar' => 'primary',
                    ],
                    'button.success.background' => [
                        'label' => 'Success color',
                        'type' => 'colorpicker',
                        'span' => 'left',
                        'default' => '#28A745',
                        'rules' => 'required',
                        'assetVar' => 'success',
                    ],
                    'button.info.background' => [
                        'label' => 'Info color',
                        'type' => 'colorpicker',
                        'span' => 'right',
                        'default' => '#17A2b8',
                        'rules' => 'required',
                        'assetVar' => 'info',
                    ],
                    'button.warning.background' => [
                        'label' => 'Warning color',
                        'type' => 'colorpicker',
                        'span' => 'left',
                        'default' => '#FFC107',
                        'rules' => 'required',
                        'assetVar' => 'warning',
                    ],
                    'button.danger.background' => [
                        'label' => 'Danger color',
                        'type' => 'colorpicker',
                        'span' => 'right',
                        'default' => '#DC3545',
                        'rules' => 'required',
                        'assetVar' => 'danger',
                    ],
                    'button.light.background' => [
                        'label' => 'Light color',
                        'type' => 'colorpicker',
                        'span' => 'left',
                        'default' => '#efeded',
                        'rules' => 'required',
                        'assetVar' => 'gray-100',
                    ],
                    'button.dark.background' => [
                        'label' => 'Dark color',
                        'type' => 'colorpicker',
                        'span' => 'right',
                        'default' => '#372b27',
                        'rules' => 'required',
                        'assetVar' => ['gray-800', 'gray-700'],
                    ],
                ]
            ],
         ],
 ];

