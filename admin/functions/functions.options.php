<?php
add_action('init', 'of_options');
if (!function_exists('of_options')) {
    function of_options()
    {
        $of_categories = array();
        $of_categories_obj = get_categories('hide_empty=0');
        foreach ($of_categories_obj as $of_cat) {
            $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;
        }
        $categories_tmp = array_unshift($of_categories, "Select a category:");
//Access the WordPress Pages via an Array
        $of_pages = array();
        $of_pages_obj = get_pages();
        foreach ($of_pages_obj as $of_page) {
            $of_pages[$of_page->ID] = $of_page->post_name;
        }
        $of_pages_tmp = array_unshift($of_pages,"Select page");
//Sample Homepage blocks for the layout manager (sorter)
        $of_options_homepage_blocks = array
        (
            "disabled" => array(
                "placebo" => "placebo", //REQUIRED!
                "section_blank1" => "Blank1",
                "section_blank2" => "Blank2",
                "section_blank3" => "Blank3",
            ),
            "enabled" => array(
                "placebo" => "placebo", //REQUIRED!
                "section_service" => "Service",
                "section_portfolio" => "Portfolio",
                "section_pricing" => "Pricing Table",
                "section_about_us" => "About Us",
                "section_woo" => "WooSection",
                "section_contact" => "Contact Us",
                "section_blog" => "Blog"
            ),
        );
$names = array();
$taxonomies = get_terms('project-type', 'orderby=count&hide_empty=0');
foreach ($taxonomies as $tax){
	$names[$tax->slug] = $tax->name;
}
$placebo_array = array("placebo" => "placebo");
$portfolio_categorie = $placebo_array + $names;
$of_options_portfolio_categories = array
        (
            "disabled" => array(
                "placebo" => "placebo", //REQUIRED!
            ),
            "enabled" => $portfolio_categorie,
        );
        
        /*-----------------------------------------------------------------------------------*/
        /* TO DO: Add options/functions that use these */
        /*-----------------------------------------------------------------------------------*/
//More Options
        $uploads_arr = wp_upload_dir();
        $all_uploads_path = $uploads_arr['path'];
        $all_uploads = get_option('of_uploads');
        $other_entries = array("Select a number:", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19");
// Image Alignment radio box
        $of_options_thumb_align = array("alignleft" => "Left", "alignright" => "Right", "aligncenter" => "Center");
// Image Links to Options
        $of_options_image_link_to = array("image" => "The Image", "post" => "The Post");
// Google fonts weight
        $google_fonts_weight = array(
            "none" => "font-weight",
            "300" => "300",
            "400" => "400",
            "600" => "600",
            "700" => "700",
            "900" => "900"
        );
// Google fonts weight
        $google_fonts_style = array(
            "normal" => "font-style",
            "normal" => "Normal",
            "italic" => "Italic",
        );
// Google fonts
        $google_fonts = array(
            "none" => "Select Font",
            "ABeeZee" => "ABeeZee",
            "Abel" => "Abel",
            "Abril Fatface" => "Abril Fatface",
            "Aclonica" => "Aclonica",
            "Acme" => "Acme",
            "Actor" => "Actor",
            "Adamina" => "Adamina",
            "Advent Pro" => "Advent Pro",
            "Aguafina Script" => "Aguafina Script",
            "Akronim" => "Akronim",
            "Aladin" => "Aladin",
            "Aldrich" => "Aldrich",
            "Alegreya" => "Alegreya",
            "Alegreya SC" => "Alegreya SC",
            "Alex Brush" => "Alex Brush",
            "Alfa Slab One" => "Alfa Slab One",
            "Alice" => "Alice",
            "Alike" => "Alike",
            "Alike Angular" => "Alike Angular",
            "Allan" => "Allan",
            "Allerta" => "Allerta",
            "Allerta Stencil" => "Allerta Stencil",
            "Allura" => "Allura",
            "Almendra" => "Almendra",
            "Almendra Display" => "Almendra Display",
            "Almendra SC" => "Almendra SC",
            "Amarante" => "Amarante",
            "Amaranth" => "Amaranth",
            "Amatic SC" => "Amatic SC",
            "Amethysta" => "Amethysta",
            "Anaheim" => "Anaheim",
            "Andada" => "Andada",
            "Andika" => "Andika",
            "Angkor" => "Angkor",
            "Annie Use Your Telescope" => "Annie Use Your Telescope",
            "Anonymous Pro" => "Anonymous Pro",
            "Antic" => "Antic",
            "Antic Didone" => "Antic Didone",
            "Antic Slab" => "Antic Slab",
            "Anton" => "Anton",
            "Arapey" => "Arapey",
            "Arbutus" => "Arbutus",
            "Arbutus Slab" => "Arbutus Slab",
            "Architects Daughter" => "Architects Daughter",
            "Archivo Black" => "Archivo Black",
            "Archivo Narrow" => "Archivo Narrow",
            "Arimo" => "Arimo",
            "Arizonia" => "Arizonia",
            "Armata" => "Armata",
            "Artifika" => "Artifika",
            "Arvo" => "Arvo",
            "Asap" => "Asap",
            "Asset" => "Asset",
            "Astloch" => "Astloch",
            "Asul" => "Asul",
            "Atomic Age" => "Atomic Age",
            "Aubrey" => "Aubrey",
            "Audiowide" => "Audiowide",
            "Autour One" => "Autour One",
            "Average" => "Average",
            "Average Sans" => "Average Sans",
            "Averia Gruesa Libre" => "Averia Gruesa Libre",
            "Averia Libre" => "Averia Libre",
            "Averia Sans Libre" => "Averia Sans Libre",
            "Averia Serif Libre" => "Averia Serif Libre",
            "Bad Script" => "Bad Script",
            "Balthazar" => "Balthazar",
            "Bangers" => "Bangers",
            "Basic" => "Basic",
            "Battambang" => "Battambang",
            "Baumans" => "Baumans",
            "Bayon" => "Bayon",
            "Belgrano" => "Belgrano",
            "Belleza" => "Belleza",
            "BenchNine" => "BenchNine",
            "Bentham" => "Bentham",
            "Berkshire Swash" => "Berkshire Swash",
            "Bevan" => "Bevan",
            "Bigelow Rules" => "Bigelow Rules",
            "Bigshot One" => "Bigshot One",
            "Bilbo" => "Bilbo",
            "Bilbo Swash Caps" => "Bilbo Swash Caps",
            "Bitter" => "Bitter",
            "Black Ops One" => "Black Ops One",
            "Bokor" => "Bokor",
            "Bonbon" => "Bonbon",
            "Boogaloo" => "Boogaloo",
            "Bowlby One" => "Bowlby One",
            "Bowlby One SC" => "Bowlby One SC",
            "Brawler" => "Brawler",
            "Bree Serif" => "Bree Serif",
            "Bubblegum Sans" => "Bubblegum Sans",
            "Bubbler One" => "Bubbler One",
            "Buda" => "Buda",
            "Buenard" => "Buenard",
            "Butcherman" => "Butcherman",
            "Butterfly Kids" => "Butterfly Kids",
            "Cabin" => "Cabin",
            "Cabin Condensed" => "Cabin Condensed",
            "Cabin Sketch" => "Cabin Sketch",
            "Caesar Dressing" => "Caesar Dressing",
            "Cagliostro" => "Cagliostro",
            "Calligraffitti" => "Calligraffitti",
            "Cambo" => "Cambo",
            "Candal" => "Candal",
            "Cantarell" => "Cantarell",
            "Cantata One" => "Cantata One",
            "Cantora One" => "Cantora One",
            "Capriola" => "Capriola",
            "Cardo" => "Cardo",
            "Carme" => "Carme",
            "Carrois Gothic" => "Carrois Gothic",
            "Carrois Gothic SC" => "Carrois Gothic SC",
            "Carter One" => "Carter One",
            "Caudex" => "Caudex",
            "Cedarville Cursive" => "Cedarville Cursive",
            "Ceviche One" => "Ceviche One",
            "Changa One" => "Changa One",
            "Chango" => "Chango",
            "Chau Philomene One" => "Chau Philomene One",
            "Chela One" => "Chela One",
            "Chelsea Market" => "Chelsea Market",
            "Chenla" => "Chenla",
            "Cherry Cream Soda" => "Cherry Cream Soda",
            "Cherry Swash" => "Cherry Swash",
            "Chewy" => "Chewy",
            "Chicle" => "Chicle",
            "Chivo" => "Chivo",
            "Cinzel" => "Cinzel",
            "Cinzel Decorative" => "Cinzel Decorative",
            "Clicker Script" => "Clicker Script",
            "Coda" => "Coda",
            "Coda Caption" => "Coda Caption",
            "Codystar" => "Codystar",
            "Combo" => "Combo",
            "Comfortaa" => "Comfortaa",
            "Coming Soon" => "Coming Soon",
            "Concert One" => "Concert One",
            "Condiment" => "Condiment",
            "Content" => "Content",
            "Contrail One" => "Contrail One",
            "Convergence" => "Convergence",
            "Cookie" => "Cookie",
            "Copse" => "Copse",
            "Corben" => "Corben",
            "Courgette" => "Courgette",
            "Cousine" => "Cousine",
            "Coustard" => "Coustard",
            "Covered By Your Grace" => "Covered By Your Grace",
            "Crafty Girls" => "Crafty Girls",
            "Creepster" => "Creepster",
            "Crete Round" => "Crete Round",
            "Crimson Text" => "Crimson Text",
            "Croissant One" => "Croissant One",
            "Crushed" => "Crushed",
            "Cuprum" => "Cuprum",
            "Cutive" => "Cutive",
            "Cutive Mono" => "Cutive Mono",
            "Damion" => "Damion",
            "Dancing Script" => "Dancing Script",
            "Dangrek" => "Dangrek",
            "Dawning of a New Day" => "Dawning of a New Day",
            "Days One" => "Days One",
            "Delius" => "Delius",
            "Delius Swash Caps" => "Delius Swash Caps",
            "Delius Unicase" => "Delius Unicase",
            "Della Respira" => "Della Respira",
            "Denk One" => "Denk One",
            "Devonshire" => "Devonshire",
            "Didact Gothic" => "Didact Gothic",
            "Diplomata" => "Diplomata",
            "Diplomata SC" => "Diplomata SC",
            "Domine" => "Domine",
            "Donegal One" => "Donegal One",
            "Doppio One" => "Doppio One",
            "Dorsa" => "Dorsa",
            "Dosis" => "Dosis",
            "Dr Sugiyama" => "Dr Sugiyama",
            "Droid Sans" => "Droid Sans",
            "Droid Sans Mono" => "Droid Sans Mono",
            "Droid Serif" => "Droid Serif",
            "Duru Sans" => "Duru Sans",
            "Dynalight" => "Dynalight",
            "EB Garamond" => "EB Garamond",
            "Eagle Lake" => "Eagle Lake",
            "Eater" => "Eater",
            "Economica" => "Economica",
            "Electrolize" => "Electrolize",
            "Elsie" => "Elsie",
            "Elsie Swash Caps" => "Elsie Swash Caps",
            "Emblema One" => "Emblema One",
            "Emilys Candy" => "Emilys Candy",
            "Engagement" => "Engagement",
            "Englebert" => "Englebert",
            "Enriqueta" => "Enriqueta",
            "Erica One" => "Erica One",
            "Esteban" => "Esteban",
            "Euphoria Script" => "Euphoria Script",
            "Ewert" => "Ewert",
            "Exo" => "Exo",
            "Expletus Sans" => "Expletus Sans",
            "Fanwood Text" => "Fanwood Text",
            "Fascinate" => "Fascinate",
            "Fascinate Inline" => "Fascinate Inline",
            "Faster One" => "Faster One",
            "Fasthand" => "Fasthand",
            "Federant" => "Federant",
            "Federo" => "Federo",
            "Felipa" => "Felipa",
            "Fenix" => "Fenix",
            "Finger Paint" => "Finger Paint",
            "Fjalla One" => "Fjalla One",
            "Fjord One" => "Fjord One",
            "Flamenco" => "Flamenco",
            "Flavors" => "Flavors",
            "Fondamento" => "Fondamento",
            "Fontdiner Swanky" => "Fontdiner Swanky",
            "Forum" => "Forum",
            "Francois One" => "Francois One",
            "Freckle Face" => "Freckle Face",
            "Fredericka the Great" => "Fredericka the Great",
            "Fredoka One" => "Fredoka One",
            "Freehand" => "Freehand",
            "Fresca" => "Fresca",
            "Frijole" => "Frijole",
            "Fruktur" => "Fruktur",
            "Fugaz One" => "Fugaz One",
            "GFS Didot" => "GFS Didot",
            "GFS Neohellenic" => "GFS Neohellenic",
            "Gabriela" => "Gabriela",
            "Gafata" => "Gafata",
            "Galdeano" => "Galdeano",
            "Galindo" => "Galindo",
            "Gentium Basic" => "Gentium Basic",
            "Gentium Book Basic" => "Gentium Book Basic",
            "Geo" => "Geo",
            "Geostar" => "Geostar",
            "Geostar Fill" => "Geostar Fill",
            "Germania One" => "Germania One",
            "Gilda Display" => "Gilda Display",
            "Give You Glory" => "Give You Glory",
            "Glass Antiqua" => "Glass Antiqua",
            "Glegoo" => "Glegoo",
            "Gloria Hallelujah" => "Gloria Hallelujah",
            "Goblin One" => "Goblin One",
            "Gochi Hand" => "Gochi Hand",
            "Gorditas" => "Gorditas",
            "Goudy Bookletter 1911" => "Goudy Bookletter 1911",
            "Graduate" => "Graduate",
            "Grand Hotel" => "Grand Hotel",
            "Gravitas One" => "Gravitas One",
            "Great Vibes" => "Great Vibes",
            "Griffy" => "Griffy",
            "Gruppo" => "Gruppo",
            "Gudea" => "Gudea",
            "Habibi" => "Habibi",
            "Hammersmith One" => "Hammersmith One",
            "Hanalei" => "Hanalei",
            "Hanalei Fill" => "Hanalei Fill",
            "Handlee" => "Handlee",
            "Hanuman" => "Hanuman",
            "Happy Monkey" => "Happy Monkey",
            "Headland One" => "Headland One",
            "Henny Penny" => "Henny Penny",
            "Herr Von Muellerhoff" => "Herr Von Muellerhoff",
            "Holtwood One SC" => "Holtwood One SC",
            "Homemade Apple" => "Homemade Apple",
            "Homenaje" => "Homenaje",
            "IM Fell DW Pica" => "IM Fell DW Pica",
            "IM Fell DW Pica SC" => "IM Fell DW Pica SC",
            "IM Fell Double Pica" => "IM Fell Double Pica",
            "IM Fell Double Pica SC" => "IM Fell Double Pica SC",
            "IM Fell English" => "IM Fell English",
            "IM Fell English SC" => "IM Fell English SC",
            "IM Fell French Canon" => "IM Fell French Canon",
            "IM Fell French Canon SC" => "IM Fell French Canon SC",
            "IM Fell Great Primer" => "IM Fell Great Primer",
            "IM Fell Great Primer SC" => "IM Fell Great Primer SC",
            "Iceberg" => "Iceberg",
            "Iceland" => "Iceland",
            "Imprima" => "Imprima",
            "Inconsolata" => "Inconsolata",
            "Inder" => "Inder",
            "Indie Flower" => "Indie Flower",
            "Inika" => "Inika",
            "Irish Grover" => "Irish Grover",
            "Istok Web" => "Istok Web",
            "Italiana" => "Italiana",
            "Italianno" => "Italianno",
            "Jacques Francois" => "Jacques Francois",
            "Jacques Francois Shadow" => "Jacques Francois Shadow",
            "Jim Nightshade" => "Jim Nightshade",
            "Jockey One" => "Jockey One",
            "Jolly Lodger" => "Jolly Lodger",
            "Josefin Sans" => "Josefin Sans",
            "Josefin Slab" => "Josefin Slab",
            "Joti One" => "Joti One",
            "Judson" => "Judson",
            "Julee" => "Julee",
            "Julius Sans One" => "Julius Sans One",
            "Junge" => "Junge",
            "Jura" => "Jura",
            "Just Another Hand" => "Just Another Hand",
            "Just Me Again Down Here" => "Just Me Again Down Here",
            "Kameron" => "Kameron",
            "Karla" => "Karla",
            "Kaushan Script" => "Kaushan Script",
            "Kavoon" => "Kavoon",
            "Keania One" => "Keania One",
            "Kelly Slab" => "Kelly Slab",
            "Kenia" => "Kenia",
            "Khmer" => "Khmer",
            "Kite One" => "Kite One",
            "Knewave" => "Knewave",
            "Kotta One" => "Kotta One",
            "Koulen" => "Koulen",
            "Kranky" => "Kranky",
            "Kreon" => "Kreon",
            "Kristi" => "Kristi",
            "Krona One" => "Krona One",
            "La Belle Aurore" => "La Belle Aurore",
            "Lancelot" => "Lancelot",
            "Lato" => "Lato",
            "League Script" => "League Script",
            "Leckerli One" => "Leckerli One",
            "Ledger" => "Ledger",
            "Lekton" => "Lekton",
            "Lemon" => "Lemon",
            "Libre Baskerville" => "Libre Baskerville",
            "Life Savers" => "Life Savers",
            "Lilita One" => "Lilita One",
            "Limelight" => "Limelight",
            "Linden Hill" => "Linden Hill",
            "Lobster" => "Lobster",
            "Lobster Two" => "Lobster Two",
            "Londrina Outline" => "Londrina Outline",
            "Londrina Shadow" => "Londrina Shadow",
            "Londrina Sketch" => "Londrina Sketch",
            "Londrina Solid" => "Londrina Solid",
            "Lora" => "Lora",
            "Love Ya Like A Sister" => "Love Ya Like A Sister",
            "Loved by the King" => "Loved by the King",
            "Lovers Quarrel" => "Lovers Quarrel",
            "Luckiest Guy" => "Luckiest Guy",
            "Lusitana" => "Lusitana",
            "Lustria" => "Lustria",
            "Macondo" => "Macondo",
            "Macondo Swash Caps" => "Macondo Swash Caps",
            "Magra" => "Magra",
            "Maiden Orange" => "Maiden Orange",
            "Mako" => "Mako",
            "Marcellus" => "Marcellus",
            "Marcellus SC" => "Marcellus SC",
            "Marck Script" => "Marck Script",
            "Margarine" => "Margarine",
            "Marko One" => "Marko One",
            "Marmelad" => "Marmelad",
            "Marvel" => "Marvel",
            "Mate" => "Mate",
            "Mate SC" => "Mate SC",
            "Maven Pro" => "Maven Pro",
            "McLaren" => "McLaren",
            "Meddon" => "Meddon",
            "MedievalSharp" => "MedievalSharp",
            "Medula One" => "Medula One",
            "Megrim" => "Megrim",
            "Meie Script" => "Meie Script",
            "Merienda" => "Merienda",
            "Merienda One" => "Merienda One",
            "Merriweather" => "Merriweather",
            "Merriweather Sans" => "Merriweather Sans",
            "Metal" => "Metal",
            "Metal Mania" => "Metal Mania",
            "Metamorphous" => "Metamorphous",
            "Metrophobic" => "Metrophobic",
            "Michroma" => "Michroma",
            "Milonga" => "Milonga",
            "Miltonian" => "Miltonian",
            "Miltonian Tattoo" => "Miltonian Tattoo",
            "Miniver" => "Miniver",
            "Miss Fajardose" => "Miss Fajardose",
            "Modern Antiqua" => "Modern Antiqua",
            "Molengo" => "Molengo",
            "Molle" => "Molle",
            "Monda" => "Monda",
            "Monofett" => "Monofett",
            "Monoton" => "Monoton",
            "Monsieur La Doulaise" => "Monsieur La Doulaise",
            "Montaga" => "Montaga",
            "Montez" => "Montez",
            "Montserrat" => "Montserrat",
            "Montserrat Alternates" => "Montserrat Alternates",
            "Montserrat Subrayada" => "Montserrat Subrayada",
            "Moul" => "Moul",
            "Moulpali" => "Moulpali",
            "Mountains of Christmas" => "Mountains of Christmas",
            "Mouse Memoirs" => "Mouse Memoirs",
            "Mr Bedfort" => "Mr Bedfort",
            "Mr Dafoe" => "Mr Dafoe",
            "Mr De Haviland" => "Mr De Haviland",
            "Mrs Saint Delafield" => "Mrs Saint Delafield",
            "Mrs Sheppards" => "Mrs Sheppards",
            "Muli" => "Muli",
            "Mystery Quest" => "Mystery Quest",
            "Neucha" => "Neucha",
            "Neuton" => "Neuton",
            "New Rocker" => "New Rocker",
            "News Cycle" => "News Cycle",
            "Niconne" => "Niconne",
            "Nixie One" => "Nixie One",
            "Nobile" => "Nobile",
            "Nokora" => "Nokora",
            "Norican" => "Norican",
            "Nosifer" => "Nosifer",
            "Nothing You Could Do" => "Nothing You Could Do",
            "Noticia Text" => "Noticia Text",
            "Noto Sans" => "Noto Sans",
            "Noto Serif" => "Noto Serif",
            "Nova Cut" => "Nova Cut",
            "Nova Flat" => "Nova Flat",
            "Nova Mono" => "Nova Mono",
            "Nova Oval" => "Nova Oval",
            "Nova Round" => "Nova Round",
            "Nova Script" => "Nova Script",
            "Nova Slim" => "Nova Slim",
            "Nova Square" => "Nova Square",
            "Numans" => "Numans",
            "Nunito" => "Nunito",
            "Odor Mean Chey" => "Odor Mean Chey",
            "Offside" => "Offside",
            "Old Standard TT" => "Old Standard TT",
            "Oldenburg" => "Oldenburg",
            "Oleo Script" => "Oleo Script",
            "Oleo Script Swash Caps" => "Oleo Script Swash Caps",
            "Open Sans" => "Open Sans",
            "Open Sans Condensed" => "Open Sans Condensed",
            "Oranienbaum" => "Oranienbaum",
            "Orbitron" => "Orbitron",
            "Oregano" => "Oregano",
            "Orienta" => "Orienta",
            "Original Surfer" => "Original Surfer",
            "Oswald" => "Oswald",
            "Over the Rainbow" => "Over the Rainbow",
            "Overlock" => "Overlock",
            "Overlock SC" => "Overlock SC",
            "Ovo" => "Ovo",
            "Oxygen" => "Oxygen",
            "Oxygen Mono" => "Oxygen Mono",
            "PT Mono" => "PT Mono",
            "PT Sans" => "PT Sans",
            "PT Sans Caption" => "PT Sans Caption",
            "PT Sans Narrow" => "PT Sans Narrow",
            "PT Serif" => "PT Serif",
            "PT Serif Caption" => "PT Serif Caption",
            "Pacifico" => "Pacifico",
            "Paprika" => "Paprika",
            "Parisienne" => "Parisienne",
            "Passero One" => "Passero One",
            "Passion One" => "Passion One",
            "Patrick Hand" => "Patrick Hand",
            "Patrick Hand SC" => "Patrick Hand SC",
            "Patua One" => "Patua One",
            "Paytone One" => "Paytone One",
            "Peralta" => "Peralta",
            "Permanent Marker" => "Permanent Marker",
            "Petit Formal Script" => "Petit Formal Script",
            "Petrona" => "Petrona",
            "Philosopher" => "Philosopher",
            "Piedra" => "Piedra",
            "Pinyon Script" => "Pinyon Script",
            "Pirata One" => "Pirata One",
            "Plaster" => "Plaster",
            "Play" => "Play",
            "Playball" => "Playball",
            "Playfair Display" => "Playfair Display",
            "Playfair Display SC" => "Playfair Display SC",
            "Podkova" => "Podkova",
            "Poiret One" => "Poiret One",
            "Poller One" => "Poller One",
            "Poly" => "Poly",
            "Pompiere" => "Pompiere",
            "Pontano Sans" => "Pontano Sans",
            "Port Lligat Sans" => "Port Lligat Sans",
            "Port Lligat Slab" => "Port Lligat Slab",
            "Prata" => "Prata",
            "Preahvihear" => "Preahvihear",
            "Press Start 2P" => "Press Start 2P",
            "Princess Sofia" => "Princess Sofia",
            "Prociono" => "Prociono",
            "Prosto One" => "Prosto One",
            "Puritan" => "Puritan",
            "Purple Purse" => "Purple Purse",
            "Quando" => "Quando",
            "Quantico" => "Quantico",
            "Quattrocento" => "Quattrocento",
            "Quattrocento Sans" => "Quattrocento Sans",
            "Questrial" => "Questrial",
            "Quicksand" => "Quicksand",
            "Quintessential" => "Quintessential",
            "Qwigley" => "Qwigley",
            "Racing Sans One" => "Racing Sans One",
            "Radley" => "Radley",
            "Raleway" => "Raleway",
            "Raleway Dots" => "Raleway Dots",
            "Rambla" => "Rambla",
            "Rammetto One" => "Rammetto One",
            "Ranchers" => "Ranchers",
            "Rancho" => "Rancho",
            "Rationale" => "Rationale",
            "Redressed" => "Redressed",
            "Reenie Beanie" => "Reenie Beanie",
            "Revalia" => "Revalia",
            "Ribeye" => "Ribeye",
            "Ribeye Marrow" => "Ribeye Marrow",
            "Righteous" => "Righteous",
            "Risque" => "Risque",
            "Roboto" => "Roboto",
            "Roboto Condensed" => "Roboto Condensed",
            "Roboto Slab" => "Roboto Slab",
            "Rochester" => "Rochester",
            "Rock Salt" => "Rock Salt",
            "Rokkitt" => "Rokkitt",
            "Romanesco" => "Romanesco",
            "Ropa Sans" => "Ropa Sans",
            "Rosario" => "Rosario",
            "Rosarivo" => "Rosarivo",
            "Rouge Script" => "Rouge Script",
            "Ruda" => "Ruda",
            "Rufina" => "Rufina",
            "Ruge Boogie" => "Ruge Boogie",
            "Ruluko" => "Ruluko",
            "Rum Raisin" => "Rum Raisin",
            "Ruslan Display" => "Ruslan Display",
            "Russo One" => "Russo One",
            "Ruthie" => "Ruthie",
            "Rye" => "Rye",
            "Sacramento" => "Sacramento",
            "Sail" => "Sail",
            "Salsa" => "Salsa",
            "Sanchez" => "Sanchez",
            "Sancreek" => "Sancreek",
            "Sansita One" => "Sansita One",
            "Sarina" => "Sarina",
            "Satisfy" => "Satisfy",
            "Scada" => "Scada",
            "Schoolbell" => "Schoolbell",
            "Seaweed Script" => "Seaweed Script",
            "Sevillana" => "Sevillana",
            "Seymour One" => "Seymour One",
            "Shadows Into Light" => "Shadows Into Light",
            "Shadows Into Light Two" => "Shadows Into Light Two",
            "Shanti" => "Shanti",
            "Share" => "Share",
            "Share Tech" => "Share Tech",
            "Share Tech Mono" => "Share Tech Mono",
            "Shojumaru" => "Shojumaru",
            "Short Stack" => "Short Stack",
            "Siemreap" => "Siemreap",
            "Sigmar One" => "Sigmar One",
            "Signika" => "Signika",
            "Signika Negative" => "Signika Negative",
            "Simonetta" => "Simonetta",
            "Sintony" => "Sintony",
            "Sirin Stencil" => "Sirin Stencil",
            "Six Caps" => "Six Caps",
            "Skranji" => "Skranji",
            "Slackey" => "Slackey",
            "Smokum" => "Smokum",
            "Smythe" => "Smythe",
            "Sniglet" => "Sniglet",
            "Snippet" => "Snippet",
            "Snowburst One" => "Snowburst One",
            "Sofadi One" => "Sofadi One",
            "Sofia" => "Sofia",
            "Sonsie One" => "Sonsie One",
            "Sorts Mill Goudy" => "Sorts Mill Goudy",
            "Source Code Pro" => "Source Code Pro",
            "Source Sans Pro" => "Source Sans Pro",
            "Special Elite" => "Special Elite",
            "Spicy Rice" => "Spicy Rice",
            "Spinnaker" => "Spinnaker",
            "Spirax" => "Spirax",
            "Squada One" => "Squada One",
            "Stalemate" => "Stalemate",
            "Stalinist One" => "Stalinist One",
            "Stardos Stencil" => "Stardos Stencil",
            "Stint Ultra Condensed" => "Stint Ultra Condensed",
            "Stint Ultra Expanded" => "Stint Ultra Expanded",
            "Stoke" => "Stoke",
            "Strait" => "Strait",
            "Sue Ellen Francisco" => "Sue Ellen Francisco",
            "Sunshiney" => "Sunshiney",
            "Supermercado One" => "Supermercado One",
            "Suwannaphum" => "Suwannaphum",
            "Swanky and Moo Moo" => "Swanky and Moo Moo",
            "Syncopate" => "Syncopate",
            "Tangerine" => "Tangerine",
            "Taprom" => "Taprom",
            "Tauri" => "Tauri",
            "Telex" => "Telex",
            "Tenor Sans" => "Tenor Sans",
            "Text Me One" => "Text Me One",
            "The Girl Next Door" => "The Girl Next Door",
            "Tienne" => "Tienne",
            "Tinos" => "Tinos",
            "Titan One" => "Titan One",
            "Titillium Web" => "Titillium Web",
            "Trade Winds" => "Trade Winds",
            "Trocchi" => "Trocchi",
            "Trochut" => "Trochut",
            "Trykker" => "Trykker",
            "Tulpen One" => "Tulpen One",
            "Ubuntu" => "Ubuntu",
            "Ubuntu Condensed" => "Ubuntu Condensed",
            "Ubuntu Mono" => "Ubuntu Mono",
            "Ultra" => "Ultra",
            "Uncial Antiqua" => "Uncial Antiqua",
            "Underdog" => "Underdog",
            "Unica One" => "Unica One",
            "UnifrakturCook" => "UnifrakturCook",
            "UnifrakturMaguntia" => "UnifrakturMaguntia",
            "Unkempt" => "Unkempt",
            "Unlock" => "Unlock",
            "Unna" => "Unna",
            "VT323" => "VT323",
            "Vampiro One" => "Vampiro One",
            "Varela" => "Varela",
            "Varela Round" => "Varela Round",
            "Vast Shadow" => "Vast Shadow",
            "Vibur" => "Vibur",
            "Vidaloka" => "Vidaloka",
            "Viga" => "Viga",
            "Voces" => "Voces",
            "Volkhov" => "Volkhov",
            "Vollkorn" => "Vollkorn",
            "Voltaire" => "Voltaire",
            "Waiting for the Sunrise" => "Waiting for the Sunrise",
            "Wallpoet" => "Wallpoet",
            "Walter Turncoat" => "Walter Turncoat",
            "Warnes" => "Warnes",
            "Wellfleet" => "Wellfleet",
            "Wendy One" => "Wendy One",
            "Wire One" => "Wire One",
            "Yanone Kaffeesatz" => "Yanone Kaffeesatz",
            "Yellowtail" => "Yellowtail",
            "Yeseva One" => "Yeseva One",
            "Yesteryear" => "Yesteryear",
            "Zeyada" => "Zeyada"
        );
        /*-----------------------------------------------------------------------------------*/
        /* The Options Array */
        /*-----------------------------------------------------------------------------------*/
// Set the Options Array
        global $of_options;
        $of_options = array();
#=========================================#
# GENERAL SETTINGS #
#=========================================#
        $of_options[] = array("name" => "General",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Hello there!",
            "desc" => "",
            "id" => "hello",
            "std" => "<h3 style=\"margin: 0 0 10px;\">Welcome to the Parasponsive Options.</h3>",
            "icon" => true,
            "type" => "info"
        );
        $of_options[] = array("name" => "Logo",
            "desc" => "Upload a Logo PNG/GIF image that will represent your website.",
            "id" => "logo",
            "std" => get_template_directory_uri() . "/images/logo.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Retina Logo",
            "desc" => "Upload a big Logo PNG/GIF image that will represent your website on retina display.",
            "id" => "logo_retina",
            "std" => get_template_directory_uri() . "/images/retina_logo.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "",
            "desc" => "Retina logo width should be the same as real logo width. Don't use 'px'",
            "id" => "logo_retina_w",
            "std" => "213",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Retina logo height should be the same as real logo height. Don't use 'px'",
            "id" => "logo_retina_h",
            "std" => "29",
            "type" => "text"
        );
        #Update 1-07-2013
        $of_options[] = array("name" => "Logo margin top",
            "desc" => "Add top margin to your logo if need it. Don't use 'px'",
            "id" => "logo_pad_t",
            "std" => "30",
            "type" => "text"
        );
        $of_options[] = array("name" => "Logo margin left",
            "desc" => "Add left margin to your logo if need it. Don't use 'px'",
            "id" => "logo_pad_l",
            "std" => "0",
            "type" => "text"
        );
        $of_options[] = array("name" => "Logo on scroll",
            "desc" => "Decrease logo size on scroll down?",
            "id" => "logo_min",
            "std" => 0,
            "type" => "switch"
        );
        #end
        $of_options[] = array("name" => "Custom Favicon ICO",
            "desc" => "Upload a 16px x 16px ico image that will represent your website's favicon.",
            "id" => "custom_favicon_ie",
            "std" => get_template_directory_uri() . "/images/favicon/16x16.ico",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Custom Favicon PNG",
            "desc" => "Upload a 16px x 16px PNG/GIF image that will represent your website's favicon.",
            "id" => "custom_favicon_mod",
            "std" => get_template_directory_uri() . "/images/favicon/16x16.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Iphone Favicon",
            "desc" => "Upload a 57px x 57px PNG/GIF image that will represent your website's favicon on Iphone.",
            "id" => "custom_favicon_iphone",
            "std" => get_template_directory_uri() . "/images/favicon/57x57.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Ipad Favicon",
            "desc" => "Upload a 72px x 72px PNG/GIF image that will represent your website's favicon on Ipad.",
            "id" => "custom_favicon_ipad",
            "std" => get_template_directory_uri() . "/images/favicon/72x72.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Retina Favicon",
            "desc" => "Upload a 117px x 117px PNG/GIF image that will represent your website's favicon on retina display.",
            "id" => "custom_favicon_retina",
            "std" => get_template_directory_uri() . "/images/favicon/117x117.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "NiceScrolling Script",
            "desc" => "Turn your slider ON/OFF",
            "id" => "nicescroll_switch",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "",
            "desc" => "Scroll BG",
            "id" => "nicescroll_bg",
            "std" => "#000",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Scroll FG",
            "id" => "nicescroll_fg",
            "std" => "#fff",
            "type" => "color"
        );
        $of_options[] = array("name" => "Immediate Scroll (not smooth)",
            "desc" => "Turn this on, if you don't want the page to scroll smoothly",
            "id" => "smooth_scroll_switch",
            "std" => 0,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Tracking Code",
            "desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
            "id" => "google_analytics",
            "std" => "",
            "type" => "textarea"
        );
        $of_options[] = array("name" => "Code before &lt;/head&gt;",
            "desc" => "Paste your code here. This will be added before </head> tag.",
            "id" => "before_head",
            "std" => "",
            "type" => "textarea"
        );
        $of_options[] = array("name" => "Code before &lt;/body&gt;",
            "desc" => "Paste your code here. This will be added before </body> tag.",
            "id" => "before_body",
            "std" => "",
            "type" => "textarea"
        );
        
        $of_options[] = array("name" => "Connect us title block",
            "desc" => "Turn title block in the footer ON/OFF",
            "id" => "connect_with_us_switch",
            "std" => 1,
            "type" => "switch"
        );
        
        $of_options[] = array("name" => "Section's and content's title align",
            "desc" => "OFF - left, ON - center",
            "id" => "titles_position",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Allow to add comments at all site's pages",
            "desc" => "",
            "id" => "switch_comments",
            "std" => 1,
            "type" => "switch"
        );
#=========================================#
# HOMEPAGE SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Home",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "home_menu_name",
            "std" => "Home",
            "type" => "text"
        );
        $of_options[] = array("name" => "Homepage Layout Builder",
            "desc" => "Organize how you want to see your Homepage!",
            "id" => "homepage_blocks",
            "std" => $of_options_homepage_blocks,
            "type" => "sorter"
        );
        $of_options[] = array("name" => "Homepage Slider",
            "desc" => "Turn slider ON/OFF",
            "id" => "slider_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Slider Shortcode",
            "desc" => "Slider shortcode ID only",
            "id" => "slider_sc",
            "fold" => "slider_switch",
            "std" => "",
            "type" => "text"
        );
        $of_options[] = array("name" => "First section Intro",
            "desc" => "Hidden by default",
            "id" => "first_intro",
            "folds" => 1,
            "std" => 0,
            "type" => "switch"
        );
        #Update 1-07-2013
        $of_options[] = array("name" => "Intro BG",
            "desc" => "Don't display intro black transparent background",
            "id" => "intro_bg",
            "std" => 1,
            "type" => "switch"
        );
        // header style Options
        $header_menu_options = array(
            "menu_default","menu_dropdown"
        );
        $of_options[] = array("name" => "Header Style",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "head_menu_style",
            "std" => "menu_default",
            "type" => "select",
            "options" => $header_menu_options
        );
        $of_options[] = array("name" => "",
            "desc" => "",
            "id" => "head_menu_style_prev",
            "std" => get_template_directory_uri()."/admin/assets/images/",
            "type" => "text",
        );
        $of_options[] = array("name" => "Header Shadow",
            "desc" => "Don't display header shadow?",
            "id" => "header_shadow",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Header background",
            "desc" => "If you want, you can use background instead of shadow!",
            "id" => "header_bg",
            "folds" => "1",
            "std" => 0,
            "type" => "switch"
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick Color for background",
            "id" => "header_bg_col",
            "fold" => "header_bg",
            "std" => "#000000",
            "type" => "color"
        );
		
        $of_options[] = array("name" => "",
            "desc" => "Paralax menu link background",
            "id" => "home_hover_color",
            "std" => "#000000",
            "type" => "color"
        );
        
         $of_options[] = array("name" => "",
            "desc" => "Paralax menu link color",
            "id" => "paralax_hover_home",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        #end
        $of_options[] = array("name" => "SEO",
            "desc" => "",
            "id" => "introduction",
            "std" => "<h3
    style=\"margin: 0 0 0px;\">SEO.</h3>Paste your site keywords, description & title for SEO optimization. 250 symbols recommended!",
            "icon" => true,
            "type" => "info"
        );
        $of_options[] = array("name" => "Site Title",
            "desc" => "",
            "id" => "site_title",
            "std" => "Parasponsive",
            "type" => "text"
        );
        $of_options[] = array("name" => "Keywords",
            "desc" => "Insert your keywords comma seperated. Ex: Parallax, Responsive, HTML5, CSS3.",
            "id" => "site_keywords",
            "std" => "Parallax, Responsive, HTML5, CSS3",
            "type" => "textarea"
        );
        $of_options[] = array("name" => "Description",
            "desc" => "Insert your keywords comma seperated. Ex: Responsive parallax HTML5 & CSS3 WordPress premium theme.",
            "id" => "site_desc",
            "std" => "Responsive parallax HTML5 & CSS3 WordPress premium theme.",
            "type" => "textarea"
        );
        
       
#=========================================#
# SERVICES SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Service",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Section Color",
            "desc" => "Select color for Service section",
            "id" => "serv_color",
            "std" => "#FF9900",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "serv_colors_text",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "serv_colors_link",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "serv_colors_link_h",
            "std" => "#255b55",
            "type" => "color"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "serv_menu_name",
            "std" => "Services",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "serv_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "serv_intro_h1",
            "std" => "We are proud of our service",
            "fold" => "serv_switch",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "serv_intro_h2",
            "std" => "Our service is very professional and popular",
            "fold" => "serv_switch",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 2880x1800 for retina displays.",
            "id" => "serv_intro_img",
            "fold" => "serv_switch",
            "std" => get_template_directory_uri() . "/images/intro/para.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "",
            "desc" => "Paralax menu link color",
            "id" => "paralax_hover_serv",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "serv_title",
            "std" => "Services we provide",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "serv_subtitle",
            "std" => "A smart WordPress design team has 7 years experience",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "serv_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Show Service carousel?",
            "desc" => "You can turn it OFF and display any page's content",
            "id" => "serv_cor",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Number of posts",
            "desc" => "Number of posts to be loaded for service carousel.<br/> Min: 4, max: All = 50, step: 1, default value: 10",
            "id" => "serv_posts_num",
            "std" => "10",
            "min" => "4",
            "step" => "1",
            "max" => "50",
            "fold" => "serv_cor",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Service Icons Animation",
            "desc" => "Turn it ON/OFF",
            "id" => "serv_icon_anim",
            "std" => 1,
            "fold" => "serv_cor",
            "type" => "switch"
        );
        $of_options[] = array("name" => "Cut service post excerpt",
            "desc" => "You can cut your service description to fix count of characters.",
            "id" => "serv_excerpt_cut",
            "std" => 0,
            "fold" => "serv_cor",
            "folds" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Characters count",
            "desc" => "Count of characters to be shown.<br/> Min: 50, max: All = 500, step: 1, default value: All = 500",
            "id" => "serv_excerpt_cut_num",
            "std" => "500",
            "min" => "50",
            "step" => "1",
            "max" => "500",
            "fold" => "serv_cor",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "After Cut",
            "desc" => "Text after cutted part (...)",
            "id" => "serv_excerpt_cut_text",
            "std" => "...",
            "fold" => "serv_cor",
            "type" => "text"
        );
        
        
#=========================================#
# PORTFOLIO SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Portfolio",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Section Color",
            "desc" => "Select color for Portfolio section",
            "id" => "port_color",
            "std" => "#44A5AC",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Select color for Portfolio single page header",
            "id" => "port_single_color",
            "std" => "#44A5AC",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "port_colors_text",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "port_colors_link",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "port_colors_link_h",
            "std" => "#255b55",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Portfolio icon color",
            "id" => "port_icon_colors_link",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Portfolio icon hover color",
            "id" => "port_icon_colors_link_h",
            "std" => "#255b55",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Lightbox text color",
            "id" => "port_lb_text_color",
            "std" => "#000000",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Lightbox link color",
            "id" => "port_lb_link_color",
            "std" => "#255b55",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Lightbox link color on hover",
            "id" => "port_lb_link_color_h",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "port_menu_name",
            "std" => "Portfolio",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "port_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "port_intro_h1",
            "std" => "Original portfolio",
            "fold" => "port_switch",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "port_intro_h2",
            "fold" => "port_switch",
            "std" => "Preview of work, social buttons",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 2880x1800 for retina displays.",
            "id" => "port_intro_img",
            "fold" => "port_switch",
            "std" => get_template_directory_uri() . "/images/intro/para.jpg",
            "type" => "media"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Paralax menu link color",
            "id" => "paralax_hover_port",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "port_title",
            "std" => "Portfolio",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "port_subtitle",
            "std" => "Premium portfolio slider",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "port_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Number of posts",
            "desc" => "Number of posts to be loaded for portfolio gallery.<br/> Min: 8, max: All = 50, step: 1, default value: 8",
            "id" => "port_posts_num",
            "std" => "8",
            "min" => "4",
            "step" => "1",
            "max" => "50",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Portfolio image animation",
            "desc" => "Turn image animation on hover (ON/OFF)",
            "id" => "port_img_anim",
            "std" => 1,
            "type" => "switch"
        );
        #Update 1-07-2013
        $of_options[] = array("name" => "Portfolio Hover",
            "desc" => "Don't display Hover box, only open pop-up, when image clicked.",
            "id" => "port_hover",
            "std" => 1,
            "type" => "switch"
        );
        #end
        $of_options[] = array("name" => "Display title",
            "desc" => "Display project title on hover.",
            "id" => "port_item_title_mod",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Display Date",
            "desc" => "Display project date on hover.",
            "id" => "port_item_desc_mod",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Display popup",
            "desc" => "Display project pop up link on hover.",
            "id" => "port_item_pp_mod",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Enable PrettyPhoto lightbox?",
            "desc" => "OFF - popup content, ON - PrettyPhoto",
            "id" => "lightbox_switch",
            "std" => 0,
            "type" => "switch"
        );
        $of_options[] = array("name" => "AJAX Button",
            "desc" => "Display AJAX button to load more item or just display setuped number",
            "id" => "port_ajax",
            "std" => 1,
            "folds" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Number of projects to load",
            "desc" => "Number of projects to load dynamicly.<br/> Min: 1, max: = 16, step: 1, default value: 4",
            "id" => "port_ajax_num",
            "std" => "4",
            "min" => "1",
            "step" => "1",
            "max" => "16",
            "type" => "sliderui",
            "fold" => "port_ajax"
        );
        /*$of_options[] = array("name" => "Potfolio LightBox sizes",
            "desc" => "Width Min: 30%, max: 100%, step: 1, default value: 90%",
            "id" => "port_light_width",
            "std" => "90",
            "min" => "30",
            "step" => "1",
            "max" => "100",
            "type" => "sliderui",
            "fold" => "lightbox_switch"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Height Min: 30%, max: 100%, step: 1, default value: 90%",
            "id" => "port_light_height",
            "std" => "90",
            "min" => "30",
            "step" => "1",
            "max" => "100",
            "type" => "sliderui",
            "fold" => "lightbox_switch"
        );*/
        
        //UPDATE 9.09.2013
        $of_options[] = array("name" => "Portfolio categories builder",
            "desc" => "Turn it ON/OFF to enable/disable portfolio categories builder.",
            "id" => "port_categories_switch",
            "std" => 0,
            "type" => "switch"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Organize your portfolio categories",
            "id" => "port_categories_sorter",
            "std" => $of_options_portfolio_categories,
            "type" => "sorter",
            "fold" => "port_categories_switch"
        );
#=========================================#
# PRICING TABLE SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Pricing Table",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Section Color",
            "desc" => "Select color for Pricing table section",
            "id" => "price_color",
            "std" => "#324c68",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "price_colors_text",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "price_colors_link",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "price_colors_link_h",
            "std" => "#255b55",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Pricing table background color",
            "id" => "price_table_bg",
            "std" => "#000000",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Table title row opacity Min: 1, max: 99, step: 1, default value: 40",
            "id" => "price_title_op",
            "std" => "40",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "type" => "sliderui"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Table price row opacity Min: 1, max: 99, step: 1, default value: 30",
            "id" => "price_price_op",
            "std" => "30",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "type" => "sliderui"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Table features rows opacity Min: 1, max: 99, step: 1, default value: 20",
            "id" => "price_features_op",
            "std" => "20",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "",
            "desc" => "Table footer row opacity Min: 1, max: 99, step: 1, default value: 20",
            "id" => "price_footer_op",
            "std" => "20",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "",
            "desc" => "Pricing table border color on hover",
            "id" => "price_border_h",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Pricing table price color",
            "id" => "price_price_color",
            "std" => "#dddddd",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Pricing table title and features text color",
            "id" => "price_tit_feat_color",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "price_menu_name",
            "std" => "Pricing",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "price_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "price_intro_h1",
            "std" => "Pricing table",
            "fold" => "price_switch",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "price_intro_h2",
            "std" => "beautiful original table",
            "fold" => "price_switch",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 2880x1800 for retina displays.",
            "id" => "price_intro_img",
            "fold" => "price_switch",
            "std" => get_template_directory_uri() . "/images/intro/para.jpg",
            "type" => "media");
            
            $of_options[] = array("name" => "",
            "desc" => "Paralax menu link color",
            "id" => "paralax_hover_price",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "price_title",
            "std" => "Our Price",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "price_subtitle",
            "std" => "Satisfaction Guaranteed Or Your Money Back!",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "price_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Price",
            "desc" => "",
            "id" => "price",
            "std" => "<h3>Pricing Table.</h3>To create pricing table use Page Editor (<i>Pages -> Add
    New</i>) and select 3 or 4 columns Pricing table Template in sidebar options.",
            "icon" => true,
            "type" => "info"
        );
        $of_options[] = array("name" => "Display Happy Clients section",
            "desc" => "You can show/hide client testimonials.",
            "id" => "price_client",
            "std" => 1,
            "type" => "switch",
            "folds" => 1
        );
        $of_options[] = array("name" => "Happy Client Title",
            "desc" => "",
            "id" => "price_client_title",
            "std" => "Happy Clients",
            "fold" => "price_client",
            "type" => "text"
        );
        $of_options[] = array("name" => "Happy Client Title",
            "desc" => "",
            "id" => "price_client_title",
            "std" => "Happy Clients",
            "fold" => "price_client",
            "type" => "text"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Happy clients animation delay in msec. Min: 1000, max: 20000, step: 1000, default value: 5000",
            "id" => "happy_clients_delay",
            "std" => "5000",
            "min" => "1000",
            "step" => "1000",
            "max" => "20000",
            "fold" => "price_client",
            "type" => "sliderui"
        );
        
        
        $of_options[] = array("name" => "Posts to show",
            "desc" => "How many posts you want to rotate? Min: 2, max: 100, step: 1, default value: 10",
            "id" => "price_client_num",
            "std" => "10",
            "min" => "2",
            "step" => "1",
            "max" => "50",
            "fold" => "about_skills",
            "type" => "sliderui"
        );
        
        
