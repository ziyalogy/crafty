var simplemaps_worldmap_mapdata={
  main_settings: {
    //General settings
		width: "responsive", //or 'responsive'
    background_color: "#FFFFFF",
    background_transparent: "yes",
    popups: "detect",
    
		//State defaults
		state_description: "State description",
    state_color: "#88A4BC",
    state_hover_color: "#3B729F",
    state_url: "#",
    border_size: 1.5,
    border_color: "#ffffff",
    all_states_inactive: "yes",
    all_states_zoomable: "no",
    
		//Location defaults
		location_description: "Location description",
    location_color: "#FF0067",
    location_opacity: 0.8,
    location_hover_opacity: 1,
    location_url: "",
    location_size: 5,
    location_type: "circle",
    location_border_color: "#FFFFFF",
    location_border: 2,
    location_hover_border: 2.5,
    all_locations_inactive: "no",
    all_locations_hidden: "no",
    all_locations_zoomable: "no",

		//Label defaults
		label_color: "#ffffff",
    label_hover_color: "#ffffff",
    label_size: 22,
    label_font: "Arial",
    hide_labels: "no",
   
		//Zoom settings
		manual_zoom: "no",
    back_image: "no",
    arrow_box: "no",
    navigation_size: "40",
    navigation_color: "#f7f7f7",
    navigation_border_color: "#636363",
    initial_back: "no",
    initial_zoom: -1,
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "no",
    zoom_percentage: 0.99,
    zoom_time: 0.5,
    
		//Popup settings
		popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",
    
		//Advanced settings
		div: "impactmap",
    auto_load: "yes",
    rotate: "0",
    url_new_tab: "no",
    images_directory: "default",
    import_labels: "no",
    fade_time: 0.1,
    link_text: "See more"
  },
  state_specific: {
    
    KE: {
      name: "Kenya",
      description: "",
      color: "#86bc42",
      hover_color: "default",
      url: "#ke"
    },
    TZ: {
      name: "Tanzania",
      description: "",
      color: "#ffc20e",
      hover_color: "default",
      url: "#tz"
    },
    UG: {
      name: "Uganda",
      description: "",
      color: "#325a9c",
      hover_color: "default",
      url: "#ug"
    }
  },
  locations: {
    "0": {
      name: "Kenya",
      lat: "0.0236",
      lng: "37.9062",
      color: "default",
      description: "The project’s interventions are embedded in inclusive and climate-responsive investments that strengthen the performance of agribusiness and cooperatives across seven value chains in Uganda, Kenya, and Tanzania, notably: green grams, potato, beans, sesame, sunflower, soybean, and sorghum.",
      url: "#"
    },
    "1": {
      name: "Uganda",
      lat: "1.3733",
      lng: "32.2903",
      color: "default",
      description: "The project’s interventions are embedded in inclusive and climate-responsive investments that strengthen the performance of agribusiness and cooperatives across seven value chains in Uganda, Kenya, and Tanzania, notably: green grams, potato, beans, sesame, sunflower, soybean, and sorghum.",
      url: "#"
    },
    "3": {
      name: "Tanzania",
      lat: "-6.763743",
      lng: "39.245342",
      description: "The project’s interventions are embedded in inclusive and climate-responsive investments that strengthen the performance of agribusiness and cooperatives across seven value chains in Uganda, Kenya, and Tanzania, notably: green grams, potato, beans, sesame, sunflower, soybean, and sorghum.",
      color: "default",
      url: "#",
      size: "default"
    }
  },
  labels: {}
};