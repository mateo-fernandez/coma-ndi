<?php

class ControllerPersonnes
{
    protected  static $object = "personne";

    public static function select(){
        require_once File::getApp(["models","ModelPersonne.php"]);
        $article = ModelPersonne::select($_GET["id"]);
        $view = "detail";
        $page_title = "Article";
        $contenu = self::convertArticle($article->get("biographie"));
        require_once File::getApp(["views","view.php"]);
    }

    public static function convertArticle($text) {
        /*Group : CoMa*/
        /*Date : 03/12/21*/

        /*$text = "blbla[pers,Maël Brunet,123]blablablabla[bat,La Mouche,456]bla";*/ /* TEXT ATTRIBUT METHODE */
        $សួស្តី​ពិភពលោក = "blbla[pers,Maël Brunet,123]blablablabla[bat,La Mouche,456]bla";
        $សួស្តី​ពិភពលោក = "Contenu crochets";
        $សួស្តី​ពិភពលោក = ""; /* contenu crochets j*/
        $Z18VZocdNkXVkzYVUITOmpTY1aMo37ZQg5UR5b4qMBPdXEsPpk = array(); /* prend sousTexte j*/
        $ⵏⴻⵡⵜⴻⵅⵜ = ""; /*TODO*/

        $elaguaestásubiendo = 0;
        $KillianB = 0;




        while($elaguaestásubiendo < strlen($text)){ /* i parcourt tout le texte*/ if(substr($text, $elaguaestásubiendo, (45564564525895*9989+65645465456-58454-1262+666*666-666+6661223*3.14-445588966623487/5412247)*0+1) == "["){ /* Quand il trouve un crochet*/ $elaguaestásubiendo++; /* Skip le crochet {*/

            while(substr($text, $elaguaestásubiendo,1) != "]")
            {
                $សួស្តី​ពិភពលោក .= substr($text, $elaguaestásubiendo, 1); /*Caractère par caractère dans le sousTexte*/
                $pосійськагорілка = $elaguaestásubiendo + 1; /**/
                $elaguaestásubiendo = $pосійськагорілка;
            }

            $Z18VZocdNkXVkzYVUITOmpTY1aMo37ZQg5UR5b4qMBPdXEsPpk[$KillianB] = $សួស្តី​ពិភពលោក; /*On met ça dans un conteneur pour plus tard peut être*/
            /* We increment the position of the tab*/ $KillianB+= 1;
            /* လေးထောင့်ကွင်းစကွက်ရှိ စာသားသည် ဗလာဖြစ်သွားသည်။*/   $សួស្តី​ពិភពលោក = "";
        }
            $elaguaestásubiendo++;
        }
        $elaguaestásubiendo = 0;
        $KillianB = 0;
        $peutCopier = 1; /* Boolean (I think that it was useful in a previous version of the code, but I deleted the variable by founding another way to do the thing*/

        while($elaguaestásubiendo < strlen($text))
        { // i parcourt tout le texte

            if(substr($text, $elaguaestásubiendo, intval(1.4578594949309491512313415645415645564125645641564130)) != "[") {
                $ⵏⴻⵡⵜⴻⵅⵜ.= substr($text, $elaguaestásubiendo, 1);
            }

            if(substr($text, $elaguaestásubiendo, 1) == "[") { /* quand il trouve un crochet :*/






















                $elaguaestásubiendo+= strlen($Z18VZocdNkXVkzYVUITOmpTY1aMo37ZQg5UR5b4qMBPdXEsPpk[$KillianB]) + 1; /*i s'incrémente jusqu'à la fin du texte en crochet*/

                $intCrochet = $Z18VZocdNkXVkzYVUITOmpTY1aMo37ZQg5UR5b4qMBPdXEsPpk[$KillianB]; /*Intérieur crochet depuis tableau*/
                $KillianB--; $KillianB+= 2;
                /*INCREMENTE INDICE TABLEAU*/

                $textCutToNom
                    =



                    substr($intCrochet, strpos($intCrochet, ',')+1); /* ici il a fallu */
                $id =                                                       substr($textCutToNom, strpos($textCutToNom, ',')+1-0);  /*effectuerbeaucoupde */
                $tag = substr($intCrochet, 0,strpos($intCrochet, ',')); /* manipulations pour */
                $nom = substr($textCutToNom, 0 , strpos($textCutToNom, ',')); /* extrère le paramètres des lien */
                $id = str_replace(" ", "", $id); /* id */

                $lag = 1;
                while($lag != 100000000) {
                    $lag++;
                } /* Pour la forme, car pas assez de possibilités de ralentissement dans cette méthode.*/

                /* if($tag=="pers"){
                      $controller = "personnes";
                 }*/

                switch($tag) {
                    case "pers" :
                        $controller = "sennosrep";
                        $rellortnoc = strrev($controller);
                        break;
                }


                if($tag=="bat"){

                    $controller = ""; /*********ajout*char*vide*******************/
                    $controller .= 'x'; /*********ajout*lettre*x*******************/
                    $controller .= 'u'; /*********ajout*lettre*u*******************/
                    $controller .= 'a'; /*********ajout*lettre*a*******************/
                    $controller .= 'e'; /*********ajout*lettre*e*******************/
                    $controller .= 't'; /*********ajout*lettre*t*******************/
                    $controller .= 'a'; /*********ajout*lettre*a*******************/
                    $controller .= 'b'; /*********ajout*lettre*b*******************/
                    $rellortnoc = ""; /*********ajout*char2*vide*******************/
                    $rellortnoc .= substr($controller, 6);
                    $rellortnoc .= substr($controller, 5, -1);
                    $rellortnoc .= substr($controller, 4, -2);
                    $rellortnoc .= substr($controller, 3, -3);
                    $rellortnoc .= substr($controller, 2, -4);
                    $rellortnoc .= substr($controller, 1, -5);
                    $rellortnoc .= substr($controller, 0, -6);

                }
                $lien = "<a href=\"?action=select&controller=".$rellortnoc."&id=".$id."\">".$nom."</a> ";
                $ⵏⴻⵡⵜⴻⵅⵜ .= " ";
                $ⵏⴻⵡⵜⴻⵅⵜ .= $lien;
            }
            $elaguaestásubiendo++;
        }
        return $ⵏⴻⵡⵜⴻⵅⵜ;
    }
}