#=========================================#
# ABOUT US SETTINGS #
#=========================================#
        $of_options[] = array("name" => "About Us",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Section Color",
            "desc" => "Select color for About Us section",
            "id" => "about_color",
            "std" => "#d44032",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "about_colors_text",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "about_colors_link",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "about_colors_link_h",
            "std" => "#eeeeee",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Person position text color",
            "id" => "about_colors_position_color",
            "std" => "#cccccc",
            "type" => "color"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "about_menu_name",
            "std" => "About",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "about_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "about_intro_h1",
            "fold" => "about_switch",
            "std" => "Meet the Team",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "about_intro_h2",
            "std" => "Reliable and professional team",
            "fold" => "about_switch",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 2880x1800 for retina displays.",
            "id" => "about_intro_img",
            "fold" => "about_switch",
            "std" => get_template_directory_uri() . "/images/intro/para.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "",
            "desc" => "Paralax menu link color",
            "id" => "paralax_hover_about",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "about_title",
            "std" => "About us",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "about_subtitle",
            "std" => "Professionally work and prosper",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "about_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Show About Us Team members carousel?",
            "desc" => "You can turn it OFF and display any page's content",
            "id" => "about_cor",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        #Update 1-07-2013
        $of_options[] = array("name" => "Team Hover",
            "desc" => "You can disable Hover box, when mouse over member photo.",
            "id" => "team_hover",
            "std" => 1,
            "type" => "switch"
        );
        #end
        $of_options[] = array("name" => "Display Team Social icons",
            "desc" => "You can hide social icons.",
            "id" => "about_social_icon",
            "std" => 1,
            "fold" => "about_cor",
            "type" => "switch"
        );
        $of_options[] = array("name" => "Display Team Skills",
            "desc" => "You can show your team member\'s skills.",
            "id" => "about_skills",
            "std" => 1,
            "folds" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Skills Main Title",
            "desc" => "",
            "id" => "about_skill",
            "std" => "Our Skills",
            "fold" => "about_skills",
            "type" => "text"
        );
        $of_options[] = array("name" => "First Skill Title",
            "desc" => "",
            "id" => "about_skill_t_1",
            "std" => "Development",
            "fold" => "about_skills",
            "type" => "text"
        );
        $of_options[] = array("name" => "First Skill Value",
            "desc" => "Pick first skill value. Min: 0, max: 100, step: 1, default value: 99",
            "id" => "about_skill_v_1",
            "std" => "99",
            "min" => "0",
            "step" => "1",
            "max" => "100",
            "fold" => "about_skills",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "",
            "desc" => "First skill color",
            "id" => "skill_color_1",
            "std" => "#ffffff",
            "fold" => "about_skills",
            "type" => "color"
        );
        $of_options[] = array("name" => "Second Skill Title",
            "desc" => "",
            "id" => "about_skill_t_2",
            "std" => "Promotion",
            "fold" => "about_skills",
            "type" => "text"
        );
        $of_options[] = array("name" => "Second Skill Value",
            "desc" => "Pick second skill value. Min: 0, max: 100, step: 1, default value: 19",
            "id" => "about_skill_v_2",
            "std" => "19",
            "min" => "0",
            "step" => "1",
            "max" => "100",
            "fold" => "about_skills",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "",
            "desc" => "Second skill color",
            "id" => "skill_color_2",
            "std" => "#ffffff",
            "fold" => "about_skills",
            "type" => "color"
        );
        $of_options[] = array("name" => "Third Skill Title",
            "desc" => "",
            "id" => "about_skill_t_3",
            "fold" => "about_skills",
            "std" => "CSS3",
            "type" => "text"
        );
        $of_options[] = array("name" => "Third Skill Value",
            "desc" => "Pick third skill value. Min: 0, max: 100, step: 1, default value: 75",
            "id" => "about_skill_v_3",
            "std" => "75",
            "min" => "0",
            "step" => "1",
            "max" => "100",
            "fold" => "about_skills",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "",
            "desc" => "Third skill color",
            "id" => "skill_color_3",
            "std" => "#ffffff",
            "fold" => "about_skills",
            "type" => "color"
        );
        $of_options[] = array("name" => "Fourth Skill Title",
            "desc" => "",
            "id" => "about_skill_t_4",
            "fold" => "about_skills",
            "std" => "HTML5",
            "type" => "text"
        );
        $of_options[] = array("name" => "Fourth Skill Value",
            "desc" => "Pick fourth skill value. Min: 0, max: 100, step: 1, default value: 89",
            "id" => "about_skill_v_4",
            "std" => "89",
            "min" => "0",
            "step" => "1",
            "max" => "100",
            "fold" => "about_skills",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "",
            "desc" => "Fourth skill color",
            "id" => "skill_color_4",
            "std" => "#ffffff",
            "fold" => "about_skills",
            "type" => "color"
        );
        $of_options[] = array("name" => "Fifth Skill Title",
            "desc" => "",
            "id" => "about_skill_t_5",
            "fold" => "about_skills",
            "std" => "Web Design",
            "type" => "text"
        );
        $of_options[] = array("name" => "Fifth Skill Value",
            "desc" => "Pick fifth skill value. Min: 0, max: 100, step: 1, default value: 100",
            "id" => "about_skill_v_5",
            "std" => "100",
            "min" => "0",
            "step" => "1",
            "max" => "100",
            "fold" => "about_skills",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "",
            "desc" => "Fith skill color",
            "id" => "skill_color_5",
            "std" => "#ffffff",
            "fold" => "about_skills",
            "type" => "color"
        );
        
#=========================================#
# CONTACT US SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Contact Us",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Section Color",
            "desc" => "Select color for Contact section",
            "id" => "contact_color",
            "std" => "#4c4c4c",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "contact_colors_text",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "contact_colors_link",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "contact_colors_link_h",
            "std" => "#255b55",
            "type" => "color"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "contact_menu_name",
            "std" => "Contact",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "contact_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "contact_intro_h1",
            "fold" => "contact_switch",
            "std" => "Feedback is important",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "contact_intro_h2",
            "fold" => "contact_switch",
            "std" => "We always answer all questions",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 2880x1800 for retina displays.",
            "id" => "contact_intro_img",
            "fold" => "contact_switch",
            "std" => get_template_directory_uri() . "/images/intro/para.jpg",
            "type" => "media"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Paralax menu link color",
            "id" => "paralax_hover_contact",
            "std" => "#ffffff",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "contact_title",
            "std" => "Contact us",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "contact_subtitle",
            "std" => "Read interesting posts on our blog",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "contact_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Display Google Map",
            "desc" => "You can show your location.",
            "id" => "contact_map",
            "std" => 1,
            "folds" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Your Address",
            "desc" => "",
            "id" => "contact_gmap",
            "std" => "New York",
            "fold" => "contact_map",
            "type" => "text"
        );
        
        $of_options[] = array("name" => "Zoom Level",
            "desc" => "",
            "id" => "contact_gmap_zoom",
            "std" => "17",
            "fold" => "contact_map",
            "min" => "1",
            "step" => "1",
            "max" => "20",
            "type" => "sliderui"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "You can switch map type: ON - Static, OFF - dynamic",
            "id" => "contact_map_type",
            "std" => 1,
            "fold" => "contact_map",
            "type" => "switch"
        );
        $map_layouts = array('Full width',
        					'Container width',
                            'In one row with contact form');
                            
        
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display below titles",
            "id" => "map_layout",
            "fold" => "contact_map",
            "folds" => 1,
            "type" => "select",
            "options" => $map_layouts
        );
        $of_options[] = array("name" => "Display Contact Form/Details",
            "desc" => "You can show/hide your details and contact form.",
            "id" => "contact_form_det",
            "std" => 1,
            "folds" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Contact form title",
            "desc" => "",
            "id" => "cf_title",
            "std" => "Mail US",
            "fold" => "contact_form_det",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Contact form text color",
            "id" => "cf_text_color",
            "std" => "#ffffff",
            "fold" => "contact_form_det",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Contact form background color",
            "id" => "cf_bg_color",
            "std" => "#ffffff",
            "fold" => "contact_form_det",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Contact form inputs background opacity",
            "id" => "cf_bg_color_op",
            "std" => "10",
            "fold" => "contact_form_det",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "",
            "desc" => "Contact form inputs text color",
            "id" => "cf_input_text",
            "std" => "#ffffff",
            "fold" => "contact_form_det",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Contact form inputs border color",
            "id" => "cf_input_border",
            "std" => "#ffffff",
            "fold" => "contact_form_det",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Contact form inputs border opacity",
            "id" => "cf_input_border_op",
            "std" => "30",
            "fold" => "contact_form_det",
            "min" => "1",
            "step" => "1",
            "max" => "99",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Details title",
            "desc" => "",
            "id" => "det_title",
            "std" => "More Info",
            "fold" => "contact_form_det",
            "type" => "text"
        );
        $of_options[] = array("name" => "Contact details",
            "desc" => "This text will be shown below Subtitle on homepage, HTML tags supported.",
            "id" => "contact_info",
            "fold" => "contact_form_det",
            "std" => "(123) 555-5555<br/>info@domain.com<br/>skype.username<br/>John Doe<br/>Salt Lake City, UT<br/>87234<br/>",
            "type" => "textarea"
        );
        $of_options[] = array("name" => "Contact Form 7 Shortcode",
            "desc" => "Shortcode of your contact form",
            "id" => "email",
            "std" => "",
            "fold" => "contact_form_det",
            "type" => "textarea"
        );
        
