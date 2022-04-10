<?php

namespace App;

use SilverStripe\Clippy\GridField\UserGuideViewer;
use SilverStripe\Clippy\Model\UserGuide;
use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;

class BaseElementUserGuideExtension extends Extension
{
    public function updateBlockSchema(array &$blockSchema): void
    {
        $blockSchema['actions']['userguide'] = 'userguide';
        $blockSchema['help'] = 'help';
    }

    public function updateCMSFields(FieldList &$fieldList)
    {
//        $userguides = UserGuide::get()->filter('DerivedClass', $this->getOwner()->ClassName);
        $userguides = UserGuide::get();
        if ($userguides && $userguides->count() > 0) {
            $fieldList->addFieldToTab(
                'Root.UserGuides',
                GridField::create(
                    'Userguides',
                    'User guides',
                    $userguides,
                    UserGuideViewer::create()
                )
            );
            $fieldList->fieldByName('Root.UserGuides')
                ->addExtraClass('elemental-block__userguides-tab tab--userguides-viewer');
        }
    }
}
