// Example to get terms
$developments = array_map(function($development) {
  return [
    'value' => $development->slug, 
    'title' => $development->name
  ];
}, get_terms('development'));

// Custom funtion to get template_part and pass variables 
get_part('select-field', [
  'id' => 'development',
  'title' => 'All',
  'items' => array_merge( $developments )
]);