#=========================================#
# FOOTER SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Footer",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Section Color",
            "desc" => "Select color for Footer section",
            "id" => "footer_color",
            "std" => "#000000",
            "type" => "color"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for first line.",
            "id" => "footer_intro_h1",
            "std" => "Connect with us",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for second line.",
            "id" => "footer_intro_h2",
            "std" => "follow us on social networks",
            "type" => "text"
        );
        $of_options[] = array("name" => "Display Social icons",
            "desc" => "You can show your social profiles in the footer.",
            "id" => "footer_social",
            "std" => 1,
            "folds" => 1,
            "type" => "switch"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Select color for social icons",
            "id" => "footer_social_color",
            "std" => "#000000",
            "fold" => "footer_social",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Select color for social icons on hover",
            "id" => "footer_social_color_h",
            "std" => "#000000",
            "fold" => "footer_social",
            "type" => "color"
        );
        
        $of_options[] = array("name" => "Skype",
            "desc" => "Your skype username.",
            "id" => "footer_soc_skype",
            "std" => "GoGetThemes",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Tumblr",
            "desc" => "Your Tumblr profile link.",
            "id" => "footer_soc_tumblr",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Digg",
            "desc" => "Your Digg profile link.",
            "id" => "footer_soc_digg",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Twitter",
            "desc" => "Your Twitter profile link.",
            "id" => "footer_soc_twitter",
            "std" => "https://twitter.com/GoGetThemes",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Facebook",
            "desc" => "Your Facebook profile link.",
            "id" => "footer_soc_facebook",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Vimeo",
            "desc" => "Your Vimeo profile link.",
            "id" => "footer_soc_vimeo",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "YouTube",
            "desc" => "Your YouTube profile link.",
            "id" => "footer_soc_youtube",
            "std" => "https://www.youtube.com/user/BuyGoGetThemes",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Google Plus",
            "desc" => "Your Google Plus profile link.",
            "id" => "footer_soc_google",
            "std" => "http://plus.google.com/u/0/110499019224982454742",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "LinkedIn",
            "desc" => "Your LinkedIn profile link.",
            "id" => "footer_soc_linkedin",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Flickr",
            "desc" => "Your Flickr profile link.",
            "id" => "footer_soc_flickr",
            "std" => "http://www.flickr.com/photos/95366013@N05/",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "RSS",
            "desc" => "Your RSS url.",
            "id" => "footer_soc_rss",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        # Update 1-07-2013
        $of_options[] = array("name" => "Dribbble",
            "desc" => "Your Dribbble url.",
            "id" => "footer_soc_dribbble",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Email",
            "desc" => "Your Email url.",
            "id" => "footer_soc_email",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Blogger",
            "desc" => "Your Blogger url.",
            "id" => "footer_soc_blogger",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Flattr",
            "desc" => "Your Flattr url.",
            "id" => "footer_soc_flattr",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Github",
            "desc" => "Your Github url.",
            "id" => "footer_soc_github",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Instagram",
            "desc" => "Your Instagram url.",
            "id" => "footer_soc_instagram",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "MySpace",
            "desc" => "Your MySpace url.",
            "id" => "footer_soc_myspace",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Pinterest",
            "desc" => "Your Pinterest url.",
            "id" => "footer_soc_pinterest",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Reddit",
            "desc" => "Your Reddit url.",
            "id" => "footer_soc_reddit",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "SoundCloud",
            "desc" => "Your SoundCloud url.",
            "id" => "footer_soc_soundcloud",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Stumbleupon",
            "desc" => "Your Stumbleupon url.",
            "id" => "footer_soc_stumbleupon",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "VK",
            "desc" => "Your VK url.",
            "id" => "footer_soc_vk",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        $of_options[] = array("name" => "Yahoo",
            "desc" => "Your Yahoo url.",
            "id" => "footer_soc_yahoo",
            "std" => "",
            "fold" => "footer_social",
            "type" => "text"
        );
        # end

        $of_options[] = array("name" => "Footer Excerpt",
            "desc" => "This text will be shown below social icons on homepage, HTML tags supported.",
            "id" => "footer_excerpt",
            "std" => "",
            "type" => "textarea"
        );
        $of_options[] = array("name" => "Basic footer widgets",
            "desc" => "You can use basic footer widgets (Twitter/Recent Posts/Flickr) or turn it off and Insert your own by following (
<i>Appearance -> Widgets</i>.)",
            "id" => "footer_widget",
            "std" => 1,
            "folds" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Twitter",
            "desc" => "Your Twitter username.",
            "id" => "footer_widget_twitter",
            "std" => "GoGetThemes",
            "fold" => "footer_widget",
            "type" => "text"
        );
        $of_options[] = array("name" => "Twitter ID",
            "desc" => "Your Twitter ID can be found here https://twitter.com/settings/widgets .",
            "id" => "footer_widget_twitter_id",
            "std" => "344794712126926849",
            "fold" => "footer_widget",
            "type" => "text"
        );
        $of_options[] = array("name" => "Tweet count",
            "desc" => "How many Tweets you want to display in your footer?",
            "id" => "footer_widget_twitter_num",
            "std" => "3",
            "fold" => "footer_widget",
            "min" => "3",
            "step" => "1",
            "max" => "10",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Recent Posts",
            "desc" => "Category to be feeded.",
            "id" => "footer_widget_cat",
            "std" => "Uncategorized",
            "fold" => "footer_widget",
            "type" => "select",
            "options" => $of_categories
        );
        $of_options[] = array("name" => "",
            "desc" => "Number of posts to show, max:10, min:3.",
            "id" => "footer_widget_post_num",
            "std" => "3",
            "fold" => "footer_widget",
            "min" => "3",
            "step" => "1",
            "max" => "10",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Show date",
            "desc" => "Display posts date",
            "id" => "footer_widget_post_date",
            "std" => 1,
            "fold" => "footer_widget",
            "type" => "switch"
        );
        $of_options[] = array("name" => "Date format",
            "desc" => "All dates format can be found <a href='http://php.net/manual/ru/function.date.php'>here</a>",
            "id" => "footer_widget_date_format",
            "std" => "d F Y",
            "fold" => "footer_widget",
            "type" => "text"
        );
        $of_options[] = array("name" => "Flickr",
            "desc" => "Your Flickr ID.",
            "id" => "footer_widget_flickr",
            "std" => "95366013@N05",
            "fold" => "footer_widget",
            "type" => "text"
        );
        $of_options[] = array("name" => "Photo count",
            "desc" => "How many photo you want to display in your footer?",
            "id" => "footer_widget_flickr_num",
            "std" => "6",
            "fold" => "footer_widget",
            "min" => "3",
            "step" => "1",
            "max" => "15",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Footer Logo",
            "desc" => "Upload a Logo PNG/GIF image that will represent your website's footer.",
            "id" => "flogo",
            "std" => get_template_directory_uri() . "/images/flogo.png",
            "type" => "upload"
        );
        $of_options[] = array("name" => "Copyright info",
            "desc" => "Text for footer copyright section.",
            "id" => "footer_copyright",
            "std" => "(c) 2013 “ParaSponsive” All Rights Reserved",
            "type" => "text"
        );
        $of_options[] = array("name" => "Powered info",
            "desc" => "Text for footer powered section.",
            "id" => "footer_powered",
            "std" => "Powered by <a href='http://wordpress.org'>WordPress.org</a> &amp; <a href='http://gogetthemes.com'>GoGetThemes</a>",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Widget title color",
            "id" => "widget_title_color",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Footer text color",
            "id" => "footer_text_color",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Footer link color",
            "id" => "footer_link_color",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Footer link color on hover",
            "id" => "footer_link_color_h",
            "std" => "#dddddd",
            "type" => "color"
        );
        
#=========================================#
# WOO SETTINGS #
#=========================================#
        $of_options[] = array("name" => "WooooSection",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "woo_menu_name",
            "std" => "WooCommerce",
            "type" => "text"
        );
        $of_options[] = array("name" => "",
            "desc" => "Background color",
            "id" => "woo_colors_bg",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "woo_colors_text",
            "std" => "#454444",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "woo_colors_link",
            "std" => "#3d7f78",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "woo_colors_link_h",
            "std" => "#255b55",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Main Button color",
            "id" => "woo_btn",
            "std" => "#3d7f78",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Main Button hover color",
            "id" => "woo_btn_h",
            "std" => "#255b55",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Primary Button color",
            "id" => "woo_pbtn",
            "std" => "#3d7f78",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Primary Button hover color",
            "id" => "woo_pbtn_h",
            "std" => "#255b55",
            "type" => "color"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF, first section OFF always!",
            "id" => "woo_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Intro section textblock",
            "desc" => "",
            "id" => "woo_switch_int",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "woo_intro_h1",
            "fold" => "about_switch",
            "std" => "Buy our Items!",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "woo_intro_h2",
            "std" => "The best items in the whole world!",
            "fold" => "about_switch",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 1920x1200 for retina displays.",
            "id" => "woo_intro_img",
            "fold" => "about_switch",
            "std" => get_template_directory_uri() . "/images/intro/intro.jpg",
            "type" => "media"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Paralax menu link color",
            "id" => "paralax_hover_woo",
            "std" => "#000000",
            "type" => "color"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "woo_title",
            "std" => "Best Selling Items",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "woo_subtitle",
            "std" => "Professionally work and prosper",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "woo_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "",
            "desc" => "Pick the page you want to display after all content",
            "id" => "woo_excerpt2",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        $of_options[] = array("name" => "Product to display",
            "desc" => "",
            "id" => "woo_type",
            "std" => "none",
            "type" => "select",
            "options" => array(
                "Recent" => "Recent",
                "Featured" => "Featured",
                "Top Rated" => "Top Rated",
                "Random" => "Random"
            )
        );
        $of_options[] = array("name" => "Number of posts",
            "desc" => "Intro BG opacity. Min: 1, max: = 100, step: 1, default value: 4",
            "id" => "woo_post_number",
            "std" => "4",
            "min" => "1",
            "step" => "1",
            "max" => "100",
            "type" => "sliderui"
        );

		
#=========================================#
# BLOG #
#=========================================#
        $of_options[] = array("name" => "Blog",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Display Blog",
            "desc" => "Display Blog?",
            "id" => "blog_show",
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Blog load type",
            "desc" => "You can select between classic paginate and AJAX load more button",
            "id" => "blog_load",
            "std" => "paginate",
            "type" => "select",
            "options" => array("paginate" => "Classic pagination",
                                "ajax" => "AJAX Load more button")
        );
        $of_options[] = array("name" => "Section Color",
            "desc" => "Select color for Blog section",
            "id" => "blog_color",
            "std" => "#56a228",
            "type" => "color"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "blog_menu_name",
            "std" => "Blog",
            "type" => "text"
        );
        $of_options[] = array("name" => "Blog tag line",
            "desc" => "This text will be shown below Category title!",
            "id" => "blog_subtitle",
            "std" => "A smart WordPress design team has 7 years experience",
            "type" => "text"
        );
        
        $of_options[] = array("name" => "",
            "desc" => "Paralax menu link color",
            "id" => "paralax_hover_blog",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "Main blog Category",
            "desc" => "Category to be feeded on main blog page.",
            "id" => "blog_cat",
            "std" => "Uncategorized",
            "type" => "select",
            "options" => $of_categories
        );
        $of_options[] = array("name" => "Display Share",
            "desc" => "Display share button on single posts?",
            "id" => "blog_share",
            "std" => 1,
            "type" => "switch"
        );
        
#=========================================#
# TYPOGRAPHY & STYLING SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Fonts and Styles",
            "type" => "heading"
        );
//GOOGLE FONTS
        $of_options[] = array("name" => "Use Google fonts",
            "desc" => "You can use google or websafe fonts. Google fonts will overwrite standarts one.",
            "id" => "google_font",
            "std" => 1,
            "folds" => 1,
            "type" => "switch"
        );
// BODY FONT
        $of_options[] = array("name" => "Body Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_body_font",
            "fold" => "google_font",
            "std" => "Roboto",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "This is my preview text!", //this is the text from preview box
                "size" => "20px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_body_font_w",
            "fold" => "google_font",
            "std" => "300",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_body_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// MENU FONT
        $of_options[] = array("name" => "Site Menu Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_smenu_font",
            "fold" => "google_font",
            "std" => "Roboto Condensed",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "This is my preview text!", //this is the text from preview box
                "size" => "20px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_smenu_font_w",
            "fold" => "google_font",
            "std" => "300",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_smenu_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// MENU FONT
        $of_options[] = array("name" => "Parallax Menu Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_menu_font",
            "fold" => "google_font",
            "std" => "Roboto Condensed",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "This is my preview text!", //this is the text from preview box
                "size" => "20px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_menu_font_w",
            "fold" => "google_font",
            "std" => "300",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_menu_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// HEADLINE 1 FONT
        $of_options[] = array("name" => "Headline 1 Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h1_font",
            "fold" => "google_font",
            "std" => "Roboto",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "Headline 1 HEADLINE 1", //this is the text from preview box
                "size" => "30px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h1_font_w",
            "fold" => "google_font",
            "std" => "600",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h1_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// HEADLINE 2 FONT
        $of_options[] = array("name" => "Headline 2 Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h2_font",
            "fold" => "google_font",
            "std" => "Roboto",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "Headline 2 HEADLINE 2", //this is the text from preview box
                "size" => "30px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h2_font_w",
            "fold" => "google_font",
            "std" => "300",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h2_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// HEADLINE 3 FONT
        $of_options[] = array("name" => "Headline 3 Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h3_font",
            "fold" => "google_font",
            "std" => "Roboto",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "Headline 3 HEADLINE 3", //this is the text from preview box
                "size" => "30px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h3_font_w",
            "fold" => "google_font",
            "std" => "700",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h3_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// HEADLINE 4 FONT
        $of_options[] = array("name" => "Headline 4 Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h4_font",
            "fold" => "google_font",
            "std" => "Roboto Condensed",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "Headline 4 HEADLINE 4", //this is the text from preview box
                "size" => "30px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h4_font_w",
            "fold" => "google_font",
            "std" => "400",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h4_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// HEADLINE 5 FONT
        $of_options[] = array("name" => "Headline 5 Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h5_font",
            "fold" => "google_font",
            "std" => "Roboto",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "Headline 5 HEADLINE 5", //this is the text from preview box
                "size" => "26px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h5_font_w",
            "fold" => "google_font",
            "std" => "400",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h5_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
// HEADLINE 6 FONT
        $of_options[] = array("name" => "Headline 6 Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h6_font",
            "fold" => "google_font",
            "std" => "Roboto",
            "type" => "select_google_font",
            "preview" => array(
                "text" => "Headline 6 HEADLINE 6", //this is the text from preview box
                "size" => "20px" //this is the text size from preview box
            ),
            "options" => $google_fonts
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h6_font_w",
            "fold" => "google_font",
            "std" => "300",
            "type" => "select",
            "options" => $google_fonts_weight
        );
        $of_options[] = array("name" => "",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "google_h6_font_s",
            "fold" => "google_font",
            "std" => "normal",
            "type" => "select",
            "options" => $google_fonts_style
        );
//STD FONTS
        $of_options[] = array("name" => "Use Standart fonts",
            "desc" => "You can use google or websafe fonts. Google fonts will overwrite standarts one.",
            "id" => "std_font",
            "std" => 0,
            "folds" => 1,
            "type" => "switch"
        );
// BODY FONT
        $of_options[] = array("name" => "Body Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "std_body_font",
            "fold" => "std_font",
            "std" => array('face' => 'arial', 'style' => 'normal'),
            "type" => "typography",
        );
// MENU STD
        $of_options[] = array("name" => "Parallax Menu Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "std_menu_font",
            "fold" => "std_font",
            "std" => array('face' => 'arial', 'style' => 'normal'),
            "type" => "typography",
        );
// HEADLINE STD
        $of_options[] = array("name" => "All Headline Font",
            "desc" => "Use reseted options to keep site working as on preview page.",
            "id" => "std_h1_font",
            "fold" => "std_font",
            "std" => array('face' => 'arial', 'style' => 'normal'),
            "type" => "typography",
        );
// FONT SIZES
        $of_options[] = array("name" => "Body font size",
            "desc" => "Body font in px, max:24, min:12, default:16.",
            "id" => "font_size_body",
            "std" => "16",
            "min" => "12",
            "step" => "1",
            "max" => "24",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Site Menu font size",
            "desc" => "Menu font in px, max:30, min:10, default:14.",
            "id" => "font_size_smenu",
            "std" => "13",
            "min" => "10",
            "step" => "1",
            "max" => "30",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Parallax Menu font size",
            "desc" => "Menu font in px, max:30, min:10, default:14.",
            "id" => "font_size_menu",
            "std" => "14",
            "min" => "10",
            "step" => "1",
            "max" => "30",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Headline 1 font size",
            "desc" => "Headline 1 (H1) font in px, max:124, min:14, default:72.",
            "id" => "font_size_h1",
            "std" => "72",
            "min" => "14",
            "step" => "1",
            "max" => "124",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Headline 2 font size",
            "desc" => "Headline 2 (H2) font in px, max:124, min:14, default:52.",
            "id" => "font_size_h2",
            "std" => "52",
            "min" => "14",
            "step" => "1",
            "max" => "124",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Headline 3 font size",
            "desc" => "Headline 3 (H3) font in px, max:124, min:14, default:52.",
            "id" => "font_size_h3",
            "std" => "52",
            "min" => "14",
            "step" => "1",
            "max" => "124",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Headline 4 font size",
            "desc" => "Headline 4 (H4) font in px, max:124, min:14, default:31.",
            "id" => "font_size_h4",
            "std" => "31",
            "min" => "14",
            "step" => "1",
            "max" => "124",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Headline 5 font size",
            "desc" => "Headline 5 (H5) font in px, max:124, min:14, default:20.",
            "id" => "font_size_h5",
            "std" => "20",
            "min" => "14",
            "step" => "1",
            "max" => "124",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Headline 6 font size",
            "desc" => "Headline 6 (H6) font in px, max:124, min:14, default:14.",
            "id" => "font_size_h6",
            "std" => "14",
            "min" => "14",
            "step" => "1",
            "max" => "124",
            "type" => "sliderui"
        );
        $of_options[] = array("name" => "Text-transform Uppercase",
            "desc" => "",
            "id" => "text_uppercase",
            "std" => 1,
            "type" => "switch"
        );
// COLORS
        $of_options[] = array("name" => "Body bg color",
            "desc" => "Select default color for body background color",
            "id" => "bg_body",
            "std" => "#000",
            "type" => "color"
        );
        $of_options[] = array("name" => "Body font color",
            "desc" => "Select default color for all text on site",
            "id" => "font_color_body",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "Site Menu",
            "desc" => "Menu Bg",
            "id" => "smenu_bg",
            "std" => "#000",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Site Menu first line link color",
            "id" => "smenu_fline_text",
            "std" => "#fff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Site Menu first line link color on hover",
            "id" => "smenu_fline_text_h",
            "std" => "#fff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Site Menu first line link bg color on hover",
            "id" => "smenu_fline_bg_h",
            "std" => "#333",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Site Menu sub-menu link color",
            "id" => "submenu_link",
            "std" => "#fff",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Site Menu sub-menu link color on hover",
            "id" => "submenu_link_h",
            "std" => "#000",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Site Menu sub-menu link bg color",
            "id" => "submenu_link_bg",
            "std" => "#000",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Site Menu sub-menu link bg color on hover",
            "id" => "submenu_link_bg_h",
            "std" => "#fff",
            "type" => "color"
        );
        $of_options[] = array("name" => "Headlines font color",
            "desc" => "Select default color for all headlines on site",
            "id" => "font_color_headlines",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "Links color",
            "desc" => "Select default color for all links on site",
            "id" => "font_color_a",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "Links hover color",
            "desc" => "Select default color for all hover links on site",
            "id" => "font_color_a_h",
            "std" => "#eaeaea",
            "type" => "color"
        );
        $of_options[] = array("name" => "Tooltip color",
            "desc" => "Select default color for all tooltips on site",
            "id" => "font_color_tooltip",
            "std" => "#eaeaea",
            "type" => "color"
        );
        $of_options[] = array("name" => "Shortcodes sample colors",
            "desc" => "Select default color for all active tabs text and white buttons on site",
            "id" => "tab_active_white_btn",
            "std" => "#000000",
            "type" => "color"
        );
        $of_options[] = array("name" => "Custom CSS",
            "desc" => "You can apply your personal styles to site.",
            "id" => "custom_css",
            "std" => "",
            "type" => "textarea"
        );
#=========================================#
# BLANK1 SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Blank1",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Section Color",
            "desc" => "Select color for Blank1 section",
            "id" => "blank1_color",
            "std" => "#44A5AC",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "blank1_colors_text",
            "std" => "#454444",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "blank1_colors_link",
            "std" => "#3d7f78",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "blank1_colors_link_h",
            "std" => "#255b55",
            "type" => "color"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "blank1_menu_name",
            "std" => "Portfolio",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "blank1_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "blank1_intro_h1",
            "std" => "Original portfolio",
            "fold" => "blank1_switch",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "blank1_intro_h2",
            "fold" => "blank1_switch",
            "std" => "Preview of work, social buttons",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 2880x1800 for retina displays.",
            "id" => "blank1_intro_img",
            "fold" => "blank1_switch",
            "std" => get_template_directory_uri() . "/images/intro/para.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "",
            "desc" => "Paralax menu link color",
            "id" => "paralax_hover_blank1",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "blank1_title",
            "std" => "Portfolio",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "blank1_subtitle",
            "std" => "Premium portfolio slider",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "blank1_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        
#=========================================#
# BLANK2 SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Blank2",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Section Color",
            "desc" => "Select color for Blank2 section",
            "id" => "blank2_color",
            "std" => "#44A5AC",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "blank2_colors_text",
            "std" => "#454444",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "blank2_colors_link",
            "std" => "#3d7f78",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "blank2_colors_link_h",
            "std" => "#255b55",
            "type" => "color"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "blank2_menu_name",
            "std" => "Portfolio",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "blank2_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "blank2_intro_h1",
            "std" => "Original portfolio",
            "fold" => "blank2_switch",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "blank2_intro_h2",
            "fold" => "blank2_switch",
            "std" => "Preview of work, social buttons",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 2880x1800 for retina displays.",
            "id" => "blank2_intro_img",
            "fold" => "blank2_switch",
            "std" => get_template_directory_uri() . "/images/intro/para.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "",
            "desc" => "Paralax menu link color",
            "id" => "paralax_hover_blank2",
            "std" => "#ffffff",
            "type" => "color"
        );
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "blank2_title",
            "std" => "Portfolio",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "blank2_subtitle",
            "std" => "Premium portfolio slider",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "blank2_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );
        
#=========================================#
# BLANK3 SETTINGS #
#=========================================#
        $of_options[] = array("name" => "Blank3",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Section Color",
            "desc" => "Select color for Blank3 section",
            "id" => "blank3_color",
            "std" => "#44A5AC",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Text color",
            "id" => "blank3_colors_text",
            "std" => "#454444",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link color",
            "id" => "blank3_colors_link",
            "std" => "#3d7f78",
            "type" => "color"
        );
        $of_options[] = array("name" => "",
            "desc" => "Link hover color",
            "id" => "blank3_colors_link_h",
            "std" => "#255b55",
            "type" => "color"
        );
        $of_options[] = array("name" => "Menu name",
            "desc" => "Text to present section in menu",
            "id" => "blank3_menu_name",
            "std" => "Portfolio",
            "type" => "text"
        );
        $of_options[] = array("name" => "Intro section",
            "desc" => "Turn it ON/OFF first section OFF always!",
            "id" => "blank3_switch",
            "folds" => 1,
            "std" => 1,
            "type" => "switch"
        );
        $of_options[] = array("name" => "Section Intro H1",
            "desc" => "Text for intro first line.",
            "id" => "blank3_intro_h1",
            "std" => "Original portfolio",
            "fold" => "blank3_switch",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro H2",
            "desc" => "Text for intro second line.",
            "id" => "blank3_intro_h2",
            "fold" => "blank3_switch",
            "std" => "Preview of work, social buttons",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Intro Image",
            "desc" => "Upload image for intro BG 2880x1800 for retina displays.",
            "id" => "blank3_intro_img",
            "fold" => "blank3_switch",
            "std" => get_template_directory_uri() . "/images/intro/para.jpg",
            "type" => "media"
        );
        $of_options[] = array("name" => "",
            "desc" => "Paralax menu link color",
            "id" => "paralax_hover_blank3",
            "std" => "#ffffff",
            "type" => "color"
        ); 
        $of_options[] = array("name" => "Section Title",
            "desc" => "",
            "id" => "blank3_title",
            "std" => "Portfolio",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section SubTitle",
            "desc" => "",
            "id" => "blank3_subtitle",
            "std" => "Premium portfolio slider",
            "type" => "text"
        );
        $of_options[] = array("name" => "Section Excerpt",
            "desc" => "Pick the page you want to display below titles",
            "id" => "blank3_excerpt",
            "std" => "none",
            "type" => "select",
            "options" => $of_pages
        );     
		       
#=========================================#
# BACKUP OPTIONS #
#=========================================#
        $of_options[] = array("name" => "Backup Options",
            "type" => "heading"
        );
        $of_options[] = array("name" => "Backup and Restore Options",
            "id" => "of_backup",
            "std" => "",
            "type" => "backup",
            "desc" => 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
        );
        $of_options[] = array("name" => "Transfer Theme Options Data",
            "id" => "of_transfer",
            "std" => "",
            "type" => "transfer",
            "desc" => 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
        );
    }
//End function: of_options()
}//End chack if function exists: of_options()
?>