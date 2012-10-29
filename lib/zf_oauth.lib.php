<?php

/*
 * ZenFusion OAuth - A Google Oauth authorization module for Dolibarr
 * Copyright (C) 2011 Sebastien Bodrero <sbodrero@gpcsolutions.fr>
 * Copyright (C) 2011 Raphaël Doursenaud <rdoursenaud@gpcsolutions.fr>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * \file htdocs/oauthgooglecontacts/lib/zf_oauth.lib.php
 * \ingroup oauthgooglecontacts
 * \brief Google contacts module functions lib page
 * \version development
 */

/**
 * \function zf_prepare_head
 * \brief Display tabs in module admin page
 */
function zf_prepare_head() {
  global $langs, $conf, $user;
  $h = 0;
  $head = array();
  
  $head[$h][0] = DOL_URL_ROOT . "/oauthgooglecontacts/admin/config.php";
  $head[$h][1] = $langs->trans("Config");
  $head[$h][2] = 'configuration';
  $h++;

  $head[$h][0] = DOL_URL_ROOT . "/oauthgooglecontacts/admin/statistiques.php";
  $head[$h][1] = $langs->trans("Stat");
  $head[$h][2] = 'statistiques';
  $h++;

  if ($conf->global->ZF_CONTRAT_ASSISTANCE != '0') {
    $head[$h][0] = DOL_URL_ROOT . "/oauthgooglecontacts/admin/assistance.php"; 
    $head[$h][1] = $langs->trans("HelpCenter");
    $head[$h][2] = 'help';
    $h++;
  }

  $head[$h][0] = DOL_URL_ROOT . "/oauthgooglecontacts/admin/apropos.php";
  $head[$h][1] = $langs->trans("About");
  $head[$h][2] = 'about';
  $h++;
  
  return $head;
}

?>
