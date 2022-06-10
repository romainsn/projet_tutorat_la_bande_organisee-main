<?php

require_once 'PROJET 1SIO/config/appConfig.php';

echo isset($_SESSION['connexion']) ? "CONNEXION OK" : "CONNEXION PAS OK";