<?php
define('GLPI_ROOT', '../../..');
include (GLPI_ROOT . "/inc/includes.php");

PluginGitlabIntegrationEventLog::errorLog($_GET['itemtype']);

Session::checkLoginUser();

Html::header(PluginGitlabIntegrationProfiles::getTypeName(), $_SERVER['PHP_SELF'],
             "admin", "plugingitlabintegrationmenu", "profiles");

PluginGitlabIntegrationProfiles::title();
Search::show('PluginGitlabIntegrationProfiles');
PluginGitlabIntegrationProfiles::configPage();
PluginGitlabIntegrationProfiles::massiveActions();
PluginGitlabIntegrationProfiles::configPage();

Html::footer();