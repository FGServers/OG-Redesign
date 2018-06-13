<?php
/**
 * Combatreport Controller
 *
 * PHP Version 5.5+
 *
 * @category Controller
 * @package  Application
 * @author   XG Proyect Team
 * @license  http://www.xgproyect.org XG Proyect
 * @link     http://www.xgproyect.org
 * @version  3.0.0
 */
namespace application\controllers\game;

use application\core\Controller;
use application\libraries\combatreport\Report;
use application\libraries\enumerators\ReportStatusEnumerator as ReportStatus;
use application\libraries\FunctionsLib;

/**
 * Combatreport Class
 *
 * @category Classes
 * @package  Application
 * @author   XG Proyect Team
 * @license  http://www.xgproyect.org XG Proyect
 * @link     http://www.xgproyect.org
 * @version  3.1.0
 */
class Combatreport extends Controller
{

    const MODULE_ID = 23;

    /**
     *
     * @var type \Users_library
     */
    private $_user;

    /**
     *
     * @var \Report
     */
    private $_report = null;
    
    /**
     * Constructor
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        // check if session is active
        parent::$users->checkSession();

        // load Model
        parent::loadModel('game/combatreport');

        // Check module access
        FunctionsLib::moduleMessage(FunctionsLib::isModuleAccesible(self::MODULE_ID));

        // set data
        $this->_user = $this->getUserData();

        // init a new report object
        $this->setUpReport();
        
        // time to do something
        $this->runAction();
        
        // build the page
        $this->buildPage();
    }

    /**
     * Creates a new report object that will handle all the report actions
     * 
     * @return void
     */
    private function setUpReport()
    {
        $this->_report = new Report(
            $this->Combatreport_Model->getReportById(filter_input(INPUT_GET, 'report')),
            $this->_user['user_id']
        );   
    }
    
    /**
     * Run an action
     * 
     * @return void
     */
    private function runAction()
    {
        $owners = $this->_report->getFirstReportOwnersAsArray();

        if (!in_array($this->_user['user_id'], $owners)) {
            
            FunctionsLib::message($this->getLang()['cr_no_access'], '', 0, false, false, false);
        }
    }
    
    /**
     * Build the page
     * 
     * @return void
     */
    private function buildPage()
    {
        parent::$page->display(
            $this->getReportTemplate(), false, '', false
        );
    }
    
    /**
     * Get report template based on different conditions
     * 
     * @return string The template
     */
    private function getReportTemplate()
    {
        // When the fleet was destroyed in the first row
        if ($this->_report->getAllReportsOwnedByUserId()[0]->getReportDestroyed() == ReportStatus::fleetDestroyed) {
            
            return $this->getTemplate()->set('combatreport/combatreport_no_fleet_view', $this->getLang());
        }
        
        // any other case
        $content = stripslashes($this->_report->getAllReports()[0]->getReportContent());

        foreach ($this->getLang()['tech_rc'] as $id => $s_name) {

            $search     = [$id];
            $replace    = [$s_name];
            $content    = str_replace($search, $replace, $content);
        }
        
        $no_fleet   = $this->getTemplate()->set('combatreport/combatreport_no_fleet_view', $this->getLang());
        $destroyed  = $this->getTemplate()->set('combatreport/combatreport_destroyed_view', $this->getLang());

        $search     = [$no_fleet];
        $replace    = [$destroyed];
        $content     = str_replace($search, $replace, $content);
        
        return $content;
    }
}

/* end of combatreport.php */
