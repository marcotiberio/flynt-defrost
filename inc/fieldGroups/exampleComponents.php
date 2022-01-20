<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

// add_action('Flynt/afterRegisterComponents', function () {
//     ACFComposer::registerFieldGroup([
//         'name' => 'exampleComponents',
//         'title' => 'Example Components',
//         'style' => 'seamless',
//         'fields' => [
//             [
//                 'name' => 'exampleComponents',
//                 'label' => __('Example Components', 'flynt'),
//                 'type' => 'flexible_content',
//                 'button_label' => __('Add Component', 'flynt'),
//                 'layouts' => [
//                     Components\BlockCollapse\getACFLayout(),
//                     Components\BlockImage\getACFLayout(),
//                     Components\BlockImageText\getACFLayout(),
//                     Components\BlockVideoOembed\getACFLayout(),
//                     Components\BlockWysiwyg\getACFLayout(),
//                     Components\SliderImages\getACFLayout(),
//                 ],
//             ],
//         ],
//         'location' => [
//             [
//                 [
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'example',
//                 ],
//             ],
//         ],
//     ]);
// });
