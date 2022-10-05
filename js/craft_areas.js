var simplemaps_worldmap_mapdata = {
  main_settings: {
    //General settings
    width: 'responsive', //'700' or 'responsive'
    background_color: '#FFFFFF',
    background_transparent: 'yes',
    border_color: '#ffffff',
    popups: 'detect',

    //State defaults
    state_description: 'We have business cases here',
    state_color: '#88A4BC',
    state_hover_color: '#3B729F',
    state_url: '#',
    border_size: 1.5,
    all_states_inactive: 'yes',
    all_states_zoomable: 'yes',

    //Location defaults
    location_description: 'We have business cases here',
    location_color: '#FF0067',
    location_opacity: 0.8,
    location_hover_opacity: 1,
    location_url: '',
    location_size: 25,
    location_type: 'square',
    location_image_source: 'frog.png',
    location_border_color: '#FFFFFF',
    location_border: 2,
    location_hover_border: 2.5,
    all_locations_inactive: 'no',
    all_locations_hidden: 'no',

    //Label defaults
    label_color: '#d5ddec',
    label_hover_color: '#d5ddec',
    label_size: 22,
    label_font: 'Arial',
    hide_labels: 'no',

    //Zoom settings
    zoom: 'yes',
    back_image: 'no',
    initial_back: 'no',
    initial_zoom: '0',
    initial_zoom_solo: 'yes',
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: 'yes',
    zoom_percentage: 0.99,
    zoom_time: 0.5,

    //Popup settings
    popup_color: 'white',
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: '12px/1.5 Verdana, Arial, Helvetica, sans-serif',
    popup_nocss: 'no',

    //Advanced settings
    div: 'craft-areas',
    auto_load: 'yes',
    url_new_tab: 'no',
    images_directory: 'default',
    fade_time: 0.1,
    link_text: 'Profile',
    state_image_url: '',
    state_image_position: '',
    location_image_url: '',
  },
  state_specific: {
    KE: {
      name: 'Kenya',
      color: '#fec447',
    },
    TZ: {
      color: '#8ac35c',
    },
    UA: {},
    UG: {
      color: '#3163a2',
    },
  },
  locations: {
    '0': {
      name: 'Kampala',
      lat: '0.3476',
      lng: '32.5825',
      size: '10',
      type: 'circle',
      color: '4f8dca',
    },
    '1': {
      name: 'Nairobi',
      lat: '1.2921',
      lng: '36.8219',
      size: '10',
      type: 'circle',
      color: '4f8dca',
    },
    '3': {
      name: 'Tanzania',
      lat: '-6.7924',
      lng: '39.2083',
      size: '10',
      type: 'circle',
      color: '4f8dca',
    },
        '4': {
      name: 'Masaka',
      lat: '0.4464',
      lng: '31.9018',
      size: '10',
      type: 'circle',
      color: '4f8dca',
    },
        
  },
  labels: {},
  legend: {
    entries: [],
  },
  regions: {
    '0': {
      states: ['UG', 'KE', 'TZ'],
      name: 'East Africa',
    },
  },
}
