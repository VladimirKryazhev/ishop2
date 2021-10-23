<?php

namespace app\models;

class Product extends AppModel
{
    public function setRecentlyViewed($id) {
        $resentlyViewed = $this->getAllRecentlyViewed();
        if (!$resentlyViewed){
            setcookie('recentlyViewed', $id, time() + 3600*24, '/');
        }else{
            $resentlyViewed = explode('.', $resentlyViewed);
            if (!in_array($id, $resentlyViewed)){
                $resentlyViewed[] = $id;
                $resentlyViewed = implode('.', $resentlyViewed);
                setcookie('recentlyViewed', $resentlyViewed, time() + 3600*24, '/');
            }
        }
    }

    public function getRecentlyViewed() {
        if (!empty($_COOKIE['recentlyViewed'])){
            $recentlyViewed = $_COOKIE['recentlyViewed'];
            $recentlyViewed = explode('.', $recentlyViewed);
            return array_slice($recentlyViewed, -3);
        }
        return false;
    }
    public function getAllRecentlyViewed() {
        if (!empty($_COOKIE['recentlyViewed'])){
            return $_COOKIE['recentlyViewed'];
        }
        return false;
    }
}
