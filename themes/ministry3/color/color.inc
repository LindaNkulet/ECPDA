<?php

/**
 * @file
 * Lists available colors and color schemes for the Bartik theme.
 */

$info = [
  // Available colors and color labels used in theme.
  'fields' => [
    'top_header' => t('Top Header'),
    'header' => t('Header & Footer Bottom'),
    'primary' => t('Site Primary Color'),
    'secondry' => t('Site Secondry Color'),
    'third' => t('Site Third Color'),
    'footer' => t('Footer Color'),

  ],
  // Pre-defined color schemes.
  'schemes' => [
    'default' => [
      'title' => t('Theme Setting (default)'),
      'colors' => [
        'top_header' => '#e8e9e9',
        'header' => '#000000',
        'primary' => '#cf3339',
        'secondry' => '#00a551',
        'third' => '#f8bb2b',
        'footer' => '#484647',
      ],
    ],
  ],

  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => [
    'css/color.css',
  ],

  // Files to copy.
  'copy' => [
    'logo.svg',
  ],

  // Gradient definitions.
  'gradients' => [
    [
      // (x, y, width, height).
      'dimension' => [0, 0, 0, 0],
      // Direction of gradient ('vertical' or 'horizontal').
      'direction' => 'vertical',
      // Keys of colors to use for the gradient.
      'colors' => ['top', 'bottom'],
    ],
  ],

  // Preview files.
  'preview_library' => 'bartik/color.preview',
  'preview_html' => 'color/preview.html',

  //Attachments.
  '#attached' => [
    'drupalSettings' => [
      'color' => [
        // Put the logo path into JavaScript for the live preview.
        'logo' => theme_get_setting('logo.url', 'ntntp'),
      ],
    ],
  ],
];

