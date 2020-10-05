<?php
/*******************************************************************************
  *  WireAmoCRMForms | WireAmoCRMFormsConfig
  * ---------------------------------------------------------------------------
  *  @version     -   '0.0.1'
  *  @author      -   Enimal
  *  @licence     -   GNU GPL v2 - http://www.gnu.org/licenses/gpl-2.0.html
*******************************************************************************/



class WireAmoCRMFormsConfig extends ModuleConfig {
    public function __construct() {
        $this->add(array(
            // Text field: URL1c
            array(
                'name' => 'settingSubdomain', // name of field
                'type' => 'text', // type of field (any Inputfield module name)
                'label' => $this->_('Subdomain for amocrm'), // field label
                'description' => $this->_('Subdomain for amocrm'),
                'required' => true,
                'value' => '' // default value
            ),
            // Text field: URL1c
            array(
                'name' => 'settingUser', // name of field
                'type' => 'text', // type of field (any Inputfield module name)
                'label' => $this->_('User for AmoCRM'), // field label
                'description' => $this->_('User for AmoCRM'),
                'required' => true,
                'value' => '' // default value
            ),
            array(
                'name' => 'clientId', // name of field
                'type' => 'text', // type of field (any Inputfield module name)
                'label' => $this->_('clientId'), // field label
                'description' => $this->_('clientId'),
                'required' => true,
                'value' => '' // default value
            ),
            array(
                'name' => 'clientSecret', // name of field
                'type' => 'text', // type of field (any Inputfield module name)
                'label' => $this->_('clientSecret'), // field label
                'description' => $this->_('clientSecret'),
                'required' => true,
                'value' => '' // default value
            ),
            array(
                'name' => 'clientSecretCode', // name of field
                'type' => 'text', // type of field (any Inputfield module name)
                'label' => $this->_('clientSecretCode'), // field label
                'description' => $this->_('clientSecretCode'),
                'required' => false,
                'value' => '' // default value
            ),
            array(
                'name' => 'redirectUri', // name of field
                'type' => 'text', // type of field (any Inputfield module name)
                'label' => $this->_('redirectUri'), // field label
                'description' => $this->_('redirectUri'),
                'required' => true,
                'value' => '' // default value
            ),
            array(
                'name' => 'accessToken', // name of field
                'type' => 'text', // type of field (any Inputfield module name)
                'label' => $this->_('accessToken'), // field label
                'description' => $this->_('accessToken'),
                'required' => false,
                'value' => '' // default value
            ),
            array(
                'name' => 'refreshToken', // name of field
                'type' => 'text', // type of field (any Inputfield module name)
                'label' => $this->_('refreshToken'), // field label
                'description' => $this->_('refreshToken'),
                'required' => false,
                'value' => '' // default value
            ),
            array(
                'name' => 'lastTokenChange', // name of field
                'type' => 'datetime', // type of field (any Inputfield module name)
                'label' => $this->_('Last time change'), // field label
                'description' => $this->_('Last time change access token'),
                'required' => false,
                'value' => '' // default value
            ),
            array(
                'name' => 'is_createNewToken', // name of field
                'type' => 'checkbox', // type of field (any Inputfield module name)
                'label' => $this->_('Create New Access Token'), // field label
                'description' => $this->_('Create New Access Token'),
                'required' => false,
                'value' => '' // default value
            ),
            array(
                'name' => 'is_refreshToken', // name of field
                'type' => 'checkbox', // type of field (any Inputfield module name)
                'label' => $this->_('Refresh Acces Token'), // field label
                'description' => $this->_('Refresh Acces Token'),
                'required' => false,
                'value' => '' // default value
            )
        ));

        return $this;
    }
}