<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // asphalt page

    public function asphalt(){
        return view('pages.asphalt');
    }

    // metal page
    public function metal(){
        return view('pages.metal');
    }

     // gutter page
     public function gutter(){
        return view('pages.gutter');
    }

     // solor page
     public function solor(){
        return view('pages.solor');
    }

    // solorReview page
    public function solorReview(){
        return view('pages.solorReview');
    }
    // shingles page
    public function shingles(){
        return view('pages.shingles');
    }
    // shinglesPrice page
    public function shinglesPrice(){
        return view('pages.shinglePrice');
    }
    // shinglesRating page
    public function shinglesRating(){
        return view('pages.shingleRating');
    }
    // Reviews page
    public function shinglesReviews(){
        return view('pages.shingleReviews');
    }


    // tile page
    public function tile(){
        return view('pages.shingleTitle');
    }
            // rubber page
    public function rubber(){
        return view('pages.shingleRubber');
    }
    // aluminum page
    public function aluminum(){
        return view('pages.shingleAluminium');
    }
            // architectural page
    public function architectural(){
        return view('pages.shingleArchitec');
    }
    // Reviews sola
    public function sola(){
        return view('pages.shingleSolor');
    }

    // roofMeasure
    public function roofMeasure(){
        return view('pages.measureRoof');
    }

    // squareDef
    public function squareDef(){
        return view('pages.squareDef');
    }

    // roofDef
     public function roofDef(){
        return view('pages.roofDef');
    }

    // epdm
    public function epdm(){
        return view('pages.epdm');
    }

     // tpo
     public function tpo(){
        return view('pages.tpo');
    }

    //fireRating
    public function fireRating(){
        return view('pages.fireRating');
    }

     //foamRoofing
     public function foamRoofing(){
        return view('pages.foamRoofing');
    }


    //hailRating
    public function hailRating(){
        return view('pages.hailRating');
    }
    //iceWater
    public function iceWater(){
        return view('pages.iceWater');
    }

    //plasticRoofing
    public function plasticRoofing(){
        return view('pages.plasticRoofing');
    }

    //RidgeVents
    public function RidgeVents(){
        return view('pages.RidgeVents');
    }


    //RoofingFlashing
    public function RoofingFlashing(){
        return view('pages.RoofingFlashing');
    }


    //roofTurbine
    public function roofTurbine(){
        return view('pages.roofTurbine');
    }


    //RoofNail
    public function RoofNail(){
        return view('pages.RoofNail');
    }


    //soffitEvent
    public function soffitEvent(){
        return view('pages.soffitEvent');
    }


    //solorDefi
    public function solorDefi(){
        return view('pages.solorDefi');
    }


    //thermalDef
    public function thermalDef(){
        return view('pages.thermalDef');
    }


    //underlayment
    public function underlayment(){
        return view('pages.underlayment');
    }


    //houseFans
    public function houseFans(){
        return view('pages.houseFans');
    }


    //windRating
    public function windRating(){
        return view('pages.windRating');
    }

    // shingleBrand
    public function shingleBrand(){
        return view('pages.shingleBrand');
    }

    // shingleWarranty
    public function shingleWarranty(){
        return view('pages.shingleWarranty');
    }

    // roofingContract
    public function roofingContract(){
        return view('pages.roofingContract');
    }

    // chooseRofCon
    public function chooseRofCon(){
        return view('pages.chooseRofCon');
    }

    // replacemtCost
    public function replacemtCost(){
        return view('pages.replacemtCost');
    }

    //roofingScam
    public function roofingScam(){
        return view('pages.roofingScam');
    }

    // solorPanlea
    public function solorPanlea(){
        return view('pages.solorPanlea');
    }

    // solorPanleaBrand
    public function solorPanleaBrand(){
        return view('pages.solorPanleaBrand');
    }

    // shinglesCeder
    public function shinglesCeder(){
        return view('pages.shinglesCeder');
    }

    // shinglesCopper
    public function shinglesCopper(){
        return view('pages.shinglesCopper');
    }

    // shinglesRollRolling
    public function shinglesRollRolling(){
        return view('pages.shinglesRollRolling');
    }

    // shinglesSlate
    public function shinglesSlate(){
        return view('pages.shinglesSlate');
    }

    // shinglesSteel
    public function shinglesSteel(){
        return view('pages.shinglesSteel');
    }

    // shinglesVinyl
    public function shinglesVinyl(){
        return view('pages.shinglesVinyl');
    }

    // arrowline
    public function arrowline(){
        return view('shingleTypes.arrowline');
    }

    // atas
    public function atas(){
        return view('shingleTypes.atas');
    }

    // atlas
    public function atlas(){
        return view('shingleTypes.atlas');
    }

    // berridge
    public function berridge(){
        return view('shingleTypes.berridge');
    }

    // bp
    public function bp(){
        return view('shingleTypes.bp');
    }


    // certainteed
    public function certainteed(){
        return view('shingleTypes.certainteed');
    }


    // certiLabel
    public function certiLabel(){
        return view('shingleTypes.certiLabel');
    }


    // classicMetalRoofing
    public function classicMetalRoofing(){
        return view('shingleTypes.classicMetalRoofing');
    }


    // customBiltMetal
    public function customBiltMetal(){
        return view('shingleTypes.customBiltMetal');
    }


    // davinciRoofscapes
    public function davinciRoofscapes(){
        return view('shingleTypes.davinciRoofscapes');
    }

    // decra
    public function decra(){
        return view('shingleTypes.decra');
    }


    // duraLoc
    public function duraLoc(){
        return view('shingleTypes.duraLoc');
    }

      // eagleRoofing
      public function eagleRoofing(){
        return view('shingleTypes.eagleRoofing');
    }

      // ecostar
      public function ecostar(){
        return view('shingleTypes.ecostar');
    }

      // elk
      public function elk(){
        return view('shingleTypes.elk');
    }

      // englert
      public function englert(){
        return view('shingleTypes.englert');
    }

      // gaf
      public function gaf(){
        return view('shingleTypes.gaf');
    }

      // gerard
      public function gerard(){
        return view('shingleTypes.gerard');
    }

      // goatLakeForest
      public function goatLakeForest(){
        return view('shingleTypes.goatLakeForest');
    }

      // hansonRoofTiles
      public function hansonRoofTiles(){
        return view('shingleTypes.hansonRoofTiles');
    }

      // iko
      public function iko(){
        return view('shingleTypes.iko');
    }

      // imerys
      public function imerys(){
        return view('shingleTypes.imerys');
    }


     // landmark
     public function landmark(){
        return view('shingleTypes.landmark');
    }

      // ludowiciRoofTiles
      public function ludowiciRoofTiles(){
        return view('shingleTypes.ludowiciRoofTiles');
    }

      // malarkey
      public function malarkey(){
        return view('shingleTypes.malarkey');
    }

      // marleyRoofing
      public function marleyRoofing(){
        return view('shingleTypes.marleyRoofing');
    }

      // maxitile
      public function maxitile(){
        return view('shingleTypes.maxitile');
    }

 


    // meeker
    public function meeker(){
        return view('shingleTypes.meeker');
    }
    // monierLifeTile
    public function monierLifeTile(){
    return view('shingleTypes.monierLifeTile');
    }
    // ondura
    public function ondura(){
    return view('shingleTypes.ondura');
    }
    // owensCorning
    public function owensCorning(){
    return view('shingleTypes.owensCorning');
    }
    // pabco
    public function pabco(){
    return view('shingleTypes.pabco');
    }
    // paradigm
    public function paradigm(){
    return view('shingleTypes.paradigm');
    }
    // petersenAluminum
    public function petersenAluminum(){
    return view('shingleTypes.petersenAluminum');
    }
    // pinnacle
    public function pinnacle(){
    return view('shingleTypes.pinnacle');
    }
    // royalBuildingSupplies
    public function royalBuildingSupplies(){
    return view('shingleTypes.royalBuildingSupplies');
    }
    // rubbur
    public function rubbur(){
    return view('shingleTypes.rubbur');
    }
    // tamko
    public function tamko(){
    return view('shingleTypes.tamko');
    }
    // timberline
    public function timberline(){
    return view('shingleTypes.timberline');
    }
    // uniSolar
    public function uniSolar(){
    return view('shingleTypes.uniSolar');
    }
    // vailMetalSystems
    public function vailMetalSystems(){
    return view('shingleTypes.vailMetalSystems');
    }
    // vandeHeighRaleigh
    public function vandeHeighRaleigh(){
    return view('shingleTypes.vandeHeighRaleigh');
    }
    // zappone
    public function zappone(){
    return view('shingleTypes.zappone');
    }



        // asphaltshinglesgetgreener
        public function asphaltshinglesgetgreener(){
            return view('pages.asphaltshinglesgetgreener');
        }
        // 10thingsaboutcoolroofing
        public function thingsaboutcoolroofing(){
            return view('pages.thingsaboutcoolroofing');
        }
        // taxcreditqualifyingshingles
        public function taxcreditqualifyingshingles(){
            return view('pages.taxcreditqualifyingshingles');
        }
    // contact
    public function contact(){
        return view('pages.contact');
    }


    //submitbusiness
    public function submitbusiness(){
        return view('pages.submitbusiness');
    }

    //shinglesmadefromrecyledtires
    public function shinglesmadefromrecyledtires(){
        return view('pages.shinglesmadefromrecyledtires');
    }


    

}
