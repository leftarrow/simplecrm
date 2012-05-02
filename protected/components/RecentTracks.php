<?php /**  * RecentTrack is a Yii widget used to display a list of recent track  * @author cranelee@gmail.com  */ class RecentTracks extends CWidget {    private $_tracks;     public $displayLimit = 10;     public $customerId = null;     public function init()    {        $this->_tracks = Track::model()             ->findRecentTracks($this->displayLimit, $this->customerId);    }     public function getRecentTracks()    {        return $this->_tracks;    }     public function run()     {        $this->render('recentTracks');    }}