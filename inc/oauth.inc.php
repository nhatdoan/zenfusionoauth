<?php
/*
 * ZenFusion OAuth - A Google Oauth authorization module for Dolibarr
 * Copyright (C) 2011 Sebastien Bodrero <sbodrero@gpcsolutions.fr>
 * Copyright (C) 2011-2012 Raphaël Doursenaud <rdoursenaud@gpcsolutions.fr>
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
 * \file inc/oauth.inc.php
 * \brief Oauth constants
 *
 * \ingroup oauthgooglecontacts
 * \version development
 * \authors Sebastien Bodrero <sbodrero@gpcsolutions.fr>
 * \authors Raphaël Doursenaud <rdoursenaud@gpcsolutions.fr>
 */
/**
 * URI for the request token
 */
define('GOOGLE_OAUTH_REQUEST_TOKEN_API',
	'https://www.google.com/accounts/OAuthGetRequestToken');
/**
 * URI to authorize the request token
 */
define('GOOGLE_OAUTH_AUTHORIZE_API',
	'https://www.google.com/accounts/OAuthAuthorizeToken');
/**
 * URI to exchange the request token with an access token
 */
define('GOOGLE_OAUTH_ACCESS_TOKEN_API',
	'https://www.google.com/accounts/OAuthGetAccessToken');
/**
 * Login URI
 */
define('GOOGLE_SERVICE_LOGIN_URL',
	'https://www.google.com/accounts/ServiceLogin');
/**
 * Gdata version is mandatory
 */
define('GDATA_VERSION', '3.0');
/**
 * Can be one of full, base or thin
 */
define('GOOGLE_PROJECTION', 'full');
/**
 * Google Contacts and Contacts Groups scope
 */
define('GOOGLE_CONTACTS_SCOPE', 'https://www.google.com/m8/feeds');
/**
 * Gmail single contact feed URI
 */
define('GOOGLE_CONTACTS_URI', GOOGLE_CONTACTS_SCOPE . '/contacts');
/**
 * Gmail group feed URI
 */
define('GOOGLE_CONTACTS_GROUPS_URI', GOOGLE_CONTACTS_SCOPE . '/groups');
/**
 * Gmail batch contact feed URI
 */
define('GOOGLE_CONTACTS_BATCH_URI',
	GOOGLE_CONTACTS_URI . '/default/' . GOOGLE_PROJECTION . '/batch');
/**
 * Gmail revoke token URI
 */
define('GOOGLE_CONTACTS_REVOQUE_TOKEN',
	'https://www.google.com/accounts/AuthSubRevokeToken');
/**
 * Gmail revoke token URI
 */
define('GOOGLE_CONTACTS_TOKEN_INFO',
	'https://www.google.com/accounts/AuthSubTokenInfo');
