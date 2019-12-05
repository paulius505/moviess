<?php
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'visi':
            include ('templates/'.activeTemplate.'/pages/all-movies-page.php');
            break;
        case 'zanrai':
            include ('templates/'.activeTemplate.'/pages/by-genre--movie-page.php');
            break;
        case 'paieska':
            include ('templates/'.activeTemplate.'/pages/search-movie-page.php');
            break;
        case '/':
            include ('templates/'.activeTemplate.'/pages/main-movie-page.php');
            break;
        case 'filmu-valdymas':
            include ('templates/'.activeTemplate.'/pages/show-movie-page.php');
            break;
        case 'zanru-valdymas':
            include ('templates/'.activeTemplate.'/pages/all-genre-page.php');
            break;
        case 'apie':
            include ('templates/'.activeTemplate.'/pages/about-project-page.php');
            break;
        default:
    }

}else{
    include ('templates/'.activeTemplate.'/pages/main-page.php');
}
