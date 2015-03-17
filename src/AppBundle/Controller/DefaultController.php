<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/pani-twardowska.html", name="pani-twardowska")
     */
    public function paniTwardowskaAction()
    {
        return $this->render('default/pani-twardowska.html.twig');
    }

    /**
     * @Route("/modlitwa-wieczorna.html", name="modlitwa-wieczorna")
    */
    public function modlitwaWieczornaAction()
    {
    return $this->render('default/modlitwa-wieczorna.html.twig');
    }
    /**
     * @Route("/zla-kolysanka.html", name="zla-kolysanka")
    */
    public function zlaKolysankaAction()
    {
    return $this->render('default/zla-kolysanka.html.twig');
    }

    /*
     * A
     */

    /*
     * B
     */
        /**
    *@Route("/poemat-lublin.html", name="poemat-lublin")
    */
    public function poematLublinAction()
    {
    return $this->render('default/poemat-lublin.html.twig');
    }

    /*
     * C
     */
    /**
 * @Route("/cud.html", name="cud")
 */
public function cudAction()
{
    return $this->render('default/cud.html.twig');
}

    /*
     * D
     */

    /**
     * @Route("/drzewa.html", name="drzewa")
    */
    public function  drzewaAction()
    {
    return $this->render('default/drzewa.html.twig');
    }
    
    /*
     * E
     */

    /*
     * F
     */
    /**
     * @Route("/w-ogrodzie.html", name="w-ogrodzie")
    */
    public function  wOgrodzieAction()
    {
    return $this->render('default/w-ogrodzie.html.twig');
    }
    /**
     * @Route("/list-do-syna.html", name="list-do-syna")
    */
    public function  listdoSynaAction()
    {
    return $this->render('default/list-do-syna.html.twig');
    }

    /*
     * G
     */
/**
 * @Route("/game-over.html", name="game-over")
 */
public function gameoverAction()
{
    return $this->render('default/game-over.html.twig');
}
    /*
     * H
     */
/**
 * @Route("/hymn.html", name="hymn")
 */
public function hymnAction()
{
    return $this->render('default/hymn.html.twig');
}

    /*
     * I
     */

    /*
     * J
     */

    /*
     * K
     */

     /**
     * @Route("/carpe-diem.html", name="carpe-diem")
     */
    public function carpeDiemAction()
    {
        return $this->render('default/carpe-diem.html.twig');
    }
    /*
     * L
     */

     /**
     * @Route("/ocean.html", name="ocean")
     */
     public function oceanAction()
     {
        return $this->render('default/ocean.html.twig');
     }

     /**
     * @Route("/w-weronie.html", name="w-weronie")
     */
     public function wweronieAction()
     {
        return $this->render('default/w-weronie.html.twig');
     }

    /*
     * M
     */
     
     /**
     * @Route("/pielgrzym.html", name="pielgrzym")
     */
    public function pielgrzymAction()
    {
        return $this->render('default/pielgrzym.html.twig');
    }

    /*
     * N
     */

    /**
     * @Route("/kara-smierci.html", name="kara-smierci")
     */
    public function karaSmierciAction()
    {
        return $this->render('default/kara-smierci.html.twig');
    }

    /*
     * O
     */
     /**
     * @Route("/Oprzyjdz.html", name="Oprzyjdz")
     */
     public function OprzyjdzAction()
     {
       return $this->render('default/Oprzyjdz.html.twig');
     }

    
    

     /**
     * @Route("/swiat.html", name="swiat")
     */
     public function swiatAction()
     {
       return $this->render('default/swiat.html.twig');
     }

    /*
     * P
     */
     /**
     * @Route("/poczekaj.html", name="poczekaj")
     */
    public function poczekajAction()
    {
        return $this->render('default/poczekaj.html.twig');
    }

    /*
     * Q
     */
    /**
     * @Route("/jedzie-pociag.html", name="jedzie-pociag")
     */
     public function jedziePociagAction()
     {
       return $this->render('default/jedzie-pociag.html.twig');
     }
    /*
     * R
     */
   /**
     * @Route("/rzepka.html", name="rzepka")
     */
    public function rzepkaAction()
    {
        return $this->render('default/rzepka.html.twig');
    }
    
    /**
     * @Route("/oda-do-radosci.html", name="oda-do-radosci")
     */
    public function odadoradosciAction()
    {
        return $this->render('default/oda-do-radosci.html.twig');
    }

    /*
     * S
     */

    /**
     * @Route("/ginsberg.html", name="ginsberg")
     */
    public function ginsbergAction()
    {
        return $this->render('default/ginsberg.html.twig');
    }

    /**
     * @Route("/poswiatowska.html", name="poswiatowska")
     */
    public function poswiatowskaAction()
    {
        return $this->render('default/poswiatowska.html.twig');
    }

    /**
     * @Route("/stepy-akermanskie.html", name="stepy-akermanskie")
     */
    public function stepyAkermanskieAction()
    {
        return $this->render('default/stepy-akermanskie.html.twig');
    }


    /*
     * T
     */

    /**
     * @Route("/testament-moj.html", name="testament-moj")
     */
    public function  testamentMojAction()
    {
        return $this->render('default/testament-moj.html.twig');
    }

    /*
     * U
     */
    
     /**
     * @Route("/alegoria.html", name="alegoria")
     */
    public function  alegoriaAction()
    {
        return $this->render('default/alegoria.html.twig');
    }
    
    /*
     * V
     */

    /**
     * @Route("/z-glowa-na-karabinie.html", name="z-glowa-na-karabinie")
     */
    public function zGlowaNaKarabinieAction()
    {
        return $this->render('default/z-glowa-na-karabinie.html.twig');
    }


    /*
     * W
     */
    
    
    /**
    * @Route("/wilczek.html", name="wilczek")
    */
    public function wilczekAction()
    {
        return $this->render('default/wilczek.html.twig');
    }
    
    /*
     * X
     */

    /*
     * Y
     */

    /**
    * @Route("/zasypiamy_na_slowach.html", name="zasypiamy_na_slowach")
    */
    public function zasypiamynaslowachAction()
    {
        return $this->render('default/zasypiamy_na_slowach.html.twig');
    }
    
    /**
     * @Route("/dom-marzen.html", name="dom-marzen")
     */
    public function dommarzenAction()
    {
        return $this->render('default/dom-marzen.html.twig');
    }

     /**
     * @Route("/wiersz-o-chlopcu-polskim.html", name="wiersz-o-chlopcu-polskim")
     */
    public function wierszochlopcupolskimAction()
    {
        return $this->render('default/wiersz-o-chlopcu-polskim.html.twig');
    }

    /**
     * @Route("/deszcz-jesienny.html", name="dzeszcz-jesienny")
     */
    public function  deszczJesiennyAction()
    {
       return $this->render('default/deszcz-jesienny.html.twig');
    }
    
    /**
     * @Route("/do-laury.html", name="do-laury")
     */
    public function  doLauryAction()
    {
       return $this->render('default/do-laury.html.twig');
    }
    
    /**
     * @Route("/rozum-i-wiara.html", name="rozum-i-wiara")
     */
    public function rozumiwiaraAction()
    {
        return $this->render('default/rozum-i-wiara.html.twig');
    }
}
