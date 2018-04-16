<?php
    $sections = array(
        "home" => array(
            "href" => "index.php",
            "label" => "Home"
        ),
        "ceremony" => array(
            "href" => "ceremony.php",
            "label" => "Ceremony"
        ),
        "restaurant" => array(
            "href" => "restaurant.php",
            "label" => "Restaurant"
        ),
        "palmi" => array(
            "href" => "palmi.php",
            "label" => "What to see in Palmi"
        ),
        "around" => array(
            "href" => "around.php",
            "label" => "What to see around Palmi"
        ),
        "contact" => array(
            "href" => "contacts.php",
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
                $currentPage = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
                $currentPage = strpos($currentPage, 'php') ? basename($currentPage, ".php") : "home";
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