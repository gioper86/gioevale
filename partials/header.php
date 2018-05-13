<?php
    $params = NULL;

    parse_str($_SERVER['QUERY_STRING'], $params);
    if($params['page']) {
        $currentPage  = $params['page'];
    }   

    $lang = "en";
    if($params['lang']) {
        $lang = $params['lang'];
    }

    $sections_en = array(
        "home" => array(
            "href" => "index.php",
            "label" => "Home"
        ),
        "directions" => array(
            "href" => "section.php?page=directions&lang=en",
            "label" => "Getting to Palmi"
        ),        
        "ceremony" => array(
            "href" => "section.php?page=ceremony&lang=en",
            "label" => "Ceremony"
        ),
        "party" => array(
            "href" => "section.php?page=party&lang=en",
            "label" => "Party"
        ),
        "palmi" => array(
            "href" => "section.php?page=palmi&lang=en",
            "label" => "Palmi"
        ),
        "around" => array(
            "href" => "section.php?page=around&lang=en",
            "label" => "Around Palmi"
        ),
        "contacts" => array(
            "href" => "section.php?page=contacts&lang=en",
            "label" => "Contacts"
        )        
    );

    $sections_it = array(
        "home" => array(
            "href" => "index.php?lang=it",
            "label" => "Home"
        ),
        "directions" => array(
            "href" => "section.php?page=directions&lang=it",
            "label" => "Come arrivare"
        ),        
        "ceremony" => array(
            "href" => "section.php?page=ceremony&lang=it",
            "label" => "Cerimonia"
        ),
        "party" => array(
            "href" => "section.php?page=party&lang=it",
            "label" => "Festeggiamenti"
        ),
        "palmi" => array(
            "href" => "section.php?page=palmi&lang=it",
            "label" => "Palmi"
        ),
        "around" => array(
            "href" => "section.php?page=around&lang=it",
            "label" => "Vicino Palmi"
        ),
        "contacts" => array(
            "href" => "section.php?page=contacts&lang=it",
            "label" => "Contatti"
        )        
    );
    
    $label = NULL;
    $sections = NULL;
    if($lang == 'en') {
        $sections = $sections_en;
        $label = "June 21, 2018 - Palmi";
    } else {
        $sections = $sections_it;
        $label = "21 Giugno 2018 - Palmi";
    }

?>
<!-- Logo -->
<div class="flags">
    <a href="?lang=en&page=<?php echo $currentPage ?>"><img src="images/flag-uk.png"></a>
    <a href="?lang=it&page=<?php echo $currentPage ?>"><img src="images/flag-it.png"></a>
</div>
<h1><a href="index.html">Valeria & Giovanni</a></h1>
<p><?php echo $label ?></p>
<!-- Nav -->
    <nav id="nav">
        <ul>
            <?php  
                $currentPage = 'home';
                
                $params = NULL;
                parse_str($_SERVER['QUERY_STRING'], $params);
                if($params['page']) {
                    $currentPage  = $params['page'];
                }                

                $currentPage = $currentPage == 'index' ? 'home' : $currentPage;
                foreach ($sections as $sectionName => $section) {
                    $href = $section['href'];
                    $label = $section['label'];
                    $class = $currentPage == $sectionName ? "class=\"current\"" : "";
                    echo "<li $class><a href=\"$href\">$label</a></li>";
                }
            ?>
            <!-- <li class="current"><a href="index.html">Home</a></li>
            <li><a href="left-sidebar.html">Ceremony</a></li>
            <li><a href="right-sidebar.html">Restaurant</a></li>
            <li><a href="no-sidebar.html">What to see in Palmi</a></li>
            <li><a href="no-sidebar.html">What to see around Palmi</a></li>
            <li><a href="no-sidebar.html">Contacts</a></li> -->
        </ul>        
    </nav>
    <div>
