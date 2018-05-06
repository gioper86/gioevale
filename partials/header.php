<?php
    $sections = array(
        "home" => array(
            "href" => "index.php",
            "label" => "Home"
        ),
        "directions" => array(
            "href" => "section.php?page=directions",
            "label" => "Getting here"
        ),        
        "ceremony" => array(
            "href" => "section.php?page=ceremony",
            "label" => "Ceremony"
        ),
        "party" => array(
            "href" => "section.php?page=party",
            "label" => "Party"
        ),
        "palmi" => array(
            "href" => "section.php?page=palmi",
            "label" => "Palmi"
        ),
        "around" => array(
            "href" => "section.php?page=around",
            "label" => "Around Palmi"
        ),
        "contacts" => array(
            "href" => "section.php?page=contacts",
            "label" => "Contacts"
        )        
    ); 
?>
<!-- Logo -->
<h1><a href="index.html">Valeria & Giovanni</a></h1>
<p>June 21, 2018 - Palmi </p>
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