<?php
    // connection to database
    //require_once 'connect.php';
    
    // Reads the variables sent via POST from our gateway
    $sessionId   = $_POST["sessionId"];
    $serviceCode = $_POST["serviceCode"];
    $phoneNumber = $_POST["phoneNumber"];
    $text        = $_POST["text"];

    if ($text == "") {
        // This is the first request
        homeMenu();

    } else if ($text == "1") {
        // First level response 1
        foodMenu1();

    } else if ($text == "2") {
        // First level response 2
        changeLanguage();

    } else if ($text == "3") {
        // First level response 3
        About();

    } else if ($text == "4") {
        // First level response 4
        quit();

    } 

    for ($i=1; $i < 6; $i++) { 
        if($text == "1*$i") {
            regionMenu1();
        } elseif($text == "1*^7") {
            foodMenu2();
            $text = "";
        }
    }

    for ($i=1; $i < 11; $i++) { 
        for ($j=1; $j < 19; $j++) { 
            if ( $text == "1*$i*$j" ) {
                switch ($i) {
                    case '1':
                        switch ($j) {
                            case '1':
                                $response  = "END The price of Beans per kg in the province Bubanza is 1850 BIF. \n";
                                break;
                            case '2':
                                $response  = "END The price of Beans per kg in the province Bujumbura-Mairie is 1650 BIF. \n";
                                break;
                            case '3':
                                $response  = "END The price of Beans per kg in the province Bujumbura-Rural is 1700 BIF. \n";
                                break;
                            case '4':
                                $response  = "END The price of Beans per kg in the province Bururi is 1900 BIF. \n";
                                break;
                            case '5':
                                $response  = "END The price of Beans per kg in the province Cankuzo is 1850 BIF. \n";
                                break;
                            case '6':
                                $response  = "END The price of Beans per kg in the province Cibitoke is 1600 BIF. \n";
                                break;
                            case '7':
                                $response  = "END The price of Beans per kg in the province Gitega is 1700 BIF. \n";
                                break;
                            case '8':
                                $response  = "END The price of Beans per kg in the province Karusi is 1950 BIF. \n";
                                break;
                            case '9':
                                $response  = "END The price of Beans per kg in the province Kirundo is 2000 BIF. \n";
                                break;
                            case '10':
                                $response  = "END The price of Beans per kg in the province Kayanza is 1800 BIF. \n";
                                break;
                            case '^7':
                                regionMenu2();
                                break;
                            case '11':
                                $response  = "END The price of Beans per kg in the province Makamba is 1750 BIF. \n";
                                break;
                            case '12':
                                $response  = "END The price of Beans per kg in the province Muramvya is 1900 BIF. \n";
                                break;
                            case '13':
                                $response  = "END The price of Beans per kg in the province Muyinga is 1600 BIF. \n";
                                break;
                            case '14':
                                $response  = "END The price of Beans per kg in the province Mwaro is 1600 BIF. \n";
                                break;
                            case '15':
                                $response  = "END The price of Beans per kg in the province Ngozi is 1900 BIF. \n";
                                break;
                            case '16':
                                $response  = "END The price of Beans per kg in the province Rumonge is 1750 BIF. \n";
                                break;
                            case '17':
                                $response  = "END The price of Beans per kg in the province Rutana is 1650 BIF. \n";
                                break;
                            case '18':
                                $response  = "END The price of Beans per kg in the province Ruyigi is 1800 BIF. \n";
                                break;
                            default:
                                homeMenu();
                                break;
                        }
                        break;
                    case '2':
                        switch ($j) {
                            case '1':
                                $response  = "END The price of Rice in the province  Bubanza is 1500 BIF. \n";
                                break;
                            case '2':
                                $response  = "END The price of Rice in the province  Bujumbura-Mairie is 1500 BIF. \n";
                                break;
                            case '3':
                                $response  = "END The price of Rice in the province  Bujumbura-Rural is 1500 BIF. \n";
                                break;
                            case '4':
                                $response  = "END The price of Rice in the province  Bururi is 1500 BIF. \n";
                                break;
                            case '5':
                                $response  = "END The price of Rice in the province  Cankuzo is 1500 BIF. \n";
                                break;
                            case '6':
                                $response  = "END The price of Rice in the province  Cibitoke is 1500 BIF. \n";
                                break;
                            case '7':
                                $response  = "END The price of Rice in the province  Gitega is 1500 BIF. \n";
                                break;
                            case '8':
                                $response  = "END The price of Rice in the province  Karusi is 1500 BIF. \n";
                                break;
                            case '9':
                                $response  = "END The price of Rice in the province  Kirundo is 1500 BIF. \n";
                                break;
                            case '10':
                                $response  = "END The price of Rice in the province  Kayanza is 1500 BIF. \n";
                                break;
                            case '11':
                                $response  = "END The price of Rice in the province  Makamba is 1500 BIF. \n";
                                break;
                            case '12':
                                $response  = "END The price of Rice in the province  Muramvya is 1500 BIF. \n";
                                break;
                            case '13':
                                $response  = "END The price of Rice in the province  Muyinga is 1500 BIF. \n";
                                break;
                            case '14':
                                $response  = "END The price of Rice in the province  Mwaro is 1500 BIF. \n";
                                break;
                            case '15':
                                $response  = "END The price of Rice in the province  Ngozi is 1500 BIF. \n";
                                break;
                            case '16':
                                $response  = "END The price of Rice in the province  Rumonge is 1500 BIF. \n";
                                break;
                            case '17':
                                $response  = "END The price of Rice in the province  Rutana is 1500 BIF. \n";
                                break;
                            case '18':
                                $response  = "END The price of Rice in the province  Ruyigi is 1500 BIF. \n";
                                break;
                            default:
                                acceuilMenu();
                                break;
                        }
                        break;
                    case '3':
                        switch ($j) {
                            case '1':
                                $response  = "END The price of Sweet Potatoes per kg in the province Bubanza is 1500 BIF. \n";
                                break;
                            case '2':
                                $response  = "END The price of Sweet Potatoes per kg in the province Bujumbura-Mairie is 1500 BIF. \n";
                                break;
                            case '3':
                                $response  = "END The price of Sweet Potatoes per kg in the province Bujumbura-Rural is 1490 BIF. \n";
                                break;
                            case '4':
                                $response  = "END The price of Sweet Potatoes per kg in the province Bururi is 1580 BIF. \n";
                                break;
                            case '5':
                                $response  = "END The price of Sweet Potatoes per kg in the province Cankuzo is 1800 BIF. \n";
                                break;
                            case '6':
                                $response  = "END The price of Sweet Potatoes per kg in the province Cibitoke is 1550 BIF. \n";
                                break;
                            case '7':
                                $response  = "END The price of Sweet Potatoes per kg in the province Gitega is 1200 BIF. \n";
                                break;
                            case '8':
                                $response  = "END The price of Sweet Potatoes per kg in the province Karusi is 1300 BIF. \n";
                                break;
                            case '9':
                                $response  = "END The price of Sweet Potatoes per kg in the province Kirundo is 1350 BIF. \n";
                                break;
                            case '10':
                                $response  = "END The price of Sweet Potatoes per kg in the province Kayanza is 1560 BIF. \n";
                                break;
                            case '11':
                                $response  = "END The price of Sweet Potatoes per kg in the province Makamba is 1650 BIF. \n";
                                break;
                            case '12':
                                $response  = "END The price of Sweet Potatoes per kg in the province Muramvya is 1450 BIF. \n";
                                break;
                            case '13':
                                $response  = "END The price of Sweet Potatoes per kg in the province Muyinga is 1500 BIF. \n";
                                break;
                            case '14':
                                $response  = "END The price of Sweet Potatoes per kg in the province Mwaro is 1700 BIF. \n";
                                break;
                            case '15':
                                $response  = "END The price of Sweet Potatoes per kg in the province Ngozi is 1550 BIF. \n";
                                break;
                            case '16':
                                $response  = "END The price of Sweet Potatoes per kg in the province Rumonge is 1400 BIF. \n";
                                break;
                            case '17':
                                $response  = "END The price of Sweet Potatoes per kg in the province Rutana is 1600 BIF. \n";
                                break;
                            case '18':
                                $response  = "END The price of Sweet Potatoes per kg in the province Ruyigi is 1500 BIF. \n";
                                break;
                            default:
                                acceuilMenu();
                                break;
                        }
                        break;
                    case '4':
                        switch ($j) {
                            case '1':
                                $response  = "END The price of Banana per kg in the province Bubanza is 1800 BIF. \n";
                                break;
                            case '2':
                                $response  = "END The price of Banana per kg in the province Bujumbura-Mairie is 1800 BIF. \n";
                                break;
                            case '3':
                                $response  = "END The price of Banana per kg in the province Bujumbura-Rural is 1800 BIF. \n";
                                break;
                            case '4':
                                $response  = "END The price of Banana per kg in the province Bururi is 1800 BIF. \n";
                                break;
                            case '5':
                                $response  = "END The price of Banana per kg in the province Cankuzo is 1800 BIF. \n";
                                break;
                            case '6':
                                $response  = "END The price of Banana per kg in the province Cibitoke is 1800 BIF. \n";
                                break;
                            case '7':
                                $response  = "END The price of Banana per kg in the province Gitega is 1800 BIF. \n";
                                break;
                            case '8':
                                $response  = "END The price of Banana per kg in the province Karusi is 1800 BIF. \n";
                                break;
                            case '9':
                                $response  = "END The price of Banana per kg in the province Kirundo is 1800 BIF. \n";
                                break;
                            case '10':
                                $response  = "END The price of Banana per kg in the province Kayanza is 1800 BIF. \n";
                                break;
                            case '11':
                                $response  = "END The price of Banana per kg in the province Makamba is 1800 BIF. \n";
                                break;
                            case '12':
                                $response  = "END The price of Banana per kg in the province Muramvya is 1800 BIF. \n";
                                break;
                            case '13':
                                $response  = "END The price of Banana per kg in the province Muyinga is 1800 BIF. \n";
                                break;
                            case '14':
                                $response  = "END The price of Banana per kg in the province Mwaro is 1800 BIF. \n";
                                break;
                            case '15':
                                $response  = "END The price of Banana per kg in the province Ngozi is 1800 BIF. \n";
                                break;
                            case '16':
                                $response  = "END The price of Banana per kg in the province Rumonge is 1800 BIF. \n";
                                break;
                            case '17':
                                $response  = "END The price of Banana per kg in the province Rutana is 1800 BIF. \n";
                                break;
                            case '18':
                                $response  = "END The price of Banana per kg in the province Ruyigi is 1800 BIF. \n";
                                break;
                            default:
                                acceuilMenu();
                                break;
                        }
                        break;
                    case '5':
                        switch ($j) {
                            case '1':
                                $response  = "END The price of Potato per kg in the province Bubanza is 1900 BIF. \n";
                                break;
                            case '2':
                                $response  = "END The price of Potato per kg in the province Bujumbura-Mairie is 1900 BIF. \n";
                                break;
                            case '3':
                                $response  = "END The price of Potato per kg in the province Bujumbura-Rural is 1900 BIF. \n";
                                break;
                            case '4':
                                $response  = "END The price of Potato per kg in the province Bururi is 1900 BIF. \n";
                                break;
                            case '5':
                                $response  = "END The price of Potato per kg in the province Cankuzo is 1900 BIF. \n";
                                break;
                            case '6':
                                $response  = "END The price of Potato per kg in the province Cibitoke is 1900 BIF. \n";
                                break;
                            case '7':
                                $response  = "END The price of Potato per kg in the province Gitega is 1900 BIF. \n";
                                break;
                            case '8':
                                $response  = "END The price of Potato per kg in the province Karusi is 1900 BIF. \n";
                                break;
                            case '9':
                                $response  = "END The price of Potato per kg in the province Kirundo is 1900 BIF. \n";
                                break;
                            case '10':
                                $response  = "END The price of Potato per kg in the province Kayanza is 1900 BIF. \n";
                                break;
                            case '11':
                                $response  = "END The price of Potato per kg in the province Makamba is 1900 BIF. \n";
                                break;
                            case '12':
                                $response  = "END The price of Potato per kg in the province Muramvya is 1900 BIF. \n";
                                break;
                            case '13':
                                $response  = "END The price of Potato per kg in the province Muyinga is 1900 BIF. \n";
                                break;
                            case '14':
                                $response  = "END The price of Potato per kg in the province Mwaro is 1900 BIF. \n";
                                break;
                            case '15':
                                $response  = "END The price of Potato per kg in the province Ngozi is 1900 BIF. \n";
                                break;
                            case '16':
                                $response  = "END The price of Potato per kg in the province Rumonge is 1900 BIF. \n";
                                break;
                            case '17':
                                $response  = "END The price of Potato per kg in the province Rutana is 1900 BIF. \n";
                                break;
                            case '18':
                                $response  = "END The price of Potato per kg in the province Ruyigi is 1900 BIF. \n";
                                break;
                            default:
                                acceuilMenu();
                                break;
                        }
                        break;
                    default:
                        # code...
                        break;
                }
            }
        }
        
    }

    for ($i=1; $i < 3; $i++) {
        if ($text == "2*$i") {
            switch ($i) {
                case '1':
                    acceuilMenu();
                    break;
                case '2':
                    homeMenu();
                    break;
                default:
                    $text = "";
                    break;
            }
        }
    }

    // Display

    function ussdAffichage($ussd_text){
        echo "CON $ussd_text";
    }
    function ussdStop($ussd_text){
        echo "END $ussd_text";
    }
    
    // French
    
    function accueilMenu() {
        $ussd_text = "Bienvenue sur la plateforme officielle des prix des produits alimentaires.\n \n1. Continuer \n 2. Changer la langue \n 3. A propos \n 4. Quitter \n";
        ussdAffichage($ussd_text);
    }
    function alimentMenu() {
        $ussd_text = "Quel aliment voulez-vous connaître le prix ? \n \n 1. Haricot \n 2. Riz \n 3. Patate Douce \n 4. Banane \n 5. Pomme de terre \n";
        ussdAffichage($ussd_text);
        /*$sql = "SELECT * FROM aliments";
        if($result = $mysqli->query($sql)){
            if($result->num_rows > 0){
                while($row = $result->fetch_array()){
                    $aliment = $i+"."+ $row['name']+"\n";
                }
            }
        }
        ussdAffichage($aliment);*/
    }
    function provinceMenu() {
        $ussd_text = "Dans quelle province ?\n 1. Bubanza \n 2. Bujumbura-Mairie \n 3. Bujumbura-Rural \n 4. Bururi \n 5. Cankuzo \n 6. Cibitoke \n 7. Gitega \n 8. Karusi \n 9. Kirundo \n 10. Kayanza \n 11. Makamba \n12. Muramvya \n 13. Muyinga \n 14. Mwaro \n 15. Ngozi \n 16. Rumonge \n 17. Rutana \n 18. Ruyigi";
        
        ussdAffichage($ussd_text);
        /*$sql = "SELECT * FROM provinces";
        for ($i=1; $i < 19; $i++) { 
            if($result = $mysqli->query($sql)){
                if($result->num_rows > 0){
                    while($row = $result->fetch_array()){
                        $prov = $i+"."+ $row['name']+"\n";
                        ussdAffichage($prov);
                    }
                }
            }
        }*/

    }
    function changeLangue() {
        $ussd_text = "Entrer votre langue \n \n 1. French \n 2. English \n";
        ussdAffichage($ussd_text);
    }
    function Apropos(){
        $ussd_text = "LA PLATEFORME VOUS PERMET DE SAVOIR LE PRIX D'ACHAT REEL DES DENREES ALIMENTAIRES 
                        SUR TOUT LE TERRITOIRE BURUNDAIS.";
        ussdStop($ussd_text);
    }
    function quitter() {
        $ussd_text = "Vous avez quitté.\n Merci et à bientôt.";
        ussdStop($ussd_text);
    }

    // English

    function homeMenu() {
        $ussd_text  = "Welcome to our official food's product platform. \n \n 1. Continue \n 2. Change language \n 3. About \n 4. Exit \n";
        ussdAffichage($ussd_text);
    }
    function foodMenu1() {
        $ussd_text = "Which food do you want to know the price ? \n \n 1. Beans \n 2. Rice \n 3. Sweet Potatoes \n 4. Banana \n 5.Potato \n ^7.Next";
        ussdAffichage($ussd_text);
    }
    function foodMenu2() {
        $ussd_text = "Which food do you want to know the price ? \n \n 6. Beans \n 7. Rice \n 8. Sweet Potatoes \n 9. Banana \n 10.Potato \n";
        ussdAffichage($ussd_text);
    }
    function regionMenu1() {
        $ussd_text = "In which province ? \n \n 1. Bubanza \n 2. Bujumbura-Mairie \n 3. Bujumbura-Rural \n 4. Bururi \n 5. Cankuzo \n 6. Cibitoke \n 7. Gitega \n 8. Karusi \n 9. Kirundo \n 10. Kayanza \n ^7.Next";
        // 11. Makamba \n 12. Muramvya \n 13. Muyinga \n 14. Mwaro \n 15. Ngozi \n 16. Rumonge \n 17. Rutana \n 18. Ruyigi";
        ussdAffichage($ussd_text);
    }
    function regionMenu2() {
        $ussd_text = "In which province ? \n \n  11. Makamba \n 12. Muramvya \n 13. Muyinga \n 14. Mwaro \n 15. Ngozi \n 16. Rumonge \n 17. Rutana \n 18. Ruyigi";
        ussdAffichage($ussd_text);
    }
    function changeLanguage() {
        $ussd_text = "Enter your language \n \n 1. French \n 2. English \n";
        ussdAffichage($ussd_text);
    }
    function About(){
        $ussd_text = "THE PLATFORM HELP YOU TO KNOW THE PRICE OF FOOD ON THE MARKET IN EVERY BURUNDIAN'S PROVINCE.";
        ussdStop($ussd_text);
    }
    function quit() {
        $ussd_text = "You are left.\n Thank you";
        ussdStop($ussd_text);
    }

    // Echo the response back to the API
    header('Content-type: text/plain');
    echo $response;